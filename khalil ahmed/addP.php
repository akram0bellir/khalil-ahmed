<?php
    $conn = mysqli_connect('localhost', 'root', '', 'me') or die("Une erreur s'est produite lors de la connexion à la base de données.");
    $type = $_POST['type'];
 $nom = $_POST['nom'];
 $contact = $_POST['contact'];
 $prix= $_POST['prix']; 
 $localisation= $_POST['localisation'];
 $instagram = $_POST['instagram'];
 $deplacement = $_POST['deplacement'];


 if ($type =="dj") {
    $sqlS = "INSERT INTO dj
        (NOM,contact,localisation,deplacement,instagram,prix)

 VALUES ('$nom','$contact','$localisation','$deplacement','$instagram','$prix')";
    $result = mysqli_query($conn, $sqlS);
    
}
if ($type =="photographe") {
    $sqlS = "INSERT INTO photographe
    (nom,contact,localisation,deplacement,instagram,prix)
VALUES ('$nom','$contact','$localisation','$deplacement','$instagram','$prix')";
$result = mysqli_query($conn, $sqlS);
}
if ($type == "decoratrice") {
    $sqlS = "INSERT INTO décoratrice
       (nom,contact,localitation,deplacement,instagram,prix)
VALUES ('$nom','$contact','$localisation','$deplacement','$instagram','$prix')";
    $result = mysqli_query($conn, $sqlS);
}
if ($type == "salon_de_beaute") {	
    $sqlS = "INSERT INTO salon
        (nom,contact,localition,prix,deplacement,instagram)
VALUES ('$nom','$contact','$localisation','$prix','$deplacement','$instagram')";
    $result = mysqli_query($conn, $sqlS);
    
}
$salleId = mysqli_insert_id($conn);
if (isset($_FILES['imagess'])) {
 $images = $_FILES['imagess'];

 for ($i = 0; $i < count($images['name']); $i++) {
   $filename = $images['name'][$i];
   $tmpFilePath = $images['tmp_name'][$i];
   $destination = 'uploads/' . $filename;
   move_uploaded_file($tmpFilePath, $destination);
   $query = "INSERT INTO images (place, image) VALUES ('$salleId', '$destination')";
   mysqli_query($conn, $query);
 }
}  
header("Location:home.php");
    ?>