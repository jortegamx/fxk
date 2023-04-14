<?php



$conn = new mysqli('klusterdb-klu-prod-instance-1.cutmxfdbedwl.us-east-1.rds.amazonaws.com', 'admin', '56C9qhm3*x&8F#i42u', 'master');



if ($conn->connect_error) {

    die("Database connection failed: " . $conn->connect_error);

}



echo "Database connection was successful";
