<?php
  session_start();
$conn;
$opt = array(
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );

    function doConect(){
          global $conn;
          global $opt;
          $parameters= file_get_contents("parameters.json",true);
          $parameters= json_decode($parameters,true);
          $db=(object)$parameters["db"];
          $dsn=sprintf(
          "%s:host=%s;dbname=%s;charset=%s;port=%d",
          $db->driver,$db->host,$db->dbname,$db->charset,$db->port

            );

          try{
            $conn= new pdo($dsn,$db->user,$db->passwd,$opt);

            $_SESSION["database"]=true;
          }catch(pdoException $e){
session_destroy();
            Redirect("dbform.php");
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

   $sql='insert into sdg.usuarios (name,lastname,email,dni,passwrd,nivel,estado) values("'.$x->getNombre().'","'.$x->getApellido().'","'.$x->getEmail().'","'.$x->getDni().'","'.$x->getPasswd().'"
    ,"'.$x->getNivel().'",'.$x->getEstado().");";
    $query=$conn->prepare($sql);
echo var_dump($sql);
// die();
try{   $query->execute();
closeConn();

return $query;
  }catch(pdoException $e){
  echo "<pre>";
  echo $e->getMessage();
  echo "</pre>";
  closeConn();

  return false;
}
closeConn();
return true;
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
