<?php

namespace App\Controller;

class AnexosController extends BaseController
{
    public function __construct()
    {
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
