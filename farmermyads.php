<?php
include_once './dbconfig.php';

session_start();
$uid = $_SESSION['id'];

$result = mysqli_query($link, "select cropid,CropName,Picture,Description,Quantity,Rupees from sellcrop WHERE fid=$uid");


?>


<html>

<head>
        <meta charset="UTF-8">
       	<title>Farming Assistant</title>
        <link href="mydesign.css" rel="stylesheet" type="text/css"/>
		<link rel="icon" href="images/agri1.png" type="image/x-icon"/> 

	<style type="text/css">
            
    
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
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
            
                <li><a class="active" href="farmermyads.php">My Ads</a></li>
            <li><a href="Logout.php">Logout</a></li>
            </ul>
        </div>
    
    
     <form>

               <div id="content" style="padding-bottom: 300px">

	<h1>ADVERTISES</h1>
        <br>
        <br>
        <table class="data-table">
	
		<thead>
			<tr>
                                <th>Ad Id</th>
				<th>Crop Name</th>
                                <th>Crop Image</th>
				<th>Description</th>
				<th>Quantity</th>
				<th>Rupees</th>
                            
                                <th>Action</th>
                                
			</tr>
		</thead>
		<tbody>
                    
                    
              
                    
                    
		<?php
		
		while ($row = mysqli_fetch_array($result))
		{
			
                    $adid=$row['cropid'];
			echo '<tr>
                            

                          
                                       <td>'.$row['cropid'].'</td> 
                               
					<td>'.$row['CropName'].'</td>
                                        <td> <img src="uploads/'.$row['Picture'].'" alt=" " height="150" width="150"> </td>                                
					<td>'.$row['Description'].'</td>
					<td>'.$row['Quantity'].'</td>  
                                        <td>'.$row['Rupees'].'</td>' ?>
                            <td><button id=<?php echo $adid; ?> onclick="deletead(<?php echo $adid; ?>)">Delete Ad </button></td>
                                        </tr>'
	
                    
                    <script>
   
    
 function deletead(str) {
   var  s=document.getElementById(str);
   
    
  var xhttp;    
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      alert(xhttp.responseText);
    }
  };
  xhttp.open("GET","deletead.php?q="+str, true);
  xhttp.send();
}
 
</script>
                <?php } ?>
                    
		</tbody>
                </table>
		
        
        
        
               </div>
        
     </form>
			
		
			 <div id="footer">Copyright protected by M.G.M's COE Nanded</div>
			
		
	


</body>


</html>