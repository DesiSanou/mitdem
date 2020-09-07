 <?php include('serveur.php');
  //On ne peut enter ici que si on est connecte
 if(empty($_SESSION['username'])){
  header('location:login.php');
 }
  ?> 
<!DOCTYPEE html>
<html>
 <head>
   <meta charset="utf-8"/>
   <link rel="stylesheet" href="designindex.css" />
   <meta name="viewport" content="width-device-width" />
   <title>Bienvenue sur MIT-DEM</title>
 </head>
 <body>
  <?php include("entete.php");?>




    <div>
      <?php if(isset($_SESSION['success'])): ?>
           <div>
               <h3>  <?php echo $_SESSION['success'];
                    unset($_SESSION['success']);
               ?>
               </h3>
            </div>
          <?php endif ?>
          <?php if(isset($_SESSION['username'])): ?>
          <p>Bienvenue <strong> <?php echo $_SESSION['username']; ?> </strong> </p>
          <p><a href="index.php?logout='1'" style="color:red;">Logout</a></p>
        <?php endif ?>
      </div>







      <section class="presentation">
        <p class="presentation1"> <img src="imagesprojet/logomitdem.jpg" style="float:left;" title="MIT-DEM" width="130" height="120"><strong style="color:blue; padding-top:5pt; size:2pt;TEXT-DECORATION:ITALIC; FONT-FAMILY:HELVETICA">&nbsp;&nbsp;MIT-DEM</strong> est une plateforme qui permet de rapprocher plus que jamais les entreprises et les diplomés avec ou sans experience;
          et ce,en vue de faciliter les relations entre les recruteurs et le recrutés.&nbsp;Toute la solution vous est donnee en un clic!</p>
          <hr/>
         <p class="presentation2"><a href="MonEcole.php"> <strong style="color:blue; TEXT-DECORATION:ITALIC; FONT-FAMILY:HELVETICA">Inscrivez-vous</strong></a> dans nos ecoles et universites partenaires et beneficiez d'une reduction allant jusqu'a 10% sur vos frais d'inscription </p>
    </section>
              <hr/>
          <aside style="display:flex;margin:0;">

                <!--================Les offres===============================-->
             <article style="width: 45%;border-right:solid gray 5px;display:block;">   
             <h1 style="text-align:center;"> <a href="listeEntreprises.html" title="Voir plus d'offres"> <span style="color:#A52A2A;font-family:tahoma,geneva,sans-serif; font-size:22px;"><u>Nos offres</u></span></a></h1><hr/>
       
                 <p style="height:80px;text-indent:10px;"><a href="https://societegenerale.bf/fr/votre-banque/recrutement/" target="_blank" title="Ouvrir le lien de recrutement"><img alt="" src="imagesprojet/logo-societe-generale.jpg" style="width:130px; height:80px;margin-left:-100px; float:left;border: solid 1px black;border-radius:3px; "/></a>
                  Recherche un responsable financier pour son annexe sise a la zone du bois.Ce dernier sera en charge du personnel et determinera.</p> 
      <hr/>
                 <p style="height:80px;text-indent:10px;"><a href="https://societegenerale.bf/fr/votre-banque/recrutement/" target="_blank" title="Ouvrir le lien de recrutement"><img alt="" src="imagesprojet/logo-societe-generale.jpg" style="width:130px; height:80px; margin-left:-100px;float:left;margin-bottom:5px; border: solid 1px black;border-radius:3px; "/></a>
                    Recherche un responsable financier pour son annexe sise a la zone du bois.Ce dernier sera en charge du personnel et determinera.</p> 
      <hr/>
                 <p style="height:80px;text-indent:10px;"><a href="https://societegenerale.bf/fr/votre-banque/recrutement/" target="_blank" title="Ouvrir le lien de recrutement"><img alt="" src="imagesprojet/logo-societe-generale.jpg" style="width:130px; height:80px;margin-left:-100px; float:left; ;margin-bottom:5px; border: solid 1px black;border-radius:3px; "/></a>
                    Recherche un responsable financier pour son annexe sise a la zone du bois.Ce dernier sera en charge du personnel et determinera.</p> 
      <hr/>
                  <p style="height:80px;text-indent:10px;"><a href="https://societegenerale.bf/fr/votre-banque/recrutement/" target="_blank" title="Ouvrir le lien de recrutement"><img alt="" src="imagesprojet/logo-societe-generale.jpg" style="width:130px; height:80px;margin-left:-100px; float:left; ;margin-bottom:5px; border: solid 1px black;border-radius:3px; "/></a>
                      Recherche un responsable financier pour son annexe sise a la zone du bois.Ce dernier sera en charge du personnel et determinera.</p> 
      <hr/>

     </article>
                              <!--================Les demandes===============================-->
       <article style="width: 30%;border-right:solid 5px gray ;display:block;">
               <h1 style="text-align:center;"><a href="listedesinscrit.html" title="Voir les demandes"><span style="color:#A52A2A; font-family:tahoma,geneva,sans-serif; font-size:22px;"><u>Nos Demandes</u></span></a></h1><hr/>
               <p style="height:15%;text-indent:5px;">
                   <img alt="Profil" src="imagesprojet/profil1.jpg" style="height: 100px;width:100px;border-width:1px;border-style:solid; margin-left:-100px;float:left;" />
                                                
                                                  <tr><td >NOM:</td> <td>SANOU</td></tr><br/>
                                                    <tr> <td >Prenom: </td> <td>Desire</td></tr><br/>
                                                    <tr><td>Niveau:</td><td>BAC+5</td></tr><br/>
                                                   <tr><td>Formation:</td>Ingenieur Electrique</td></tr><br/>
                                              <a href="listedesinscrits/SANOUDESIRE.pdf" target="_blank"><b>Voir le cv</b></a><br/>
               </p>
               <hr/>
               <p style="height:15%;text-indent:5px;">
                     <img alt="Profil" src="imagesprojet/profil1.jpg" style="height: 100px;width:100px;border-width:1px;border-style:solid; margin-left:-100px;float:left;" />
                                                
                                                  <tr><td >NOM:</td> <td>SANOU</td></tr><br/>
                                                    <tr> <td >Prenom: </td> <td>Desire</td></tr><br/>
                                                    <tr><td>Niveau:</td><td>BAC+5</td></tr><br/>
                                                   <tr><td>Formation:</td>Ingenieur Electrique</td></tr><br/>
                                              <a href="listedesinscrits/SANOUDESIRE.pdf" target="_blank"><b>Voir le cv</b></a><br/>
               </p>
               <hr/>
               <p style="height:15%;text-indent:5px;">
                      <img alt="Profil" src="imagesprojet/profil1.jpg" style="height: 100px;width:100px;border-width:1px;border-style:solid;margin-left:-100px; float:left;" />
                                                
                                                  <tr><td >NOM:</td> <td>SANOU</td></tr><br/>
                                                    <tr> <td >Prenom: </td> <td>Desire</td></tr><br/>
                                                    <tr><td>Niveau:</td><td>BAC+5</td></tr><br/>
                                                   <tr><td>Formation:</td>Ingenieur Electrique</td></tr><br/>
                                              <a href="listedesinscrits/SANOUDESIRE.pdf" target="_blank"><b>Voir le cv</b></a><br/>
               </p>
               <hr/>
                <p style="height:15%;text-indent:5px;">
             <img alt="Profil" src="imagesprojet/profil1.jpg" style="height: 100px;width:100px;border-width:1px;border-style:solid;margin-left:-100px; float:left;" />
                                                
                                                  <tr><td >NOM:</td> <td>SANOU</td></tr><br/>
                                                    <tr> <td >Prenom: </td> <td>Desire</td></tr><br/>
                                                    <tr><td>Niveau:</td><td>BAC+5</td></tr><br/>
                                                   <tr><td>Formation:</td>Ingenieur Electrique</td></tr><br/>
                                              <a href="listedesinscrits/SANOUDESIRE.pdf" target="_blank"><b>Voir le cv</b></a><br/>
               </p>
               <hr/>
    
                
          </article>    
          
                       <!--================Ils nous font confiance!===============================-->
            <article style="width:25%;display:block;">
                    <h4 style="color:#A52A2A;font-family:tahoma,geneva,sans-serif;font-size:15px;"><a href="listeEntreprises.html" title=""><u>Ils nous font confiance!</u></h4>
                      <hr/>
                            <p><img alt="" src="imagesprojet/EBOMAF.jpg" style="width: 130px; height: 80px;margin:1px;float: left;"/></p>
                            <p><img alt="ebomaf" src="imagesprojet/logo-societe-generale.jpg" style="width: 130px;height: 80px; margin: 1px; float: left;" /></p>
                            <p><img alt="" src="imagesprojet/EBOMAF.jpg" style="width: 130px; height: 80px;margin:1px;float: left;"/></p>
                            <p><img alt="ebomaf" src="imagesprojet/logo-societe-generale.jpg" style="width: 130px;height: 80px; margin: 1px; float: left;" /></p>
                            <p><img alt="" src="imagesprojet/EBOMAF.jpg" style="width: 130px; height: 80px;margin:1px;float: left;"/></p>
                            <p><img alt="ebomaf" src="imagesprojet/logo-societe-generale.jpg" style="width: 130px;height: 80px; margin: 1px; float: left;" /></p>
                            <p><img alt="" src="imagesprojet/EBOMAF.jpg" style="width: 130px; height: 80px;margin:1px;float: left;"/></p>
                            <p><img alt="ebomaf" src="imagesprojet/logo-societe-generale.jpg" style="width: 130px;height: 80px; margin: 1px; float: left;" /></p>
    
      </aside>
       
     
 </body>
 </html>