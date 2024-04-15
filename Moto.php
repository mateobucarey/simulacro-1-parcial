<?php

class Moto{
    
    private $codigo;
    private $costo;
    private $anioFabricacion;
    private $descripcion;
    private $porIncAnual;
    private $activa;

    public function __construct($codigo, $costo, $anioFabricacion, $descripcion, $porIncAnual, $activa){
        $this->codigo = $codigo;
        $this->costo = $costo;
        $this->anioFabricacion = $anioFabricacion;
        $this->descripcion = $descripcion;
        $this->porIncAnual = $porIncAnual;
        $this->activa = $activa;
    }


    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function getCosto()
    {
        return $this->costo;
    }

    public function setCosto($costo)
    {
        $this->costo = $costo;
    }

    public function getAnioFabricacion()
    {
        return $this->anioFabricacion;
    }

    public function setAnioFabricacion($anioFabricacion)
    {
        $this->anioFabricacion = $anioFabricacion;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getPorIncAnual()
    {
        return $this->porIncAnual;
    }

    public function setPorIncAnual($porIncAnual)
    {
        $this->porIncAnual = $porIncAnual;
    }

    public function getActiva()
    {
        return $this->activa;
    }

    public function setActiva($activa)
    {
        $this->activa = $activa;
    }

    public function __toString(){
        
        if ($this->getActiva()) {
            $activa = 'si';
        }else{
            $activa = 'no';
        }
        return 
        "\n Codigo de moto: ".$this->getCodigo().
        "\n Costo de la moto: ".$this->getCosto().
        "\n Año de fabricacion: ".$this->getAnioFabricacion().
        "\n Descripcion: ".$this->getDescripcion().
        "\n Porcentaje de incremento anual: ".$this->getPorIncAnual().
        "\n Activa: ".$activa;
    }

    public function darPrecioVenta(){
        
        if($this->getActiva()){
            $anio = 2024 - $this->getAnioFabricacion();
            $venta = $this->getCosto() + $this->getCosto() *($anio * $this->getPorIncAnual());
        }else{
            $venta = -1;
        }
        return $venta;
    }

}