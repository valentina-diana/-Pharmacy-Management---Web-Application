<?php
$conn = new PDO( 'mysql:host=web.cti.ugal.ro;dbname=ds220', 'ds220', 'wbasyq78');
if(!$conn){
    die("Error: Failed to coonect to database!");
}
?>

<table class="table table-bordered">
    <thead class="alert-info">
    <tr>
        <th>Codc</th>
        <th>Nume</th>
        <th>Prenume</th>
        <th>Varsta</th>
        <th>Sex</th>
    </tr>
    </thead>
    <tbody>

    <?php
    if(ISSET($_POST['asc'])){
        $query = $conn->prepare("SELECT * FROM `Client` ORDER BY `varsta` ASC");
        $query->execute();
        while($row = $query->fetch()){
            echo "<tr>
						<td>".$row['codc']."</td>
						<td>".$row['nume']."</td>
						<td>".$row['prenume']."</td>
						<td>".$row['varsta']."</td>
						<td>".$row['sex']."</td>
					</tr>";
        }
    }elseif(ISSET($_POST['desc'])) {
        $query = $conn->prepare("SELECT * FROM `Client` ORDER BY `varsta` DESC");
        $query->execute();
        while ($row = $query->fetch()) {
            echo "<tr>
						<td>".$row['codc']."</td>
						<td>".$row['nume']."</td>
						<td>".$row['prenume']."</td>
						<td>".$row['varsta']."</td>
						<td>".$row['sex']."</td>
					</tr>";
        }
    }elseif(ISSET($_POST['ascn'])) {
        $query = $conn->prepare("SELECT * FROM `Client` ORDER BY `nume` ASC");
        $query->execute();
        while ($row = $query->fetch()) {
            echo "<tr>
						<td>".$row['codc']."</td>
						<td>".$row['nume']."</td>
						<td>".$row['prenume']."</td>
						<td>".$row['varsta']."</td>
						<td>".$row['sex']."</td>
					</tr>";
        }
    }elseif(ISSET($_POST['descn'])) {
        $query = $conn->prepare("SELECT * FROM `Client` ORDER BY `nume` DESC");
        $query->execute();
        while ($row = $query->fetch()) {
            echo "<tr>
						<td>".$row['codc']."</td>
						<td>".$row['nume']."</td>
						<td>".$row['prenume']."</td>
						<td>".$row['varsta']."</td>
						<td>".$row['sex']."</td>
					</tr>";
        }
    }elseif(ISSET($_POST['ascpre'])) {
        $query = $conn->prepare("SELECT * FROM `Client` ORDER BY `prenume` ASC");
        $query->execute();
        while ($row = $query->fetch()) {
            echo "<tr>
						<td>".$row['codc']."</td>
						<td>".$row['nume']."</td>
						<td>".$row['prenume']."</td>
						<td>".$row['varsta']."</td>
						<td>".$row['sex']."</td>
					</tr>";
        }
    }elseif(ISSET($_POST['descpre'])) {
        $query = $conn->prepare("SELECT * FROM `Client` ORDER BY `prenume` DESC");
        $query->execute();
        while ($row = $query->fetch()) {
            echo "<tr>
						<td>".$row['codc']."</td>
						<td>".$row['nume']."</td>
						<td>".$row['prenume']."</td>
						<td>".$row['varsta']."</td>
						<td>".$row['sex']."</td>
					</tr>";
        }

    }
    ?>

    </tbody>
</table>