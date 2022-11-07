<?php
class Elevador
{
    private $id;
    private $pesoMaximoPermitido;
    private $estado; // Activo o No.

    public function getId()
    {
        return $this->id;
    }

    public function setId($nuevoId)
    {
        $this->id = $nuevoId;
    }
    
    public function getPesoMaximoPermitido()
    {
        return $this->pesoMaximoPermitido;
    }

    public function setPesoMaximoPermitido($nuevoPesoMaximo)
    {
        $this->pesoMaximoPermitido = $nuevoPesoMaximo;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($nuevoEstado)
    {
        $this->estado = $nuevoEstado;
    }

    public function encenderAlarma()
    {
    }
}
