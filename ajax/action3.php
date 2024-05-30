<?php

include_once "../db/connection.php";
if (isset($_POST['Id_fac'])) {
    $Id_fac = intval($_POST['Id_fac']);
    $select_wilaya = mysqli_query($conn,"SELECT * FROM `departement` WHERE  `Id_fac`= $Id_fac");
    $data = array();
    while ($row = mysqli_fetch_assoc($select_wilaya)) {
        $data[] = $row;
    }
    echo json_encode($data);
}
