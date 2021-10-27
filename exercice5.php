<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


/**ecrire un scrypte qui initialise un tableau de couleur puis genere une table html dont le nombre de ligne
 * est egale au nombre de couleur.
 * un ligne contient deux colone et a la meme couleur que celle definit dans le tableau de couleur */

    
?>
    <?php
    $tab=['rouge','jeune','vert'];
    foreach($tab as $val){
        echo"$val";
    }

    ?>
    <table>
        <tr style="color: red;">
            <td></td>
            <td></td>
        </tr>
        <tr style="color: yellow;">
            <td></td>
            <td></td>
        </tr>
        <tr style="color: green;">
            <td></td>
            <td></td>
        </tr>
    </table>
</body>
</html>

