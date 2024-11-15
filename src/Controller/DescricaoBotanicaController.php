<?php

namespace App\Controller;

class DescricaoBotanicaController extends BaseController
{
    public function __construct()
    {
        $descricao_botanica_columns = [
            "id",
            "especie_id",
            "forma_biologica_foliacao",
            "tronco",
            "ramificacao",
            "casca",
            "folhas",
            "inflorescencias",
            "flores",
            "fruto",
            "sementes"
        ];

        $dados_obrigatorios = [
            "especie_id"
        ];

        parent::__construct('DescricaoBotanica', $descricao_botanica_columns, $dados_obrigatorios);
    }
}
