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
	$pageTitle 		= "Marketplace Client (MPC) - New & Noteworthy 1.2";
	$pageKeywords	= "mpc, new and noteworthy";
	$pageAuthor		= "Carsten Reckord";
		
	# Paste your HTML content between the EOHTML markers!	
	ob_start();
	?>
	<style> p { padding-bottom:20px; } img { margin-top:10px; max-width:700px;}</style>
	<div id="fullcolumn">
	<div id="midcolumn">
		<h1><?php print $pageTitle;?></h1>
		
		<p>Eclipse Marketplace Client  (MPC) is a rich client interface for browsing and installing the Eclipse based solutions listed on the Eclipse Marketplace portal.  It allows Eclipse users to discover and install Eclipse solutions directly into their Eclipse installation. </p>
		<p>MPC is included in all of the packages available from the Eclipse download page.  It is accessible from the Help menu. Below are the New & Noteworthy features of MPC 1.2 which was released as part of Kepler.</p>

		<p>
			<strong>Social Functions and Updated Solution Layout</strong><br/>
			The layout of individual solutions has been updated, making it look cleaner and giving more room to the icon and tags.
			<br/>
			As part of this update, the solution stats (total and recent installs) are shown in the MPC now, as well as the star ratings. Rating can be done directly from the MPC now.
			<br/>
			<img src="images/newNoteworthy/1.2/layout.png"/>
		</p>
		
		<p>
			<strong>Install more</strong><br/>
			It is now easier to install more than one solution at once. The UI has been improved to make it clearer how to do this.
			<br/>
			<img src="images/newNoteworthy/1.2/installmore.png"/>
		</p>
		
		<p>
			<strong>Eclipse Newsletter</strong><br/>
			The Marketplace Client now gives you access to the current Eclipse Newsletter and notifies you if it has been updated since your last visit.
			<br/>
			<img src="images/newNoteworthy/1.2/news.png"/>
		</p>

		<p>
			<strong>Help with install conflicts</strong><br/>
			The Marketplace Client now supports the new remediation support for installation conflicts. It helps you find a solution to install your plug-ins in case of a conflict with your Eclipse installation.
			<br/>
			<img src="images/newNoteworthy/1.2/remediation.png"/>
		</p>
		
		<p>
		See also the <a href="newNoteworthy11.php">MPC 1.1 New & Noteworthy</a>.
		</p>
	</div>
	</div>
	<?
	$html = ob_get_clean();

	# Generate the web page
	$App->generatePage('Nova', $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>