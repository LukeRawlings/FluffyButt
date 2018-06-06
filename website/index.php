<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
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
	<script>
		jQuery("[type='number']").keypress(function (e) {
			e.preventDefault();
		});
	</script>
</body>
</html>