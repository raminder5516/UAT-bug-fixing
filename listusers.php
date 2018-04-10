<?php

//Project Phase 1 - Feature 1 by Nadeem

require_once 'Database.php';
require_once 'userregistration.php';
$s = new UserRegistration();
$users = $s->getAllUsers(Database::getDb());
?>
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