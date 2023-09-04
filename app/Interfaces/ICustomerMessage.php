<?php

namespace App\Interfaces;

interface ICustomerMessage
{
    public function getAllMessages($search,$per_page);
    public function getMessageById($messageId);
    public function deleteMessage($messageId);
    public function updateMessageStatus($messageId, array $newDetails);
    public function getReadedMessages();
    public function getUnReadedMessages();
    public function addMessage($message);
}