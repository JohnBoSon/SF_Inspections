<html>
<body>
<?php
	echo("Hello World");
?>


<?php 

	checkRestaurant("woop");


  function checkRestaurant($business) {
  $restaurants = array("cat",65,70, 87); 
  if (in_array($business, $restaurants)){ 
  	echo "found"; 
  }else{ 
  	echo "not found"; 
  } 
}


        require  'medoo.php';
         
        // Using Medoo namespace
        use Medoo\Medoo;
         
        $database = new Medoo([
                // required
                'database_type' => 'mysql',
                'database_name' => 'sazaesan_sffood',
                'server' => 'localhost',
                'username' => 'sazaesan_sffood1',
                'password' => 'LeBdP{=~hinz',
         
                // [optional]
                //'charset' => 'utf8',
                //'port' => 3306,
         
                // [optional] Table prefix
                //'prefix' => 'PREFIX_',
         
                // [optional] Enable logging (Logging is disabled by default for better performance)
                'logging' => true,
         


         
                // [optional] driver_option for connection, read more from http://www.php.net/manual/en/pdo.setattribute.php
                'option' => [
                        PDO::ATTR_CASE => PDO::CASE_NATURAL
                ],
         
                // [optional] Medoo will execute those commands after connected to the database for initialization
                'command' => [
                        'SET SQL_MODE=ANSI_QUOTES'
                ]
        ]);
        
        /*$messenger_id = $_GET['messenger_user_id'];
        $first_name = $_GET['first_name'];
        $last_name = $_GET['last_name']; 
        $gender = $_GET['gender'];
*/
//        $user_type = $_GET['user_type'];
//        $source = $_GET['biz_name'];
//        $email = $_GET['email_address'];
//        $phone = $_GET['phone_number'];
        //$registration_date = date("Y-m-d");
        
        //Switches for testing
        //echo "ID: ".$messenger_id."</br>";
        //echo "First Name: ".$first_name."</br>";
        //echo "Last Name: ".$last_name."</br>";
        //echo "Gender: ".$gender."</br>";
        //echo "Biz Name: ".$source."</br>";
        //echo "Email: ".$email."</br>";
        //echo "Phone: ".$phone."</br>";
        
        $database->insert("report", [
                "rid" => 1,
                "rbname" => "wop",
                "rbusinessid" => 3
        ]);
 		
$data = $database->select("business", [
	"bbusinessid"], [
	"bname" => "Deli 23"
]);
  	echo $data[0]["bbusinessid"]; 

 		$database->insert("report", [
                "rid" => 3,
                "rbname" => "wosp",
                "rbusinessid" => $data[0]["bbusinessid"]
        ]);




?> 

</body>
</html>