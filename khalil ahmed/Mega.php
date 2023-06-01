<?php $conn = mysqli_connect('localhost', 'root', '', 'me') or die("Une erreur s'est produite lors de la connexion à la base de données.");

$id = $_GET['id'];




$sqlS = "SELECT s.*, i.image
          FROM salle s
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
    <link rel="stylesheet" href="mega.css">
 <title>Cremonies</title>
<body>
   
<header>
    <a href="#" class="logo"><span>C</span>remonies</a>
    
    <div class="menuToggle" onclick="toggleMenu();"></div>
    <ul class="navbar">
        <li><a href="Home.php" >Accueil</a></li>
        <li><a href="#Top menu" onclick="toggleMenu();">Salles</a></li>
      
    </ul>



    
   
    </div>
  
    
</header>
<div class="banniere">
    
</div>
<div class="contenu">
    <div class="CONT"><img src="" alt=""><h2 class="services">services</h2> </div>
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
    <?php  ?>
</div>
<div class="contenu2">
  
   <section class="adem" id="adem">
       <div class="row">
           <div class="col5">
               <h2 class="titre-texte">Capacite</h2>
    
               <P><?php echo $row['capacite'] ?></P>             
</div>
<div class="row">
    <div class="col50">
        <h2 class="titre-texte">Service</h2>
        <P> <?php echo $row['service'] ?></P>
    
                    
        
    </div>
    <div class="row">
    <div class="col50">
        <h2 class="titre-texte">prix</h2>
        <P> <?php echo $row['prix'] ?></P>
    
                    
        
    </div>
    
</section>
</div>





      <div class="contenu3">
  
    
    
        <section class="adem" id="adem">
        <div class="row">
            <div class="col50">
                <h2 class="titre-texte">Details des saisons</h2>
                <P>
        
                
                <?php echo $row['detaille_de_saison'] ?></P>
      </div>  
              </div>           
 </div>
 </div>
 
        </section>
 </div>
 <div class="contenu3">
  
    <section class="adem" id="adem">
        <div class="row">
            <div class="col50">
                <h2 class="titre-texte">Adresse complete</h2>
                <P><?php echo $row['localisaion'] ?></P>
                
                <img  class="sasaa" src="images/1.png" alt=""><p class="services">
                <Div class="Localition-button">
                <a   href="https://www.google.com/maps/place/Salle+M%C3%A9ga+F%C3%AAte/@36.2641696,6.5854833,16z/data=!4m15!1m8!3m7!1s0x12f171b6cb13dd2b:0xee876e3958fc8acb!2zU2FsbGUgTcOpZ2EgRsOqdGU!8m2!3d36.2641696!4d6.5894398!10e5!16s%2Fg%2F11h4pkyxvq!3m5!1s0x12f171b6cb13dd2b:0xee876e3958fc8acb!8m2!3d36.2641696!4d6.5894398!16s%2Fg%2F11h4pkyxvq" ><h2>  Localition</h2></a>
              </Div>
            </section></p>
                
 </div>
 </div>
 </div>
</div>    
 
<?php 

?>

         <div class="contenu4">
  
                    <section class="adem" id="adem">
                        <div class="row">
                            <div class="col50">
                                <h2 class="titre-texte">contact</h2>
                              
                                    <button class="appeler-button" onclick="appeler()"><h2>Cliquer pour Afficher le Numero</h2> </button>
                                    <button class="contacter-button" onclick="contacterViaGmail()"><h2>Contacter par e-mail</h2></button>
                                
                                    <script>
                                        function appeler() {
                                           
                                            window.location.href = '<?php $row['num_telephone'] ?>';
                                        }
                                
                                        function contacterViaGmail() {
                                            
                                            
                                            window.location.href = '<?php  $row['EMAIL'] ?>';
                                        }
                                    </script>
                               
                                
                               
                 </div>
                </div>
           </div>  

</DIv>


        

<span id="id1" class="target">
</span>
<span id="id2" class="target">
</span>
<span id="id3" class="target">
</span>
<span id="id4" class="target">
</span>
<div class="cadre_diapo">
<div class="interieur_diapo">
<div class=description>


</div>
<div class=description>


</div>
<div class=description>
<?php
while($row = mysqli_fetch_assoc($result)){
    array_push($images,$row['image']);
} 

?>
</div>
<div class=description>


</div>
</div>
<ul class="navigation_diapo">
<?php
while($row = mysqli_fetch_assoc($result)){
    array_push($images,$row['image']);
} 
for ($i = 0; $i < count($images); $i++){
    
    echo " <li>
   <img src='".$images[$i]."' alt>
   
    </li>  " ;
}

    
    ?>



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

  <div class="form-group">
    <label for="chanteur">Nom de la salle:</label>
    <input type="text" id="chanteur" name="chanteur" required>
  </div>
</div>
<div class="form-group_flex2">

  <button type="submit" onclick="confirmerReservation()">Réserver</button>

</div>
</form>

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
  
  document.getElementById("annulation").style.display = "block";
  document.getElementById("numeroAnnulation").textContent = numeroAnnulation;
  
  
  document.getElementById("reservationForm").reset();
}

     



























    </body>


       







 

