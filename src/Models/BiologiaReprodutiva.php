<?php

namespace App\Models;

class BiologiaReprodutiva 
{
    private int $id;
    private int $especie_id;
    private ?string $sistema_sexual;
    private ?string $vetor_polinizacao;
    private ?string $floracao;
    private ?string $frutificacao;
    private ?string $dispersao_frutos_sementes;
    private ?string $qualidade_sementes;

    public function __construct(
        int $id = null, int $especie_id = null, ?string $sistema_sexual = null, ?string $vetor_polinizacao = null,
        ?string $floracao = null, ?string $frutificacao = null, ?string $dispersao_frutos_sementes = null,
        ?string $qualidade_sementes = null
    ) {
        $this->id = $id;
        $this->especie_id = $especie_id;
        $this->sistema_sexual = $sistema_sexual;
        $this->vetor_polinizacao = $vetor_polinizacao;
        $this->floracao = $floracao;
        $this->frutificacao = $frutificacao;
        $this->dispersao_frutos_sementes = $dispersao_frutos_sementes;
        $this->qualidade_sementes = $qualidade_sementes;
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
     * Get the value of sistema_sexual
     */ 
    public function getSistema_sexual()
    {
        return $this->sistema_sexual;
    }

    /**
     * Set the value of sistema_sexual
     *
     * @return  self
     */ 
    public function setSistema_sexual($sistema_sexual)
    {
        $this->sistema_sexual = $sistema_sexual;
    }

    /**
     * Get the value of vetor_polinizacao
     */ 
    public function getVetor_polinizacao()
    {
        return $this->vetor_polinizacao;
    }

    /**
     * Set the value of vetor_polinizacao
     *
     * @return  self
     */ 
    public function setVetor_polinizacao($vetor_polinizacao)
    {
        $this->vetor_polinizacao = $vetor_polinizacao;
    }

    /**
     * Get the value of floracao
     */ 
    public function getFloracao()
    {
        return $this->floracao;
    }

    /**
     * Set the value of floracao
     *
     * @return  self
     */ 
    public function setFloracao($floracao)
    {
        $this->floracao = $floracao;
    }

    /**
     * Get the value of frutificacao
     */ 
    public function getFrutificacao()
    {
        return $this->frutificacao;
    }

    /**
     * Set the value of frutificacao
     *
     * @return  self
     */ 
    public function setFrutificacao($frutificacao)
    {
        $this->frutificacao = $frutificacao;
    }

    /**
     * Get the value of dispersao_frutos_sementes
     */ 
    public function getDispersao_frutos_sementes()
    {
        return $this->dispersao_frutos_sementes;
    }

    /**
     * Set the value of dispersao_frutos_sementes
     *
     * @return  self
     */ 
    public function setDispersao_frutos_sementes($dispersao_frutos_sementes)
    {
        $this->dispersao_frutos_sementes = $dispersao_frutos_sementes;
    }

    /**
     * Get the value of qualidade_sementes
     */ 
    public function getQualidade_sementes()
    {
        return $this->qualidade_sementes;
    }

    /**
     * Set the value of qualidade_sementes
     *
     * @return  self
     */ 
    public function setQualidade_sementes($qualidade_sementes)
    {
        $this->qualidade_sementes = $qualidade_sementes;
    }
}
