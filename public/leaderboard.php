<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/master.css">

  <title>Leaderboards</title>

  <?php
	// include 'assets/header.php';
  // require_once footer.php


  use Psr\Http\Message\ResponseInterface as Response;
  use Psr\Http\Message\ServerRequestInterface as Request;
  use Slim\Factory\AppFactory;
  
  require __DIR__ . '/../vendor/autoload.php';
  
  $app = AppFactory::create();
  
  class MyDB extends SQLite3
  {
      function __construct()
      {
          $this->open('../private/quiz.db');
      }
  }
  
  $db = new MyDB();

?>
  <!-- <?php
function playerScore($username){

}

?> -->


</head>
<?php
$app->get('/leaderboard.php', function (Request $request, Response $response, array $args) {
  //header invoegen
  $response->getBody()->write('<body class="body__leaderboard">');
  $response->getBody()->write('<main class="leaderboard">');
  $response->getBody()->write('h1 class="leaderboard__title">Leaderboard</h1>');
  $response->getBody()->write('<div class="leaderboard__legend-container legend">');
  $response->getBody()->write('<h2 class="legend__name"> Name </h2>');
  $response->getBody()->write('<img class="legend__logo" src="https://upload.wikimedia.org/wikipedia/commons/2/25/Teamseas-logo.png"
  alt="teamseas-logo">');
  $response->getBody()->write('<h2 class="legend__score"> Score </h2></div>');
  
  $response->getBody()->write('<div class="leaderboard__ranking-container ranking">');
  $response->getBody()->write('<ol class="ranking__player-list ">');
  $response->getBody()->write('<li class="ranking__player-item"> Player </li>');
  $response->getBody()->write('<li class="ranking__player-item"> Player </li>');
  $response->getBody()->write('<li class="ranking__player-item"> Player </li>');
  $response->getBody()->write('<li class="ranking__player-item"> Player </li>');
  $response->getBody()->write('<li class="ranking__player-item"> Player </li>');
  $response->getBody()->write('<li class="ranking__player-item"> Player </li>');
  $response->getBody()->write('<li class="ranking__player-item"> Player </li>');
  $response->getBody()->write('<li class="ranking__player-item"> Player </li>');
  $response->getBody()->write('<li class="ranking__player-item"> Player </li>');
  $response->getBody()->write('<li class="ranking__player-item"> Player </li>');
  $response->getBody()->write('</ol>');
  $response->getBody()->write('<ol class="ranking__score-list">');
  $response->getBody()->write('<li class="ranking__score-item"> score </li>');
  $response->getBody()->write('<li class="ranking__score-item"> score </li>');
  $response->getBody()->write('<li class="ranking__score-item"> score </li>');
  $response->getBody()->write('<li class="ranking__score-item"> score </li>');
  $response->getBody()->write('<li class="ranking__score-item"> score </li>');
  $response->getBody()->write('<li class="ranking__score-item"> score </li>');
  $response->getBody()->write('<li class="ranking__score-item"> score </li>');
  $response->getBody()->write('<li class="ranking__score-item"> score </li>');
  $response->getBody()->write('<li class="ranking__score-item"> score </li>');
  $response->getBody()->write('<li class="ranking__score-item"> score </li>');
  $response->getBody()->write('<li class="ranking__score-item"> score </li>');
  $response->getBody()->write('</ol></div></main></html>');
  return $response;
  // footer invoegen
});
$app->run();