<?php

namespace App\Controller;

use App\http\Request;

class EspecieController extends BaseController
{
    public function __construct()
    {
        Request::authorization();
        $especie_columns = [
            "id",
            "nome_cientifico",
            "descricao"
        ];

        parent::__construct('Especie', $especie_columns);
    }
}
