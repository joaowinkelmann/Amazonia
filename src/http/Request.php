<?php

namespace App\http;

use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class Request
{
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public static function requestBody()
    {
        return json_decode(file_get_contents("php://input"), true);
    }

    public static function authorization()
    {
            $authorization = getallheaders();
            if (!isset($authorization["Authorization"])) throw new Exception("token não encontrado", 401);

            $authorizationPartials = explode(' ', $authorization['Authorization']);

            $decode = JWT::decode($authorizationPartials[1], new Key($_ENV['KEY'], 'HS256'));
            return $decode;
    }
}
