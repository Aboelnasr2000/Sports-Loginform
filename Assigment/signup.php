<html>

<head>
    <title> Assigment 1 </title>
    <link href="app.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!-- <script src="form.js"></script> -->
</head>
<script>
function validateform() {
    var email = document.signup.email.value;
    var username = document.signup.username.value;
    var confirmpassword = document.signup.confirmpassword.value;
    var password = document.signup.password.value;

    if (username == null || username == "") {
        alert("Name can't be blank");
        return false;
    } else if (email == null || email == "") {
        alert("Email Can't Be Blank");
        return false;
    } else if (password.length < 4) {
        alert("Password must be at least 4 characters long.");
        return false;
    } else if (password == confirmpassword) {
        return true;
    } else {
        alert("Passwords Don't Match")
        return false;

    }
}
</script>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login</div>

                    <div class="card-body">
                        <form name="signup" method="POST" action="controller.php" onsubmit="return validateform();">

                            <div class="form-group row" id="username-group" name="username-group">
                                <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
                                <div class="col-md-6">
                                    <input id="username" type="name" name="username" class="form-control" required
                                        autofocus>
                                </div>
                            </div>

                            <div class="form-group row" id="email-group" name="email-group">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" name="email" class="form-control" required autofocus>
                                    <h6 name="error" style="color: red;"><?php session_start(); echo $_SESSION['email']; ?></h6>
                                </div>
                            </div>

 
                            <div class="form-group row " id="password-group" name="password-group">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" name="password" class="form-control" required
                                        autofocus>
                                </div>
                            </div>

                            <div class="form-group row" id="confirmpassword-group" name="confirmpassword-group">
                                <label for="confirmpassword" class="col-md-4 col-form-label text-md-right">Confirm
                                    Password</label>
                                <div class="col-md-6">
                                    <input id="confirmpassword" type="password" name="confirmpassword"
                                        class="form-control" require autofocus>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" id="register" class="btn btn-primary" name="register">
                                        Register
                                    </button>
                                    <a class="btn btn-link" href="login.html">
                                        Login
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