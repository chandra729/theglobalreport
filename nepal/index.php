
<?php
 include '../header.php';
require_once('../rss_fetch.inc');
//<title>theglobalreports।नेपाल </title>

$url = //'http://feeds.bbci.co.uk/news/rss.xml';
       // $url='http://feeds.mashable.com/Mashable?format=xml';
		// $url= 'http://feeds.reuters.com/Reuters/worldNews';
             'http://setopati.net/rss/';
             'http://english.onlinekhabar.com/feed';
     //'http://setopati.com/rss/';
    //'http://www.onlinekhabar.com/feed/';
    //Nepali feed not working due to some problem


$rss = fetch_rss($url);
 
#<!-- BEGIN content -->
echo '<div id="content">';
   # <!-- begin recent posts -->
   echo '<div class="recent">';
      #<!-- begin post -->
    echo '<div class="single">';
	 #echo '<h2>Australia win Caribbean tri-series, beat West Indies in final</h2>';
          echo "<h2>"."" ."New from". $rss->channel['title'] . "<p>".'</h2>';

       
	##############################################	

//print_r($rss);
//echo '<li>'.'<a href="index.php?section=viewinfo&type=facility&id='.$id.'">'.$name .'</a>'.'</li>'.'</li>'.'</ul>';

 
$items = array_slice($rss->items, 0, 8);

//echo '<p><img class="alignright" src="images/sports2.jpg" width="300" height="300" alt="" /></p>';

foreach ($items as $item) {
	
	       $title = $item['title'];
		   $desc = $item['description'];
           $href = $item['link'];
		   $publish_date=$item['pubdate'];
		   $sum_mary=$item['summary'];
		    echo '<p>'.'<h2>'.'<a href="'.$href.'">'.$title.'</a>'.'</h2>'.'</br>';
        
 	      
	 	#if($desc)
 if(strlen($desc) >= 500)
{
        $desc = substr($desc,0,450).".";
		 
}  



echo '<a href="http://www.theplanetreports.com/buy.php?item=Monthly&PHPSESSID=jeoefgfi6b16h7l213jh30k2q1+&quantity=400" target="_blank">'. $sum_mary.'</a></br>';

echo $desc.'</br>';	
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

