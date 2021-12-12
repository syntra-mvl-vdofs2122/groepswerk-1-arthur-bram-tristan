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
	<link rel="stylesheet" href="scss/styles.css">

</head>

<body>
	<?php
	include 'header.php';
	?>

	<main class="questions">
		<article class="questions__main">
			<h2 class="questions__title">Question</h2>
			<form action="" class="questions__form">

				<label for="" class="questions__form-item">
					<input type="radio" name="awnser">
					awnser 1
				</label>

				<label for="" class="questions__form-item">
					<input type="radio" name="awnser">
					awnser 2
				</label>

				<label for="" class="questions__form-item">
					<input type="radio" name="awnser">
					awnser 3
				</label>

				<label for="" class="questions__form-item">
					<input type="radio" name="awnser">
					awnser 4
				</label>

				<input type="submit" value="Confirm" class="questions__form-submit">
			</form>

			<?php
			?>
	</main>
	</article>
</body>

</html>