<!--this page is used to login to the admin back end for adding/editing stories in the game
-->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>
		<meta http-equiv="content-type" content="text/html" charset="utf-8" />
		<title>The Quiet Journey</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">

		<link rel="styleSheet" href="./css/main.css" />

	<!-- Below defines all the needed bootstrap CSS files. -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js"></script>

	<!-- Defines the image that is used in the tab screen. -->
		<link rel="shortcut icon" type="image/x-icon" href="./media/map-marker-alt-solid.ico" />
	</head>

	<!-- Disables the users ability to scroll down on pages, as it is unnessisary. -->
	<body scroll="no" style="overflow: hidden">
		<div class="main">
			<img class="mainLogo" src="media/isans.png" />
			<h1>
				Welcome to ISANS: The Quiet Journey game.
			</h1>
			<!-- sends to the form_processing.php file which calls the methods to clear the Character table 
			in the database and start a new game -->
			<form action="./backend/form_processing.php" method="get" class="form">
	            <button type="submit" name="NewGame" value="NewGame" class="btn" id="buttonId">New Game</button>
	        </form>
			
			<!--test-->
			<form action="./backend/form_processing.php" method="get" class="form">
				<button type="submit" name="NewGame" value="NewGame" class="btn" id="buttomID">Login</button>
			</form>
		</div>


	<!-- Below defines all the needed bootstrap javascript files. -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		<script>
			$('.carousel').carousel({
				interval: false
			})
		</script>
	</body>

</html>