<?php

class Empresa{
    private $denominacion;
    private $direccion;
    private $coleccionClientes;
    private $coleccionMotos;
    private $coleccionVentas;

    public function __construct($denominacion, $direccion, $coleccionClientes, $coleccionMotos, $coleccionVentas){
        $this->denominacion = $denominacion;
        $this->direccion = $direccion;
        $this->coleccionClientes = $coleccionClientes;
        $this->coleccionMotos = $coleccionMotos;
        $this->coleccionVentas = $coleccionVentas;
    }
 
    public function getDenominacion()
    {
        return $this->denominacion;
    }

    public function setDenominacion($denominacion)
    {
        $this->denominacion = $denominacion;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function getColeccionClientes()
    {
        return $this->coleccionClientes;
    }

    public function setColeccionClientes($coleccionClientes)
    {
        $this->coleccionClientes = $coleccionClientes;
    }

    public function getColeccionMotos()
    {
        return $this->coleccionMotos;
    }

    public function setColeccionMotos($coleccionMotos)
    {
        $this->coleccionMotos = $coleccionMotos;
    }

    public function getColeccionVentas()
    {
        return $this->coleccionVentas;
    }

    public function setColeccionVentas($coleccionVentas)
    {
        $this->coleccionVentas = $coleccionVentas;
    }

    public function __toString(){

        $coleccionClientes = $this->getColeccionClientes();
        $cadenaClientes = "\n";
        for ($i=0; $i < $coleccionClientes; $i++) { 
            $cadenaClientes = $cadenaClientes.$coleccionClientes[$i]->__toString()."\n";
        }

        $coleccionVentas = $this->getColeccionVentas();
        $cadenaVentas = "\n";
        for ($i=0; $i < $coleccionVentas; $i++) { 
            $cadenaVentas = $cadenaVentas.$coleccionVentas[$i]->__toString()."\n";
        }

        return 
        "\n Denominacion: ".$this->getDenominacion().
        "\n Direccion: ".$this->getDireccion().
        "\n Coleccion de clientes: ".$cadenaClientes.
        "\n Coleccion de ventas: ".$cadenaVentas;
    }

    public function retornarMoto($codigoMoto){
        $cantMotos = count($this->getColeccionMotos());
        $i = 0;
        $encontrado = false;
        while ($i < $cantMotos && !$encontrado) {
            if ($this->getColeccionMotos()[$i]->getCodigo() == $codigoMoto) {
                $encontrado = true;
                $objMoto = $this->getColeccionMotos()[$i];
            }
            $i++;
        }
        return $objMoto;
    }

    public function registrarVenta($colCodigosMoto, $objCliente){
        $codMotos = count($colCodigosMoto);
        for ($i=0; $i < $codMotos; $i++) { 
            $objMoto = $this->retornarMoto($colCodigosMoto[$i]);
            $venta = new Venta(1, 2024, $objCliente, $this->getColeccionMotos(), $objMoto->darPrecioVenta());
            $venta->incorporarMoto($objMoto);
            }
            return $venta->getPrecioFinal();
        }


    public function retornarVentasXCliente($tipo,$numDoc){
        $ventas = count($this->getColeccionVentas());
        $ventasXCliente = [];
        for ($i=0; $i < $ventas; $i++) { 
            $venta = $this->getColeccionVentas()[$i];
            if($venta->getObjCliente()->getTipoDoc() == $tipo && $venta->getObjCliente()->getNroDoc()==$numDoc){
                array_push($ventasXCliente, $venta);
            }
        }
        return $ventasXCliente;
    }


}


