<?php
class Vehiculo{
    private int $id;
    private string $marca;
    private string $modelo;
    private int $año;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of marca
     */ 
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Get the value of modelo
     */ 
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     *
     * @return  self
     */ 
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of año
     */ 
    public function getAño()
    {
        return $this->año;
    }

    /**
     * Set the value of año
     *
     * @return  self
     */ 
    public function setAño($año)
    {
        $this->año = $año;

        return $this;
    }

    public function __GET ($k){ return $this -> $k; }

    public function __SET ($k, $v) { return $this -> $k = $v; }
}