<?php
/**
 * Created by PhpStorm.
 * User: Timothee
 * Date: 12/09/2017
 * Time: 09:56
 */

$nom_professeur = urlencode("Robert") ;
$prenom_professeur = urlencode("Timothée") ;

$lien_script = "EXPL1_avisProfesseur.php?nomProf=$nom_professeur&prenomProf=$prenom_professeur" ;

echo "<a href='".htmlspecialchars($lien_script,ENT_QUOTES)."'> Qui est le plus sévère des professeurs ? <br> </a>" ;


$nom_delegue = urlencode("Djevansir") ;
$prenom_delegue = urlencode("Milan") ;

$lien_script_delegue = "EXPL1_avisProfesseur.php?nomDelegue=$nom_delegue&prenomDelegue=$prenom_delegue" ;

echo "<a href='".htmlspecialchars($lien_script_delegue,ENT_QUOTES)."'> Qui est chargé de représenter la classe ? <br> </a>"
?>
