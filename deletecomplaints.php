
<?php 

        require  'medoo.php';
        include 'restaurant_names.php';

	  	$checkc = "business not found";
        
        $business = $_GET['business']; 
        
        $rowsAffected = 0;
  		


			if (in_array($business, $rest)){ 
          	$checkc = "business found";
  			}
  		



         
        use Medoo\Medoo;
         
        $database = new Medoo([
                // required
                'database_type' => 'mysql',
                'database_name' => 'sazaesan_sffood',
                'server' => 'localhost',
                'username' => 'sazaesan_sffood1',
                'password' => 'LeBdP{=~hinz', 
      	        'logging' => true,
         
                'option' => [
                        PDO::ATTR_CASE => PDO::CASE_NATURAL
                ],
         
                'command' => [
                        'SET SQL_MODE=ANSI_QUOTES'
                ]
        ]);
        
        if($checkc == "business found"){
   			//echo("working");
        	$data = $database->delete("report", [
					"rbname" => $business
			]);
 			$rowsAffected = $data->rowCount();
			
    	}

		echo ("{\"set_attributes\":{\"checkc\":\"$checkc\", \"rowsAffected\":\"$rowsAffected\"}}");

?> 
