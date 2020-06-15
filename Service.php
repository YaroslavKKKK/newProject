<?php


namespace PhpstormProjects\untitled1;

use PDO;
use PhpstormProjects\untitled1\Task;
require "Task.php";

class Service
{
    const PDO_DSN = "mysql:host=localhost;db=todo";
    const PDO_USER = "admin";
    const PDO_PASS = "19861986";
    private PDO $pdoConnection;

    private $dataOfTask;

    public function mainFunction()
    {
        $this->createTask($this->getDataOfTask());
        $this->showAllTasks();
    }

    private function showAllTasks()
    {
        $deletedStatus = "deleted";
        $query = "SELECT * FROM to_do_list WHERE to_do_list.`state` != " . $deletedStatus;
        $pdo = $this->getPdoConnection();
        $sql = $pdo->prepare($query);
        $result = $sql->fetch();
        print $result;
    }

    private function createTask($dataOfTask)
    {
        $task = new Task($dataOfTask['0'], $dataOfTask['1'], $dataOfTask['2']);

        $pdo = $this->getPdoConnection();
        $query = "INSERT INTO to_do_list(title, state, date) VALUES(" . $task->getTitle() . ", " . $task->getStatus() . ", " . $task->getDate() . ")";
        $pdo->prepare($query);

    }

    public function __construct($dataOfTask)
    {
        $this->dataOfTask = $dataOfTask;
    }

    private function setPdoConnection()
    {
        $this->pdoConnection = new PDO(self::PDO_DSN, self::PDO_USER, self::PDO_PASS);
    }

    private function getPdoConnection()
    {
        $this->setPdoConnection();
        return $this->pdoConnection;
    }

    public function getDataOfTask()
    {
        return $this->dataOfTask;
    }
}