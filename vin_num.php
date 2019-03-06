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
        <h1 class="display-3">Vinculum Numbers</h1>
        <p>Blurb for Vinculum Numbers....</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        
        <p><a class="btn btn-primary btn-lg" href="#videos" role="button">Learn More &raquo;</a></p>
      </div>
      <a name="videos"></a>
    </div>
  <hr>
 	<h2 class="text-center">Vinculum Numbers </h2>

  <div id="vin_num" class="container" >
  		<p><span class="subhead_tag"><strong>Modern day mathematics uses numbers in which the digits  are all either positive or negative. However, Vedic mathematics sometimes makes use of numbers which may contain both postive and negative digits. These numbers are known as vinculum numbers. </strong></span></p>
          <p class="emphasizeblack">The vinculum number is obtained by converting the digits that are greater than 5 (in the number) to digits less than 5<strong>.</strong></p>
          <p><span class="subhead_tag"><strong> After the conversion, all the basic arithmetic operations such as addition, subtraction, multiplication etc are carried out with relative ease using the converted </strong></span><span class="emphasize_red"><strong>(vinculum)</strong></span><span class="subhead_tag"><strong> number. </strong></span></p>
      
          <p>In a vinculum number, a bar on the top of the digit represents a negative digit and these negative digits are also known as a <a href="basic_terms_laws.php#rekhank" title = "rekhank = negative digit">rekhank digits</a> or <a href="basic_terms_laws.php#rekhank" title = "bar digit = negative digit">bar digits.</a></p>
          <p>The videos below show how to convert from a common number to a vinculum number and vice versa, as well as how to carry out basic operations (addition and subtraction) using the vinculum process.</p>
          <p><a href="pdfz/vinculum.pdf" target="_blank">Conversion of a common number into a vinculum number <span class="emphasize_red">(download PDF)</span></a></p>
          <p><a href="pdfz/vinculum.pdf" target="_blank">Conversion of a vinculum number into a common number <span class="emphasize_red">(download PDF)</span></a></p>
           <p><a href="numberCruncher2.html">Conversion of a Mixed Number to Ordinary Number to Vinculum Number <span class="emphasize_red">(APPLICATION)</span></a></p>
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





