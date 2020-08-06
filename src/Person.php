<?php

class Person
{
    private $firstName;

    public function __construct($firstName)
    {
        $this->firstName = $firstName;
    }

    public function displayFirstName()
    {
        echo $this->firstName . \PHP_EOL;
    }
}
