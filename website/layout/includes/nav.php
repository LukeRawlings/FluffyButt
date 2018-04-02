<nav class="navbar" ng-controller="NavController">
    <div class="hidden-xs fb-black">
        <ul class="nav nav-justified">
            <li class="nav-item fb-background-purple"><a href="home.html">Home</a></li>
            <?php include("cookieDropdown.html"); ?>
            <li class="nav-item fb-background-purple"><a href="work.html">Bijou Jars</a></li>
            <li class="nav-item fb-background-pink"><a href="work.html">About</a></li>
            <li class="nav-item fb-background-purple"><a href="work.html">Contact</a></li>
        </ul>
    </div>
    <button class="navbar-toggler hidden-sm hidden-md hidden-lg" type="button" data-toggle="collapse" data-target="#myNavbar">
    &#9776; MENU
    </button>
    <div class="collapse navbar-toggleable-xs hidden-sm hidden-md hidden-lg" id="myNavbar">
        <ul class="nav navbar-nav">
            <li class="nav-item"><a href="home.html">Home</a></li>
            <?php include("cookieDropdown.html"); ?>
            <li class="nav-item"><a href="work.html">Bijou Jars</a></li>
            <li class="nav-item"><a href="work.html">About</a></li>
            <li class="nav-item"><a href="work.html">Contact</a></li>
        </ul>
    </div>
</nav>

<script src="js/nav.ctrl.js"></script>