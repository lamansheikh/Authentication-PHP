<?php
include './config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication - Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 5px solid navy;">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php"><b><u>Authentication System</u></b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./profile.php">Profile</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <!-- ========= -->

    <div class="container">
        <div class="content d-flex justify-content-center">
            <div class="form-design card p-3 mt-5 col-md-4">

            <?php
            
            if(isset($_POST['submit'])){

                $fullname = $_POST['fullname'];
                $email = $_POST['email'];
                $password = $_POST['password'];

            $query = "
                    insert into `authentication`.`users`
                (fullname, email, password)
                values ('$fullname', '$email', '$password')
            ";

            if(mysqli_query($connection, $query)){
                echo "
                <script>
                alert('Register Successfully');
                window.location.href = './login.php'
                </script>
                
                ";
            }else{
                die(mysqli_error($connection));
            }

           }

            ?>



                <form method="post">
                    <h2><b><u>Create Account</u></b></h2>
                    <p><i>Quick register to redirect <b>Login Page</b></i></p>
                    <br>

                    <input type="text" name="fullname" placeholder="Enter Full Name" class="form-control m-2 p-2">
                    <input type="email" name="email" placeholder="Enter Email Address" class="form-control m-2 p-2">
                    <input type="password" name="password" placeholder="Enter Password" class="form-control m-2 p-2">
                    <br>
                    <button class="btn btn-info w-100" name="submit" type="submit">Register</button>

                </form>

                <hr>
                <p>Already have an Account?</p>
                <br>
                <a href="./login.php" class="btn btn-dark">Login</a>

            </div>

        </div>
    </div>


    <!-- ========= -->

</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</html>