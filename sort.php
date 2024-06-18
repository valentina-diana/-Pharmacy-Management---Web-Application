<?php
$conn = new PDO( 'mysql:host=web.cti.ugal.ro;dbname=ds220', 'ds220', 'wbasyq78');
if(!$conn){
    die("Error: Failed to coonect to database!");
}
?>

<table class="table table-bordered">
    <thead class="alert-info">
    <tr>
        <th>Id Medicament</th>
        <th>Denumire</th>
        <th>Pret</th>
        <th>Stoc</th>
        <th>Producator</th>
    </tr>
    </thead>
    <tbody>

    <?php
    if(ISSET($_POST['asc'])){
        $query = $conn->prepare("SELECT * FROM `Medicament` ORDER BY `Pret` ASC");
        $query->execute();
        while($row = $query->fetch()){
            echo "<tr>
						<td>".$row['idMedicament']."</td>
						<td>".$row['Denumire']."</td>
						<td>".$row['Pret']."</td>
						<td>".$row['Stoc']."</td>
						<td>".$row['Producator']."</td>
					</tr>";
        }
    }elseif(ISSET($_POST['desc'])) {
        $query = $conn->prepare("SELECT * FROM `Medicament` ORDER BY `Pret` DESC");
        $query->execute();
        while ($row = $query->fetch()) {
            echo "<tr>
						<td>" . $row['idMedicament'] . "</td>
						<td>" . $row['Denumire'] . "</td>
						<td>" . $row['Pret'] . "</td>
						<td>" . $row['Stoc'] . "</td>
						<td>" . $row['Producator'] . "</td>
					</tr>";
        }

        }elseif(ISSET($_POST['ascs'])){
            $query = $conn->prepare("SELECT * FROM `Medicament` ORDER BY `Stoc` ASC");
            $query->execute();
            while($row = $query->fetch()){
                echo "<tr>
						<td>".$row['idMedicament']."</td>
						<td>".$row['Denumire']."</td>
						<td>".$row['Pret']."</td>
						<td>".$row['Stoc']."</td>
						<td>".$row['Producator']."</td>
					</tr>";
            }
        }elseif(ISSET($_POST['descs'])){
            $query = $conn->prepare("SELECT * FROM `Medicament` ORDER BY `Stoc` DESC");
            $query->execute();
            while($row = $query->fetch()){
                echo "<tr>
						<td>".$row['idMedicament']."</td>
						<td>".$row['Denumire']."</td>
						<td>".$row['Pret']."</td>
						<td>".$row['Stoc']."</td>
						<td>".$row['Producator']."</td>
					</tr>";
            }
    }elseif(ISSET($_POST['ascpr'])){
        $query = $conn->prepare("SELECT * FROM `Medicament` ORDER BY `Producator` ASC");
        $query->execute();
        while($row = $query->fetch()){
            echo "<tr>
						<td>".$row['idMedicament']."</td>
						<td>".$row['Denumire']."</td>
						<td>".$row['Pret']."</td>
						<td>".$row['Stoc']."</td>
						<td>".$row['Producator']."</td>
					</tr>";
        }

    }elseif(ISSET($_POST['descpr'])){
        $query = $conn->prepare("SELECT * FROM `Medicament` ORDER BY `Producator` DESC");
        $query->execute();
        while($row = $query->fetch()){
            echo "<tr>
						<td>".$row['idMedicament']."</td>
						<td>".$row['Denumire']."</td>
						<td>".$row['Pret']."</td>
						<td>".$row['Stoc']."</td>
						<td>".$row['Producator']."</td>
					</tr>";
        }

    }
    ?>

    </tbody>
</table>