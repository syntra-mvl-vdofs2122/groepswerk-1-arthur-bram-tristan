<!-- /* score ophalen uit de session
/* score toevoegen aan de leaderboard table als deze groter is dan de vorige score
/* de top 10 uit de leaderboard halen en inladen in de pagina


*/ -->


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
</head>
<?php
	
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

<?php

$score = $_SESSION['score'];
$currentDate = $_SERVER['REQUEST_TIME'];
$username = $_SESSION['username'];
$sqlUser= "SELECT SCORE 
            FROM leaderboard_score l
            JOIN users u ON l.id = u.id
            WHERE u.username = $username";
$$_SESSION['lastScore'] = $db->exec($sqlUser);
                
$sqlId= "SELECT id FROM users 
                      WHERE username = $username";
$_SESSION['id'] = $db->exec($sqlId);


function playerScore($username){
    global $db;
    
    // if($_SESSION['score'] > $_SESSION['lastScore']){
    // $sql = "UPDATE leaderboard_score
    //           SET score = $_SESSION['score']
    //           WHERE id = $_SESSION['id']";
    
    
    
    
    $result = $db->exec($sql);
    }
    $sql2= "INSERT INTO leaderboard_score (id, score, date_high_score) VALUES ('".$_SESSION['id']."','".$_SESSION['score']."','".$_SERVER['REQUEST_TIME']."')"; 
  



function leaderboardLoading(){

  $sql_top10 = "SELECT username,
                  score
                  FROM leaderboard_score l JOIN users u
                  ON u.id = l.id
                  ORDER BY score DESC 
                  LIMIT 10";

  $result = $sql_top10->query($sql);
  while($row = $result->fetch_assoc()) {
    $playerScore = $row;
    $response->getBody()->write('<li class="ranking__player-item">');
    $response->getBody()->write($row);
    $response->getBody()->write('</li>');
    return $response;

}
}
?>

<?php
$app->get('/leaderboard.php', function (Request $request, Response $response, array $args) {
  include 'assets/header.php';
  $response->getBody()->write('<body class="body__leaderboard">');
  $response->getBody()->write('<main class="leaderboard">');
  $response->getBody()->write('<h1 class="leaderboard__title">Leaderboard</h1>');
  $response->getBody()->write('<div class="leaderboard__legend-container legend">');
  $response->getBody()->write('<h2 class="legend__name"> Name </h2>');
  $response->getBody()->write('<img class="legend__logo" src="https://upload.wikimedia.org/wikipedia/commons/2/25/Teamseas-logo.png"
  alt="teamseas-logo">');
  $response->getBody()->write('<h2 class="legend__score"> Score </h2></div>');
  
  $response->getBody()->write('<div class="leaderboard__ranking-container ranking">');
  $response->getBody()->write('<ol class="ranking__player-list ">');
  $response->getBody()->write(leaderboardLoading());
  $response->getBody()->write('</ol>');
  $response->getBody()->write('</ol></div></main></html>');
  include 'assets/footer.php';
  return $response;
  
});
$app->run();