<?php
  require('api/functions.php');

    session_start();

    if (!$_SESSION['name_user']) {
        header('location: pages/login.php');
    }

?>

<?php

$userID = $_SESSION['id_user'];
$userName = $_SESSION['name_user'];
$userLastName = $_SESSION['lastName_user'];
//Cuantidad de compras/gastos
$data2 = CuentaGastos::cuentaRegistroGastos($con,$userID);
//suma mensual
$data3 = SumaGastos::sumaRegistroGastos($con,$userID);
//suma Anual
$data4 = SumaGastosAnual::sumaAnualRegistroGastos($con,$userID);



?>

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
  <!-- Theme bootstrap -->
   <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="cdn.datatables.net/2.1.2/css/dataTables.dataTables.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


  <!-- Google Font: Source Sans Pro para charts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

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

<script>

  // $(function () {
//     $("#example1").DataTable({
//       "responsive": true, "lengthChange": false, "autoWidth": false,
//       "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
//     }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
//     $('#example2').DataTable({
//       "paging": true,
//       "lengthChange": false,
//       "searching": false,
//       "ordering": true,
//       "info": true,
//       "autoWidth": false,
//       "responsive": true,
//     });
//   });

$(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example1').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });


</script>
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
<!-- <script src="dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="dist/js/pages/dashboard3.js"></script> -->
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
 <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
 <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
 <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script> -->
<!-- <script src="cdn.datatables.net/2.1.2/css/dataTables.dataTables.min.css"></script> -->
<
<script>

      //GRAFICOS-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Tarjeta',
          'Efectivo',
          'Debito',

      ],
      datasets: [
        {
          data: [600,100,300],
          backgroundColor : [ '#00a65a', '#00c0ef','#00ef04']
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })


 //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label               : 'Digital Goods',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label               : 'Electronics',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    new Chart(areaChartCanvas, {
      type: 'line',
      data: areaChartData,
      options: areaChartOptions
    })

    //Sweet alert funcion alerta eliminar gasto

    function alertaEliminar(cod){
              Swal.fire({
              title: "Estas seguro que desea eliminar este gasto?",
              text: "No podra revertir este cambio!",
              icon: "",
              showCancelButton: true,
              confirmButtonColor: "#3085d6",
              cancelButtonColor: "#d33",
              confirmButtonText: "Si, Eliminarlo!"
      }).then((result) => {
              if (result.isConfirmed) {
                eliminarPHP(cod);
              }
      });
    }

    function eliminarPHP(cod){
      parametros = {id: cod};
      $.ajax({
        data: parametros,
        url: "eliminar.php",
        type:"POST",
        beforeSend: function(){},
        success: function(){
          Swal.fire(
                  "Eliminado", "El registro ha sido eliminado.", "success",
                ).then((result)=>{
                  window.location.href = "http://localhost:3000/index.php?u=usuario1";
                });
        }
      })
    }

  // plugin para el option de agregar gastos y editar


  let ee = document.getElementById('medioDePago');
  let p1 = document.getElementById('plataforma1');
  let p2 = document.getElementById('plataforma2');
  let p3 = document.getElementById('plataforma3');
  let p4 = document.getElementById('plataforma4');

  ee.addEventListener("change", function(){

      if (ee.value === 'E') {
          p1.disabled = true;
          p1.classList.remove('d-none');
          p1.classList.add('form-control');
          p2.classList.add('d-none');
          p3.classList.add('d-none');
          p4.classList.add('d-none');

      }

      if (ee.value === 'O') {
          p2.classList.remove('d-none');
          p2.classList.add('form-control');
          p1.classList.add('d-none');
          p3.classList.add('d-none');
          p4.classList.add('d-none');

      }

      if (ee.value === 'TC') {
          p3.classList.remove('d-none');
          p3.classList.add('form-control');
          p1.classList.add('d-none');
          p4.classList.add('d-none');
          p2.classList.add('d-none');

      }

      if (ee.value === 'T') {
          p4.classList.remove('d-none');
          p4.classList.add('form-control');
          p1.classList.add('d-none');
          p2.classList.add('d-none');
          p3.classList.add('d-none');

      }

  });

    //pluing para eliminar clases en las listas de gastos

    // function eliminarClases(){
    //   let idActual = document.getElementById("idActual").value;
    //   let idTabla = document.getElementById("idTabla").value;
    //     if (idActual != idTabla) {
    //       document.getElementById('sectionGastosList').classList.remove('content');
    //       document.getElementById('alertaNOdata').classList.remove('d-none');
    //       document.getElementById('sectionGastosList').classList.add('d-none');
    //     } else {
    //       document.getElementById('sectionGastosList').classList.remove('d-none');
    //       document.getElementById('sectionGastosList').classList.add('content');
    //       document.getElementById('alertaNOdata').classList.add('d-none');
    //     }
    // }

    //eliminarClases();

//Funciones para eleccion de medios de pago en agregar y editar gastos


// function filter_options(){
// 	if (typeof $("#choice1").data('options') === "undefined") {
//        $("#choice1").data('options', $('#choice2 option').clone());
//   }
//     var id = $("#choice1").val();
//     var options = $("#choice1").data('options').filter('[data-option=' + id + ']');
//     $('#choice2').html(options);
// }

// $(function () {
// 		//Ejecutar el filtro la primera vez
// 		filter_options();

//     //actualizar al cambiar el factor
//     $("#choice1").change(function () {
// 	    filter_options();
// 		});

// });

// $(function () {
//     $("#example1").DataTable({
//       "responsive": true, "lengthChange": false, "autoWidth": false,
//       "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
//     }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
//     $('#example2').DataTable({
//       "paging": true,
//       "lengthChange": false,
//       "searching": false,
//       "ordering": true,
//       "info": true,
//       "autoWidth": false,
//       "responsive": true,
//     });
//   });

// $(function () {
//     $("#example1").DataTable({
//       "responsive": true, "lengthChange": false, "autoWidth": false,
//       "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
//     }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
//     $('#example2').DataTable({
//       "paging": true,
//       "lengthChange": false,
//       "searching": false,
//       "ordering": true,
//       "info": true,
//       "autoWidth": false,
//       "responsive": true,
//     });
//   });


$(document).ready(function () {
  $('#example2').DataTable({
    "columnDefs": [{
      "targets": 0
    }],
    dom: 'Bftip',
    buttons: [
        'copy', 'excel', 'pdf', 'csv','print','colvis'
    ],
    language: {

      "sProcessing": "Procesando...",
      "sLengthMenu": "Mostrar _MENU_ resultados",
      "sZeroRecords": "No se encontraron resultados",
      "sEmptyTable": "Ningun dato disponible en esta tabla",
      "sInfo": "Mostrando resultados _START_-_END_ de  _TOTAL_",
      "sInfoEmpty": "Mostrando resultados del 0 al 0 de un total de 0 registros",
      "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
      "sSearch": "Buscar ",
      "sLoadingRecords": "Cargando...",
      "oPaginate": {
        "sFirst": "Primero",
        "sLast": "Ultimo",
        "sNext": "Siguiente",
        "sPrevious": "Anterior"
      },
      "iDisplayLength": 50,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      "processing": true,
      "serverSide": true,
    }
  });
});

  // $(document).ready( function () {
	// 		$('#myTable')
	// 			.addClass( 'nowrap' )
	// 			.dataTable( {
	// 				responsive: true,
	// 				columnDefs: [
	// 					{
	// 						target: 4,
	// 						render: DataTable.render.date(),
	// 					},
	// 					{
	// 						target: 5,
	// 						render: DataTable.render.number(null, null, 0, '$'),
	// 					},
	// 					{
	// 						targets: [3, 4 ,5],
	// 						className: 'dt-body-right'
	// 					}
	// 				]
	// 			} );

	// 		var browser = $('button[data-tab="tab-browser"]');
	// 		var npm = $('button[data-tab="tab-npm"]');

	// 		browser.on('click', function () {
	// 			$('div.tab-browser').css('display', 'block');
	// 			$('div.tab-npm').css('display', 'none');

	// 			browser.addClass('active');
	// 			npm.removeClass('active');
	// 		});

	// 		npm.on('click', function () {
	// 			$('div.tab-browser').css('display', 'none');
	// 			$('div.tab-npm').css('display', 'block');

	// 			browser.removeClass('active');
	// 			npm.addClass('active');
	// 		});
	// 	} );


</script>
</body>
</html>
