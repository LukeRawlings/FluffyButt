(function(){

    var app = angular.module('FluffyButtApp');
    
    var LoginController = function ($scope, $http, $window) {

        var admins = [];

        var onError = function(reason){
            $scope.error = "Could not get credentials.";
        };

        var onCredentialsComplete = function(response){
            admins = response;
        };

        $http.get("../api/get?target=admins")
            .success(onCredentialsComplete)
            .error(onError);

        $scope.login = function(){
            var foundAdmin = findAdmin($scope.user);
            if (foundAdmin && passwordIsCorrect(foundAdmin))
                $window.location.href = "portal";
            else
                $scope.error = "Incorrect user/password combination.";
        };

        function findAdmin(){
            var found;
            admins.forEach(function(a){
                if (a.userName === $scope.user)
                    found = a;
            });
            return found;
        }

        function passwordIsCorrect(admin){
            return admin.userPassword === $scope.password;
        }

    };


    app.controller('LoginController', LoginController);

}())