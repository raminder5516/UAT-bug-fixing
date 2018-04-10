<?php

//Project Phase 1 - Feature 1 by Nadeem

require_once 'Database.php';
require_once 'userregistration.php';

if(isset($_POST['add'])){

    //get form values and assign to local variables
    $user_name = $_POST['user_name'];
    $fname = $_POST['fname'];
    $phone = $_POST['phone'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $s = new UserRegistration();
    $db = Database::getDb();
    $count = $s->addUser($db, $user_name, $fname, $lname, $phone, $email, $password);

    header("Location: listusers.php");
    //echo "inserted " . $count;
}
?>

<h1>Add User</h1>
<form action="adduser.php"  method="post">
    User Name:<input type="text" name="user_name" /><br />
    User first name:<input type="text" name="fname" /><br />
    User last name:<input type="text" name="lname" /><br />
    Phone number:<input type="text" name="phone" /><br />
    Email:<input type="text" name="email" /><br />
    Password:<input type="password" name="password" /><br />
    <input type="submit" name="add" value="Add User">
</form>