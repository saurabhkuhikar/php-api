<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

include "config.php";

$sql = "SELECT city_name,id FROM cities";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$cityList = [];
if (mysqli_num_rows($result) > 0) {

    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo json_encode($output);

} else {

    echo json_encode(['message' => 'No Record Found.', 'status' => false]);

}
