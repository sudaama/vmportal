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
    <!--Navigation bar, generated using jQuery  see nav.html-->
    <div id="nav-placeholder"> 
    </div>
    <!--end of Navigation bar-->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Cubing Numbers</h1>
        <hr>
        <p class="subhead_tag"><strong>When any number is multiplied by the square of that number the result obtained is the cube of that number.</strong></p>
<p>The cube of a number is simply the <span class="emphasize_red">&quot;square of the number multiplied by the number itself&quot;</span>. </p>
<p>The symbol for cubed is <sup>3</sup> - To write 4 cubed we would write <strong>4<sup>3</sup></strong>
  This tells us how many times we need to multiply 4 by itself.
  4<sup>3</sup> means 4 x 4 x 4 = 64 ...... or 5<sup>3</sup> means 5 x 5 x 5 = 125
  They are called cube numbers because these numbers actually form cubes.
  In Vedic maths there are some very simple methods to find the cube of numbers and we will explore two methods in particular: Cubing by the <strong><em>Nikhilam Method</em></strong> and Cubing by the <strong><em>Anurupyena Method</em></strong>.</p>
  <a href="cubing_pdfs/cubing_of_numbers.pdf">Download Vedic Cubing of Numbers (PDF)</a>
      </div>
      <a name="videos"></a>
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





