<?php
session_start();
if (isset($_POST['submit'])) {
    [
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'cpassword' => $cpassword,
        'agree' => $agree,
        'submit' => $submited
    ] = $_POST;
    $validateEmail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    if (!isset($agree)) {
        echo "<script>alert('You need to agree terms and conditions') </script>";
    } elseif ($password != $cpassword) {
        echo "<script>alert('Password should be matched !!') </script>";
    } else {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        //echo  "<script>alert('From submittted successfully ') </script>";
        echo    "<script>
                  alert('SignUp Successfully !!');
                  window.location.href='login.php';
                </script>";
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup Here!!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="conatiner border border-primary" style="margin:70px auto; width:600px; padding:20px;">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <h1 class="text-center">SignUp</h1>
            <hr>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1" required aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" required id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="cpassword" required id="exampleInputPassword1">
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="agree" value="true" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Agree With Terms and conditions</label>
            </div>
            <button type="submit" name="submit" value="submit" class="btn btn-primary ">Submit</button>
            <a href="login.php" class="btn btn-primary float-end" tabindex="-1" role="button" aria-disabled="true">Login</a>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>