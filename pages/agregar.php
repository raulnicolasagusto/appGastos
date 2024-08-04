<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo Gasto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- ========== Start FORM ========== -->
        <form class="formAgregar" id="formAgregar"action="#" method="post">
            <div class="form-group">
              <label for="">Nombre del Gasto</label>
              <input name="nombreGasto" type="text" class="form-control" id="nombreGasto" >
              <small id="nombreGasto" class="form-text text-muted">Nombre del gasto.</small>
            </div>
            <div class="form-group">
              <label for="">Monto</label>
              <input step="0.1" name="montoGasto" type="number" class="form-control" id="montoGasto" >
              <small id="montoGasto" class="form-text text-muted">Monto del gasto</small>
            </div>
            <div class="form-group">
              <label for="">Fecha del Gasto</label>
              <input name="fechaGasto" type="date" class="form-control" id="fechaGasto" >
              <small id="fechaGasto" class="form-text text-muted">Fecha del gasto</small>
            </div>
            <div class="form-group">
              <label for="">Periodo/Cuota</label>
              <input name="cuotaGasto" type="text" class="form-control" id="cuotaGasto" >
              <small id="cuotaGasto" class="form-text text-muted">Periodo o Cuota del gasto (dejar vacio si no corresponde)</small>
            </div>
            <div class="form-group">
                        <label>El gasto es fijo o Variable</label>
                  <select name ="tipoGasto"class="form-control">
                    <option value="0">Fijo</option>
                    <option value="1">Variable</option>
                  </select>
            </div>
            <div class="form-group">
                  <label>El gasto es Compartido con alguien mas o no?</label>
                  <select name="esCompartido" class="form-control">
                    <option value="0">Gasto NO compartido</option>
                    <option value="1">Gasto compartido</option>
                  </select>
            </div>
            <div class="form-group">
                  <label>Medio de pago</label>
                  <select name="medioDePago" class="form-control" id="medioDePago">
                      <option  value="O">Tarjeta de credito</option>
                      <option  value="TC">Tarjeta de debito</option>
                      <option  value="T">Transferencia</option>
                      <option value="E">Efectivo</option>
                  </select>
                    <br>
                    <label>Banco/Plataforma</label>

                    <select id="plataforma1" name="plataforma1" class="form-control">
                      <option data-option="E"   value="01">Ninguno</option>
                    </select>

                    <select id="plataforma2" name="plataforma2" class="form-control">
                      <option data-option="O"   value="01">Banco Galicia VISA</option>
                      <option data-option="O"   value="02">Banco Santander VISA</option>
                      <option data-option="O"    value="03">Brubank VISA</option>
                      <option data-option="O"    value="04">Mercado Pago Credito</option>
                    </select>

                    <select  id="plataforma3" name="plataforma3" class="form-control">
                      <option data-option="TC"    value="TC1">Galicia</option>
                      <option data-option="TC"   value="TC2">Santander</option>
                      <option data-option="TC"    value="TC3">Brubank</option>
                      <option data-option="TC"   value="TC4">Mercado Pago</option>
                    </select>

                    <select id="plataforma4" name="plataforma4" class="form-control">
                      <option data-option="T"   value="T">Banco galicia</option>
                      <option data-option="T"   value="T">Banco Santander</option>
                      <option data-option="T"   value="T">Banco Brubank</option>
                    </select>

            </div>
            <div class="form-group">
                  <label>Observacion del gasto</label>
                  <textarea name="obsGasto" class="form-control" rows="3" placeholder="Escriba aqui ..."></textarea>
            </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Agregar</button>
      </div>
    </div>
  </div>
</div>
</form>
  <!-- ========== End FORM ========== -->
