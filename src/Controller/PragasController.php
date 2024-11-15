<?php

namespace App\Controller;

class PragasController extends BaseController
{
    public function __construct()
    {
        $pragas_columns = [
            "id",
            "especie_id",
            "descricao"
        ];

        $dados_obrigatorios = [
            "especie_id"
        ];

        parent::__construct('Pragas', $pragas_columns, $dados_obrigatorios);
    }
}
