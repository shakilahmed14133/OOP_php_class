<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
class Customer
{
    public $id;
    public $firstName;
    public $lastName;
    public $email;

    public function __construct($id, $firstName, $lastName, $email)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    public function __toString()
    {
        return "ID: " . $this->id . ", Name: " . $this->firstName . " " . $this->lastName . ", Email: " . $this->email;
    }

    // Implement __call, __get and __set if necessary
}

?>
</body>
</html>

<?php


