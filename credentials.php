<?php
	//Cloudant Database Credentials
	/*
	$cloudant_username = "<YOUR CLOUDANT USERNAME HERE>";
	$cloudant_password = "<YOUR CLOUDANT PASSWORD HERE>";
	$dbhost = "<YOUR CLOUDANT HOST HERE>";
	$dbname = "<YOUR CLOUDANT DATABASE NAME HERE>";
	$authstring = $cloudant_username.":".$cloudant_password."";//Creating an Authenticaiton String for accessing the Cloudant DB

	$designdocument = "<YOUR DESIGN DOCUMENT NAME HERE>";
	$searchindex = "<YOUR SEARCH INDEX NAME HERE>";//Search indexes are created for faster excecution of custom queries on Cloudant DB
	*/
	$cloudant_username = "b8c8aee7-7d76-4b66-8906-681d455a1fa6-bluemix";
	$cloudant_password = "9ab5f415547d70048ed2cd246886630ce9fe35807c64256d942d596e16a0da12";
	$dbhost = "b8c8aee7-7d76-4b66-8906-681d455a1fa6-bluemix.cloudant.com";
	$dbname = "ibmsampledb";
	$authstring = $cloudant_username.":".$cloudant_password."";//Creating an Authenticaiton String for accessing the Cloudant DB

	$designdocument = "searchusername";
	$searchindex = "searchusername";//Search indexes are created for faster excecution of custom queries on Cloudant DB

?>