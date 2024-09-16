<?php
$taskList = ["First task", "second task"];

function showTasks($inputTasks){
    foreach ($inputTasks as $task) {
        echo $task . "\n";
    }
}

function addTask(&$inputTasks){
    $inputTasks[] = readline("Ievadiet uzdevumu: ");
}

function showTask($inputTasks){
    $taskIndex = readLine("Ievadiet uzdevuma ciparu: ");
    if(is_numeric($taskIndex)){
        echo $inputTasks[$taskIndex-1]. "\n";
    }else {
        echo "Nepareize ievade!\n";
        showTask($inputTasks);
    }
    
}

do {
    echo "Uzdevumu parvaldnieks\n";
    echo "Izvadīt visu uzdevumu sarakstu => 1\n";
    echo "Ievadīt jaunu uzdevumu => 2\n";
    echo "Apskatīt vienu uzdevumu => 3\n";
    echo "Iziet ārā => 'N'";
    $choise = readline("Izvelaties darbību: ");

    switch ($choise) {
        case '1':
            showTasks($taskList);
            break;
        
        case '2':
            addTask($taskList);
            break;
        case '3':
            showTask($taskList);
            break;
        case 'N':
            break;
        default:
            echo "Invalid option";
            break;
    }

    // $loop = readline("Turpināt:\n");
    // if ($loop !="N") {
    //    $array[] = "$loop"; 
    // }
} while ($choise != "N");
print_r($taskList);

/*
1.uzdevums
uztaisīt do-while cikls, ko lietotājs
var apstādināt ievadot "N"

2.uzdevums
Izveidot switch-case konstruciju
lai apstrādātu dažādas lietotāja ievadus

*/