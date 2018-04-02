(function(){

    var app = angular.module('FluffyButtApp');
    
    var NavController = function ($scope, $http) {

        var onError = function(reason){
            $scope.error = "Could not get categories.";
        };

        var onCategoriesComplete = function(response){
            $scope.categories = response.data;
        };

        $http.get("api/get?target=categories")
            .then(onCategoriesComplete, onError);

    };


    app.controller('NavController', NavController);


}())
  