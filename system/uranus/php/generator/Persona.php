<?php

namespace system\uranus\php\generator;

use system\jupiter\core\GeneratorClass;

/* ####################### Persona : USAGE EXAMPLE ####################### 

	$varPersona = new Persona();

	$varPersona->setId("Persona_id_EXAMPLE");

	$varPersona->setNombre("Persona_nombre_EXAMPLE");

	$varPersona->setTelefono("Persona_telefono_EXAMPLE");

	$varPersona->write();

    ####################### USAGE EXAMPLE ####################### **/

class Persona extends GeneratorClass
{

    public $id;

    public $nombre;

    public $telefono;

    public function __construct()

    {

        parent:: __construct();

        $this->id = null;

        $this->nombre = null;

        $this->telefono = null;

    }

    public function setId($id)
    {

        $this->id = $id;
        return $this;
    }

    public function setNombre($nombre)
    {

        $this->nombre = $nombre;
        return $this;
    }

    public function setTelefono($telefono)
    {

        $this->telefono = $telefono;
        return $this;
    }

    public function getId()
    {

        return $this->id;
    }

    public function getNombre()
    {

        return $this->nombre;
    }

    public function getTelefono()
    {

        return $this->telefono;
    }

    public function write()
    {

        $output = "";

        $this->validateData();

        $output .= "{$this->id}";
        $output .= "";
        $output .= "            {$this->nombre}";
        $output .= "            {$this->telefono}";
        return $output;
    }

}


?>

