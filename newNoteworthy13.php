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
	$pageTitle 		= "Marketplace Client (MPC) - New & Noteworthy 1.3";
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
		<p>MPC is included in all of the packages available from the Eclipse download page.  It is accessible from the Help menu. Below are the New & Noteworthy features of MPC 1.3 which was released as part of Luna.</p>

		<p>
			<strong>Improved Drag & Drop installation</strong><br/>
			MPC allows you to drag & drop a link from your web browser to Eclipse in order to start the installation of a solution. This now works on most areas of the IDE, making it easier to just drop your favorite solutions anywhere into Eclipse for installation.
			<br/>
			<img src="images/newNoteworthy/1.3/dnd.png"/>
		</p>
		
		<p>
			<strong>Sharing solutions with your friends</strong><br/>
			The Marketplace Client now opens as a non-modal window. This makes it possible to keep MPC open in the background while working, which is useful e.g. to avoid long waiting periods on slow connections. It also allows to switch back and forth between the MPC wizard and the "Learn more" pages opened in the embedded Eclipse browser.
			<br/>
			<img src="images/newNoteworthy/1.3/nonmodal.png"/>
		</p>

		<p>
			<strong>Available Updates</strong><br/>
			The update button on installed solutions is now only active if there is actually an update available.
			<br/>
			<img src="images/newNoteworthy/1.3/update.png"/>
		</p>
		
		<p>
			<strong>Small UI Improvements</strong><br/>
			The MPC wizard used to flicker and update a lot while updating its contents. This has been fixed, making the UI feel more responsive and a little faster. Also, MPC now has a proper icon in the Help menu and the About Eclipse entry.
		</p>

		
		<p>
		See also the <a href="newNoteworthy12.php">MPC 1.2 New & Noteworthy</a>.
		</p>
	</div>
	</div>
	<?
	$html = ob_get_clean();

	# Generate the web page
	$App->generatePage('Nova', $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>