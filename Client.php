<?php
include_once 'config.php';


class Client {



public function getClienti() {
$sql = "select * from ds220.Client";
BDConnection::generateTable(['Codc', 'Nume', 'Prenume', 'Varsta', 'Sex'], BDConnection::runSQL($sql));
}

public function insertClient($codc, $nume, $prenume, $varsta, $sex) {

$sql = 'insert into ds220.Client values(:codcc, :numee, :pren, :varstaa, :sexx)';
$arg[':codcc'] = $codc;
$arg[':numee'] = $nume;
$arg[':pren'] = $prenume;
$arg[':varstaa'] = $varsta;
$arg[':sexx'] = $sex;


BDConnection::runSQL($sql, $arg);
}

public function updateClient($codc, $nume, $prenume, $varsta, $sex) {

$sql = 'update ds220.Client set nume=:numee, prenume=:pren, varsta=:varstaa, sex=:sexx '.
'where codc=:codcc';
$arg[':codcc'] = $codc;
$arg[':numee'] = $nume;
$arg[':pren'] = $prenume;
$arg[':varstaa'] = $varsta;
$arg[':sexx'] = $sex;

BDConnection::runSQL($sql, $arg);
}




public function deleteClient($codc) {
$sql = "delete from ds220.Client where codc=:codcc";
$arg[':codcc'] = $codc;
BDConnection::runSQL($sql, $arg);
}





}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Clienti</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   	<h3 class="navbar-brand text-white">Clienti</h3>
   
    <div class="mr-auto"></div>

    <ul class="navbar-nav">
    
		<li class="nav-item">
   	 		<a href="registrationCautaMed.php" class="nav-link">Cauta medicamente</a>
   	 	</li>

        <li class="nav-item">
            <a href="registrationCautaCL.php" class="nav-link">Cauta clienti</a>
        </li>

        <li class="nav-item">
            <a href="FiltrareCl.php" class="nav-link">Filtrare clienti</a>
        </li>

   	 	<li class="nav-item">
   	 		<a href="registration.php" class="nav-link">Medicamente</a>
   	 	</li>

		<li class="nav-item">
   	 		<a href="registrationVan.php" class="nav-link">Vanzare</a>
   	 	</li>

        <li class="nav-item">
            <a href ="exportClienti.php" class="nav-link">Export</a>
        </li>

        <li class="nav-item">
   	 		<a href="deconectare.php" class="nav-link">Deconectare</a>
   	 	</li>  

    </ul>
   	 	
</nav>

</body>
</html>