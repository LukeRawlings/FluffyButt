(function(){

    var app = angular.module('FluffyButtApp');
    
    var CookiesController = function ($scope, cookieDataService) {

        $scope.cookieCanvas = cookieDataService.cookieCanvas;

        $scope.cookieCanvas.canvas.addEventListener('mousedown', function(event){
           $scope.painting = true;
        });
        $scope.cookieCanvas.canvas.addEventListener('mouseup', function(event){
            $scope.painting = false;
        });
        $scope.cookieCanvas.canvas.addEventListener('mousemove', function(event){
           if($scope.painting)
                paint();
        });
        function paint(){
            var canvas = $scope.cookieCanvas.canvas;
            var rect = canvas.getBoundingClientRect();
            var position = {
                    X : (event.clientX - rect.left) / (rect.right - rect.left) * canvas.width,
                    Y : (event.clientY - rect.top) / (rect.bottom - rect.top) * canvas.height
                };
            $scope.cookieCanvas.brush.stroke(position);
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
