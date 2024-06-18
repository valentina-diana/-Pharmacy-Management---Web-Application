<?php
include_once 'CautaClienti.php';
$cautaCL=new CautaClienti();

if(isset($_POST['submit']))  {
    if($_POST['numee']!==''){
        $cautaCL->searchCautaClienti($_POST['numee']);
    }
    //unset($_POST['search']);
}



?>

<!DOCTYPE html>
<html>
<head>
    <title>Farmacie</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet/less" type="text/css" href="css/style1.css" />
   
    <script src="https://cdn.jsdelivr.net/npm/less@4" ></script>


</head>
<body>

<div>
    <?php

    ?>
</div>

<div>
    <form action="registrationCautaCL.php" method="post">
        <div class="container">

            <div class="row">
                <div class="col-sm-3">
                    <br>
                    <hr class="mb-3">

                    <label for="denn"><b>Cauta clienti</b></label>
                    <input type="text" <?php if (isset($_POST['search'])) echo 'value="'.$_POST['search'].'"';?>name="search" placeholder="Introduceti nume"><br><br>
                    <input class="btn btn-primary" type="submit" value="Cauta">


                </div>
            </div>
        </div>
    </form>
</div>
<br>
<?php
$cautaCL->getCautaCli($_POST['search']);

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

</body>
</html>