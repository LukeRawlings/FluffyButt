<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fluffybutt Cookies</title>
<?php
	include("layout/includes/links.php");
	include("layout/includes/scripts.php");
?>
</head>
<body ng-app="FluffyButtApp">
	<div class="container-fluid main-container">
<?php
	include("layout/includes/header.php");
?>

		<div class="page-content" ng-view>
		<!-- Content for pages is inserted here -->
		</div>

<?php
		include("layout/includes/footer.php");
?>
	</div>
</body>
</html>
