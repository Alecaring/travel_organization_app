<?php

namespace App\Services;

use Twilio\Rest\Client as TwilioClient;

class TwilioService
{
    protected $client;
    protected $fromNumber;

    public function __construct()
    {
        $this->client = new TwilioClient(config('services.twilio.sid'), config('services.twilio.token'));
        $this->fromNumber = config('services.twilio.whatsapp_number');
    }

    public function sendWhatsAppMessage($phone, $code)
    {
        $this->client->messages->create(
            "whatsapp:$phone",
            [
                'from' => $this->fromNumber,
                'body' => "Il tuo codice di conferma è: $code"
            ]
        );
    }
}
