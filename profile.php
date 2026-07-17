<?php
session_start();
if(!isset($_SESSION['login'])){
    echo "
        <script>
            alert('Authentication Error: Unknown User')
            window.location.href = './login.php'
        </script>
    ";
}

include './config.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication - Profile</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root{
            --azure:#007FFF;
            --mustard:#D4A017;
            --light:#f8fafc;
            --dark:#1f2937;
        }

        body{
            background:linear-gradient(135deg,#eef5ff,#fffdf5);
            font-family:'Segoe UI',sans-serif;
        }

        /* Navbar */
        .navbar{
            background:var(--azure);
            box-shadow:0 5px 15px rgba(0,0,0,.15);
        }

        .navbar-brand{
            color:#fff;
            font-weight:700;
            letter-spacing:1px;
        }

        .btn-logout{
            background:var(--mustard);
            color:#fff;
            font-weight:600;
            border:none;
        }

        .btn-logout:hover{
            background:#b8860b;
            color:#fff;
        }

        /* Cards */
        .profile-card,
        .content-card{
            background:#fff;
            border:none;
            border-radius:20px;
            box-shadow:0 10px 30px rgba(0,0,0,.08);
            animation:fadeUp .8s ease;
        }

        /* Sidebar */
        .profile-card{
            text-align:center;
            padding:40px 20px;
        }

        .profile-icon{
            width:120px;
            height:120px;
            background:linear-gradient(135deg,var(--azure),var(--mustard));
            color:#fff;
            border-radius:50%;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:55px;
            margin:auto;
            box-shadow:0 8px 25px rgba(0,0,0,.2);
            animation:float 3s infinite;
        }

        .username{
            margin-top:20px;
            font-size:24px;
            font-weight:bold;
            text-transform:uppercase;
            color:var(--azure);
        }

        .email{
            color:#666;
        }

        /* Right Side */
        .content-card{
            padding:35px;
        }

        h2{
            color:var(--azure);
            font-weight:700;
        }

        .tagline{
            color:#666;
            margin-bottom:30px;
        }

        .form-control{
            border-radius:12px;
            padding:12px;
            border:1px solid #ddd;
        }

        .form-control:focus{
            border-color:var(--azure);
            box-shadow:0 0 0 .2rem rgba(0,127,255,.15);
        }

        .btn-save{
            background:linear-gradient(90deg,var(--azure),var(--mustard));
            border:none;
            color:#fff;
            font-weight:600;
            padding:12px;
            border-radius:12px;
            transition:.3s;
        }

        .btn-save:hover{
            transform:translateY(-3px);
            box-shadow:0 10px 20px rgba(0,0,0,.2);
        }

        @keyframes fadeUp{
            from{
                opacity:0;
                transform:translateY(40px);
            }
            to{
                opacity:1;
                transform:translateY(0);
            }
        }

        @keyframes float{
            0%,100%{
                transform:translateY(0);
            }
            50%{
                transform:translateY(-8px);
            }
        }
    </style>
</head>
<body>

<!-- Header -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">
            <i class="bi bi-shield-lock-fill"></i>
            Authentication
        </a>

        <a href="./logout.php" class="btn btn-logout">
            <i class="bi bi-box-arrow-right"></i>
            Logout
        </a>
    </div>
</nav>

<div class="container py-5">

    <div class="row g-4">

        <!-- Sidebar -->
        <div class="col-lg-4">

            <div class="profile-card">

                <div class="profile-icon">
                    <i class="bi bi-person-fill"></i>
                </div>

                <div class="username">
                    JOHN DOE
                </div>

                <p class="email">
                    john@example.com
                </p>

            </div>

        </div>

        <!-- Content -->
        <div class="col-lg-8">

            <div class="content-card">

                <h2>Your Profile</h2>

                <p class="tagline">
                    Manage your personal information securely, update your credentials anytime, and keep your account protected with accurate profile details every day.
                </p>

                <form>

                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input
                            type="text"
                            class="form-control"
                            placeholder="John Doe">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input
                            type="email"
                            class="form-control"
                            placeholder="john@example.com">
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <input
                            type="password"
                            class="form-control"
                            placeholder="********">
                    </div>

                    <button class="btn btn-save w-100">
                        Save Changes
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>