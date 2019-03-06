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
        <h1 class="display-3">Place Value</h1>
        <p>Blurb for Place Value....</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        
        <p><a class="btn btn-primary btn-lg" href="#videos" role="button">Learn More &raquo;</a></p>
      </div>
      <a name="videos"></a>
    </div>
  <hr>
 	<h2 class="text-center">Place Value</h2>

  <div id="place_value" class="container" >
  		<div class="wrapper">
        <div><span class="pad_left1">
         <a name="videos"></a>
          <h2>Place value Notation</h2>
          <p class="subhead_tag"><strong>Place value Notation</strong></p>

<p>Place value is a very simple but ingenious way of representing numbers and it is a concept that has its roots in antiquity. The ubiquitous decimal system, which is now taken for granted by people everywhere, is today by far the most popular and widespread place value number system in practical use.
<strong><em>Place Value is the value of the place or position of a digit in a number</em></strong>

<strong>base-10, Decimal System</strong></p>
<p>In the now familar, versatile, ancient base-10 decimal system, each place has a value of 10 times the place to its right and we are somewhat familiar with this idea through elementary mathematical education.</p>

<p>So, to be more specific: </p>
<ul>
<li>The first position represents 10<sup>0</sup> or 1.</li>

<li>The second position represents 10<sup>1</sup> or 10.</li>

<li>The third position represents 10<sup>2</sup> or 10 x 10 or 100.</li>

<li>The fourth position represents 10<sup>3</sup> or 10 x 10 x 10 or 1000 etc.</li>
</ul>
<p>Take, for For example, the number 8465</p>
<ul>
  <li>5 is present in the Units place or position and has a value of 5</li>
  <li>6 is present in the Tens place or position and has a value of 60</li>
  <li>4 is present in the Hundreds place or position and has a value of 400</li>
  <li>8 is present in the Thousands place or position and has a value of 8000</li>
</ul>
<p>Hence 8465 = 8000 + 400 + 60 + 5</p>

<p>Fractional values are indicated by a separator, which is usually a full stop (or period) but is commonly known as a decimal point.</p>
        </span>
          <p> The digits to the right of the decimal point are multiplied by 10 raised to a negative power.

So, to be more specific, the first position to the right of the decimal point is 10<sup>-1</sup> or 1/10 or 0.1.

The second position to the right of the decimal point is 10<sup>-2</sup> or 1/100 or 0.01.

The third postion to the right of the decimal point is 10<sup>-3</sup> or 1/1000 or 0.001 and so on for each successive position.

So, for example, in the number 0.897 </p>
<ul>
  <li>8 is present in the Tenths place or position and has a value of 8 x 10<sup>-1</sup> or 8/10 or 0.8</li>
  <li>9 is present in the Hundreths place or position and has a value of 9 x 10<sup>-2</sup> or 9/100 or 0.09</li>
  <li>7 is present in the Thousandths place or position and has a value of 7 x 10<sup>-3</sup> or 7/1000 or 0.007</li>
</ul>
<p>Hence 0.897 = 0.8 + 0.09 + 0.007</p>
</div>
        
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





