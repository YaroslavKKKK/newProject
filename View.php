<?php


namespace PhpstormProjects\untitled1;
use PhpstormProjects\untitled1\Service;
require "Service.php";

class View
{
    private $dataOfTask;

    public function startingService() {
        $service = new Service($this->getDataOfTask());
        $service->mainFunction();
    }

    public function __construct($dataOfTask)
    {
        $this->dataOfTask = $dataOfTask;
    }

    public function getDataOfTask()
    {
        return $this->dataOfTask;
    }
}