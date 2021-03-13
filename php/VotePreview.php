<!DOCTYPE html>
<html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/styles.css">
      <script src="js/bootstrap.js"></script>
      <script src="js/bootstrap.min.js"></script>
    </head>

  
  <body>

    <!-- Trigger/Open The Modal -->
    <!-- <button id="vote-button">Submit</button> -->

    <!-- The Modal -->
    <?php
      include 'php/confirm.php'
    ?>

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
