<?php
  include_once "funciones.php";

  if ( isset($_COOKIE['success']) || !empty($_COOKIE['success']) ) {
    foreach ($persistence as $value) {
      if (isset($_COOKIE[$value]))
        setcookie($value, null,time());
    }
  }

  if ( !isset($_COOKIE['error']) && !isset($_COOKIE['success']) ) {
    foreach ($persistence as $value) {
      if (isset($_COOKIE[$value]))
        setcookie($value, null,time());
    }
  }

  Redirect();

?>
