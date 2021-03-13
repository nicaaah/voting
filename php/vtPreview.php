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
    <div id="confirmation" class="F-modal">
    <!-- Modal content -->
    <div class="F-modal-content">
        <div class="F-modal-header">
            <h2>VOTE PREVIEW</h2>
        </div>
        <div class="F-modal-body">
            <div class="F-show-votes">
                <p>Voter: <a href="#" id="VoterName">Voter's Name</a></p>

                <div class="row">
                    <div class="F-column left">
                        <p><a href="#" id="F-Position">Position: </a></p>
                        <p><a href="#" id="F-Position">Position: </a></p> 
                        <p><a href="#" id="F-Position">Position: </a></p>  
                        <p><a href="#" id="F-Position">Position: </a></p>
                        <p><a href="#" id="F-Position">Position: </a></p>
                        <p><a href="#" id="F-Position">Position: </a></p>
                        <p><a href="#" id="F-Position">Position: </a></p>
                    </div>
                    <div class="F-column right">
                        <p><a href="#" id="F-CandidateName">Candidate Name</a></p>  
                        <p><a href="#" id="F-CandidateName">Candidate Name</a></p>
                        <p><a href="#" id="F-CandidateName">Candidate Name</a></p>
                        <p><a href="#" id="F-CandidateName">Candidate Name</a></p>
                        <p><a href="#" id="F-CandidateName">Candidate Name</a></p>
                        <p><a href="#" id="F-CandidateName">Candidate Name</a></p>
                        <p><a href="#" id="F-CandidateName">Candidate Name</a></p>
                        <br>
                    </div>
                </div>
            </div>
            <br>
            <p>Your votes will be submitted. Are you sure?</p>
        </div>
        <div class="F-modal-footer">
            <button type="button" class="F-returnBTN"><span>Return to Voting</span></button>
            <button type="button" class="F-confirmBTN"><span>Confirm Submission</span></button>
        </div>
      </div>
    </div>

    <script>
      //////////////// confirmation/////////////////////
     // Get the modal
      var confirmModal = document.getElementById("confirmation");               //first modal popup

      // Get the button that opens the modal
      var confirmBtn = document.getElementById("vote-button");                   //submit button from Voting page(Rica)

      // Get the <span> element that closes the modal
      var cancelBtn = document.getElementsByClassName("F-returnBTN")[0];

      // When the user clicks the button, open the modal 
      confirmBtn.onclick = function() {
      confirmModal.style.display = "block";
      }

      // When the user clicks on <span>, close the modal
      cancelBtn.onclick = function() {
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
