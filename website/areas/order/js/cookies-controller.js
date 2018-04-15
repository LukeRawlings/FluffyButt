(function(){

    var app = angular.module('FluffyButtApp');
    
    var CookiesController = function ($scope, cookieDataService) {

        $scope.cookieCanvas = cookieDataService.cookieCanvas;
        $scope.drawRandom = function() {
            console.log($scope.cookieCanvas.brush);
        };
    };


    app.controller('CookiesController', CookiesController);


}())



// var onError = function(reason){
        //     $scope.error = "Could not get categories or subcategories.";
        // };

        // var onCategoriesComplete = function(response){
        //     $scope.categories = response;
        // };

        // $http.get("api/get?target=categories")
        //     .then(onCategoriesComplete, onError);
