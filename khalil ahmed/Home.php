
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
        <a href="#" class="logo"><span>C</span>éremonies</a>
        <div class="menuToggle" onclick="toggleMenu();"></div>
        <ul class="navbar">
            <li><a href="Home.php">Accueil</a></li>
            <li><a href="#apropos" onclick="toggleMenu();">Salles</a></li>
            <li><a href="#Prestataires" onclick="toggleMenu();">Prestataires</a></li>
            <li><a href="#Top Restaurant" onclick="toggleMenu();">Restaurant</a></li>
        </ul>
    </header>

    <section class="banniere" id="banniere">
        <div class="contenu">
            <h2>Trouvez la salle idéale pour votre mariage</h2>
        </div>
    </section>
  








    <div class="filter">
  <form action="recherche.php" method="get">
    <div class="label">
      <label for="type_salle">Type de salle :</label>
      <select name="type_salle" id="type_salle">
        <option value="salle_des_fetes">Salle des fêtes</option>
        <option value="restaurant">Restaurant</option>
      </select>
      <br>
      <label for="prix_min">Prix minimum :</label>
      <input type="text" id="prix_min" name="prix_min" value="0">
      <div class="range-slider">
        <div class="slider">
          <input type="range" min="0" max="8" step="1" value="0" id="price_min_range">
        </div>
      </div>

      <br>
      <label for="prix_max">Prix maximum :</label>
      <input type="text" id="prix_max" name="prix_max" value="8000000">
      <div class="range-slider">
        <div class="slider">
          <input type="range" min="0" max="8" step="1" value="8" id="price_max_range">
        </div>
      </div>
      <br>
      <label for="capacite_min">Capacité minimum :</label>
      <input type="text" id="capacite_min" name="capacite_min" value="0">
      <div class="range-slider">
        <div class="slider">
          <input type="range" min="0" max="20" step="1" value="0" id="capacity_min_range">
        </div>
      </div>
      <br>
      <label for="capacite_max">Capacité maximum :</label>
      <input type="text" id="capacite_max" name="capacite_max" value="1000">
      <div class="range-slider">
        <div class="slider">
          <input type="range" min="0" max="20" step="1" value="20" id="capacity_max_range">
        </div>
      </div>
      <br>
      <input type="submit" value="Rechercher">
    </div>
   
  </form>
</div>




 <script>
 var priceMinRange = document.getElementById("price_min_range");
 var priceMaxRange = document.getElementById("price_max_range");
 var prixMinInput = document.getElementById("prix_min");
 var prixMaxInput = document.getElementById("prix_max");

 priceMinRange.addEventListener("input", function() {
  prixMinInput.value = parseInt(priceMinRange.value) * 10_000_00;
 });

 priceMaxRange.addEventListener("input", function() {
  prixMaxInput.value = parseInt(priceMaxRange.value) * 10_000_00;
 });

 var capacityMinRange = document.getElementById("capacity_min_range");
 var capacityMaxRange = document.getElementById("capacity_max_range");
 var capaciteMinInput = document.getElementById("capacite_min");
 var capaciteMaxInput = document.getElementById("capacite_max");

 capacityMinRange.addEventListener("input", function() {
  capaciteMinInput.value = parseInt(capacityMinRange.value) * 50;
 });
   capacityMaxRange.addEventListener("input", function() {
  capaciteMaxInput.value =  parseInt(capacityMaxRange.value) * 50;
 });


  </script>





 <?php

 $conn = mysqli_connect('localhost', 'root', '', 'me') or die("Une erreur s'est produite lors de la connexion à la base de données.");

 ?>

   <section class="apropos" id="apropos">
    <div class="row">
        <div class="col50">
            <h2 class="titre-texte"><span>A</span> Propos De Nous</h2>
            <p>
                Bienvenue sur notre site d'organisation de cérémonie ! Nous sommes une équipe de professionnels passionnés par l'art de créer des événements inoubliables pour nos clients. Nous comprenons que chaque célébration est unique et mérite une attention particulière pour refléter la personnalité et les goûts de nos clients.
                
                
                Notre objectif est de faire de votre cérémonie un moment mémorable et sans stress en prenant en charge tous les aspects de l'organisation, depuis la planification initiale jusqu'à la réalisation finale. Nous travaillons avec vous pour créer une expérience sur mesure qui répond à vos besoins et dépasse vos attentes.
                
                </p>
        </div>
        
        <div class="col50">
            <div class="img">
                <img src="./images/A.jpg" alt="image">
            </div>
        </div>
    </div>
   </section>

   <section class="Top " id="Top salles">
    <div class="titre">
        <h2 class="titre-texte"><span>T</span>op Salle</h2>
     
    </div>
    <div class="contenu">
    <?php






$query = "SELECT s.id, s.nom, i.image
FROM salle s
LEFT JOIN images i ON s.id = i.place
GROUP BY s.id";

$result = mysqli_query($conn, $query);

$salleImages = array();
$i = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $salleId = $row['id'];
    $salleName = $row['nom'];
    $image = $row['image'];
    
    if ($image) {
        echo "<div class='box'>
                <div class='imbox'>
                    <a href='Mega.php?id=".urlencode($salleId)."'><img src='".$image."' alt='Image' width='200'></a>
                </div>
                <div class='text'>
                    <h3>".$salleName."</h3>
                </div>
            </div>";
    }




   $i++;
}
        ?>

        </div>
        
    </div>
 </div>

</section> 



<section class="RE " id="Top Restaurant">
    <div class="titre">
        <h2 class="titre-texte"><span>T</span>op Restaurant</h2>
    </div>




    <div class="contenu">  
    <?php

$conn = mysqli_connect('localhost', 'root', '', 'me') or die("Une erreur s'est produite lors de la connexion à la base de données.");


 $query = "SELECT r.id, r.nom, i.image
FROM restaurant r
LEFT JOIN images i ON r.id = i.place
GROUP BY r.id";

$result = mysqli_query($conn, $query);

$restaurantImages = array();
$i = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $restaurantId = $row['id'];
    $restaurantName = $row['nom'];
    $image = $row['image'];
    
    if ($image) {
        echo "<div class='box'>
                <div class='imbox'>
                    <a href='RESTAURANT.php?id=".urlencode($restaurantId)."'><img src='".$image."' alt='Image' width='200'></a>
                </div>
                <div class='text'>
                    <h3>".$restaurantName."</h3>
                </div>
            </div>";
    }

    $i++;
}
?>

</div>


<section class="Prestataires" id="Prestataires">
    <div class="titre">
        <h2 class="titre-texte"> <span>D</span>J, Photographe, Décoratrice, ... à vous de choisir</h2>
        <p>Des centaines de prestataires pour vous et votre mariage ! </p>
    </div>
    <div class="contenu">
        <div class="box">
            <div class="imbox">
                <a href="photo.PHP"><img src="images/photographe 3.jfif" alt="" width="200"></a>
            </div>
            <div class="text">
                <h3>Photographe</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <a href="dj.PHP"><img src="images/djj.jfif" alt="" width="200"></a>
            </div>
            <div class="text">
                <h3>DJ</h3>
            </div>
         
        </div>
        <div class="box">
            <div class="imbox">
                <a href="Décoratrice.PHP"><img src="images/d.jfif" alt="" width="200"></a>
            </div>
            <div class="text">  
                <h3>Décoratrice</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <a href="SALON.PHP"><img src="images/salon de.jfif" alt="" width="200"></a>
            </div>
            <div class="text">
                <h3>Salon de beaute </h3>
            </div>
        </div>
    </div>
 </div>
 












        

       
 </div>
 </body>
 

 <div class="form-container">
    <h2>Ajouter une salle ou un restaurant</h2>
    <form action="addSR.php" method="POST" enctype="multipart/form-data">
        <label for="type">Type :</label>
        <select name="type" id="type">
            <option value="salle">Salle</option>
            <option value="restaurant">Restaurant</option>
        </select>
        <br><br>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required>
        <br><br>
        <label for="capacite">Capacité :</label>
        <input type="number" name="capacite" id="capacite" required>
        <br><br>
        <label for="prix">Prix :</label>
        <input type="number" name="prix" id="prix" required>
        <br><br>
        <label for="localisation">Localisation :</label>
        <input type="text" name="localisation" id="localisation" required>
        <br><br>
        <label for="image">Image :</label>
        <input type="file" name="images[]" id="image" required accept="image/*" multiple>
        <br><br>
        <label for="details_saison">Détails de la saison :</label>
        <textarea name="details_saison" id="details_saison" required></textarea>
        <br><br>
        <label>Services disponibles :</label>
        <br>
        <input type="checkbox" name="services[]" value="traiteur"> Traiteur
        <input type="checkbox" name="services[]" value="parking"> Parking
        <input type="checkbox" name="services[]" value="restauration"> Restauration
        <input type="checkbox" name="services[]" value="musique"> Musique
        <input type="checkbox" name="services[]" value="consommation"> Consommation
        <input type="checkbox" name="services[]" value="cafe"> Café
        <br><br>
        <label for="telephone">Numéro de téléphone :</label>
        <input type="tel" name="telephone" id="telephone" required>
        <br><br>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required>
        <br><br>
        <input type="submit" value="Ajouter">
    </form>
</div>

<div class="form-container">
    <h2>Ajouter un prestataire</h2>
    <form action="addp.php" method="POST" enctype="multipart/form-data">
        <label for="type">Type :</label>
        <select name="type" id="type" required>
            <option value="dj">DJ</option>
            <option value="photographe">Photographe</option>
            <option value="decoratrice">Décoratrice</option>
            <option value="salon_de_beaute">Salon de Beauté</option>
        </select>
        <br><br>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required><br>
        <label for="contact">Contact :</label>
        <input type="text" name="contact" id="contact" required><br>
        <label for="image">Image :</label>
        <input type="file" name="imagess[]" id="image" required accept="image/*" multiple>
        <br>
        <label for="localisation">Localisation :</label>
        <input type="text" name="localisation" id="localisation" required><br>
        <label for="instagram">Instagram :</label>
        <input type="text" name="instagram" id="instagram" required><br>
        <label for="prix">Prix :</label>
        <input type="text" name="prix" id="prix" required><br>
        <label for="deplacement">Déplacement :</label>
        <select name="deplacement" id="deplacement" required>
            <option value="oui">Oui</option>
            <option value="non">Non</option>
        </select><br>
        <label for="telephone">Numéro de téléphone :</label>
        <input type="tel" name="telephone" id="telephone" required>
        <br><br>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required>
        <br><br>
        <input type="submit" value="Ajouter">
    </form>
</div>



<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = $_POST["nom"];
    $contact = $_POST["contact"];
    $localisation = $_POST["localisation"];
    $instagram = $_POST["instagram"];
    $prix = $_POST["prix"];
    $deplacement = $_POST["deplacement"];

    $image = $_FILES["image"];
    $image_nom = $image["name"];
    $image_tmp = $image["tmp_name"];
    $image_chemin = "chemin/vers/dossier/" . $image_nom;
    move_uploaded_file($image_tmp, $image_chemin);

    echo "Le prestataire a été ajouté avec succès.";
}


?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "me";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $type = $_POST["type"];

    if ($type === "dj" || $type === "photographe" || $type === "decoratrice" || $type === "salon_de_beaute") {
        $nom = $_POST["nom"];
        $contact = $_POST["contact"];
        $localisation = $_POST["localisation"];
        $instagram = $_POST["instagram"];
        $prix = $_POST["prix"];
        $deplacement = isset($_POST["deplacement"]) ? 1 : 0;

     
        $sql = "INSERT INTO prestataires (nom, contact, localisation, instagram, prix, deplacement, type) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssdis", $nom, $contact, $localisation, $instagram, $prix, $deplacement, $type);

    
        if ($stmt->execute()) {
            echo "Le $type a été ajouté avec succès.";
        } else {
            echo "Erreur lors de l'ajout du $type : " . $stmt->error;
        }

        $stmt->close();
    }
}

$conn->close();
?>





</body>
</html>


 
