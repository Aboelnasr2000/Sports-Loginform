<html>

<head>
    <title> Assigment 1 </title>
    <link href="app.css" rel="stylesheet">

</head>

<body>
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
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login</div>

                    <div class="card-body">
                        <form method="POST" action="controller.php">


                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" name="email" required autocomplete="email" autofocus>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" name="password" required autocomplete="current-password">
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <h6 style="color: red;"> <?php session_start();
                                                                echo $_SESSION['status']; ?> </h6>
                                    <button type="submit" class="btn btn-primary" name="login">
                                        Login
                                    </button>
                                    <a class="btn btn-link" href="signup.html">
                                        Register
                                    </a>
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>