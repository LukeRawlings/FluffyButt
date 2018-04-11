(function(){

    var app = angular.module('FluffyButtApp');
    
    var CookiesController = function ($scope, $http) {

        var onError = function(reason){
            $scope.error = "Could not get categories or subcategories.";
        };

        var onCategoriesComplete = function(response){
            $scope.categories = response;
        };

        $http.get("api/get?target=categories")
            .then(onCategoriesComplete, onError);

    };


    app.controller('CookiesController', CookiesController);


}())