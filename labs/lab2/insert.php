<a href="index.html">acasă</a><br/>
<?php
// the values from $_GET should be SANITIZED
$name = $_GET["name"];
$grade = $_GET["grade"];

// VALIDATE values from $_GET[]
$errorMessages = "";
// perform 'name' validation
if (strlen($name)<3 || strlen($name)>50){
    $errorMessages .= "Numele trebuie să aibă lungimea cuprinsă între 3 și 50 caractere.";
}
for ($i=0;$i<strlen($name);$i++){
    $c = $name[$i];
    if (strtoupper($c)==strtolower($c) && $c!=' ' && $c!='-' && $c!='.'){
        $errorMessages .= "Numele poate conține doar litere, spatiu, cratimă și punct.";
    }
}  
// perform 'grade' validation 
if (!is_numeric($grade) || $grade < 1 || $grade > 10){
    $errorMessages .= "Nota trebuie să fie număr cuprins între 1 și 10 inclusiv.";
}
// if there are some error messages
// then the values cannot be saved into database
if (strlen($errorMessages)>0){
    exit ($errorMessages);
}

// SAVE values into database
$dataSourceName = "mysql:host=localhost;port=3306;dbname=first";
$username = "root";
$password = "root";
$conn = null;
try {
    // connect to database with PDO
    $conn = new PDO($dataSourceName, $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
    // insert data
    $sql = "INSERT INTO Student (name, grade) VALUES ('".$name."',".$grade.")";
    $conn->exec($sql);
    echo "Datele au fost inserate cu succes.";
}
catch (PDOException $e) {
    exit ("Eroare la salvarea datelor: " . $e->getMessage());
}

// close connection
$conn = null;
?>