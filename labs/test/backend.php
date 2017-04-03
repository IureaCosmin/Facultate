<?php
include('connect.php');

//tragere variabile
if (isset($_POST['nume2'])) {
    $nume2 = $_POST['nume2'];

}
if (isset($_POST['Email'])) {
    $email = $_POST['Email'];
}
if (isset($_POST['categorie'])) {
    $categorie = $_POST['categorie'];
}
if (isset($_POST['numar'])) {
    $numar = $_POST['numar'];
}
if (isset($_POST['name'])) {
    $firstname = $_POST['name'];

}

// validare din post
$errorMessages = "";
// validare nume
if (strlen($firstname)<3 || strlen($firstname)>50){
    $errorMessages .= "Numele trebuie să aibă lungimea cuprinsă între 3 și 50 caractere.";
}
for ($i=0;$i<strlen($firstname);$i++){
    $c = $firstname[$i];
    if (strtoupper($c)==strtolower($c) && $c!=' ' && $c!='-' && $c!='.'){
        $errorMessages .= "Numele poate conține doar litere, spatiu, cratimă și punct.";
    }
}
//validare prenume
if (strlen($nume2)<3 || strlen($nume2)>50){
    $errorMessages .= "Numele trebuie să aibă lungimea cuprinsă între 3 și 50 caractere.";
}
for ($i=0;$i<strlen($nume2);$i++){
    $c = $nume2[$i];
    if (strtoupper($c)==strtolower($c) && $c!=' ' && $c!='-' && $c!='.'){
        $errorMessages .= "Numele poate conține doar litere, spatiu, cratimă și punct.";
    }
}

//validare email

if(filter_var($email, FILTER_VALIDATE_EMAIL))
{

}else{
    $errorMessages .= "Format email invalid";
}

//validare numar de telefon

if (preg_match('/^\d{10}$/', $numar)) {
    // pass
} else {
    $errorMessages .= "Numarul trebuie sa aiba 10 cifre.";
}

//mesajul de eroare cu redirectionare

if (strlen($errorMessages)>0){
    echo "<meta http-equiv=\"refresh\" content=\"5;url=".$_SERVER['HTTP_REFERER']."\"/>";
    exit ($errorMessages);
}


//formatul de informatii trimise

echo "<p style='background-color: white'>Informatiile care vor fii trimise la server sunt numele: ",$firstname," ",$nume2," "," emailul: ",$email," ","categoria: ",$categorie," numarul: ",$numar,"<br/></p>";
echo "<meta http-equiv=\"refresh\" content=\"5;url=".$_SERVER['HTTP_REFERER']."\"/>";



try {

    // insert data
    $sql = "SELECT * FROM test WHERE email='$email'";
    $results = $conn->query($sql);
    if ($results->fetchColumn() > 0) {

        echo "<meta http-equiv=\"refresh\" content=\"5;url=".$_SERVER['HTTP_REFERER']."\"/>";
        exit ("User Already Exists<br/>");
    }else{
        $sql = "INSERT INTO test (name1,name2,email,categorie,numar) VALUES ('$firstname','$nume2','$email','$categorie',$numar)";
        $conn->exec($sql);
        echo "<p style='background-color: white'>\nDatele au fost inserate cu succes.</p>";
    }

}
catch (PDOException $e) {
    echo "<meta http-equiv=\"refresh\" content=\"5;url=".$_SERVER['HTTP_REFERER']."\"/>";
    exit ("\nEroare la salvarea datelor: " . $e->getMessage());
}
