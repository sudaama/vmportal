<?php
require './view/view.php';
require './model/videosTaste.php';

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
        <h1 class="display-3">Vedic Maths Portal</h1>
        <hr>
        <p><span class="subhead_tag pad_top2"><strong>Vedic mathematics is a very ancient system of mathematics which enables one to quickly solve a wide variety of mathematical problems with ease.</strong></span></p>
<p class="subhead_tag">This system of mathematics is beautifully coherent and unified, is renowned for its flexibility  and encourages innovation. It makes mathematics not only easy to learn but also enjoyable to use.</p>
<p>Rediscovered by <a href="vedicmathfather.php#vedicfather">Sri Bharati Krsna Tithaji</a> between the years 1911 and 1918, it is based on a set of <a href="sutras2.php" target="_blank">16 sutras</a> and <a href="subsutras2.php">13 sub-sutras</a> which are, in effect, very concise word formulas</p>
</strong></p>
<div class="box1">
       <div class="wrapper2">
            <div class="pad_left1_video">
              <h2>Key features</h2>
              <table border="0" cellpadding="0" cellspacing="0" class="vedictable" id="features">
                <tr>
                  <th scope="col"><p>coherent</p></th>
                  <th scope="col"> <p>flexibile</p></th>
                  <th scope="col"><p>efficient</p></th>
                  <th scope="col"> <p>universal</p></th>
                  <th scope="col"><p>speedy</p></th>
                </tr>
              </table>
        </div>
        <div class="pad_right">
           <h2>Benefits</h2>
              <table border="0" cellpadding="0" cellspacing="0" class="vedictable" id="benefits">
                <tr>
                  <th scope="col"><p>increases mental agility </p></th>
                  <th scope="col"><p>improves memory</p></th>
                  <th scope="col"><p>stimulates creativity</p></th>
                  <th scope="col"><p>increases concentration ability</p></th>
                  <th scope="col"><p>develops initiative</p></th>
                </tr>
              </table>
        </div>
     </div>
       </div>   

        
        <p><a class="btn btn-primary btn-lg" href="#videos" role="button">Watch Taster Videos &raquo;</a></p>
      </div>
      <a name="videos"></a>
    </div>
  <hr>
 	<h2 class="text-center">Vedic Maths Taster Videos</h2>

  <div id="taster_vids" class="container" >
  		<div>
			<a class="pages" href="index_bak.php?page=<?php echo $prev; ?>#videos">&lt;prev video set</a>&nbsp;|&nbsp;
			<a class="pages" href="index_bak.php?page=<?php echo $next; ?>#videos">next video set&gt;</a>
        	<em class="pages_index"><strong><?php echo "Video Set: ";  echo $page + 1;?></strong></em>
      </div>
 	 	  <div class="card-deck mb-3 text-center">      
			   <?php echo $view->displayVideos($page, $videosPerPage, $maxVideos, $videos->getVideos()); ?>
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





