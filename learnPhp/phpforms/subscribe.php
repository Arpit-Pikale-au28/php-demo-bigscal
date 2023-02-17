<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks for Subscribe</title>
</head>

<body>
    <?php

    //---------------------------------------------
    // WARNING: this doesn't include sanitization
    // and validation
    //---------------------------------------------
    if (isset($_POST['name'], $_POST['email'])) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);

        // show the $name and $email
        echo "Thanks $name for your subscription.<br>";
        echo "Please confirm it in your inbox of the email $email.";
    } else {
        echo 'You need to provide your name and email address.';
    }
    ?>
</body>

</html>