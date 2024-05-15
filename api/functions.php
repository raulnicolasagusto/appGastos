<?php

require('db.php');



class ControladorUsuarios {


  //Registro de usuarios

  static public function registroUsuario($con){

    if (isset($_POST["registerName"]) && !empty($_POST["registerLastName"]) &&
       (isset($_POST["registerEmail"]) && !empty($_POST["registerPass"]))) {

      $registerName = $_POST['registerName'];
      $registerLastName = $_POST['registerLastName'];
      $registerEmail = $_POST['registerEmail'];
      $registerPass = $_POST['registerPass'];

      $table = "users";
      // $data = array(
      //         "name_user" => $registerName,
      //         "lastName_user" => $registerLastName,
      //         "mail_user" => $registerEmail,
      //         "pass_user" => $registerPass

      // );

      $query = $con->prepare("INSERT INTO $table(name_user, lastName_user, mail_user, pass_user)
                VALUES(:registerName, :registerLastName, :registerEmail, :registerPass)");

      $query->bindParam(':registerName', $registerName);
      $query->bindParam(':registerLastName', $registerLastName);
      $query->bindParam(':registerEmail', $registerEmail);
      $query->bindParam(':registerPass', $registerPass);

      $query->execute();



       echo "<script>
       Swal.fire({
         icon: 'success',
         title: 'Exelente!',
         text: 'El usuario se registro correctamente! Ya puedes iniciar sesion!',
         })
        //window.location= 'index.php'
        </script>";

    }else{

      echo '<div class="alert alert-danger" role="alert">
                    Debe completar todos los campos para registrarse :(
             </div> ';


    }

  }



}


