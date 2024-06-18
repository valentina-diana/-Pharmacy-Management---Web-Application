<?php
include_once 'config.php';

class CautaMedicamentee {

    public function getCautaMedica($Denumire) {

        $sql = "select * from ds220.Medicament WHERE Denumire LIKE '%$Denumire%'";
        /*        var_dump(BDConnection::runSQL($sql));
                exit;*/

        BDConnection::generateTable(['Id Medicament', 'Denumire', 'Pret', 'Stoc', 'Producator'], BDConnection::runSQL($sql));
    }

    public function searchMedicamentee($Denumire) {
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
            <a href="deconectare.php" class="nav-link">Deconectare</a>
        </li>

    </ul>

</nav>

</body>
</html>

