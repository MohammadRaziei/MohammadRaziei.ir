<?php
$servername = "127.0.0.1";
$username = "mohamm29_admin";
$password = "mohamm29_admin";
$dbname = "mohamm29_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$result = $conn->query('SELECT * FROM `links`'); 
if (!$result) die('Couldn\'t fetch records'); 
$num_fields = mysqli_num_fields($result); 
$headers = array(); 
for ($i = 0; $i < $num_fields; $i++) 
{     
       $headers[] = mysqli_fetch_field_direct($result,$i)->name; 
} 
$fp = fopen('php://output', 'w'); 
if ($fp && $result) 
{     
       header('Content-Type: text/csv');
       header('Content-Disposition: attachment; filename="links.csv"');
       header('Pragma: no-cache');    
       header('Expires: 0');
       fputcsv($fp, $headers); 
       while ( (mysqli_num_rows($result) > 0) ) 
       {
          fputcsv($fp, array_values($row)); 
       }
die; 
} 


?>