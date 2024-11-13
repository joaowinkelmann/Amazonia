<?php

namespace App\Controller;

use App\http\Response;

class TesteController
{
    public function teste(){
        $body = [
            "erro" => true,
            "sucess" => false,
            "message" => "tyerdtyer"
        ];

        Response::responseMessage($body, 404);
    }
}
