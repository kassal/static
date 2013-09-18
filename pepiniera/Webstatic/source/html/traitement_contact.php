<?php
	/*$TO = "kassaline.hariry@cideva.com";
	$h = "From: " . $TO;
	$message = "Voici le message qui sera écrit automatiquement dans le mail que vous recevrez, à chaque fois qu'un visiteur souhaitera vous laisser un message";
	
	while (list($key, $val) = each($HTTP_POST_VARS)) {
		$message .= "$key : $val\n";
	}
	
	mail($TO, $message, $h);
	header("Location:accuse.html");*/

	$nom = $HTTP_POST_VARS['nom'];
	$prenom = $HTTP_POST_VARS['prenom'];
	$mail = $HTTP_POST_VARS['mail'];
	$message = $HTTP_POST_VARS['comment'];
	
	/////voici la version Mine 
	$headers = "MIME-Version: 1.0\r\n";

	//////ici on détermine le mail en format text 
	$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";

	////ici on détermine l'expediteur et l'adresse de réponse 
	$headers .= "From: $nom <$mail>\r\nReply-to : $nom <$mail>\nX-Mailer:PHP";

	$destinataire = "kassaline.hariry@cideva.com"; 
	
	$body="$message";
	
	if (mail($destinataire,$body,$headers)){
		echo "Votre mail a été envoyé";
	}
	else {
		echo "Une erreur s'est produite";
	}
?>