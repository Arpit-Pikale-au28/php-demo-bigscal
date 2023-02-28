<?php
$islogged = false;
session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $session_email = $_SESSION['email'];
    $session_password = $_SESSION['password'];
    if ($email == $session_email && $password == $session_password) {
        $islogged = true;
        header("Location: dashboard.php");
    } else {
        echo "<script> alert('Invalid uername/password !!'); </script>";
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="conatiner border border-primary" style="margin:70px auto; width:600px; padding:20px;">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <h1 class="text-center">Login</h1>
            <hr>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" required id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required id="exampleInputPassword1">
            </div>
            <button type="submit" name="submit" value="submit" class="btn btn-primary ">Submit</button>
            <a href="register.php" class="btn btn-primary float-end" tabindex="-1" role="button" aria-disabled="true">Register</a>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>