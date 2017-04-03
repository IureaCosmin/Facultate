<a href="index.php">Homepage</a><br/>
<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<?php
include('connect.php');
try {

$id=$_GET['id'];
$result = $conn->prepare("SELECT * FROM test WHERE id= :userid");
$result->bindParam(':userid', $id);
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
    ?>
    <div class="container">
    <form action="update.php" method="POST">
        <input type="hidden" name="memids" value="<?php echo $id; ?>" />
        Nume<br>
        <input type="text" name="nume" value="<?php echo $row[1]; ?>" /><br>
        Prenume<br>
        <input type="text" name="prenume" value="<?php echo $row[2]; ?>" /><br>
        email<br>
        <input type="text" name="email" value="<?php echo $row[3]; ?>" /><br>
        categorie<br>
        <select id="categorie" name="categorie">
            <option value="familie">Familie </option>
            <option value="prieten">prieten </option>
            <option value="etc">etc </option>
        </select>
        numar<br>
        <input type="number" name="numar" value="<?php echo $row[5]; ?>" /><br>
        <input type="submit" value="Save" />
    </form>
    </div>
    <?php
}

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
