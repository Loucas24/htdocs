<?php 

    require_once(__DIR__.'../model/pdo.php');

    $etudiant = $dbPDO->prepare("SELECT * FROM eleves");
    $etudiant ->execute();
    $res = $etudiant->fetchAll();
    foreach($res as $re) {
    echo "<br>";
    echo $re['Id_eleve']." ".$re['nom']." ".$re['prenom'];
    }  
    //affiche la liste de tous les étudiants avec le nom et prénom



    echo "<br>";
    $classe = $dbPDO->prepare("SELECT * FROM classes");
    $classe ->execute();
    $bla = $classe->fetchAll();
    foreach($bla as $bl) {
    echo "<br>";
    echo $bl['Id_Classes']." ".$bl['nom'];
    } 
    //Affiche la liste de toutes les classes 

?>