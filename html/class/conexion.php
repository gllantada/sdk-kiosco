<?php

$conn;
    function doConect(){
          global $conn;
          $parameters= file_get_contents("parameters.json",true);
          $parameters= json_decode($parameters,true);
          $db=(object)$parameters["db"];
          $dsn=sprintf(
          "%s:host=%s;dbname=%s;charset=%s;port=%d",
          $db->driver,$db->host,$db->dbname,$db->charset,$db->port

            );

          try{
            $conn= new pdo($dsn,$db->user,$db->passwd);
          }catch(pdoException $e){
            
            echo die("error al intentar conectar con la base de datos: ".$e->getMessage());
            echo dump($dsn);
            echo "hola mundo";
          }
          return true;
        }
function closeConn(){
      try{
        $conn=null;

      }catch(pdoException $e){
          echo die("error al intentar conectar con la base de datos: ".$e->getMessage());
        }
      }
function insertPerson(Usuario $x){
// echo var_dump($x);
    doConect();

    global $conn;

    $sql='insert into sdg.usuarios (name,lastname,email,dni,passwd,nivel,estado) values("'.$x->getNombre().'","'.$x->getApellido().'","'.$x->getEmail().'","'.$x->getDni().'","'.$x->getPasswd().'"
    ,"'.$x->getNivel().'",'.$x->getEstado().");";
    $query=$conn->prepare($sql);

  $query->execute();
  echo "<pre>";
  echo var_dump($query);
  echo "</pre>";
  closeConn();
      }
    function listarUsuarios(){
      doConect();
          global $conn;

          $sql='select * from sdg.usuarios;' ;
          $query=$conn->prepare($sql);

        $query->execute();

      closeConn();

return $query->fetchAll(PDO::FETCH_ASSOC);
    }
 ?>
