<?php

// exercice 1
$age = 28;

if ($age >= 18) {
    echo "Vous êtes majeur !<br>";
} else {
    echo "Vous êtes mineur <br>";
}

// exercice 2

$isEasy = true;
if ($isEasy) {
    echo "C'est facile <br>";
} else {
    echo "C'est difficile !!! <br>";
}


echo ($isEasy) ? "C'est facile <br>" : "C'est difficile !!! <br>";
// echo $comment;

// exercice 3
$gender = "femme";

if ($age <= 18 && $gender === "homme") {
    echo "Vous êtes un homme et vous êtes mineur";
} else if ($age >= 18 && $gender === "homme") {
    echo "Vous êtes un homme et vous êtes majeur";
} else if ($age <= 18 && $gender === "femme") {
    echo "Vous êtes une femme et vous êtes mineur";
} else {
    echo "Vous êtes une femme et vous êtes majeur";
}

// exercice 4

$magnitude = 9;

switch ($magnitude) {
    case 1: 
        echo "Micro-séisme impossible à ressentir.";
    break;
    
    case 2: 
        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
    break;
    
    case 3: 
        echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
    break;
    
    case 4: 
        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
    break;
    
    case 5: 
        echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
    break;
    
    case 6: 
        echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
    break;
    
    case 7: 
        echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
    break;
    
    case 8: 
        echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
    break;
    
    case 9: 
        echo "Séisme capable de tout détruire sur une très vaste zone.";
    break;

    default: echo "Ce n'est pas dans l'échelle de Richter ta valeur!";

}

// exercice 5

if ($gender != "homme") {
    echo "<br> C'est une dévoloppeuse !!!";
} else {
    echo "C'est un dévoloppeur !!!";
}

// exercice 6

if ($age >= 18) {
    echo "<br> Tu es majeur";
} else {
    echo "Tu n'est pas majeur";
}

// exercice 7
$isOk = true;
if ($isOk == false) {
    echo "C'est pas bon !!!";
} else {
    echo "<br> C'est ok";
}

// exercice 8

if ($isOk) {
    echo "<br>C'est ok !!";
} else {
    echo "C'est pas bon !!!";
}