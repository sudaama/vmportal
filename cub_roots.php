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
        <h1 class="display-3">Cube Roots of Perfect Cubes</h1>
        <hr>
        <p>ube Roots can be calculated mainly through inspection (Vilokanam) and argumentation.</p>
      <p>To be able to perform cube roots, one must be familiar with the cubes of the first nine natural numbers. Thus, including the cube of zero, we have:</p>
<ul>
  <li>Cube of 1 is 0<sup>3</sup> = 0</li>
  <li>Cube of 1 is 1<sup>3</sup> = 1</li>
  <li>Cube of 2 is 2<sup>3</sup> = 8</li>
  <li>Cube of 3 is 3<sup>3</sup> = 27</li>
  <li>Cube of 4 is 4<sup>3</sup> = 64</li>
  <li>Cube of 5 is 5<sup>3</sup> = 125</li>
  <li>Cube of 6 is 6<sup>3</sup> = 216</li>
  <li>Cube of 7 is 7<sup>3</sup> = 343</li>
  <li>Cube of 8 is 8<sup>3</sup> = 512</li>
  <li>Cube of 9 is 9<sup>3</sup> = 729</li>
</ul>
<p>Details of the cube root method is given in the PDF File.</p>
<a href="perfectcube_roots_pdfs/cube_roots_of_perfcubes.pdf" target="_blank">Download Cube Root of Perfect Cubes (PDF)</a>
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





