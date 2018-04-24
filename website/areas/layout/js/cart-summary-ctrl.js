(function(){

    var app = angular.module('FluffyButtApp');
    
    var CartSummaryController = function ($scope, $window, cartService) {
        $scope.cart = cartService;

        window.onbeforeunload = function(e) {
            sessionStorage.cartService = angular.toJson(cartService);
        };

    };

    app.controller('CartSummaryController', CartSummaryController);

}())