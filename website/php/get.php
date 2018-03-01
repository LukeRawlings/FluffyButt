<?php

	include("dataAccess.php");
	include("credentials.php");
	include("queries.php");
	include("objectFactory.php");

	DataAccess::get($credentials, $queries, new ObjectFactory());
?>