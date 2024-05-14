<?php

require('db.php');



class ControladorUsuarios {


  //Registro de usuarios

  static public function registroUsuario(){

    if (isset($_POST['name'])&& isset($_POST['lastName'])) {
      echo '<div class="alert alert-success" role="alert">
      This is a primary alert—check it out!
    </div> ';
    }

  }



}
