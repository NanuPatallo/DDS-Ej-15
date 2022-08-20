<?php

class Persona
{
    private $id;
    private $nombre;
    private $apellido;
    private $fechaNac;
    private $obraSocial;
    private $listDoc = array();




    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
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




    public function getFechaNac()
    {
        return $this->fechaNac;
    }

    public function setFechaNac($fechaNac)
    {
        $this->fechaNac = $fechaNac;
    }




    public function getObraSocial()
    {
        return $this->obraSocial;
    }

    public function setObraSocial($obraSocial)
    {
        $this->obraSocial = $obraSocial;
    }




    public function getListDoc()
    {
        return $this->listDoc;
    }

    public function setDoc($doc)
    {
        $this->listDoc[] = $doc;
    }



    public function MostrarDatos()
    {
        echo 'Nombre y Apellido: ' . $this->getNombre() . ' ' . $this->getApellido() . '<br>';
        echo 'Fecha de Nacimiento: ' . $this->getFechaNac() . '<br>';
        echo 'Obra Social: ' . $this->getObraSocial()->getRazonSocial() . '<br>';
        echo 'Sitio Web Obra Social: ' . $this->getObraSocial()->getSitioWeb() . '<br>';

        foreach ($this->getListDoc() as $d) {
            echo 'Numero de Documento: ' . $d->getNumero() . '<br>';
            echo 'Tipo de Documento: ' . $d->getTipoDoc()->getDescripcion() . '<br>';
        }
    }
}
