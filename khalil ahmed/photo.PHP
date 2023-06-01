<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="photographe11.css">
 <title>Cremonies</title>
<body>
<header>
    <a href="#" class="logo"><span>C</span>remonies</a>
    <div class="menuToggle" onclick="toggleMenu();"></div>
    <ul class="navbar">
        <li><a href="home.php" >Accueil</a></li>
        <li><a href="#apropos" onclick="toggleMenu();">Salles</a></li>
        <li><a href="#menu" onclick="toggleMenu();">Promos</a></li>
        <li><a href="#expert" onclick="toggleMenu();">Prestataires</a></li>
      
    </ul>
</header>
<div>
        <section class="banniere" id="banniere">
    

   
    
    </div>

</div>
                      



<div>


    <div class="wrap">
        <div class="box">
          <div class="box-top">
            <img class="box-image" src="images/photographe1.jfif" alt="">
            <div class="title-flex">
              <h3 class="box-title">Alice photographie
              </h3>
              <p class="user-follow-info">17 événements</p>
            </div>
            <p class="description"><h5> <p class="description"><h4><H4><img class="sasa"src="images/3.png">Photographe: </H4>photo&video/organisatrice
              <H4><img class="sasa"src="images/3.png"> Videographe</H4>
              <H4><img class="sasa"src="images/5.png"> planficatrice:</H4>  pour tout vous événements/Freelancer/
              <H4><img class="sasa"src="images/4.png"> Déplacement:</H4> possible
              <H4><img class="sasa" src="images/2.png" alt=""> contact : </H4> 
              07..... </p>
            </h4>
            
            <div class="flex_inst">
              <img class="sasaa"src="images/8.jpg"><a  href="https://instagram.com/photographie_by_nina?igshid=YmMyMTA2M2Y=" >instagrame</a>
            </div>
            
            
          </div>
          <button class="button" onclick="window.location.href='tel:'">Appeler</button>
        </div>

        <div class="box">
          <div class="box-top">
            <img class="box-image" src="images/photographe2.avif" alt="">
            <div class="title-flex">
              <h3 class="box-title">Mimi pro photographie</h3>
              <p class="user-follow-info">33 événements</p>
            </div>
            <p class="description"><h5> <p class="description"><h4><H4><img class="sasa"src="images/3.png">Photographe: </H4>for all your events mariage shooting
               anniversaire publicité fiançailles professionnelle expérimentée.
               <H4><img class="sasa"src="images/3.png"> Videographe</H4>
               <H4><img class="sasa"src="images/4.png"> Déplacement:</H4> possible
               <H4><img class="sasa" src="images/2.png" alt=""> contact : </H4> 
               0797012651 </p>
              </h4><img class="sasaa"src="images/8.jpg"><li><a  href="https://instagram.com/mimi_pro_photographie25?igshid=YmMyMTA2M2Y=" >instagrame</a></li>
            
          </div>
          <button class="button" onclick="window.location.href='tel:'">Appeler</button>
        </div>


        <?php

$conn = mysqli_connect('localhost', 'root', '', 'me') or die("Une erreur s'est produite lors de la connexion à la base de données.");



$query = "SELECT s.id, s.nom, i.image
FROM photographe s
LEFT JOIN images i ON s.id = i.place
GROUP BY s.id";
$result = mysqli_query($conn, $query);

$djtImages = array();
$i = 0;
while ($row = mysqli_fetch_assoc($result)) {
   $djId = $row['id'];
   $djtName = $row['nom'];
   $image = $row['image'];
   
 
       echo "    <div class='box'>
       <div class='box-top'>
         <img class='box-image' src='".$image."' alt=''>
         <div class='title-flex'>
           <h3 class='box-title'>".$row['nom']."</h3>
           <p class='user-follow-info'>33 événements</p>
         </div>
         <div class='card'>
         <img src='".$image."' alt='Image' >
    
         <p class='description'><h5> <p class='description'><h4><H4><img class='sasa'src='images/3.png'>Photographe: </H4>for all your events mariage shooting
         anniversaire publicité fiançailles professionnelle expérimentée.
         <H4><img class='sasa'src='images/3.png'> Videographe</H4>
         <H4><img class='sasa'src='images/4.png'> Déplacement:</H4> possible
         <H4><img class='sasa' src='images/2.png' alt=''> contact : </H4> 
         0797012651 </p>
         </h4>
         <div class='flex_inst'>
         <img class='sasaa'src='images/8.jpg'><li><a  href='https://instagram.com/mimi_pro_photographie25?igshid=YmMyMTA2M2Y=' >instagrame</a></li>
      
         </div>
         <button class='button' onclick='window.location.href='tel:''>Appeler</button>
       </div>
    ";
   $i++;
}
?>









        <div class="box">
          <div class="box-top">
            <img class="box-image" src="images/photographe2.avif" alt="">
            <div class="title-flex">
              <h3 class="box-title">Mimi pro photographie</h3>
              <p class="user-follow-info">33 événements</p>
            </div>
            <p class="description"><h5> <p class="description"><h4><H4><img class="sasa"src="images/3.png">Photographe: </H4>for all your events mariage shooting
               anniversaire publicité fiançailles professionnelle expérimentée.
               <H4><img class="sasa"src="images/3.png"> Videographe</H4>
               <H4><img class="sasa"src="images/4.png"> Déplacement:</H4> possible
               <H4><img class="sasa" src="images/2.png" alt=""> contact : </H4> 
               0797012651 </p>
              </h4><img class="sasaa"src="images/8.jpg"><li><a  href="https://instagram.com/mimi_pro_photographie25?igshid=YmMyMTA2M2Y=" >instagrame</a></li>
            
          </div>
          <button class="button" onclick="window.location.href='tel:'">Appeler</button>
        </div>






        <div class="box">
          <div class="box-top">
            <img class="box-image" src="images/photographe4.jpg" alt="">
            <div class="title-flex">
              <h3 class="box-title">Photographei_By_Nina</h3>
              <p class="user-follow-info">26 événements</p>
            </div>
            <p class="description"><h4><img class="sasa"src="images/3.png">Photographe </H4>
              <H4><img class="sasa"src="images/3.png"> Videographe</H4>
             <H4><img class="sasa"src="images/4.png"> Déplacement:</H4> possible 
            <H4><img class="sasa" src="images/2.png" alt=""> contact: <p>0549243820 whatsApp uniquement
            </h4><img class="sasaa"src="images/8.jpg"><li><a  href="https://instagram.com/photographie_by_nina?igshid=YmMyMTA2M2Y=" >instagrame</a></li>
          </p>
          </div>
          <button class="button" onclick="window.location.href='tel:'">Appeler</button>

        </div>


        
        <div class="box">
          <div class="box-top">
            <img class="box-image" src="images/photographe 3.jfif" alt="">
            <div class="title-flex">
              <h3 class="box-title">For Art Photography </h3>
              <p class="user-follow-info">12 événements</p>
            </div>
            <p class="description"><h4><img class="sasa"src="images/3.png">Photographe </H4>
              shooting photo professionnelle, événements,mariage
              <H4><img class="sasa"src="images/3.png"> Videographe</H4>
             <H4><img class="sasa"src="images/4.png"> Déplacement:</H4> Constantine Skikda Guelma Annaba Setif
            <H4><img class="sasa" src="images/2.png" alt=""> contact: <p>0549...... </H4>

            <img class="sasaa"src="images/8.jpg"><li><a  href="https://instagram.com/forartphotography?igshid=YmMyMTA2M2Y=" >instagrame</a></li>
          </div>
          
            <button class="button" onclick="window.location.href='tel:'">Appeler</button></div>
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
    
        <option value="photographe">Photographe</option>
      
        <div class="form-group">
    <label for="chanteur">Nom du photographe</label>
    <input type="text" id="chanteur" name="chanteur" required>
  </div>
</div>
</div></div>
  
  
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
 
    <footer>
        <p>&copy; 2023 </p>
      </footer>
   
    </body>
    </HTml>
