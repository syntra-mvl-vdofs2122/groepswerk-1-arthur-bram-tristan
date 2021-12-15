<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="scss/master.css">
  <link rel="stylesheet" href="scss/index.css">
</head>

<body>
  <?php
	include 'assets/header.php';
  ?>
  <main class="slogan">
  <span class="slogan__text">#teamseas. Save the ocean!</span>
  <form class="" action="input" method="post">
    <button type="submit"> Take the quiz </button>
  </form>
  <a href="question.php">take the quiz</a>
  </main>
</body>

</html>