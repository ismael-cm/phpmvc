<?php

class Alumno {
    private $id;
    private $nombre;
    private $apellido;
    private $email;
    private $fecha_nacimiento;

    function __construct($id, $nombre, $apellido, $email, $fecha_nacimiento)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    // ------------------------------------------------------------//
    //    Getters and Setters.                                   //
    // ------------------------------------------------------------//


    function setId($id) {
        $this->id = $id;
    }

    function getId() {
        return $this->id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function getApellido() {
        return $this->apellido;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function getEmail() {
        return $this->email;
    }

    function setFechaNacimiento($fecha_nacimiento) {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    function getFechaNacimiento() {
        return $this->fecha_nacimiento;
    }

    // ------------------------------------------------------------//
    //    Methods and functions                                   //
    // ------------------------------------------------------------//


    
}