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
            <div class="col-sm-6 jumbotron"><h3>Bug Detail</h3>
                <form action="/viewProject.php">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <label for="namebug">UAT Bug 1</label>
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <label for="desc">It is the online system where a manager adds the project
                            and assigns that project to a tester for finding the bug and programmer to solve that bug</label>
                    </div>
                    <div class="form-group">
                        <label for="tester">Tester:</label>
                        <label for="nameTester">Raj</label>
                    </div>
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <label for="bugStatus">Solved</label>
                    </div>
                    <div class="form-group">
                        <label for="date">Date Created:</label>
                        <label for="datecreate">2018-04-10</label>
                    </div>
                    <div class="form-group">
                        <label for="due">Due Date:</label>
                        <label for="duedate">2018-04-30</label>
                    </div>
                    <div class="form-group">
                        <label for="open">Open Time:</label>
                        <label for="opentime">2018-04-30</label>
                    </div>
                    <div class="form-group">
                        <label for="close">Close Time:</label>
                        <label for="closetime">2018-04-30</label>
                    </div>

                    <a class="back" href="programmerHistory.php">back</a>


                </form>
            </div>
            <div class="col-sm-2 jumbotron"><h3></h3></div>
        </div>
    </div>
</main>
<footer><?php include "footer.php"; ?></footer>
</body>
</html>