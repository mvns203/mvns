<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        <?php 
        require "all.css" 
        ?>
    </style>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="all.css"> -->
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nav = "home";
    if(isset($_GET['$nav'])){
        $nav = $_GET['m'].".php";
    }
    ?>

    <nav class="fg">
        <a href="./?m=home">
            home
        </a>
        <a href="./?m=dashboard">
            dashboard
        </a>
        <a href="./?m=account">
            account
        </a>
    </nav>
    <div class="form">
        <h1>
            mvns
        </h1>
    </div>
    <div class="main">
        <?php
        if(file_exists($nav)){
            require $nav;
        }
        ?>
    </div>
</body>
</html>