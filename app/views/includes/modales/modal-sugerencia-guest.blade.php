<div class="modal fade" id="mensaje-sugerencia" name="mensaje-sugerencia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="#" method="get" role="form" id="form-sugerencia">
        <div class="modal-content">
            <div class="modal-header bg-aqua text-center">
                <button type="button" class="close btn-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h1 style="color: #000;">Dudas o sugerencias</h1> 
                    <p>¿Tienes alguna duda o alguna sugerencia?<br>
                    Escribenos y responderemos cuanto antes</p>
            </div>
            <div class="modal-body">                    
                <div class="form-group">
                  <label for="nombre"class="control-label" > Nombre:</label>
                  <input type="text" class="form-control" style="border-color: #000; color: #000;" id="nombre" name="nombre" placeholder="introducir nombre" required>
                  <br>
                  <label for="correo"class="control-label" > Correo Electrónico:</label>
                  <input class="form-control" type="email" style="border-color: #000; color: #000;" id="correo" name="correo" placeholder="introducir correo electrónico" required>
                  <br>
                  <label for="mensaje"class="control-label"> Mensaje:</label>
                  <textarea class="form-control" rows="6" id="mensaje" name="mensaje" placeholder="Escriba su mensaje" required></textarea>
                </div>                   
            </div>
            <div class="modal-footer">
                <button type="submit" id="enviar-sugerencia" class="btn btn-info"> Enviar </button>
                <div id="mensaje-respuesta" class="alert alert-dismissable" style="display: none;">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5>  <i class="icon fa fa-check"></i> Mensaje Enviado!</h5>
                  <span>Success alert preview. This alert is dismissable.</span>
                </div>
            </div>               
        </div>
    </form>
  </div>
</div>