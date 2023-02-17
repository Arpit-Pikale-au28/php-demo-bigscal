<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <?php
    if (isset($_POST['email']) && isset($_POST['password'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];
        // start the session
        session_start();
        $_SESSION['username'] = $email;
        $_SESSION['password'] = $password;
        echo "we have saved the session";
    } else {
        echo "please enter valid details";
    }
    ?>

    <?php

    if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
        $username = $_SESSION['username'];

        echo "<h1> Welcome " . $username . "</h1> <br> ";
        echo "<h2>You are Successfully Logged In</h2> <br>";
    }

    ?>

    <button class='btn btn-success'> <a href='logout.php' style="text-decoration: none; color:white;"> Logout </a> </button>


</body>

</html>