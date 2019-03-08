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
    <div id="nav-placeholder"> </div>
    <!--end of Navigation bar-->
    <div class="jumbotron">
      <div class="container">
        <div id="about">
        <h1 class="display-3">About</h1><img class="img-fluid" src="images/db.jpeg" alt="picture of Dean, the maths tutor" title="Dean, the maths tutor"></div>

        <p class="emphasize">Hi, Im Dean, aka. Sudaama, a fully qualified and  experienced mathematics teacher/tutor with a particular interest in ancient mathematics, especially Vedic or Indian mathematics.</p>
        <p></p>
<p>I also have a keen interest in <a href="vedic_culture.html" title="ancient knowledge" target="_new"> Vedic culture</a>, <a href="ayurveda.html" title="Worlds oldest medical system" target="_new"> Ayurveda </a>(the ancient Indian medical system),<a href="jyotisha.html" title="Jyotisha....Ancient Indian Astrology" target="_new"> Jyotisha</a> (Indian astrology) and he enjoy learning to play musical instruments. </p>
<p>If you are interested in having personal maths tuition please visit <a href="http://www.mathsdoc.co.uk" target="_blank">mathsdoc.co.uk</a> for more information and booking details.</p>
 </div>
 </div>

  <hr>

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





