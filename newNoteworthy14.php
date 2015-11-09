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
	$pageTitle 		= "Marketplace Client (MPC) - New & Noteworthy 1.4";
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
		<p>MPC is included in all of the packages available from the Eclipse download page.  It is accessible from the Help menu. Below are the New & Noteworthy features of MPC 1.4 which was released as part of Mars.</p>
  
		<p>
			<strong>Compatible solutions for the current Eclipse environment</strong><br/>
         MPC 1.4 only lists entries compatible with the running version of Eclipse. Each entry on the server can now contain multiple solution versions for different Eclipse versions and OS environments with separate update sites. MPC will automatically install the correct version for the running Eclipse. Incompatible entries dropped into Eclipse via the Marketplace website are rejected with an information dialog.
		</p>
		
		<p>
			<strong>Better installation management</strong><br/>
			Marketplace entries can now specify required and optional features. Optional features can be selected during installation and can be changed afterwards through a new 'Change' action on MPC's 'Installed' tab.
		</p>

		<p>
			<strong>Eclipse Project market</strong><br/>
         A new moderated 'Eclipse Project' market has been added to the Marketplace that contains Release Train projects. An optional tab to show this market more prominently in MPC has been added, but will also need to be enabled on the server. In a later release, MPC might also advertise this market with a separate Welcome Page entry and/or a light-weight view.
		</p>
		
		<p>
			<strong>Performance Improvements</strong><br/>
			Performance improvements have been made by optimizing client-side caching of REST requests and image downloads and by loading images asynchronously in a more intelligent fashion.
		</p>

		
		<p>
		See also the <a href="newNoteworthy13.php">MPC 1.3 New & Noteworthy</a>.
		</p>
	</div>
	</div>
	<?
	$html = ob_get_clean();

	# Generate the web page
	$App->generatePage('Nova', $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>