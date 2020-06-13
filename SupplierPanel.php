<?php
session_start();
$bid = $_SESSION['id'];

?>










<html>
    <head>
        <meta charset="UTF-8">
        <title>Farming Assistant</title>
        <link href="mydesign.css" rel="stylesheet" type="text/css"/>
		<link rel="icon" href="images/supp.png" type="image/x-icon"/> 
    </head>

    <body>

        
        <div id="google_translate_element" ></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>
       
        
        
        
        <div id="header"></div>        
        
        <div id="menu">
            <ul>
                <li><a href="PostAd.php">Post Advertisement</a></li>
                 <li><a href="viewfarmersad.php">view Ads</a></li>
                 <li><a href="buyermyads.php">view My Ads</a></li>
                <li><a href="Logout.php">Logout</a></li>
             
            </ul>
        </div>
        
        <div id="content">
            <center>
            <h1> Welcome to Buyer Home page</h1>
            </center>  

        </div>
        <div id="footer">Copyright protected by M.G.M's COE Nanded</div>
        
    </body>


</html>
