<!-- Modal Agregar -->
<?php require('agregar.php');

$data = MuestraGastos::mostrarRegistroGastos($con);
$userID = $_SESSION['id_user'];
?>

<?php
    if (isset($_POST['nombreGasto'])) {

    echo'<script>
                        Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "Gastos Agregado",
                        showConfirmButton: false,
                        timer: 2000
                      });
        </script>' ;


  }
?>


 <!-- Main content -->
<div class="content-wrapper">
<!-- charts -->
<section class="content">

  <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <!-- AREA CHART -->

              <!-- /.card -->

              <!-- DONUT CHART -->
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Donut Chart</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              <!-- AREA CHART -->


              <!-- /.card -->

            </div>
            <!-- /.col (LEFT) -->
            <div class="col-md-6">

            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Area Chart</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart">
                    <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>

            </div>
            <!-- /.col (RIGHT) -->
          </div>
          <!-- /.row -->
  </div>
<!-- en estos input hidden, guardamos los valores de los id a comparar, para que con js, usando clases eliminemos la tabla si es que no hay datos  -->
  <div>
      <input type="hidden" name="idActual" id="idActual" value="<?php echo $data[0]['id_user']; ?>"></input>
      <input type="hidden" name="idtabla" id="idTabla"  value="<?php echo $userID; ?>"></input>
 </div>

</section>
<!-- fin charts -->
<?php
                if ($userID !== $data[0]['id_user']) {

                    echo '<div class="alert alert-danger">
                    <strong>Todavia no hay gastos en este periodo.</strong>
                          </div>';


                  }else{

                  }
               ?>


 <section class="content" id="sectionGastosList" >
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-primary btn-sm btn-sm mr-1" data-toggle="modal" data-target="#exampleModal" >Agregar Gasto</button>
                <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>

                  <th scope="col">Gasto/Compra</th>
                  <th scope="col">Monto</th>
                  <th scope="col">Fecha</th>
                  <th scope="col">Cuota</th>
                  <th scope="col">Tipo de Gasto</th>
                  <th scope="col">Compartido</th>
                  <th scope="col">Observacion</th>
                  <th scope="col">Editar/Eliminar</th>
                </tr>
            </thead>
              <tbody>
                <tr>

                <?php foreach ($data as $item) { ?>
                  <td>

                    <?php

                      if ($userID === $item['id_user']) {

                        echo $item['name_expenses'];

                      }else{

                        echo "No agregado";
                      }

                    ?>

                  </td>
                  <td>

                  <?php

                      if ($userID === $item['id_user']) {

                        echo  $item['amount_expenses'];

                      }else{

                        echo "No agregado";
                      }

                      ?>

                  </td>
                  <td>

                  <?php

                          if ($userID === $item['id_user']) {

                            echo  $item['date_expenses'];

                          }else{

                            echo "No agregado";
                          }

                          ?>

                  </td>
                  <td>


                  <?php

                      if ($userID === $item['id_user']) {

                        if ($item['period_expenses'] === null) {
                          echo "No agregado";
                         }else{

                        echo $item['period_expenses'];
                    }

                      }else{

                        echo "No agregado";
                      }

                      ?>

                  </td>
                  <td>
                  <?php
                  if ($userID === $item['id_user']) {

                    if ($item['costType_expenses'] === 0) {
                      echo "FIJO";
                     }else{

                      echo "VARIABLE";
                     }

                  }else{

                    echo "No agregado";
                  }



                   ?>
                  </td>
                  <td>
                  <?php

                  if ($userID === $item['id_user']) {

                    if ($item['shared_expenses'] === 0) {
                      echo "Comun, no compartido";
                }else{

                      echo "Compartido";
                }

                  }else{

                    echo "No agregado";
                  }

                   ?>
                  </td>
                  <td>
                  <?php

                  if ($userID === $item['id_user']) {

                    if ($item['obs_expenses'] === '') {
                      echo "No agregado";
                }else{

                      echo $item['obs_expenses'];
                }

                  }else{

                    echo "No agregado";
                  }

                   ?>
                  </td>
                  <td><button type="button" class="btn btn-outline-success btn-sm btn-sm mr-1">Editar</button>
                  <button type="button"class="btn btn-outline-danger btn-sm">Eliminar</button>
                  </td>
                </tr>
                    <?php } ?>

              </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
            </div>
            </div>
            </div>
 <!-- FIN Main content -->




 <!--
  <div class="content-wrapper">
    <div class="card">
        <div id="miDiv" class="text-center">
            <h1>Control Gastos Anabel</h1>
            <h5>Presupuesto del mes Actual: $500.000</h5>
            <table class="table table-success table-striped">
            <thead>
                <tr>

                  <th scope="col">Gasto/Compra</th>
                  <th scope="col">Monto</th>
                  <th scope="col">Cuota</th>
                  <th scope="col">Tipo de Gasto</th>
                  <th scope="col">Compartido</th>
                  <th scope="col">Observacion</th>
                  <th scope="col">Editar/Eliminar</th>
                </tr>
            </thead>
              <tbody>
                <tr>
                  <td>Alquiler</td>
                  <td>$290000</td>
                  <td>no</td>
                  <td>Fijo</td>
                  <td>si</td>
                  <td>Alquiler del mes de Junio</td>
                  <td style><button type="button" class="btn btn-success btn-sm mr-1">Editar</button><button type="button"class="btn btn-danger btn-sm">Eliminar</button></td>
                </tr>
                <tr>
                 <td>Crema Rishis</td>
                  <td>$45000</td>
                  <td>1/4</td>
                  <td>Variable</td>
                  <td>no</td>
                  <td>Cremas para cara y cuerpo</td>
                  <td style><button type="button" class="btn btn-success btn-sm mr-1">Editar</button><button type="button"class="btn btn-danger btn-sm">Eliminar</button></td>
                </tr>
                <tr>
                 <td>Mercaderia Carrefour</td>
                  <td>$160000</td>
                  <td>1/3</td>
                  <td>Variable</td>
                  <td>si</td>
                  <td>Compras del mes de Junio</td>
                  <td style><button type="button" class="btn btn-success btn-sm mr-1">Editar</button><button type="button"class="btn btn-danger btn-sm">Eliminar</button></td>
                </tr>

              </tbody>
            </table>
        </div>
    </div>
  </div>
  -->

