<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session tutorial</title>
</head>

<body>
    <div class="container">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <input type="email" name="email" placeholder="email"><br>
            <input type="password" name="password" placeholder="password"><br>
            <input type="file" name="image" id="img"> <br>
            <input type="submit" value="sumbit" name="submit">
        </form>
    </div>
    <?php
    if (isset($_FILES["image"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmpnm = $_FILES['image']['tmp_name'];

        move_uploaded_file($file_tmpnm, "uploads/$file_name");
    }
    ?>
</body>

</html>