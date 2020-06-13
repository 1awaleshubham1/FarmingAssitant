

<html>
    <head>
        <meta charset="UTF-8">
        <title>Farming Assistant</title>
        <link href="mydesign.css" rel="stylesheet" type="text/css"/>
		<link rel="icon" href="images/agri1.png" type="image/x-icon"/> 
    </head>

    <body>

      <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

       
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
            <li><a href="Contact.php">Contact</a></li>
            <li><a class="active"  href="About.php">About</a></li>
            </ul>
        </div>
        
<div id="content" style="margin: 50px;">
     
    
        
    
 
    <table >
       
        
          <center> <h1> About Us </h1>   </center>
        <tr><td style="vertical-align: top;"> 
         <img src="images/about.jpg"  alt="About Us"  /></td>
                        <td style="padding: 30px; vertical-align: top;text-align: justify;">     <h2>  <span class="italic">Agriculture is the backbone of the Indian Economy"- said Mahatma
                                              Gandhi six decades ago. </h2> </span>   <p>   Even today, the situation is still the same,
                        with almost the entire economy being sustained by agriculture, which is the mainstay
                        of the villages. It contributes 16% of the overall GDP and accounts for employment
                        of approximately 52% of the Indian population. Rapid growth in agriculture is essential
                        not only for self-reliance but also to earn valuable foreign exchange.</p>
                        
                        
                        <p> Indian farmers are second to none in production and productivity despite of the
                        fact that millions are marginal and small farmers. They adopt improved agriculture
                        technology as efficiently as farmers in developed countries. It is felt that with
                        provision of timely and adequate inputs such as fertilizers, seeds, pesticides and
                        by making available affordable agricultural credit /crop insurance, Indian farmers
                        are going to ensure food and nutritional security to the Nation.</p>
                     
                
                        <p>  It is envisaged to make available relevant information and services to the farming
                        community and private sector through the use of information and communication technologies,
                        to supplement the existing delivery channels provided for by the department. Farmers’
                        Portal is an endeavour in this direction to create one stop shop for meeting all
                        informational needs relating to Agriculture, Animal Husbandry and Fisheries sectors
                        production, sale/storage of an Indian farmer. With this Indian Farmer will not be
                        required to sift through maze of websites created for specific purposes.</p>
                   
                        <p>     Once in the Farmers’ Portal, a farmer will be able to get all relevant information
                        on specific subjects around his village/block /district or state. This information
                        will be delivered in the form of text, SMS, email and audio/video in the language
                        he or she understands. These levels can be easily reached through the Map of India
                        placed on the Home page. Farmers will also be able to ask specific queries as well
                        as give valuable feedback through the Feedback module specially developed for the
                        purpose.</p>
                    </td></tr> 
    </table>
    

   
</div>
       

     <div id="footer">Copyright protected by M.G.M's COE Nanded</div>

  </body>


</html>




