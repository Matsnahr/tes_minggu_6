<?php

/** 
 * 
 * poin 2
 * 
 * - 1 || Buatlah sebuah class dengan menginplementasikan access modifier pada method maupun properties
 * - 1 || invoke/call method yang kalian buat dengan visibilitas static maupun non static
 */


// FUNCTION

function nama($name)
{
    echo $name;
}
nama("MATSNA HIDAYATUR ROCHMAN");


class nama{

    //PROPERTIES

    public $name;

    //METHOD

    public function name()
    {
        echo "\nstudent nama";
    }

    // STATIC METHOD

    public static function names()
    {
        echo "\nStatic Methods\n";
    }

    //SETTERS

    public function setAddress($address)
    {
        $this->address=$address;
    }

    //GETTERS

    public function getAddress()
    {
        return $this->address;
    }
}

// INSTANTIATED CLASS

$student=new nama();

// INVOKE METHOD

$student->name();

// INVOKE STATIC METHOD

$student::names();

// INVOKE SETTERS & GETTERS

$student->setAddress("JL.YAHYA SHOLIKHIN ");

echo $student->getAddress().PHP_EOL;