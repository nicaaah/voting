<?php
    function validate(){
        if(isValidCandidate() && isValidVote() && isLegitUser()){
            return true;
        }
        else{
            return false;
        }
    }
    
    function sanitize(){
        return 1;
    }

    function isValidCandidate(){
        // $i = $canCtr;
        // while($i>0){
            // 	while($j<)
            // 	if($candidates[$i][])
            // }
    }
?>