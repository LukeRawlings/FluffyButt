(function(){

    var app = angular.module('FluffyButtApp');
    
    var HomeController = function ($scope, $http) {

        var onImagesError = function(reason){
            $scope.error = "Could not get images for carousel.";
        };

        var onImagesComplete = function(response){
            $scope.images = response.data;
            var carousel = document.getElementById('myCarousel');
            var height = window.getComputedStyle(carousel)['height'];
            console.log(height);
        };

        $http.get("api/get?target=carousel")
            .then(onImagesComplete, onImagesError);

    };

    app.controller('HomeController', HomeController);

}())
  