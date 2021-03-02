<?php
	function showInfo($conn){
		$sql = "SELECT * FROM candidate WHERE position_id = 90";
		$pos_result = $conn->query($sql);
		// echo $result;
		while($cand = $pos_result->fetch_assoc()) {
			$stud = "SELECT * FROM student WHERE student_id = $cand[student_id]";
			echo $cand["candidate_id"]. " - stud id: " . $cand["student_id"]. " position" . $cand["position_id"]. " party" . $cand["party_name"]. "<br>";
		}
	}
	function testOutput($conn){
		// $candidates = array(1, 1);
		$canCtr = 0;
		$pos_id = 10;
		while($pos_id < 40){
			$can_nm = 1; //var that stores candidate id that is voted
			echo "<section class='Position' id='Pos'> Position ", $pos_id;
				echo '<table>';
					echo '<tr>';
					echo "<td><div class='Candidate'><input required type='radio' name='$pos_id' class='agree-term' value = 'None' checked = 'checked'/> Abstain </div></td>";
					while($can_nm < 4){
						echo "<td><div class='Candidate'><input required type='radio' name='$pos_id' class='agree-term' value = '$can_nm'/> Candidate $can_nm </div></td>";
						$candidates[$canCtr][$pos_id] = $can_nm;
						$can_nm++;
						$canCtr++;
					}
					echo '</tr>';
				echo '</table>';
			echo '</section>';
			$pos_id+=10;
		}
	}
?>