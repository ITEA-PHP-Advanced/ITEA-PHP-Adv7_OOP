<?php

class Person
{
    private $firstName;
    private $lastName;

    public function __construct($firstName)
    {
        $this->firstName = $firstName;
    }

    public function changeName($newFirstName, $newLastName)
    {
        $this->validNewName($newFirstName, $newLastName);

        $this->firstName = $newFirstName;
        $this->lastName = $newLastName;
    }

    public function displayFirstName()
    {
        echo $this->firstName . \PHP_EOL;
    }

    private function validNewName($firstName, $lastName)
    {
        if (
            $this->firstName === $firstName
            && $this->lastName === $lastName
        ) {
            echo 'Don\'t waste my time!';
        }
    }
}
