<?php
    define('ACCESS_ALLOWED',TRUE);
    require_once '../../config/define.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>403 Access Denied</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <style>
        @import url("https://fonts.googleapis.com/css?family=Maven+Pro");
        @import url("https://fonts.googleapis.com/css?family=Luckiest+Guy");
        body {
        background-color: #f4f4f4;
        }

        .error {
        text-align: center;
        margin-top: 4%;
        }

        h1 {
        font-size: 3rem;
        font-weight: 900;
        font-family: "Luckiest Guy", cursive;
        letter-spacing: 0.9rem;
        background: -webkit-linear-gradient(#666, black);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        }

        p {
        font-size: 1.5rem;
        font-family: "Maven Pro", sans-serif;
        letter-spacing: 0.3rem;
        }

        i {
        font-size: 8rem;
        color: red;
        }

        a {
        color: #666;
        animation: pulse 2s infinite;
        text-decoration: none;
        border-bottom: 1px solid #55c57a;
        transition: all 0.8s;
        }

        a:hover {
        opacity: 0.8;
        color: white;
        background-color: #55c57a;
        }

        .green {
        color: green;
        }

    </style>
</head>
<body>

    <div class="error">
        <h1>403</h1>
        <p>Acess denied to requested page</p>
        <i class="far fa-frown"></i><br>
        <p>Go<a href="../../index.php">Home &rarr;</a></p>
    </div>
    <script>
        let face = document.querySelector("i");
        let home = document.querySelector("a");

        home.addEventListener("mouseover", function() {
        face.classList.add("fa-smile", "green");
        // face.style.animationPlayState = "paused";
        });
        home.addEventListener("mouseout", function() {
        face.classList.remove("fa-smile", "green");
        // face.style.animationPlayState = "start";
        });

    </script>
</body>
</html>