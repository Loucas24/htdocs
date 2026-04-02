<?php

require_once(__DIR__.'views/../model/pdo.php');

 $id = intval(htmlspecialchars(trim($_GET['id'])));
 $etudiant = $dbPDO->prepare("SELECT nom,prenom FROM eleves WHERE Id_eleve = :id");
 $etudiant ->execute([
     'id' => $id
 ]
 );
 $res = $etudiant->fetch();
 ?>
 <html>
 <form action="exe_modif_etud.php" method="POST">
        <label libelle>nom</label>
         <input type="text" name="nom" id="nom" required>
         <br>
         <label libelle>prenom</label>
         <input type="text" name="prenom" id="prenom" required>
         <br>
         <label libelle>id</label>
         <input type="text" name="id" id="id" required>
        <br>
        <button type="submit">Valider</button>
 </form>
 <br>
     <a href="../index.php">Retour à la page index</a>
 </html> 