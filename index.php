<?php
    include 'autoload.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Хай Скилл</title>
    <link rel="icon" type="image/png" href="https://lebergroup.ru/logo/leber-favicon.png"/>

    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="/assets/js/bootstrap.js"></script>
    <script src="/assets/js/script.js"></script>
</head>
<body>
    <div class="wrapper m-5">
        <div class="notify"></div>
        <div class="container">

            <?php
                route($_GET);
            ?>
        </div>
    </div>
</body>
</html>
