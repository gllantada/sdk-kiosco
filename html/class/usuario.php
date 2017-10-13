<?php
@include "conexion.php";
class usuario{
  private $nombre;
  private $apellido;
  private $dni;
  private $email;
  private $estado;
  private $nivel;
  // public static=(integer)0;
  public function __construct($nombre,$apellido,$dni,$email){
this->nombre  =$nombre;

this->apellido  =$apellido;

this->dni  =$dni;
this->email  =$dni;

  }
public function setnombre($nombre){
this->nombre=$nombre;
}
public function getnombre(){
return this->nombreapellido;

} function

public function setapellido($apellido){
this->apellido=$apellido;
}

public function getapellido(){
return this->apellido;

}
public function setdni($dni){
this->dni=$dni;
}

public function getdni(){
return this->dni;

}
public function setemail($email){
this->email=$email;
}

public function getemail(){
return this->email;

}
public function setestado($estado){
this->estado=$estado;
}

public function getestado(){
return this->estado;

}
public setnivel($nivel){
this->nivel=$nivel;
}

public function getnivel(){
return this->nivel;

}








}

 ?>
