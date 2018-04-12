<?php
require_once '../Database.php';
require_once '../user_Assign.php';

$p = new User_Assign();
$projects = $p->getAllProjects(Database::getDb(),1);
//var_dump($projects);
?>
<ul>
    <?php
foreach ($projects as $project){
  echo "<li>$project->name</li>";
  echo "<form action='showUsersProject.php' method='post'>
            <input type='hidden' name='id' value='$project->id' />
            <input type='submit' name='assign' value='assign user'>
            </form>";
}
?>
</ul>