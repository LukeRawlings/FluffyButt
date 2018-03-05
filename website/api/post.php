<?php
    $postdata = json_decode(file_get_contents("php://input"));
    include("includes.php");
	DataAccess::post($credentials, $queries);
?>