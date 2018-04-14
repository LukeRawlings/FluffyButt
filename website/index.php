<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fluffybutt Cookies</title>
<?php
	include("areas/layout/html/links.html");
	include("areas/layout/html/scripts.html");
?>
</head>
<body ng-app="FluffyButtApp">
	<div class="container-fluid main-container">
		<?php include("areas/layout/html/header.php");?>
		<div class="page-content" ng-view></div>
		<?php include("areas/layout/html/footer.php");?>
	</div>
</body>
</html>