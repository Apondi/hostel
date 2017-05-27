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


$query=$conn->prepare("SELECT * FROM cafe WHERE available='yes'");
$query->execute();

$results=$query->fetchAll(PDO::FETCH_ASSOC);

echo "<table>
<tr>
<th>name</th>
<th>description</th>
<th>price</th>
<th>category</th>
<th>available</th>
</tr>";
 
foreach ($results as $row) {
  echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['description'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
  echo "<td>" . $row['category'] . "</td>";
  echo "<td>" . $row['available'] . "</td>";
  echo "</tr>";
 }

 echo "</table>";
 
$conn = null;
 ?>