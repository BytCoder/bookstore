<!DOCTYPE html>
<html lang="en" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Bookstore</title>
 </head>
<body>
  <h2>List Books</h2>
<?php

function findAll($rows)
{
    $books = [];
    foreach ($rows as $row) {
        $values = array_map('trim', explode(';', $row));
        $books [] = [
            'firstName' => $values[0],
            'lastName' => $values[1],
            'title' => $values[2],
            'year' => $values[3],
            'pages' => $values[4],
        ];
    }
    return $books;
}
function fullName($firstName, $lastName)
{
    return $firstName . ' ' . $lastName;
}
$rows = file(__DIR__ . '/list.txt');
$books = findAll($rows);
foreach ($books as $book) {
	echo fullName($book[firstName], $book[lastName] ) . ' '. $book[title] . ' ' . $book[year] . ' ' . $book[pages] .'</br>';
}

  
?>
</body>
</html>
