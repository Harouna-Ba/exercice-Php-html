<?php
/**ecrire un scrypte qui initialise un tableau d'entier puis genere une table html dont le nombre de ligne
est au nombre d'element du tableau. le nombre de colone de chaque ligne correspond respectivement a la valeur 
se trouvant dans la tableau d'entier*/

?>
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
        $tab=[3,5,1,6,4,2];
        foreach($tab as $val){
            echo"$val";
        }
    


    ?>
    <table>
        <tr>
            
        <td>2</td>
        <td>2</td>
        <td rowspan="3">2</td>
        </tr>
        <tr>
            <td>5</td>
            <td>5</td>
            <td>5</td>
            <td>5</td>
            <td rowspan="1">5</td>
        </tr>
        <tr>
            <td rowspan="6">1</td>
        </tr>
        <tr>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
            <td>6</td>
        </tr>
        <tr>
            <td>4</td>
            <td>4</td>
            <td>4</td>
            <td rowspan="2">4</td>
        </tr>
        <tr>
            <td>2</td>
            <td rowspan="4">2</td>
        </tr>


    </table>
</body>
</html>