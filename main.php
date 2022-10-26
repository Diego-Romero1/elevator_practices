<?php

include_once('ascensor.php');

$nuevoAscensor = new Ascensor();

$nuevoAscensor->setPesoMaximoPermitido(500);
$nuevoAscensor->setCantidadMaximaPersonas(5);
$nuevoAscensor->addPersona(70);
$nuevoAscensor->addPersona(120);
$nuevoAscensor->addPersona(80);
var_dump($nuevoAscensor);


echo ($nuevoAscensor->countPersonas());
echo ($nuevoAscensor->pesoTotal());
echo ($nuevoAscensor->verificarCantidadPersonas()); 
echo ($nuevoAscensor->verificarPesoMaximo());


$valorVerificacion = $nuevoAscensor->encenderAlarma();
if ($valorVerificacion)
    echo "Normal";
else
    echo "Encender Alarma";
