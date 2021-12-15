<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Questions</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/master.css">


</head>

<body>



	<?php
	include 'assets/header.php';
if(empty($_SESSION['name'])){
	?>
	
	
	<main class="name">
		<article class="name__container">
<form action="" method="POST" class="name__form">
	<label for="">Username:
	<input type="text" name="name">
	</label>
<input type="submit" value="Continue" name="enterName">
</form>
<h3><?php echo $error ?></h3>
		</article>
	</main>



<?php
if(isset($_POST['enterName'])) {
	$name = $_POST['name'];
$_SESSION['name'] = $name;
echo '<script type="text/JavaScript"> location.reload(); </script>';
} elseif ($_POST['enterName'] = ""){
	$error = "Enter a User name";
}




} elseif(empty($_SESSION['answer1']) && isset($_SESSION['name'])){
?>



	<main class="questions">
		<article class="questions__main">
			<h1><?php echo $_SESSION['name'] ?></h1>
			<h2 class="questions__title">Question 1</h2>
			<h2>How many tons of plastic are in the ocean?</h2>
			<form action="" class="questions__form" method="POST">

				<label for="" class="questions__form-item">
					<input type="radio" name="answer1" value="144520695">
					144.520.695 Ton
				</label>

				<label for="" class="questions__form-item">
					<input type="radio" name="answer1" value="20039488">
					20.039.488 Ton
				</label>

				<label for="" class="questions__form-item">
					<input type="radio" name="answer1" value="164999999">
					164.999.999 Ton
				</label>

				<label for="" class="questions__form-item">
					<input type="radio" name="answer1" value="289566377">
					289.566.377 Ton
				</label>

				<input type="submit" value="Continue" 
				class="questions__form-submit" name="checkanswer1">
			</form>

			<?php
			?>
	</main>



	<?php

if(isset($_POST['checkanswer1'])) {
	$answer1 = $_POST['answer1'];
$_SESSION['answer1'] = $answer1;

$rightawnser = 0;
if($_SESSION['answer1'] == '164999999'){
	$rightawnser++;
	$_SESSION['rightanswers'] = $rightawnser;
	}
	else{
	$rightawnser = 0;
	$_SESSION['rightanswers'] = $rightawnser;
	}

echo '<script type="text/JavaScript"> location.reload(); </script>';
}  else{

} 



} elseif(isset($_SESSION['answer1']) && isset($_SESSION['name'])){
	
?>

<main class="questions">
<article class="questions__main">
	<h2><?php echo $_SESSION['name'] ?></h2>
	<h3>You score</h3>
	<h3><?php echo $_SESSION['rightanswers'] ?>/1</h3>
<br>
<h3>How many tons of plastic are in the ocean?</h3>
	<h3>your answer: <?php echo $_SESSION['answer1'] ?></h3>
	<h3>correct answer: 164999999</h3>
	<form method="POST">
		<input type="submit" value="continue to leaderboard" name="continue">
	</form>
	</article>
</main>


<?php
if(isset($_POST['continue'])) {
	unset($_SESSION['name']);
	unset($_SESSION['answer1']);
	unset($_SESSION['rightanswers']);
	echo '<script type="text/JavaScript"> window.location.href = "leaderboard.php"; </script>';
}

}
	?>
	</article>
</body>

</html>