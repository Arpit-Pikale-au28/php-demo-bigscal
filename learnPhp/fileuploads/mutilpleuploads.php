  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Multiple file uploads</title>
  </head>

  <body>
      <div class="container">
          <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
              <input type="email" name="email" placeholder="email"><br>
              <input type="password" name="password" placeholder="password"><br>
              <input type="file" name="files[]" id="files" multiple required> <br>
              <input type="submit" value="sumbit" name="submit">
          </form>
      </div>
      <?php
        if (isset($_POST['submit'])) {
            // print_r($_FILES['files']);
            define("MAX_SIZE", 5 * 1024 * 1024);  //set the max size og a file
            define('DIR_NAME', 'uploads/');

            $file_name = $_FILES['files']['name'];
            $file_size = $_FILES['files']['size'];
            $file_tmpnm = $_FILES['files']['tmp_name'];

            print_r($_POST["files"]);

            if ($file_size > MAX_SIZE) {
                echo "The file Is to big to upload";
            } else {
                echo "<script>alert('file uploaded successfully')</script>";
            }
        }
        ?>
  </body>

  </html>