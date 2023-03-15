<!-- check if user is logout or not -->
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location:../index.php");
}
//get database connection
require '../include/Db-connection.php';

if(isset($_POST['submit']) && isset($_POST['todo'])){
   
}
?>




<!-- include bootstrap -->
<?php
require '../include/boostarp.php';
?>

<body>
    <?php require '../include/loginNavbar.php' ?>
    <div class="container mt-5">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="mb-3">
                <label for="creteTodo" class="form-label">Create To-Do's</label>
                <input type="text" required name="todo" placeholder="Enter To-do's Here..." class="form-control" id="creteTodo">
            </div>
            <button type="submit" name="submit" class="btn btn-success">Add To-Do's</button>
        </form>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">Sr. No</th>
                    <th scope="col">To-Do's list</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Go to gym</td>
                    <td>02-12--2020</td>
                    <td>20-12-2202</td>
                    <td><button type="button" class="btn btn-info">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Go to gym</td>
                    <td>02-12--2020</td>
                    <td>20-12-2202</td>
                    <td><button type="button" class="btn btn-info">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Go to gym</td>
                    <td>02-12--2020</td>
                    <td>20-12-2202</td>
                    <td><button type="button" class="btn btn-info">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</head>