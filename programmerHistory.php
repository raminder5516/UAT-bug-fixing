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
                <form class="form-inline">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"> By Programmer
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2"> By Tester
                        </label>
                    </div>

                    <div class="form-group mx-sm-3">
                        <input type="text" class="form-control" id="inputPassword2" placeholder="Programmer or Tester">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>

                </form>


                <form action="/viewProjects.php">
                    <div class="form-group">
                        <label for="name">UAT Bug Tracking System</label>
                        <a class="btn btn-primary" href="programmerDetail.php">View Detail</a>
                    </div>
                    <div class="form-group">
                        <label for="name">DRHC Center</label>
                        <a class="btn btn-primary" href="programmerDetail.php">View Detail</a>
                    </div>
                    <div class="form-group">
                        <label for="name">LDHC Center</label>
                        <a class="btn btn-primary" href="programmerDetail.php">View Detail</a>
                    </div>
                    <div class="form-group">
                        <label for="name">St. Joseph Hospital Project</label>
                        <a class="btn btn-primary" href="programmerDetail.php">View Detail</a>
                    </div>

                    <a class="back" href="programmers.php">back</a>


                </form>
            </div>
            <div class="col-sm-2 jumbotron"><h3></h3></div>
        </div>
    </div>
</main>
<footer><?php include "footer.php"; ?></footer>
</body>
</html>