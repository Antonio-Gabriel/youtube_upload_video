<?php
require_once "./vendor/autoload.php";

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Video in YouTube</title>

    <style>
        .video {
            margin-top: 20px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }
    </style>
</head>

<body>

    <h1>Upload Video in YouTube</h1>
    <p>Deployment</p>

    <form action="#" enctype="multipart/form-data">
        <label for="file">Select Video</label><br>
        <input type="file" id="file">
    </form>

    <br><br>
    <section class="videos">
        <div>a</div>
        <div>a</div>
        <div>a</div>
        <div>a</div>
        <div>a</div>
        <div>a</div>
    </section>

</body>

</html>