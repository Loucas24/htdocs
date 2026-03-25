 <?php
        function hello($age,$sexe){
            if($age < 18 && $sexe == 'homme')
            {
                echo "Bonjour jeune homme";
            }
            elseif($age > 18 && $sexe == 'homme')
            {
                echo "Bonjour monsieur";
            }
            elseif($age < 18 && $sexe == 'femme')
            {
                echo "Bonjour jeune fille";
            }
            elseif($age > 18 && $sexe == 'femme')
            {
                echo "Bonjour madame";
            }
            else
            {
                echo "3 euros à Paris le croissant";
            }
        }
        hello(intval($_POST['age']),$_POST['sexe']);
        echo "</br>";
        echo "Bonjour ".$_POST['prenom']." ".$_POST['nom'];
        echo "</br>";
        echo intval($_POST['age']);
        echo "</br>";
        echo $_POST['sexe'];
      ?>