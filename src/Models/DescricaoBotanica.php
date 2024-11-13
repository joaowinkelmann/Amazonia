<?php

namespace App\Models;

class DescricaoBotanica 
{
    private int $id;
    private int $especie_id;
    private ?string $forma_biologica_foliacao;
    private ?string $tronco;
    private ?string $ramificacao;
    private ?string $casca;
    private ?string $folhas;
    private ?string $inflorescencias;
    private ?string $flores;
    private ?string $fruto;
    private ?string $sementes;

    public function __construct(
        int $id = null, int $especie_id = null, ?string $forma_biologica_foliacao = null, ?string $tronco = null,
        ?string $ramificacao = null, ?string $casca = null, ?string $folhas = null, ?string $inflorescencias = null,
        ?string $flores = null, ?string $fruto = null, ?string $sementes = null
    ) {
        $this->id = $id;
        $this->especie_id = $especie_id;
        $this->forma_biologica_foliacao = $forma_biologica_foliacao;
        $this->tronco = $tronco;
        $this->ramificacao = $ramificacao;
        $this->casca = $casca;
        $this->folhas = $folhas;
        $this->inflorescencias = $inflorescencias;
        $this->flores = $flores;
        $this->fruto = $fruto;
        $this->sementes = $sementes;
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
     * Get the value of forma_biologica_foliacao
     */ 
    public function getForma_biologica_foliacao()
    {
        return $this->forma_biologica_foliacao;
    }

    /**
     * Set the value of forma_biologica_foliacao
     *
     * @return  self
     */ 
    public function setForma_biologica_foliacao($forma_biologica_foliacao)
    {
        $this->forma_biologica_foliacao = $forma_biologica_foliacao;
    }

    /**
     * Get the value of tronco
     */ 
    public function getTronco()
    {
        return $this->tronco;
    }

    /**
     * Set the value of tronco
     *
     * @return  self
     */ 
    public function setTronco($tronco)
    {
        $this->tronco = $tronco;
    }

    /**
     * Get the value of ramificacao
     */ 
    public function getRamificacao()
    {
        return $this->ramificacao;
    }

    /**
     * Set the value of ramificacao
     *
     * @return  self
     */ 
    public function setRamificacao($ramificacao)
    {
        $this->ramificacao = $ramificacao;
    }

    /**
     * Get the value of casca
     */ 
    public function getCasca()
    {
        return $this->casca;
    }

    /**
     * Set the value of casca
     *
     * @return  self
     */ 
    public function setCasca($casca)
    {
        $this->casca = $casca;
    }

    /**
     * Get the value of folhas
     */ 
    public function getFolhas()
    {
        return $this->folhas;
    }

    /**
     * Set the value of folhas
     *
     * @return  self
     */ 
    public function setFolhas($folhas)
    {
        $this->folhas = $folhas;
    }

    /**
     * Get the value of inflorescencias
     */ 
    public function getInflorescencias()
    {
        return $this->inflorescencias;
    }

    /**
     * Set the value of inflorescencias
     *
     * @return  self
     */ 
    public function setInflorescencias($inflorescencias)
    {
        $this->inflorescencias = $inflorescencias;
    }

    /**
     * Get the value of flores
     */ 
    public function getFlores()
    {
        return $this->flores;
    }

    /**
     * Set the value of flores
     *
     * @return  self
     */ 
    public function setFlores($flores)
    {
        $this->flores = $flores;
    }

    /**
     * Get the value of fruto
     */ 
    public function getFruto()
    {
        return $this->fruto;
    }

    /**
     * Set the value of fruto
     *
     * @return  self
     */ 
    public function setFruto($fruto)
    {
        $this->fruto = $fruto;
    }

    /**
     * Get the value of sementes
     */ 
    public function getSementes()
    {
        return $this->sementes;
    }

    /**
     * Set the value of sementes
     *
     * @return  self
     */ 
    public function setSementes($sementes)
    {
        $this->sementes = $sementes;
    }
}
