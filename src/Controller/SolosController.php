<?php

namespace App\Controller;

class SolosController extends BaseController
{
    public function __construct()
    {
        $solos_columns = [
            "id",
            "especie_id",
            "descricao"
        ];

        $dados_obrigatorios = [
            "especie_id"
        ];

        parent::__construct('Solos', $solos_columns, $dados_obrigatorios);
    }
}
