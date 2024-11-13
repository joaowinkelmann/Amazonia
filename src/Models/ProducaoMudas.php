<?php

namespace App\Models;

class ProducaoMudas
{
    private int $id;
    private int $especie_id;
    private ?string $semeadura;
    private ?string $germinacao;
    private ?string $associacao_simbiotica;
    private ?string $cuidados_especiais;

    public function __construct(
        int $id = null, int $especie_id = null, ?string $semeadura = null, 
        ?string $germinacao = null, ?string $associacao_simbiotica = null, 
        ?string $cuidados_especiais = null
    ) {
        $this->id = $id;
        $this->especie_id = $especie_id;
        $this->semeadura = $semeadura;
        $this->germinacao = $germinacao;
        $this->associacao_simbiotica = $associacao_simbiotica;
        $this->cuidados_especiais = $cuidados_especiais;
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
     * Get the value of semeadura
     */ 
    public function getSemeadura()
    {
        return $this->semeadura;
    }

    /**
     * Set the value of semeadura
     *
     * @return  self
     */ 
    public function setSemeadura($semeadura)
    {
        $this->semeadura = $semeadura;
    }

    /**
     * Get the value of germinacao
     */ 
    public function getGerminacao()
    {
        return $this->germinacao;
    }

    /**
     * Set the value of germinacao
     *
     * @return  self
     */ 
    public function setGerminacao($germinacao)
    {
        $this->germinacao = $germinacao;
    }

    /**
     * Get the value of associacao_simbiotica
     */ 
    public function getAssociacao_simbiotica()
    {
        return $this->associacao_simbiotica;
    }

    /**
     * Set the value of associacao_simbiotica
     *
     * @return  self
     */ 
    public function setAssociacao_simbiotica($associacao_simbiotica)
    {
        $this->associacao_simbiotica = $associacao_simbiotica;
    }

    /**
     * Get the value of cuidados_especiais
     */ 
    public function getCuidados_especiais()
    {
        return $this->cuidados_especiais;
    }

    /**
     * Set the value of cuidados_especiais
     *
     * @return  self
     */ 
    public function setCuidados_especiais($cuidados_especiais)
    {
        $this->cuidados_especiais = $cuidados_especiais;
    }
}
