<?php

	# Set the theme for your project's web pages.
	# See http://eclipse.org/phoenix/
	$theme = "Nova";

	# Define your project-wide Navigation here
	# This appears on the left of the page if you define a left nav
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	
	# If you want to override the eclipse.org navigation, uncomment below.
	$Nav->setLinkList(array());
	$Nav->addNavSeparator("Marketplace Client ", "/mpc", "_self", 3);
	$Nav->addCustomNav("About This Project", "/projects/project_summary.php?projectid=technology.packaging.mpc", "_self", 3);
	$Nav->addCustomNav("Support", "http://www.eclipse.org/forums/index.php?t=thread&frm_id=176", "_self", 3);
	$Nav->addCustomNav("Downloads", "http://eclipse.org/mpc/archive.php", "_self", 3);
	$Nav->addCustomNav("New & Noteworthy", "http://eclipse.org/mpc/newNoteworthy11.php", "_self", 3);
	$Nav->addCustomNav("Getting Involved", "http://wiki.eclipse.org/EPP/MPC/Contributor_Guide", "_self", 3);
	$Nav->addCustomNav("Plan", "http://eclipse.org/projects/project-plan.php?planurl=/mpc/Project_Plan.xml", "_self", 3);

	# Define keywords, author and title here, or in each PHP page specifically
	$pageKeywords	= "marketplace, client, p2, installer";
	$pageAuthor		= "Ian Skerrett";
	$pageTitle 		= "Marketplace Client";

	# top navigation bar
	# To override and replace the navigation with your own, uncomment the line below.
	$Menu->setMenuItemList(array());
	$Menu->addMenuItem("Home", "/mpc", "_self");
	$Menu->addMenuItem("Support", "http://www.eclipse.org/forums/index.php?t=thread&frm_id=176", "_self");
	$Menu->addMenuItem("Downloads", "http://eclipse.org/mpc/archive.php", "_self");
	$Menu->addMenuItem("Getting Involved", "http://wiki.eclipse.org/EPP/MPC/Contributor_Guide", "_self", 3);
	$Menu->addMenuItem("Plan", "http://eclipse.org/projects/project-plan.php?planurl=/mpc/Project_Plan.xml", "_self", 3);
		
	# To define additional CSS or other pre-body headers
	# $App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/default/style.css"/>');
	
	# To enable occasional Eclipse Foundation Promotion banners on your pages (EclipseCon, etc)
	$App->Promotion = TRUE;
	
	# If you have Google Analytics code, use it here
	# $App->SetGoogleAnalyticsTrackingCode("YOUR_CODE");
	
?>