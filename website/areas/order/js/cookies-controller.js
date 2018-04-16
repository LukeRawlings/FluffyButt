(function(){

    var app = angular.module('FluffyButtApp');
    
    var CookiesController = function ($scope, cookieDataService) {

        $scope.cookieCanvas = cookieDataService.cookieCanvas;
        $scope.cookieCanvas.refreshCanvas();
        $scope.brush = $scope.cookieCanvas.brush;
        $scope.cookieCanvas.redraw();
        var canvas = $scope.cookieCanvas.canvas;

        canvas.onmousedown = function(event){
            var rect = canvas.getBoundingClientRect();
            var mouseX = (event.clientX - rect.left) / (rect.right - rect.left) * canvas.width;
            var mouseY = (event.clientY - rect.top) / (rect.bottom - rect.top) * canvas.height;
            $scope.brush.painting = true;
            $scope.brush.addPoint(mouseX, mouseY);
            $scope.cookieCanvas.redraw();
        };

        canvas.onmousemove = function(event){
            if($scope.brush.painting){
                var rect = canvas.getBoundingClientRect();
                var mouseX = (event.clientX - rect.left) / (rect.right - rect.left) * canvas.width;
                var mouseY = (event.clientY - rect.top) / (rect.bottom - rect.top) * canvas.height;
                $scope.brush.addPoint(mouseX, mouseY, true);
                $scope.cookieCanvas.redraw();
            }
        };

        canvas.onmouseup = function(event){
            $scope.brush.painting = false;
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
