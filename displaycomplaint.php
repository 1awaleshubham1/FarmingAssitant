
<?php
include_once './dbconfig.php';

session_start();


$result = mysqli_query($link, "select cid,complaint from postcomplaint ");



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
			text-align: left;
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
     
                <li><a class="active"  href="displaycomplaint.php">Complaint page</a></li>
				<li><a href="sendSMS.php">Send SMS </a></li>
                <li><a href="Logout">Logout</a></li>

            </ul>
        </div>
    
    
     <form>

               <div id="content" style="padding-bottom: 300px">

	<h1>Complaints</h1>
        <br>
        <br>
        <table class="data-table">
	
		<thead>
			<tr>
                                <th>Complaint Id</th>
				
                                <th>Complaint</th>
                                
			</tr>
		</thead>
		
                    
                    
              
                    
	<?php
		
		while ($row = mysqli_fetch_array($result))
		{
                   
               
			echo '<tr>
					<td>'.$row['cid'].'</td>
                                       <td>'.$row['complaint'].'</td>
                                     
                         
                                 
                                      
									</tr>';
	
		}?>       
		
             
		
        
        
        </tbody>
                </table>
               </div>
        
     </form>
			
		
			 <div id="footer">Copyright protected by M.G.M's COE Nanded</div>
			
		
	


</body>
</html>