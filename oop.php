<?php
class Person
{
    private $name;
    private $email;
    private static $ageLimit = 40;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
        echo __CLASS__ . ' Created<br>';
    }

    public function __destruct()
    {
        echo __CLASS__ . ' Destroyed<br>';
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public static function getAgeLimit()
    {
        return self::$ageLimit;
    }
}

echo Person::getAgeLimit();
// $person1 = new Person('John Doe', 'dom@gmail.com');
// echo $person1->getName();
// $person1->setName('Dom');
// echo $person1->getName();


class Customers extends Person
{
    private $balance;

    public function __construct($name, $email, $balance)
    {
        parent::__construct($name, $email, $balance);
        echo 'A new ' . __CLASS__ . ' has been created';
    }

    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    public function getBalance()
    {
        return $this->balance . '<br>';
    }
}


// $customer1 = new Customers('John Doe', 'dom@gmail.com', 300);
// echo $customer1->getBalance();
