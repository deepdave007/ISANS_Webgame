<?php
	include_once "db_connect.php";
	include_once "functions.php";
	$conn = getDbConnection();
	$getStories = "SELECT * from stories";
	$storyQuery = $conn->query($getStories);
	$storyData1 = $storyQuery->fetch_array(MYSQLI_ASSOC);
	$storyData2 = $storyQuery->fetch_array(MYSQLI_ASSOC);
	$storyData3 = $storyQuery->fetch_array(MYSQLI_ASSOC);
	$deck1 = buildDeck(1);
	$deck2 = buildDeck(2);
	$deck3 = buildDeck(3);
?>

<html>

	<head>
		<link rel="stylesheet" type="text/css" href="../css/Backend-Styles.css">
	</head>
	
	<body>
	
		<nav>
			<button onclick="location.href='../index.php'" type="button">return to main page</button>
		</nav>
		<form action ="forms.php" id="wrapper">
			<div>
				
			</div>
			<!-- Story 1 -->
			<div class="story">
				<h2>Story 1</h2>
				<p><span>Title &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input value="<?php echo $storyData1['title']; ?>" type="text" label="Story1-title"></p>
				<p><Span class="title">Description</span> <textarea class="mediumTextArea" type="text" label="Story1-description"><?php echo $storyData1['story_description']; ?></textarea></p>
				<p><span class="number-title">Starting Money &nbsp;</span><input value="<?php echo $storyData1['starting_finance']; ?>" class="numberInput" type="number" label="Story1-Starting-Money" min="1"></p>
				<P><span class="number-title">Starting Hunger&nbsp;</span><input value="<?php echo $storyData1['starting_hunger']; ?>" class="numberInput" type="number" label="Story1-Starting-Hunger" min="1" max="100"></p>
				<p><span class="number-title">Starting Mental&nbsp;</span><input value="<?php echo $storyData1['starting_mental']; ?>" class="numberInput" type="number" label="Story1-Starting-Mental" min="1" max="100"></p>
				<p>Icon &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input value="<?php echo $storyData1['icon']; ?>" type="text" label="Story1-icon"></p>
				<a href="Backend-question-page.php"><button label="Story1-New-Question" type="button">add new question</button></a>
				<p><button label="Story-save" type="submit">save stories</button></p>
				<table>
					<tr>
						<th class="tableNumberCol">Number</th>
						<th class="tableDescCol">Question summary</th>
						<th class="tableNumberCol"># Answers</th>
					</tr>
					<?php 
						for ($i = 0; $i < count($deck1); $i++){
							$qCount = count($deck1[$i]) - 1;
							$qNumber = $i + 1;
							echo "<tr>
									<td>".$qNumber."</td>
									<td>".$deck1[$i][0]."</td>
									<td>" . $qCount . "</td>
								</tr>";
						}
						
					?>
				</table>
				
			</div>
			<!-- Story 2 -->
			<div class="story">
				<h2>Story 2</h2>
				<p>Title &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input value="<?php echo $storyData2['title']; ?>" type="text" label="Story2-title"></p>
				<p><Span class="title">Description</span> <textarea class="mediumTextArea" type="text" label="Story2-description"><?php echo $storyData2['story_description']; ?></textarea></p>
				<p><span class="number-title">Starting Money &nbsp;</span><input value="<?php echo $storyData2['starting_finance']; ?>" class="numberInput" type="number" label="Story2-Starting-Money" min="1"></p>
				<P><span class="number-title">Starting Hunger&nbsp;</span><input value="<?php echo $storyData2['starting_hunger']; ?>" class="numberInput" type="number" label="Story2-Starting-Hunger" min="1" max="100"></p>
				<p><span class="number-title">Starting Mental&nbsp;</span><input value="<?php echo $storyData2['starting_mental']; ?>" class="numberInput" type="number" label="Story2-Starting-Mental" min="1" max="100"></p>
				<p>Icon &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input value="<?php echo $storyData2['icon']; ?>" type="text" label="Story2-icon"></p>
				<a href="Backend-question-page.php"><button label="Story2-New-Question" type="button">add new question</button></a>
				<p><button label="Story-save" type="submit">save stories</button></p>
				<table>
					<tr>
						<th class="tableNumberCol">Number</th>
						<th class="tableDescCol">Question summary</th>
						<th class="tableNumberCol"># Answers</th>
					</tr>
					<?php 
						for ($i = 0; $i < count($deck2); $i++){
							$qCount = count($deck2[$i]) - 1;
							$qNumber = $i + 1;
							echo "<tr>
									<td>".$qNumber."</td>
									<td>".$deck2[$i][0]."</td>
									<td>" . $qCount . "</td>
								</tr>";
						}
						
					?>
				</table>


			</div>
			<!-- Story 3 -->
			<div class="story">
				<h2>Story 3</h2>
				<p>Title &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input value="<?php echo $storyData3['title']; ?>" type="text" label="Story3-title"></p>
				<p><Span class="title">Description</span> <textarea class="mediumTextArea" type="text" label="Story3-description">value="<?php echo $storyData3['story_description']; ?>"</textarea></p>
				<p><span class="number-title">Starting Money &nbsp;</span><input value="<?php echo $storyData3['starting_finance']; ?>" class="numberInput" type="number" label="Story3-Starting-Money" min="1"></p>
				<P><span class="number-title">Starting Hunger&nbsp;</span><input value="<?php echo $storyData3['starting_hunger']; ?>" class="numberInput" type="number" label="Story3-Starting-Hunger" min="1" max="100"></p>
				<p><span class="number-title">Starting Mental&nbsp;</span><input value="<?php echo $storyData3['starting_mental']; ?>" class="numberInput" type="number" label="Story3-Starting-Mental" min="1" max="100"></p>
				<p>Icon &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input value="<?php echo $storyData3['icon']; ?>" type="text" label="Story2-icon"></p>
				<a href="Backend-question-page.php"><button label="Story3-New-Question" type="button">add new question</button></a>
				<p><button label="Story-save" type="submit">save stories</button></p>
				<table>
					<tr>
						<th class="tableNumberCol">Number</th>
						<th class="tableDescCol">Question summary</th>
						<th class="tableNumberCol"># Answers</th>
					</tr>
					<?php 
						for ($i = 0; $i < count($deck3); $i++){
							$qCount = count($deck3[$i]) - 1;
							$qNumber = $i + 1;
							echo "<tr>
									<td>".$qNumber."</td>
									<td>".$deck3[$i][0]."</td>
									<td>" . $qCount . "</td>
								</tr>";
						}
						
					?>
				</table>

			</div>
		
		</form>
	
	</body>

</html>