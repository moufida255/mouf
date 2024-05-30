<?php 

include_once "../db/connection.php";

if(isset($_POST['Id_Univ'])){
    $Id_Univ = intval($_POST['Id_Univ']);
    $select_wilaya = mysqli_query($conn,"SELECT * FROM `faculté` WHERE Id_Univ = '$Id_Univ'");
    //echo json_encode(mysqli_fetch_assoc($select_wilaya));

    $data = array();
    while($row = mysqli_fetch_assoc($select_wilaya)){
        $data[]= $row;
    }
    echo json_encode($data);

    

    
}
