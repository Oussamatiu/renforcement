<?php
// • class Project { private $title; private $dailyRate; private $tasks = []; }
//  • → Project : constructeur + addTask(Task $task) + getter $tasks
// • → Project : calculateTotalHours() — somme des heures de toutes les
// tâches
// • → Project : calculateTotalWithBuffer($bufferPercent = 10) — total * (1 +
// buffer/100)
// • → Project : calculateBudget() — totalHeures * dailyRate / 8 (taux
// journalier / 8h)
// • → Project : getBigTasks($threshold) — retourne un tableau des tâches
// dont isBig() est true

require 'Task.php';

class Project {
    private $title;
    private $dailyRate;
    private $tasks = [];

    public function __construct($title , $dailyRate , $tasks)
    {
        $this->title = $title;
        $this->dailyRate = $dailyRate;
        $this->tasks = $tasks;
    }

    public function addTask(Task $task){
        $this->tasks[] = $task;
    }

    public function __get($name)
    {
        return $this->$name;
    }
    public function calculateTotalHours(){
        $totalH = 0;
      foreach ($this->tasks as $task) {
        $totalH += $task->estimatedHours;
      }
      return $totalH;
    }
    public function calculateTotalWithBuffer($bufferPercent = 10){
        $totalH = $this->calculateTotalHours();
        $total = $totalH * (1 + $bufferPercent/100);
        return $total;
    }
    public function calculateBudget(){
        $budget = $this->calculateTotalWithBuffer() * ($this->dailyRate / 8);
        return $budget;
    }

    public function getBigTasks($threshold){
        $table = [];
        foreach ($this->tasks as $task) {
                $task->isBig($threshold) && $table[] = $task;
        }
        return $table;
    }
// 8. Testez avec un projet 'Refonte site web' (600€/jour), 3 tâches : 'Design' 12h, 'Dev front'
// 30h, 'Dev back' 45h
}
$T1 = new Task(1 , "Design", 12);
$T2 = new Task(2 , "Dev front", 30);
$T3 = new Task(3 , "Dev back", 45);
$p1 = new Project('Refonte site web', 600 , [$T1 , $T2, $T3]);
echo $p1->calculateTotalHours();
echo "\n";
echo $p1->calculateTotalWithBuffer();
echo "\n";
echo $p1->calculateBudget() . " EUR\n";

$taskBigs = $p1->getBigTasks(20);

foreach ($taskBigs as $taskBig){
    echo $taskBig->description. " " .$taskBig->estimatedHours . "\n";
}
