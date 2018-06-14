<!DOCTYPE html>
<html lang="en" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Bookstore</title>
 </head>
<body>
  <h2>List Books</h2>
<?php

$rows = file(__DIR__ . '/list.txt');
foreach ($rows as $row) {
	$values = array_map('trim', explode(';', $row));
	echo $values[0] . ' ' . $values[1] . ' ' . $values[2] . ' ' . $values[3] . ' ' . $values[4] . ' ' . '</br>';	
}

?>
</body>
</html>
