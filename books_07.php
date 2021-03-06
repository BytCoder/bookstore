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

    public function __construct($firstName, $lastName, $title, $year, $pages )
    {
        $this->firstname = $firstName;
        $this->lastName = $lastName;
        $this->title = $title;
        $this->title = $title;
        $this->pages = $pages;
    }
    public function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }    
}

class BookRepository 
{
    
    public static function findAll($file)
    {
        $rows = file($file);
        $books = [];
        foreach ($rows as $row) {
            $values = array_map('trim', explode(';', $row));  
            $books[] = new Book($values[0], $values[1], $values[2], $values[3], $values[4]);
        }
        return $books;
    }

    
}

$file = __DIR__ . '/list.txt';
$bookRepository = new BookRepository();
$books = $bookRepository->findAll($file);

foreach ($books as $book) {
	echo $book->fullName() . ' '. $book->title . ' ' . $book->year . ' ' . $book->pages .'</br>';
}
 
?>
</body>
</html>
