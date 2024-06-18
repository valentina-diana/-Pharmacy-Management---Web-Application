<?php
include_once 'Client.php';
$client=new Client();

if(isset($_POST['delete']))  {
	if($_POST['clientcode']!==''){
		$client->deleteClient($_POST['clientcode']);
	}
	unset($_POST['delete']);
	}
else if(isset($_POST['update']))  {
	if($_POST['clientcode']!==''){
		$client->updateClient($_POST['clientcode'], $_POST['Name'], $_POST['FName'], $_POST['Age'], $_POST['Gender']);
	}
	unset($_POST['update']);
}
else if(isset($_POST['insert']))  {
	if($_POST['clientcode']!==''){
		$client->insertClient($_POST['clientcode'], $_POST['Name'], $_POST['FName'], $_POST['Age'], $_POST['Gender']);
	}
	unset($_POST['insert']);
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Farmacie</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet/less" type="text/css" href="css/style.css" />
	
	
	<script src="https://cdn.jsdelivr.net/npm/less@4" ></script>


</head>
<body>

<div>
	<?php
	
	?>	
</div>

<div>
	<form action="registrationCL.php" method="post">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-3">
                    <br><br>
                    <br><br>
					<p>Completati cu informatiile corecte.</p>
					<hr class="mb-3"><br>
                    <label for="clientcode"><b>Codc</b></label>
					<input class="form-control" id="clientcode" type="text" name="clientcode" required placeholder="Introduceti id client">
                    
                    <label for="Nume"><b>Nume</b></label>
					<input class="form-control" id="Name" type="text" name="Name" required placeholder="Introduceti nume">
                    
                    <label for="Prenume"><b>Prenume</b></label>
					<input class="form-control" id="FName" type="text" name="FName" required placeholder="Introduceti prenume">

					<label for="Varsta"><b>Varsta</b></label>
					<input class="form-control" id="Age"  type="text" name="Age" required placeholder="Introduceti varsta">

                    <label for="Sex"><b>Sex</b></label>
					<input class="form-control" id="Gender"  type="text" name="Gender" required placeholder="Introduceti gen">

                    
                    

					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="insert" name="insert" value="Adauga">
					<input class="btn btn-primary" type="submit" id="update" name="update" value="Modifica">
					<input class="btn btn-primary" type="submit" id="delete" name="delete" value="Sterge">
				</div>
			</div>
		</div>
	</form>
</div>
<br>
<?php
$client->getClienti();

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

</body>
</html>