<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Checkbox</title>
</head>

<body>
    <div class="container">
        <h1>Select Your Favorite color </h1> <br>
        <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> method="post">

            <input type="checkbox" name="colors[]" value="green" id="green">
            <label for="green">green</label> <br>

            <input type="checkbox" name="colors[]" value="red" id="red">
            <label for="red">red</label> <br>

            <input type="checkbox" name="colors[]" value="yellow" id="yellow">
            <label for="yellow">yellow</label><br>

            <input type="checkbox" name="colors[]" value="purple" id="purple">
            <label for="purple">purple</label><br>

            <input type="radio" name="gender" id="gender" value="male">
            <label for="gender">Male</label> <br>

            <input type="radio" name="gender" id="gender" value="male">
            <label for="gender">Female</label> <br>

            <input type="submit" name="submit" value="formsubmit">
        </form>
    </div>
    <?php
    if (isset($_POST["submit"])) {

        print_r($_POST);
    }
    ?>
</body>

</html>