<?php

echo "This is my first CLI script in php";

//Izveido ciklu, lai izvadītu skaitļus no 1-10

echo "\n";

for ($i=0; $i < 10; $i++) { 
    echo "$i";
}
echo "\n";
for ($i=10;$i>0;$i--){
    echo "$i";
}
echo "\n";

$person = [
    ['name' => 'Janis',
     'age' => 19
],
    ['name' => 'Kristaps',
     'age' => 18
],
    ['name' => 'Juris',
     'age' => 30
    ]
];

var_dump($person);
