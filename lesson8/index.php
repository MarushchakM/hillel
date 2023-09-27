<?php
require_once 'Todo.php';

$todo = new Todo('todo');

try {
//    $todo->addTask('Нове завдання4', Priority::Important);
//    $todo->getTasks() . PHP_EOL;
//    $todo->deleteTask(3);
    $todo->completeTask(1);
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}


