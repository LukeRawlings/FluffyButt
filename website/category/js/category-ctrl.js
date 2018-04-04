(function(){

    var app = angular.module('FluffyButtApp');
    
    var CategoryController = function ($scope, $http) {

        var onError = function(reason){
            $scope.error = "Could not get categories.";
        };

        var onCategoriesComplete = function(response){
            $scope.categories = response;
        };

        $http.get("api/get?target=categories")
            .then(onCategoriesComplete, onError);

    };


    app.controller('CategoryController', CategoryController);


}())
  