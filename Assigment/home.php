<!DOCTYPE html>
<html>

<head>
    <link href="app.css" rel="stylesheet">
</head>

<body>
    <div id="app">

        <nav class=" navbar-expand-xl navbar-light bg-white shadow-sm">
            <div class="" style="background-color:var(--blue); font-size:1.2rem;">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <a class="" href=" url('home.php') ">
                            <div class="heading" style="background-color:var(--blue); font-size:2rem;">SportsHUB
                            </div>
                        </a>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:white;">
                                <img class="img myimg" src="User.png" alt="User" width="40px" height="40px">
                                <h4 style="color: white;"><?php session_start();
                                                            echo $_SESSION['name'];
                                                            echo "  "; ?>
                                </h4>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item">
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <img src="Sportshub.png" alt="Logo" class="myimg3">
                <h4 style="color: var(--blue) ;"><?php echo "Welcome to SportsHUB Mr. ";
                                                    echo $_SESSION['name']; ?></h4>
            </div>
        </div>
    </div>
</body>

</html>