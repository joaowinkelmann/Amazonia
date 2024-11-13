<?php

namespace App\Models;

class Solos 
{
    private int $id;
    private int $especie_id;
    private ?string $descricao;

    public function __construct(
        int $id = null, int $especie_id = null, ?string $descricao = null
    ) {
        $this->id = $id;
        $this->especie_id = $especie_id;
        $this->descricao = $descricao;
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
     * Get the value of descricao
     */ 
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */ 
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
}
