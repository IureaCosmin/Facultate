<a href="index.php">Homepage</a><br/>
<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<?php
include('connect.php');
try {
    // get data
    $sql = "SELECT * FROM test";
    $results = $conn->query($sql);


    // display data

    echo "<table class='container'>";
    echo "<tr id='#table'>
<th>ID</th>
<th>Nume  </th>
<th>Prenume  </th>
<th>Email </th>
<th>Categorie  </th>
<th>Numar</th>
<th>Actiune</th>

</tr>";
    foreach($results as $row) {
        echo "<tr>

<td>".$row[0]."</td>
<td>".$row[1]."</td>
<td>".$row[2]."</td>
<td>".$row[3]."</td>
<td>".$row[4]."</td>
<td>".$row[5]."</td>
<td><a href='updateform.php?id=".$row['id']."'> edit </a></td>

</tr>";
    }
    echo "</table>";


}
catch (PDOException $e) {
    echo "<meta http-equiv=\"refresh\" content=\"5;url=".$_SERVER['HTTP_REFERER']."\"/>";
    exit ("Eroare la preluarea datelor: " . $e->getMessage());
}

// close connection
$conn = null;
?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
