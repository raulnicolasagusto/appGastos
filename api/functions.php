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

  //INGRESO USUARIOS

  static public function ingresoUsuario($con){


    if (isset($_POST["ingresoEmail"]) && (!$_POST["ingresoEmail"] == "")) {

      $emailUser = $_POST["ingresoEmail"];
      $passUser = $_POST["ingresoPass"];

      $query = $con->prepare("SELECT id_user, name_user, pass_user, mail_user, lastName_user FROM users WHERE mail_user = '$emailUser' AND pass_user = '$passUser'");
      $query->execute();




      return  $query->fetch();



    }else{

      echo '<div class="alert alert-danger" role="alert">
             Email o contraseña invalidos :(
            </div> ';
    }



  }



}


class InicioSesion{
  static public function iniciosesion($login){

    session_start();
      $_SESSION['id_user'] = $login['id_user'];
      $_SESSION['name_user'] = $login['name_user'];
      $_SESSION['mail_user'] = $login['mail_user'];
      $_SESSION['lastName_user'] = $login['lastName_user'];
      header('location: ../../../index.php');


  }
}


//Mosotrar Gastos

class MuestraGastos{

	static public function mostrarRegistroGastos($con,$userID){



		$stmt = $con->prepare("SELECT * FROM expenses WHERE id_user = $userID ORDER BY id_expenses DESC");

		$stmt -> execute();

		$respuesta =  $stmt -> fetchall();

        return $respuesta;

		$stmt->close();
		$stmt = null;
    }
}

