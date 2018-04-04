(function(){
    var app = angular.module('FluffyButtApp', ['ngRoute']);

    app.config(function($routeProvider){
        $routeProvider
            .when("/", {
                templateUrl : "frontpage/home.html",
                controller : "HomeController"
            })
            .otherwise({redirectTo: "/"});
    });
}());
