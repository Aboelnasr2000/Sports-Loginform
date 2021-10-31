<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'assigment');

$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}



session_start();


if (isset($_POST['register'])) {

    $errors = [];
    $data = [];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST['confirmpassword'];

    if (empty($_POST['username'])) {
        $errors['username'] = 'Username is required.';
    }

    if (empty($_POST['email'])) {
        $errors['email'] = 'Email is required.';
    } else {

        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $con->query($sql);
        $row = $result->fetch_assoc();

        if ($row) {
            session_start();
            $_SESSION ['email'] ="Email Already Registered";
            $errors['email'] = 'Email already taken.';
        }
    }

    if ($confirmpassword != $password) {
        $errors['password'] = 'password does not match';
    }

    if (!empty($errors)) {

        $data['success'] = false;
        $data['errors'] = $errors;
        header("location:signup.php");
        echo json_encode($data);
    } else {
        $enrypted = md5($password);
        $sql = "INSERT INTO users ( UserName , email , password ) VALUES ('$username', '$email' , '$encrypted' )";

        if ($con->query($sql) === TRUE) {

            $_SESSION['name'] = $username;
            header("location:home.php");
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
}

if (isset($_POST['login'])) {
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    $sql = " SELECT * FROM users WHERE email='$email' and password ='$password'";



    $result = $con->query($sql);



    $user = $result->fetch_assoc();

    if ($user) {

        session_start();
        $_SESSION['name'] = $user['UserName'];
        header("location:home.php");
    } else {
        session_start();
        $_SESSION['status'] = "Wrong Email Or Password";
        header("location:login.php");
        exit();
    }
}
