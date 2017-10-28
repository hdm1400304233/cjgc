<?php
	
	// PHP5 Implementation - uses MySQLi.
	// mysqli('localhost', 'yourUsername', 'yourPassword', 'yourDatabase');
	include("connectr.php");
		$queryString = $_POST['queryString'];    
    if(strlen($queryString) >0) { 
	$all=array("a"=>"transport","b"=>"resource","c"=>"education","d"=>"cxrebuilt","e"=>"foreingc","f"=>"strategypl","g"=>"industry");
	foreach($all as $x=>$x_value) 
	{    
    $sql= "SELECT title FROM `$x_value` WHERE title LIKE '".$queryString."%' LIMIT 10";    
    $query = mysql_query($sql);    
        while ($row = mysql_fetch_array($query))
		{         
             
         ?>  
         <li onClick="fill('<?php print_r($row['title']);?>')"><?php print_r($row['title']);?></li>   
         <?php   
        } 
	}
    }     
?>