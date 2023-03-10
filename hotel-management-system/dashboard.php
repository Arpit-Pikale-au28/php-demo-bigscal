<?php
   session_start();
if (!isset($_SESSION['userId'])) {
    header("Location:index.php");
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
   require './partials/loginnavbar.php'

    ?>
    <div class="main-container">
        <?php require './partials/sidebar.php'?>
        <div class="dashboard-records">

            <div class="records">
                <h3>Total Rooms</h3>
                <h4>100</h4>
            </div>
            <div class="records">
                <h3>Rooms Occupied</h3>
                <h4>25</h4>
            </div>
            <div class="records">
                <h3>Rooms Available</h3>
                <h4>70</h4>
            </div>
            <div class="records">
                <h3>Rooms under maintainence/Dirty/Vacant</h3>
                <h4>5</h4>
            </div>
        </div>
        
        
    </div>



</body>

</html>