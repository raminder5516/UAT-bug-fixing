<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 2018-04-11
 * Time: 10:30 PM
 */
require_once '../Database.php';
require_once '../user_Assign.php';

$p = new User_Assign();

if($_POST["action"]=="add"){
   $p->assignUsers(Database::getDb(),$_POST["projectid"],$_POST["userid"]);
   // $p->removeUser(Database::getDb(),7,7);
}else if($_POST["action"]=="remove"){
    $p->removeUser(Database::getDb(),$_POST["projectid"],$_POST["userid"]);
}else{

}

//header("Location:showUsersProject.php");
