<?php

    class Person {
        private $name;
        private $email;
        // public static $ageLimit = 40;
        private static $ageLimit = 40;

        public function __construct($name, $email){
            $this->name = $name; // this.name is its equivalent in JS
            $this->email = $email;
            echo __CLASS__.' created<br>'; // gives the name of the class
        }

        public function __destruct(){
            echo __CLASS__.' destroyed<br>';
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name.'<br>';
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email.'<br>';
        }

        public static function getAgeLimit(){
            return self::$ageLimit;
        }

    }

    #Static props and method
    // echo Person::getAgeLimit(); // access private static methods directly
    // echo Person::$ageLimit; // access public static directly with ::

    // $person1 = new Person('Romain', 'romain.rtestard@gmail.com');
    // $person1->setname('Romain Testard');
    // echo $person1->getName();

    class Customer extends Person{
        private $balance;
        
        public function __construct($name, $email, $balance){
            parent:: __construct($name, $email, $balance);
            $this->balance = $balance;
            echo 'A new '.__CLASS__.' has been created<br>';
        }

        public function setBalance($balance){
            $this->balance = $balance;
        }

        public function getBalance(){
            return $this->balance.'<br>';
        }

    }

    $customer1 = new Customer('Romain Testard', 'romain.rtestard@gmail.com', 300);

    echo $customer1->getBalance();

?>