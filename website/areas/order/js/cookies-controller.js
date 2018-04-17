(function(){

    var app = angular.module('FluffyButtApp');
    
    var CookiesController = function ($scope, cookieDataService) {

        $scope.cookieCanvas = cookieDataService.cookieCanvas;
        $scope.cookieCanvas.refreshCanvas();
        $scope.brush = $scope.cookieCanvas.brush;
        $scope.cookieCanvas.redraw();
        var canvas = $scope.cookieCanvas.canvas;

        canvas.onmousedown = function(event){
            $scope.brush.painting = true;
            paint(event, false);
        };

        canvas.onmousemove = function(event){
            if($scope.brush.painting)
                paint(event, true);
        };

        canvas.onmouseup = function(event){
            $scope.brush.painting = false;
        };

        canvas.addEventListener('touchstart', function(event){
            $scope.brush.painting = true;
            var touch = event.touches[0];
            paint(touch, false);
        });

        canvas.addEventListener('touchmove', function(event){
            var touch = event.touches[0];
            if ($scope.brush.painting){
                paint(touch, true);
            }
        });

        canvas.addEventListener('touchend', function(){
            $scope.brush.painting = false;
        });

        canvas.addEventListener('touchcancel', function(){
            $scope.brush.painting = false;
        });

        var paint = function(event, dragging){
            var rect = canvas.getBoundingClientRect();
            var mouseX = (event.clientX - rect.left) / (rect.right - rect.left) * canvas.width;
            var mouseY = (event.clientY - rect.top) / (rect.bottom - rect.top) * canvas.height;
            $scope.brush.addPoint(mouseX, mouseY, dragging);
            $scope.cookieCanvas.redraw();
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
