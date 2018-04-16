(function(){
  var app = angular.module('FluffyButtApp');

  app.factory('cookieDataService', function() {
    var cookieDataService = {
      cookieCanvas : new CookieCanvas()
    };

    return cookieDataService;
  });
}())
