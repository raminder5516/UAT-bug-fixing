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
    $user_name = $_POST['user_name'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $count = $myuser->updateuser($db, $id,$user_name, $fname, $lname, $phone, $email,$password);
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
    user_name:<input type="text" name="user_name"  value="<?= $s->user_name; ?>"/><br />
    fname:<input type="text" name="fname"  value="<?= $s->fname; ?>"/><br />
    lname:<input type="text" name="lname"  value="<?= $s->lname; ?>"/><br />
    phone:<input type="text" name="phone"  value="<?= $s->phone; ?>"/><br />
    email:<input type="text" name="email" value="<?= $s->email; ?>" /><br />
    password:<input type="password" name="password" value="<?= $s->password; ?>" /><br />
    <input type="submit" name="upt" value="Update User">
</form>