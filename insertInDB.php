<?php
include_once "loginsAndPasswords.php";

class insertInDB
{
    public $link;

    public function __construct($link)
    {
        $this->link = $link;
    }

    public function writer() {
        $linkBDs = $this->getLink();

        $login = $_POST['login'];
        $password = $_POST['password'];
        $query = "INSERT INTO `enter_in_system`.autorization (`login`, `password`) VALUES (:login, :password)";
        $params = [
            ':login' => $login,
            ':password' => $password
        ];
        $linkBDs->prepare($query)->execute($params);
    }

    /**
     * @param mixed $link
     */
    public function setLink($link): void
    {
        $this->link = $link;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

}