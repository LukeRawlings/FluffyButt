(function(){

    var app = angular.module('FluffyButtApp');

    var CustomerFavoritesController = function ($scope, $http, cartService) {

        $scope.cart = cartService;

        $scope.addDozenToCart = function(product){
            var favorites = $scope.cart.productCategories[1].products;
            var existing = $scope.cart.findDuplicateProduct(product, 1);
            if(existing){
                existing.quantity += 12;
            }
            else{
                var dozen = {name: product.Name, 
                    price: product.Price, 
                    quantity: 12, 
                    imageUrl: product.ImageUrl};
                    favorites.push(dozen);
            }
                $scope.cart.updateTotal();
        };

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