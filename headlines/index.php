<?php

//<title>theglobalreports।Headlines </title>
include '../header.php';
require_once('../rss_fetch.inc');
$feeds = array(

        "http://feeds.bbci.co.uk/news/rss.xml",
      //  'http://feeds.reuters.com/Reuters/worldNews';
  //	'http://feeds.mashable.com/Mashable?format=xml',
      //'http://www.espncricinfo.com/rss/content/story/feeds/0.xml',
//	'http://www.huffingtonpost.com/feeds/index.xml',
//'http://www.theverge.com/rss/frontpage',
//'http://www.wired.com/feed/',
//'http://feeds.feedburner.com/thr/news',

 //  'http://timesofindia.indiatimes.com/rss.cms',
// 'http://timesofindia.indiatimes.com/rssfeeds/296589292.cms',

'https://www.theguardian.com/world/rss',
//'http://setopati.com/rss/',
//'http://www.onlinekhabar.com/feed/';

"http://setopati.net/rss/",
"http://english.onlinekhabar.com/feed",
'http://rss.nytimes.com/services/xml/rss/nyt/InternationalHome.xml',
//'http://setopati.com/rss/';
    //'http://www.onlinekhabar.com/feed/';
    //Nepali feed not working due to some problem


);


#<!-- BEGIN content -->
echo '<div id="content">';
   # <!-- begin recent posts -->
   echo '<div class="recent">';
      #<!-- begin post -->
    echo '<div class="single">';

foreach ($feeds as $feed) {
	
// Retrieve the feed
$rss = fetch_rss($feed);

// Format the feed for the browser
$feedTitle = $rss->channel['title'];
echo "<p><strong>$feedTitle</strong><br />";
$rss->items = array_slice($rss->items, 0, 3);
foreach ($rss->items as $item) 
     {
		
            $link = $item['link'];
            $title = $item['title'];
            $description = isset($item['description']) ? $item['description'].
           "<br />" : "";
            echo "<a href=\"$link\">$title</a><br />$description";
      }
    echo "</p>";
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


