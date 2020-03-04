<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
<title>Project 2 - Page 2</title>
</head>
<body>
<main class="pageMain">
        <div class="header">
            <?php require 'inc/header.inc.php'; ?>
        </div>
        <div class="greeting">
            <?php require 'inc/greeting.inc.php';?>
        </div>

    <div class="menu">
        
        <div  <?php  echo isset($_GET['bgcolor']) ? 'class="' . $_GET['bgcolor'] . '"': '';?>>
        <div <?php echo isset($_GET['border']) ? 'class="' . $_GET['border'] . '"': '';?>>
                <div <?php echo isset($_GET['font']) ? 'class="' . $_GET['font'] . '"': '';?>>
                <div class="onMenu">
                        <div class="title">
                            <?php require 'inc/title.inc.php';?>
                        </div>
                        <div class="backgroundMessage">
                            <?php require 'inc/background.inc.php'; ?>
                        </div>
                        <div class="fontMessage">
                            <?php require 'inc/fontMessage.inc.php'; ?>
                        </div>
                        <div class="borderMessage">
                            <?php require 'inc/borderMessage.inc.php'; ?>
                        </div>
                        <div class="picture1">
                            <?php require 'inc/picturesMessage.inc.php'; ?>
                        </div>
                        <div class="pictures">
                            <?php require 'inc/pictures.inc.php'; ?>
                        </div>
                        <div class="requestMessage">
                            <?php require 'inc/requestMessage.inc.php'; ?>
                        </div>
                        <div class="request">
                            <?php require 'inc/requests.inc.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require "inc/footer.inc.php"; ?>


<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>