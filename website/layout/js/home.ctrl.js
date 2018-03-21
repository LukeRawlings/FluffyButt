(function(){

    var app = angular.module('FluffyButtApp');
    
    var HomeController = function ($scope, $http) {

        var onImagesError = function(reason){
            $scope.error = "Could not get images for carousel.";
        };

        var onImagesComplete = function(response){
            $scope.images = response.data;
        };

        $http.get("api/get?target=carousel")
            .then(onImagesComplete, onImagesError);

    };

    app.controller('HomeController', HomeController);

}())
  