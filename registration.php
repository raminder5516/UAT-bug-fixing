<!DOCTYPE html>
<html lang="en">
<head>
    <title>UAT Bugs Fixing System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="mainpage.css" >
</head>
<body>
<header>
    <div class="d-flex">
        <img src="images/logo.png" alt="Logo" id="logo">
        <div id="sitename" class="d-flex flex-column justify-content-center">
            <p>UAT</p>
            <p>Bugs Tracking</p>
        </div>
        <div class="form ml-auto">
            <form class="form-inline">
                <div class="form-group mb-2">
                    <label for="staticEmail2" class="sr-only">Email</label>
                    <input type="text" class="form-control" id="staticEmail2" value="email@example.com">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="inputPassword2" class="sr-only">Password</label>
                    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                </div>
                <a class="btn btn-primary" href="mainpage.html">Login</a>

            </form>
        </div>

    </div>
</header>
<main>
    <div class="row d-flex justify-content-around" id="maindata">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
            <form action="/action_page.php">
                <div class="form-group">
                    <label for="email">Name:</label>
                    <input type="email" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd">
                </div>
                <div class="form-group">
                    <label for="email">Phone:</label>
                    <input type="email" class="form-control" id="phone">
                </div>
                <div class="form-group ">
                    <label for="inputState">Type:</label>
                    <select id="inputState" class="form-control">
                        <option selected>Project Manager</option>
                        <option>Tester</option>
                        <option>Programmer</option>
                    </select>
                </div>
                <a class="btn btn-primary" href="mainpage.html">Sign Up</a>

            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</main>
</body>
</html>