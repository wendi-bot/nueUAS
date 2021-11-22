<?php

include("connect.php");


$sql = "SELECT * FROM content";
$result = array();
$query = mysqli_query($db, $sql);

while ($row = mysqli_fetch_array($query)) {

    array_push($result, array(
        'kategori' => $row['kategori'],
        'judul' => $row['judul'],
        'image' => $row['image'],
    ));
}

echo json_encode(array("pilih" => $result));
