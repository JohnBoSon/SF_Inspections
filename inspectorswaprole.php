


<?php 

        require  'medoo.php';
        $checks = "Failure";
        $inspectora = $_GET['inspectora']; 
        $inspectorb = $_GET['inspectorb']; 

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
        


  		$tempa = $database->select("inspector", [
			"iitype"
		], [
			"iiname" => $inspectora
		]);


		$tempb = $database->select("inspector", [
			"iitype"
		], [
			"iiname" => $inspectorb
		]);



		if($tempb[0]["iitype"] != NULL&&$tempa[0]["iitype"] != NULL){
			$database->update("inspector", [
				"iitype" => $tempb[0]["iitype"]
			], [
				"iiname" => $inspectora
			]);
		
			$database->update("inspector", [
				"iitype" => $tempa[0]["iitype"]
			], [
				"iiname" => $inspectorb
			]);

   			$checks = "Successful";
		}

		
   		if($tempa[0]["iitype"] == NULL){
   			$inspectora = $inspectora . " is not a valid name"; 
   		}else{
   	   		$inspectora = $inspectora . " is a valid name"; 	

   		}
		
		if($tempb[0]["iitype"] == NULL){
   			$inspectorb = $inspectorb . " is not a valid name"; 	
   		}else{
			$inspectorb = $inspectorb . " is a valid name"; 	

   		}

   		echo ("{\"set_attributes\":{\"inspectora\":\"$inspectora\", \"inspectorb\":\"$inspectorb\", \"checks\":\"$checks\"}}");


?> 
