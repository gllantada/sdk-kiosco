<?php

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
function validarLogin($login){
  $file = "usuarios.json";
  $db = file_get_contents($file);
  $data = json_decode($db, true);
  // dump ($login);
  //  dump ($data);
  // // foreach ($data as $key => $value)
  //   echo ($key[$value]);
  // echo ($login['username']);
  foreach ($data as $key => $value) {
      # code...

      if($value["username"]==$login["username"]){
        echo "venimos bien";
        if($value["pass"]==md5($login["password"])){

          echo "venimos bien";

session_start();
$_SESSION["name"]=$value["name"];
          return true;

      }
      # code...
    }


    }

  return false;
}

function doSave($values) {
  validData($values);
  insertInJson($values);
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
  $translate = [
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
  }

}

/**
 * @param $user
 * @param $photo
 */
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
  if (is_array($pathPhoto))
    // set la variable global error
    $errors = $pathPhoto["error"];

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
    Redirect();
  }

  // se crea un array con los dato a guardar en el json
  $new_user = [
    "name"      => $user['name'],
    "lastname"  => $user['lastname'],
    "username"  => $user['username'],
    "pass"      => md5($user['pass']),
    "photo"     => $pathPhoto,
  ];

  // agreso al usuario nuevo al array definiendo como clave el email
  $data[$user['useremail']] = $new_user;

  // convierto el array en string para poder guardarlo en en archivo
  $data = json_encode($data);

  // inserto el contenido del array y cierro el archivo
  file_put_contents($file, $data);

  setcookie('success', 'Usuario registrado con exíto!', time() + 5);
  // regreso al form
  Redirect("delete_coockies.php");
}

function leerUsuarios(){
  $file = 'usuarios.json';
  $db = file_get_contents($file);
  $data = json_decode($db, true);
  var_dump ($data);
  echo "<br>";
  foreach ($data as $key => $value){
    foreach ($key as $value => $value2)
      var_dump($value2);
  // return($data);
  }
}

/**
 * @param $photo
 * @param $name
 * @return array|string
 */



/**
 * @param string $url
 * @param bool $permanent
 */
function Redirect($url = 'admin_usuarios.php', $permanent = false) {
  header('Location: ' . $url, true, $permanent ? 301 : 302);
  exit();
}

/**
 * @param $data
 */
function dump($data) {
  echo "<pre>";
  var_dump($data);
  echo "<br>";
  print_r($data);
  echo "</pre>";
}
