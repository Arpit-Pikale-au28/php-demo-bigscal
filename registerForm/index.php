<?php
include './Db_conn.php';
$conn = new Connection();

// create database;
$conn->createDatabase("test");

//create tables
$table_name = "user";
$columns = [
    "id" => "INT auto_increment PRIMARY KEY",
    "fname" => "varchar(10) NOT NULL",
    "lname" => "varchar(10) NOT NULL",
    "email" => "varchar(30) NOT NULL ",
    "gender" => "varchar(10) NOT NULL",
    "state" => "varchar(50)",
    "password" => "varchar(100) NOT NULL",
    "image" => "varchar(100)",
    "agree_terms" => "varchar(5)"
];

$conn->createTable($table_name, $columns);


if (isset($_POST['submit'])) {

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $state = $_POST["state"];
    $password = $_POST["password"];
    $image = $_FILES["inputfile"];
    $agree_terms = $_POST["agree_terms"];



    // file uploads
    include './fileUploader.php';
    $uploadedFile = "";
    if (file_exists($image['tmp_name'])) {
        $allowedExtension = array("png", "jpg", "jpeg", "gif");
        $uploader = new FileUploader('./uploads/', $allowedExtension);
        $uploadedFile = $uploader->upload($image);
        $data['image'] = $uploadedFile;
    }
    // insert a record into database
    $data = [
        "fname" => $fname,
        "lname" => $lname,
        "email" => $email,
        "gender" => $gender,
        "state" => $state,
        "password" => $password,
        "image" => $uploadedFile,
        "agree_terms" => $agree_terms,
    ];
    $insertedData = $conn->insert_values($table_name, $data);
    if ($insertedData) {
        echo "<script>alert('User Registered')</script>";
    }
}


?>






<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />

    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <title>Register</title>
</head>

<body class="d-flex vw-100 vh-100 align-items-center justify-content-center">
    <div class="container w-50 p-3 my-4 rounded">
        <h1 class="text-center">Register From</h1>
        <div class="text-success">
            <hr>
        </div>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" onsubmit="return validateRegister()" enctype="multipart/form-data">
            <div class="row">
                <label for="name" class="form-label">Name</label>
                <div class="col">
                    <input type="text" id="fname" class="form-control" name="fname" placeholder="First name" aria-label="First name">
                </div>
                <div class="col">
                    <input type="text" id="lname" class="form-control" name="lname" placeholder="Last name" aria-label="Last name">
                </div>
                <p id="nameError"></p>
            </div>

            <div class="mb-3">

                <label for="inputEmail" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="inputEmail" aria-describedby="emailHelp">
                <p id="emailError"></p>
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label> <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="female">
                    <label class="form-check-label" for="inlineRadio1">Female</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" id="choosefile" name="state" class="form-select">
                    <option selected>Choose...</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                </select>
                <p id="selectError"></p>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" aria-describedby="emailHelp">
                <p id="passwordError"></p>
            </div>

            <div class="mb-3">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="password" id="cpassword" aria-describedby="emailHelp">
                <p id="cpasswordError"></p>
            </div>

            <div class="input-group mb-3">
                <input type="file" name=inputfile onchange="return fileValidation()" class="form-control" id="inputfile">
                <label class="input-group-text" for="inputfile">Upload</label>
            </div>
            <p id="fileError"></p>

            <div class="form-check d-flex justify-content-start mb-5">
                <input class="form-check-input me-2" type="checkbox" value="YES" id="form2Example3c" />
                <label class="form-check-label" for="form2Example3">
                    I agree all statements in <a href="#!">Terms of service</a>
                </label>
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block btn-lg">Register</button>
            </div>
            <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#" class="fw-bold text-body"><u>Login here</u></a></p>

        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
    <script src="./fileValidation.js"></script>

</body>

</html>