<!DOCTYPE html>
<?php

//Project Phase 1 - Feature 1 by Nadeem

require_once 'Database.php';
require_once 'userregistration.php';


$s = new UserRegistration();
$users = $s->getAllUsers(Database::getDb());

?>


<html>
<head>
    <title>List Users</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/homepage.css" >
</head>
<main>
    <body>
        <header>
            <?php include 'header.php' ?>
        </header>

<h1>List of Registered Users</h1>
<ul>
    <?php foreach ($users as $s){
        echo "<li>" . $s->fname . " " . $s->lname .
            " <form action='deleteuser.php' method='post'>
            <input type='hidden' name='id' value='$s->id' />
            <input type='submit' name='delete' value='Delete'>
            </form> 
            <form action='updateuser.php' method='post'>
            <input type='hidden' name='id' value='$s->id' />
            <input type='submit' name='update' value='Update'>
            </form>
            </li>";
    } ?>
</ul>

<a href="adduser.php">Register</a>
</main>
</body>
</html>