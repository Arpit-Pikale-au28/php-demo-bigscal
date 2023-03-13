<?php
session_start();
if (!isset($_SESSION['userId'])) {
    header("Location:index.php");
}
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $arrDt  = $_POST['arrival-date&time'];
    $deptDt = $_POST['departure-date&time'];
    $noOfAdults = $_POST['no-of-adults'];
    $noOfChildren = $_POST['no-of-children'];
    $aadharNo = $_POST['aadharcard'];
    $comments = $_POST['comments'];

    [$arrDt, $arrTime] = explode('T', $arrDt);
    [$deptDt, $deptTime] = explode('T', $deptDt);

    try {
        require './models/dbconnection.php';

        $sql = 'insert into hotelReservation(fname, lname, email, mobile, gender, arrival_Date, arrival_Time,  departute_Date, departure_Time, noOfAdults, noOfChildren, aadharNo, comments) values 
            (:fname, :lname, :email, :mobile, :gender, :arrDt, :arrTime, :deptDt, :deptTime, :noOfAdults, :noOfChildren, :aadharNo, :comments )';

        $statement = $PDO->prepare($sql);

        $statement->execute([
            ':fname'  => $fname,
            ':lname'  => $lname,
            ':email'  => $email,
            ':mobile'  => $mobile,
            ':gender'  => $gender,
            ':arrDt'  =>  $arrDt,
            ':arrTime' => $arrTime,
            ':deptDt'  => $deptDt,
            ':deptTime' =>  $deptTime,
            ':noOfAdults'  => $noOfAdults,
            ':noOfChildren'  => $noOfChildren,
            ':aadharNo'  => $aadharNo,
            ':comments'  => $comments
        ]);
        echo "<script> alert('User Registerd !!')</script>";
    } catch (PDOException $e) {
        echo "<script> alert(" . $e->getMessage() . ")</script>";
    }
}

?>

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
    require './partials/loginnavbar.php'

    ?>
    <div class="main-container">
        <?php require './partials/sidebar.php' ?>

        <div class="container w-50 p-3 my-4 border border-primary-subtle">
            <h1 class="text-center text-primary">Hotel Reservation</h1>
            <hr>
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
                    <label for="exampleInputEmail1" class="form-label py-2">Email (Optional)</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="mobileNo" class="form-label py-2">Mobile</label>
                    <input type="text" class="form-control" name="mobile" required id="mobileNo">
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Gender</label>
                    <select class="form-select" required name="gender" id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="arrival-date&time" class="form-label py-2">Arrival Date</label>
                    <input type="datetime-local" id="arrival-date&time" class="form-control" required name="arrival-date&time" aria-label="arrival date">
                </div>

                <div class="mb-3">
                    <label for="departure-date&time" class="form-label py-2">Departure Date</label>
                    <input type="datetime-local" id="departure-date&time" class="form-control" required name="departure-date&time" aria-label="departure date">
                </div>


                <div class="mb-3">
                    <label for="noOfAdults" class="form-label py-2">Number of Adults</label>
                    <input type="number" class="form-control" value="0" required name="no-of-adults" required id="noOfAdults">
                </div>

                <div class="mb-3">
                    <label for="noOfChildren" class="form-label py-2">Number of Childern</label>
                    <input type="number" class="form-control" value="0" required name="no-of-children" required id="noOfChildren">
                </div>

                <div class="mb-3">
                    <label for="aadharcard" class="form-label py-2">Aadhar No.</label>
                    <input type="text" class="form-control" required name="aadharcard" required id="aadharcard">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label py-2">Comments </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" required name="comments" rows="3"></textarea>
                </div>



                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>


    </div>



</body>

</html>