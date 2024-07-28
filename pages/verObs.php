<!-- Modal -->
<div class="modal fade" id="info_<?php echo $item['id_user']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Observacion de:  <?php echo $item['name_expenses']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


            <ul>
              <li>
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

              </li>
              <li>El tipo de gasto es:

              <?php
                        if ($userID === $item['id_user']) {

                          if ($item['costType_expenses'] === 0) {
                            echo "FIJO";
                          } else {

                            echo "VARIABLE";
                          }
                        } else {

                          echo "No agregado";
                        }



                        ?>

              </li>
              <li>
                El gasto
              <?php

                    if ($userID === $item['id_user']) {

                      if ($item['shared_expenses'] === 0) {
                        echo "NO ES";
                      } else {

                        echo "ES";
                      }
                    } else {

                      echo "No agregado";
                    }

              ?>
              compartido

              </li>
            </ul>




        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>




