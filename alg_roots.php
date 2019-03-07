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
        <h1 class="display-3">Algebraic Square and Square Roots</h1>
        <hr>
        <p class="subhead_tag"><strong>In this section we are going to deal with the square and square root of an algebraic expression. </strong></p>
          <h2>Algebraic Squaring</h2>
        <hr>
          <p>In this section, we will explore the duplex method of squaring an algebraic expression which is very similar to duplex method of squaring numbers.  In a similar way to numerical squaring, the duplex values of a number of terms of an algebraic expression can be conducted considering each term of the expression equivalent to each digit of a number whose duplex we wish to find. Here is brief outline of how to find the <a href="duplex.php">duplex</a> of various algebraic terms </p>
<ul>
  <li>
    <p class="pad_left1"><strong>Duplex of a single term</strong> is simply the "<em>square of that term</em>".</p>
    </li>
</ul>
          <p class="pad_left1">For instance: </p>
<ul>
  <li>
    <p class="pad_left1">the Duplex of k or D(k) = k<sup class="super">2</sup> , </p>
    </li>
  <li>
    <p class="pad_left1">D(y) = y<sup class="super">2</sup>, </p>
    </li>
  <li>
    <p class="pad_left1">D(g) = g<sup class="super">2</sup>...etc.</p>
    </li>
  <li>
    <p class="pad_left1"><strong>Duplex of two terms</strong> is simply "<em>twice the product of those terms</em>".</p>
    </li>
</ul>
<p class="pad_left1">For instance: </p>
<ul>
  <li>
    <p class="pad_left1">D(a + b) = 2ab, </p>
    </li>
  <li>
    <p class="pad_left1">D(3d + 4t) = 24dt, </p>
    </li>
  <li>
    <p class="pad_left1">D(5r - 6s) = -30rs....etc.</p>
    </li>
  <li>
    <p class="pad_left1"><strong>Duplex of three terms</strong> is simply "<em>twice the product of the first and third term plus the square of the middle term</em>".</p>
    </li>
</ul>
<p class="pad_left1">For instance:</p>
<ul>
  <li>
    <p class="pad_left1"> D(2a + 4b + 3c) = 12ac + 16b<sup class="super">2</sup>, </p>
    </li>
  <li>
    <p class="pad_left1">D(5d - 6j - 7m) = -70dm + 36j<sup class="super">2</sup>, </p>
    </li>
  <li>
    <p class="pad_left1">D(-4v +5t -2u) = 16uv +25t<sup class="super">2</sup></p>
    </li>
  <li>
    <p class="pad_left1"><strong>Duplex of four terms</strong> is simply "<em>twice the product of the first and fourth terms plus product of the second and third terms</em>".</p>
    </li>
</ul>
<p class="pad_left1">For instance: </p>
<ul>
  <li>
    <p class="pad_left1">D(a + b + c + d) = 2ad + 2bc, </p>
    </li>
  <li>
    <p class="pad_left1">D(5e + 6f -3l - 7x) = -70ex -36fl, </p>
    </li>
  <li>
    <p class="pad_left1">D(3r + 2g - 9b - 4v) = -24rv -36bg</p>
    </li>
</ul>
<p class="pad_left1">Generally speaking, then, to find the Duplex of an expression, we add together the product of:
</p>
 <ul>
   <li>
     <p class="pad_left1">~ Twice the first and last terms</p>
     </li>
   <li>
     <p class="pad_left1">~ Twice the second and last but one terms</p>
     </li>
   <li>
     <p class="pad_left1">~ Twice the third and last but third terms and so on....until we reach the centre</p>
     </li>
   <li>
     <p class="pad_left1">~ If there is a single term remaining in the centre we then take its square and add that to the Duplexes found earlier.</p>
     </li>
   <li>
     <p class="pad_left1">~ If the expression is composed of an odd number of terms, a single term will be left in the centre</p>
     </li>
   <li>
     <p class="pad_left1">If the expression is composed of an even number of terms these terms will be paired.</p>
     </li>
</ul>
 <p class="pad_left1">So, now that we know how to find the Duplex of an expression we out the square of an algebraic expression. <strong>Squaring Algebraic Expressions using Duplex Method</strong>
 </p>
 <ol>
   <li>
     <p class="pad_left1">First, find the Duplex of the first term then</p>
     </li>
   <li>
     <p class="pad_left1">Second, find the Duplex of the first and second terms then</p>
     </li>
   <li>
     <p class="pad_left1">Third, find the Duplex of the first, second and third terms and so on....until all terms are included</p>
     </li>
   <li>
     <p class="pad_left1">Fourth, Omit the extreme-left term and find the Duplex of the remaining terms</p>
     </li>
   <li>
     <p class="pad_left1">Fifth, again omit the extreme-left term, and find the Duplex of the remaining terms</p>
     </li>
   <li>
     <p class="pad_left1">Sixth, keep omitting extreme-left terms and finding the Duplex of remaining terms until, eventually, only one term remains on the extreme-right. Carry out the Duplex on this last term and that will be the last remaining Duplex part of  the calculation.</p>
     </li>
</ol>
 <p class="pad_left1">This procedure is the same as in the case of squaring numbers
   
   Here are some examples: (Note: 
   D() means Duplex) </p>
 
 <p class="emphasizeblack"><strong>Example 1: (a + b + c + d)<sup class="super">2</sup></strong> </p>
 <p>(a + b + c + d)<sup class="super">2</sup> = D(a)/D(a + b)/D(a + b + c)/D(a + b + c + d)/D(b + c + d)/D(c + d)/D(d)</p>
 <p>= a<sup class="super">2 </sup>/2ab/2ac + b<sup class="super">2</sup>/2ad + 2bc/2bd + c<sup class="super">2</sup>/2cd/d<sup class="super">2</sup> </p>
<p class="emphasizeblack"><strong>= a<sup class="super">2</sup> + 2ab + 2ac + b<sup class="super">2</sup> + 2ad + 2bc + 2bd + c<sup class="super">2</sup> + 2cd + d<sup class="super">2</sup></strong></p>


<p><span class="emphasizeblack"><strong>Example 2: (a + 2b + 3c + 4d)<sup class="super">2</sup></strong></span> </p>
<p>(a + 2b + 3c + 4d)<sup class="super">2</sup> = D(a)/D(a + 2b)/D(a+ 2b + 3c)/D(a + 2b + 3c + 4d)/D(2b + 3c + 4d)/D(3c + 4d)/D(4d)  </p>
<p>= a<sup class="super">2</sup>/4ab/6ac + 4b<sup class="super">2</sup>/8ad + 12bc/16bd + 9c<sup class="super">2</sup>/24cd/16d<sup class="super">2</sup>  </p>
<p class="emphasizeblack"><strong>= a<sup class="super">2</sup> + 4ab + 6ac + 4b<sup class="super">2</sup> + 8ad + 12bc + 16bd + 9c<sup class="super">2</sup> + 24cd + 16d<sup class="super">2</sup></strong>  </p>

<p class="emphasizeblack"><strong>Example 3: (3m<sup class="super" >2 </sup>- 4n  - 5p)<sup class="super">2</sup></strong>  </p>
<p>(3m<sup class="super">2</sup> - 4n  - 5p)<sup class="super">2</sup>  = D(3m<sup class="super">2</sup>)/D( 3m<sup class="super">2</sup> - 4n)/D( 3m<sup class="super">2</sup> - 4n -5p)/D(-4n - 5p)/D(-5p)  </p>
<p>= 9m<sup>4</sup>/-24m<sup>2</sup>n/-30m<sup>2</sup>p + 16n<sup class="super">2</sup>/40np/25p<sup class="super">2</sup>  </p>
<p class="emphasizeblack"><strong>= 9m<sup class="super">4</sup> -24m<sup class="super">2</sup>n -30m<sup class="super">2</sup>p +16n<sup class="super">2</sup> + 40np + 25p<sup class="super">2</sup></strong>  </p>

<p class="emphasizeblack"><b>Example 4: (2y<sup class="super">3</sup> - y<sup class="super">2</sup> + 2y - 4)<sup class="super">2</sup></b>  </p>
<p>(2y<sup class="super">3</sup> - y<sup class="super">2</sup> + 2y - 4)<sup class="super">2 </sup>= D( 2y<sup class="super">3</sup>)/D( 2y<sup class="super">3</sup> - y<sup class="super">2</sup>)/D( 2y<sup class="super">3</sup> - y<sup class="super">2</sup> + 2y)/D( 2y<sup class="super">3</sup> - y<sup class="super">2</sup> + 2y - 4)/D (- y<sup class="super" >2</sup> + 2y - 4)/D( 2y - 4)/D(- 4)  </p>
<p>= 4y<sup class="super">6 </sup>/- 4y<sup class="super">5</sup> / 8y<sup class="super">4</sup> + y<sup class="super">4</sup>/-16y<sup class="super">3</sup> - 4y<sup class="super">3</sup>/8y<sup class="super">2</sup> + 4y<sup class="super">2</sup>/- 16y/16
  
  = 4y<sup class="super">6 </sup>- 4y<sup class="super">5</sup> + 8y<sup class="super">4</sup> +y<sup class="super">4</sup> -16y<sup class="super">3</sup>- 4y<sup class="super">3</sup>+ 8y<sup class="super">2</sup> + 4y<sup class="super">2</sup> -16y +16  </p>
<p class="emphasizeblack"><strong>= 4y<sup class="super">6 </sup>- 4y<sup class="super">5</sup> + 9y<sup class="super">4</sup> - 20y<sup class="super">3</sup> + 12y<sup class="super">2</sup> - 16y+16</strong></p>
        </span>
 
 <h2>Square Root of Algebraic Expressions</h2>
<p>Once again, to find the square root of an algebraic expression using the Duplex Method, a similar procedure as in the Numerical Method is carried out. If the square root of an algebraic expression happens to be a perfect square then we get a definite number of terms, where the number of terms in the square root will depend on the number of terms in the square. </p>
<p>For instance: a one or two term square will give one term in the square root; three or four terms in the square will give two terms in the square root; five or six terms in the square will give three terms in the square root and so on. </p>
<p>If the square root is not a perfect square we will get an infinite series just as in the case of numerals where we get a decimal part. With numerals, the excess digits remaining after dividing by the divisor are carried over to the next digit. However, when taking square root of algebraic expressions there are no carry over of terms and this situation will sometimes lead to the production of fractional coefficients of the terms. Aside from this, the rest of the procedure is the same as the that followed to obtain the square root of numerals using the <a href="duplex.php">Duplex Method</a>.</p>

<a href="square_roots_pdfs/algebraic_squareroot_duplexmethod.pdf" target="_new">Download Algebraic Square Root Duplex Method</a><a href="http://localhost/vmportal/wp-content/uploads/2015/04/algebraic_squareroot_duplexmethod.pdf"></a>
        
        
      </div>
      <a name="videos"></a>
    </div>
  
 	

  <div id="alg_roots" class="container" >
  		
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





