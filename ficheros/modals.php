<div class="modal fade" id="exampleModal" tabindex="2" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Nuevo Evento</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    onclick="location.reload()"></button>
            </div>
            <div class="modal-body">
                <form id="formulario-modal">
                    <!-- <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Imagen:</label>
            <input type="file" name="imagen" id="">
          </div> -->
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control" id="recipient-name" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Descripción:</label>
                        <textarea class="form-control" id="message-text" name="desc" ></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Fecha de Vencimiento:</label>
                        <input type="date" name="fecha" id="" >
                    </div>
                    <input type="submit" value="Guardar" class="btn btn-primary">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                    onclick="location.reload()">Close</button>
                <!-- <button type="button" class="btn btn-primary">Guardar</button> -->
            </div>
        </div>
    </div>
</div>
