<?php
include_once 'Medicament.php';
$medicament=new Medicament();

if(isset($_POST['delete']))  {
	if($_POST['medicamentcode']!==''){
		$medicament->deleteMedicament($_POST['medicamentcode']);
	}
	unset($_POST['delete']);
	}
else if(isset($_POST['update']))  {
	if($_POST['medicamentcode']!==''){
		$medicament->updateMedicament($_POST['medicamentcode'], $_POST['Name'], $_POST['Price'], $_POST['Stock'], $_POST['Producer']);
	}
	unset($_POST['update']);
}
else if(isset($_POST['insert']))  {
	if($_POST['medicamentcode']!==''){
		$medicament->insertMedicament($_POST['medicamentcode'], $_POST['Name'], $_POST['Price'], $_POST['Stock'], $_POST['Producer']);
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
	<form action="registration.php" method="post">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-3">
                    <br><br>
                    <br><br>
					<p>Completati cu informatiile corecte.</p>
					<hr class="mb-3"><br>
                    <label for="medicamentcode"><b>Id medicament</b></label>
					<input class="form-control" id="medicamentcode" type="text" name="medicamentcode" required placeholder="Introduceti id medicament">
                    
                    <label for="Denumire"><b>Denumire</b></label>
					<input class="form-control" id="Name" type="text" name="Name" required placeholder="Introduceti denumire">
                    
                    <label for="Pret"><b>Pret</b></label>
					<input class="form-control" id="Price" type="text" name="Price" required placeholder="Introduceti pret">

					<label for="Stoc"><b>Stoc</b></label>
					<input class="form-control" id="Stock"  type="text" name="Stock" required placeholder="Introduceti stoc">

                    <label for="Producator"><b>Producator</b></label>
					<input class="form-control" id="Producer"  type="text" name="Producer" required placeholder="Introduceti producator">

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
$medicament->getMedicamente();

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

</body>
</html>