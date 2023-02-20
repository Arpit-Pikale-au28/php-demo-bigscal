<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
</head>

<body>
    <div class="container">
        <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="post">
            <label for="bgcolor">Background Color :</label>
            <select name="color" id="bgcolor">
                <option value="">Select a color</option>
                <option value="green">green</option>
                <option value="red">red</option>
                <option value="yellow">yellow</option>
                <option value="pink">pink</option>
            </select>
            <button type="submit" name="submitbtn" value="form-submitted">Submit</button>
        </form>
    </div>
    <?php
    if (isset($_POST["submitbtn"])) {
        echo "<h1 >you selected " . $_POST["color"].  "</h1>";
    } else {
        echo "You didn't selected any color";
    }
    ?>
</body>

</html>