<?php
require_once 'Database.php';
require_once 'userregistration.php';
$db= Database::getDb();
$myuser = new userRegistration();
if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $s = $myuser->getUserById($db, $id);
}
if(isset($_POST['upt'])){
    $id = $_POST['sid'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $userEmail = $_POST['userEmail'];
    $userPassword = $_POST['userPassword'];
    $count = $myuser->updateuser($db, $id,$fname, $lname, $phone, $userEmail,$userPassword);
    if($count){
        header("Location: listusers.php");
    }else {
        echo "problem updating";
    }
}
?>

<h1>Update User</h1>
<form action="updateuser.php"  method="post">
    <input type="hidden" value="<?= $s->id; ?>" name="sid">
    fname:<input type="text" name="fname"  value="<?= $s->fname; ?>"/><br />
    lname:<input type="text" name="lname"  value="<?= $s->lname; ?>"/><br />
    phone:<input type="text" name="phone"  value="<?= $s->phone; ?>"/><br />
    email:<input type="text" name="userEmail" value="<?= $s->userEmail; ?>" /><br />
    password:<input type="password" name="userPassword" value="<?= $s->userPassword; ?>" /><br />
    <input type="submit" name="upt" value="Update User">
</form>