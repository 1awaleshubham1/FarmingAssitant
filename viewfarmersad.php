<?php

include_once './dbconfig.php';

   $result = mysqli_query($link, "select CropName,Picture,Description,Quantity,Rupees,(select fname from userinfo where id=s.fid)as fname,(select cno from userinfo where id=s.fid)as cno,(select location from userinfo where id=s.fid)as location from sellcrop s  ;");
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
                <li><a  href="PostAd.php">Post Advertisement</a></li>
                 <li><a class="active" href="viewfarmersad.php">view Ads</a></li>
                 <li><a href="buyermyads.php">view My Ads</a></li>
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
				<th>Crop Name</th>
                                <th>Crop Image</th>
				<th>Description</th>
				<th>Quantity</th>
				<th>Rupees</th>
				<th>Farmer Name</th>
                                <th>Contact No.</th>
                                <th>Location</th>
			</tr>
		</thead>
		<tbody>
                    
                    
              
                    
                    
		<?php
		
		while ($row = mysqli_fetch_array($result))
		{
			
			echo '<tr>
					<td>'.$row['CropName'].'</td>
                                        <td> <img src="uploads/'.$row['Picture'].'" alt=" " height="150" width="150"> </td>                                
					<td>'.$row['Description'].'</td>
					<td>'.$row['Quantity'].'</td>
                                        <td>'.$row['Rupees'].'</td>   
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