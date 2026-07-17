<?php
session_start();
if(isset($_SESSION['login'])){
    header('Location: ./profile.php');
    exit();
}

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

    <?php
    
    if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];


    $query = "select * from `authentication`.`users`
    where email = '$email ' AND password = '$password' ";

    $result = mysqli_query($connection, $query);

    if(mysqli_num_rows($result) > 0){

        $_SESSION['login'] = true;
        $_SESSION['email'] = $email;

        echo "
            <script>
            alert('Login Successfully')
            window.location.href = './profile.php'
            </script>

        "; 
    }
    else{
        echo "
            <script>
            alert('Invalid email or password')
            window.location.href = './login.php'
            </script>

        "; 
    }


    }
    
    ?>

    <div class="container">
        <div class="content d-flex justify-content-center">
            <div class="form-design card p-3 mt-5 col-md-4">

                <form method="post">
                    <h2><b><u>Login</u></b></h2>
                    <p><i>Quick Login to redirect <b>Profile Page</b></i></p>
                    <br>

                    <input type="email" name="email" placeholder="enter email address" class="form-control m-2 p-2">

                    <input type="password" name="password" placeholder="enter password" class="form-control m-2 p-2">

                    <br>
                    <button class="btn btn-info w-100" name="submit" type="submit">Login</button>

                </form>

                <hr>
                <br>
                <a href="./register.php" class="btn btn-dark">Create New Account</a>

            </div>

        </div>
    </div>


    <!-- ========= -->

</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</html>