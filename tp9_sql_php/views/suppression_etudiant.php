<?php

require_once(__DIR__.'views/../model/pdo.php');

 $id = intval(htmlspecialchars(trim($_GET['id'])));
 $etudiant = $dbPDO->prepare("DELETE FROM eleves WHERE Id_eleve = :id");
 $etudiant ->execute([
     'id' => $id
 ]
 );
 echo "<br>";
 echo "suppression réussie";
 ?>
 <html>
     <a href="../index.php">Retour à la page index</a>
 </html> 