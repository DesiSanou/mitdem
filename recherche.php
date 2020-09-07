<!DOCTYPEE html>
<html>
 <head>
 	<meta charset="utf-8"/>
  <link rel="stylesheet" href="designindex.css" />
 	<meta name="viewport" content="width-device-width" />
  <title>Recherche</title>
 </head>
 <body>
 	<?php include("entete.php")
  ?>
  
 	<p>
 		<?php 
        if(isset($_GET['cherche']))
        {
        	echo 'recherche de <strong>'.$_GET['cherche'].'</strong><br/>';
//la place de la recherche
        }
        else
        	echo 'ERREUR';
 		?>
  </p>
 		</body>
 </html>