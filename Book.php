<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class Book
{
    private $isbn;
    private $title;
    private $author;
    private $available;

    public function __construct($isbn, $title, $author, $available)
    {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
    }

    public function getCopy()
    {
        return $this->available > 0;
    }

    public function addCopy($num)
    {
        if ($num > 0) {
            $this->available += $num;
            return true;
        }
        return false;
    }

    public function __toString()
    {
        return "ISBN: " . $this->isbn . ", Title: " . $this->title . ", Author: " . $this->author . ", Available: " . $this->available;
    }

    // Implement __call, __get and __set if necessary
}

?>

    
</body>
</html>

