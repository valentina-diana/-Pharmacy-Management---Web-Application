<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Filtrare medicamente</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/style1.css"

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <h3 class="navbar-brand text-white">Filtrare medicamente</h3>

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
            <button class="btn btn-primary" name="asc"><span class="glyphicon glyphicon-arrow-up"></span> Ascendent pret</button>
            <button class="btn btn-danger" name="desc"><span class="glyphicon glyphicon-arrow-down"></span> Descendent pret</button>
            <button class="btn btn-primary" name="ascs"><span class="glyphicon glyphicon-arrow-up"></span> Ascendent stoc</button>
            <button class="btn btn-danger" name="descs"><span class="glyphicon glyphicon-arrow-down"></span> Descendent stoc</button>
            <button class="btn btn-primary" name="ascpr"><span class="glyphicon glyphicon-arrow-up"></span> Ascendent producator</button>
            <button class="btn btn-danger" name="descpr"><span class="glyphicon glyphicon-arrow-down"></span> Descendent producator</button>

        </form>
        <br /><br />
        <?php include 'sort.php'?>
    </div>
</div>
</body>
</html>