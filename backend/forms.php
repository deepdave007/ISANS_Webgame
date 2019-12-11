<?php
	include_once "functions.php";
	/* Only shows if nothing is caught */
	echo "ISANS used PHP!! <br> It wasn't very effictive<br><br><br>I broke :(<br>";

    /* form_processing version 2 */
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
	

    // ob_start() and ob_flush() are used to handle header("...") redirects
    ob_start();

    include_once "db_connect.php";
	$conn = getDbConnection();
	
	 /* if a 'NewGame' is called, reset the Character database and reset the Chapter Counter*/ 
    if (isset($_GET['NewGame'])) {
        // check ifc session has already started
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        header('Loation: ../character-creation.php');
    }
	
	if (isset($_GET['submittedAnswer'])){
		if (session_status() == PHP_SESSION_NONE) {
           session_start();
		}
		$_SESSION["counter"] = $_SESSION["counter"] + 1;
		$_SESSION["money"] = $_SESSION['money'] + $_GET['submittedMoneyChange'];
		$_SESSION["hunger"] = $_SESSION['hunger'] + $_GET['submittedHungerChange'];
		if ($_SESSION["hunger"] > 100){
			$_SESSION["hunger"] = 100;
		}
		$_SESSION["mental"] = $_SESSION['mental'] + $_GET['submittedMentalChange'];
		if ($_SESSION["mental"] > 100){
			$_SESSION["mental"] = 100;
		}
		
		if ($_SESSION["money"] <= 0){
			$_SESSION['outcome'] = "Sadly, you didn't make it. You ran out of money and didn't have enough to live on.";
			header('Location: ../outcome-page.php');
		}
		else if ($_SESSION["hunger"] <= 0){
			$_SESSION['outcome'] = "Sadly, you didn't make it. You ran out of food and colapsed.";
			header('Location: ../outcome-page.php');
		}
		else if ($_SESSION["mental"] <= 0){
			$_SESSION['outcome'] = "Sadly, you didn't make it. You mental health was too low and you can't make yourself leave the house";
			header('Location: ../outcome-page.php');
		}
		else {
			header('Location: ../story-page.php');
		}
		
		if ($_SESSION['counter'] >= 16) {
			$_SESSION['outcome'] = "You made it though 15 days! Although you had to make some hard choices to do so. Think you could do better now? try again!";
			header('Location: ../outcome-page.php');
		}
		
		
		
	}
	
	/* story selection*/
	if (isset($_GET['story'])) {
        // check if session has already started
       if (session_status() == PHP_SESSION_NONE) {
           session_start();
       }
		session_unset;
		$story = $_GET['story'];
		$startMoney = "SELECT starting_finance from stories where id=" . $story;
		$startFood = "SELECT starting_hunger from stories where id=" . $story;
		$startMental = "SELECT starting_mental from stories where id=" . $story;
		$_SESSION["money"] = mysqli_fetch_row(mysqli_query($conn, $startMoney))[0];
		$_SESSION["hunger"] = mysqli_fetch_row(mysqli_query($conn, $startFood))[0];
		$_SESSION["mental"] = mysqli_fetch_row(mysqli_query($conn, $startMental))[0];
		$_SESSION["story"] = $story;
		$_SESSION["counter"] = 0;
		unset($_SESSION['deck']);
		$_SESSION["deck"] = buildDeck($story);
		
        header('Location: ../story-page.php');
    }
	
	/*if a 'Login' is called, send the user to an admin login page */
	
	if	(isset($_GET['Login'])) {
		//	check if seesion has already started
		if (session_status() == PHP_SESSION_NONE)	{
			session_start();
		}
		
		header('Location: ../admin/login.php');
	}
?>