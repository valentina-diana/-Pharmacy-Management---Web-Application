<?php
include_once 'Login.php';

if(isset($_POST['login'])){
     if (Login::Autentificare($_POST['user'],$_POST['pass'])) {
        header('Location:registration.php');
    
    }
    else echo 'gresit';
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Autentificare</title>
    <link rel="stylesheet" type="text/css" href="css/autentificare2.css">

</head>
<body>
	<?php include("header.php"); ?>



	<div class="container">
		<div class="col-md-12">
			<div class="row d-flex justify-content-center">
				<div class="col-md-6 shadow-sm" style="margin-top:100px;">
                    <form action="Loginform.php" method="post">
						<h3 class="text-center my-3">Autentificare</h3>
						<div class="text-center"></div> <br>
						<label>Email</label>
						<input type="text" name="user" class="form-control my-2" placeholder="Introduti email"> <br>

						<label>Parola</label>
						<input type="password" name="pass" class="form-control my-2" placeholder="Introduceti parola">
                        <br>
						<input class="btn btn-success" type="submit" name="login"  value="Autentificare" id="login">
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>