(function(){
    var app = angular.module('FluffyButtApp', ['ngRoute']);

    app.config(function($routeProvider){
        $routeProvider
            .when("/", {
                templateUrl : "frontpage/home.html",
                controller : "HomeController"
            })
            .when("/orderCookies", {
            	templateUrl : "order/orderCookies.html",
            	controller : "CookiesController"
            })
            .otherwise({redirectTo: "/"});
    });
}());
