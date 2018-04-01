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
            <div class="col-sm-6 jumbotron"><h3>Generate Ticket</h3>
                <form action="/viewProject.php">
                    <div class="form-group">
                        <label for="name">Ticket Name:</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="textarea" class="form-control" id="description">
                    </div>
                    <div class="form-group ">
                        <label for="inputState">Project Name:</label>
                        <select id="inputState" class="form-control">
                            <option selected>Select</option>
                            <option>DRHC Center</option>
                            <option>LDHC Hospital</option>
                            <option>UAT Bug Trackingr</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cdate">Date Created:</label>
                        <input type="text" class="form-control" id="cname">
                    </div>
                    <div class="form-group">
                        <label for="date">Due Date:</label>
                        <input type="datetime" class="form-control" id="date">
                    </div>

                    <a class="btn btn-primary" href="listProjectBugs.php">Create Ticket</a>
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