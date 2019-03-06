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
        <h1 class="display-3">Beejank (Vedic Check)</h1>
        <p>Blurb for Beejank (Vedic Checking Method)....</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        
        <p><a class="btn btn-primary btn-lg" href="#videos" role="button">LearnMore &raquo;</a></p>
      </div>
      <a name="videos"></a>
    </div>
  <hr>
 	<h2 class="text-center">Beejank (Vedic Checking)</h2>

  <div id="nikmult" class="container" >
  		
          <p class="subhead_tag"><strong>The Beejank, also known as Navasesh, Digital Root or "casting out nines" is a simple but very effective technique for checking the correctness of an answer. </strong></p>
<p>We can make use of the Beejank to check the result of arithmetic operations like addition, subtraction, multiplication and division. The correctness of any arithmetic operation can be verified by carrying out the same operation on the Beejank of the numbers in the operation.</p>

<span class="subhead_tag">The <strong>Beejank, Bj,</strong> of a number, is the <strong> sum of the digits in a number</strong>. If the sum of all the digits turns out to be more than a single digit number, the digits of the sum are themselves added together to get the Beejank. This process is repeated until we get a single digit. Another way to get the Beejank of a number is to find the Remainder when the number is divided by 9.</span> 

<p>For example:</p>
<ul>
  <li>The Beejank of 23 is 5; because 23 divided by 9 gives 2 Remainder 5</li>
  <li>The Beejank of 353 is 2; because 353 divided by 9 gives 39 Remainder 2</li>
  <li>The Beejank of 6729 is 6; because 6729 divided by 9 gives 747 Remainder 6</li>
  <li>The Beejank of 919999 is 1; because 919999 divided by 9 gives 2 Remainder 1</li>
</ul>
<p>But there is any easier way of calculating the Beejank
<h3>      <strong>Basic Method</strong> </h3>
<p>The easy way to compute the Beejank (Bj) is to:</p>

<p>Stage 1) Add all the digits in the number ie. find the <strong>digit sum</strong>
<ul>
  <li>If the answer obtained is a single digit then that answer is the Beejank <span style="color: #ff0000;"><em>(If the sum is 0 or 9 the Beejank is 0)</em></span></li>
  <li>But if there is more than one digit in the answer, the process, Stage 1, is repeated on the answer i.e all the new digits are added together. If the new answer obtained is a single digit then this is the Beejank otherwise we keep repeating stage 1 until a single digit is found and this then will be the Beejank.</li>
</ul>
<p>For example:
  
  Beejank of 342 = 3 + 4 + 2 = 8. Therefore Beejank = 8
  
  Beejank of 76453 = 7 + 6 + 4 + 5 + 3 = 25; and again 2 + 5 = 7. Therefore Beejank = 7
 </p>
<p> Beejank of 98972287 = 9 + 8 + 9 + 7 + 2 + 2 + 8 = 4 + 5 = 9. Therefore Beejank = 0 </p>
<h3><strong>Enhanced Basic Method</strong>
  </p>
  
</h3>
<p>If 9 is added or subtracted from any number its Beejank remains unaffected. It is this property of 9 that can help us quickly find the Beejank of any number by quickly cancelling all of the 9's or the digits summing to 9 from the number whose Beejank we require. </p>
<p><strong>For example:</strong>
  
  Suppose we want the Beejank of 7695981 or Bj(76945981). Firstly we can cancel the two 9's. 4 and 5 sum to 9 and so they can be cancelled. 8 and 1 sum to 9 so they also can be cancelled, leaving just 7 and 6 which sum to 13 giving a Beejank of just 4. ie Bj(76945981) = 4
  
  </p>
<h2><strong>Checking arithmetic operations using the Beejank</strong>
  
</h2>
<p>Here sutra 15, Gunitasamuchayah</span></a>, meaning "the whole product is the same" is used. In this context, the operations carried out with the numbers have the same effect when the same operations are carried ot with their Beejanks.
  
</p>
<h3><strong>Addition</strong>
  
</h3>
<p><span class="wrapper">For example: </span>56 + 27 = 83
  
  Bj(56) = 5 + 6 = 11 giving Bj(56) = 2
  
  Bj(27) = 2 + 7 = 9 giving Bj(27) = 0
  
  </p>
<p>Bj(83) = 8 + 3 = 11 = 2
  
  Addition of Bj(56) and Bj(27) = 2 + 0 = 2, which is same as Bj(83).
  
  Hence the addition is correct </p>
<h3><strong>Subtraction</strong>    </h3>
<p><span class="wrap1">For example:</span> 76 - 39 = 37
  
  Bj(76) = 7 + 6 = 13 giving Bj(76) = 4
  
  Bj(39) = 3 + 9 = 12 giving Bj(39) = 3
  
  Bj(76) - Bj(39) = 4 - 3 = 1
  
  Bj(37) = 3 + 7 = 10 giving Bj(37) = 1
  
  Hence the subtraction is correct
  
  </p>
<p>NB. If we get a negative Beejank, it is made positive by adding 9 </p>
<h3><strong>Multiplication</strong>
  
</h3>
<p><span class="wrap1">For example:</span> 13 x 15 = 195
  
  Bj(13) = 1 + 3 = 4 giving Bj(13) = 4
  
  Bj(15) = 1 + 5 giving Bj(15) = 6
  
  Bj(13) x Bj(15) = 4 x 6 = 24. giving Bj = 24
  
  Bj(195) = 1 + 9 + 5 giving Bj = 6
  
  Hence Multiplication is correct </p>
<h3><strong>Division</strong>
  
</h3>
<p>If E = Dividend, D = Divisor, Q = Quotient and R = Remainder, we get the relationship:
  
  <span class="emphasize_orange">E = (Q x D) + R</span> If the equation is satisfied the division is correct </p>
<p><strong>For example</strong> 293 divided by 7 gives 41 as the Quotient and 6 as the Remainder. Now, to ascertain the correctness of this we can convert E (293), D(7), Q(41) and R(6) into Beejank form and check that both sides of the equation give equal Beejank values
  
  </p>
<p>ie. Bj(E) =Bj( (Q x D) + R) = Bj(Q x D) + Bj(R)  </p>
<p>Let us check using the above example  </p>
<p>LHS: Bj(293) = 5
  
  RHS: Bj(41 x 7) + Bj(6) = Bj(287) + 6 = 8 + 6 = 14 giving final Bj of 5 for RHS.</p>
<p>Now, as Bj(LHS) == Bj(RHS) the division is correct! <span class="emphasize_purple">(NB == means equivalent)</span></p>
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





