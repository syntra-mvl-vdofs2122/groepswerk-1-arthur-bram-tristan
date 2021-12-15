<header class="header">
	<nav class="header__navigation">
		<a href="index.php" class="header__navigation-item">index</a>
		<a href="question.php" class="header__navigation-item">Quiz</a>
		<a href="leaderboard.php" class="header__navigation-item">Leaderboard</a>
		<a href="info.php" class="header__navigation-item">Info</a>

	</nav>
	<form action="" method="POST">
	<input type="submit" value="Clear username" name="clearname">
	<input type="submit" value="Clear all" name="clearall">
	<input type="submit" value="Clear answers" name="clearanswers">
	</form>
	<?php
   

	 if(isset($_POST['clearname'])) {
		unset($_SESSION['name']);
	}
	if(isset($_POST['clearall'])) {
		unset($_SESSION['name']);
		unset($_SESSION['answer1']);
		unset($_SESSION['rightanswers']);
	}
	if(isset($_POST['clearanswers'])) {
		unset($_SESSION['answer1']);
		unset($_SESSION['rightanswers']);
	}
?>
</header>