(function(){

    var app = angular.module('FluffyButtApp');
    
    var HomeController = function ($scope, $http) {
            $scope.images = [{filename:"rudolph.jpg", altText:""},
                            {filename:"santa.jpg", altText:""},
                            {filename:"frosty.jpg", altText:""}];
        };
    };
    app.controller('HomeController', HomeController);
}())
  