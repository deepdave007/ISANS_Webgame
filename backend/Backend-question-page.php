<html>

	<head>
		<link rel="stylesheet" type="text/css" href="../css/Backend-Styles.css">
	</head>
	
	<body>
	
		<nav>
			<button type="button">return to main page</button>
		</nav>
		<form id="wrapper">
			<!-- Context -->
			<div class="story">
				<p>Question Title/Summary</p>
				<textarea class="largeTextArea"></textarea>
				<p style="padding-left: 140px;">Text</p>
				<p class="setHeight">
					<span class="title">Answer 1<input label="Answer1-toggle" type="checkbox"><b>Use</b></span>
					<textarea label="Answer1-context" class="mediumTextArea"></textarea>
				</p>
				<p class="setHeight">
					<span class="title">Answer 2<input label="Answer2-toggle" type="checkbox"><b>Use</b></span>
					<textarea label="Answer2-context" class="mediumTextArea"></textarea>
				</p>
				<p class="setHeight">
					<span class="title">Answer 3<input label="Answer3-toggle" type="checkbox"><b>Use</b></span>
					<textarea label="Answer3-context" class="mediumTextArea"></textarea>
				</p>
				<p class="setHeight">
					<span class="title">Answer 4<input label="Answer4-toggle" type="checkbox"><b>Use</b></span>
					<textarea label="Answer4-context" class="mediumTextArea"></textarea>
				</p>
			</div>
			<!-- Outcome -->
			<div class="story">
				<p>Question Text</p>
				<p><textarea class="largeTextArea"></textarea></p>
				<p >Description</p>
				<p>
					<textarea label="Answer1-Outcome" class="mediumTextArea"></textarea>
				</p>
				<p>
					<textarea label="Answer2-Outcome" class="mediumTextArea"></textarea>
				</p>
				<p>
					<textarea label="Answer3-Outcome" class="mediumTextArea"></textarea>
				</p>
				<p>
					<textarea label="Answer4-Outcome" class="mediumTextArea"></textarea>
				</p>
			</div>
			<!-- Value Change (+/-)s -->
			<div>
				<p style="height: 182px;"></p>
				<p>Money Change (+/-) &nbsp;<input class="numberInput" type="number" label="Answer1-Money-Chance"></p>
				<p>Hunger Change (+/-) <input class="numberInput" type="number" label="Answer1-Hunger-Change" min="-100" max="100"></p>
				<p style="padding-bottom: 4px;">Mental Change (+/-) <input class="numberInput" type="number" label="Answer1-Mental-Change" min="-100" max="100"></p>
				
				<p>Money Change (+/-) &nbsp;<input class="numberInput" class="numberInput" type="number" label="Answer2-Money-Chance"></p>
				<p>Hunger Change (+/-) <input class="numberInput" type="number" label="Answer2-Hunger-Change" min="-100" max="100"></p>
				<p style="padding-bottom: 4px;">Mental Change (+/-) <input class="numberInput" type="number" label="Answer2-Mental-Change" min="-100" max="100"></p>
				
				<p>Money Change (+/-) &nbsp;<input class="numberInput" type="number" label="Answer3-Money-Chance"></p>
				<p>Hunger Change (+/-) <input class="numberInput" type="number" label="Answer3-Hunger-Change" min="-100" max="100"></p>
				<p style="padding-bottom: 4px;">Mental Change (+/-) <input class="numberInput" type="number" label="Answer3-Mental-Change" min="-100" max="100"></p>
				
				<p>Money Change (+/-) &nbsp;<input class="numberInput" type="number" label="Answer4-Money-Chance"></p>
				<p>Hunger Change (+/-) <input class="numberInput" type="number" label="Answer4-Hunger-Change" min="-100" max="100"></p>
				<p style="padding-bottom: 4px;">Mental Change (+/-) <input class="numberInput" type="number" label="Answer4-Mental-Change" min="-100" max="100"></p>
			</div>
		</form>
	
	</body>

</html>