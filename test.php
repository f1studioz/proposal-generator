<?php

	// this is a test page for HTMLtoOpenXML 

	require_once "HTMLtoOpenXML.php";
	
	$html = '<ol><li>Rendez-vous ensuite dans le menu <em>Pr�f�rences</em> de VirtualBox (g�n�ral et non d�une machine virtuelle) puis dans l�onglet <em>R�seau</em>. Nous allons modifier le r�seau priv� h�te par d�faut de VirtualBox (� priori <code>vboxnet0</code>) en cliquant sur le tournevis, et en renseignant l�onglet <em>Interface</em> comme ceci :</li></ol>';

	$toOpenXML = HTMLtoOpenXML::getInstance()->fromHTML($html);
	
	echo $toOpenXML;


?>