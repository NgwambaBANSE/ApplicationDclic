<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulaire";

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$date = $_POST["date_de_naissance"];
$ville = $_POST["ville"];
$formation = $_POST["formation"];

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO LesApprenants (nom, prenom, date_de_naissance, ville, formation)
  VALUES ('$nom', '$prenom', '$date','$ville','$formation')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Enregistré avec succè";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>