 <?php
    // Afficher les erreurs à l'écran
    ini_set('display_errors', 1);
    // Afficher les erreurs et les avertissements
    error_reporting(E_ALL);
    ob_start();
    ?>

 <h1>Exercices - Découpage des fichiers</h1>
 <h2>Exercice 1 :</h2>

 <p>Voici le code actuel du TP, tout le code tiens en un seul fichier ;&nbsp;</p>
<?php
    require_once('header.php');
?>

<?php
    require_once('main.php');
?>

<?php
    require_once('footer.php');
?>

 <ol>
     <li>Dans un fichier temps r&eacute;cup&eacute;rer ce code est le mettre dans un fichier exo8-tp.php</li>
     <li>Puis cr&eacute;er d&#39;autres fichiers pour le header, main et footer et jouer avec le require_once</li>
     <li>Essayer de d&eacute;couper encore plus finement le header avec la liste des chapitres et la liste des exercices</li>
 </ol>
 <p>Pour l'instant ne pas utiliser de layout</p>

 <h2>Exercice 2 :</h2>
 <p>
     Reprendre le TP du chapitre précédent sur le transfert de données et découper en plusieurs fichiers.
 </p>


 <?php $content = ob_get_clean(); ?>

  <?php require('../inc/template.php'); ?>