   <?php
session_start();
echo "Je recupere du formulaire quelques paramètres <BR>" ;
$nom =  $_POST['nomEleve'] ;
$prenom = $_POST['prenomEleve'] ;
$type = $_POST['typeEtudiant'] ;
echo "Le nom est: $nom <BR>" ;
echo "Le prenom est: $prenom <BR>" ;
echo "Le type etudiant est: $type <BR>" ;

// On va crée 3 variables dans le tableau global $_SESSION
// Ces noms de variables sont les mêmes que dans le programme final EXO5_sessionsForEver.php


echo "<a href='EXO5_sessionsForEver.php'> Cliquez ici pour voir le pouvoir d'une session </a>";

?>
