<?php
@include_once "usuario.php";
@include_once "articulos.php";
@include_once "stock.php";
@include "conexion.php";

class ventas{
private $usuario;
private $articulo;
private $stock;
public function __construct(usuario $user,articulo $artic,stock $stock){
this->usuario=$user;
this->articulo=$artic;
this->stock=$stock;
}

 ?>
