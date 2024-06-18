<?php
include_once 'config.php';

class Vanzare {


public function getVanzari() {
$sql = "select * from ds220.Vanzare";
BDConnection::generateTable(['Id Vanzare', 'Id Medicament', 'Codc', 'Data_vanzare'], BDConnection::runSQL($sql));
}

public function insertVanzare($idVanzare, $idMedicament, $codc, $data_Vanzare) {

$sql = 'insert into ds220.Vanzare values(:idVanz, :idMed, :codcC, :data_Van)';
$arg[':idVanz'] = $idVanzare;
$arg[':idMed'] = $idMedicament;
$arg[':codcC'] = $codc;
$arg[':data_Van'] = $data_Vanzare;


BDConnection::runSQL($sql, $arg);
}

public function updateVanzare($idVanzare, $idMedicament, $codc, $data_Vanzare) {

$sql = 'update ds220.Vanzare set idMedicament=:idMed, codc=:codcC, data_Vanzare=:data_Van '.
'where idVanzare=:idVanz';
$arg[':idVanz'] = $idVanzare;
$arg[':idMed'] = $idMedicament;
$arg[':codcC'] = $codc;
$arg[':data_Van'] = $data_Vanzare;

BDConnection::runSQL($sql, $arg);
}




public function deleteVanzare($idVanzare) {
$sql = "delete from ds220.Vanzare where idVanzare=:idVanz";
$arg[':idVanz'] = $idVanzare;
BDConnection::runSQL($sql, $arg);
}





}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Vanzare</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   	<h3 class="navbar-brand text-white">Vanzare</h3>
   
    <div class="mr-auto"></div>

    <ul class="navbar-nav">
        
		<li class="nav-item">
   	 		<a href="registrationCautaMed.php" class="nav-link">Cauta medicamente</a>
   	 	</li>

        <li class="nav-item">
            <a href="registrationCautaCL.php" class="nav-link">Cauta clienti</a>
        </li>
			
   	 	<li class="nav-item">
   	 		<a href="registration.php" class="nav-link">Medicamente</a>
   	 	</li>
        
        <li class="nav-item">
   	 		<a href="registrationCL.php" class="nav-link">Clienti</a>
   	 	</li>

        <li class="nav-item">
            <a href ="exportVan.php" class="nav-link">Export</a>
        </li>

        <li class="nav-item">
   	 		<a href="deconectare.php" class="nav-link">Deconectare</a>
   	 	</li>  

    </ul>
   	 	
</nav>

</body>
</html>