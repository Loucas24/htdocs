<?php 

    require_once(__DIR__.'../model/pdo.php');

    $resultat = $dbPDO->prepare("SELECT * FROM eleves");
    $resultat ->execute();
    $clients = $resultat->fetchAll();
    foreach($clients as $client) {
    echo "<br>";
    echo $client['Id_eleve']." ".$client['nom']." ".$client['prenom'];
    }  
    //affiche la liste de tous les étudiants avec le nom et prénom

?>