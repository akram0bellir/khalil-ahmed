<?php
            // add Reservation
    $conn = mysqli_connect('localhost', 'root', '', 'me') or die("Une erreur s'est produite lors de la connexion à la base de données.");
    $id = $_POST['annule'];

    $sqlS = "DELETE FROM réservation WHERE
              id = '$id'";
    $result = mysqli_query($conn, $sqlS);
          // Fin add Reservation
          header("Location:home.php");

    ?>
    