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
    <link rel="stylesheet" type="text/css" href="css/sudStyle.css">
    <title>Vedic Maths Portal</title>
  </head>

  <body> 
    <!--Navigation bar, generated using jQuery  see nav.html-->
    <div id="nav-placeholder"> 
    </div>
    <!--end of Navigation bar-->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Duplex</h1>
        <hr>
      </div>
      <a name="videos"></a>
  
  <div id="nikmult" class="container" >
  		<p class="pad_top2"><span class="subhead_tag">The Duplex of a number, also known as the Dvandva Yoga of a number, helps us to calculate Squares and Square Roots.</span></p>

<h3>General Method of finding the Duplex of a number</h3>
<p><span class="emphasize">To find the Duplex of a number you have to keep finding double the product of digits which are equidistant until you reach the centre of the number.</span><span class="emphasize_orange">
  
  If, when you reach the centre there is only one digit, take its square, then.....add all the products together and the result is the Duplex of that number.
  
  So, by doubling the first and last digit of the number, then the second and the last-but-one, then the third and the last-but-two followed by the fourth and the last-but-three and so on.
  
  Eventually, you will arrive at the centre and</span> <span class="emphasize">adding up all of the products</span> <span class="emphasize_orange">will give the Duplex of the number.</span></p>

<h3>Single digit number</h3>
<p>For a single digit number, "a", the Duplex, <span class="emphasize">D</span>(a), is simply the <span class="emphasize_lightblue">square of the number</span>. Thus <span class="emphasize">D</span>(a) = a<sup class="super">2</sup>
</p>
<ul>
  <li><span class="emphasize">Duplex</span> of 2, <span class="emphasize">D</span>(2) = 2<sup class="super">2</sup> = <span class="emphasize">4</span></li>
  <li><span class="emphasize">Duplex </span>of 6, <span class="emphasize">D</span>(6) = 6<sup class="super">2</sup> = <span class="emphasize">36</span></li>
  <li><span class="emphasize">Duplex </span>of 8, <span class="emphasize">D</span>(8) = 8<sup class="super">2</sup> = <span class="emphasize">64</span> etc.</li>
</ul>
<h3>Two Digit Number</h3>
<p><span class="emphasize_orange">For a two digit number "ab", the Duplex,</span> <span class="emphasize">D(ab)</span>, is <span class="emphasize_lightblue">twice the product of these two digits</span>. Thus <span class="emphasize">D</span>(ab) = 2ab
</p>
<ul>
  <li><span class="emphasize">Duplex</span> of 32, <span class="emphasize">D</span>(32) = 2 x (3 x 2) = <span class="emphasize">12</span></li>
  <li><span class="emphasize">Duplex</span> of 57, <span class="emphasize">D</span>(57) = 2 x (5 x 7) = <span class="emphasize">70</span></li>
  <li><span class="emphasize">Duplex</span> of 89, <span class="emphasize">D</span>(89) = 2 x (8 x 9) = <span class="emphasize">144 </span>etc.</li>
</ul>
<h3>Three Digit Number</h3>
<p><span class="emphasize_orange">For a three digit number "abc", the Duplex,</span> <span class="emphasize">D(abc)</span><span class="emphasize_orange">, is obtained by adding</span> <span class="emphasize_lightblue">twice the cross product of the 1st &amp; 3rd digits and the square of the middle digit</span>. Thus <span class="emphasize_lightblue">D</span>(abc) = 2ac + b<sup class="super">2</sup>
</p>
<p><ul>
  <li><span class="emphasize">Duplex</span> of 213, <span class="emphasize">D</span>(213) = 2 x (2 x 3) + 1<sup class="super">2</sup> = 12 + 1 = <span class="emphasize">13</span></li>
  <li><span class="emphasize">Duplex</span> of 456, <span class="emphasize">D</span>(456) = 2 x (4 x 6) + 5<sup class="super">2</sup> = 48 + 5 = <span class="emphasize">53</span></li>
  <li><span class="emphasize">Duplex </span>of 879, <span class="emphasize">D</span>(879) = 2 x (8 x 9) + 7<sup class="super">2</sup> = 144 + 49 = <span class="emphasize">193</span> etc.</li>
</ul></p>
<h3>Four Digit Number</h3>
<p><span class="emphasize_orange">For a four digit number "abcd" the Duplex, </span><span class="emphasize">D(abcd)</span><span class="emphasize_orange">, is obtained by adding</span><span class="emphasize_lightblue"> twice the cross product of the 1st &amp; 4th digits and twice the cross product of the 2nd &amp; 3rd digits</span>. Thus <span class="emphasize">D</span>(abcd) = 2ad + 2bc
</p>
<ul>
  <li><span class="emphasize">Duplex</span> of 4632, <span class="emphasize">D</span>(4632) = 2 x (4 x 2) + 2 x (6 x 3) = 16 + 36 = <span class="emphasize">52</span></li>
  <li><span class="emphasize">Duplex</span> of 7049, <span class="emphasize">D</span>(7049) = 2 x (7 x 9) + 2 x (0 x 4) = 126 + 0 = <span class="emphasize">126</span></li>
  <li><span class="emphasize">Duplex</span> of 9<span class="rekhank">7</span>8<span class="rekhank">9</span>, <span class="emphasize">D</span>(9<span class="rekhank">7</span>8<span class="rekhank">9</span>) = 2 x (9 x <span class="rekhank">9</span>) + 2 x (<span class="rekhank">7</span> x 8) = - 162 + -112 = <span class="emphasize">-274</span> etc.</li>
</ul>
<h3>Five Digit Number</h3>
<p><span class="emphasize_orange">For a five digit number "abcde", the Duplex,</span> <span class="emphasize">D(abcde)</span>, is obtained by adding together
  
  i) <span class="emphasize_lightblue">twice the product of the 1st and 5th digit</span>,
  
  ii) <span class="emphasize_lightblue">twice the product of 2nd and 4th digits</span> and, finally....
  
  iii) <span class="emphasize_lightblue">the square of the third digit</span>. Thus <span class="emphasize">D</span>(abcde) = 2ae + 2bd + c<sup class="super">2</sup>.
</p>
<ul>
  <li><span class="emphasize">Duplex</span> of 42361, <span class="emphasize">D</span>(42361) = 2 x (4 x 1) + 2 x (2 x 6) + 3<sup class="super">2</sup> = 8 + 24 + 9 = <span class="emphasize">41</span></li>
  <li><span class="emphasize">Duplex</span> of 75289, <span class="emphasize">D</span>(75289) = 2 x (7 x 9) + 2 x (5 x 8) + 2<sup class="super">2</sup> = 126 + 80 + 4 = <span class="emphasize">210</span></li>
  <li><span class="emphasize">Duplex</span> of 5<span class="rekhank">2</span>4<span class="rekhank">6</span>1, <span class="emphasize">D</span>(5<span class="rekhank">2</span>4<span class="rekhank">6</span>1) = 2 x (5 x 1) + 2 x (<span class="rekhank">2</span> x <span class="rekhank">6</span>) + 4<sup class="super">2</sup> = 10 + 24 + 16 = <span class="emphasize">50</span> etc.</li>
</ul>
<p class="emphasize_orange">In this way, following the Duplex of any number can be found directly. </p>
<p class="emphasize">**Please note that:</p>

<ul>
  <li>The Duplex of a number is the same when the number is reversed from front to back</li>
  <li>The Duplex of an n-digit number is always even when n is even</li>
  <li>The Duplex of an n-digit number is always odd when both n and the middle digit of the number are odd</li>
</ul>

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





