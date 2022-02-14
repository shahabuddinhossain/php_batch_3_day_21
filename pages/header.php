

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Day 19: </title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<?php if(isset($_SESSION['id'])) { ?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="action.php?pages=home" class="navbar-brand">SATYA</a>
        <div class="navbar-nav">
            <li><a href="action.php?pages=home" class="nav-link">Home</a></li>
            <li><a href="action.php?pages=series" class="nav-link">Series</a></li>
            <li><a href="action.php?pages=all-data" class="nav-link">All Data</a></li>
            <li><a href="action.php?pages=register" class="nav-link">Registration</a></li>
            <li><a href="action.php?pages=login" class="nav-link">login</a></li>
            <li class="dropdown" >
                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown"> <?php echo isset($_SESSION['name'])?$_SESSION['name']:"user"; ?></a>
                <ul>
                    <li class="dropdown-menu"><a href="action.php?pages=logout" class="dropdown-item">Logout</a></li>
                </ul>


            </li>

        </div>
    </div>
</nav>

<?php } ?>