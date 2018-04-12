<?php
require_once 'Database.php';
require_once 'project.php';
$p = new Project();
$projects = $p->getAllProjects(Database::getDb());
?>


<!DOCTYPE html>
<html>
<head>
    <title>UAT Bugs Fixing System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/homepage.css" >
</head>
<body>

<header> <?php include "header.php"; ?></header>
<main>
<h1>List of projects</h1>
<ul>
    <?php foreach ($projects as $p){
        echo "<li>" ."Project name:". " ". $p->name .
            "<br/>"."Description:"." ". $p->description .
            "<br/>"."Start date of project:"." ". $p->date_started .
            "<br/>"."Due date of project:"." ". $p->date_due .
            "<br/>"."Project manager:"." ". $p->project_manager.
            " <form action='viewProjectToDelete.php' method='post'>
            <input type='hidden' name='id' value='$p->id' />
            <input type='submit' name='delete' value='Delete'>
            </form> 
            <form action='updateProject.php' method='post'>
            <input type='hidden' name='id' value='$p->id'/>
            <input type='submit' name='update' value='Update'>
            </form>
            </li>";
    } ?>
</ul>

<a href="addProjects.php">Add Project</a>

</main>
<footer><?php include "footer.php"; ?></footer>
</body>
</html>
