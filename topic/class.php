<?php 

class student{
    public $name;
    public $age;
    public $faculty;

    // add the constructor that sets the value of the properties
    function __construct($name , $age , $faculty){
        $this->name = $name;
        $this->age = $age;
        $this->faculty = $faculty;
    }
    

    function setvalue($name , $age ,$faculty){
        $this->name = $name;
        $this->age = $age;
        $this->faculty = $faculty;
    }

    function display(){
        echo 'Your name is ' . $this->name . ' and age is ' . $this->age . ' and the faculty is ' . $this->faculty . '.';
    }
}


// object  => object are the individual instance of the class 

$st1 = new student('ram' , 23 , 'bca');
// $st1->setvalue("ram" , 3 , "bca");
// $st1->setvalue("sachin" , 23 , "csit");
$st1->display();