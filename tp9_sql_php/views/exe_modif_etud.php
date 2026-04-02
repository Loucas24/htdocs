<?php

require_once(__DIR__.'views/../model/pdo.php');


$nom = htmlspecialchars(trim($_POST['nom']));
$prenom = htmlspecialchars(trim($_POST['prenom']));
$id = intval(htmlspecialchars(trim($_POST['id'])));


 $sql = "UPDATE `eleves` SET `nom`=:nom,`prenom`=:prenom WHERE Id_eleve = $id";
 $res = $dbPDO->prepare($sql);
 $res ->execute([
 	'nom' => $nom,
 	'prenom' => $prenom,
 ]);


echo "modification reussie";

?>
<html>
    <a href="../index.php">Retour à la page index</a>
</html>