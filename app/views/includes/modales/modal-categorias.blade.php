<div class="modal fade" id="modal-categorias" name="modal-categorias" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <form action="#" method="get" role="form" id="form-categoria">
        <div class="modal-content">
            <div class="modal-header bg-aqua text-center">
                <button type="button" class="close btn-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4>Nuevo tipo de contacto</h4>
            </div>
            <div class="modal-body">   
                <div class="form-group">
                  <span class="obligatorio">*</span>
                  <label for="nombre"class="control-label" > Nombre:</label>
                  <input type="text" class="form-control" style="border-color: #000; color: #000;" id="nombre-categoria" name="nombre-categoria" placeholder="Escribe el nombre del tipo de contacto" required>
                  <br>
                  <label for="descripcion"class="control-label"> Descripcion:</label>
                  <textarea class="form-control" rows="6" id="descripcion-categoria" name="descripcion-categoria" placeholder="Escribe la descripción del tipo de contacto"></textarea>
                </div>                   
            </div>
            <div class="modal-footer">
                <div id="mensaje-respuesta" class="alert alert-dismissable text-center" style="display: none;">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5>  <i class="icon fa fa-check"></i> Tipo de contacto creado!</h5>
                  <span>Has creado una nueva categoría.</span>
                </div>
                <a href="#" id="crear-categoria" class="btn btn-info"> Crear Tipo de Contacto</a>
            </div>               
        </div>
    </form>
  </div>
</div>