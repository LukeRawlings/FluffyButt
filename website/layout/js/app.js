(function(){
    var app = angular.module('FluffyButtApp', ['ngRoute']);

    app.config(function($routeProvider){
        $routeProvider
            .when("/", {
                templateUrl : "layout/home.html",
                controller : "HomeController"
            })
            .otherwise({redirectTo: "/"});
    });
}());
