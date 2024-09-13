<?php
$taskList = ["First task", "second task"];

function showTask($inputTasks){
    foreach ($inputTasks as $task) {
        echo $task . "\n";
    }
}

function addTask(){
    echo "To be implemented!\n"
}

do {
    echo "Uzdevumu parvaldnieks\n";
    echo "Apskatīt visus uzdevumus => 1\n";
    echo "Ievadīt jaunu uzdevumu => 2\n";
    $choise = readline("Izvelaties darbību: ");

    switch ($choise) {
        case '1':
            showTask($taskList);
            break;
        
        case '2':
            echo "To be implemented!\n";
            break;

        default:
            echo "Invalid option";
            break;
    }

    $loop = readline("Turpināt:\n");
    if ($loop !="N") {
       $array[] = "$loop"; 
    }
} while ($loop != "N");

var_dump($array);


// 1.uzdevums
//uztaisīt do-while cikls, ko lietotājs
//var apstādināt ievadot "N"

// 2.uzdevums
/*
Izveidot switch-case konstruciju
lai apstrādātu dažādas lietotāja ievadus

*/