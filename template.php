<?php
require './view/view.php';
require './model/videos2.php';

$view = new view();
$videos = new videos();

// titles....from file videos.php
$titles = $videos->getTitles();

$maxVideos = count($titles);

// use the "ternary" operator to check if page param is set
$page = (isset($_GET['page'])) ? (int) $_GET['page'] : 0;
// use "ternary" operator to check to see if page is 0
$prev = ($page == 0) ? 0 : $page - 1;
$next = $page + 1;
$videosPerPage = 3;
?>

<!--Nikhilam Multiplication Pages -->

<!-----
layout: examples
title: Jumbotron Template
extra_css: "jumbotron.css"
---
-->
<?php
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS 4.2.1 -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- <link type="text/css" rel="stylesheet" href="css/materialize.css" /> -->
    <title>Vedic Maths Portal</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">VMPortal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">VM Basics</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Place Value</a>
          <a class="dropdown-item" href="#">Basic Terms and Laws</a>
          <a class="dropdown-item" href="#">Vinculum Numbers</a>
          <a class="dropdown-item" href="#">Beejank Vedic Check</a>
          <a class="dropdown-item" href="#">Quotient and Remainder</a>
          <a class="dropdown-item" href="#">Duplex</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">VM Methods (I)</a>
        <div class="dropdown-menu" aria-labelledby="dropdown02">
          <a class="dropdown-item" href="#">Nikhilam Multiplication</a>
          <a class="dropdown-item" href="#">Vertically & Crosswise</a>
          <a class="dropdown-item" href="#">Nikhilam Division</a>
          <a class="dropdown-item" href="#">Paraavartya Division</a>
          <a class="dropdown-item" href="#">Straight Division</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">VM Methods (II)</a>
        <div class="dropdown-menu" aria-labelledby="dropdown03">
          <a class="dropdown-item" href="#">Squaring Numbers</a>
          <a class="dropdown-item" href="#">Square Roots</a>
          <a class="dropdown-item" href="#">Algebraic Squares/Roots</a>
          <a class="dropdown-item" href="#">Cubing Numbers</a>
          <a class="dropdown-item" href="#">Cube Root of Perfect Cubes</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Puzzles</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="#">Put It Together Puzzles</a>
          <a class="dropdown-item" href="#">MatchSticks Puzzles</a>
          <a class="dropdown-item" href="#">Coins Puzzles</a>
          <a class="dropdown-item" href="#">Tangrams</a>
          <a class="dropdown-item" href="#">Chess Checkers Puzzles</a>
          <a class="dropdown-item" href="#">Checker Board Puzzles</a>
          <a class="dropdown-item" href="#">Train Puzzles</a>

        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    <!--
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
    -->
  </div>
</nav>

<!-- Can only have one main element on each page and it should contain unique content, and should
not appear anywhere else on the site -->
	
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Nikhilam Multiplication</h1>
      
      <p>Blurb for Nikhilam Multiplication....</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <a name="videos"></a>
      <p><a class="btn btn-primary btn-lg" href="#videos" role="button">Watch Videos &raquo;</a></p>
    
    </div>

  </div>

  <hr>
 	<h2 class="text-center">Nikhilam Multiplication Videos</h2>
  <div id="nikmult" class="container" >
  <div>
			<a class="pages" href="nikhilam_mult.php?page=<?php echo $prev; ?>#videos">&lt;prev video set</a>&nbsp;|&nbsp;
			<a class="pages" href="nikhilam_mult.php?page=<?php echo $next; ?>#videos">next video set&gt;</a>
        	<em class="pages_index"><strong><?php echo "Video Set: ";  echo $page + 1;?></strong></em>
        	</div>
  <div class="card-deck mb-3 text-center">
  <!-- <div id="videowrapper"> -->
        <!-- Here are the links that take user to the various pages in the Nikhilam Multiplication Section -->
       <!-- <div class="linkwrapper"> -->
       		
          <!-- This code actually displays the videos. displayVideos takes 4 arguments including the page required by user, the number of videos displayed (which we have absentmindedly called $linesPerPage, a count of the video titles and a function that gets the videos (found in the videos2.php file )-->
          
			<?php echo $view->displayVideos($page, $videosPerPage, $maxVideos, $videos->getVideos()); ?>
       <!-- </div> -->
  <!-- </div> -->
</div>
</div>

<footer class="container">
  <p>&copy; Company 2017-2018</p>
</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script> 										
    <!-- <script type="text/javascript" src="js/materialize.min.js"></script>	-->																				
  </body>
</html>





