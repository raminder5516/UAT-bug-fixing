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
            <div class="col-sm-6 jumbotron"><h3>All Projects with Bugs</h3>
                <form action="/viewProject.php">
                    <div class="form-group">
                        <label for="name1">UAT Bug Tracking System</label>
                        <label for="bugs1">4</label>
                        <a class="btn btn-primary" href="allBugsUpdate.php">View Update</a>

                    </div>
                    <div class="form-group">
                        <label for="name2">DRHC Center</label>
                        <label for="bugs2">7</label>
                        <a class="btn btn-primary" href="allBugsUpdate.php">View Update</a>
                    </div>
                    <div class="form-group">
                        <label for="name3">LDHC Center</label>
                        <label for="bugs3">6</label>
                        <a class="btn btn-primary" href="allBugsUpdate.php">View Update</a>
                    </div>
                    <div class="form-group">
                        <label for="name4">St. Joseph Hospital Project</label>
                        <label for="bugs4">9</label>
                        <a class="btn btn-primary" href="allBugsUpdate.php">View Update</a>
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