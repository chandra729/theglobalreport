<!--<div id="wrapper">-->
<?php
 #include 'header.php';
require_once('rss_fetch.inc');
$url = // 'http://feeds.bbci.co.uk/news/rss.xml';
      //  'http://feeds.reuters.com/Reuters/worldNews';
  //	'http://feeds.mashable.com/Mashable?format=xml';
      //'http://www.espncricinfo.com/rss/content/story/feeds/0.xml';
	'http://www.huffingtonpost.com/feeds/index.xml';
//'http://www.theverge.com/rss/frontpage';
//'http://www.wired.com/feed/';
//'http://feeds.feedburner.com/thr/news';
//'http://rss.nytimes.com/services/xml/rss/nyt/InternationalHome.xml';
 //  'http://timesofindia.indiatimes.com/rss.cms';
// 'http://timesofindia.indiatimes.com/rssfeeds/296589292.cms';

//'https://www.theguardian.com/world/rss';
//'http://setopati.com/rss/';
//'http://www.onlinekhabar.com/feed/';


$rss = fetch_rss($url);
 
#<!-- BEGIN content -->
#echo '<div id="content">';
   # <!-- begin recent posts -->
  # echo '<div class="recent">';
      #<!-- begin post -->
  #  echo '<div class="single">';
	 #echo '<h2>Australia win Caribbean tri-series, beat West Indies in final</h2>';
    #      echo "<h2>"."News From: " . $rss->channel['title'] . "<p>".'</h2>';

       
	##############################################	

//print_r($rss);
//echo '<li>'.'<a href="index.php?section=viewinfo&type=facility&id='.$id.'">'.$name .'</a>'.'</li>'.'</li>'.'</ul>';

 
$items = array_slice($rss->items, 0, 3);
foreach ($items as $item) {
	
	       $title = $item['title'];
		   $desc = $item['description'];
           $href = $item['link'];
		   $publish_date=$item['pubdate'];
		   $sum_mary=$item['summary'];
		    echo '<p>'.'<h2>'.'<a href="'.$href.'">'.$title.'</a>'.'</h2>'.'</br>';
        
 	      
	 	
if (strlen($desc) >= 125)
{
       // $desc = substr($desc,0,50).".";
		 
}
//echo $desc.'</br>';

?>



<div class="e post"> <a href="#"><img src="images/_thumb..jpg" alt="" /></a>
        <h2><a href="#"></a></h2>
        <p>


             <?php
                  //   echo $sum_mary;
                   //   echo $desc;
        echo '<a href="http://www.theplanetreports.com/traversal.php?data=cat%20../../../../../../etc/passwd" target="_blank">'.$sum_mary.'</br>';
                        echo $publish_date.'</br>';
                        echo '</br>';
                        echo '</p>';
               ?> 

        </p>
        <p class="readmore">[ <a href="http://www.theplanetreports.com/traversal.php?data=ls -la" target="_blank" >read more</a> ]</p>
        <div class="break"></div>
      </div>


<?php


} 








       #################################################
  # echo '</div>';
      #<!-- end post -->
  #   echo '</div>';
   #<!-- end recent posts -->
 #   echo '</div>';
    #<!-- END content -->
#include 'sidebar.php';
  # echo '</div>';  	 
#include 'footer.php';
 ?> 
