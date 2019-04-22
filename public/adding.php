 <?php

require 'functions.php';
require 'connect.php';

// errors flag
$errors = [];

$success = false;

// if REQUEST METHOD is POST
if('POST' == $_SERVER['REQUEST_METHOD']) {
  try {

      // create query
      $query = "INSERT INTO
             customer
             (first_name, last_name, street, city, postal_code, province, country, phone, email, password)
             VALUES
             (:first_name, :last_name, :street, :city, :postal_code, :province, :country, :phone, :email, :password)";
      
      // prepare query
      $stmt = $dbh->prepare($query);

      $params = array(
        ':first_name' => $_POST['first_name'],
        ':last_name' => $_POST['last_name'],
        ':street' => $_POST['street'],
        ':city' => $_POST['city'],
        ':postal_code' => $_POST['postal_code'],
        ':province' => $_POST['province'],
        ':country' => $_POST['country'],
        ':phone' => $_POST['phone'],
        ':email' => $_POST['email'],
        ':password' => $_POST['password']
      );

      // execute query
      $stmt->execute($params);

      $author_id = $dbh->lastInsertId();

      header('Location: inserting_data.php?customer_id=' . $customer_id);
      exit;

    } catch(Exception $e) {
      die($e->getMessage());
    }

  } // end if

}// end IF POST

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <title>Add Country</title>
  <style>
    .errors {
      color: #990000;
    }
  </style>
</head>
<body>

<h1>Add a Country</h1>

 <?php include 'errors.inc.php'; ?>

<form action="<?=$_SERVER['PHP_SELF'] ?>" method="post" novalidate>

  <fieldset>
    <legend>Add New Author</legend>

    <p>
    <label for="author">Author</label><br />
    <input type="text" name="name" id="author" 
    value="<?=clean('name')?>" />
    </p>

    <p>
    <label for="country">Country</label><br />
    <input type="text" name="country" id="country" value="<?=clean('country')?>" />
    </p>

    <p>
    <button>Submit</button>
    </p>

  </fieldset>