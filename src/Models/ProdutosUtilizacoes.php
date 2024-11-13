<?php

namespace App\Models;

class ProdutosUtilizacoes 
{
    private int $id;
    private int $especie_id;
    private ?string $aproveitamento_alimentar;
    private ?string $apicola;
    private ?string $celulose_papel;
    private ?string $energia;
    private ?string $madeira_serrada_rolica;
    private ?string $medicinal;
    private ?string $alerta;
    private ?string $paisagistico;
    private ?string $plantios_ambientais;
    private ?string $substancias_tanantes;

    public function __construct(
        int $id = null, int $especie_id = null, ?string $aproveitamento_alimentar = null, 
        ?string $apicola = null, ?string $celulose_papel = null, ?string $energia = null, 
        ?string $madeira_serrada_rolica = null, ?string $medicinal = null, ?string $alerta = null, 
        ?string $paisagistico = null, ?string $plantios_ambientais = null, ?string $substancias_tanantes = null
    ) {
        $this->id = $id;
        $this->especie_id = $especie_id;
        $this->aproveitamento_alimentar = $aproveitamento_alimentar;
        $this->apicola = $apicola;
        $this->celulose_papel = $celulose_papel;
        $this->energia = $energia;
        $this->madeira_serrada_rolica = $madeira_serrada_rolica;
        $this->medicinal = $medicinal;
        $this->alerta = $alerta;
        $this->paisagistico = $paisagistico;
        $this->plantios_ambientais = $plantios_ambientais;
        $this->substancias_tanantes = $substancias_tanantes;
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
     * Get the value of aproveitamento_alimentar
     */ 
    public function getAproveitamento_alimentar()
    {
        return $this->aproveitamento_alimentar;
    }

    /**
     * Set the value of aproveitamento_alimentar
     *
     * @return  self
     */ 
    public function setAproveitamento_alimentar($aproveitamento_alimentar)
    {
        $this->aproveitamento_alimentar = $aproveitamento_alimentar;
    }

    /**
     * Get the value of apicola
     */ 
    public function getApicola()
    {
        return $this->apicola;
    }

    /**
     * Set the value of apicola
     *
     * @return  self
     */ 
    public function setApicola($apicola)
    {
        $this->apicola = $apicola;
    }

    /**
     * Get the value of celulose_papel
     */ 
    public function getCelulose_papel()
    {
        return $this->celulose_papel;
    }

    /**
     * Set the value of celulose_papel
     *
     * @return  self
     */ 
    public function setCelulose_papel($celulose_papel)
    {
        $this->celulose_papel = $celulose_papel;
    }

    /**
     * Get the value of energia
     */ 
    public function getEnergia()
    {
        return $this->energia;
    }

    /**
     * Set the value of energia
     *
     * @return  self
     */ 
    public function setEnergia($energia)
    {
        $this->energia = $energia;
    }

    /**
     * Get the value of madeira_serrada_rolica
     */ 
    public function getMadeira_serrada_rolica()
    {
        return $this->madeira_serrada_rolica;
    }

    /**
     * Set the value of madeira_serrada_rolica
     *
     * @return  self
     */ 
    public function setMadeira_serrada_rolica($madeira_serrada_rolica)
    {
        $this->madeira_serrada_rolica = $madeira_serrada_rolica;
    }

    /**
     * Get the value of medicinal
     */ 
    public function getMedicinal()
    {
        return $this->medicinal;
    }

    /**
     * Set the value of medicinal
     *
     * @return  self
     */ 
    public function setMedicinal($medicinal)
    {
        $this->medicinal = $medicinal;
    }

    /**
     * Get the value of alerta
     */ 
    public function getAlerta()
    {
        return $this->alerta;
    }

    /**
     * Set the value of alerta
     *
     * @return  self
     */ 
    public function setAlerta($alerta)
    {
        $this->alerta = $alerta;
    }

    /**
     * Get the value of paisagistico
     */ 
    public function getPaisagistico()
    {
        return $this->paisagistico;
    }

    /**
     * Set the value of paisagistico
     *
     * @return  self
     */ 
    public function setPaisagistico($paisagistico)
    {
        $this->paisagistico = $paisagistico;
    }

    /**
     * Get the value of plantios_ambientais
     */ 
    public function getPlantios_ambientais()
    {
        return $this->plantios_ambientais;
    }

    /**
     * Set the value of plantios_ambientais
     *
     * @return  self
     */ 
    public function setPlantios_ambientais($plantios_ambientais)
    {
        $this->plantios_ambientais = $plantios_ambientais;
    }

    /**
     * Get the value of substancias_tanantes
     */ 
    public function getSubstancias_tanantes()
    {
        return $this->substancias_tanantes;
    }

    /**
     * Set the value of substancias_tanantes
     *
     * @return  self
     */ 
    public function setSubstancias_tanantes($substancias_tanantes)
    {
        $this->substancias_tanantes = $substancias_tanantes;
    }
}
