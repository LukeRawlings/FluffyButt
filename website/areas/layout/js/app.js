(function(){
    var app = angular.module('FluffyButtApp', ['ngRoute']);

    app.config(function($routeProvider){
        $routeProvider
            .when('/', {
                templateUrl : 'areas/homepage/home.html',
                controller: 'HomeController'
            })
            .when('/orderCookies', {
            	templateUrl : 'areas/order/orderCookies.html',
            	controller : 'CookiesController'
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
