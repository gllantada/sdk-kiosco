<?php
/**
 *
 */
 include "persona.php";
class Usuario extends Persona
{
  private $estado;
  private $id;
  private $nivel;
  private $passwd;

  function __construct($nombre,$apellido,$dni,$email,$estado,$nivel,$passwd)
  {
    parent::__construct($nombre,$apellido,$dni,$email);
    $this->estado=$estado;
    $this->nivel=$nivel;
    $this->passwd=$passwd;
  }
  public function getId(){
    return $this->id;
  }
  public function setPasswd($passwd){
  $this->passwd=$passwd;
  }

  public function getPasswd(){
  return $this->passwd;

  }

  public function setEstado($estado){
  $this->estado=$estado;
  }

  public function getEstado(){
  return $this->estado;

  }
  public function setNivel($nivel){
  $this->nivel=$nivel;
  }

  public function getNivel(){
  return $this->nivel;

  }


}

 ?>
