<?php

$conn = mysqli_connect("localhost", "root", "", "database_destinasi_wisata_indonesia");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Error: " . mysqli_error($conn));
    }
    
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
