<?php
include_once "funciones.php";
include_once "class/usuario.php";

class Create_database
{
	protected $pdo;
protected $datos;


  public function __construct($datos){
    if($datos["host"]=="" or $datos["user"]==""){

try{
	$this->pdo = new PDO("mysql:host=localhost;","root","");
}catch(pdoException $e)
{
  echo "Error con el usuario y contraseña <br><pre>".$e;
echo "</pre>";
  die();
}

    }else {

      try{  $this->pdo = new PDO("mysql:host=".$datos["host"].";", $datos["user"],$datos["pass"]);
    }catch(pdoException $e){
      echo "Uno o todos los datos los tenes mal por favor revisa <br>".$e;

      die();
    }
    }

  }
	public function create_db()
	{
		$crear_db = $this->pdo->prepare('CREATE DATABASE IF NOT EXISTS sdg COLLATE utf8_spanish_ci');
		$crear_db->execute();
    if($crear_db):
		$use_db = $this->pdo->prepare('USE sdg');
		$use_db->execute();
		endif;
return $use_db;
}

public function create_table ($use_db){
  	if($use_db):
		$crear_tb_users = $this->pdo->prepare('
						CREATE TABLE IF NOT EXISTS usuarios (
						name varchar(100) COLLATE utf8_spanish_ci NOT NULL,
						lastname varchar(150) COLLATE utf8_spanish_ci NOT NULL,
            email varchar(100) COLLATE utf8_spanish_ci NOT NULL,
            dni int unique COLLATE utf8_spanish_ci NOT NULL,
            id int NOT NULL AUTO_INCREMENT,
            passwrd varchar(100) COLLATE utf8_spanish_ci NOT NULL,
						deleted_at tinyint default null,
						nivel varchar(30) NOT NULL,
            estado tinyint ,
						PRIMARY KEY (id)
					    )');
		$crear_tb_users->execute();

		endif;

	}
	public function migrateFromJson(){
		echo "<br> hola mundo";
echo "<pre>";
$datos=leerUsuarios();
foreach ($datos as $key => $value) {

	$user=new Usuario($value["name"],$value["lastname"],$value["dni"],$value["useremail"],$value["estado"],$value["nivel"],$value["pass"]);
	if(insertInMysql($value)){

	}else{
		"error al cargar usuarios en la base de datos";
		die();
	}

}
Redirect("index.php");

echo var_dump($value);
echo "</pre>";
// die();
	}
public  function delete_db()
{
  $statement = $this->pdo->prepare("DROP DATABASE IF EXISTS sdg");

  return $statement->execute();
  // die();
}
}
// echo var_dump($_POST);
// die();
$db = new Create_database($_POST);

session_start();
// $db->check_database();
// echo var_dump($db);
// die();
		if(isset($_POST["new_db"])){

							$db->create_db();
							$_SESSION["db"]=true;
							$_SESSION["table"]=false;
							$_SESSION["error_tbl"]=false;
							Redirect("dbform.php");


		}

				if(isset($_POST["new_tbl"])){
				  if($_SESSION["db"]){
					  $db->create_table($db->create_db());
						$_SESSION["table"]=true;
						Redirect("dbform.php");
				}else{
						$_SESSION["error_tbl"]=true;
					  Redirect("dbform.php");

				}
				}
				if (isset($_POST["destruir"])){
				if($db->delete_db()){
				session_destroy();
				Redirect("dbform.php");
				}else{
				  echo "no se pudo destruir";
				}}
				if(isset($_POST["migrar"])){
						  if(isset($_SESSION["db"])&&isset($_SESSION["table"])){
									if($_SESSION["db"] and $_SESSION["table"]){
										$db->migrateFromJson();
									  Redirect("dbform.php");
									}
						  }else{
							    Redirect("dbform.php");
				  }
				}


?>
