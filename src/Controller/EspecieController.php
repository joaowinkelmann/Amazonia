<?php

namespace App\Controller;

class EspecieController extends BaseController
{
    public function __construct()
    {
        $especie_columns = [
            "id",
            "nome_cientifico",
            "descricao"
        ];

        parent::__construct('Especie', $especie_columns);
    }
}
