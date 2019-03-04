<style type="text/css">
.vedicmathcol {
	float: left;
	height: 210px;
	width: 305px;
	margin-bottom: 20px;
}
</style>

<?php
/* This class, called view,contains a method called 'displayVideos' that returns a HTML string of information that displays the thumbnail mini VMP videos; eventually displayed at the bottom of selected pages.
 * The displayVideos method takes four parameters: $page, $videosPerPage, $maxVideos and $videos. 
 * (1) $page.
 * 		$page is the active, live page that has been requested by the user. The code that gives access to this page can be found in each and every file that has a dynamic link (forwards and backwards) to video sets in that group. Please refer to nikhilam_mult.php or paraavartya_division.php etc. where identical code has been used at beginning of file to determine page number setting and navigation.
 * (2)  $videosPerPage
 * 		The $videosPerPage parameter is the number of videos displayed on each page and can be changed easily. This parameter can be set to take on a distinctly separate value on each different dynamic page. Meaning to say that each set of dynamic pages can have a different number of videos per page. For example the nikhilam_mult.php pages could be set to have 3 videos per page and the straight_division.php pages might have 4 videos per page and so on. 
 * (3)	 $maxVideos
 * 		 $maxVideos is simply a count of all the videos titles available for a particular collection of videos. A separate method has been created for returning this value and can be found in any video*.php dynamic file.  
 * (4)	$videos 
 * 		$videos is the array of videos in that particular collection and is obtained using the getVideos() method belonging to the videos class              
 * 
 * Brief Description of the displayVideos() method.
 * The first variable we encounter here is the $vidOffset variable which is simply the product of the first two arguments that have been fed into the displayVideos() method. Essentially, $vidOffset gives a neat way of navigating through blocks of videos and gives a clever way of referring to the beginning of a particular video set. Breaking it down even further, for my own benefit more than anything else, if $page == 0, i.e. we are on the first page, and $videosPerPage = 4, i.e. four videos per page, we have a $vidOffset of 0. If page == 1, the next page, we have a $vidOffset of 4. if page == 2, the $vidOffset is 8; page == 3, the $vidOffset is 12 and so on. You get the picture. 
 * After this we encounter the $vidOutString which is a concatenation of HTML code culminating in a string giving the link to the appropriate video. It is intialised to zero.
 * In the 'for loop' we encounter a counter called $vidCounter, initialised to zero, allowing the loop to sequentially step through, one by one all the videos in a particular video set. AS mentioned above, the number of videos per page is previously determined by $videosPerPage.
 * So, taking  a Bird's eye view, the $vidOffset does the heavy shovelling and takes us to the beginning of a particular set or block of videos on a particular page and the $vidCounter steps through each individual videos in sequence. So far so good! 
 * "Enter" the 'if' statement! When we exceed the maximum number of videos the 'for' loop is broken and the $vidOutString is set to display the remaining set of videos on the last page.
 * The $vidOutString contains the link to the videos stored in the $videos array entered as the last parameter in the displayVideos() method. Information about a particular video is stored in an array of associative arrays and a particular video can be accessed by $videos[$vidCounter + $vidOffset] and the specific info about the link to that video is given by $videos[$vidCounter + $vidOffset]['link'].
 * The $vidOutString is part of the vedicmathcol class and is sent back as list member which will slot into an unordered list              */

class view
	{
		public function displayVideos($page, $videosPerPage, $maxVideos, $videos)
			{
				$vidOffset = $page * $videosPerPage;
				$vidOutString = '';
				for($vidCounter = 0; $vidCounter < $videosPerPage; $vidCounter++) 
					{
						if ($vidCounter + $vidOffset >= $maxVideos) 
							{
								break;
							}
								 
						$vidOutString .= '<li>';
						$vidOutString .= '<div class="vedicmathcol">';
						$vidOutString .= '<p class="videotitles">'.$videos[$vidCounter + $vidOffset]['title'].'</p>';
						$vidOutString .= '<iframe width="240" height="200" src="' 
								. $videos[$vidCounter + $vidOffset]['link']. 
								'" frameborder="0" allowfullscreen></iframe>';	
						$vidOutString .= '</div>';
						$vidOutString .= '</li>';		 
					}
				return $vidOutString;
		} // end function displayVideos()

	}	// end of class view
?>
