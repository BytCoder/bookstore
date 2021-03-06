<!DOCTYPE html>
<html lang="en" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Bookstore</title>
 </head>
<body>
  <h2>List Books</h2>
<?php
class Book
{
    public $firstName;
    public $lastName;
    public $title;
    public $year;
    public $pages;

    public function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }    
}

function findAll($file)
{
    $rows = file(__DIR__ . '/list.txt');
    $books = [];
    foreach ($rows as $row) {
        $values = array_map('trim', explode(';', $row));
        $book = new Book();
        $book->firstName = $values[0];
        $book->lastName = $values[1];
        $book->title = $values[2];
        $book->year = $values[3];
        $book->pages = $values[4];
        $books [] = $book;
    }
    return $books;
}


$file = __DIR__ . '/list.txt';
$books = findAll($file);


foreach ($books as $book) {
	echo $book->fullName() . ' '. $book->title . ' ' . $book->year . ' ' . $book->pages .'</br>';
}
 
?>
</body>
</html>
