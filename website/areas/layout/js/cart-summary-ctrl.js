(function(){

    var app = angular.module('FluffyButtApp');
    
    var CartSummaryController = function ($scope, cartService) {
        cartService.updateTotal();
        $scope.cart = cartService;
    };

    app.controller('CartSummaryController', CartSummaryController);

}())