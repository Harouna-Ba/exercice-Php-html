<?php
/** ecrire qui initialise un tableau d'entier et genere un valeur val.
 * le scrypte verifie l'existence de la valeur val dans le tableau
 */
define("MAX",99);
define("MIN",7);
$valeur=rand(MAX,MIN);
$tab=[2,56,89,34,20,98,37,33.2];
foreach($tab as $val){
    if($val==$valeur){
        echo "$valeur est dans le tableau";
    }
    else{
        echo"$valeur ne se trouve pas dans le tableau";
    }
}
?>