<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fluffybutt Cookies</title>
<?php
	include("layout/includes/links.html");
	include("layout/includes/scripts.html");
?>
</head>
<body ng-app="FluffyButtApp">
	<div class="container-fluid main-container">
		<?php include("layout/includes/header.php");?>
		<div class="page-content" ng-view></div>
		<?php include("layout/includes/footer.php");?>
	</div>
</body>
</html>