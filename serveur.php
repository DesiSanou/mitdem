<?php
session_start();
$nom="";
$email="";
$errors=array();
//connecter a la base de donnees
$db=mysqli_connect('localhost','root','','inscriptiondemploi');
if(isset($_POST['enregistrer'])){
	$nom=mysql_real_escape_string($_POST['nom']);
	$prenom=mysql_real_escape_string($_POST['prenom']);
	$email=mysql_real_escape_string($_POST['email']);
	$pwd1=mysql_real_escape_string($_POST['pwd1']);
	//$pwd2=mysql_real_escape_string($_POST['pwd2']);
	$niveau=mysql_real_escape_string($_POST['niveau']);
	$filiere=mysql_real_escape_string($_POST['filiere']);
	$informationComplementaire=mysql_real_escape_string($_POST['informationComplementaire']);


if(empty($nom)){
	array_push(($errors),"Veuiller renseigner le nom");
}
if(empty($prenom)){
	array_push(($errors),"Veuiller renseigner le prenom");
}
if(empty($email)){
	array_push(($errors),"Veuiller renseigner le mail");
}
if(empty($pwd1)){
	array_push(($errors),"Veuiller renseigner le mot de passe");
}


/*if(empty($pwd2)){
	array_push(($errors),"Veuiller confirmer le mot de passe");
}*/

//confirmation du mot de passe
/*if($pwd1!=pwd2){
	array_push(($errors),"Mots de passe non indentiques");
}*/


if(empty($niveau)){
	array_push(($errors),"Veuiller renseigner le niveau");
}

if(empty($filiere)){
	array_push(($errors),"Veuiller renseigner votre formation");
}


  if(count($errors)==0){
  	$pwd=md5($pwd1);
  	$sql=" INSERT INTO inscriptiondemploi(nom,prenom,email,password,niveau,filiere,informationComplementaire)
  	        VALUES('$nom','$prenom','$email','$pwd','$niveau', '$filiere', '$informationComplementaire')";
  	        mysqli_query($db,$sql);
  	        $_SESSION['username']=$nom;
  	        $_SESSION['success']="Vous êtes connectés";
  	        header('location: index.php');
  }
}

if(isset($_POST['login'])){

$email=mysql_real_escape_string($_POST['email']);
$pwd=mysql_real_escape_string($_POST['pwd1']);

if(empty($email)){
	array_push(($errors),"Veuiller renseigner le mail");
}
if(empty($pwd)){
	array_push(($errors),"Veuiller renseigner le mot de passe");
}
if (count($errors)) {
	$pwd=md5(pwd);
	$query="SELECT * FROM inscriptiondemploi WHERE email='$email' AND password='$pwd'";
     $result=mysqli_query($db,$query);
     if(mysqli_num_rows($result)==1){

     	 $_SESSION['username']=$nom;
  	        $_SESSION['success']="Vous êtes connectés";
  	        header('location: index.php');
     } else{
     	array_push($errors,"Mot de passe invalide pour cet email");
     	header('location: login.php');
     }
}


}


if(isset($_GET['logout'])){
	session_destroy();
	unset($session['username']);
	header(('location:login.php'));
}
?>