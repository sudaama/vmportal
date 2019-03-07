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
        <h1 class="display-3">Quotient and Remainder</h1>
      </div>
      <a name="videos"></a>
    
  <hr>
  <div id="quot_rem" class="container" >
  		<p>In Vedic maths, the Quotient is the integer/integral part of the result of dividing one quantity (number, quantity or expression), known as the Dividend, by another (the Divisor).</p>

<p>The Remainder is the amount "left over" when one quantity (number etc) cannot be exactly divided by another. Or the Remainder is difference between a given dividend and the largest multiple of the divisor that is less than the dividend.</p>

<p>If E = Dividend, D = Divisor, Q = Quotient and R = Remainder, we get the relationship:</p>

<p>E = (Q x D) + R</p>

<p>For example when 19 is divided by 3, the Quotient is 6 and the Remainder is 1</p>

</p>
<p>or when 47 is divided by 9 the Quotient is 5 and the Remainder is 2
  </p>
  
</p>
<p>To understand the importance of Quotient/Remainder pairs consider the following pattern:</p>

<ul>
  <li>38 divided by 5 gives Q = 7, R = 3</li>
  <li>39 divided by 5 gives Q = 7, R = 4</li>
  <li>40 divided by 5 gives Q = 8, R = 0</li>
  <li>41 divided by 5 gives Q = 8, R = 1</li>
  <li>42 divided by 5 gives Q = 8, R = 2</li>
  <li>43 divided by 5 gives Q = 8, R = 3</li>
  <li>44 divided by 5 gives Q = 8, R = 4</li>
  <li>45 divided by 5 gives Q = 9, R = 0 etc.</li>

</ul>
<p>We can observe than the Remainder is always less than the Divisor. However, in Vedic Maths we sometimes need to use a Remainder than is more than the Divisor for ease of calculation.</p>
<p>For example</p>

<p>53 divided by 7 could be represented by the following Quotient/Remainder pairs:</p>

<ul>
  <li>Q = 7, R = 4 or </li>
  <li>Q = 6, R = 11, </li>
  <li>Q = 5, R = 18, </li>
  <li>Q = 4, R = 25, </li>
  <li>Q = 3, R = 32 etc.</li>
</ul>
<p>N.B.<span class="emphasize_red"> In the very final answer, the Remainder can never be &gt;= Divisor!</span> </p>
<p>So, if we obtain a Remainder &gt;= Divisor we divide that Remainder by the Divisor and this newly obtained Quotient is added to the existing Quotient and the newly found Remainder becomes our Remainder proper.</p>
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





