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
function insertPerson($nombre,$apellido,$dni,$email){
      global $conn;
      $sql="insert into usuarios (name,lastname,email,passwd) values('$nombre','$apellido','$email','$dni')";
    $query=$conn->prepare($sql);

    $query->execute();
var_dump($query);
      }
      doConect();
      insertPerson("tomas","juanlanus","tomyjuan@gmail.com",4595955);
      closeconn();


 ?>
