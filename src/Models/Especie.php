<?php

namespace App\Models;

class Especie
{
    private int $id;
    private string $nome_cientifico;
    private string $descricao;

    public function __construct(int $id = null, string $nome_cientifico = null, string $descricao = null) {
        $this->id = $id;
        $this->nome_cientifico = $nome_cientifico;
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
     * Get the value of nome_cientifico
     */ 
    public function getNome_cientifico()
    {
        return $this->nome_cientifico;
    }

    /**
     * Set the value of nome_cientifico
     *
     * @return  self
     */ 
    public function setNome_cientifico($nome_cientifico)
    {
        $this->nome_cientifico = $nome_cientifico;
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
