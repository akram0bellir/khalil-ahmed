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
            <li><a href="Home.php">Accueil</a></li>
         
        </ul>
    </header>

    <section class="banniere" id="banniere">
        <div class="contenu">
            <h2>Trouvez la salle idéale pour votre mariage</h2>
        </div>
    </section>

    <form action="recherche.php" method="get">
        <label for="type_salle">Type de salle :</label>
        <select name="type_salle" id="type_salle">
            <option value="salle_des_fetes">Salle des fêtes</option>
            <option value="restaurant">Restaurant</option>
        </select>
        <br>
        <label for="prix_min">Prix minimum :</label>
        <input type="text" id="prix_min" name="prix_min">
        <br>
        <label for="prix_max">Prix maximum :</label>
        <input type="text" id="prix_max" name="prix_max">
        <br>
        <label for="capacite_min">Capacité minimum :</label>
        <input type="text" id="capacite_min" name="capacite_min">
        <br>
        <label for="capacite_max">Capacité maximum :</label>
        <input type="text" id="capacite_max" name="capacite_max">
        <br>
        <input type="submit" value="Rechercher">
    </form>

    <?php
 $conn = mysqli_connect('localhost', 'root', '', 'me') or die("Une erreur s'est produite lors de la connexion à la base de données.");

 $typeSalle = $_GET['type_salle'];
 $prixMin = $_GET['prix_min'];
 $prixMax = $_GET['prix_max'];
 $capaciteMin = $_GET['capacite_min'];
 $capaciteMax = $_GET['capacite_max'];

        $sqlS = "SELECT * from salle WHERE 
                prix >= '$prixMin' AND prix <= '$prixMax'
                AND capacite >= '$capaciteMin' AND capacite <= '$capaciteMax'";

    $result = mysqli_query($conn, $sqlS);
      if(mysqli_num_rows($result)){
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<h2>Résultats de recherche :</h2>";
                echo "<div class='salle'>";
                echo "<h3>" . $row['nom'] . "</h3>";
                echo "<p>Prix: " . $row['prix'] . "</p>";
                echo "<p>Capacité: " . $row['capacite'] . "</p>";
                echo "</div>";
        } }
         else {
            echo "<p>Aucun résultat trouvé.</p>";
        }
    
    ?>

    <script>
        function toggleMenu() {
            var navbar = document.querySelector('.navbar');
            var menuToggle = document.querySelector('.menuToggle');
            navbar.classList.toggle('active');
            menuToggle.classList.toggle('active');
        }
    </script>
</body>

</html>