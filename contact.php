<?
///////////// Contact_Form: PowderfaceProductions, 2007 ////////////////
///////////////////////////////////////////////////////////////////////
/////////////////////// SET PREFERENCES BELOW /////////////////////////

$webmaster = "emailaddress"; //// Enter Your Email Address
$website_title = "uspresidents.davidjparsons.me"; //// Enter the name of your website
$subject = "Contact Info from someone visiting uspresidents.davidjparsons.com"; //// Enter a subject line for the notification email
$anti_spam = "637518"; //// Enter a 6 digit antispam code

////////////////// EDIT BELOW HERE AT YOUR OWN RISK ///////////////////
///////////////////////////////////////////////////////////////////////
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>United States Presidents Report - Contact</title>
<meta name="description" content="The Contact page is where you can get in touch with the author of the United States Presidents Report, David J Parsons.">
<META name="distribution" content="global">
<META name="keywords" content="Contact , contact the author, contact david j parsons, contact david, contact parsons, contact davidjparsons, contact me, contact the author of the united states presidents ebook, contact the author of the united states presidents report">
<META name="copyright" content="2010 David J. Parsons"> 
<link href="style.css" rel="stylesheet" type="text/css" />
<!--[if IE 5]>
<style type="text/css"> 
/* place css box model fixes for IE 5* in this conditional comment */
#sidebar1 { width: 220px; }
</style>
<![endif]--><!--[if IE]>
<style type="text/css"> 
/* place css fixes for all versions of IE in this conditional comment */
#sidebar1 { padding-top: 30px; }
#mainContent { zoom: 1; }
/* the above proprietary zoom property gives IE the hasLayout it needs to avoid several bugs */
</style>
<![endif]-->
<style type="text/css">
<!--
#form1 h5 {
	margin-top: 10px;
	margin-bottom: 0px;
}
-->
</style>
</head>

<body class="twoColFixRtHdr">

<div id="container">
  <div id="header">
    <h1>&nbsp;</h1>
  <!-- end #header --></div>
  
   <ul id="horizonnav">
    <li><a href="index.html">Home</a></li
    >
    <li><a href="about.html">About</a></li
    >
    <li><a href="testimonials.html">Testimonials</a></li
    >
    <li><a href="faq.html">FAQ</a></li
    >
    <li><a href="download.html">Download</a></li
    >
    <li id="hornav_last"><a href="contact.php">Contact</a></li
    >
  </ul>
  
  <div id="sidebar1">
    <h3>The Author:</h3>
    <p><a href="about.html"><img src="images/me.jpg" alt="a picture of the author, David J Parsons" width="150" height="246" longdesc="http://www.uspresidents.davidjparsons.com/me" /></a></p>
    <h3><strong>Also check out</strong></h3>
    <p><a href="https://davidparsons.me" rel="nofollow">My blog</a></p>
    <p><a href="https://twitter.com/dpjustice" rel="nofollow">My Twitter Page</a></p>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="10806971">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
  </div>
  <div id="mainContent">
    <h1> Contact</h1>
    <p>Please visit the <a href="faq.html" target="_blank">FAQ</a> page to see if your questions are answered there before contacting me. </p>

	<h3>UPDATE: The contact form has been disabled as it was created by hand back in 2010. Please contact me through my <a href="https://davidparsons.me/contact/">personal site</a> instead.</h3>
    
	<?php
	//if(isset($_POST['anti']) && $_POST['anti'] == '556693') {
	if (isset($_POST['submitted'])) { // Handle the form.

		// Check for a name.
		if (eregi ('^[[:alpha:]\.\' \-]{2,40}$',($_POST['name']))) {
			$n = ucwords(stripslashes(trim($_POST['name'])));
		} else {
			$n = FALSE;
			echo '<p><font color="red">Please enter your <b>name</b>!</font></p>';
		}
	
		// Check for an email address.
		if (eregi ('^[[:alnum:]][a-z0-9_\.\-]*@[a-z0-9\.\-]+\.[a-z]{2,4}$', stripslashes(trim($_POST['email'])))) {
			$e = ($_POST['email']);
		} else {
			$e = FALSE;
			echo '<p><font color="red">Please enter a valid <b>email address</b>!</font></p>';
		}

		// Check for Comments.
		if(!empty($_POST['comments'])){
			$c = stripslashes($_POST['comments']);
		} else {
			$c = FALSE;
			echo '<p><font color="red">Please enter some <b>Comments!</b></font></p>';
		}
	
		//check for anti-spam code.
		if(!empty($_POST['anti']) && $_POST['anti'] == "$anti_spam") {
			$a = stripslashes($_POST['comments']);
		} else {
			$a = FALSE;
			echo '<p><font color="red">Please enter the <b>anti-spam code!</b></font></p>';
		}
	
	
		if ($n && $e && $c && $a) { // If everything's OK.
	
	
//Send the email.
$to = "$e";
$body = "**HELLO $n** \n
The following information was submitted to $website_title by you ... \n 
Name: $n \n  
Email: $e \n
User's Comments:\n $c \n ";
$abody = "**ATTENTION $website_title** \n
The following information was submitted by: \n 
Name: $n \n  
Email: $e \n
User's Comments:\n $c \n ";
//mail($webmaster,$subject,$abody,"From: $e");
//mail($to,$subject,$body,"From: $webmaster");

				
				// Finish the page.
				echo "<font color=\"#39355A\"><br /><h4>Thank You $n. <br />
					You have submitted the following:</h4>
				<br /><br />
					  <b>Name:</b> <em>$n</em><br />
                      <b>Email:</b> <em>$e</em><br />
					  <b>Comments:</b> <br />
					  <em>$c</em><br /><br />				  
					  A confirmation email has been sent to your address.<br />
					  <br />
					  <br />
					  <a href=\"contact.php\">Back</a>
					  <br /><br /><br /><br /><br /></font>";
					  include ('includes/footer.html'); // Include the HTML footer.

				exit();
					
	}


} // End of the main Submit conditional.


// Form below used to be the following: <form action="" method="" name="form1" id="form1">.
?>
<br />
    <form action="" method="" name="form1" id="form1">
 	 <h5>Name: </h5>
 	 <input name="name" type="text" id="name" size="20" maxlength="40" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>" />
 	 <br />
	 
    <h5>E-mail:</h5>
    <input name="email" type="text" id="email" size="20" maxlength="40" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" />
    <br />
	
<br />
	
    <h5>Inquiries / Comments:</h5> 
    <textarea name="comments" cols="50" rows="10" wrap="virtual" id="comments"><?php if (isset($_POST['comments'])) echo $_POST['comments']; ?></textarea>
    <br />
    <br />
	<br />

<p>Please Enter  Anti Spam Code:<strong><font color="#990000"> <?php echo "$anti_spam"; ?></font></strong></p>
	<input name="anti" type="text" id="anti" size="30" />

<br />
<br />
<br />
    <input name="submit" type="submit" class="frmbutt" value="Submit" />    
    <input name="reset" type="reset" class="frmbutt" id="reset" value="Reset" />
	<input type="hidden" name="submitted" value="TRUE" />
    </form>
<br />
<br />

  <!-- end #mainContent --></div>
	<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
  <div id="footer">
    <p><span class="copyright">&copy; 2010 David J. Parsons - All rights reserved worldwide.</span></p>
    <p><span class="copyright"><a href="privacy.html">Privacy Policy</a> - <a href="sitemap.html">Site Map</a> - <a href="faq.html">FAQ</a> - <a href="contact.php">Contact</a></span></p>
  <!-- end #footer --></div>
<!-- end #container --></div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-12245651-1");
pageTracker._trackPageview();git remote rm
} catch(err) {}</script>
</body>
</html>
