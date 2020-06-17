<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title><?php
        echo rtrim($content_view, ".php"); ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="application/views/css/style.css">
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
          crossorigin="anonymous">
</head>

<body class="bg">
<?php
include "application/views/navbar.php" ?>
<?php
include 'application/views/' . $content_view . '.php'; ?>
<?php
include "application/views/footer.php" ?>
</body>
</html>
