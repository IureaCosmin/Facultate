<a href="index.html">acasă</a><br/>
<?php
$dataSourceName = "mysql:host=localhost;port=3306;dbname=first";
$username = "root";
$password = "root";
$conn = null;
try {
    // connect to database with PDO
    $conn = new PDO($dataSourceName, $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
    // get data
    $sql = "SELECT name, grade FROM Student";
    $results = $conn->query($sql);
    // display data
    echo "<table style='border-style:solid'>";
    foreach($results as $row) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
    }
    echo "</table>";    
}
catch (PDOException $e) {
    exit ("Eroare la preluarea datelor: " . $e->getMessage());
}

// close connection
$conn = null;
?>