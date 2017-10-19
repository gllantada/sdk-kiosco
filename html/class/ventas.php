<?php



class ventas{
private $usuario;
private $articulo;
private $stock;
public function __construct(Usuario $user,Articulo $artic,Stock $stock){
$this->usuario=$user;
$this->articulo=$artic;
$this->stock=$stock;
}
}
 ?>
