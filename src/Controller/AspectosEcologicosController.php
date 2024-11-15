<?php

namespace App\Controller;

class AspectosEcologicosController extends BaseController
{
    public function __construct()
    {
        $aspectos_ecologicos_columns = [
            "id",
            "especie_id",
            "grupo_sucessional",
            "importancia_sociologica",
            "regeneracao_natural"
        ];

        $dados_obrigatorios = [
            "especie_id"
        ];

        parent::__construct('AspectosEcologicos', $aspectos_ecologicos_columns, $dados_obrigatorios);
    }
}
