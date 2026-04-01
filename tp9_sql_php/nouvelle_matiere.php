<?php

require_once(__DIR__.'../model/pdo.php');


$libelle = htmlspecialchars(trim($_POST['libelle']));

$sql = "INSERT INTO matiere (nom) VALUES (:libelle)";
$res = $dbPDO->prepare($sql);
$res ->execute([
	'libelle' => $libelle
]); 

echo "<p>La matière <strong>" . $libelle . "</strong> a bien été ajoutée en base de données.</p>";


?>
<html>
<br>
    <a href="./index.php">Retour à la page du formulaire</a>

</html>

