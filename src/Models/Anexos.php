<?php

namespace App\Models;

class Anexos 
{
    private int $id;
    private int $especie_id;
    private ?string $imagem;
    private ?string $legenda;

    public function __construct(
        int $id = null, int $especie_id = null, ?string $imagem = null, 
        ?string $legenda = null
    ) {
        $this->id = $id;
        $this->especie_id = $especie_id;
        $this->imagem = $imagem;
        $this->legenda = $legenda;
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
     * Get the value of imagem
     */ 
    public function getImagem()
    {
        return $this->imagem;
    }

    /**
     * Set the value of imagem
     *
     * @return  self
     */ 
    public function setImagem($imagem)
    {
        $this->imagem = $imagem;
    }

    /**
     * Get the value of legenda
     */ 
    public function getLegenda()
    {
        return $this->legenda;
    }

    /**
     * Set the value of legenda
     *
     * @return  self
     */ 
    public function setLegenda($legenda)
    {
        $this->legenda = $legenda;
    }
}
