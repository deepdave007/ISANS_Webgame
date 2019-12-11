<?php
	include_once "backend/db_connect.php";
	$conn = getDbConnection();
	$storyImg = "SELECT icon, story_description from stories";
	$storyQuery = $conn->query($storyImg);
	$storyData1 = $storyQuery->fetch_array(MYSQLI_ASSOC);
	$storyData2 = $storyQuery->fetch_array(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Migration Memoir</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/character-creation-new-styling.css" />
</head>

<!-- Disables scrolling -->
<body scroll="no" style="overflow: hidden">

<!-- Facilitates the creation of the heading -->
    <header class="s-header">
        <nav class="header-nav-wrap">
            <div id="heading" class="span-24 last">
                PLEASE SELECT A CHARACTER
            </div>
            <!--<a class="signup-btn" href="index.html" title="Login"><img src=""/></a> -->
        </nav>
    </header>

<!-- Creates a character container div that contains the story character labels -->
<div class="character-container">
    <div class="btn-group-toggle" data-toggle="buttons">
	    <form action ="backend/forms.php" method ="get">
			<button type="submit" class="btn"  >
			<img src="<?php echo $storyData1['icon']; ?>" class= "single-solid"/>
                    <p id="label-text">
                        <?php echo $storyData1['story_description']; ?>
                    </p>
			</button>
			<input type="hidden" name="story" value="1">
		</form>
            <div class="divider">
            </div>
		<!--<form action ="backend/forms.php" method ="get">
			<button type="submit" class="btn"  >
			<img src="<?php echo $storyData2['icon']; ?>" class= "single-solid"/>
                    <p id="label-text">
                        <?php echo $storyData2['story_description']; ?>
                    </p>
			</button>
			<input type="hidden" name="story" value="2">
		</form>-->
	</div>
        </div>

<!-- Creates the back button enabling user to get to the homepage -->
            <label class="back-btn" id="rectangle">
                <input type="button"  name="gender" form="character-select" autocomplete="off" value="read more">
                <a href="index.php">
                <p id="label-text">
                    &lt
                </p>
                </a>
            </button>
        </div>
    </div>
</html>