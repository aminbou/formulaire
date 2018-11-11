<?php
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=$_POST["email"];
echo "Bonjour ".$nom." ".$prenom." <br>";
if(filter_var($email, FILTER_VALIDATE_EMAIL) !== false) {
    echo 'votre email est valide';
}else{
	echo 'vérifiez votre email';
}

?>