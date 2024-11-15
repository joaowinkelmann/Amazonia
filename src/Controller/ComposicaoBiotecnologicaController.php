<?php

namespace App\Controller;

class ComposicaoBiotecnologicaController extends BaseController
{
    public function __construct()
    {
        $composicao_biotecnologica_columns = [
            "id",
            "especie_id",
            "variacao_carboidratos",
            "variacao_proteinas",
            "grupo_substancias",
            "levantamento_bibliografico",
            "biofertilizante"
        ];

        $dados_obrigatorios = [
            "especie_id"
        ];

        parent::__construct('ComposicaoBiotecnologica', $composicao_biotecnologica_columns, $dados_obrigatorios);
    }
}
