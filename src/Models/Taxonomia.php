<?php

namespace App\Models;

class Taxonomia
{
    private int $id;
    private int $especie_id;
    private ?string $divisao;
    private ?string $clado;
    private ?string $ordem;
    private ?string $familia;
    private ?string $subfamilia;
    private ?string $genero;
    private ?string $tribo;
    private ?string $secao;
    private ?string $binomio_especifico;
    private ?string $primeira_privateacao;
    private ?string $sinonimia_botanica;
    private ?string $nomes_vulgares_uf;
    private ?string $nomes_vulgares_exterior;
    private ?string $etimologia;

    public function __construct(
        int $id = null, int $especie_id = null, ?string $divisao = null, ?string $clado = null,
        ?string $ordem = null, ?string $familia = null, ?string $subfamilia = null, ?string $genero = null,
        ?string $tribo = null, ?string $secao = null, ?string $binomio_especifico = null,
        ?string $primeira_publicacao = null, ?string $sinonimia_botanica = null, ?string $nomes_vulgares_uf = null,
        ?string $nomes_vulgares_exterior = null, ?string $etimologia = null
    ) {
        $this->id = $id;
        $this->especie_id = $especie_id;
        $this->divisao = $divisao;
        $this->clado = $clado;
        $this->ordem = $ordem;
        $this->familia = $familia;
        $this->subfamilia = $subfamilia;
        $this->genero = $genero;
        $this->tribo = $tribo;
        $this->secao = $secao;
        $this->binomio_especifico = $binomio_especifico;
        $this->primeira_publicacao = $primeira_publicacao;
        $this->sinonimia_botanica = $sinonimia_botanica;
        $this->nomes_vulgares_uf = $nomes_vulgares_uf;
        $this->nomes_vulgares_exterior = $nomes_vulgares_exterior;
        $this->etimologia = $etimologia;
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
     * Get the value of divisao
     */ 
    public function getDivisao()
    {
        return $this->divisao;
    }

    /**
     * Set the value of divisao
     *
     * @return  self
     */ 
    public function setDivisao($divisao)
    {
        $this->divisao = $divisao;
    }

    /**
     * Get the value of clado
     */ 
    public function getClado()
    {
        return $this->clado;
    }

    /**
     * Set the value of clado
     *
     * @return  self
     */ 
    public function setClado($clado)
    {
        $this->clado = $clado;
    }

    /**
     * Get the value of ordem
     */ 
    public function getOrdem()
    {
        return $this->ordem;
    }

    /**
     * Set the value of ordem
     *
     * @return  self
     */ 
    public function setOrdem($ordem)
    {
        $this->ordem = $ordem;
    }

    /**
     * Get the value of familia
     */ 
    public function getFamilia()
    {
        return $this->familia;
    }

    /**
     * Set the value of familia
     *
     * @return  self
     */ 
    public function setFamilia($familia)
    {
        $this->familia = $familia;
    }

    /**
     * Get the value of subfamilia
     */ 
    public function getSubfamilia()
    {
        return $this->subfamilia;
    }

    /**
     * Set the value of subfamilia
     *
     * @return  self
     */ 
    public function setSubfamilia($subfamilia)
    {
        $this->subfamilia = $subfamilia;
    }

    /**
     * Get the value of genero
     */ 
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     *
     * @return  self
     */ 
    public function setGenero($genero)
    {
        $this->genero = $genero;
    }

    /**
     * Get the value of tribo
     */ 
    public function getTribo()
    {
        return $this->tribo;
    }

    /**
     * Set the value of tribo
     *
     * @return  self
     */ 
    public function setTribo($tribo)
    {
        $this->tribo = $tribo;
    }

    /**
     * Get the value of secao
     */ 
    public function getSecao()
    {
        return $this->secao;
    }

    /**
     * Set the value of secao
     *
     * @return  self
     */ 
    public function setSecao($secao)
    {
        $this->secao = $secao;
    }

    /**
     * Get the value of binomio_especifico
     */ 
    public function getBinomio_especifico()
    {
        return $this->binomio_especifico;
    }

    /**
     * Set the value of binomio_especifico
     *
     * @return  self
     */ 
    public function setBinomio_especifico($binomio_especifico)
    {
        $this->binomio_especifico = $binomio_especifico;
    }

    /**
     * Get the value of primeira_publicacao
     */ 
    public function getPrimeira_publicacao()
    {
        return $this->primeira_publicacao;
    }

    /**
     * Set the value of primeira_publicacao
     *
     * @return  self
     */ 
    public function setPrimeira_publicacao($primeira_publicacao)
    {
        $this->primeira_publicacao = $primeira_publicacao;
    }

    /**
     * Get the value of sinonimia_botanica
     */ 
    public function getSinonimia_botanica()
    {
        return $this->sinonimia_botanica;
    }

    /**
     * Set the value of sinonimia_botanica
     *
     * @return  self
     */ 
    public function setSinonimia_botanica($sinonimia_botanica)
    {
        $this->sinonimia_botanica = $sinonimia_botanica;
    }

    /**
     * Get the value of nomes_vulgares_uf
     */ 
    public function getNomes_vulgares_uf()
    {
        return $this->nomes_vulgares_uf;
    }

    /**
     * Set the value of nomes_vulgares_uf
     *
     * @return  self
     */ 
    public function setNomes_vulgares_uf($nomes_vulgares_uf)
    {
        $this->nomes_vulgares_uf = $nomes_vulgares_uf;
    }

    /**
     * Get the value of nomes_vulgares_exterior
     */ 
    public function getNomes_vulgares_exterior()
    {
        return $this->nomes_vulgares_exterior;
    }

    /**
     * Set the value of nomes_vulgares_exterior
     *
     * @return  self
     */ 
    public function setNomes_vulgares_exterior($nomes_vulgares_exterior)
    {
        $this->nomes_vulgares_exterior = $nomes_vulgares_exterior;
    }

    /**
     * Get the value of etimologia
     */ 
    public function getEtimologia()
    {
        return $this->etimologia;
    }

    /**
     * Set the value of etimologia
     *
     * @return  self
     */ 
    public function setEtimologia($etimologia)
    {
        $this->etimologia = $etimologia;

    }
}
