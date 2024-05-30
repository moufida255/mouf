<?php 

include_once "../db/connection.php";

if(isset($_POST['wilaya'])){
    $wilaya = intval($_POST['wilaya']);
    $select_wilaya = mysqli_query($conn,"SELECT * FROM `université` WHERE  `Id_Wilay`= $wilaya");
    //echo json_encode(mysqli_fetch_assoc($select_wilaya));

    $data = array();
    while($row = mysqli_fetch_assoc($select_wilaya)){
        $data[]= $row;
    }
    echo json_encode($data);

    

    
}
