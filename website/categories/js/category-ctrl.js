(function(){
    var app = angular.module('FluffyButtApp');
    
    var CategoryController = function ($scope, $http) {

        var onError = function(reason){
            $scope.error = "Could not get products.";
        };

        var onProductsComplete = function(response){
            $scope.products = response;
        };

        $http.get("../api/get?target=products")
            .success(onProductsComplete)
            .error(onError);

    };


    app.controller('CategoryController', CategoryController);


}())
  