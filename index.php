<?php
include './config.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
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

    <div class="content p-3">
        <h1 class="mt-4"><i><u>WELCOME TO MY PHP WEBSITE</u></i></h1>
        <p>This is Home Page</p>
        <br>
        <p><i>In this page you will learn:</i></p>
        <ul>
            <li>PHP Sessions</li>
            <li>Login Authentication</li>
            <li>Protect Pages</li>
            <li>Logout System</li>
        </ul>

        <hr>
        <br>
        <p><i>Click on <b>PROFILE</b> to access profile page. <br> If you're not logged in, you will be redirected to the <b>Login Page</b></i></p>
    </div>
    <!-- ========= -->

</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</html>