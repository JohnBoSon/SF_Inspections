


<?php 

        require  'medoo.php';
        
        $yearexp = $_GET['yearexp']; 
          		
  		
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
        
        $data = $database->update("inspector", [
				"iiexp[+]" => $yearexp
		]);


?> 
