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
    <div id="nav-placeholder"> 
    </div>
    <!--end of Navigation bar-->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Square Roots</h1>
        <hr>
        <p class="subhead_tag"><strong>In this section we are going to deal with a simple, straightforward, elegant single line Vedic method of finding the square root of any number.</strong></p>
          <p>In Vedic Mathematics, finding the Square Root, or <span class="emphasize_red">Vargamoola</span>, of a number involves using a simple, straightforward procedure.</p>


          <p>The fundamental rules governing the extraction of the square root of a number are: </p>
          <ol>
  <li>
    <p>First of all, the number is arranged in <span class="emphasize_orange">&quot;two-digit&quot;</span> groups going from right to left. If there is a single digit remaining on the left hand side it is just placed in a group of its own.</p>
  </li>
  <li>
    <p>The number of digits in the square root will be the same as the number of digit-groups in the number itself. Remember, any single digit remaining on left will be in its own group. So, here are some examples: 25 will count as one group; 225 as two groups; 1089 as two groups; 10609 as three groups and so on.</p>
  </li>
  <li>
    <p>So, if the square root contains <strong><em>n</em></strong> digits, the square must have either <strong><em>2n</em></strong> or<strong><em> 2n - 1</em></strong> digits.</p>
  </li>
  <li>
    <p>Conversely, if the given number has <em><strong>n</strong></em> digits, the square must contain <strong><em>n/2</em></strong> or <strong><em>(n+1)/2</em></strong> digits.</p>
  </li>
  <li>
    <p>In the case of pure decimals, the number of digits in the square is always double that in the square root.</p>
  </li>
  <li>
    <p>The squares of the first nine natural numbers are: 1, 4, 9, 16, 25, 36, 49, 64 and 81. The implication of this is that:
      </p>
  </li>
  <li>
    <ul>
      <li>An exact square cannot end in 2, 3, 7 or 8</li>
      <li>A complete square ending in 1 must have, as the end digit of its square root, either <strong>1</strong> or <strong>9</strong> (mutual complements from 10)</li>
      <li>A complete square ending in 4 must have, as the end digit of its square root, either <strong>2</strong> or <strong>8</strong> (again mutual complements from 10)</li>
      <li>A complete square ending in 5 or 0 must have, as the end digit of its square root, either <strong>5</strong> or<strong> 0</strong> (again mutual complements from 10)</li>
      <li>A complete square ending in 6 must have, as the end digit of its square root, either <strong>4</strong> or <strong>6</strong> (again mutual complements from 10)</li>
      <li>A complete square ending in 9 must have, as the end digit of its square root, either <strong>3</strong> or <strong>7</strong> (again mutual complements from 10)</li>
      </ul>
    </li>
          </ol>
          <p>In short, we can observe the following: </p>
          <ul>
  <li>if a number ends in either 0, 1, 5 or 6 the last digit of square of the number will be same as the end digit of the number. For example 11<sup>2</sup> = 121; end digit(units place) in number 11 is 1 and the end digit of the square, 121, is also 1.
For example: 16<sup>2</sup> = 256; Here we see that the end digit in the number and its square is 6....and so on.</li>
  <li>The squares of the complements from 10 have the same last digit. 1<sup>2</sup> and 9<sup>2</sup>; 2<sup>2</sup> and 8<sup>2</sup>; 3<sup>2</sup> and 7<sup>2</sup>; 4 <sup>2</sup> and 5<sup>2</sup>; 0<sup>2</sup> and 10<sup>2</sup> have the same ending, namely: 1, 4, 9, 6, 5 and 0 respectively</li>
  <li>The digits 2, 3, 7 and 8 never become the final digit of a perfect square!</li>
</ul>
          <p>Vedic Method of Finding Square Roots <a title="Classic Vedic Square Root Method" href="square_roots_pdfs/square_root_method.pdf">Download Classic Square Root Method</a></p>
<p>There is also a very old, non-Vedic, method of calculating square roots that we have included for the sake of comparision.</p>
<p><a href="square_roots_pdfs/oldskool_squareroots.pdf" target="_new">Download "Ole Skool" Square Root Method</a></p>
        
        
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





