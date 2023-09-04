<?php

namespace App\Repositories;

use App\Interfaces\ICustomerMessage;
use App\Models\CustomerMessage;

class CustomerMessagesRepository implements ICustomerMessage
{
    public function getAllMessages($search,$per_page) 
    {
    
        return response()->json(CustomerMessage::where('Name', 'like', '%'.$search.'%')
        ->orWhere('Email', 'like', '%'.$search.'%')
        ->orWhere('Phone', 'like', '%'.$search.'%')
        ->paginate($per_page)->appends(request()->query()),200);
    }

    public function getMessageById($messageId) 
    {
        return CustomerMessage::findOrFail($messageId);
    }

    public function deleteMessage($messageId) 
    {
        CustomerMessage::destroy($messageId);
    }

    public function updateMessageStatus($messageId, array $newDetails) 
    {
        return CustomerMessage::whereId($messageId)->update($newDetails);
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