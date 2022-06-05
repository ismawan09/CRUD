<?php

include 'connection.php';

$query = "UPDATE `book` SET `judul` = 'paquito', `jumlah halaman` = 300, 
`abstrak` = 'tinju di balas tinju' WHERE isbn = 1";
$statement = $connection->query($query);
$statement->setFetchMode(PDO::FETCH_ASSOC);

$result = $statement->fetchAll();

$output = ['Updated'];


header('Content-Type: application/json');
echo json_encode($output);