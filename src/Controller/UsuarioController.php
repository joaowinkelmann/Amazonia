<?php

namespace App\Controller;

use App\DAO\UsuarioDAO;
use App\http\Request;

class UsuarioController extends BaseController
{
    public function __construct()
    {
        $usuario_columns = [
            "id",
            "nome",
            "email",
            "senha",
            "data_criacao"
        ];

        $dados_obrigatorios = [
            "nome",
            "email",
            "senha"
        ];

        parent::__construct('Usuario', $usuario_columns, $dados_obrigatorios);
    }

    public function login(){
        $body = Request::requestBody();
        
        $usuarioDao = new UsuarioDAO();
        return $usuarioDao->auth($body);
    }
}
