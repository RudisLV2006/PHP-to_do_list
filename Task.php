<?php
class Task{
    private $status;
    private $priority;
    private $content;


    public function __construct($status, $priority, $content) {
        $this->status = $status;
        $this->priority = $priority;
        $this->content = $content;
    }
    public function __destruct(){
        echo "Succesfully deleted object!\n";
    }

    public function displayTask($key){
        echo "ID: {$key}, CONTENT: {$this->content}, STATUS: {$this->status}\n";
    } 
}

//$tasks = [1=>new Task('done','5','konsultācija 15:10'),
          //2=>new Task('inprogress','2','aizbraukt uz veikalu 19:00')];



$task1 = new Task('done','5','konsultācija 15:10');
$task2 = new Task('inprogress','2','aizbraukt uz veikalu 19:00');
$array = [1=>$task1,
                2=>$task2];
$array[1]->displayTask(1);
addTask($array); 
addTask($array); 
addTask($array); 
addTask($array); 
addTask($array);
deleteTask($array); 
deleteTask($array); 
deleteTask($array);                
displayAllTasks($array);
//$array[1]->displayTask(1);

function displayAllTasks(&$tasks) {
    foreach ($tasks as $key=>$task) {
        $task->displayTask($key);
    }
}
function addTask(&$tasks) {
    $newContent = readline("Ievadiet jaunu uzdevumu: ");
    $tempTask = new Task('new','priority',$newContent);
    $tasks[] = $tempTask;
    echo "Uzdevums pievienots\n";
}

function deleteTask(&$tasks) {
    $id = readline("Ievadiet dzēšamā uzdevuma ID: ");
    if (isset($tasks[$id])) {
        unset($tasks[$id]);
        //$tasks = array_keys($tasks);
        echo "Uzdevums dzēsts\n";
    } else {
        echo "Uzdevums nav atrasts\n";
    }
}