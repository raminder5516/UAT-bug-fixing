<?php
require_once 'Database.php';
require_once 'project.php';

if(isset($_POST['add'])){
    //get form values and assign to local varaibles
    var_dump($_POST);
    $name = $_POST['name'];
    $description = $_POST['description'];
    $date_started = $_POST['startdate'];
    $date_due = $_POST['duedate'];
    $p = new Project();
    $db = Database::getDb();
    $count = $p->addProject($db,$name, $description, $date_started, $date_due);
    header("Location: viewProjects.php");
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

        <div class="container d-flex justify-content-center" id="maindata">
<!--            <div class="col-sm-2 " ><h3></h3> <p></p></div>-->
<!--            <div class="col-sm-6 jumbotron"><h3>Add Project</h3>-->
                <form action="addProjects.php" method="post">
                    <div class="form-group row">
                        <label for="name" class="col-md-3 col-form-label mr-2">Project Name:</label>
                        <div class="col-md-9">
                        <input type="text" class="form-control"  name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-md-3 col-form-label mr-2">Description</label>
                        <div class="col-md-9">
                        <textarea class="form-control" rows="3" name="description"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="startdate" class="col-md-3 col-form-label mr-2">Date of Start:</label>
                        <div class="col-md-9">
                        <input type="date" class="form-control" id="startdate" name="startdate">
                         </div>
                    </div>
                    <div class="form-group row">
                        <label for="duedate" class="col-md-3 col-form-label mr-2">Due Date:</label>
                        <div class="col-md-9">
                        <input type="date" class="form-control" id="duedate" name="duedate">
                        </div>
                    </div>

                    <input type="submit" name="add" value="Add Project">
                   <!-- <a class="btn btn-primary" type="submit" href="#">Add Project</a> -->
                    <a class="back" href="viewProjects.php">back</a>
                </form>
<!--            </div>-->
<!--            <div class="col-sm-2 "><h3></h3></div>-->
        </div>

</main>
<footer><?php include "footer.php"; ?></footer>
</body>
</html>