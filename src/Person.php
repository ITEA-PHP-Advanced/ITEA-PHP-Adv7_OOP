<?php

require_once __DIR__ . '/InvalidChangeNameRequestException.php';

class Person
{
    private $firstName;
    private $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function changeName($newFirstName, $newLastName)
    {
        $this->validateNewName($newFirstName, $newLastName);

        $this->firstName = $newFirstName;
        $this->lastName = $newLastName;
    }

    public function displayFirstName()
    {
        echo $this->firstName . \PHP_EOL;
    }

    private function validateNewName($firstName, $lastName)
    {
        if (
            $this->firstName === $firstName
            && $this->lastName === $lastName
        ) {
            throw new InvalidChangeNameRequestException();
        }
    }
}
