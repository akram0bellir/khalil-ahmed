<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="DECORATRICE.CSS">
 <title>Cremonies</title>
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


   <section class="Prestataires" id="Prestataires">
    <div class="titre">
        <h2 class="titre-texte"> <span>E</span>légance intemporelle : Les créations enchantées d'une décoratrice de mariage</h2>
       
    </div>

    </section>

  <div class="card">
  <h1 class="card-title">Florence Bridal</h1>
  <div class="card-photos">
      <img class="card-photo" src="images/DECO1 (1).jpg" alt="Photo 1">
      
      <img class="card-photo" src="images/DECO1 (3).jpg" alt="Photo 2">
      <img class="card-photo" src="images/DECO1 (4).jpg" alt="Photo 3">
       <img class="card-photo" src="images/DECO2.jpg" alt="Photo 4">
      
      </div>
      <P>
 
          <H4><img class="sasa"src="images/5.png"> Decoratrice </H4>  pour tout vous événements
        <H4><img class="sasa"src="images/4.png"> Déplacement:</H4> possible
           <H4><img class="sasa" src="images/2.png" alt=""> contact : </H4> 
        07..... 
       <div class="flex_inst">
      <img class="sasaa"src="images/8.jpg"><a  href="https://instagram.com/photographie_by_nina?igshid=YmMyMTA2M2Y=" >instagrame</a>
    </div>
  </div>

</div>
    
    </p>
   


   
    
  
      </section>
  
   
        
        </div>
  <div class="card">
  <h1 class="card-title">Florence Bridal</h1>
  <div class="card-photos">
       <img class="card-photo" src="images/DECO2.jpg" alt="Photo 4">
      
      </div>
      <P>
 
          <H4><img class="sasa"src="images/5.png"> Decoratrice </H4>  pour tout vous événements
        <H4><img class="sasa"src="images/4.png"> Déplacement:</H4> possible
           <H4><img class="sasa" src="images/2.png" alt=""> contact : </H4> 
        07..... 
       <div class="flex_inst">
      <img class="sasaa"src="images/8.jpg"><a  href="https://instagram.com/photographie_by_nina?igshid=YmMyMTA2M2Y=" >instagrame</a>
    </div>
  </div>

</div>
    
    </p> 
      </section>

      </section>
        <?php
      
      $conn = mysqli_connect('localhost', 'root', '', 'me') or die("Une erreur s'est produite lors de la connexion à la base de données.");



$query = "SELECT s.id, s.nom, i.image
FROM décoratrice s
LEFT JOIN images i ON s.id = i.place
GROUP BY s.id";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
   $djId = $row['id'];
   $djtName = $row['nom'];
   $imagess = [];
    array_push($imagess,$row['image']);
       echo "  
       <div class='card'>    
       <h1 class='card-title'>".$djtName."</h1>
       <div class='card-photos'>";
      
    for ($i = 0; $i < count($imagess); $i++){
        
        echo " 
       <img class='card-photo' src='".$imagess[$i]."' alt>
         " ;
    }
    echo " 
       </div>";
   ?>
    <H4><img class="sasa"src="images/5.png"> Decoratrice </H4>  pour tout vous événements
          <H4><img class="sasa"src="images/4.png"> :</H4>  
             <H4><img class="sasa" src="images/2.png" alt="">: </H4> 
          07..... 
         <div class="flex_inst">
        <img class="sasaa"src="images/8.jpg"><a  href="" >instagrame</a>
      </div>
    </div>
 
  </div>
      
      </p>
     
      </div> 
      <?php   
        
   $i++;
}
?>
   
           


      <title>Réservation </title>
      <link rel="stylesheet" type="text/css" href="style.css">
      <script src="script.js"></script>
   
      <h1>Réservation </h1>
    
      
      <form action="annule.php" method="POST" id="reservationForm">
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
        // Génération d'un numéro de réservation aléatoire
        var numeroReservation = Math.floor(Math.random() * 1000000) + 1;
    
        // Affichage de la confirmation de réservation avec le numéro
        document.getElementById("confirmation").style.display = "block";
        document.getElementById("numeroReservation").textContent = numeroReservation;
    
        // Réinitialisation du formulaire
        document.getElementById("reservationForm").reset();
      }
    
      function annulerReservation() {
        // Récupération du numéro de réservation saisi
        var numeroAnnulation = document.getElementById("telephone").value;
    

     }


     <DIv>
  <DIv>

  <footer>
    
    </footer>
   
   </BOdy>
   
  </HTml>

   
   
 