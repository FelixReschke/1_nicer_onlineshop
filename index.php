<?php
error_reporting(-1);
ini_set('display_errors','On');
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <title>Candyland3</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/css/styles.css">
</head>

<body>
    <header class="jumbotron">
        <div class="container">
            <h1>Willkommen im Candylan</h1>
        </div>
    </header>
    <section class="container" id="products">
        <div class="row">
            <div class="col">
                <?php include 'card.php'?>
            </div>
            <div class="col">
                <?php include 'card.php'?>
            </div>
            <div class="col">
                <?php include 'card.php'?>
            </div>
            <div class="col">
                <?php include 'card.php'?>
            </div>
        </div>
    </section>
    <script src="Assets/js/bootstrap.bundle.js"></script>
</body>

</html>