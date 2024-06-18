<?php
include_once 'config.php';

class CautaMedicamente {

    public function getCautaMedic($Denumire) {

        $sql = "select * from ds220.Medicament WHERE Denumire LIKE '%$Denumire%'";
/*        var_dump(BDConnection::runSQL($sql));
        exit;*/

        BDConnection::generateTable(['Id Medicament', 'Denumire', 'Pret', 'Stoc', 'Producator'], BDConnection::runSQL($sql));
    }

    public function searchMedicament($Denumire) {
        $sql = "select Denumire from Medicament where Denumire =:den";
        $arg[':Den'] = $Denumire;

        return BDConnection::runSQL($sql, $arg);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cauta medicamente</title>
	
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   	<h3 class="navbar-brand text-white">Cauta medicamente</h3>
   
    <div class="mr-auto"></div>

    <ul class="navbar-nav">

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
   	 		<a href="registrationVan.php" class="nav-link">Vanzare</a>
   	 	</li>		

        <li class="nav-item">
   	 		<a href="deconectare.php" class="nav-link">Deconectare</a>
   	 	</li>  

    </ul>
   	 	
</nav>

</body>
</html>

