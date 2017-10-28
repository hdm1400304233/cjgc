<?php
	
	// PHP5 Implementation - uses MySQLi.
	// mysqli('localhost', 'yourUsername', 'yourPassword', 'yourDatabase');
	include("connectr.php");
		$queryString = $_POST['queryString'];    
    if(strlen($queryString) >0) {    
    $sql= "SELECT name FROM `web` WHERE name LIKE '".$queryString."%' LIMIT 10";    
    $query = mysql_query($sql);    
        while ($row = mysql_fetch_array($query)){         
             
         ?>  
         <li onClick="fill('<?php print_r($row['name']);?>')"><?php print_r($row['name']);?></li>   
         <?php   
        }    
    }     
?>