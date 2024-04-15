<?php

include_once('Cliente.php');
include_once('Empresa.php');
include_once('Moto.php');
include_once('Venta.php');

$objCliente1 = new Cliente('nico', 'peron', false, 'dni', 454353);
$objCliente2 = new Cliente('matias', 'sanchez', false, 'dni', 21321);

$objMoto1 = new Moto(11, 2230000, 2022, "Benelli Imperiale 400", 85, true);
$objMoto2 = new Moto(12, 584000, 2021, "Zanella Zr 150 Ohc", 70, true);
$objMoto3 = new Moto(13, 999900, 2023, "Zanella Patagonian Eagle 250", 55, false);

$empresa = new Empresa("Alta Gama", "AvArgenetina 123", [$objCliente1, $objCliente2],[$objMoto1, $objMoto2, $objMoto3], []);

$empresa->registrarVenta([11,12,13], $objCliente2);
$empresa->registrarVenta([0], $objCliente2);
$empresa->registrarVenta([2], $objCliente2);

$empresa->retornarVentasXCliente($objCliente1->getTipoDoc(),$objCliente1->getNroDoc());
$empresa->retornarVentasXCliente($objCliente2->getTipoDoc(),$objCliente2->getNroDoc());

echo $empresa;