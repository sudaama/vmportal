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
        <h1 class="display-3">Nikhilam Multiplication</h1>
        <hr>
        <p>Nikhilam Multiplication is specifically used when the numbers that are to be multiplied together are close to a particular base such as 10, 100, 1000 etc.</p>
        <p>The Nikhilam series of examples has been arranged into 5 separate sections and there are many short videos arranged in order of increasing complexity given below.</p>
          <p><a href="nikhilam_pdfs/Nikhilam_multiplication_pt1.pdf" target="_blank">General Theory/Explanation of Nikhilam Multiplication(Download PDF Part I)</a></p>
    <p><a href="nikhilam_pdfs/Nikhilam_multiplication_pt2.pdf" target="_blank">General Theory/Explanation of Nikhilam Multiplication(Download PDF Part II)</a></p>
        <p><a href="nikhilam_pdfs/Nikhilam_multiplication_pt3.pdf" target="_new">General Theory/Explanation of Nikhilam Multiplication(Download PDF Part III)</a></p>
        <p><a href="nikhilam_pdfs/Nikhilam_multiplication_pt4.pdf" target="_new">General Theory/Explanation of Nikhilam Multiplication(Download PDF Part IV)</a></p>
        <p><a href="nikhilam_pdfs/Nikhilam_multiplication_pt5.pdf" target="_new">General Theory/Explanation of Nikhilam Multiplication(Download PDF Part V)</a></p>
        
        <p><a class="btn btn-primary btn-lg" href="#videos" role="button">Watch Videos &raquo;</a></p>
      </div>
      <a name="videos"></a>
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
    <!-- nav bar generation...see nav.html -->
    <script> 
        $(function(){
            $("#nav-placeholder").load("nav.html");
      });
    </script>														
  </body>
</html>





