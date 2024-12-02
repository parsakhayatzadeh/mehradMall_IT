<?php

namespace App\Http\Services\Message\SMS;

use Melipayamak\MelipayamakApi;

class MeliPayamakService
{

    private $username;
    private $password;
    protected $api;



    public function __construct()
    {
        $this->username = config("sms.usernmae");
        $this->password = config("sms.password");
        $this->api = new MelipayamakApi($this->username, $this->password);
    }

    public function sendSms($to, $message)
    {
        try {
            $sms = $this->api->sms();
            $response = $sms->send($to, config("sms.sender"), $message . "\n" . "لغو ۱۱");
            $result =  json_decode($response);
            echo $result->RetStatus;
            if ($result->RetStatus == 1) {
                return true;
            } else {
                return false;
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
