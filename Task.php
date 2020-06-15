<?php


namespace PhpstormProjects\untitled1;


class Task
{
    private string $nickname;
    private string $title;
    private string $status;
    private string $date;

    public function __construct($nickname, $title, $status)
    {
        $this->nickname = $nickname;
        $this->title = $title;
        $this->status = $status;
        $this->setDate(date("d.m.Y  H:i"));
    }

    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    public function getNickname(): string
    {
        return $this->nickname;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getDate(): string
    {
        return $this->date;
    }
}