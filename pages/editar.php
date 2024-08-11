<!-- Modal -->
<div class="modal fade" id="modalEditar_<?php echo $item['id_expenses'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Gasto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- ========== Start FORM ========== -->
        <form  action="#" method="post">
        <input required value="<?php echo $item['id_expenses']; ?>" name="idEditar"  type="hidden" class="form-control" id="idEditar" aria-describedby="transporte">
            <div class="form-group">
              <label for="">Nombre del Gasto</label>
              <input name="editarNombreGasto" type="text" class="form-control" id="editarNombreGasto" value="<?php echo $item['name_expenses']; ?>">
              <small id="editarNombreGasto" class="form-text text-muted">Nombre del gasto.</small>
            </div>
            <div class="form-group">
              <label for="">Monto</label>
              <input step="0.1" value="<?php echo $item['amount_expenses']; ?>" name="editarMontoGasto" type="number" class="form-control" id="editarMontoGasto" >
              <small id="editarMontoGasto" class="form-text text-muted">Monto del gasto</small>
            </div>
            <div class="form-group">
              <label for="">Fecha del Gasto</label>
              <input value="<?php echo $item['date_expenses']; ?>" name="editarfechaGasto" type="date" class="form-control" id="editarfechaGasto" >
              <small id="editarFechaGasto" class="form-text text-muted">Fecha del gasto</small>
            </div>
            <div class="form-group">
              <label for="">Periodo/Cuota</label>
              <input value="<?php echo $item['period_expenses']; ?>" name="editarCuotaGasto" type="text" class="form-control" id="editarCuotaGasto" >
              <small id="editarCuotaGasto" class="form-text text-muted">Periodo o Cuota del gasto (dejar vacio si no corresponde)</small>
            </div>
            <div class="form-group">
                        <label>El gasto es fijo o Variable</label>
                  <select value="<?php echo $item['costType_expenses']; ?>"name ="editarTipoGasto"class="form-control">
                    <option value="0">Fijo</option>
                    <option value="1">Variable</option>
                  </select>
            </div>
            <div class="form-group">
                  <label>El gasto es Compartido con alguien mas o no?</label>
                  <select value="<?php echo $item['shared_expenses']; ?>" name="editarEsCompartido" class="form-control">
                    <option value="0">Gasto NO compartido</option>
                    <option value="1">Gasto compartido</option>
                  </select>
            </div>
            <div class="form-group">
                  <label>Medio de pago</label>
                  <select name="medioDePagoEditar" class="form-control" id="medioDePagoEditar">
                      <option id ="SeleccionOptionEditar" selected="true" disabled="disabled">Toca para seleccionar</option>
                      <option value="E1">Efectivo</option>
                      <option  value="O1">Tarjeta de credito</option>
                      <option  value="TC1">Tarjeta de debito</option>
                      <option  value="T1">Transferencia</option>
                  </select>
                    <br>
                    <label id="bancoPlataformaEditar" class="d-none">Banco/Plataforma</label>

                    <select id="plataforma1Editar" name="plataforma1Editar" class="d-none">
                     <option selected="true" disabled="disabled">Toca para seleccionar</option>
                      <option data-option="E1"   value="01">Ninguno</option>
                    </select>

                    <select id="plataforma2Editar" name="plataforma2Editar" class="d-none">
                     <option selected="true" disabled="disabled">Toca para seleccionar</option>
                      <option data-option="O1"   value="01">Banco Galicia VISA</option>
                      <option data-option="O1"   value="02">Banco Santander VISA</option>
                      <option data-option="O1"    value="03">Brubank VISA</option>
                      <option data-option="O1"    value="04">Mercado Pago Credito</option>
                    </select>

                    <select  id="plataforma3Editar" name="plataforma3Editar" class="d-none">
                     <option selected="true" disabled="disabled">Toca para seleccionar</option>
                      <option data-option="TC1"    value="TC11">Galicia</option>
                      <option data-option="TC1"   value="TC21">Santander</option>
                      <option data-option="TC1"    value="TC31">Brubank</option>
                      <option data-option="TC1"   value="TC41">Mercado Pago</option>
                    </select>

                    <select id="plataforma4Editar" name="plataforma4Editar" class="d-none">
                      <option selected="true" disabled="disabled">Toca para seleccionar</option>
                      <option data-option="T1"   value="T1">Banco galicia</option>
                      <option data-option="T1"   value="T1">Banco Santander</option>
                      <option data-option="T1"   value="T1">Banco Brubank</option>
                    </select>

            </div>
            <div class="form-group">
                  <label>Observacion del gasto</label>
                  <textarea value="" name="editarObsGasto" class="form-control" rows="3" placeholder="Escriba aqui ..."><?php echo $item['obs_expenses']; ?></textarea>
            </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success">Editar</button>
      </div>
    </div>
  </div>
</div>

</form>

  <!-- ========== End FORM ========== -->
