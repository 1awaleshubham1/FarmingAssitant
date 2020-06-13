<?php

include_once './dbconfig.php';

if(isset($_POST['btnRegister']))
{
    $com  = $_POST['Complaint'];

    
   
        $res = mysqli_query($link, "INSERT INTO `postcomplaint` (`cid`,`complaint`) VALUES (NULL, '$com') ");

        if ($res) 
                 {
            echo " <script>alert('Complaint posted Successfully....!'); window.location='Complaint.php'</script>";
                  } 
        else
            {
            echo "<script>alert('Unable to Post complaint..!');</script>";
            }
    
      }

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
                <li><a class="activef" href="Complaint.php">Complaint page</a></li>
            
            <li><a href="farmermyads.php">My Ads</a></li>
            <li><a href="Logout.php">Logout</a></li>
            </ul>
        </div>
        
            <div id="content">

                
            <form method="post">
            <table align="center">
			
				<h4 align="center"><strong>NOTE: please add additional mobile number for future use. </strong></h4>
				<h5 align="center"> <i>in the below complaint box</i></h5>
                <th> <td colspan="2" > <h2>Complaint page</h2></td><td></td></th>
            <tr><td>&nbsp;</td></tr>
          
            <tr> <td>Complaint</td><td><textarea name="Complaint" rows="5" cols="40"></textarea></td></tr>
            <tr> <td>&nbsp;</td><td>&nbsp;</td></tr>
        
           <tr> <td> </td> <td> <input type="submit" name="btnRegister" value="Post Complaint" /></td></tr>
           
           
            <tr><td>&nbsp;</td></tr>
            
                        
            
            </table>

                </form>

        </div>
            
            
              

     
        <div id="footer">Copyright protected by M.G.M's COE Nanded</div>
        
    </body>


</html>
