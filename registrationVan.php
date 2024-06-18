<?php
include_once 'Vanzare.php';
$vanzare=new Vanzare();

if(isset($_POST['delete']))  {
	if($_POST['vanzarecode']!==''){
		$vanzare->deleteVanzare($_POST['vanzarecode']);
	}
	unset($_POST['delete']);
	}
else if(isset($_POST['update']))  {
	if($_POST['vanzarecode']!==''){
		$vanzare->updateVanzare($_POST['vanzarecode'], $_POST['idMedd'], $_POST['Codccc'], $_POST['data_vanzz']);
	}
	unset($_POST['update']);
}
else if(isset($_POST['insert']))  {
	if($_POST['vanzarecode']!==''){
		$vanzare->insertVanzare($_POST['vanzarecode'], $_POST['idMedd'], $_POST['Codccc'], $_POST['data_vanzz']);
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
	<form action="registrationVan.php" method="post">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-3">
                    <br><br>
                    <br><br>
					<p>Completati cu informatiile corecte.</p>
					<hr class="mb-3"><br>
                    <label for="vanzarecode"><b>Id vanzare</b></label>
					<input class="form-control" id="vanzarecode" type="text" name="vanzarecode" required placeholder="Introduceti id vanzare">
                    
                    <label for="idMed"><b>Id medicament</b></label>
					<input class="form-control" id="idMedd" type="text" name="idMedd" required placeholder="Introduceti id medicament">
                    
                    <label for="Codccc"><b>Codc</b></label>
					<input class="form-control" id="Codccc" type="text" name="Codccc" required placeholder="Introduceti codc">

					<label for="data_vanzz"><b>Data vanzarii</b></label>
					<input class="form-control" id="data_vanzz"  type="text" name="data_vanzz" required placeholder="Introduceti data vanzarii">

                    

					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="insert" name="insert" value="Adauga">
					<input class="btn btn-primary" type="submit" id="update" name="update" value="Modifica">
					<input class="btn btn-primary" type="submit" id="delete" name="delete" value="Sterge"><br>


				</div>
			</div>
		</div>
	</form>
</div>
<br>
<?php
$vanzare->getVanzari();

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

</body>
</html>