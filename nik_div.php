<?php
require './view/view.php';
require './model/videos5.php';

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
    <!--Navigation bar, generated using jQuery  see nav.html-->
    <div id="nav-placeholder"> 
    </div>
    <!--end of Navigation bar-->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Nikhilam Division</h1>
        <hr>
        <p class="subhead_tag"><strong>The Dhwajank method of division is similar to the conventional method except that subtraction is done orally and the <a title="Quotient and Remainder" href="http://localhost/vmportal/fundamentals/quotient-and-remainder/">Quotient(Q)</a> and <a title="Quotient and Remainder" href="http://localhost/vmportal/fundamentals/quotient-and-remainder/">Remainder(R)</a> are formed side by side.</strong></p>
<p class="subhead_tag"><strong>For Nikhilam Division we can specifically use the Nikhilam sutra for division when the divisor is near to but less than the base.</strong></p>
<p>In Nikhilam Division we use the Vedic Maths sutra number 2: Nikhilam Navatascharamam Dashatah (All from 9 last from 10). The special thing about using this method is that <span class="emphasize_red">we don't actually divide by the dividend at all!</span> The answer is obtained by repeated digit to digit multiplication followed by addition. The Quotient(Q)and the Remainder(R) are obtained side by side.</p>

<p>First of all we write out the Dividend and Divisor as in the conventional method. Then we apply the Nikhilam sutra to get the complements (from 10) of the divisor and these complement digits are written just below the Divisor. This number is known as the Modified Divisor (MD). </p>
<p>For example, </p>
<p>if the<span class="emphasizeblack"> Divisor is 8</span>, its <span class="emphasizeblack">MD is 2; </p>
<p>if the<span class="emphasizeblack"> Divisor is 7</span>, its <span class="emphasizeblack">MD is 3; </p>
<p>if the <span class="emphasizeblack">Divisor is 86</span>, the <span class="emphasizeblack">MD is 14; </p>
<p>if the <span class="emphasizeblack">Divisor is 798</span>, its <span class="emphasizeblack">MD is 202 and so on....</p>
<p>Once we have the MD we can proceed further. Check out the videos for step by step examples showing the method of using Nikhilam sutra for Division.  </p>
        
        <p><a class="btn btn-primary btn-lg" href="#videos" role="button">Watch Videos &raquo;</a></p>
      </div>
      <a name="videos"></a>
    </div>
  <hr>
 	<h2 class="text-center">Nikhilam Division Videos</h2>

  <div id="nik_div" class="container" >
  		<div>
			<a class="pages" href="nik_div.php?page=<?php echo $prev; ?>#videos">&lt;prev video set</a>&nbsp;|&nbsp;
			<a class="pages" href="nik_div.php?page=<?php echo $next; ?>#videos">next video set&gt;</a>
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





