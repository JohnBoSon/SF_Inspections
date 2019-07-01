
<?php 
//http://hammockstudy.com/sfoodAddUser.php?first_name={{first name}}&last_name={{last name}}&gender={{gender}}&business={{business}}

        require  'medoo.php';
        include 'restaurant_names.php';

	  	$checkb = "not found";


        $messenger_user_id = $_GET['messenger_user_id'];
        $first_name = $_GET['first_name'];
        $last_name = $_GET['last_name']; 
        $gender = $_GET['gender'];
        $registration_date = date("Y-m-d");
        
        $business = $_GET['business']; 
        

  		


			if (in_array($business, $rest)){ 
				//echo("$business");
          $checkb = "found";
  			}
  			//echo("$business");
   			//echo("$checkb");

		  echo ("{\"set_attributes\":{\"checkb\":\"$checkb\"}}");


         
        // Using Medoo namespace
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
        
        if($checkb == "found"){
   			//echo("working");

			$data = $database->select("business", [
				"bbusinessid"], [
				"bname" => $business
			]);
        
       	 	$database->insert("report", [
        	        "rbusinessid" => $data[0]["bbusinessid"],
                	"rbname" => $business,
                  "rdate" => $registration_date,
                	"ruid" => $messenger_user_id
        	]);
 		
			$database->insert("user", [
                	"ufirstname" => $first_name,
                	"ulastname" => $last_name,
                	"ugender" => $gender,
                	"uid"=> $messenger_user_id
        	]);
    	}


?> 
