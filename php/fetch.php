<?php
    // fetch template
    $positions = $conn->query("SELECT * FROM ((candidate INNER JOIN student ON candidate.student_id = student.student_id) INNER JOIN candidate_position ON candidate.position_id = candidate_position.position_id) ORDER BY candidate_position.heirarchy_id"); // get positions
    $heir_id = 0;
    echo'    <div>';
    while($poss = $positions->fetch_assoc()){   // loop through all positions
        // insert position div here
        $cand = $poss["heirarchy_id"];
        if($heir_id != $cand){
            $heir_id++;
            echo'    </div>';
            echo' <div id="F-container">';
            echo '<a href="#" id="F-position" style="float: left;">'.$poss["position_name"].'</a><hr>';
            // insert candidate divs here
                 echo '<div class="candidate-box" >';
                echo '<div><label class="checkbox"><input type="radio" name="'.$poss["position_name"].'"  id="vote"><span class="checkmark"></span><br><br><b> Abstain </b></label></div></div>'; // display abstain choice
                    
                    $can_nm1 = $poss["fname"];
                    $can_nm2 = $poss["lname"];
                    
                    echo '<div class="candidate-box" >';
                    echo '<div>
                                   <label class="checkbox">
                                       <input type="radio" name="'.$poss["position_name"].'" id="vote">
                                       <span class="checkmark"></span>
                                               <a href="#"><img src="#" class="candidate-photo" style="float: left; width: 100px; height: 100px;" alt="Candidate" ></a>
                                               <div class="candidate-info">';
            
                    // display candidate
                    echo '<a href="#" id="F-CandidateName"><b> Candidate name:' . $can_nm1. " " . $can_nm2  . '</b></a><br><a href="#" id="F-Partylist"> Party: ' . $poss["party_name"]. '</a><br><a href="#" id="F-Platform"> Platform: ' . $poss["platform_info"]. '</a>';
            // end of candidate div
             echo'                              </div>
                                    </label>
                            </div>
                 </div>';
        // end of position div
           
        
         
        }
        else{
                $can_nm1 = $poss["fname"];
                $can_nm2 = $poss["lname"];
                    
                    echo '<div class="candidate-box" >';
                    echo '<div>
                                   <label class="checkbox">
                                       <input type="radio" name="'.$poss["position_name"].'" id="vote">
                                       <span class="checkmark"></span>
                                               <a href="#"><img src="#" class="candidate-photo" style="float: left; width: 100px; height: 100px;" alt="Candidate" ></a>
                                               <div class="candidate-info">';
            
                    // display candidate
                    echo '<a href="#" id="F-CandidateName"><b> Candidate name:' . $can_nm1. " " . $can_nm2  . '</b></a><br><a href="#" id="F-Partylist"> Party: ' . $poss["party_name"]. '</a><br><a href="#" id="F-Platform"> Platform: ' . $poss["platform_info"]. '</a>';
            // end of candidate div
             echo'                              </div>
                                    </label>
                            </div>
                 </div>';

        }
    }
    echo'    </div>';
?>
