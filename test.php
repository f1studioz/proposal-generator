<?php

	// this is a test page for HTMLtoOpenXML 

	require_once "HTMLtoOpenXML.php";
	
	$html = '<ol><li>Rendez-vous ensuite dans le menu <em>Préférences</em> de VirtualBox (général et non d’une machine virtuelle) puis dans l’onglet <em>Réseau</em>. Nous allons modifier le réseau privé hôte par défaut de VirtualBox (à priori <code>vboxnet0</code>) en cliquant sur le tournevis, et en renseignant l’onglet <em>Interface</em> comme ceci :</li></ol>';

	$toOpenXML = HTMLtoOpenXML::getInstance()->fromHTML($html);
	
	echo $toOpenXML;


?>