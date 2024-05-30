<?php
require_once "db/connection.php";
if (isset($_POST['Id_Fac'])) {
    $Id_Fac = $_POST['Id_Fac'];
    $query = "SELECT * FROM `departement` WHERE `Id_Fac` = $Id_Fac ORDER BY `Nom_Dep` ASC";
    $result = mysqli_query($conn, $query);

    $departements = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $departements[] = $row;
    }

    echo json_encode($departements);
}
