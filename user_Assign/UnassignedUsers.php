<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 2018-04-12
 * Time: 2:05 AM
 */
require_once '../Database.php';
require_once '../user_Assign.php';

$ap = new User_Assign();
$id = (int)$_POST["id"];
$Tester2 = $ap->getUnassignedTester(Database::getDb(),$id);
$str="";
foreach ($Tester2 as $t){
    $str.="<li>$t->user_name</li><input type='checkbox' name='users[]' value='$t->id' id='users[]' class='checkbox'>";
}
echo $str;