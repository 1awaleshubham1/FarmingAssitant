<?php

include_once './dbconfig.php';

if(isset($_POST['btnRegister']))
{
    $fname  = $_POST['UserFirstName'];
    $lname  = $_POST['UserLastName'];
    $email  = $_POST['UserEmail'];
    $contact  = $_POST['UserContact'];
    $location = $_POST['UserLocation'];
    $pass  = $_POST['UserPassword'];
    $confpass  = $_POST['UserPass'];
    
    if ($pass == $confpass) 
       {
        $res = mysqli_query($link, "INSERT INTO `userinfo` (`id`, `fname`, `lname`, "
                . "`email`, `cno`, `location`, `pwd`) VALUES (NULL, '$fname', '$lname', '$email', '$contact', '$location', '" . md5($pass) . "')");

        if ($res) 
                 {
            echo " <script>alert('farmer Registered Successfully....!'); window.location='FarmerLogin.php'</script>";
                  } 
        else
            {
            echo "<script>alert('Unable to register please check email and contact no are not registered..!');</script>";
            }
    } else 
        {
        echo "<script>alert('Password and confirm password doesnt match');</script>";
        }
      }

?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Farming Assistant</title>
    <a href="index.php"></a>
    <link href="mydesign.css" rel="stylesheet" type="text/css"/>
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
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="FarmerLogin.php">Farmer Login</a></li>
                <li><a href="SupplierLogin.php">Supplier Login</a></li>
                <li><a href="AdminLogin.php">Admin Login</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#Register Complaint">Register Complaint</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li><a href="About.php">About</a></li>
            </ul>
        </div>
        
        <form method="post" action="">
        <table align="center">
              <th> <td  colspan="2" > <h2>Farmer Registration</h2></td><td></td></th>  
        
            <tr> <td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr> <td> First Name</td><td><input type="text" name="UserFirstName" placeholder="Enter your First Name "value="" required="true" /></td></tr>
            <tr> <td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr> <td> Last Name</td><td><input type="text" name="UserLastName"placeholder="Enter your Last Name " value="" required="true"  /></td></tr>
            <tr> <td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr> <td>Email</td><td><input type="email" name="UserEmail"  placeholder="Enter your Email"value=""required="true" /></td></tr>
            <tr> <td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr> <td>Contact No.</td><td><input type="text" name="UserContact"  placeholder="Enter your Mobile Number"value="" required="true"pattern="^[0-9]{10,10}$" title="Enter 10 numbers only"/></td></tr>
            <tr> <td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr> <td>Location</td><td><input type="text" name="UserLocation" placeholder="Enter your location"value="" required="true"/></td></tr>
            <tr> <td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr> <td>Password</td><td><input type="password" name="UserPassword"  placeholder="Enter your Password"value=""required="true" /></td></tr>
            <tr> <td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr> <td>Conform Password</td><td><input type="password" name="UserPass" placeholder="Conform your Password" value="" required="true"/></td></tr>
            <tr> <td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr> <td>&nbsp;</td><td><input type="submit" value="Register" name="btnRegister" /></td></tr>
           
            
        </table>
        </form>
    </body>
</html>
