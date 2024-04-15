<?php

class Cliente{
    private $nombre;
    private $apellido;
    private $dadoDeBaja;
    private $tipoDoc;
    private $nroDoc;

    public function __construct($nombre, $apellido, $dadoDeBaja, $tipoDoc, $nroDoc){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dadoDeBaja = $dadoDeBaja;
        $this->tipoDoc = $tipoDoc;
        $this->nroDoc = $nroDoc;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function getDadoDeBaja()
    {
        return $this->dadoDeBaja;
    }

    public function setDadoDeBaja($dadoDeBaja)
    {
        $this->dadoDeBaja = $dadoDeBaja;
    }

    public function getTipoDoc()
    {
        return $this->tipoDoc;
    }

    public function setTipoDoc($tipoDoc)
    {
        $this->tipoDoc = $tipoDoc;
    }

    public function getNroDoc()
    {
        return $this->nroDoc;
    }

    public function setNroDoc($nroDoc)
    {
        $this->nroDoc = $nroDoc;
    }

    public function __toString(){
        if ($this->getDadoDeBaja()) {
            $dadoBaja = 'si';
        }else{
            $dadoBaja = 'no';
        }
        return 
        "\n Nombre: ".$this->getNombre().
        "\n Apellido: ".$this->getApellido().
        "\n Dado de baja: ".$dadoBaja.
        "\n Tipo de documento: ".$this->getTipoDoc().
        "\n Numero de documento: ".$this->getNroDoc();
    }

    
}