<!-- Modal -->
<div class="modal fade" id="info_<?php echo $item['id_expenses']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mas info de la compra:  <?php echo $item['name_expenses']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


            <ul>
              <li>
              <?php



                    if ($item['obs_expenses'] === '') {
                        echo "No agregado";
                    }else{

                        echo $item['obs_expenses'];
                    }



               ?>

              </li>
              <li>El tipo de gasto es:

              <?php


                          if ($item['costType_expenses'] === 0) {
                            echo "FIJO";
                          } else {

                            echo "VARIABLE";
                          }



                        ?>

              </li>
              <li>
                El gasto
              <?php



                      if ($item['shared_expenses'] === 0) {
                        echo "NO ES";
                      } else {

                        echo "ES";
                      }

              ?>
              compartido

              </li>
              <li>
                Plataforma de pago:
                  <?php

                      if ($userID === $item['id_user']) {

                        if ($item['platformPayment_expenses'] === 0) {
                          echo "Efectivo";
                        } else {

                          echo $item['platformPayment_expenses'];
                        }
                      } else {

                        echo "No agregado";
                      }

                      ?>
              </li>

              <li>
                Medio de pago:
                <?php

                    if ($userID === $item['id_user']) {

                      if ($item['paymentMethod_expenses'] === 0) {
                        echo "Efectivo";
                      } else {

                        echo $item['paymentMethod_expenses'];
                      }
                    } else {

                      echo "No agregado";
                    }

                    ?>

              </li>




                <?php



                    if ($item['period_expenses'] === '') {
                      echo "";
                    } else {

                      echo "
                      <li>
                      Cuota del gasto: ". $item['period_expenses']
                      ."</li>";

                    }

                  ?>

            </ul>




        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>




