(function(){

    var app = angular.module('FluffyButtApp');
    
    var HomeController = function ($scope, $http) {
            $scope.images = [{filename:"RedHat.jpg", altText:""},
                            {filename:"Rednose.jpg", altText:""},
                            {filename:"Teddy.jpg", altText:""}];
    
    };
    app.controller('HomeController', HomeController);
}())