<?php
class dbConnector
{
    public $username;
    public $password;

    function __construct($uName, $pass)
    {
        $this->setUsername($uName);
        $this->setPassword($pass);
    }

    public function connector() {
        if ($this->checkedNull() == false) {
            $password = $this->getPassword();
            $username = $this->getUsername();
            try {
                $link = new PDO('mysql:host=localhost;dbname=enter_in_system', $username, $password);
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
            return $link;
        }
        return null;
    }

    private function checkedNull() {
        if ($this->getUsername() == null or $this->getPassword() == null) {
            return true;
        }
        return false;
    }
    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }
    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }
}