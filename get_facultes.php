<?php
require_once "db/connection.php";
if (isset($_POST['Id_Univ'])) {
    $Id_Univ = $_POST['Id_Univ'];
    $query = "SELECT * FROM `faculté` WHERE `Id_Univ` = $Id_Univ ORDER BY `Nom_Fac` ASC";
    $result = mysqli_query($conn, $query);

    $facultes = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $facultes[] = $row;
    }

    echo json_encode($facultes);
}
