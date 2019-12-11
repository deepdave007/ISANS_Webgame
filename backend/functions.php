<?php
	include_once "db_connect.php";

    function buildDeck($story_id){
		$conn = getDbConnection();
		$deck = array();
		$result1 = $conn->query("SELECT id, question from questions where story_id=" . $story_id);
		for ($i = 0; $i < $result1->num_rows; $i++){
			$questionArr = array();
			$row = $result1->fetch_array(MYSQLI_ASSOC);
			array_push($questionArr, $row['question']);
			$q_id = $row['id'];
			$result2 = $conn->query("SELECT * from answers where question_id=" . $q_id);
			
			for($j = 0; $j < $result2->num_rows; $j++){
				$answerArr = array();
				$row2 = $result2->fetch_array(MYSQLI_ASSOC);
				array_push($answerArr, $row2['answer'], $row2['finance_impact'], $row2['hunger_impact'], $row2['mental_impact']);
				array_push($questionArr, $answerArr);
			}
			array_push($deck, $questionArr);
		}
		return $deck;
	}
	
	function deleteFromDeck($deck, $index){
		$newDeck = array();
			for ($i = 0; $i < count($deck); $i++){
				if ($i == $index){
					continue;
				}
			array_push($newDeck, $deck[$i]);
			}
			return $newDeck;
	}
?>