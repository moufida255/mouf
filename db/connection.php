
<?php
session_start();

function sanitize($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

$conn = mysqli_connect('localhost', 'root', '', 'permutation_en_ligne');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//$query = "SELECT * FROM demande WHERE ";
/*$select = mysqli_query($conn, "SELECT COUNT(*) AS count, departement, wilaya, Date_Demande FROM demande
 GROUP BY departement, wilaya, Date_Demande HAVING COUNT(*) > 1");

if ($select) {
    while ($row = mysqli_fetch_assoc($select)) {
        $departement = mysqli_real_escape_string($conn, $row['departement']);
        $wilaya = mysqli_real_escape_string($conn, $row['wilaya']);
        $Date_Demande = mysqli_real_escape_string($conn, $row['Date_Demande']);
        $update = mysqli_query($conn, "UPDATE demande SET Status='1' 
        WHERE departement = '$departement' AND wilaya = '$wilaya' AND date_Demande = '$date'");

        if (!$update) {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
} else {
    echo "Error selecting records: " . mysqli_error($conn);
}
*/

?>

