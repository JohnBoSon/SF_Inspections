<?php 

        require  'medoo.php';
                
        $userRows = 0;
        $reportRows = 0;



         
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
        
        	$data = $database->delete("user", [
					"uid[!]" => "empty"
			]);

 			$userRows = $data->rowCount();

 			$data = $database->delete("report", [
					"ruid[!]" => "empty"
			]);

 			$reportRows = $data->rowCount();
			
		  echo ("{\"set_attributes\":{\"reportRows\":\"$reportRows\",\"userRows\":\"$userRows\"}}");

?> 