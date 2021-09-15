<?php
$db['db_host'] = "localhost";
$db['db_user'] = "cabman_PrinceDKO";
$db['db_pass'] = "z~@-@s1BH1UD";
$db['db_name'] = "cabman_cabman";

foreach($db as $key => $value){
	define(strtoupper($key), $value);
}

   $connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
//
//    if($connection) {
//		
//        die("Database connection successful");
//   
//	}

?>
<?php
$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "cabman";

foreach($db as $key => $value){
	define(strtoupper($key), $value);
}

   $connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
//
//    if($connection) {
//		
//        die("Database connection successful");
//   
//	}

?>
