<?php

namespace App\Controller;

use App\http\Response;

class NaoEncontradoController
{
    public function naoEncontradoRota()
    {
        $body = [
            "erro" => true,
            "sucess" => false,
            "message" => "Rota definida não encontrada",
            "route" => $_SERVER['REQUEST_URI']
        ];

        Response::responseMessage($body, 404);
    }
}
