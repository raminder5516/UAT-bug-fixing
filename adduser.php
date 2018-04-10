<?php

//Lab6 - due on 20th Mar 2018

require_once 'Database.php';
require_once 'userregistration.php';
if(isset($_POST['add'])){
    //get form values and assign to local varaibles
    $fname = $_POST['fname'];
    $phone = $_POST['phone'];
    $lname = $_POST['lname'];
    $useremail = $_POST['userEmail'];
    $userpassword = $_POST['userPassword'];

    $s = new UserRegistration();
    $db = Database::getDb();
    $count = $s->addUser($db, $fname, $lname, $phone, $useremail, $userpassword);

    header("Location: listusers.php");
    //echo "inserted " . $count;
}
?>

<h1>Add User</h1>
<form action="adduser.php"  method="post">
    User first name:<input type="text" name="fname" /><br />
    User last name:<input type="text" name="lname" /><br />
    Phone number:<input type="text" name="phone" /><br />
    Email:<input type="text" name="userEmail" /><br />
    Password:<input type="password" name="userPassword" /><br />
    <input type="submit" name="add" value="Add User">
</form>