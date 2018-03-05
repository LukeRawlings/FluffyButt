(function(){

    var app = angular.module('FluffyButtApp');
    
    var UserController = function ($scope, $http, $window) {

        $scope.admins = [];

        var onAdminsComplete = function(response){
            $scope.admins = response;
        };

        var onAdminsError = function(reason){
            $scope.message = "Could not get administrators from the database.";
        };

        var onAdminSaved = function(response){
            $scope.message = "Administrator added.";
            getAdmins();
        };

        var onAdminAddError = function(reason){
            $scope.message = "Could not add administrator.";
        };


        function getAdmins(){
            $http.get("../api/get?target=admins")
                .success(onAdminsComplete)
                .error(onAdminsError);
        }


        $scope.addAdmin = function(){
            var found = findAdmin();
            if (found)
                $scope.message = "That administrator already exists.";
            else {
                var data = {
                    target: "addAdmin",
                    username : $scope.user,
                    password: $scope.password
                };

                $http.post("../api/post", JSON.stringify(data))
                    .success(onAdminSaved).error(onAdminAddError);
            }
                
        };

        function findAdmin(){
            var found;
            $scope.admins.forEach(function(a){
                if (a.userName === $scope.user)
                    found = a;
            });
            return found;
        }

        getAdmins();

    

    };


    app.controller('UserController', UserController);

}())