<?php

namespace App\Models;

class ComposicaoBiotecnologica 
{
    private int $id;
    private int $especie_id;
    private ?float $variacao_carboidratos;
    private ?float $variacao_proteinas;
    private ?string $grupo_substancias;
    private ?string $levantamento_bibliografico;
    private ?string $biofertilizante;

    public function __construct(
        int $id = null, int $especie_id = null, ?float $variacao_carboidratos = null, 
        ?float $variacao_proteinas = null, ?string $grupo_substancias = null, 
        ?string $levantamento_bibliografico = null, ?string $biofertilizante = null
    ) {
        $this->id = $id;
        $this->especie_id = $especie_id;
        $this->variacao_carboidratos = $variacao_carboidratos;
        $this->variacao_proteinas = $variacao_proteinas;
        $this->grupo_substancias = $grupo_substancias;
        $this->levantamento_bibliografico = $levantamento_bibliografico;
        $this->biofertilizante = $biofertilizante;
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
     * Get the value of variacao_carboidratos
     */ 
    public function getVariacao_carboidratos()
    {
        return $this->variacao_carboidratos;
    }

    /**
     * Set the value of variacao_carboidratos
     *
     * @return  self
     */ 
    public function setVariacao_carboidratos($variacao_carboidratos)
    {
        $this->variacao_carboidratos = $variacao_carboidratos;
    }

    /**
     * Get the value of variacao_proteinas
     */ 
    public function getVariacao_proteinas()
    {
        return $this->variacao_proteinas;
    }

    /**
     * Set the value of variacao_proteinas
     *
     * @return  self
     */ 
    public function setVariacao_proteinas($variacao_proteinas)
    {
        $this->variacao_proteinas = $variacao_proteinas;
    }

    /**
     * Get the value of grupo_substancias
     */ 
    public function getGrupo_substancias()
    {
        return $this->grupo_substancias;
    }

    /**
     * Set the value of grupo_substancias
     *
     * @return  self
     */ 
    public function setGrupo_substancias($grupo_substancias)
    {
        $this->grupo_substancias = $grupo_substancias;
    }

    /**
     * Get the value of levantamento_bibliografico
     */ 
    public function getLevantamento_bibliografico()
    {
        return $this->levantamento_bibliografico;
    }

    /**
     * Set the value of levantamento_bibliografico
     *
     * @return  self
     */ 
    public function setLevantamento_bibliografico($levantamento_bibliografico)
    {
        $this->levantamento_bibliografico = $levantamento_bibliografico;
    }

    /**
     * Get the value of biofertilizante
     */ 
    public function getBiofertilizante()
    {
        return $this->biofertilizante;
    }

    /**
     * Set the value of biofertilizante
     *
     * @return  self
     */ 
    public function setBiofertilizante($biofertilizante)
    {
        $this->biofertilizante = $biofertilizante;
    }
}
