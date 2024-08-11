<!-- Modal Agregar -->

<?php
require('agregar.php');

$userID = $_SESSION['id_user'];
$data = MuestraGastos::mostrarRegistroGastos($con, $userID);
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
              <h3 class="card-title">Tipos de gastos de <?php fechaTraducida(); ?></h3>

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
            <div class="d-flex">
              <div class="text-info mr-2">Efectivo:</div>
              <div class="text-info mr-2">TC: </div>
              <div class="text-info mr-2">TD: </div>
              <div class="text-info mr-2">Transf: </div>
            </div>
              <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;">

              </canvas>
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
      <input type="hidden" name="idtabla" id="idTabla" value="<?php echo $userID; ?>"></input>
    </div>

  </section>
  <!-- fin charts -->



  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Se muestran los gastos del mes de <strong><?php fechaTraducida(); ?></strong></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <!-- Button Agregar modal -->
              <button onclick="activaFuncionOnclickAgregar()" type="button" class="btn btn-outline-primary btn-sm btn-sm mr-1 mb-2" data-toggle="modal" data-target="#exampleModal">Agregar Gasto</button>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>

                    <th scope="col">Fecha</th>
                    <th scope="col">Gasto/Compra</th>
                    <th scope="col">Monto</th>
                    <th scope="col">Observacion</th>
                    <th scope="col">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <?php foreach ($data as $valor => $item) { ?>
                      <td>

                      <?php

                        if ($userID === $item['id_user']) {

                          echo  $item['date_expenses'];
                        } else {

                          echo "No agregado";
                        }

                        ?>

                      </td>
                      <td>

                        <?php

                        if ($userID === $item['id_user']) {

                          echo $item['name_expenses'];
                        } else {

                          echo "No agregado";
                        }

                        ?>

                      </td>
                      <td>

                        <?php

                        if ($userID === $item['id_user']) {

                          echo '$' . number_format($item['amount_expenses'], 1, '.');
                        } else {

                          echo "No agregado";
                        }

                        ?>

                      </td>

                      <td>
                        <!-- Button trigger modal observacion -->
                        <button type="button" class="btn btn-outline-info  btn-sm btn-sm mr-1" data-toggle="modal" data-target="#info_<?php echo $item['id_expenses']; ?>">
                          Ver mas info
                        </button>
                      </td>



                      <td>
                        <!-- Button trigger modal Editar -->
                        <button id="" onclick="" type="button" class="btn btn-outline-success btn-sm btn-sm mr-1" data-toggle="modal" data-target="#modalEditar_<?php echo $item['id_expenses']; ?>"><i class="nav-icon fas fa-edit"></i></button>
                        <a onclick='alertaEliminar(<?php echo $item["id_expenses"]; ?>);' type="button" class="btn btn-outline-danger btn-sm"><i class="nav-icon fas fa-trash"></i></a>
                      </td>

                      <?php require('editar.php'); ?>
                      <?php include 'verObs.php'; ?>
                  </tr>
                <?php } ?>

                </tbody>
              </table>

              <?php

              if (empty($data)) {
                echo '<div class="alert alert-danger" id="alertaNOdata">
                                    <strong>Todavia no hay gastos en este periodo.</strong>
                          </div>';
              }

              ?>

              <?php
              //AGREGAR GASTO
              if (isset($_POST['nombreGasto'])) {

                $add = AgregarGastos::agregaGasto($con, $userID);
              }
              //EDITAR GASTO
              if (isset($_POST['editarNombreGasto'])) {
                $edit = EditarGastos::editarGasto($con);
              }
              ?>

            <!-- Eliminar -->


            <!-- Eliminar -->

            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
    </div>
</div>
<!-- FIN Main content -->
