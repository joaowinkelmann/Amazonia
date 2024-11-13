<?php

namespace App\Models;

class OcorrenciaNatural 
{
    private int $id;
    private int $especie_id;
    private ?string $latitudes;
    private ?string $variacao_altitudinal;
    private ?string $mapa_imagem;

    public function __construct(
        int $id = null, int $especie_id = null, ?string $latitudes = null, ?string $variacao_altitudinal = null,
        ?string $mapa_imagem = null
    ) {
        $this->id = $id;
        $this->especie_id = $especie_id;
        $this->latitudes = $latitudes;
        $this->variacao_altitudinal = $variacao_altitudinal;
        $this->mapa_imagem = $mapa_imagem;
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
     * Get the value of latitudes
     */ 
    public function getLatitudes()
    {
        return $this->latitudes;
    }

    /**
     * Set the value of latitudes
     *
     * @return  self
     */ 
    public function setLatitudes($latitudes)
    {
        $this->latitudes = $latitudes;
    }

    /**
     * Get the value of variacao_altitudinal
     */ 
    public function getVariacao_altitudinal()
    {
        return $this->variacao_altitudinal;
    }

    /**
     * Set the value of variacao_altitudinal
     *
     * @return  self
     */ 
    public function setVariacao_altitudinal($variacao_altitudinal)
    {
        $this->variacao_altitudinal = $variacao_altitudinal;
    }

    /**
     * Get the value of mapa_imagem
     */ 
    public function getMapa_imagem()
    {
        return $this->mapa_imagem;
    }

    /**
     * Set the value of mapa_imagem
     *
     * @return  self
     */ 
    public function setMapa_imagem($mapa_imagem)
    {
        $this->mapa_imagem = $mapa_imagem;
    }
}
