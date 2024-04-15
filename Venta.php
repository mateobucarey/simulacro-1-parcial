<?php

class Venta{
    private $numero;
    private $fecha;
    private $objCliente;
    private $coleccionMotos;
    private $precioFinal;

    public function __construct($numero, $fecha, Cliente $objCliente, $coleccionMotos, $precioFinal){
        $this->numero = $numero;
        $this->fecha = $fecha;
        $this->objCliente = $objCliente;
        $this->coleccionMotos = $coleccionMotos;
        $this->precioFinal = $precioFinal;
    }

    
    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function getObjCliente()
    {
        return $this->objCliente;
    }

    public function setObjCliente($objCliente)
    {
        $this->objCliente = $objCliente;
    }

    public function getColeccionMotos()
    {
        return $this->coleccionMotos;
    }

    public function setColeccionMotos($coleccionMotos)
    {
        $this->coleccionMotos = $coleccionMotos;
    }

    public function getPrecioFinal()
    {
        return $this->precioFinal;
    }

    public function setPrecioFinal($precioFinal)
    {
        $this->precioFinal = $precioFinal;
    }

    public function __toString(){
        $coleccionMotos = $this->getColeccionMotos();
        $cadenaMotos = "\n";
        for ($i=0; $i < $coleccionMotos; $i++) { 
            $cadenaMotos = $cadenaMotos.$coleccionMotos[$i]->__toString()."\n";
        }

        return 
        "\n Numero de venta: ".$this->getNumero().
        "\n Fecha: ".$this->getFecha().
        "\n Cliente: ".$this->getObjCliente().
        "\n Informacion sobre las motos: ".$cadenaMotos.
        "\n Precio final: ".$this->getPrecioFinal();
    }

    public function incorporarMoto($objMoto){

        if($this->getObjCliente()->getDadoDeBaja() == false && $objMoto->getActiva()){
            $coleccionMotos = $this->getColeccionMotos();
            array_push($coleccionMotos, $objMoto);
            $this->setPrecioFinal($objMoto->darPrecioVenta());
            echo "\n Moto incorporada \n";
        } else{
            echo "\n La moto no fue incorporada \n";
        }
    }
    


} 