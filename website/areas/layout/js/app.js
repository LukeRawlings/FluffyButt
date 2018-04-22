(function(){
    var app = angular.module('FluffyButtApp', ['ngRoute']);

    app.config(function($routeProvider){
        $routeProvider
            .when('/', {
                templateUrl : 'areas/homepage/home.html',
                controller: 'HomeController'
            })
            .when('/cookieBuilder', {
            	templateUrl : 'areas/order/cookieBuilder.html',
            	controller : 'CookiesController'
            })
            .when('/customerFavorites', {
                templateUrl : 'areas/order/customerFavorites.html'
            })
            .when('/cart', {
                templateUrl : 'areas/order/cart.html'
            })
            .when('/bijou-jars', {
                templateUrl : 'areas/bijou-jars/bijou-jars.html'
            })
            .when('/about', {
                templateUrl : 'areas/about/about.html'
            })
            .when('/contact', {
                templateUrl : 'areas/contact/contact.html'
            })
            .otherwise({redirectTo: '/'});
    });
}());
