<?php  
/* $serverName="localhost";
 $userName  ="root";
 $password  ="";
 $dbName    ="test";
 $connect   =mysqli_connect($serverName,$userName, $password, $dbName);

 function checkConnection($connect){

 	if(!$connect){
 		throw new Exception("connection to Database Failed");
 		
 	}
 	return true;
 }
 try{
 checkConnection($connect);
 echo "";
}

catch(exception $e){
echo $e->getMessage();
	}*/




define('USER', 'root');
define('PASSWORD', '');
define('HOST', 'localhost');
define('DATABASE', 'test');
 
try {
    $connect = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>