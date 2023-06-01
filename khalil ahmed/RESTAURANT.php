<?php $conn = mysqli_connect('localhost', 'root', '', 'me') or die("Une erreur s'est produite lors de la connexion à la base de données.");

$id = $_GET['id'];




$sqlS = "SELECT s.*, i.image
          FROM restaurant s
          LEFT JOIN images i ON s.id = i.place
          WHERE s.id = $id";

$result = mysqli_query($conn, $sqlS);

$images = [];



$row = mysqli_fetch_assoc($result);




?>


<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="restaurant.css">
     <title>Cremonies</title>
     <body>
      <header>
        <a href="#" class="logo"><span>C</span>remonies</a>
        <div class="menuToggle" onclick="toggleMenu();"></div>
        <ul class="navbar">
            <li><a href="Home.PHP" >Accueil</a></li>
            <li><a href="#" onclick="toggleMenu();">Salles</a></li>
            <li><a href="#" onclick="toggleMenu();">Prestataires</a></li>
          
        </ul>
       </div>
       </header>
      </div>

   </head>
<div class="banniere">
    
   </div>
</div>
<div class="titre" >
    <h1><?php echo $row['nom'] ?> </h1>
 </div>













        
    </div>
    <div class="contenu">
        <div class="CONT"><h2 class="services">services</h2> </div>
           <div class="fafafa">
           
            <div class="pos">
                <img  class="sasa" src="images/la-musique.png" alt=""><p class="services"> Musique</p> 
         
            </div>
            <div class="pos">
                <img  class="sasa" src="images/tasse-a-cafe.png" alt=""><p class="services">Consommation</p> 
            </div>
            <div class="pos">
                <img  class="sasa" src="images/boule-de-noel.png" alt=""><p class="services">Décoration</p>
            </div>
        <div class="pos">
                <img  class="sasa" src="images/food-restaurant.png" alt=""><p class="services">Restoration</p>
            </div>
            <div class="pos">
            <img  class="sasa" src="images/barman.png" alt=""><p class="services">Service</p>
            </div>
            <div class="pos">
            <img  class="sasa" src="images/chef-masculin.png" alt=""><p class="services">Traiteur</p> </div>
            </div>
        </div>
    </div>
    <div class="adem">
        
    </div>
    <div class="contenu2">
      
       <section class="adem" id="adem">
           <div class="row">
               <div class="col5">
                   <h2 class="titre-texte">Capacite</h2>
                   <P><?php echo $row['capacite'] ?> </P>             
    </div>
    <div class="row">
        <div class="col50">
            <h2 class="titre-texte">prix</h2>
            <P> <?php echo $row['prix'] ?></P>
        </div>
            <div class="col50">
                <h2 class="titre-texte">Parking</h2>
                <P>  <?php echo $row['Parking'] ?></P>
            </div>
            <div class="col50">
                    <h2 class="titre-texte">telephone et Email</h2>
                    <P> <?php echo $row['numtelephone'] ?></P>
                    <P> <?php echo $row['EMAIL'] ?></P>
                </div>
                
                <div class="col50">
                    <h2 class="titre-texte">Détails de la saison </h2>
                    <P> <?php echo $row['Détailsdelasaison'] ?></P>
                </div>
                
                
    </div>
    
    
    
    
    </div>
    
           </section>
    </div>
    
     </div>
     
            </section>
     </div>
     <div class="contenu3">
      
        <section class="adem" id="adem">
            <div class="row">
                <div class="col50">
                    <h2 class="titre-texte">Adresse complete</h2>
                    <P><?php echo $row['localisation'] ?> </P>
                
                    <Div class="Localition-button">
                    <a   href="https://www.google.com/maps/search/magic+house+restaurant/@36.3243087,6.4900933,12z/data=!3m1!4b1" ><h2>  Localition</h2></a>
                  </Div>
                </section></p>
                    
     </div>
     </div>
     </div>
    </div>    
    
    
             <div class="contenu4">
      
                        <section class="adem" id="adem">
                            <div class="row">
                                <div class="col50">
                                    <h2 class="titre-texte">contact</h2>
                                  
                                        <button class="appeler-button" onclick="appeler()"><h2>Cliquer pour Afficher le Numero</h2> </button>
                                        <button class="contacter-button" onclick="contacterViaGmail()"><h2>Contacter par e-mail</h2></button>
                                    
                                        <script>
                                            function appeler() {
                                               
                                                window.location.href = 'tel:0793304017';
                                            }
                                    
                                            function contacterViaGmail() {
                                                
                                                
                                                window.location.href = 'mailto:destinataire@gmail.com';
                                            }
                                        </script>
                                   
                                    
                                   
                     </div>
                    </div>
               </div>  
    
    </DIv>










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
         <option value="restaurant">Restaurant</option>
        </select>
        <div class="form-group">
    <label for="chanteur">Nom du Restaurant</label>
    <input type="text" id="chanteur" name="chanteur" required>

      </div>
      <button type="submit" onclick="confirmerReservation()">Réserver</button>
      

    
      <div id="confirmation" style="display: none;">
        <h3>Confirmation de réservation :</h3>
        <p>Votre réservation a été confirmée avec le numéro : <span id="numeroReservation"></span></p>
        <p>Gardez ce numéro pour toute communication ultérieure.</p>
      </div>
    
      <div id="annulation" style="display: none;">
        <h3>Annulation de réservation :</h3>
        <p>Vous avez annulé votre réservation pour le numéro : <span id="numeroAnnulation"></span></p>
      </div>
    </form>
   
    
    <script>
      function confirmerReservation() {
        var numeroReservation = Math.floor(Math.random() * 1000000) + 1;
    
        document.getElementById("confirmation").style.display = "block";
        document.getElementById("numeroReservation").textContent = numeroReservation;
    
        document.getElementById("reservationForm").reset();
      }
    
      function annulerReservation() {
  var numeroAnnulation = document.getElementById("telephone").value;
  
  document.getElementById("annulation").style.display = "block";
  document.getElementById("numeroAnnulation").textContent = numeroAnnulation;
  
  
  document.getElementById("reservationForm").reset();
}

     


     <DIv>
  <DIv>

 
   
     


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

   





    
    
    
            
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    



































 <footer>
    <p>&copy; 2023 </p>
 </footer>



   </HTml>
 </body>



    