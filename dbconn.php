<?php 
	
	try{

		$con = new PDO("mysql://host=localhost;dbname=saas;",'root','');

	}catch(PDOException $err){
		$err = "jhgljlkjllkjglk";
		echo $err;
	}

?>