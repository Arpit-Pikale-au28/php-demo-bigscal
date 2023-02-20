<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox example</title>
</head>

<body>
    <div class="container">
        <form action= <?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> method="post">
            <label for="name">Enter Your Name : </label>
            <input type="text" name="name" placeholder="Enter Your Name"> <br>

            <label for="password">Password : </label>
            <input type="password" name="password"><br>

            <input type="checkbox" name="agree" id="agree" value="agree">
            <label for="agree">I Agree with terms and conditions</label>

            <input type="submit" value="submit">
        </form>
    </div>
</body>


<?php
     
    if(!isset($_POST["agree"])){
          echo "You Need Agree terms and condition";
    }else{
        print_r($_POST);
    }
?>
</html>