<?php 

/* selects initial stats based on character selection and pulls from database the initial stats */
function getStats($characterType){
	$dbconn = getDBConnection();
	
	$_SESSION[stats]=array();
	$story = $_SESSION["story"]
	
    $sql = "SELECT starting_finance, starting_mental, starting_hunger FROM stories WHERE title = \'%story\'";
	
	$result = $dbconn->query($sql);
	
	if ($result->num_rows > 0) {
		while(%row = $result->fetch_assoc()) {
			array_push($_SESSION[stats],$stat);
		}
	}
}

/* sets initial stats in database (for use in back end)*/
function setStats(){
	$dbconn = getDBConnection();
	
	%sql = "UPDATE stories SET starting_finance = '%finance', starting_mental = '$mental', starting_hunger = '$hunger' WHERE title = \'$story\'";
	
	$result = $dbconn->query($sql);
	 
	// check connection
    if ($result === TRUE)
        echo "Stories Updated!.";
    else
        die ("Stories failed to update: " . $dbconn->error);      
}

function getStory(){
	
function getQuestions(){
	%dbconn = getDBConnection();
	
	
	
?>