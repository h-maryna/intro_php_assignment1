<?php

if(empty($_GET['customer_id'])) {
	die('Customer id required');
}

// a little bit of sanitization
$id = intval($_GET['customer_id']);

require 'connect.php';
require 'functions.php';

// Create query to select a customer according its id
$query = "SELECT * FROM customer 
			WHERE customer_id = :customer_id";

// prepare the query
$stmt = $dbh->prepare($query);

// Prepare params array
$params = array(
	':customer_id' => $customer_id
);

// execute the query
$stmt->execute($params);

// get the result
$result = $stmt->fetch(PDO::FETCH_ASSOC);

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<title>Customer Detail</title>
</head>
<body>

<?php if($result) : ?>

<h1><?=$result['first_name']?></h1>

<ul>
	<?php foreach($result as $key => $value) : ?>
		<li><strong><?=$key?></strong>: <?=$value?></l>
	<?php endforeach; ?>
</ul>

<p><a href="contact_page.php">Add new customer</a></p>

<?php else : ?>

	<h2>Sorry there was a problem adding new customer</h2>

<?php endif; ?>


</body>
</html>