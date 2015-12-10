 <?php
 include 'db.php';
 
 try{
	 
# MySQL with PDO_MYSQL  
  $DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
  $STH = $DBH->query("select * from ttcompsci.wellness order by id desc;");  
  $STH->setFetchMode(PDO::FETCH_OBJ); 
		//$therows = $STH->fetchColumn();
		//echo "$therows <hr />";
		while($row = $STH->fetch()){
			echo $row->id . " ~ \n";  
			echo $row->ip . " ~ \n";  
			echo $row->timein . " ~ \n";  
			echo $row->datein . " ~ \n";   
	    		echo $row->namenumber  . " ~ \n";   
	     		echo $row->scores  . " ~ \n";  
	      		echo $row->total  . " ~ \n";  
	    		echo " <br />";
	   	}
	}
    catch(Exception $e)

    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';

    }



?>

