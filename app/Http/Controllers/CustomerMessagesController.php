<?php

namespace App\Http\Controllers;
use App\Interfaces\ICustomerMessage;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class CustomerMessagesController extends Controller
{
    //
    private ICustomerMessage $customerMessageRepository;
 
    public function __construct(ICustomerMessage $_customer_message_repository)
    {
        $this->customerMessageRepository = $_customer_message_repository;
    }

    public function index(Request $request): JsonResponse 
    {

        $search = $request->query('search');
        $per_page = $request->query('per_page');

        return response()->json($this->customerMessageRepository->getAllMessages($search,$per_page));
    }

    public function store(Request $request): JsonResponse 
    {
        $attr = $request->validate([
            'Name' => 'required|string|max:255',
            'Email' => 'required|string|email|unique:users,email',
            'Phone' => 'required|string',
            'Company' => 'required|string'
        ]);

        return response()->json($this->customerMessageRepository->addMessage($request));

    }


}
