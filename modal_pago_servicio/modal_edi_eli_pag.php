<!-- Ventana Editar Registros CRUD -->
<div class="modal fade" id="edit_<?php echo $row['cod_pag']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar Pago de Servicio</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="crud_pago_servicio/editar_pago.php?id=<?php echo $row['cod_pag']; ?>">

                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">codigo de Pago servicio:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="cod_pag" value="<?php echo $row['cod_pag']; ?>">
					</div>
				</div>	
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Concepto:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="concepto" value="<?php echo $row['concepto']; ?>">
					</div>
				</div>				
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">fecha:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="fecha" value="<?php echo $row['fecha']; ?>">
					</div>
				</div>

                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">monto :</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="monto" value="<?php echo $row['monto']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">cliente:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="cliente" value="<?php echo $row['cliente']; ?>">
					</div>
				</div>

            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="editar" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Actualizar Ahora</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['cod_pag']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Borrar Pago de Servicio</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de Borrar el registro?</p>
				<h2 class="text-center"><?php echo $row['fecha'].' '.$row['monto']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="crud_pago_servicio/borrar_pago.php?id=<?php echo $row['cod_pag']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Si</a>
            </div>

        </div>
    </div>
</div>