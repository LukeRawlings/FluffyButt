<?php
	include("credentials.php");
	

	access($credentials);


	function access($credentials){
		$connection = connectToServer($credentials);
		connectToDatabase($connection, $credentials);
		
		if(aConnectionWasEstablished($connection))
		{
			$objects = getObjects($connection);
			sendObjectsToJavascript($objects);
		}
	}

	
	function connectToServer($credentials){
		return mysqli_connect($credentials["DB_SERVER"], $credentials["DB_USER"], $credentials["DB_PASSWORD"]);
	}
	

	function connectToDatabase($connection, $credentials){
		mysqli_select_db($connection, $credentials["DB_NAME"]);

	}


	function aConnectionWasEstablished($connection){
		return $connection;
	}


	function getObjects($connection){
		$target = $_GET["Target"];
		return chooseObjects($connection, $target);

	}


	function chooseObjects($connection, $target){
		$objects;
		switch($target){
			case "categories":
				include("accessCategories.php");
				$objects = buildCategories($connection);
				break;
			case "subcategories":
				include ("accessSubcategories.php");
				$objects = buildSubCategories($connection);
				break;
		}
		return $objects;
	}
	

	function sendObjectsToJavascript($objects){
		echo json_encode($objects);
	}	
?>