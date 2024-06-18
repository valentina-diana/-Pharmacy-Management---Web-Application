<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Filtrare clienti</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/style1.css"

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <h3 class="navbar-brand text-white">Filtrare clienti</h3>

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
            <a href=registrationCL.php" class="nav-link">Clienti</a>
        </li>

        <li class="nav-item">
            <a href="registrationVan.php" class="nav-link">Vanzare</a>
        </li>


        <li class="nav-item">
            <a href="deconectare.php" class="nav-link">Deconectare</a>
        </li>

    </ul>

</nav>


<div class="col-md-8">
    <form method="POST" action="">
        <br><br>
        <button class="btn btn-primary" name="asc"><span class="glyphicon glyphicon-arrow-up"></span> Ascendent varsta</button>
        <button class="btn btn-danger" name="desc"><span class="glyphicon glyphicon-arrow-down"></span> Descendent varsta</button>
        <button class="btn btn-primary" name="ascn"><span class="glyphicon glyphicon-arrow-up"></span> Ascendent nume</button>
        <button class="btn btn-danger" name="descn"><span class="glyphicon glyphicon-arrow-down"></span> Descendent nume</button>
        <button class="btn btn-primary" name="ascpre"><span class="glyphicon glyphicon-arrow-up"></span> Ascendent prenume</button>
        <button class="btn btn-danger" name="descpre"><span class="glyphicon glyphicon-arrow-down"></span> Descendent prenume </button>

    </form>
    <br /><br />
    <?php include 'sortCl.php'?>
</div>
</div>
</body>
</html>