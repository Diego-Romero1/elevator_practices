<?php

include_once('persona.php');
include_once('elevador.php');

class Ascensor extends Elevador
{
  private $cantidadMaxPersonas;
  private $personas = [];


  public function getCantidadMaximaPersonas()
  {
    return $this->cantidadMaxPersonas;
  }

  public function setCantidadMaximaPersonas($nuevoCantidadMaxPersonas)
  {
    $this->cantidadMaxPersonas = $nuevoCantidadMaxPersonas;
  }

  public function addPersona($pesoPersona)
  {
    $nuevaPersona = new Persona();
    $nuevaPersona->setPesos($pesoPersona);
    array_push($this->personas, $nuevaPersona);
  }

  public function pesoTotal()
  {
    $sum = 0;
    foreach ($this->personas as $persona) {
      $sum = $sum + $persona->getPeso();
    }
    return $sum;
  }

  public function countPersonas()
  {
    return count($this->personas);
  }


  private function verficarPesoMaximo()
  {
    $pesoTotalPersonas = $this->pesoTotal();
    if ($pesoTotalPersonas > $this->getPesoMaximoPermitido()) {
      return false;
    }
    return true;
  }


  private function verificarCantidadPersonas()
  {
    $totalPersonas = $this->countPersonas();
    if ($totalPersonas > $this->cantidadMaxPersonas) {
      return false;
    }
    return true;
  }
  
  public function encenderAlarma()
  {
    if ($this->verificarCantidadPersonas() && ($this->verficarPesoMaximo())) {
      return true;
    }
    return false;
  }
}
