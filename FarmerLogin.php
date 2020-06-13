
<?php

include_once './dbconfig.php';

if(isset($_POST['btnLogin']))
{
    $email = $_POST['txtEmail'];
    $pwd = $_POST['txtPwd'];
   $result = mysqli_query($link, "select * from userinfo where email='" . $email . "' and pwd='" . md5($pwd) . "'");
  
   $count=0;
   $uid="";
   $name="";
   while($row = mysqli_fetch_array($result))
   {
    $uid = $row{"id"};
     $name = $row{"fname"};
    $count++;    
   }
   
   if($count>0)
   {
       session_start();
       $_SESSION['id']=$uid;
       $_SESSION['fname']=$name;
       echo "<script>alert('Login Successfully...!'); window.location='FarmerHome.php';</script>";
       
   }
   
 else {
       
   echo "<script>alert('Invalid Credentials...!');</script>";
     
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
       
       <!-- Slide Show -->
<section>
  <img class="mySlides" src="images/1.jpg"
       style="width:100%"height="45%">
  <img class="mySlides" src="images/2.jpg"
       style="width:100%"height="45%">
   <img class="mySlides" src="images/4.jpg"
       style="width:100%"height="45%">
  <img class="mySlides" src="images/3.jpg"
       style="width:100%"height="45%">
</section>

<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000);
}
</script>
        
        
        
        
        
        <div id="menu">
            <ul>
                <li><a  href="index.php">Home</a></li>
                <li><a class="active" href="FarmerLogin.php">Farmer Login</a></li>
                <li><a href="SupplierLogin.php">Buyer Login</a></li>
                   <li><a href="shopperlogin.php">Shopper Login</a></li>
                <li><a href="AdminLogin.php">Admin Login</a></li>
                <li><a href="http://abpmajha.abplive.in/agriculture" target="_blank">News</a></li>
            <li><a href="http://www.puneapmc.org/rates.aspx"  target="_blank">Market Rate</a></li>
						<li><a href="payment.php">Pay</a></li>
			<li><a href="agri.php">Agri</a></li>
            <li><a href="Contact.php">Contact</a></li>
            <li><a href="About.php">About</a></li>
            </ul>
        </div>
        
        <div id="content">

           <form method="post">
    
                <table align="center">
                
                <th> <td colspan="2" > <h2>Farmer Login</h2></td><td></td></th>
            <tr><td>&nbsp;</td></tr>
            <tr> <td>Email</td><td><input type="text" name="txtEmail"  placeholder="Enter your Email"value="" /></td></tr>
            <tr> <td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr> <td>Password</td><td><input type="password" name="txtPwd" placeholder="Enter your Password" value="" /></td></tr>
            
            <tr><td>&nbsp;</td></tr>
            <tr> <td>&nbsp;</td><td align="right" ><input type="submit" value="Login" name="btnLogin" /></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr>&nbsp;<td></td><td align="right">New User...?   <a href="register.php"> Sign Up</a></td></tr>
            
            </table>

          </form>

        </div>
        <div id="footer">Copyright protected by M.G.M's COE Nanded</div>
        
    </body>


</html>
