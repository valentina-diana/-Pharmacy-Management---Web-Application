<?php
include_once 'config.php';

class Medicament {


public function getMedicamente() {
$sql = "select * from ds220.Medicament";
BDConnection::generateTable(['Id Medicament', 'Denumire', 'Pret', 'Stoc', 'Producator'], BDConnection::runSQL($sql));
}


public function insertMedicament($idMedicament, $Denumire, $Pret, $Stoc, $Producator) {

$sql = 'insert into ds220.Medicament values(:id, :Den, :Prett, :Stocc, :Producatorr)';
$arg[':id'] = $idMedicament;
$arg[':Den'] = $Denumire;
$arg[':Prett'] = $Pret;
$arg[':Stocc'] = $Stoc;
$arg[':Producatorr'] = $Producator;


BDConnection::runSQL($sql, $arg);
}

public function updateMedicament($idMedicament, $Denumire, $Pret, $Stoc, $Producator) {

$sql = 'update ds220.Medicament set Denumire=:Den, Pret=:Prett, Stoc=:Stocc, Producator=:Producatorr '.
'where idMedicament=:id';
$arg[':id'] = $idMedicament;
$arg[':Den'] = $Denumire;
$arg[':Prett'] = $Pret;
$arg[':Stocc'] = $Stoc;
$arg[':Producatorr'] = $Producator;

BDConnection::runSQL($sql, $arg);
}




public function deleteMedicament($idMedicament) {
$sql = "delete from ds220.Medicament where idMedicament=:id";
$arg[':id'] = $idMedicament;
BDConnection::runSQL($sql, $arg);
}





}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Medicamente</title>
    
</head>
<body>
    <?php include("headMedicamente.php"); ?>
    <body>
    </html>