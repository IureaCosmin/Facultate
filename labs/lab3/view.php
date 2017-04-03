<a href="index.html">php</a><br/>
<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="style2.css">
<?php
$dataSourceName = "mysql:host=localhost;port=3306;dbname=iurea";
$username = "iurea";
$password = "f4HVDeqB";
$conn = null;
try {
    // connect to database with PDO
    $conn = new PDO($dataSourceName, $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // get data
    $sql = "SELECT name,grade,nrtelefon,nrmat,status FROM student";
    $results = $conn->query($sql);


    // display data
    echo "<table>";
    echo "<tr>
<th>Nume</th>
<th>Nota</th>
<th>Nr.telefon</th>
<th>Nr.mat</th>
<th>Status</th>
</tr>";
    foreach($results as $row) {
        echo "<tr>
<td>".$row[0]."</td>
<td>".$row[1]."</td>
<td>".$row[2]."</td>
<td>".$row[3]."</td>
<td>".$row[4]."</td>
</tr>";
    }
    echo "</table>";


}
catch (PDOException $e) {
    exit ("Eroare la preluarea datelor: " . $e->getMessage());
}

// close connection
$conn = null;
?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
