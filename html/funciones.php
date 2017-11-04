<?php
session_start();

require_once "class/clases.php";
// array global para uso en las funciones


// defino los campos que quiero persistir
$persistence = [
  "useremail",
  "name",
  "lastname",
  "username"
];

// variable para mensajes de errores
$errors;

/**
 * @param array $values
 * @param array $photo
 */
 function validarEmail($email){
   $file = "usuarios.json";
   $db = file_get_contents($file);
   $data = json_decode($db, true);
   foreach ($data as $key => $value) {
       # code...

       if((string)$key==$email){
         echo "venimos bien";
         return true;


       }
       # code...
     }
     return false;

 }
function validarLogin($login){
  $file = "usuarios.json";
  $db = file_get_contents($file);
  $data = json_decode($db, true);

  foreach ($data as $key => $value) {
        $pass=md5($login["password"]);
        echo $pass;
      if($value["useremail"]==$login["username"]){
          echo "venimos bien";
        if($value["pass"]==md5($login["password"])){
            if(doConect()){
                  $_SESSION["name"]=$value["name"];
                  closeConn();
                            return true;

                  }
                }
              }
        }

  return false;
}

function doSave($values) {
  // validData($values);
  if( validData($values)){
    if(insertInMysql($values)){
      if(insertInJson($values)){
        return true;
      }else{
        return false;
      }
    }else{
      return false;
    }
  }
  return false;
}
function insertInMysql($data){
  $nuevo= new Usuario($data["name"],$data["lastname"],$data["dni"],$data["useremail"],true,$data["nivel"],md5($data["pass"]));
      if(insertPerson($nuevo)){
        echo "usuario registrado en la base con exito";
        return true;
    }else{
        return false;
      }
  // die();
    }


function validData($values) {
  // se incluye al array declarado globalmente
  global $erros_file;

  //defino el mensaje de errores de los campos
  global $errors;

  // defino una variable para la comparacion de las claves
  $isEmptyPass = false;
  $isEmptyEqua = false;

  // de fino el array de traduccion para los mensajes
  $translate =
  [
    "useremail"  => "Correo electronico",
    "name"       => "Nombre",
    "lastname"   => "Apellido",
    "username"   => "Nombre de usuario",
    "pass"       => "Clave",
    "equal_pass" => "Repita la clave"
  ];

  // se recorre la variable $values en forma de evaluar la key => value
  foreach ($values as $key => $value) {
    if (empty($values[$key])) // verifico si los datos estan vacios
      $errors .= "El Campo $translate[$key] es requerido<br>";
    else // en caso contrario persisto la data en el array values
      if ($key != 'pass' && $key != 'equal_pass')
        setcookie($key, $values[$key]);
  }


  // verifico si hay errores y se hizo la peticion POST
  if ($errors != "") {
    setcookie('error', $errors, time() + 5);
    //redirect to index
    Redirect();
  }else{
    return true;
  }

}


function insertInJson($user) {

  global $errors;

  // Nombre del archivo a abrir
  $file = "usuarios.json";

  //extraigo el contenido y cierro el archivo
  $db = file_get_contents($file);

  //convierto el contendido del json en array
  $data = json_decode($db, true);

  // guardo la foto con la funcion savePhoto
  // esta funcion retornará una string con el nombre de la foto guardada
  // o un array con una clave error y su valor un mensaje del error ocurrido

  // Verifico si la variable $pathPhoto es un array, si es así, es porque ocurrió un error
  // al guradar la imagen

  // antes de definir la data, verificamos que los claves sean iguales
  if (md5($user['pass']) != md5($user['equal_pass']))
    // set la variable global error
    $errors = 'Las claves no coinciden, intente de nuevo';

  // antes de definir la data, verificamos el email ya existe
  if (array_key_exists($user['useremail'], $data))
    // set la variable global error
    $errors = 'Ya existe un usuario con este email';

  // verifico si hay errores y se hizo la peticion POST
  if ($errors != "") {
    setcookie('error', $errors, time() + 5);
    //redirect to index
    return false;
  }

  // se crea un array con los dato a guardar en el json
  $new_user = [
    "name"      => $user['name'],
    "lastname"  => $user['lastname'],
    "dni"  => $user['dni'],
    "useremail"  => $user['useremail'],
    "nivel"  => $user['nivel'],
    "pass"      => md5($user['pass']),
    "deleted_at"=>null,
    "estado"=>false,

  ];

  // agreso al usuario nuevo al array definiendo como clave el email
  $data[$user['useremail']] = $new_user;

  // convierto el array en string para poder guardarlo en en archivo
  $data = json_encode($data);

  // inserto el contenido del array y cierro el archivo
  file_put_contents($file, $data);

  setcookie('success', 'Usuario registrado con exíto!', time() + 5);
  // regreso al form
  // Redirect("delete_coockies.php");
  return true;
}

function leerUsuarios(){
  $file = 'usuarios.json';
  $db = file_get_contents($file);
  $data = json_decode($db, true);
  var_dump ($data);
  echo "<br>";
  foreach ($data as $key => $value){
    foreach ($value as $key2 => $value2)
      var_dump($value2);
  // return($data);
  }
  return $data;
}



function Redirect($url = 'admin_usuarios.php', $permanent = false) {
  header('Location: ' . $url, true, $permanent ? 301 : 302);
  exit();
}


function dump($data) {
  echo "<pre>";
  var_dump($data);
  echo "<br>";
  print_r($data);
  echo "</pre>";
}
