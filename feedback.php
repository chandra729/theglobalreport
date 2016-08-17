
<?php
 include 'header.php';
?>		
<title>theglobalreports|FeedBack</title>
<link rel="stylesheet" href="css/elements.css" />

<!-- body starts here -->
 
<div class="container">
 <!-- feedback form starts here -->
 <div id="feedback">
  <!-- heading of the form -->
	<div class="head">
		<h3>FeedBack Form</h3>
		<p>This is feedback form. Send us your feedback !</p>
    </div>
	
	<!-- feedback form form -->
		<form id="form" action="#" method="post">
		<input type = "text" name="vname" value="" placeholder="Your Name"/>
		<input type = "text" name="vemail" value="" placeholder="Your Email"/>
		<input type = "text" name="sub" value="" placeholder="Subject"/>
		<label>Your Suggestion/Feedback</label>
		<textarea name="msg" placeholder="Type your text here..."></textarea>
		<input type="submit" name="submit" id="send" value="Send Feedback"/>
		</form>
		<h3><?php include "secure_email_code.php"?></h3> 
 </div> 
 <!-- feedback form ends here -->

 </body> 
 <!-- body ends here -->
 <?php
   echo '</div>';  
include 'sidebar.php';
   echo '</div>';  	 	 
include 'footer.php';
 ?> 
</html> 
 
 
 
