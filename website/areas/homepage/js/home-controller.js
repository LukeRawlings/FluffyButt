(function(){

    var app = angular.module('FluffyButtApp');
    
    var HomeController = function ($scope, $http) {
            $scope.images = [{filename:"carousel1.jpg", altText:""},
                            {filename:"carousel2.jpg", altText:""},
                            {filename:"carousel3.jpg", altText:""}];
    
    };
    app.controller('HomeController', HomeController);
}())