(function(){

    var app = angular.module('FluffyButtApp');

    var CustomerFavoritesController = function ($scope, $http, cartService) {

        $scope.cart = cartService;
        
        var onProductsError = function(reason){
            $scope.error = "Could not get products.";
        };

        var onProductsComplete = function(response){
            $scope.products = response.data;
        };

        $http.get("api/get?target=products")
            .then(onProductsComplete, onProductsError)
    };

    app.controller('CustomerFavoritesController', CustomerFavoritesController);

}())