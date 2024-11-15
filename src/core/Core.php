<?php

namespace App\core;

use App\Controller\NaoEncontradoController;
use App\http\Request;
use App\http\Response;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, x-xsrf-token, x-csrftoken, X-Requested-With, Cache-Control");
header("Content-Type: application/json");

class Core
{
    public function run($route)
    {
        $method = Request::method();
        $url = $method . "/";

        if (isset($_GET["path"])) {
            $url = $url . $_GET["path"];
        }

        $rotaEncontrada = false;
        $prefixController = 'App\\Controller\\';

        foreach ($route as $path => $controller) {
            $pattern = '#^' . preg_replace('/{id}/', '(\w+)', $path) . '$#';
            
            if (preg_match($pattern, $url, $matches)) {
                $rotaEncontrada = true;
                array_shift($matches);

                [$currentController, $action] = explode('@', $controller);

                $controller = $prefixController . $currentController;
                $newController = new $controller();

                try {
                    $data = $newController->$action($matches);
                    Response::responseSucess($data, 200);
                } catch (\PDOException $ex) {
                    Response::responseError($ex->errorInfo[2], 500);
                } catch (\Exception $ex){
                    Response::responseError($ex->getMessage(), $ex->getCode());
                }
                
            }
        }
        
        if ($rotaEncontrada == false) {
            $controller = new NaoEncontradoController();
            $controller->naoEncontradoRota();
        }
    }
}
