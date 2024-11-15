<?php

namespace App\Controller;

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

        parent::__construct('Taxonomia', $usuario_columns, $dados_obrigatorios);
    }

    public function login(){
        return ["message" => "Falta fazer"];
    }
}
