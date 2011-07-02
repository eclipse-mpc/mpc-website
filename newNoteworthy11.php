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
	$pageTitle 		= "Marketplace Client (MPC) - New & Noteworthy 1.1";
	$pageKeywords	= "mpc, new and noteworthy";
	$pageAuthor		= "Benjamin Muskalla";
		
	# Paste your HTML content between the EOHTML markers!	
	ob_start();
	?>
	<style> p { padding-bottom:20px; } img { margin-top:10px; max-width:700px;}</style>
	<div id="fullcolumn">
	<div id="midcolumn">
		<h1><?php print $pageTitle;?></h1>
		
		<p>Eclipse Marketplace Client  (MPC) is a rich client interface for browsing and installing the Eclipse based solutions listed on the Eclipse Marketplace portal.  It is a new feature that allows Eclipse users to discover and install Eclipse solutions directly into their Eclipse installation. </p>
		<p>MPC is included in all of the packages available from the Eclipse download page (except the Classic Package).  It is accessible from the Help menu. Below are the New & Noteworthy features of MPC 1.1 which was released as part of Indigo.</p>

		<p>
			<strong>Drag & Drop installation</strong><br/>
			You're now able to drag & drop a link from your web browser to Eclipse in order to start the installation of a solution.
			<br/>
			<img src="images/newNoteworthy/1.1/dnd.png"/>
		</p>
		
		<p>
			<strong>Sharing solutions with your friends</strong><br/>
			From the installed solutions tab, you can share the solution via email or twitter.
			<br/>
			<img src="images/newNoteworthy/1.1/share.png"/>
		</p>
		
		<p>
			<strong>Easy switching between catalogs</strong><br/>
			At the bottom of the MPC wizard, you now have all available catalogs at your fingertips.
			<br/>
			<img src="images/newNoteworthy/1.1/catalogs.png"/>
		</p>

		<p>
			<strong>Tags for solutions</strong><br/>
			Each solutions now provides tags to better find these solutions. In addition, you can easily click a tag to search for this.
			<br/>
			<img src="images/newNoteworthy/1.1/tags.png"/>
		</p>
	</div>
	</div>
	<?
	$html = ob_get_clean();

	# Generate the web page
	$App->generatePage('Nova', $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>