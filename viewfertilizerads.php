<?php

include_once './dbconfig.php';

   $result4 = mysqli_query($link, "select fertilizername,fimage,description,Ruppes,(select fname from shopinfo where id=m.sid)as fname,(select cno from shopinfo where id=m.sid)as cno,(select location from shopinfo where id=m.sid)as location from shopperadpost m  ;");
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
                <li><a class="active" href="viewfertilizerads.php">Fertilizer Advertisement Details</a></li>
                <li><a href="Sellcrop.php" >Sell Crops</a></li>
                <li><a href="http://agriplaza.in/" target="_blank">Farming Tips</a></li>
                <li><a href="Complaint.php">Complaint page</a></li>
            
            <li><a href="farmermyads.php">My Ads</a></li>
            <li><a href="Logout.php">Logout</a></li>
            </ul>
        </div>
    
    
    
    

               <div id="content" style="padding-bottom: 300px">

	<h1>ADVERTISES</h1>
        <br>
        <br>
	<table class="data-table">
	
		<thead>
			<tr>
				<th>Fertizier Name</th>
                                <th>Image</th>
				<th>Description</th>
				<th>Rupees</th>
				<th>Shop Name</th>
                                <th>Contact No.</th>
                                <th>Shop Address</th>
			</tr>
		</thead>
		<tbody>
                    
                    
              
                    
                    
		<?php
		
	    while ($row = mysqli_fetch_array($result4))
		{
			
			echo '<tr>
					<td>'.$row['fertilizername'].'</td>
                                        <td> <img src="uploads3/'.$row['fimage'].'" alt=" " height="150" width="150"> </td>                                
					<td>'.$row['description'].'</td>
					
                                        <td>'.$row['Ruppes'].'</td>   
                                        <td>'.$row['fname'].'</td>
                                        <td>'.$row['cno'].'</td>
                                         <td>'.$row['location'].'</td>    
                                               
									</tr>';
	
		}?>
		</tbody>
                </table>
		
        
        
        
               </div>
        

			
		
			 <div id="footer">Copyright protected by M.G.M's COE Nanded</div>
			
		
	
</body>
</html>