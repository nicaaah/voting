<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <link rel="icon" href="img/BUHS LOGO.png" type="image/png">
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>BUCEILS HS Vote</title>
</head>

<body>
    <?php
        include 'html/navbar.html';
    ?>

    <header id="F-header" style="text-align:center"><b>STUDENT LEADER ELECTION</b></header><br>

    <main>
        <!--Candidates-->
        <div id="voting-page">
               <?php
                    require 'php/connect.php';
                    require 'php/fetch.php';
                    // include 'php/confirm.php'
                    require 'php/votepreview.php';
                ?>
                <a href="#">
                    <div id="vote-button"><button class="btn" >SUBMIT</button></div>
                </a>

        </div>
     </main>

    <footer>
        <div class="footer">
        <p>BS COMPUTER SCIENCE 3A © 2021</p>
        </div>
    </footer>
    <?php
        require 'js/vtModal.js';
    ?>
</body>

</html>
