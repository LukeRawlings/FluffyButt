(function(){

    var app = angular.module('FluffyButtApp');
    
    var CartController = function ($scope, $window, cartService) {
        $scope.cart = cartService;

        $scope.removeProduct = function(category, product){
            var confirmed = $window.confirm("Are you sure you want to remove this product?");
            if (confirmed){
                var idx = category.products.indexOf(product);
                if (idx > -1)
                    category.products.splice(idx, 1);  
                $scope.cart.updateTotal();
            }   
        };
    };

    app.controller('CartController', CartController);

}())