<?php
require_once 'Database.php';
require_once 'project.php';
$db= Database::getDb();
$myproj = new Project();
if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $p = $myproj->getProjectById($db, $id);
}
if(isset($_POST['upt'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $date_started = $_POST['date_started'];
    $date_due = $_POST['date_due'];
    $count = $myproj->updateProject($db, $id, $name, $description, $date_started, $date_due);
    if($count){
        header("Location: viewProjects.php");
    }else {
        echo "problem updating";
    }
}

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
    <div>
        <div class="row d-flex justify-content-around" id="maindata">
            <div class="col-sm-2 jumbotron" ><h3></h3> <p></p></div>
            <div class="col-sm-6 jumbotron"><h3>Update Project</h3>
                <form action="updateProject.php">
                    <div class="form-group">
                        <label for="name">Project Name:</label>
                        <input type="text" class="form-control"  id="name" value="<?= $p->name; ?>">
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <input type="textarea" class="form-control" id="desc"  value="<?= $p->description; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="startdate">Date of Start:</label>
                        <input type="datetime" class="form-control" id="startdate" value="<?= $p->date_started; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="duedate">Due Date:</label>
                        <input type="datetime" class="form-control" id="duedate" value="<?= $p->date_due; ?>">
                    </div>


                    <a class="btn btn-primary" href="viewProjects.php">Update Project</a>

                </form>
            </div>
            <div class="col-sm-2 jumbotron"><h3></h3></div>
        </div>
    </div>
</main>
<footer><?php include "footer.php"; ?></footer>
</body>
</html>
