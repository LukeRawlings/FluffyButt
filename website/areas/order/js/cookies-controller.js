(function(){

    var app = angular.module('FluffyButtApp');
    
    var CookiesController = function ($scope, $http) {

        $scope.cookieCanvas = new CookieCanvas();
        
        $scope.drawRandom = function(){
            var randX = Math.random() * $scope.cookieCanvas.canvas.width;
            var randY = Math.random() * $scope.cookieCanvas.canvas.height;
            $scope.cookieCanvas.brush.stroke({X: randX, Y: randY});
        }
 
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
