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
                    include 'php/connect.php';
                    include 'php/fetch.php';
                    // include 'php/confirm.php'
                    include 'votepreview.php';
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
    <script>
     // Get the modal
      var modal = document.getElementById("myModal");               //first modal popup

      // Get the button that opens the modal
      var btn = document.getElementById("vote-button");                   //submit button from Voting page(Rica)

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("F-returnBTN")[0];

      // When the user clicks the button, open the modal 
      btn.onclick = function() {
      modal.style.display = "block";
      }

      // When the user clicks on <span>, close the modal
      span.onclick = function() {
      modal.style.display = "none";
      }

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
    </script>
</body>

</html>
