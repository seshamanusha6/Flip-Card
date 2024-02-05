<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Flip Card Memory Game</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet prefetch" href="https://fonts.googleapis.com/css?family=Concert+One|Nova+Slim">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    

    <div class="container">
        <header>
            <h1>Card Matching game</h1>
        </header>
        <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a style="margin-left: 1000px;" class="navbar-brand" href="logout.php">Logout</a>
        </div>
    </nav>
        <section class="score-table">
            <ul class="stars">
                <li>
                    <i id="star1" class="fa fa-star"></i>
                </li>
                <li>
                    <i id="star2" class="fa fa-star"></i>
                </li>
                <li>
                    <i id="star3" class="fa fa-star"></i>
                </li>
            </ul>
            <span class="moves">Moves: 0</span>
            <span class="timer">Elapsed Time: 0:00</span>
            <div class="restart">
                <i class="fa fa-repeat"></i>
            </div>
        </section>

        <main>
            <ul class="deck"></ul>
        </main>

        <div class="modal">
            <div class="modal-content">
                <span class="close-button">x</span>
                <i class="fa fa-check-circle tick"></i>
                <h1 class="modal-heading">Congratulations! You Won!!</h1>
                <h3 class="stats"></h3>
                <button class="new-game">Play Again!</button>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>