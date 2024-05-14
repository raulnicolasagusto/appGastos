

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Control de Gastos</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <style>
        /* Estilo personalizado para el div */
        #miDiv {
            margin-top: 5%; /* Margen superior del 10% */
            margin-left: 15%; /* Margen izquierdo del 20% */
            margin-right: 15%; /* Margen derecho del 20% */
            /* Puedes agregar más estilos según sea necesario */
        }

         /* Estilos adicionales para hacer el div responsive */
         @media (max-width: 768px) {
            #miDiv {
                margin-left: 5%; /* Reducir el margen izquierdo al 5% en pantallas pequeñas */
                margin-right: 5%; /* Reducir el margen derecho al 5% en pantallas pequeñas */
            }
        }
    </style>

</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<?php

  if (isset($_GET['u'])) {


    require('./pages/layout/navbar.php');

    require('./pages/layout/aside.php');

    require('./pages/gastosUsuario.php');

    require('./pages/layout/footer.php');


  }else{

    require('./pages/layout/navbar.php');

    require('./pages/layout/aside.php');

    require('./pages/dashboard.php');

    require('./pages/layout/footer.php');
  }
?>





  <!-- Navbar -->
<?php

?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php

  ?>



  <!-- Control Sidebar -->
  <!-- <aside class="control-sidebar control-sidebar-dark"> -->
    <!-- Control sidebar content goes here -->
  <!-- </aside> -->
  <!-- /.control-sidebar -->

   <!--Contenido Principal -->
   <?php

   ?>


  <!-- Main Footer -->
  <?php

   ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard3.js"></script>
</body>
</html>
