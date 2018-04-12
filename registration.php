<?php
require_once  'Database.php';
require_once  'userregistration.php';

if(isset($_POST['signUp']))
{
    var_dump($_POST);
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $user_name = $_POST['uname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $phone = $_POST['phone'];
    $type = $_POST['type'];
    $u = new UserRegistration();
    $db = Database::getDb();
    $count = $u->addUser($db, $fname, $lname, $user_name, $email, $pass, $phone, $type);
    header("Location:home.php");
}


/*session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}*/

session_start();
if (isset($_POST['login'])) {
    $user_name = $_POST['uname'];
    $pass = $_POST['pass'];

  /*  if (empty($user_name)) {
        array_push($errors, "Username is required");
    }
    if (empty($pass)) {
        array_push($errors, "Password is required");
    }*/

    if (count($errors) == 0) {
        $pass = md5($pass);
        $query = "SELECT * FROM users WHERE user_name='$user_name' AND password='$pass'";
        $results = mysqli_query($query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $user_name;
            $_SESSION['success'] = "You are now logged in";
            header('location: home.php');
        }else {
            array_push($errors, "Wrong username/password combination"); 
        }
    }
}


/*session_start();
//create session variable for login info
$uname = "";
$pass = "";
if(isset($_POST['login'])){
if($_POST['uname'] == $user_name && $_POST['pass'] == $pass){
$_SESSION['user_name'] = $_POST['uname'];
header('location: home.php');
}
else{
echo "invalid login credential";
}
}*/

?>

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
<!--    <link rel="stylesheet" href="mainpage.css" >-->
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
            <form action="registration.php" method="post" class="form-inline">
                <div class="form-group mb-2">
                    <label for="staticEmail2" class="sr-only">Email</label>
                    <input type="text" class="form-control" id="staticEmail2" name="uname">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="inputPassword2" class="sr-only">Password</label>
                    <input type="password" class="form-control" id="inputPassword2" placeholder="Password" name="pass">
                </div>
                <input type="submit" name="login" value="Login" class="btn btn-primary">
            </form>
        </div>

    </div>
</header>
<main>
    <div class="row d-flex justify-content-around" id="maindata">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
            <form action="registration.php" method="post">
                <div class="form-group">
                    <label for="fname">First Name:</label>
                    <input type="text" class="form-control" id="fname" name="fname">
                </div>
                <div class="form-group">
                    <label for="lname">Last Name:</label>
                    <input type="text" class="form-control" id="lname" name="lname">
                </div>
                <div class="form-group">
                    <label for="uname">Username:</label>
                    <input type="text" class="form-control" id="uname" name="uname">
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="pass">Password:</label>
                    <input type="password" class="form-control" id="pass" name="pass">
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="tel" class="form-control" id="phone" name="phone">
                </div>
                <div class="form-group ">
                    <label for="inputState">Type:</label>
                    <select id="inputState" class="form-control" name="type">
                        <option selected>Project Manager</option>
                        <option>Tester</option>
                        <option>Programmer</option>
                    </select>
                </div>
                <input type="submit" name="signUp" value="Sign Up" class="btn btn-primary">

            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</main>
</body>
</html>