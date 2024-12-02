<?php

namespace App\Http\Services\Message\SMS;

use App\Http\Interfaces\MessagerInterfaces;

class SmsService implements MessagerInterfaces
{

    private $from;
    private $text;
    private $to;
    private $isFlash = true;
    public function fire() {}
    public function getFrom()
    {
        return $this->from;
    }
    public function setFrom($from)
    {
        $this->from = $from;
    }
    public function getText()
    {
        return   $this->text;
    }
    public function setText($text)
    {
        $this->text = $text;
    }
    public function getTo()
    {
        return   $this->to;
    }
    public function setTo($to)
    {
        $this->to = $to;
    }
}
