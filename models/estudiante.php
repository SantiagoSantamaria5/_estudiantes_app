<?php

namespace App\models;

class Estudiante{
    private $codigo;
    private $nombre;
    private $email;
    

    function get ($prop) {
        return $this->$prop;
    }

    function set ($prop, $value) {
        $this->$prop = $value;
    }


    // function __construct($codigo,$nombre,$email)
    // {
    //     $this-> codigo = $codigo;
    //     $this -> nombre = $nombre;
    //     $this -> email  = $email;

    // }

    // function getCodigo (){
    //     return $this->codigo ;
    // }
    // function setCodigo ($value){
    //      $this-> codigo = $value ;
    // }
    // function getNombre () {
    //     return $this -> nombre ;
    // }
    // function setNombre ($value) {
    //      $this -> nombre =  $value ;
    // }
    // function getEmail () {
    //     return $this -> email ;
    // }
    // function setEmail ($value) {
    //      $this -> email = $value ;
    // }
}
