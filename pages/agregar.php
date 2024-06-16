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
        <form action="#" method="post">
            <div class="form-group">
              <label for="">Nombre del Gasto</label>
              <input name="nombreGasto" type="text" class="form-control" id="nombreGasto" >
              <small id="nombreGasto" class="form-text text-muted">Nombre del gasto.</small>
            </div>
            <div class="form-group">
              <label for="">Monto</label>
              <input name="montoGasto" type="number" class="form-control" id="montoGasto" >
              <small id="nombreGasto" class="form-text text-muted">Monto del gasto</small>
            </div>
            <div class="form-group">
              <label for="">Fecha del Gasto</label>
              <input name="nombreGasto" type="date" class="form-control" id="nombreGasto" >
              <small id="nombreGasto" class="form-text text-muted">Fecha del gasto</small>
            </div>
            <div class="form-group">
              <label for="">Periodo/Cuota</label>
              <input name="nombreGasto" type="text" class="form-control" id="nombreGasto" >
              <small id="nombreGasto" class="form-text text-muted">Periodo o Cuota del gasto (dejar vacio si no corresponde)</small>
            </div>
            <div class="form-group">
                        <label>El gasto es fijo o Variable</label>
                  <select class="form-control">
                    <option>Fijo</option>
                    <option>Variable</option>
                  </select>
            </div>
            <div class="form-group">
                  <label>El gasto es Compartido con alguien mas o no?</label>
                  <select class="form-control">
                    <option>Gasto no compartido</option>
                    <option>Gasto compartido</option>
                  </select>
            </div>
            <div class="form-group">
                  <label>Observacion del gasto</label>
                  <textarea class="form-control" rows="3" placeholder="Escriba aqui ..."></textarea>
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
