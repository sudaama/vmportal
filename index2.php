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

<!-- Index.html Page -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS 4.2.1 -->
    <link rel="stylesheet" href="css/bootstrap.css">
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
          <a class="dropdown-item" href="place_value.html">Place Value</a>
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
          <a class="dropdown-item" href="nikhilam_mult.php">Nikhilam Multiplication</a>
          <a class="dropdown-item" href="vert_cross.php">Vertically & Crosswise</a>
          <a class="dropdown-item" href="nik_div.php">Nikhilam Division</a>
          <a class="dropdown-item" href="paraa_div.php">Paraavartya Division</a>
          <a class="dropdown-item" href="stra_div.php">Straight Division</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">VM Methods (II)</a>
        <div class="dropdown-menu" aria-labelledby="dropdown03">
          <a class="dropdown-item" href="squa_nums.php">Squaring Numbers</a>
          <a class="dropdown-item" href="root_nums.php">Square Roots</a>
          <a class="dropdown-item" href="alg_roots.php">Algebraic Squares/Roots</a>
          <a class="dropdown-item" href="cub_nums.php">Cubing Numbers</a>
          <a class="dropdown-item" href="cub_roots.php">Cube Root of Perfect Cubes</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Puzzles</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="put_tog.php">Put It Together Puzzles</a>
          <a class="dropdown-item" href="mat_puz.php">MatchSticks Puzzles</a>
          <a class="dropdown-item" href="coin_puz.php">Coins Puzzles</a>
          <a class="dropdown-item" href="tan_puz.php">Tangrams</a>
          <a class="dropdown-item" href="ches_puz.php">Chess Checkers Puzzles</a>
          <a class="dropdown-item" href="check_puz.php">Checker Board Puzzles</a>
          <a class="dropdown-item" href="train_puz.php">Train Puzzles</a>

        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
  </div>
</nav>

<!-- Can only have one main element on each page and it should contain unique content, and should
not appear anywhere else on the site -->
	
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Vedic Maths Portal</h1>
      
      <p>Blurb for Vedic Maths Portal....</p>
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
			<?php echo $view->displayVideos($page, $videosPerPage, $maxVideos, $videos->getVideos()); ?>
		</div>
</div>

<footer class="container">
  <p>&copy; Vedic Maths Portal 2014-2019</p>
</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script type="text/javascript" src="js/bootstrap.js"></script> 																
  </body>
</html>





