<?php



$user = readline("Ievadiet string: ");
$reverse = "";

echo substr("abc", 0, 1)."\n";
echo substr("abc", 1, 2)."\n";
echo substr("abc", 2, 3)."\n";


for ($i=strlen($user)-1; $i >= 0; $i--) { 
    $reverse = $reverse . $user[$i];
    //$reverse = $reverse . substr($user, $i, $i);
    //$temp = $user[$i];
    //echo $temp;
}

echo $reverse;


echo "\n";


function noReturn(){
}

function goodJobReturn(){
    echo "Good job";
}
function oneParameter($parameter){
    return $parameter;
}
function threeParameter($first, $second, $third){
    return $first . $second . $third;
}
