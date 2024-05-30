<?php

include_once "../db/connection.php";
$select_wilaya = mysqli_query($conn, "SELECT Nom_Spés,Id_Spés FROM `spécialité`  ORDER BY Nom_Spés ASC");
$data = array();
while ($row = mysqli_fetch_assoc($select_wilaya)) {
    $data[] = $row;
}
echo json_encode($data);
