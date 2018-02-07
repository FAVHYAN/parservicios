<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Registrar</title>
	<?php include SRC_PATH."header.php";

	if(isset($resgitroSuccess)){
		echo '<div class="col-xs-12 alert alert-success text-center" id="registroCreado" >'.$resgitroSuccess.'</div>';
	}
	 ?> 
	<div class="col-xs-6  col-md-offset-3" >
		<div class="panel-body">
			    		<form role="form" method="POST" action="registro" id="register">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group"><label>Nombre</label><span style="color:red;float: right;">*</span>
			                <input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombres" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group"><label>Correo Electrónico</label><span style="color:red;float: right;">*</span>
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Correo Electrónico" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group"><label>Contraseña</label><span style="color:red;float: right;">*</span>
			    				<input type="password" name="contrasena" id="contrasena" class="form-control input-sm" placeholder="Contraseña" required>
			    					</div>
			    				</div>
			    			</div>
			    			<input type="submit" value="Register" class="btn btn-info btn-block">
			    		</form>
			    	</div>
				</div>

					
<?php include SRC_PATH."footer.php"; ?>
