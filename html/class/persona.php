<?php
// @include "conexion.php";
class Persona{
  protected $nombre;
  protected $apellido;
  protected $dni;
  protected $email;

  public function __construct($nombre,$apellido,$dni,$email){
$this->nombre  =$nombre;

$this->apellido  =$apellido;

$this->dni  =$dni;
$this->email  =$email;

  }
public function setNombre($nombre){
$this->nombre=$nombre;
}
public function getNombre(){
return $this->nombre;

}
public function setApellido($apellido){
$this->apellido=$apellido;
}

public function getApellido(){
return $this->apellido;

}
public function setDni($dni){
$this->dni=$dni;
}

public function getDni(){
return $this->dni;

}
public function setEmail($email){
$this->email=$email;
}

public function getEmail(){
return $this->email;

}







}

 ?>
