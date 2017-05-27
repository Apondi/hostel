<?php
	define("DB_SERVER", "localhost");
	define("DB_USER", "root");
	define("DB_PASS", "");
	define("DB_NAME", "test");


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", DB_USER, DB_PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "Connected successfully <br />"; 
     }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

$query=$conn->prepare("CREATE TABLE IF NOT EXISTS cafe (id int(6) NOT NULL auto_increment,name varchar(20) NOT NULL,description varchar(200) NOT NULL,price varchar(20) NOT NULL,category varchar(30) NOT NULL,available varchar(30) NOT NULL,PRIMARY KEY (id),UNIQUE id (id),KEY id_2 (id))");
$query->execute();

$query=$conn->prepare("INSERT INTO cafe VALUES('','tea','different varieties','Ksh.100','drinks','yes')");
$query->execute();

$query=$conn->prepare("INSERT INTO cafe VALUES('','americano','freshly ground ','Ksh.150','drinks','yes')");
$query->execute();

$query=$conn->prepare("INSERT INTO cafe VALUES('','cappuccino','with fully fat or skimmed milk','Ksh.200','drinks','yes')");
$query->execute();

$query=$conn->prepare("INSERT INTO cafe VALUES('','lasagne','with chips or garlic bread','Ksh.650','main','yes')");
$query->execute();

$query=$conn->prepare("INSERT INTO cafe VALUES('','baked potato','with cheese, coleslaw, beans or tuna','Ksh.450','main','yes')");
$query->execute();

$query=$conn->prepare("INSERT INTO cafe VALUES('','pizza','ham and pineapple or four cheese','Ksh.500','main','yes')");
$query->execute();

$query=$conn->prepare("INSERT INTO cafe VALUES('','pasta','with a tomato and garlic sauce','Ksh.550','main','yes')");
$query->execute();

$query=$conn->prepare("INSERT INTO cafe VALUES('','cheescake',' with cream','Ksh.300','pudding','yes')");
$query->execute();

$query=$conn->prepare("INSERT INTO cafe VALUES('','ice cream','various flavours','Ksh.250','pudding','yes')");
$query->execute();

$query=$conn->prepare("INSERT INTO cafe VALUES('','salad','uses seasonal local produce','Ksh.350','side','yes')");
$query->execute();

$query=$conn->prepare("INSERT INTO cafe VALUES('','chocolate cake','with cream','Ksh.250','cake','yes')");
$query->execute();

$query=$conn->prepare("INSERT INTO cafe VALUES('','carrot cake','home made here','Ksh.250','cake','yes')");
$query->execute();

$query=$conn->prepare("INSERT INTO cafe VALUES('','apple pie','with cream or custard','Ksh.350','pudding','yes')");
$query->execute();

$query=$conn->prepare("INSERT INTO cafe VALUES('','soup','server for availabl flavours','Ksh.150','snack','yes')");
$query->execute();

$query=$conn->prepare("INSERT INTO cafe VALUES('','sandwiches','with a variety of fillings','Ksh.200','snack','yes')");
$query->execute();

$query=$conn->prepare("INSERT INTO cafe VALUES('','mandazi','with lemon teste','Ksh.20','snack','yes')");
$query->execute();


$conn = null;
?>