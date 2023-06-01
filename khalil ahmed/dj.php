<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="djj.css">
  <title>Cremonies</title>
</head>
<body>
  <header>
    <a href="#" class="logo"><span>C</span>remonies</a>
    <div class="menuToggle" onclick="toggleMenu();"></div>
    <ul class="navbar">
      <li><a href="Home.php">Accueil</a></li>
      <li><a href="#apropos" onclick="toggleMenu();">Salles</a></li>
      <li><a href="#menu" onclick="toggleMenu();">Promos</a></li>
      <li><a href="#expert" onclick="toggleMenu();">Prestataires</a></li>
    </ul>
  </header>

  <section>
    <div class="banniere"> 
      <div class="row">
        <div class="col50">
          <h2 class="titre-texte"><span>C</span>réez l'émotion avec une performance musicale live </h2>
          <p class="Bienvenue">
            Bienvenue sur notre page dédiée aux DJ et chanteurs... pour mariage ! Nous sommes ravis de vous proposer une sélection de professionnels de la musique pour faire de votre journée spéciale un moment inoubliable.
          </p>
        </div>
      </div>
    </div>
    <div class="flix11">
    <?php

$conn = mysqli_connect('localhost', 'root', '', 'me') or die("Une erreur s'est produite lors de la connexion à la base de données.");



$query = "SELECT s.id, s.NOM, i.image
FROM dj s
LEFT JOIN images i ON s.id = i.place
GROUP BY s.id";
$result = mysqli_query($conn, $query);

$djtImages = array();
$i = 0;
while ($row = mysqli_fetch_assoc($result)) {
   $djId = $row['id'];
   $djtName = $row['NOM'];
   $image = $row['image'];
   
 
       echo "    
                  <div class='card'>
                   <img src='".$image."' alt='Image' >
              
               <div class='info'>
               <h1 class='title'>".$djtName."</h1>
               <h3>Id :" .$row['id']."</h3>
               <h3>Localisation</h3>
               <h3>Localisation</h3>
               </div>
           </div>";

   $i++;
}
?></div>

    <div class="flix11">
      <div class='card'>
        <img src="images/dj (2).jpg" alt="">
        <div class='info'>
          <h1 class='title'>El Bhja فرقة الباي</h1>
          <p class='description'></p>
        </div>
      </div>

      <div class='card'>
        <img src="images/DJ5.jpg" alt="DJ3">
        <div class='info'>
          <h1 class='title'>Group Djamil</h1>
          <p class='description'>.</p>
        </div>
      </div>

      <div class='card'>
        <img src="images/DJ1.jpg" alt="DJ3">
        <div class='info'>
          <h1 class='title'>Group el bey فرقة الباي</h1>
          <p class='description'>.</p>
          <h3>Localisation</h3>
        </div>
      </div>

      <div class='card'>
        <img src="images/DJ6.jpg" alt="DJ3">
        <div class='info'>
          <h1 class='title'>Chaba Yamina</h1>
          <p class='description'>.</p>
      </div>

      <div class='card'>
        <img src="images/DJ4.jpg" alt="DJ3">
        <div class='info'>
          <h1 class='title'>Samira Loranaise</h1>
          <p class='description'>.</p>
        </div>
      </div>

      <div class='card'>
        <img src="images/DJ7.jpg" alt="DJ3">
        <div class='info'>
          <h1 class='title'>Manel Hadli</h1>
          <p class='description'></p>
        </div>
      </div>

      <div class='card'>
        <img src="images/DJ13.jpg" alt="DJ3">
        <div class='info'>
          <h1 class='title'>Riad Boucherb</h1>
          <p class='description'></p>
        </div>
      </div>

      <div class='card'>
        <img src="images/dj14.jpeg" alt="DJ3">
        <div class='info'>
          <h1 class='title'>Abbas Righi</h1>
          <p class='description'></p>
        </div>
      </div>

      <div class='card'>
        <img src="images/DJ10.jpg" alt="DJ3">
        <div class='info'>
          <h1 class='title'>Adlen Fergani</h1>
          <p class='description'>Adlen Fergani.</p>
        </div>
      </div>

      <div class='card'>
        <img src="images/DJ11.jpg" alt="DJ3">
        <div class='info'>
          <h1 class='title'>Dj Wissam</h1>
          <p class='description'>.</p>
        </div>
      </div>

      <div class='card'>
        <img src="images/djj.jfif" alt="DJ3">
        <div class='info'>
          <h1 class='title'>DJ</h1>
          <p class='description'>.</p>
        </div>
      </div>

      <div class='card'>
        <img src="images/DJ-Snake-6879.jpg" alt="DJ3">
        <div class='info'>
          <h1 class='title'>DJ Snake</h1>
          <p class='description'>.</p>
        </div>
      </div>

      <div class='card'>
        <img src="images/DJ8.jpg" alt="DJ3">
        <div class='info'>
          <h1 class='title'>Faycel Sghir</h1>
          <p class='description'>.</p>
        </div>
      </div>

      <div class='card'>
        <img src="images/DJ12.jpg" alt="DJ3">
        <div class='info'>
          <h1 class='title'>Chabe Oussama</h1>
          <p class='description'>.</p>
        </div>
      </div>
    </div>
    </div>

   
    
      
      <form action="annule.php" method="POST" id="reservationForm">
      <h1>Réservation </h1>
      <div class="form-group">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
      </div>
    
      <div class="form-group">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
      </div>
    
      <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
      </div>
    
      <div class="form-group">
        <label for="telephone">Numéro de téléphone :</label>
        <input type="tel" id="telephone" name="telephone" required>
      </div>
    
      <div class="form-group">
        <label for="date">Date de réservation :</label>
        <input type="date" id="date" name="date" required>
      </div>
      <div class="form-group">
        <label for="type">Type de réservation :</label>
        <select id="type" name="type" required>
          <option value="">Sélectionnez le type de réservation</option>
          <option value="salle">Salle</option>
          <option value="dj">DJ</option>
          <option value="decoratrice">Décoratrice</option>
          <option value="salon">Salon de beauté</option>
          <option value="photographe">Photographe</option>
          <option value="restaurant">Restaurant</option>
        </select>
      </div>
    
      </div>
      <button type="submit" onclick="confirmerReservation()">Réserver</button>
      <div id="confirmation" style="display: none;">
        <h3>Confirmation de réservation :</h3>
        <p>Votre réservation a été confirmée avec le numéro : <span id="numeroReservation"></span></p>
        <p>Gardez ce numéro pour toute communication ultérieure.</p>
      </div>
    
     
   
    
    <script>
      function confirmerReservation() {
        var numeroReservation = Math.floor(Math.random() * 1000000) + 1;
    
        document.getElementById("confirmation").style.display = "block";
        document.getElementById("numeroReservation").textContent = numeroReservation;
    
        document.getElementById("reservationForm").reset();
      }
    
      function annulerReservation() {
        var numeroAnnulation = document.getElementById("telephone").value;
    

     }


     <DIv>
  <DIv>

  <footer>
    
    </footer>
   
   </BOdy>
   
  </HTml>