<?php
// Create connection
$conn = new mysqli("128.199.195.92", "oeuser3", "4321ToughJob^", "aks");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 
$session_no = 5;
$pt_one = 5; $pt_two= 10;  $pt_three=3;$pt_four = 0; $pt_five= 0; 
$m_one = 5; $m_two= 10;  $m_three=20;$m_four = 20; $m_five= 10; 

$sql = "SELECT id, eg, payscale, grade, tarikh_kemasukan  FROM data limit 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["eg"]. " ". $row["payscale"]. " " . $row["grade"]. " " .
        $row["tarikh_kemasukan"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();