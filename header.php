<?php require_once "config/conn.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Html And Css Crash Course</title>
    <!-- <link href='https://unpkg.com/boxicons@2.0.8/css/boxicons.min.css' rel='stylesheet'> -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- HEADER -->
    <header class="l-header">
        <nav class="nav bg-grid">
            <div>
                <a href="index.php" class="nav_logo">Jessie</a>
            </div>

            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list">
                    <li class="nav_item"><a href="index.php" class="nav_link active">Home</a></li>
                    <li class="nav_item"><a href="about.php" class="nav_link">About</a></li>
                    <li class="nav_item"><a href="skills.php" class="nav_link">Skillls</a></li>
                    <li class="nav_item"><a href="work.php" class="nav_link">Work</a></li>
                    <li class="nav_item"><a href="contact.php" class="nav_link">Contact</a></li>
                </ul>
            </div>

            <div class="nav_toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>
    <main class="l-main">