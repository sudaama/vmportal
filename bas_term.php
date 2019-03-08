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
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/sudStyle.css">
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
        <h1 class="display-3">Basic Laws and Terms</h1>
        <hr>
        <p>Vedic mathematics has its own peculiar set of mathematical terms and ideas in addition to using standard/conventional maths laws. The basic terms and laws are given below.</p>
      </div>
    </div>
  <div id="basic_terms" class="container" >
  		 <div id="accordion">
    <h3>Ekadhika</h3>
<div class="tooltipStuff" id="tooltip1">
    <p><span class="emphasize_lightblue">Ekadhika means </span><span class="emphasize_orange"><span class="emphasize_red">"one more"
    </span> </p>
    <p><span class="emphasize">eg(1)</span> Ekadhika of <span class="emphasize_orange">5</span> is 5 + 1 = <span class="emphasize">6</span></p>
    <p><span class="emphasize">eg(2)</span> Ekadhika of <span class="emphasize_orange">42</span> is 42 + 1 = <span class="emphasize">43</span></p>
  <p><span class="emphasize">eg(3)</span> Ekadhika of <span class="emphasize_orange">134</span> is 134 + 1 = <span class="emphasize">135</span></p>
 </div>
 
  <h3>Ekanyuna</h3>
  <div class="tooltipStuff" id="tooltip2">
    <p><span class="emphasize_lightblue">Ekanyuna means </span><span class="emphasize_orange"><span class="emphasize_red">"one less"</span>
    </p>
    <p><span class="emphasize">eg(1)</span> Ekanyuna of <span class="emphasize_orange">8</span> is 8 - 1 = <span class="emphasize">7</span></p>
  <p><span class="emphasize">eg(2)</span> Ekanyuna of <span class="emphasize_orange">15</span> is 15 - 1 = <span class="emphasize">14</span></p>
  <p><span class="emphasize">eg(3)</span> Ekanyuna of <span class="emphasize_orange">206</span> is 206 - 1 = <span class="emphasize">205</span></p>
</div>

  <h3>Purak</h3>
<div class="tooltipStuff" id="tooltip3">
<span class="emphasize_lightblue">Purak means </span><span class="emphasize_red">"complement"
</span>  
<p><span class="emphasize">For example</span>, we know that 2 + 8 is 10. </p>
  <p>So we can say, 2 and 8 are <span class="emphasize">complements</span> or <span class="emphasize">puraks</span> of each other from 10.</p>
  <p>Or, take another example, we know that 4 + 5 is 9. </p>
  <p>So we say, 4 and 5 are <span class="emphasize">complements</span> or <span class="emphasize">puraks</span> of each other from 9.</p>
  <p>We very often come across the puraks of 10 and 9 in Vedic Mathematics </p>
</div>

  <h3>Rekhank</h3>
<div class="tooltipStuff" id="tooltip4">
<span class="emphasize_lightblue">Rekhank means a</span><span class="emphasize_red"> negative (-ve) digit </span><span class="emphasize_lightblue">(written with a bar on top)</span>
<p><span class="emphasize">For example</span> negative 6 (or minus 6) is written <span class="rekhank">6</span> and is called <span class="emphasize">rekhank 6</span> (or <span class="emphasize">bar six</span>)</p>
  <p> Negative 8 (minus 8) is written <span class="rekhank">8</span> and is called <span class="emphasize">rekhank 8</span> (or <span class="emphasize">bar eight</span>) </p>
  <p>Negative 7 (minus 7) is written <span class="rekhank">7</span> and is called <span class="emphasize">rekhank 7</span> (or <span class="emphasize">bar seven</span>) and so on........</p>
</div>

  <h3>Addition (part I)</h3>
<div class="tooltipStuff" id="tooltip5">
<span class="emphasize_lightblue">Addition of two </span><span class="emphasize">positive (+ve)</span><span class="emphasize_lightblue"> digits </span><span class="emphasize">OR</span><span class="emphasize_lightblue"> Addition of two </span><span class="emphasize_red">negative (-ve)</span><span class="emphasize_lightblue"> digits</span>

<p>Addition of two positive (+ve) digits <span class="emphasize_orange">(standard conventional mathematical rules apply)</span></p>
  <p><span class="emphasize">eg(1)</span> 4 + 5 = +9</p>
  <p><span class="emphasize">eg(2)</span> 7 + 6 = +13</p>
  <p>Addition of  two negative (-ve) digits <span class="emphasize_orange">(standard conventional mathematical rules apply)</span></p>
  <p><span class="emphasize">eg(1)</span> (-3) + (-5) = <span class="rekhank">3</span>+ <span class="rekhank">5</span> = <span class="rekhank">8</span> = - 8 </p>
  <p><span class="emphasize">eg(2)</span> (-7) + (-9) = <span class="rekhank">7</span>+ <span class="rekhank">9</span> = <span class="rekhank">16</span> = -16 </p>

</div>

  <h3>Addition (part II)</h3>
<div class="tooltipStuff" id="toolti6">
<span class="emphasize_lightblue">Addition of one </span><span class="emphasize">positive(+ve)</span><span class="emphasize_lightblue"> digit and one </span><span class="emphasize_red">negative(-ve)</span><span class="emphasize_lightblue"> digit</span>

<p>Addition of  one positive (+ve) digit and one negative digit (-ve)     <span class="emphasize_orange">(standard conventional mathematical rules apply)</span></p>
  <p><span class="emphasize">eg(1)</span> 4 + <span class="rekhank">3</span> = 4 - 3 = 1</p>
  <p><span class="emphasize">eg(2)</span> <span class="rekhank">5</span> + 3 = - 5 + 3 = - 2  or <span class="rekhank">2</span></p>

</div>

  <h3>Subtraction (part I)</h3>
<div class="tooltipStuff" id="tooltip7">
<span class="emphasize_lightblue">Subtraction of a </span><span class="emphasize_red">rekhank (-ve)</span><span class="emphasize_lightblue"> from a </span><span class="emphasize">positive(+ve)</span><span class="emphasize_lightblue"> digit</span>

<p>Subtraction of a rekhank from a positive digit (+ve) </p>
  <p><span class="emphasize">eg(1)</span> 5 - <span class="rekhank">3</span> = 5 - ( - 3) = 5 + 3 = 8</p>
  <p><span class="emphasize">eg(2)</span> 2 - <span class="rekhank">7</span> = 2 - (- 7) = 2 + 7  = 9</p>
</div>

  <h3>Subtraction (part II)</h3>
<div class="tooltipStuff" id="tooltip8">
<span class="emphasize_lightblue">Subtraction of a </span><span class="emphasize">positive(+ve)</span><span class="emphasize_lightblue"> digit from a </span><span class="emphasize_red">rekhank(-ve)
</span>

<p>Subtraction of a positive (+ve) digit from a rekhank:</p>
  <p><span class="emphasize">eg(1)</span> <span class="rekhank">3</span> - 8 = <span class="rekhank">3</span> + <span class="rekhank">8</span> = <span class="rekhank">11</span> or -11 </p>
  <p><span class="emphasize">eg(2)</span> <span class="rekhank">2</span> - 7 = <span class="rekhank">2</span> + <span class="rekhank">7</span> = <span class="rekhank">9</span> or -9</p>
</div>

  <h3>Multiplication (part I)</h3>
<div class="tooltipStuff" id="tooltip9">
<span class="emphasize_lightblue">The product of two </span><span class="emphasize">positive(+ve)</span><span class="emphasize_lightblue"> digits </span><span class="emphasize">OR</span><span class="emphasize_lightblue"> two</span><span class="emphasize_red"> negative(-ve)</span><span class="emphasize_lightblue"> digits(rekhanks)........always positive result</span>

<p>The product of two positive (+ve) digits <span class="emphasize">OR</span> two negative (-ve) digits (rekhanks) is always positive</p>
  <p><span class="emphasize">eg(1)</span> 3 x 7 = 21................................ eg(2) 6 x 4 = 24</p>
  <p><span class="emphasize">eg(3)</span> <span class="rekhank">8</span> x <span class="rekhank">7</span> = 56............................eg(4) <span class="rekhank">3</span> x <span class="rekhank">9</span> = 27</p>
</div>

  <h3>Multiplication (part II)</h3>
<div class="tooltipStuff" id="tooltip10">
<span class="emphasize_lightblue">The product of one </span><span class="emphasize">positive(+ve)</span><span class="emphasize_lightblue"> digit and one </span><span class="emphasize_red">rekhank(-ve)
</span>
<p>The product of one positive (+ve) digit and one negative (-ve) digit (rekhank) is always negative</p>
  <p><span class="emphasize">eg(1)</span> 5 x <span class="rekhank">5</span> = - 25 or <span class="rekhank">25</span>................................ <span class="emphasize">eg(2)</span> <span class="rekhank">2</span> x 4 = <span class="rekhank">8</span></p>
</div>

  <h3>Division (Part I)</h3>
<div class="tooltipStuff" id="tooltip11">
<span class="emphasize_lightblue">The division of two </span><span class="emphasize">positive(+ve)</span><span class="emphasize_lightblue"> digits </span><span class="emphasize">OR</span><span class="emphasize_lightblue"> two </span><span class="emphasize_red">negative(-ve)</span><span class="emphasize_lightblue"> digits(rekhanks)........always positive result</span>

<p>The division of two positive (+ve) digits <span class="emphasize">OR</span> two negative (-ve) digits (rekhanks) is always positive</p>
    <p><span class="emphasize">eg(1)</span> 8 &#247 2 = 4................................ <span class="emphasize">eg(2)</span> 6 &#247 3 = 2</p>
    <p><span class="emphasize">eg(3)</span> <span class="rekhank">8</span> &#247 <span class="rekhank">4</span> = 2................................<span class="emphasize">eg(4)</span> <span class="rekhank">9</span>&#247<span class="rekhank">3</span>= 3</p>
  
  
</div>

  <h3>Division (Part II)</h3>
<div class="tooltipStuff" id="tooltip12">

<span class="emphasize_lightblue">The division of one </span><span class="emphasize">positive(+ve)</span><span class="emphasize_lightblue"> digit by one </span><span class="emphasize_red">rekhank(-ve) </span><span class="emphasize">OR</span><span class="emphasize_lightblue"> vice versa........always negative(-ve) result</span>

<p><span class="emphasize">eg(1)</span> 8 &#247 <span class="rekhank">2</span> = <span class="rekhank">4</span>................................ <span class="emphasize">eg(2)</span> 6 &#247 <span class="rekhank">3</span> = <span class="rekhank">2</span></p>
  <p><span class="emphasize">eg(3)</span> <span class="rekhank">8</span> &#247 4 = <span class="rekhank">2</span>.................................<span class="emphasize">eg(4)</span> <span class="rekhank">9 </span>&#247 3 = <span class="rekhank">3</span></p>
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
    
    <script>
      $(function() 
        {
          $("#accordion").accordion( {  collapsible: true , heightStyle: "content" });
        });
    </script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>												
  </body>
</html>





