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
            <div class="col-sm-6 jumbotron"><h3>All Programmers </h3>
                <form action="/viewProject.php">
                    <div class="form-group">
                        <label for="name1">Raminder</label>
                        <label for="project1">1</label>
                        <a class="btn btn-primary" href="programmerHistory.php">View History</a>

                    </div>
                    <div class="form-group">
                        <label for="name2">Raj</label>
                        <label for="project2">3</label>
                        <a class="btn btn-primary" href="programmerHistory.php">View History</a>
                    </div>
                    <div class="form-group">
                        <label for="name3">Nadeem</label>
                        <label for="project3">2</label>
                        <a class="btn btn-primary" href="programmerHistory.php">View History</a>
                    </div>
                    <div class="form-group">
                        <label for="name4">Matthew</label>
                        <label for="project4">3</label>
                        <a class="btn btn-primary" href="programmerHistory.php">View History</a>
                    </div>
                    <a class="back" href="home.php">back</a>
                </form>
            </div>
            <div class="col-sm-2 jumbotron"><h3></h3></div>
        </div>
    </div>
</main>
<footer><?php include "footer.php"; ?></footer>
</body>
</html>