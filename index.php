<?php
	require('mysql/conexion.php');
	include_once('lib/html.php');

?>

<head>
	<?php head(); ?>
</head>

<body class="center-block">
	<h1 class="text-center">Sistema para Gestion Medica</h1>
	
	<br><br><br>
	<div class="row">
        <div class="col-sm-6 col-sm-offset-3 form-box">
        	<div class="form-top">
        		<div class="form-top-left">
        			<div class="form-bottom">
						<form action="mysql/login.php" method="POST">
							<img src="img/cirujano.png" width="20%" height="20%" class="img-responsive center-block"><br>
							<label for="">Usuario</label><input type="text" name="luser" class="form-username form-control" id="form-username" placeholder="Usuario..." required/><br>
							<label for="">Password</label><input type="password" name="lpass" class="form-username form-control" id="form-username" placeholder="Contraseña..." required /><br><br>
							<input type="submit" value="Ingresar" class="btn btn-warning center-block" />
						</form>	
					</div>	
				</div>
			</div>
		</div>
	</div>

</body>
<footer>
	<?php footer(); ?>
</footer>
</html>