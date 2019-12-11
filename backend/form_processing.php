<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // ob_start() and ob_flush() are used to handle header("...") redirects
    ob_start();

    include_once "db_connect.php";
    include "functions.php";

    /*
     * if a 'NewGame' is called, reset the Character database and reset the Chapter Counter
     */ 
    if (isset($_GET['NewGame'])) {
        // check if session has already started
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        resetCharStatDatabase();
        setInitialChapterCounters();

        header('Location: ../character-creation.php');
    }
	
	/*
	 * if a 'Login' is called, send the user to an admin login page 
	 * added by Patrick 10/10/2019
	 */
	if	(isset($_GET['Login'])) {
		//	check if seesion has already started
		if (session_status() == PHP_SESSION_NONE)	{
			session_start();
		}
		
		header('Location: ../admin/login.php');
	}

    /**
     * if a new character is created ('submit-Character') set the values in the cookie session and the sql database accordingly 
     */
    if (isset($_GET['submit-Character'])) {
        // check if session has already started
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION["gender"] = $_GET['gender'];
        $_SESSION["age"] = $_GET['age'];
        $_SESSION["family"] = $_GET['family-type'];

        setCharStatSession($_SESSION["family"]);
        setCharStatDatabase();
        setInitialChapterCounters();

        header('Location: ../story-page.php?getNextScenario=true');
    }

    /**
     * if 'submit-ScenarioAnswer' is submittd, get the selected answer value and compare it to the answers (array) 
     * also associated with the scenario.
     * 
     * if the values match, select the 'impact' values from that record and set them accordingly using the setImpactStats() method
     * 
     */
    if (isset($_POST['submit-ScenarioAnswer'])) {
        // check if session has already started
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $submittedAnswerVal = $_POST['submit-ScenarioAnswer'];
        $answersArray = getAnswersForScenario();
        $arrLength = sizeof($answersArray);


        for ($i=0; $i<$arrLength; $i++) {
            if ($answersArray[$i]['answer_val'] == $submittedAnswerVal)
                $answerAssocRow = $answersArray[$i];
        }

        setImpactStats($answerAssocRow);

        $_SESSION['impact'] = $answerAssocRow;

        header('Location: ../story-page.php?answer=submitted');
    }

    /**
     * if 'submit-GoToNextScenario', increase the Chapter Counter in the cookie session and reload the page the new counter value
     * 
     * The page will load the next session according to the current Chapter Counter value
     */
    if (isset($_GET['submit-GoToNextScenario'])) {
        // check if session has already started
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION['chapter_counter'] += 1;
        header('Location: ../story-page.php?getNextScenario=true');
    }

    ob_flush();
?>
