<?php

$dbHost = "web.cti.ugal.ro";
$dbName = "ds220";
$dbChar = "utf8mb4";
$dbUser = "ds220";
$dbPass = "wbasyq78";
try {
    $pdo = new PDO(
        "mysql:host=$dbHost;dbname=$dbName;charset=$dbChar",
        $dbUser, $dbPass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NAMED
        ]
    );
} catch (Exception $ex) { exit($ex->getMessage()); }


header("Content-Type: application/octet-stream");
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=\"vanzare.csv\"");


$stmt = $pdo->prepare("SELECT * FROM `Vanzare`");
$stmt->execute();
while ($row = $stmt->fetch()) {
    echo implode(",", [$row["idVanzare"], $row["idMedicament"], $row["codc"],  $row["data_Vanzare"]]);
    echo "\r\n";
}