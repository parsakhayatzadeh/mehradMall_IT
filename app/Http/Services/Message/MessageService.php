<?php

namespace App\Http\Services\Message;

use App\Http\Interfaces\MessagerInterfaces;



class MessageService
{

    private $message;
    public function __construct(MessagerInterfaces $message)
    {
        $this->message = $message;
    }

    public function send()
    {
        return $this->message->fire();
    }
}
