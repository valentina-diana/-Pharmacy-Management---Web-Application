<?php
include_once 'config.php';

class CautaClienti {

    public function getCautaCli($Nume) {

        $sql = "select * from ds220.Client WHERE Nume LIKE '%$Nume%'";
        /*        var_dump(BDConnection::runSQL($sql));
                exit;*/

        BDConnection::generateTable(['Codc', 'Nume', 'Prenume', 'Varsta', 'Sex'], BDConnection::runSQL($sql));
    }

    public function searchCient($Nume) {
        $sql = "select Nume from Client where Nume =:nume";
        $arg[':nume'] = $Nume;

        return BDConnection::runSQL($sql, $arg);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cauta clienti</title>
    


</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <h3 class="navbar-brand text-white">Cauta clienti</h3>

    <div class="mr-auto"></div>

    <ul class="navbar-nav">

        <li class="nav-item">
            <a href="registrationCautaMed.php" class="nav-link">Cauta medicamente</a>
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

