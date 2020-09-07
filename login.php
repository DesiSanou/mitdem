<!DOCTYPEE html>

 <head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="designindex.css" />
  <meta name="viewport" content="width-device-width" />
  <title>Connexion à votre compte</title>
 </head>
 <body>
 	<?php include("entete.php") ?>
</form>

         <p class="reseausocial">
            <em>Vous n'avez pas encore un compte?    <a href="inscription.php" > M'inscrire</a>   </em>  <br /><br />
            
          <p style="background-color:white; height:30; padding-top:15"class="compteconfiance">
            <strong style="color:#CF5513; padding-left:20;font-size:20;  border-radius:5;" > Me connecter</strong>

    <aside>

      <section>
            <div class="inscriform">
               <form method="POST" action="index.php">
                  <p> 
                  <label for="email">Email<strong style="color:red">*&nbsp;</strong></label><input type="email" name="email" id="" required="required" placeholder="example TAMINI.Yves@gmail.com" size="40" maxlength="50" border-radius="2px"/> <Br /><Br />
                    <label for="MotDePasse">Mot de passe<strong style="color:red">*&nbsp;</strong></label><input type="password"  required="required" name="MotDepassse" id="pwd" placeholder="Veuillez entrer votre mot de passe" size="40" maxlength="50" border-radius="2px"/> <Br /><Br />
                    <Br/><Br/><em><button type = "submit" name="Connexion" style="margin-left:20%;" >Connexion</button>
                 </p>
            <form />
          </div>
        </section>

        
      </aside>
</body>
</html>