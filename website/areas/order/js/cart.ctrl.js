(function(){

    var app = angular.module('FluffyButtApp');
    
    var CartController = function ($scope, $window, cartService) {
        $scope.cart = cartService;

        $scope.removeItem = function(product, item){
            var confirmed = $window.confirm("Are you sure you want to remove this item?");
            if (confirmed){
                var idx = product.items.indexOf(item);
                if (idx > -1)
                    product.items.splice(idx, 1);  
                $scope.cart.updateTotal();
            }   
        };
    };

    app.controller('CartController', CartController);

}())