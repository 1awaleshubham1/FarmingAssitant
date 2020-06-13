<?php
include_once './dbconfig.php';

session_start();
$bid = $_SESSION['id'];


if (isset($_POST["btnpost"])) {

    $target_dir = "uploads2/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        if (isset($_POST['btnpost'])) {
            $cname = $_POST['cropname'];
            $Picture = basename($_FILES["fileToUpload"]["name"]);
            $des = $_POST['Description'];
            $quantity = $_POST['txtquantity'];
        
            $city = $_POST['cityname'];
            $state = $_POST['statename'];


            $res = mysqli_query($link, "INSERT INTO buycrop (`cropid`, `cropname`, `imagename`, `description`, `quantity`, `city`, `state`,`bid`)
                    VALUES (NULL, '$cname', '$Picture', '$des', '$quantity',  '$city', '$state','$bid')");

            if ($res) {
                echo " <script>alert('Ad posted Successfully....!'); window.location='PostAd.php'</script>";
            } else {
                echo "<script>alert('Unable to post the ad..!');window.location='Sellcrop.php'</script>";
            }
        }
        echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>




<html>
    <head>
        <meta charset="UTF-8">
        <title>Farming Assistant</title>
        <link href="mydesign.css" rel="stylesheet" type="text/css"/>
		<link rel="icon" href="images/adv.jfif" type="image/x-icon"/> 
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        
         <style>

            #clock{
                background-image:url('');
                background-size: 100% 100%;
                background-repeat: no-repeat;
                height: 220px; width: 220px;
                border: 1px solid #bbb;
            }

        </style> 
             <script>
            function readURL(event) {
                var getImagePath = URL.createObjectURL(event.target.files[0]);
                $('#clock').css('background-image', 'url(' + getImagePath + ')');
            }
           </script>
   
        
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
                <li><a class="active" href="PostAd.php">Post Advertisement</a></li>
                 <li><a href="viewfarmersad.php">view Ads</a></li>
                 <li><a href="buyermyads.php">view My Ads</a></li>
                <li><a href="Logout.php">Logout</a></li>
             
            </ul>
        </div>
        
            <div id="content">

             <form action="" method="post" enctype="multipart/form-data">
             <table align="center">
                
                <th> <td colspan="2" > <h2>Post Advertisement</h2></td><td></td></th>
            <tr><td>&nbsp;</td></tr>
             <tr> <td>Crop Name</td><td><input type="text" name="cropname" value="" /></td></tr>
                    <tr> <td>&nbsp;</td><td>&nbsp;</td></tr>
                    <tr> <td>Crop Image</td><td><input type="file" name="fileToUpload" id= "fileToUpload"  onchange="readURL(event)" /></td></tr>

                    <tr><td></td><td> <div id="clock" > </div></td>


                    <tr> <td>&nbsp;</td><td>&nbsp;</td></tr>
                    <tr> <td>Description</td><td><textarea name="Description" rows="5" cols="20"></textarea></td></tr>
                    <tr> <td>&nbsp;</td><td>&nbsp;</td></tr>

                    <tr> <td> Quantity</td><td><input type="text" name="txtquantity" value="" /></td></tr>
                    <tr><td>&nbsp;</td></tr>
                    <tr> <td>City</td><td><input type="text" name="cityname" value="Nanded" /></td></tr>
                    <tr> <td>&nbsp;</td><td>&nbsp;</td></tr>
                    <tr> <td>State</td><td><input type="text" name="statename" value="Maharashtra" /></td></tr>
                    <tr> <td>&nbsp;</td><td>&nbsp;</td></tr>




                    <tr> <td> </td> <td> <input type="submit" value="Post Advertisement" name="btnpost"/></td></tr>
                    <tr><td>&nbsp;</td></tr>

           
   
                        
            
            </table>

                </form>

        </div>
            
            
              

     
        <div id="footer">Copyright protected by M.G.M's COE Nanded</div>
        
    </body>


</html>
