<?php

namespace App\Models;

class AspectosEcologicos 
{
    private int $id;
    private int $especie_id;
    private ?string $grupo_sucessional;
    private ?string $importancia_sociologica;
    private ?string $regeneracao_natural;

    public function __construct(
        int $id = null, int $especie_id = null, ?string $grupo_sucessional = null,
        ?string $importancia_sociologica = null, ?string $regeneracao_natural = null
    ) {
        $this->id = $id;
        $this->especie_id = $especie_id;
        $this->grupo_sucessional = $grupo_sucessional;
        $this->importancia_sociologica = $importancia_sociologica;
        $this->regeneracao_natural = $regeneracao_natural;
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
     * Get the value of grupo_sucessional
     */ 
    public function getGrupo_sucessional()
    {
        return $this->grupo_sucessional;
    }

    /**
     * Set the value of grupo_sucessional
     *
     * @return  self
     */ 
    public function setGrupo_sucessional($grupo_sucessional)
    {
        $this->grupo_sucessional = $grupo_sucessional;
    }

    /**
     * Get the value of importancia_sociologica
     */ 
    public function getImportancia_sociologica()
    {
        return $this->importancia_sociologica;
    }

    /**
     * Set the value of importancia_sociologica
     *
     * @return  self
     */ 
    public function setImportancia_sociologica($importancia_sociologica)
    {
        $this->importancia_sociologica = $importancia_sociologica;
    }

    /**
     * Get the value of regeneracao_natural
     */ 
    public function getRegeneracao_natural()
    {
        return $this->regeneracao_natural;
    }

    /**
     * Set the value of regeneracao_natural
     *
     * @return  self
     */ 
    public function setRegeneracao_natural($regeneracao_natural)
    {
        $this->regeneracao_natural = $regeneracao_natural;
    }
}
