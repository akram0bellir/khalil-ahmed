
<?php
    $conn = mysqli_connect('localhost', 'root', '', 'me') or die("Une erreur s'est produite lors de la connexion à la base de données.");
 $nom = $_POST['nom'];
 $capacite = $_POST['capacite'];
 $localisation= $_POST['localisation'];
 $traiteur= null; 
 $details_saison= $_POST['details_saison'];
 $services = $_POST['services'];
 $prix = $_POST['prix'];
 $type = $_POST['type'];
 $telephone = $_POST['telephone'];
 $email = $_POST['email'];

$service = implode(",",$services);


 



        if ($type == "salle") {
            $sqlS = "INSERT INTO salle
            (nom,capacite,localisaion,date_de_disponibilite,prix,num_telephone,EMAIL,service)
   
    VALUES ('$nom','$capacite','$localisation','','$prix','$telephone','$email','$service') ";
   
       $result = mysqli_query($conn, $sqlS);
       $salleId = mysqli_insert_id($conn);




       if (isset($_FILES['images'])) {
        $images = $_FILES['images'];
      
        for ($i = 0; $i < count($images['name']); $i++) {
          $filename = $images['name'][$i];
          $tmpFilePath = $images['tmp_name'][$i];
      
          
      
          $destination = 'uploads/' . $filename;
          move_uploaded_file($tmpFilePath, $destination);
      
          $query = "INSERT INTO images (place, image) VALUES ('$salleId', '$destination')";
          mysqli_query($conn, $query);
        }
     }  
    
        } 


        else {
        
            $sqlS = "INSERT INTO restaurant
            (nom,localisation,prix,capacite,Parking,Détailsdelasaison,numtelephone,EMAIL)
    VALUES ('$nom','$localisation','$prix','$capacite','$Parking','$details_saison','$telephone','$email') ";
   
       $result = mysqli_query($conn, $sqlS);  
       $salleId = mysqli_insert_id($conn);




       if (isset($_FILES['images'])) {
        $images = $_FILES['images'];
      
        
        for ($i = 0; $i < count($images['name']); $i++) {
          $filename = $images['name'][$i];
          $tmpFilePath = $images['tmp_name'][$i];
      
          $destination = 'uploads/' . $filename;
          move_uploaded_file($tmpFilePath, $destination);
      
          $query = "INSERT INTO images (place, image) VALUES ('$salleId', '$destination')";
          mysqli_query($conn, $query);
        }
     }  
    
    }
    
       header("Location: mega_details.php?salle_id=" . $nouvellement_insere_id);
       header("Location: Home.php");

        exit();
    ?>