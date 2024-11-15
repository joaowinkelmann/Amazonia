<?php

namespace App\Controller;

class OcorrenciaNaturalController extends BaseController
{   
    public function __construct()
    {
        $ocorrencia_natural_columns = [
            "id",
            "especie_id",
            "latitudes",
            "variacao_altitudinal",
            "mapa_imagem"
        ];

        $dados_obrigatorios = [
            "especie_id"
        ];

        parent::__construct('OcorrenciaNatural', $ocorrencia_natural_columns, $dados_obrigatorios);
    }
}
