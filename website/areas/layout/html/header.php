<img class="kitty" src="images/kitty.png">
<header class="text-center">
	<div class="logo">
		<a href="./">
			<img src="images/FluffyButt_logoText.jpg" class="logo">
		</a>
	</div>
	<div ng-controller="CartSummaryController">
	<a class="cart-summary"href="#!/cart">
		<span class="glyphicon glyphicon-shopping-cart"></span>
		<span class="money">{{cart.cartTotal | currency}}</span>
	</a>
	</div>
	<?php include("nav.php");?>
</header>