<?php  /*
require_once "connection.php" ;

$select = mysqli_query($conn, "SELECT departement, wilaya, Date_Demande FROM demande");

$select1 = mysqli_query($conn, "SELECT departement, Adresse_Ens FROM enseignant");

$row1 = mysqli_fetch_assoc($select1);
echo $row1['Adresse_Ens'];

$row = mysqli_fetch_assoc($select);
if($row1['Adresse_Ens'] == $row['wilaya']){

    echo 'satisfait wilaya';
    if($row1['departement'] == $row['departement']){
        echo 'oui';
    }else{
        echo 'non';
    }
}
else{
    echo 'erreur';
}
*/

?>

<?php 
require_once "connection.php";


// Query to fetch data from the 'demande' table, ordered by 'Date_Demande'
$selectDemande = mysqli_query($conn, "SELECT departement, wilaya, Date_Demande FROM demande ORDER BY Date_Demande");

if (!$selectDemande) {
    die('Error in demande query: ' . mysqli_error($conn));
}

// Query to fetch data from the 'enseignant' table
$selectEnseignant = mysqli_query($conn, "SELECT departement, Adresse_Ens FROM enseignant");

if (!$selectEnseignant) {
    die('Error in enseignant query: ' . mysqli_error($conn));
}

// Fetch all records from enseignant table
$enseignants = [];
while ($rowEnseignant = mysqli_fetch_assoc($selectEnseignant)) {
    $enseignants[] = $rowEnseignant;
}

// Compare records from demande table with enseignant table
while ($rowDemande = mysqli_fetch_assoc($selectDemande)) {
    foreach ($enseignants as $enseignant) {
        if ($rowDemande['wilaya'] == $enseignant['Adresse_Ens'] && $rowDemande['departement'] == $enseignant['departement']) {
            echo "Success: Departement and Wilaya match for Date_Demande " .  $rowDemande['Date_Demande'] . "<br>";
            $departement = mysqli_real_escape_string($conn, $rowDemande['departement']);
            $wilaya = mysqli_real_escape_string($conn, $rowDemande['wilaya']);
            $update = mysqli_query($conn, "UPDATE demande SET status='1'
            WHERE departement = '$departement' AND wilaya = '$wilaya'");
        }
    }
}
/*
// Requête pour récupérer les données de la table "demande"
$select = mysqli_query($conn, "SELECT departement, wilaya, Date_Demande FROM demande");

// Requête pour récupérer les données de la table "enseignant"
$select1 = mysqli_query($conn, "SELECT departement, Adresse_Ens FROM enseignant");

if(!$select || !$select1) {
    die('Erreur de requête : ' . mysqli_error($conn));
}
$enseignants = [];
while($row1 = mysqli_fetch_assoc($select1)) {
    $enseignants[] = $row1;
}
$demandes = [];
while($row = mysqli_fetch_assoc($select)) {
    $demandes[] = $row;
}

// Comparaison des colonnes des deux tableaux
foreach($demandes as $demande) {
    foreach($enseignants as $enseignant) {
        if($demande['wilaya'] == $enseignant['Adresse_Ens']) {
            echo 'Satisfait wilaya<br>';
            if($demande['departement'] == $enseignant['departement']) {
                echo 'Oui<br>';
            } else {
                echo 'Non<br>';
            }
        } else {
            echo 'Erreur<br>';
        }
    }
}*/
?>