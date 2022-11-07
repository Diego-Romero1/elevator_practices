<?php

include_once 'ascensor.php';
$nuevoAscensor=new Ascensor();
$nuevoAscensor->setPesoMaximoPermitido(500);
$nuevoAscensor->setCantidadMaximaPersonas(5);
$nuevoAscensor->addPersona(70);
$nuevoAscensor->addPersona(80);
$nuevoAscensor->addPersona(70);

$valorVerificacion=$nuevoAscensor->encenderAlarma();

if ($valorVerificacion)
echo "Todo Normal";
else
echo "Activar Alarma";



?>