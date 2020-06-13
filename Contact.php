
<html>
    <head>
        <meta charset="UTF-8">
        <title>Farming Assistant</title>
        <link href="mydesign.css" rel="stylesheet" type="text/css"/>
		<link rel="icon" href="images/cont.png" type="image/x-icon"/> 
    </head>

    <body>

      <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

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
                <li><a href="FarmerLogin.php">Farmer Login</a></li>
                <li><a href="SupplierLogin.php">Supplier Login</a></li>
                   <li><a href="shopperlogin.php">Shopper Login</a></li>
                <li><a href="AdminLogin.php">Admin Login</a></li>
                <li><a href="http://abpmajha.abplive.in/agriculture" target="_blank">News</a></li>
            <li><a href="http://www.puneapmc.org/rates.aspx"  target="_blank">Market Rate</a></li>
						<li><a href="payment.php">Pay</a></li>
			<li><a href="agri.php">Agri</a></li>
            <li><a class="active" href="Contact.php">Contact</a></li>
            <li><a href="About.php">About</a></li>
            </ul>
        </div>
        
    
       
    <center>
     <div id="content">
          
       
      <div class="container">
        <h3>Awale shubham </h3>
       <h3>Chincholkar omkar </h3>
        <strong   <p class="title">Admin</p></strong>
        <p>Feel free to ask any questions regarding site.
           mail us any query on the below mail address.</p>
           E - mail : <a href="mailto:1awaleshubham1@gmail.com" target="_blank">1awaleshubham1@gmail.com</a> <br />
  
        <p><button class="button">Contact</button></p>
 
     </div>
       
       
     
       <div>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 10px;
  font-size: 20px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}
</style>
</head>
<!-- Add font awesome icons -->
<a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-instagram"></a>
 </div>
       
    </center>
     <div id="footer">Copyright protected by M.G.M's COE Nanded</div>

  </body>


</html>




