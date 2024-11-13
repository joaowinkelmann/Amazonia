<?php

namespace App\Models;

class CultivoViveiros
{
    private int $id;
    private int $especie_id;
    private ?string $implantacao_viveiros;
    private ?string $caracteristicas_silviculturais;
    private ?string $habito;
    private ?string $sistemas_plantio;
    private ?string $sistemas_agroflorestais;
    private ?string $crescimento_producao;
    private ?string $numero_sementes_por_kg;
    private ?string $tratamento_pre_germinativo;
    private ?string $longevidade_armazenamento;
    private ?string $germinacao_laboratorio;

    public function __construct(
        int $id = null, int $especie_id = null, ?string $implantacao_viveiros = null, 
        ?string $caracteristicas_silviculturais = null, ?string $habito = null, 
        ?string $sistemas_plantio = null, ?string $sistemas_agroflorestais = null, 
        ?string $crescimento_producao = null, ?string $numero_sementes_por_kg = null, 
        ?string $tratamento_pre_germinativo = null, ?string $longevidade_armazenamento = null, 
        ?string $germinacao_laboratorio = null
    ) {
        $this->id = $id;
        $this->especie_id = $especie_id;
        $this->implantacao_viveiros = $implantacao_viveiros;
        $this->caracteristicas_silviculturais = $caracteristicas_silviculturais;
        $this->habito = $habito;
        $this->sistemas_plantio = $sistemas_plantio;
        $this->sistemas_agroflorestais = $sistemas_agroflorestais;
        $this->crescimento_producao = $crescimento_producao;
        $this->numero_sementes_por_kg = $numero_sementes_por_kg;
        $this->tratamento_pre_germinativo = $tratamento_pre_germinativo;
        $this->longevidade_armazenamento = $longevidade_armazenamento;
        $this->germinacao_laboratorio = $germinacao_laboratorio;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get the value of especie_id
     */ 
    public function getEspecie_id()
    {
        return $this->especie_id;
    }

    /**
     * Set the value of especie_id
     *
     * @return  self
     */ 
    public function setEspecie_id($especie_id)
    {
        $this->especie_id = $especie_id;
    }

    /**
     * Get the value of implantacao_viveiros
     */ 
    public function getImplantacao_viveiros()
    {
        return $this->implantacao_viveiros;
    }

    /**
     * Set the value of implantacao_viveiros
     *
     * @return  self
     */ 
    public function setImplantacao_viveiros($implantacao_viveiros)
    {
        $this->implantacao_viveiros = $implantacao_viveiros;
    }

    /**
     * Get the value of caracteristicas_silviculturais
     */ 
    public function getCaracteristicas_silviculturais()
    {
        return $this->caracteristicas_silviculturais;
    }

    /**
     * Set the value of caracteristicas_silviculturais
     *
     * @return  self
     */ 
    public function setCaracteristicas_silviculturais($caracteristicas_silviculturais)
    {
        $this->caracteristicas_silviculturais = $caracteristicas_silviculturais;
    }

    /**
     * Get the value of habito
     */ 
    public function getHabito()
    {
        return $this->habito;
    }

    /**
     * Set the value of habito
     *
     * @return  self
     */ 
    public function setHabito($habito)
    {
        $this->habito = $habito;
    }

    /**
     * Get the value of sistemas_plantio
     */ 
    public function getSistemas_plantio()
    {
        return $this->sistemas_plantio;
    }

    /**
     * Set the value of sistemas_plantio
     *
     * @return  self
     */ 
    public function setSistemas_plantio($sistemas_plantio)
    {
        $this->sistemas_plantio = $sistemas_plantio;
    }

    /**
     * Get the value of sistemas_agroflorestais
     */ 
    public function getSistemas_agroflorestais()
    {
        return $this->sistemas_agroflorestais;
    }

    /**
     * Set the value of sistemas_agroflorestais
     *
     * @return  self
     */ 
    public function setSistemas_agroflorestais($sistemas_agroflorestais)
    {
        $this->sistemas_agroflorestais = $sistemas_agroflorestais;
    }

    /**
     * Get the value of crescimento_producao
     */ 
    public function getCrescimento_producao()
    {
        return $this->crescimento_producao;
    }

    /**
     * Set the value of crescimento_producao
     *
     * @return  self
     */ 
    public function setCrescimento_producao($crescimento_producao)
    {
        $this->crescimento_producao = $crescimento_producao;
    }

    /**
     * Get the value of numero_sementes_por_kg
     */ 
    public function getNumero_sementes_por_kg()
    {
        return $this->numero_sementes_por_kg;
    }

    /**
     * Set the value of numero_sementes_por_kg
     *
     * @return  self
     */ 
    public function setNumero_sementes_por_kg($numero_sementes_por_kg)
    {
        $this->numero_sementes_por_kg = $numero_sementes_por_kg;
    }

    /**
     * Get the value of tratamento_pre_germinativo
     */ 
    public function getTratamento_pre_germinativo()
    {
        return $this->tratamento_pre_germinativo;
    }

    /**
     * Set the value of tratamento_pre_germinativo
     *
     * @return  self
     */ 
    public function setTratamento_pre_germinativo($tratamento_pre_germinativo)
    {
        $this->tratamento_pre_germinativo = $tratamento_pre_germinativo;
    }

    /**
     * Get the value of longevidade_armazenamento
     */ 
    public function getLongevidade_armazenamento()
    {
        return $this->longevidade_armazenamento;
    }

    /**
     * Set the value of longevidade_armazenamento
     *
     * @return  self
     */ 
    public function setLongevidade_armazenamento($longevidade_armazenamento)
    {
        $this->longevidade_armazenamento = $longevidade_armazenamento;
    }

    /**
     * Get the value of germinacao_laboratorio
     */ 
    public function getGerminacao_laboratorio()
    {
        return $this->germinacao_laboratorio;
    }

    /**
     * Set the value of germinacao_laboratorio
     *
     * @return  self
     */ 
    public function setGerminacao_laboratorio($germinacao_laboratorio)
    {
        $this->germinacao_laboratorio = $germinacao_laboratorio;
    }
}
