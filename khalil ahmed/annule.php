<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cremonies</title>
    
</head>
<body>
<header>
    <a href="#" class="logo"><span>C</span>remonies</a>
    <div class="menuToggle" onclick="toggleMenu();"></div>
    <ul class="navbar">
        <li><a href="Home.php" >Accueil</a></li>
       <li><a href="#reservationForm" onclick="toggleMenu();">Réservation</a></li>
      
    </ul>
</header>
<section class="banniere" id="banniere">
        <div class="contenu">
        </div>

         </section>
        </div>
      </div>


<?php
            // add Reservation
    $conn = mysqli_connect('localhost', 'root', '', 'me') or die("Une erreur s'est produite lors de la connexion à la base de données.");
    $type = $_POST['type'];
 $nom = $_POST['nom'];
 $prenom = $_POST['prenom'];
 $email= $_POST['email'];
 $telephone= $_POST['telephone']; 
 $date= $_POST['date'];

    $sqlS = "INSERT INTO réservation
(nom,prenom,Email,telephone,Date_de_reservation,typee) 
 VALUES ('$nom','$prenom','$email','$telephone','$date','$type')";
    $result = mysqli_query($conn, $sqlS);
          // Fin add Reservation
    ?>

     </form>
     <?php
     $sqlSS = "SELECT * from réservation WHERE
     nom = '$nom' AND
     prenom = '$prenom' AND
     Email = '$email' AND
     telephone = '$telephone' AND
     Date_de_reservation = '$date' 
            ";

    $result = mysqli_query($conn, $sqlSS);
      if(mysqli_num_rows($result)){
        while($row = mysqli_fetch_assoc($result))
        {
            echo " <form action='AnnuleID.php' method='POST' id='reservationForm'>";
            echo " <div class='form-group'>
                   <h2> Reservation :</h2>";
                echo "<div class='salle'>";
                echo "<p> Nom:" . $row['nom'] . "</p>";
                echo "<p>Prenom: " . $row['prenom'] . "</p>";
                echo "<p>Telephone: " . $row['telephone'] . "</p>";
                echo "<p>Date_de_reservation: " . $row['Date_de_reservation'] . "</p>";
                echo "<p>Type: " . $row['typee'] . "</p>";
                echo "</div>";
                echo "
                      <div class='form-group'>
                <label for='annule'>ID :</label>
                <input type='number' id='annule' name='annule' value = ". $row['id'] ." readonly dissabled>
                </div>
                <button class='annuler' type='submit' onclick='annulerReservation()'>Annuler la réservation</button>";
                echo "</div>  </div>";
                echo "<div id='annulation' style='display: none;'>
                <h3>Annulation de réservation :</h3>
                <p>Vous avez annulé votre réservation pour le numéro : <span id='numeroAnnulation'></span></p>
                </div>
                </form>";
        } } 
    
    ?>


</body>
</html>