<?php
class view
	{
		public function displayVideos($page, $linesPerPage, $maxVideos, $videos)
			{
			$offset = $page * $linesPerPage;
			$output = '';
			for($x = 0; $x < $linesPerPage; $x++) 
				{
					if ($x + $offset >= $maxVideos) 
						{
							break;
						}
					$output .= '<li>';
					$output .= '<div class="image">';
					$output .= '<a href="detail.php?id=' 
							 . $videos[$x + $offset]['product_id'] 
							 . '">';
					$output .= '<img src="images/' 
							 . $videos[$x + $offset]['link'] 
							 . '.scale_20.JPG" alt="' 
							 . $videos[$x + $offset]['title'] 
							 . '" width="190" height="130"/>';
					$output .= '</a>';
					$output .= '</div>';
					$output .= '<div class="detail">';
					$output .= '<p class="name"><a href="detail.php?id=' 
							 . $videos[$x + $offset]['product_id'] 
							 . '">'
							 . $videos[$x + $offset]['title']
							 . '</a></p>';
					$output .= '<p class="view"><a href="detail.php?id=' 
							 . $videos[$x + $offset]['product_id'] 
							 . '">purchase</a> | <a href="detail.php?id=' 
							 . $videos[$x + $offset]['product_id'] 
							 . '">view details >></a></p>';
					$output .= '</div>';
					$output .= '</li>';
				}
			return $output;
		} // end function displayVideos()

	}	// end of class view
?>