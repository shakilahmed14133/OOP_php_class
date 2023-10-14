<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

require_once 'Book.php';
require_once 'Customer.php';

// Creating objects of Book and Customer
$book = new Book(123456, "Sample Book", "Sample Author", 5);
$customer = new Customer(1, "John", "Doe", "johndoe@example.com");

// Printing objects
echo $book . "<br>";
echo $customer . "<br>";

// Manipulating Book and Customer objects
$book->addCopy(3);
$customer->firstName = "Jane";
$customer->email = "janedoe@example.com";

// Printing updated objects
echo $book . "<br>";
echo $customer . "<br>";

?>

</body>
</html>