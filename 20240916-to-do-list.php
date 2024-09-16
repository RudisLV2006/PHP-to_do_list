<?php


$taskList = [
    "asdasd",
    "asasd"
];

$exit = "y";
do {
    switch ($choise) {
        case 1:
            echo "\n\n";
            for ($i=0; $i < count($taskList); $i++) { 
                $id = $i + 1;
                echo $id . ". $taskList \n";
            }
            echo "\n\n";
            break;
        
        case 2:
            # code...
            break;    

        case 3:
            # code...
            break;
        case 4:
            $exit = null;
            echo "Bye";
            break;    
        default:
            # code...
            break;
    }
} while ($exit=="y");