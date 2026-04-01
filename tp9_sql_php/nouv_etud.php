<?php

require_once(__DIR__.'../model/pdo.php');


$nom = htmlspecialchars(trim($_POST['nom']));
$prenom = htmlspecialchars(trim($_POST['prenom']));
$id_classe = intval(htmlspecialchars(trim($_POST['id_classe'])));

$sql = "INSERT INTO eleves (nom,prenom,Id_Classes ) VALUES (:nom,:prenom,:id_classe)";
$res = $dbPDO->prepare($sql);
$res ->execute([
	'nom' => $nom,
	'prenom' => $prenom,
	'id_classe' => $id_classe
]);

echo "<p>eleve <strong>" . $prenom . "</strong> a bien été ajoutée en base de données.</p>";


?>
<html>
<br>
    <a href="./index.php">Retour à la page du formulaire</a>

</html>