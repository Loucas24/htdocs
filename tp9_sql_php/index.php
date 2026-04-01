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

    echo "<br>";
    $prof = $dbPDO->prepare("SELECT * FROM prof ");
    $prof ->execute();
    $bro = $prof->fetchAll();
    foreach($bro as $br) {
    echo "<br>";
    echo $br['Id_Prof']." ".$br['nom']." ".$br['prenom'];
    } 
    //Affiche la liste de touts les profs

    echo "<br>";
    //$bonus = $dbPDO->prepare("SELECT p.nom AS nom_prof, p.prenom AS prenom_prof, m.nom AS matiere, c.nom AS classe FROM prof p JOIN asso_3 a ON p.Id_Prof = a.Id_Prof JOIN classes c ON a.Id_Classes = c.Id_Classes JOIN matières m ON p.Id_Prof = m.Id_Prof";);
    //$bonus ->execute();
    //$sql = $bonus->fetchAll();
    //foreach($sql as $sq) {
    //echo "<br>";
    //echo $sq['nom_prof']." ".$sq['prenom_prof']." ".$sq['matiere']." ".$sq['classe'];
    //} 
    //bonus
    

    //INSERT INTO `matières`(`Id_Matières`, `nom`, `Id_Prof`) VALUES (2,'Math',2) 

    
?>

<html>
<br>
<form action="nouvelle_matiere.php" method="POST">
        <label libelle>Libellé :</label>
        <input type="text" name="libelle" id="libelle" required>
        <br>
        <button type="submit">Valider</button>
</form>

<br>

<form action="nouv_etud.php" method="POST">
        <label libelle>nom :</label>
        <input type="text" name="nom" id="nom" required>
        <br>
        <label libelle>prenom :</label>
        <input type="text" name="prenom" id="prenom" required>
        <br>
        <label libelle>id classe :</label>
        <input type="text" name="id_classe" id="id_classe" required>
        <br>
        <button type="submit">Valider</button>  
</form>

</html>