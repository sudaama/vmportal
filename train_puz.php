<?php
require './modelpuzzles/trains.php';
require './viewpuzzles/viewpuzzles.php';

$viewPuzzles = new viewPuzzles();
$puzzles = new puzzles();

// titles....from file puzzles.php
$titles = $puzzles->getTitles();

$maxPuzzles = count($titles);

// use the "ternary" operator to check if page param is set
$page = (isset($_GET['page'])) ? (int) $_GET['page'] : 0;
// use "ternary" operator to check to see if page is 0
$prev = ($page == 0) ? 0 : $page - 1;
$next = $page + 1;
$puzzlesPerPage = 3;
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
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <title>Vedic Maths Portal</title>
  </head>

  <body> 
    <!--Navigation bar, generated using jQuery  see nav.html-->
    <div id="nav-placeholder"> 
    </div>
    <!--end of Navigation bar-->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Train Puzzles</h1>
        <hr>
        <p>In this section you will find a collection of different 'Train Puzzles'. A Print 'n' Play PDF version of each puzzle is available. Have Fun!</p>
        
        <p><a class="btn btn-primary btn-lg" href="#puzzles" role="button">Try Puzzles &raquo;</a></p>
      </div>
      <a name="puzzles"></a>
    </div>
  <hr>
 	<h2 class="text-center">Checkerboard Puzzles Puzzles</h2>

  <div id="train_puz" class="container" >
  		<div>
			<a class="pages" href="train_puz.php?page=<?php echo $prev; ?>#puzzles">&lt;prev puzzle set</a>&nbsp;|&nbsp;
			<a class="pages" href="train_puz.php?page=<?php echo $next; ?>#puzzles">next puzzle set&gt;</a>
        	<em class="pages_index"><strong><?php echo "Puzzle Set: ";  echo $page + 1;?></strong></em>
      </div>
 	 	  <div class="card-deck mb-3 text-center">      
        <?php echo $viewPuzzles-> displayPuzzles($page, $puzzlesPerPage, $maxPuzzles, $puzzles->getPuzzles()); ?>
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
    <!-- nav bar generation...see nav.html -->
    <script> 
        $(function(){
            $("#nav-placeholder").load("nav.html");
      });
    </script>														
  </body>
</html>





