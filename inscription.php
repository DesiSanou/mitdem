<!DOCTYPEE html>
<?php include("serveur.php"); ?>
<html>
 <head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="designindex.css" />
  <meta name="viewport" content="width-device-width" />
  <title>Inscription</title>
 </head>
 <body>
 	<?php include("entete.php") ?>
</form>

         <p class="reseausocial">
            <em>Vous avez deja un compte?    <a href="login.php" > Se connecter</a>   </em>       <br /><br />
            
          <p style="background-color:white; height:30; padding-top:15"class="compteconfiance">
            <strong style="color:#CF5513; padding-left:20;font-size:20" > Creer un compte</strong>
          
          </p>
            <!--
            <a href="https://www.facebook.com/desire.sandes"><img src="imagesprojet/facebook.jpg" alt="facebook"></ a>
              <a href="https://www.facebook.com/desire.sandes"><img src="imagesprojet/googleplus.png" alt="google +"></ a> -->
        </p>


    <aside>

      <section>
            <div class="inscriform">
               <form method="POST" action="inscription.php">

                 <!-- afficher les erreurs de validations ici -->
                 <?php include('errors.php'); ?> 

                  <p> 
                    <label for="nom">Nom<span><strong style="color:red">*&nbsp</strong></span></label><input type="text" name="nom" id="nom" required="required" placeholder="example TAMINI" size="40" maxlength="50" border-radius="2px"/> <Br /><Br />
                    <label for="prenom">Prenom<strong style="color:red">*&nbsp</strong></label><input type="text" name="prenom" required="required" id="" required="required" placeholder="example Yves" size="40" maxlength="50" border-radius="2px"/> <Br /><Br />
                    <label for="email">Email<strong style="color:red">*&nbsp</strong></label><input type="email" name="email" id="email" required="required" placeholder="example TAMINI.Yves@gmail.com" size="40" maxlength="50" border-radius="2px"/> <Br /><Br />
                    <label for="MotDePasse">Mot de passe<strong style="color:red">*&nbsp</strong></label><input type="password"  required="required" name="MotDepassse" id="pwd1" placeholder="Veuillez entrer votre mot de passe" size="40" maxlength="50" border-radius="2px"/> <Br /><Br />
                     <!-- <label for="MotDePasse">Confirmer Mot de passe<strong style="color:red">*&nbsp</strong></label><input type="password"  required="required" name="MotDepassse" id="pwd2" placeholder="Confirmer votre mot de passe" size="40" maxlength="50" border-radius="2px"/> <Br /><Br />
                                         -->
                    </br><strong style="color:#CF5513; padding-left:30">FORMATIONS</strong></br>
                   <div> <!--jcjdnvknv-->

                      <section>
                        &nbsp&nbsp&nbsp&nbsp&nbspNiveau<strong style="color:red">*&nbsp</strong>:</br></br>
                    
                        <label for="niveau"></label><input type="radio" name="niveau" required="required" id="niveau" value="Master2"  /> Master II<Br />
                        <label for="niveau"></label><input type="radio" name="niveau" required="required" id="niveau" value="Ingenieur"  /> Ingenieur<Br />
                        <label for="niveau"></label><input type="radio" name="niveau" required="required" id="niveau" value="Master1"  /> Master I<Br />
                        <label for="niveau"></label><input type="radio" name="niveau" required="required" id="niveau" value="Licence"  /> Licence<Br />
                        <label for="niveau"></label><input type="radio" name="niveau" required="required" id="niveau" value="Bac2"  />Bac+2<Br />
                        <label for="niveau"></label><input type="radio" name="niveau" required="required" id="niveau" value="Bac"  /> Bac<Br />
                      </section>

                     <section style="margin-left:20">
                        &nbsp&nbsp&nbsp&nbsp&nbspDiplome en<strong style="color:red">*&nbsp</strong></br>
                       <select name="filiere" required="required" id="filiere" >
                        <option value='Choisir'>Choisir</option>
                        <option value='Agri'>Agriculture-Agroalimentaire</option>
                        <option value='Audio'>Audiovisuel-cinema</option>
                        <option value='Archi'>Architecture</option>
                        <option value='Audit'>Audit-Conseils-Expertise</option>
                        <option value='Banques'>Banques-Assurances</option>
                        <option value='BTP'>BTP</option>
                        <option value='Commerce'>Commerce</option>
                        <option value='Compta'>Comptabilite</option>
                        <option value='Communication'>Communication-Journalisme</option>
                        <option value='Droit'>Droit-Justice</option>
                        <option value='Enseignement'>Enseignement</option>
                        <option value='Environnement'>Environnement-Mines</option>
                        <option value='publique'>Fonction publique</option>
                        <option value='Hotellerie'>Hotellerie-Restauration-Tourisme</option>
                        <option value='Electrique'>Ingenierie Electrique, electronique</option>
                        <option value='Mecanique'>Ingenierie Mecanique-Mecatronique</option>
                        <option value='Maintenance'>Maintenance</option>
                        <option value='Marketing'>Marketing</option>
                        <option value='Medecine'>Medecine</option>
                        <option value='Pharmacie'>Pharmacie</option>
                        <option value='Transport'>Transport-Logistique</option>
                        <option value='Autres'>Autres</option>
                       </select>
                      </section></br>

                    <label for="niveau">Veuillez charger votre CV (.pdf)</label><input type="file" placeholder=""name="CV" id="cv"  /><Br /></br>
                    <label for=""><strong style="color:#000080; margin-left:40; font-size:20">Informations complementaires</strong></label></br><TEXTAREA  type="text" name="competences" id="informationComplementaires" placeholder="competences specifiques" rows="7" cols="60"  maxlength="200" border-radius="20px" border-style: /></TEXTAREA>
                    <Br/><Br/><em><button type = "submit" name="Enregistrer"style=" margin-left:50%;" >Enregistrer</button>
                 </p>
            <form />
          </div>
        </section>

        
      </aside>
      <!--hsjfdvfdnbogf-->

            <?php  // on teste si les variables du formulaire sont bien déclarées 
            if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email'])&& isset($_POST['MotDepassse']) && isset($_POST['formation'])) 
            { 
            /* // on prépare la requête pour récupérer le numero du propriétaire 
             $sql = 'SELECT numero FROM liste_proprietaire WHERE nom = "'.$_POST['proprio'].'"';
              // on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die) 
              $req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error()); 
              // on récupère le résultat sous forme d'un tableau 
              $data = mysql_fetch_array($req);
              // on libère l'espace mémoire alloué pour cette interrogation de la base 
              mysql_free_result ($req);*/
              // on insère le tuple (mysql_query) et au cas où, on écrira un petit message d'erreur si la requête ne se passe pas bien (or die)
              $sql = 'INSERT INTO elementsdusite.listedesmembres VALUES("","'.$_POST['nom'].'", "'.$_POST['prenom'].'", "'.$_POST['email'].'","'.$_POST['MotDepassse'].'","'.$_POST['formation'].'")';
            mysql_close();
          }
  
            ?>
          
</body>
</html>