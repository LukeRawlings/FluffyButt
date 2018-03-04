(function () {
    var app = angular.module('FluffyButtApp');

   

    var CategoryController = function(){
        var vm = this;
        vm.hello = "Hello";
    };

    app.controller('CategoryController', CategoryController);

}())