<?php
// configuration
include('connect.php');

// new data
$name1 = $_POST['nume'];
$name2 = $_POST['prenume'];
$id = $_POST['memids'];
$email=$_POST['email'];
$categorie=$_POST['categorie'];
$numar=$_POST['numar'];
// query
$sql = "UPDATE test 
        SET name1=?, name2=?, email=?, categorie=?, numar=?
		WHERE id=?";
$q = $conn->prepare($sql);
$q->execute(array($name1,$name2,$email,$categorie,$numar,$id));
header("location: index.php");

?>