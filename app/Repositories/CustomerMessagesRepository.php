<?php

namespace App\Repositories;

use App\Interfaces\ICustomerMessage;
use App\Models\CustomerMessage;
use Illuminate\Support\Facades\DB;

class CustomerMessagesRepository implements ICustomerMessage
{
    public function getAllMessages($search,$per_page) 
    {
        return response()->json(CustomerMessage::select('id', 'Name', 'Email', 'Phone','Company', 'created_at', 'updated_at', 'isReaded')
        ->where(function ($query) use ($search) {
              $query->where(DB::raw('lower(Name)'), 'like', '%' . mb_strtolower($search) . '%')
                    ->orWhere(DB::raw('lower(Email)'), 'like', '%' . mb_strtolower($search) . '%')
                    ->orWhere(DB::raw('lower(Phone)'), 'like', '%' . mb_strtolower($search) . '%');
         })->where('Deleted','==',0)->orderBy('id','desc')
           ->paginate($per_page)
           ->appends(request()->query()),200);

/*
    
        return response()->json(CustomerMessage::where('Deleted',0)
        ->orWhere('Name', 'like', '%'.$search.'%')
        ->orWhere('Email', 'like', '%'.$search.'%')
        ->orWhere('Phone', 'like', '%'.$search.'%')
        ->paginate($per_page)->appends(request()->query()),200);*/
    }

    public function getMessageById($messageId) 
    {
        return CustomerMessage::findOrFail($messageId);
    }

    public function deleteMessage($messageId) 
    {
        $message = CustomerMessage::find($messageId);
        $message->Deleted = 1;
        $message->update();

        return response()->json($messageId,200);
    }

    public function updateMessageStatus($messages) 
    {

        $arr = json_decode($messages, true);

        $arr2=[];

        foreach ($arr as $b) {
            //assign child-array to newly create array variable
            $arr2[] =  ['id'=>$b['id'],'isReaded'=>$b['isReaded']];  
        }

        $messageInstance = new CustomerMessage;
        $index = 'id';

        batch()->update($messageInstance, $arr2, $index);
        return $arr2;
    }

    public function addMessage($message){

        $message = CustomerMessage::create([
            'Name' => $message['Name'],
            'Email' => $message['Email'],
            'Phone' => $message['Phone'],
            'Company' => $message['Company'],
        ]);

        return response()->json($message,200);
    }

    public function getReadedMessages(){
        return CustomerMessage::where('isReaded', 1);
    }

    public function getUnReadedMessages(){
        return CustomerMessage::where('isReaded', 0);
    }

}