<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width$fname
     initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Welcome to Star Hotel</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="p-0 m-0 border-0 bd-example">
    <?php
    require '../include/navbar.php'

    ?>
    <div class="main-container">

        <div class="container w-50 p-3 my-4 border border-primary-subtle">
            <h1 class="text-center">Sign Up</h1>
            <div class="text-success">
                <hr>
            </div>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <div class="row">
                    <label for="name" class="form-label py-2">Name</label>
                    <div class="col">
                        <input type="text" class="form-control" name="fname" required placeholder="First name" aria-label="First name">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="lname" required placeholder="Last name" aria-label="Last name">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label py-2">Email</label>
                    <input type="email" class="form-control" required name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label py-2">Password</label>
                    <input type="password" class="form-control" required name="password" id="password" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="cpassword" class="form-label py-2">Confirm Password</label>
                    <input type="password" class="form-control" required name="password" id="cpassword" aria-describedby="emailHelp">
                </div>



                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>


    </div>



</body>

</html>