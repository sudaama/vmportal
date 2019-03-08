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
        <h1 class="display-3">Squaring Numbers</h1>
        <hr>
        <p class="subhead_tag"><strong>Mathematically speaking, a square is the result of multiplying a number by itself. The verb "to square" is used to denote this operation. Squaring a number is the same as <span class="emphasize_red">raising to the number to the power 2</span>, and is denoted by the superscript 2; for instance, the square of 5 may be written as 5<sup class="super">2</sup>, which is the number 25 or, for instance, 7<sup class="super">2</sup> is the number 49 etc.
        
        We have a specific method for squaring numbers ending in 5, using the Ekadhika sutra, and another separate method for squaring numbers near to the base which uses the Yavadunam sutra. Then there is squaring using the Anurupyena Method, which can specifically be used for squaring two digit numbers but which is also flexible enough to be used for three and four digit numbers. Finally, there is squaring using the Duplex Method.
        
      </strong></p>
        
        <p><a class="btn btn-primary btn-lg" href="#videos" role="button">Learn More &raquo;</a></p>
      </div>
      <a name="videos"></a>
    </div>
  <hr>
 	<h2 class="text-center">Squaring Numbers</h2>

  
  <div id="squa_num" class="container" >
  		 
    </span>
      <p><span class="pad_left1">        </span><span class="pad_left1">    </span>
        In this section we will briefly outline four different methods for finding the square of a particular number; some methods can be used for general cases and some methods are to be used only for special cases.
      </p>
      <p>Click on the Individual Squaring Methods below to reveal the particular technique </p>
      <span class="pad_left1">
      
  <div id="accordion">
        <h3 id=ekadhika>Ekadhika Method of Squaring.....Method 1</h3>
        <div class="tooltipStuff" id="tooltip1">
<p>The Ekadhika method of squaring numbers is used when the number ends in 5. The RHS of the answer is always 5<sup>2</sup> i.e. 25, and the LHS of the answer is just the product of the number that is prefixed (before) to 5 and the number's Ekadhika. If the prefixed number is large, we can use one of the many multiplication methods dealt with earlier to multiply the number by its Ekadhika. For instance, we could use the Nikhilam Sutra (all from 9 last from ten) or the Paraavartya Sutra to work out the LHS.</p>

<p>Here are some examples.</p>
    <ul>
        <li> eg.(1) 65<sup class="super">2</sup> = (6 x 7) / 25 = 42/25 or 4225 </li>
        
        <li> eg.(2) 75<sup class="super">2</sup> = (7 x 8) / 25 = 56/25 or 5625 </li>
        
        <li> eg.(3) 135<sup class="super">2</sup> = (13 x 14) / 25 = 182 / 25 or 18225 </li>
        
        <li> eg.(4) 945<sup class="super">2</sup> = (94 x 95) / 25 = 8930/25 or 893025 </li>
        
        <li> eg.(5) 1205<sup class="super">2</sup> = (120 x 121) / 25 = 14520 / 25 or 1452025 </li>
        
        <li> eg.(6) 47<sup class="super">2</sup> = (47 x 48) / 25 = 2256 / 25 or 225625 </li>
    </ul>
    <p><a href="squaring_pdfs/ekadhika_squaring_detail.pdf" target="_blank">Download Ekadhika Squaring Breakdown (PDF) </a>
    </p>
        </div>
 
  <h3 id=yavadunum>Yavadunum Method of Squaring.....Method 2</h3>
  <div class="tooltipStuff" id="tooltip2">
    
<p>The Yavadunum Method is used for squaring numbers that are close to the base or close to a sub-base. We use the sub-sutra "yavadunum tavdunikritya vargamcha yojayet" which means:

<em><strong>"whatever the extent of the deficiency of a number from the base, lessen that number to the same extent and then set up the square of the deficiency".</strong> </em></p>

<p>Although the sub-sutra speaks about a deficiency it can be applied equally well when dealing with a surplus. In this case, the surplus, or excess, is added to the same extent and then this is followed by the square of the surplus. So, whatever the deviation from the base, increase the number by the deviation and then postfix the square of the deviation.</p>

<p>In a nutshell, squaring of numbers near the base involves two steps.</p>

<h3><strong>Step 1:</strong></h3>

<p><strong>The LHS of the answer is simply the number itself plus the deviation.</strong></p>

<p>As mentioned previously, the deviation may be negative (deficiency) or positive (surplus) depending on whether the number is, respectively, less than or more than the base.</p>

<h3><strong>Step 2:</strong></h3>

<p><strong>The RHS is simply the square of the deviation.</strong></p>

<p>The RHS of the answer contains the same number of digits as the number of zeroes in the base.</p>

<p><em>Please note that:</em></p>
<ul>
  <li>If there are excess digits on the RHS, those excess digits are carried over to the LHS.</li>
  <li>If there are deficit digits on the RHS, an appropriate number of zeroes are placed to the left of the RHS answer part to make up the deficit.</li>
</ul>
<ul>
    <li>eg.(1) 96<sup class="super">2</sup> = (96 + <span class="rekhank">04</span>) / (<span class="rekhank">04</span>)<sup class="super">2</sup> = (92) / 16 = 9216</li>
    
    <li>eg.(2) 107<sup class="super">2</sup> = (107 + 07) / (07)<sup class="super">2</sup> = (114) / 49 = 11449</li>
    
    <li>eg.(3) 992<sup class="super">2</sup> = (992 + <span class="rekhank">008</span>) / (<span class="rekhank">008</span>)<sup class="super">2</sup> = (984) / 064 = 984064</li>
    
    <li>eg.(4) 113<sup class="super">2</sup> = (113 + 13) / (13)<sup class="super">2</sup> = (126) / <sub class="subit">1</sub>69 = 12769</li>
</ul>

<p>If the number to be squared is not close to the base but happens to be near to a sub-base (a.k.a working-base) we can use this sub-base for the practical calculation and find the deviation from it. The LHS is the proportionately modified, as in the case of multiplication using a sub-base.</p>

<p><i><b>Please refer to Nikhilam Multiplication Section, Part 2 to refresh your memory).</b></i></p>

<p><a href="squaring_pdfs/yavadunum_squaring.pdf" target="_blank">Download Yavadunum Squaring</a></p>

  </div>

<h3 id=anurupyena>Anurupyena Method of Squaring.....Method 3</h3>
        <div class="tooltipStuff" id="tooltip3">


<p>This method is especially useful for squaring two digit numbers, but it can also be used for squaring three and four digit numbers as we will see later.  </p>
<p>For the purpose of demonstration, we will calculate 13<sup>2</sup> to illustrate the procedure. Here is how we do it:  </p>
<h3><span class="pad_left1"><strong>Step 1:</strong>
  
</span></h3>
<p>First, we bifurcate the number into two parts, each containing a single digit, and make a note of the ratio between the two parts. For convenience, we can call this ratio the digit-ratio. 
</p>
<p>For instance: 
<ul>
<li><p><strong>14</strong> has the ratio <strong>1 : 4</strong> </p></li>
<li><p><strong>26</strong> has the ratio <strong>2 : 6</strong></p></li>
<li><p><strong>77</strong> has the ratio <strong>7 : 7</strong> or <strong>1: 1</strong></li></p>
<li><p><strong>57</strong> has the ratio <strong>5 : 7</strong> and so on...</p></li>
  </ul>
<p>In our 'step-through' example: 13 has digit-ratio 1 : 3</p>

<h3><span class="pad_left1"><strong>Step 2</strong>:
  
</span></h3>
<p>We write down the square of the left-most digit of the digit-ratio. This is followed by two separate numbers, each of which is formed by maintaining the digit ratio.
  
  So, using the example, 13 has the digit-ratio 1 : 3. Squaring the left-most digit, 1, we obtain 1. This is followed by the next two numbers: 3 and 9. Please note that we are maintaining the 1: 3 ratio.
  
  So we write down :
  
  1 : 3 : 9
  
  The ratio of the first two numbers is 1 : 3 and the ratio of the second and third numbers is 3 : 9 or also 1 : 3. </p>
<h3><span class="pad_left1"><strong>Step 3:</strong>
  
</span></h3>
<p>We write down the middle number in the next line directly below itself and then ADD column-wise.
  
  So, following through with the example, we have:</p>
<table id="anurupyena">
  <tbody>
<tr>
<th>H</th>
<th>T</th>
<th>U</th>
</tr>
<tr>
<td>1:</td>
<td>3:</td>
<td>9:</td>
</tr>
<tr>
<td>/</td>
<td>3</td>
<td>/</td>
</tr>
<tr>
<td>_____</td>
<td>_____</td>
<td>_____</td>
</tr>
<tr>
<td>1</td>
<td>6</td>
<td>9</td>
</tr>
<tr>
<td>_____</td>
<td>_____</td>
<td>_____</td>
</tr>
</tbody>
</table>
<br>
<p>So, 13<sup class="super">2</sup> = 169</p>

<a href="squaring_pdfs/anurupyena_method_of_squaring.pdf" target="_blank">Download Anurupyena Method of Squaring</a>
</div>

<h3 id=duplex>Duplex Method of Squaring.....Method 4</h3>
        <div class="tooltipStuff" id="tooltip4">
      <p>Simply by mental multiplication, the sub-sutra dwandwah yogah (the duplex combination) is used to find the squares of numbers that contain any number of digits.</p>

      <p>We have already written a short section on how to find the duplex of a number and the reader is advised to visit the <a href="duplex.php">Duplex</a> section of the Basic Terms. Alternatively, download Duplex-info and read at your leisure. <a href="squaring_pdfs/duplex_method_of_squaring.pdf" target="_blank">Download Duplex Method of Squaring</a></p>
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





