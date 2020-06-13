<?php
session_start();
$uid = $_SESSION['id'];
$name = $_SESSION['fname'];

?>



<html>
    <head>
        <meta charset="UTF-8">
        <title>Farming Assistant</title>
        <link href="mydesign.css" rel="stylesheet" type="text/css"/>
		<link rel="icon" href="images/agri1.png" type="image/x-icon"/> 
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
                <li><a href="cropaddetails.php">Buyer Advertisement Details</a></li>
                <li><a href="viewfertilizerads.php">Fertilizer Advertisement Details</a></li>
                <li><a href="Sellcrop.php" >Sell Crops</a></li>
                <li><a href="http://agriplaza.in/" target="_blank">Farming Tips</a></li>
                <li><a href="Complaint.php">Complaint page</a></li>
            
            <li><a href="farmermyads.php">My Ads</a></li>
            <li><a href="Logout.php">Logout</a></li>
          </ul>
        </div>
        
        <div id="content">
            <center>
          
            <?php

                echo "<h1> Hello  $name </h1>";
            ?>
                  <h1> Welcome to Farmer Home page</h1>
            
            </center>  

        </div>
        <div id="footer">Copyright protected by M.G.M's COE Nanded</div>
        
    </body>


</html>
