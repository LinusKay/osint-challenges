<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soniqcam Web Port</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="outer-wrap">
        <section id="top">
            <h1>Soniqcam Sprint EL52E</h1>
            <h5>ONLINE WEB/IPCAM VIEWER</h5>
        </section>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="admin.php">Administrator</a></li>
                <?php session_start(); if(isset($_SESSION['loggedin'])){ echo '<li><a href="logout.php">Logout</a></li>'; } ?>
            </ul>
        </nav>