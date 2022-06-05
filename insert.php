<?php

    include 'connection.php';

    $query = "INSERT INTO `book`(`judul`, `pengarang`, 
     `jumlah halaman`, `tanggal`, `abstrak`) VALUES('new aqua','nurul fajri', 
     '70', '2017-09-09', 'buku aqua') ";
    $statement = $connection->query($query);
    $statement->setFetchMode(PDO::FETCH_ASSOC);

    $result = $statement->fetchAll();

    $output = ['Insert '];


header('Content-Type: application/json');
echo json_encode($output);

?>