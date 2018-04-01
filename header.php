<div class="d-flex">
    <a class="logo1" href="home.php"><img src="images/logo.png" alt="Logo" id="logo"></a>
    <div id="sitename" class="d-flex flex-column justify-content-center">
        <p>UAT</p>
        <p>Bugs Tracking</p>
    </div>

    <a class="brand ml-auto" href="#">Register/Login</a>
</div>


<nav class="navbar navbar-expand-md bg-dark navbar-dark" id="nav">


    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav w-100 nav-justified">
            <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Profile</a></li>
            <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Projects</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="viewProjects.php">Manage Projects</a>
                    <a class="dropdown-item" href="projectHistory.php">History</a>
                    <a class="dropdown-item" href="#">User List</a>
                </div>
            </li>
            <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Users</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Time Tracker</a>
                    <a class="dropdown-item" href="#">User App History</a>
                    <a class="dropdown-item" href="listAssignableProjects.php">Assign Projects</a>
                </div>
            </li>
            <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tickets</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="generateTicket.php">Create Ticket</a>
                    <a class="dropdown-item" href="#">File </a>
                    <a class="dropdown-item" href="#">Bug Updates</a>
                    <a class="dropdown-item" href="listProjectBugs.php">Bug Closure</a>
                </div>
            </li>

        </ul>
    </div>


</nav>