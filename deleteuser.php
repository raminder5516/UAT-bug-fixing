<?php
require_once 'Database.php';
require_once 'userregistration.php';
$id = $_POST['id'];
$db = Database::getDb();
$s =  new userregistration();
$count = $s->deleteUser($db, $id);
if($count){
    header("Location: listusers.php");
}else {
    echo "problem deleting";
}
