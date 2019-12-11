<!-- This page is used to foster the various scenarios that the end user will be
     put in throughout the application.
	 The page below employs various bootstrap elements such as sidebars and
     modals.
 -->
 
<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include './backend/form_processing.php';
    session_start();
	$conn = getDbConnection();
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>The Migration Memoir</title>
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Below defines all the needed bootstrap CSS files. -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- font-awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
          crossorigin="anonymous">
        <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js"></script>
        <link rel="styleSheet" type="text/css" href="./css/normalize.css" />
        <link rel="styleSheet" type="text/css" href="./css/scenarios.css" />

        <!-- Defines the image that is used in the tab screen. -->
        <link rel="shortcut icon" type="image/x-icon" href="../media/map-marker-alt-solid.ico" />
    </head>

    <!-- Disables the users ability to scroll down on pages, as it is unnecessary. -->
    <body scroll="no" style="overflow: hidden">

    <!-- Creates the header nav bar across the top of the application.  -->
    <div id="header">
        <nav class="navbar">
            <div class="container-fluid">
                <button type="button" class="expand" data-toggle="modal" data-target="#sideModal">
                    <img src="./media/chart-bar-regular.svg" />
                </button>
            </div>
        </nav>
    </div>

    <!-- Defines the adaptable sidebar.  -->
    <nav id="sidebar" class=".d-none .d-sm-block">
        <div class="sidebar-header">
            <h3>PLAYER STATS</h3>
        </div>
        <hr />
        <img class="image" src="media/dollar.png" />
        <p class="stats-text">
            $<?php echo $_SESSION["money"]; ?>
        </p>
        <hr />
        <img class="image" src="media/corn.png" />
        <p class="stats-text">
            <?php echo $_SESSION["hunger"]; ?>%
        </p>
        <hr />
        <img class="image" src="media/stress.png" />
        <p class="stats-text">
            <?php echo $_SESSION["mental"]; ?>%
        </p>
        <hr />
    </nav>

    <!-- Creates the modal sidebar to ensure options are still accessible even when on mobile device. -->
    <div class="modal fade" id="sideModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Player Stats </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="image" src="media/dollar.png" />
                    <p class="stats-text">
                        <?php echo $_SESSION["money"]; ?>
                    </p>
                    <hr />
                    <img class="image" src="media/corn.png" />
                    <p class="stats-text">
                        <?php echo $_SESSION["hunger"]; ?>
                    </p>
                    <hr />
                    <img class="image" src="media/stress.png" />
                    <p class="stats-text">
                        <?php echo $_SESSION["mental"]; ?>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <?php
        if (isset($_SERVER['PHP_SELF'])) {
            
            /*
             * Collects, processes and displays the impact of the selected answer is one has been submitted
             */
            if (isset($_GET['answer'])) {
                $impactString = getImpactString($_SESSION['impact']);
    ?>
                <div id="main">
                    <div class="problem">
                        <div class="question">
                            <p>
								You have stayed overtime at work and your boss recognizes that and appreciates it, he gives you a bonus of $250. 
							</p>
                        </div>
                    </div>
                </div>
    <?php
            }
            
            /**
             * if the next scenario has been requested, the scenario, answers, and context are selected form the database
             * (depending on the current value of the Chapter Counter session variable)
             */
           /*  if (isset($_GET['getNextScenario'])) {
                $scenario = getTransitionAndScenario(); // transition value and scenario value
                $answers = getAnswersForScenario(); // list of associated arrays of answers (includes answers value and impacts)
                $context = getContextForScenario(); // context of the current scenario, given by the Chapter Counter */

    ?>

    <!-- Creates the modal to provide end-users with more context and information to
         ensure a proper decision is made. -->
        


    <!-- Creates the main page content populated with question and answer values. -->
        <div id="main">
            <div class="problem">
                <div class="question">
		   <p><?php echo $_SESSION["deck"][$_SESSION["counter"]][0]; ?></p>
                </div>
                <div class="answer">
					<?php 
						for ($i = 1; $i < count($_SESSION["deck"][$_SESSION["counter"]]); $i++){
							echo '<form action="./backend/forms.php" method="GET-">
										<button class="answerButton" type="submit" name="submit-ScenarioAnswer" >'. $_SESSION["deck"][$_SESSION["counter"]][$i][0] . '</button>
										<input type="hidden" name="submittedAnswer" value="'. $i .'">
										<input type="hidden" name="submittedMoneyChange" value="'. $_SESSION["deck"][$_SESSION["counter"]][$i][1] .'">
										<input type="hidden" name="submittedHungerChange" value="'. $_SESSION["deck"][$_SESSION["counter"]][$i][2] .'">
										<input type="hidden" name="submittedMentalChange" value="'. $_SESSION["deck"][$_SESSION["counter"]][$i][3] .'">
								</form>';
						}
					?>
                </div>
            </div>

        </div>
        <?php
                    }
        ?>

    <!-- Creates the footer which allows end-users to navigate back to the first
         page. -->
        <div class="footer">
            <div class="container-fluid">
                <button type="button" class="redo" onClick="location.href='index.php'">
                    <img src="./media/redo-solid.svg" />
                </button>
            </div>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>




    <!-- Below defines all the needed bootstrap javascript files. -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>

</html>
