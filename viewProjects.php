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
            <div class="col-sm-6 jumbotron"><h3>All Projects</h3>
                <form action="/viewProject.php">
                    <div class="form-group">
                        <label for="name">UAT Bug Tracking System</label>
                        <a class="btn btn-primary" href="deleteProject.php">View Project</a>
                        <a class="btn btn-primary" href="updateProject.php">Update Project</a>
                        <a class="btn btn-primary" href="bugList.php">View Bugs</a>
                    </div>
                    <div class="form-group">
                        <label for="name">DRHC Center</label>
                        <a class="btn btn-primary" href="deleteProject.php">View Project</a>
                        <a class="btn btn-primary" href="updateProject.php">Update Project</a>
                        <a class="btn btn-primary" href="bugList.php">View Bugs</a>
                    </div>
                    <div class="form-group">
                        <label for="name">LDHC Center</label>
                        <a class="btn btn-primary" href="deleteProject.php">View Project</a>
                        <a class="btn btn-primary" href="updateProject.php">Update Project</a>
                        <a class="btn btn-primary" href="bugList.php">View Bugs</a>
                    </div>
                    <div class="form-group">
                        <label for="name">St. Joseph Hospital Project</label>
                        <a class="btn btn-primary" href="deleteProject.php">View Project</a>
                        <a class="btn btn-primary" href="updateProject.php">Update Project</a>
                        <a class="btn btn-primary" href="bugList.php">View Bugs</a>
                    </div>
                    <a class="btn btn-primary" href="deleteProject.php">Add Project</a>



                </form>
            </div>
            <div class="col-sm-2 jumbotron"><h3></h3></div>
        </div>
    </div>
</main>
<footer><?php include "footer.php"; ?></footer>
</body>
</html>