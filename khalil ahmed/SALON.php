

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="salon.css">
 <title>Cremonies</title>
<body>



<header>
    <a href="#" class="logo"><span>C</span>remonies</a>
    <div class="menuToggle" onclick="toggleMenu();"></div>
    <ul class="navbar">
        <li><a href="home.php" >Accueil</a></li>
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
        <h2 class="titre-texte"> <span>É</span>clat de Beauté : Révélez votre charme intérieur dans notre salon de beauté de renom</h2>
       
    </div>

    </section>

  <div class="card">
  <h1 class="card-title">White Day Decoration</h1>
  <div class="card-photos">
      <img class="card-photo" src="images/s1.jpg" alt="Photo 1">
      
      <img class="card-photo" src="images/S2.jpg" alt="Photo 2">
      <img class="card-photo" src="images/S3.jpg" alt="Photo 3">
       <img class="card-photo" src="images/S4.jpg" alt="Photo 4">
      
      </div>
      <P>
 
          <H4><img class="sasa"src="images/5.png"> Bauté, Cosmétique et Soins </H4>  pour tout vous événements
        <H4><img class="sasa"src="images/4.png"> Déplacement:</H4> possible
           <H4><img class="sasa" src="images/2.png" alt=""> contact : </H4> 
        0798321102
       <div class="flex_inst">
      <img class="sasaa"src="images/8.jpg"><a  href="https://instagram.com/photographie_by_nina?igshid=YmMyMTA2M2Y=" >instagrame</a>
    </div>
  </div>
 
</div>
    
    </p>
   


   
    
  
      </section>
  
    <div class="card">
    <h1 class="card-title">Wissem Decoratrice</h1>
    <div class="card-photos">
        <img class="card-photo" src="images/DECO5 (1).jpg" alt="Photo 1">
        
        <img class="card-photo" src="images/DECO5 (2).jpg " alt="Photo 2">
        <img class="card-photo" src="images/DECO5 (3).jpg" alt="Photo 3">
         <img class="card-photo" src="images/DECO5 (4).jpg" alt="Photo 4">
        
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
     
    </div>   
    <script src="script.js"></script>
    
    <h1>Réservation</h1>
    
  
    
      
      <form action="annule.php" method="POST" id="reservationForm">
      <div class="form-group">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
      </div>
    
      <div class="form-group">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
      </div>
    
      </div>
<form class="form-812" action="annule.php" method="POST" id="reservationForm">
    <div class="form-group_flex">
      <div class="form-group_flex">
      <div class="form-group">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>
  </div>

  <div class="form-group">
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required>
  </div>
      </div>
      <div class="form-group_flex">
  <div class="form-group">
    <label for="telephone">Numéro de téléphone :</label>
    <input type="tel" id="telephone" name="telephone" required>
  </div>

  <div class="form-group">
    <label for="date">Date de réservation :</label>
    <input type="date" id="date" name="date" required>
  </div>
</div>
<div class="form-group_flex">
  <div class="form-group">
    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required>
  </div>
  <select id="type" name="type" required>
        <option value="">Sélectionnez le type de réservation</option>
    
        <option value="salon">salon</option>

  <div class="form-group">
    <label for="chanteur">Nom de la salon:</label>
    <input type="text" id="chanteur" name="chanteur" required>
  </div>
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
  <?php
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
    ?>

   
   
 