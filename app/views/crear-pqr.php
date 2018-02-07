<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Registrar PQR</title>
	<?php include SRC_PATH."header.php";

	if(isset($resgitroSuccess)){
		echo '<div class="col-xs-12 alert alert-success text-center" id="registroCreado" >'.$resgitroSuccess.'</div>';
	}
	 ?> 
	<div class="col-xs-6  col-md-offset-3" >
		<div class="panel-body">
			    		<form role="form" method="POST" action="registroPQR" id="register">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group"><label>Tipo Identificación</label><span style="color:red;float: right;">*</span>
			                <input type="text" name="tipoID" id="tipoID" class="form-control input-sm" placeholder="Tipo Identificación" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group"><label>Tipo Solicitud</label><span style="color:red;float: right;">*</span>
			    				<input type="text" name="tipoSol" id="tipoSol" class="form-control input-sm" placeholder="Tipo Solicitud" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group"><label>Razón Social</label><span style="color:red;float: right;">*</span>
			    				<input type="text" name="rz" id="rz" class="form-control input-sm" placeholder="Razón Social" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group"><label>Ciudad</label><span style="color:red;float: right;">*</span>
			    				<input type="text" name="ciudad" id="ciudad" class="form-control input-sm" placeholder="Ciudad" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group"><label>Comentario</label><span style="color:red;float: right;">*</span>
			    				<input type="text" name="comentario" id="comentario" class="form-control input-sm" placeholder="Comentario" required>
			    					</div>
			    				</div>
			    			</div>
			    			<input type="submit" value="Register" class="btn btn-info btn-block">
			    		</form>
			    	</div>
				</div>

					
<?php include SRC_PATH."footer.php"; ?>
