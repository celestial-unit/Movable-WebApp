<?php
// src/Service/MessageGenerator.php
// src/Service/SmsGenerator.php
namespace App\Service;

use Twilio\Rest\Client;

class SmsGenerator
{
    private $sid;
    private $token;
    private $from;

    public function __construct(string $sid, string $token, string $from)
    {
        $this->sid = $sid;
        $this->token = $token;
        $this->from = $from;
    }

    public function sendSms(string $toNumber, string $name, string $text)
    {
        $client = new Client($this->sid, $this->token);

        $message = "$name vous a envoyé le message suivant: $text";

        $client->messages->create(
            $toNumber,
            [
                'from' => $this->from,
                'body' => $message,
            ]
        );
    }
}




