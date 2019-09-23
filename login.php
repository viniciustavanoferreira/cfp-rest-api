<?php

include 'connection_factory.php';

$username = $_POST['username'];
$password = $_POST['password'];
$conn = OpenCon();

$queryResult = $conn->query("SELECT * FROM usuario WHERE coduser = '".$username."' AND codpassword = '".$password."'");

$result = array();

while($fetchData = $queryResult->fetch_assoc()){
    $result[] = $fetchData;
}

echo json_encode($result);

CloseCon($conn);

?>