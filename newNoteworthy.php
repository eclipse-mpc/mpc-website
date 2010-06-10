<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2009-2010 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Marketplace Client (MPC) - New & Noteworthy";
	$pageKeywords	= "mpc, new and noteworthy";
	$pageAuthor		= "Nathan Gervais";
		
	# Paste your HTML content between the EOHTML markers!	
	ob_start();
	?>
	<style> p { padding-bottom:20px; } img { margin-top:10px; max-width:700px;}</style>
	<div id="fullcolumn">
	<div id="midcolumn">
		<h1><?php print $pageTitle;?></h1>
		
		<p>Eclipse Marketplace Client  (MPC) is a rich client interface for browsing and installing the Eclipse based solutions listed on the Eclipse Marketplace portal.  It is a new feature that allows Eclipse users to discover and install Eclipse solutions directly into their Eclipse installation. </p>
		<p>MPC is included in all of the packages available from the Eclipse download page (except the Classic Package).  It is accessible from the Help menu.   Below is a brief step by step example of using MPC.</p>
		<p>One - Open the MPC from the Help Menu.<br/><img src="images/newNoteworthy/mpc-client.jpg"/></p>
		<p>Two - Search for Erlang and find Erlide<br/><img src="images/newNoteworthy/erlang.jpg"/></p>
		<p>Three - Select Install<br/><img src="images/newNoteworthy/erlang-install.jpg"/></p>
		<p>Four - Erlang is now 'Install Pending', I could install multiple products at the same time but I will only do one here; Select Next<br/><img src="images/newNoteworthy/next.jpg"/></p>
		<p>Five - Accept the license and hit Finish<br/><img src="images/newNoteworthy/license2.jpg"/></p>
		<p>Six - Restart Eclipse<br/><img src="images/newNoteworthy/restart.jpg"/></p>
		<p>Seven - Open the Erlide Perspective<br/><img src="images/newNoteworthy/perspective.jpg"/></p>
		<p>Start Coding in Erlangï¿½ (OK,ï¿½ I am not an Erlang developer but hopefully you get the idea)<br/><img src="images/newNoteworthy/erlide.jpg"/></p>
		<p>Give MPC a try and let us know your feedback.ï¿½ We want to make sure we get it right for the Helios launch.ï¿½ If you have an Eclipse product, make sure you get it listed on the <a href="http://marketplace.eclipse.org/quickstart/">Eclipse Marketplace in time for Helios.</a></p>
	</div>
	</div>
	<?
	$html = ob_get_clean();

	# Generate the web page
	$App->generatePage('Nova', $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>