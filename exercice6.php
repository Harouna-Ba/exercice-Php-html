<?php
/**ecrire un scrypte qui initialise un tableau de classe le scrypte genere des liste(ul)(li) des classes 
 * par nivau */


 $tab=['GRLS','IAGE','MOSIEF','TTL'];
 foreach($tab as $val){
     echo"$val";
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=", initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <li>
        <ul>GRLS1</ul>
        <ul>GRLS2</ul>
    </li>
    <li>
        <ul>IAGE1</ul>
        <ul>IAGE2</ul>
    </li>
    <li>
        <ul>MOSIEF1</ul>
        <ul>MOSIEF2</ul>
    </li>
    <li>
        <ul>TTL1</ul>
        <ul>TTL2</ul>
    </li>
</body>
</html>