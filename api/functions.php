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

	static public function mostrarRegistroGastos($con,$userID,){


		$stmt = $con->prepare("SELECT * FROM expenses WHERE id_user = $userID ORDER BY id_expenses DESC");

		$stmt -> execute();

		$respuesta =  $stmt -> fetchall();

    return $respuesta;

		$stmt->close();
		$stmt = null;
    }
}

//Agregar Gasto

  class AgregarGastos{

    static public function agregaGasto($con, $userID){

      $nameExp = $_POST["nombreGasto"];
      $amountExp = $_POST["montoGasto"];
      // $amountExp = $_POST["montoGasto"];
      $dateExp = $_POST["fechaGasto"];
      $pediodExp = $_POST["cuotaGasto"];
      $typeExp = $_POST["tipoGasto"];
      $sharedExp = $_POST["esCompartido"];
      $obsExp = $_POST["obsGasto"];


      $table = "expenses";

      $query = $con->prepare("INSERT INTO $table(id_user, name_expenses, amount_expenses, date_expenses, period_expenses, costType_expenses, shared_expenses, obs_expenses)
                VALUES(:idTabla, :nameExp, :amountExp, :dateExp, :pediodExp, :typeExp, :sharedExp, :obsExp )");

      $query->bindParam(':idTabla', $userID);
      $query->bindParam(':nameExp', $nameExp);
      $query->bindParam(':amountExp', $amountExp);
      $query->bindParam(':dateExp', $dateExp);
      $query->bindParam(':pediodExp', $pediodExp);
      $query->bindParam(':typeExp', $typeExp);
      $query->bindParam(':sharedExp', $sharedExp);
      $query->bindParam(':obsExp', $obsExp);

      $query->execute();

      // echo $nameExp . "</br>" ;
      // echo $amountExp. "</br>" ;
      // echo $dateExp. "</br>" ;
      // echo $pediodExp. "</br>" ;
      // echo $typeExp. "</br>" ;
      // echo $sharedExp. "</br>" ;
      // echo $obsExp. "</br>" ;

      echo'<script>
                    Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Gastos Agregado",
                    showConfirmButton: false,
                    timer: 2000
                              });


                  if (window.history.replaceState){

                    window.history.replaceState( null, null, window.location.href );
                    function redireccionarPagina() {
                      window.location = "http://localhost:3000/index.php?u=usuario1";
                      }
                      setTimeout("redireccionarPagina()", 2500);

                    }

          </script>' ;

    }

  }

//Editar Gastos

class EditarGastos{



	static public function editarGasto($con){

      $idEditar = $_POST['idEditar'];
		  $EditNameExp = $_POST["editarNombreGasto"];
      $EditAmountExp = $_POST["editarMontoGasto"];
      // $amountExp = $_POST["montoGasto"];
      $EditDateExp = $_POST["editarfechaGasto"];
      $EditPediodExp = $_POST["editarCuotaGasto"];
      $EditTypeExp = $_POST["editarTipoGasto"];
      $EditSharedExp = $_POST["editarEsCompartido"];
      $EditObsExp = $_POST["editarObsGasto"];


      $table = "expenses";

      $stmt = $con->prepare("UPDATE $table SET name_expenses = '$EditNameExp',
                             amount_expenses = '$EditAmountExp',
                             date_expenses = '$EditDateExp',
                             period_expenses = '$EditPediodExp',
                              costType_expenses = '$EditTypeExp',
                              shared_expenses = '$EditSharedExp',
                              obs_expenses = '$EditObsExp'
                               WHERE id_expenses='$idEditar'" );

      $stmt ->execute();

      echo'<script>
                    Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Gasto editado con exito!",
                    showConfirmButton: false,
                    timer: 2000
                              });


                  if (window.history.replaceState){

                    window.history.replaceState( null, null, window.location.href );
                    function redireccionarPagina() {
                      window.location = "http://localhost:3000/index.php?u=usuario1";
                      }
                      setTimeout("redireccionarPagina()", 2500);

                    }

          </script>' ;
		// echo $EditNameExp . "</br>";
		// echo $EditAmountExp . "</br>";
		// echo $EditDateExp . "</br>";
		// echo $EditPediodExp . "</br>";
		// echo $EditTypeExp . "</br>";
    // echo $EditSharedExp . "</br>";
    // echo $EditObsExp . "</br>";

		}



	}
