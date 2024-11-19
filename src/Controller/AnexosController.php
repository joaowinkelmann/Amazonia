<?php

namespace App\Controller;

use App\http\Request;

class AnexosController extends BaseController
{
    public function __construct()
    {
       Request::authorization();
        $anexos_columns = [
            "id",
            "especie_id",
            "imagem",
            "legenda"
        ];

        $dados_obrigatorios = [
            "especie_id"
        ];

        parent::__construct('Anexos', $anexos_columns, $dados_obrigatorios);
    }
}
