<?php

namespace App\http;

use Firebase\JWT\JWT;

class Response
{
    public static function responseMessage(array $body = [], int $statusCode = 200)
    {
        header("Content-type: application/json");
        http_response_code($statusCode);

        echo json_encode($body);
    }

    public static function responseSucess($data, int $responseCode)
    {
        self::responseMessage([
            "error" => null,
            "data" => $data
        ], $responseCode);
    }

    public static function responseError(string $error, int $responseCode)
    {
        self::responseMessage([
            "error" => $error,
            "data" => null
        ], $responseCode);
    }

    public static function generateToken($body)
    {   
        $payload = [
            "exp" => time() + 40000,
            "iat" => time(),
            "email" => $body["email"],
            "id_usuario" => $body["id"],
        ];

        $encode = JWT::encode($payload, $_ENV['KEY'], "HS256");

        return $encode;
    }
}
