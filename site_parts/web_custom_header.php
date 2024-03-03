<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>User Register</title>
    <link rel="stylesheet" href="./css/forms.css" />
    <link rel="stylesheet" href="./css/colors.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />


    <style>
    .navbar-brand {
        padding: 0;
        /* Remove default padding */
    }

    .navbar-brand img {
        max-height: 100%;
        /* Ensure the logo doesn't exceed navbar height */
    }

    .navbar-nav .nav-link {
        position: relative;
    }

    .navbar-nav .nav-link::before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background-color: var(--secondary);
        /* Adjust to your desired underline color */
        transition: width 0.3s ease;
    }

    .navbar-nav .nav-link:hover::before {
        width: 100%;
    }

    .nav-ul-c {}

    .nav-li-c {
        margin: 0 8px;
    }
    </style>

</head>


<body>
    <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: var(--dark) !important;">
        <div class="container-fluid" style="display:flex; align-items: center; justify-content: space-between;">
            <a class="navbar-brand text-white" href="#">MedSync</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link text-white">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="our_process.php" class="nav-link text-white">Our Process</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">Help & Support</a>
                    </li>
                    <li class="nav-item">
                        <a href="user_register.php" class="nav-link text-white">Registrations</a>
                    </li>
                    <li class="nav-item">
                        <a href="user_login.php" class="nav-link text-white">Log In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: var(--dark) !important;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./images/logo_.png" alt="Logo" style="width: 70px; height: 70px;" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav nav-ul-c">
                    <li class="nav-item nav-li-c">
                        <a href="index.php" class="nav-link text-white">Home</a>
                    </li>
                    <li class="nav-item nav-li-c">
                        <a href="#" class="nav-link text-white">About Us</a>
                    </li>
                    <li class="nav-item nav-li-c">
                        <a href="our_process.php" class="nav-link text-white">Our Process</a>
                    </li>
                    <li class="nav-item nav-li-c">
                        <a href="#" class="nav-link text-white">Help & Support</a>
                    </li>
                    <li class="nav-item nav-li-c">
                        <a href="user_register.php" class="nav-link text-white">Registrations</a>
                    </li>
                    <li class="nav-item nav-li-c">
                        <a href="user_login.php" class="nav-link text-white">Log In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>