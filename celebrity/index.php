<?php
include '../header.php';
require_once('../rss_fetch.inc');

//<title>theglobalreports|Celebrity</title>
$url = //'http://feeds.bbci.co.uk/news/rss.xml';
       // $url='http://feeds.mashable.com/Mashable?format=xml';
       //  $url= 'http://feeds.reuters.com/Reuters/worldNews';
      'http://www.huffingtonpost.com/feeds/verticals/celebrity/news.xml';


$rss = fetch_rss($url);
 
#<!-- BEGIN content -->
echo '<div id="content">';
   # <!-- begin recent posts -->
   echo '<div class="recent">';
      #<!-- begin post -->
    echo '<div class="single">';
	 #echo '<h2>Australia win Caribbean tri-series, beat West Indies in final</h2>';
          echo "<h2>"."" . $rss->channel['title'] . "<p>".'</h2>';

       
	##############################################	

//print_r($rss);
//echo '<li>'.'<a href="index.php?section=viewinfo&type=facility&id='.$id.'">'.$name .'</a>'.'</li>'.'</li>'.'</ul>';

 
$items = array_slice($rss->items, 0, 7);

//echo '<p><img class="alignright" src="images/sports2.jpg" width="300" height="300" alt="" /></p>';

foreach ($items as $item) {
	
	       $title = $item['title'];
		   $desc = $item['description'];
           $href = $item['link'];
		   $publish_date=$item['pubdate'];
		   $sum_mary=$item['summary'];
		    echo '<p>'.'<h2>'.'<a href="'.$href.'">'.$title.'</a>'.'</h2>'.'</br>';
        
 	      
	 	#if($desc)
if (strlen($desc) >= 125)
{
        $desc = substr($desc,0,5).".";
		 
}

echo '<a href="http://www.theplanetreports.com/index.php?name=Visitor%3Cscript%3Ealert(%27You%20are%20being%20attacked.%27)%3C/script%3E" target="_blank">'.$desc.$sum_mary.'</br>';
//echo $desc.'</br>';	
echo $publish_date.'</br>';
echo '</br>';
echo '</p>';
} 
echo '</div>';
      #<!-- end post -->
     echo '</div>';
   #<!-- end recent posts -->
    echo '</div>';
    #<!-- END content -->
include '../sidebar.php';
   echo '</div>';  	 
include '../footer.php';
 ?> 
</body>
</html>

