<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $web_title ?></title>
    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="imgs/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/dash.css">
    <style>
    /* Custom styles for the dashboard */
    .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        z-index: 100;
        padding: 48px 0 0;
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
    }

    .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(100% - 48px);
        padding-top: .5rem;
        overflow-x: hidden;
        overflow-y: auto;
        /* Scrollable contents if viewport is shorter than content. */
    }

    @media (max-width: 768px) {
        .sidebar {
            position: fixed;
            top: 0;
            left: -100%;
            width: 250px;
            height: 100%;
            transition: all 0.3s ease-in;
        }

        .sidebar.show {
            left: 0;
        }

        .sidebar .nav-link {
            text-align: center;

        }

        .main-content {
            margin-left: 0;
        }
    }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="c-nav">


                    <div class="position-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="btn btn-sm btn-primary mb-3 nav-link menu-text" href="./dashboard.php">
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-sm btn-primary mb-3 nav-link menu-text" href="./history.php">
                                    History
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-sm btn-primary mb-3 nav-link menu-text" href="./profile.php">
                                    Profile
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-sm btn-danger mb-3 nav-link menu-text"
                                    href="./includes/logout.inc.php">
                                    Log Out
                                </a>
                            </li>
                            <!-- Add more menu items as needed -->
                        </ul>
                    </div>
                    <div class="position-sticky" style="text-align: center;">
                        <img src="./imgs/logo_.png" class="img-fluid" alt="...">
                    </div>
                    <div class="position-sticky" style="text-align: center;">
                        <p class="" style="font-size: small;">Developed by upekshaip</p>
                    </div>
                </div>
            </nav>

            <!-- Main content area -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2"><?php echo $title ?></h1>
                    <!-- Button to toggle menu -->
                    <button class="btn btn-primary d-md-none" id="sidebarToggle">Menu</button>
                </div>
                <!-- Your content goes here -->
                <div class="row">
                    <div class="col">