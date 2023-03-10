<?php  
        if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {

            require './models/dbconnection.php';
            //$hashdpassword =  password_hash($_POST['password'] ,PASSWORD_DEFAULT);
            $sql = 'select userId, password from adminlogin';
            $statement = $PDO->query($sql);

            $credentials = $statement->fetchAll(PDO::FETCH_ASSOC);

            $dbuserId = $credentials[0]['userId'];
            $dbPassword = $credentials[0]['password'];                         // default username - admin,  password - admin123
            $validpassword = password_verify($_POST['password'], $dbPassword);

            // save the session data and validate user
            session_start();
            if ($dbuserId == 'admin' && $validpassword == true) {
              
                $_SESSION['userId'] = $_POST['userId'];
                header("Location:dashboard.php");
            } else {
               echo '<script>alert("Invalid Username/Passsword")</script>';
            }
        }
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Welcome to Star Hotel</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="p-0 m-0 border-0 bd-example">

    <?php
    require './partials/navbar.php';
    ?>

    <div class="container">
        <h3>Welcome Admin</h3>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">User Id</label>
                <input type="text" class="form-control" name="userId" required id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


</body>

</html>