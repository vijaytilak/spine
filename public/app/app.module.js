var spineApp = angular.module('spineApp', ['ngRoute']);

// constant variable with the WEB & API URL
spineApp.constant('WEB_URL', 'http://localhost/spine/public/');
spineApp.constant('API_URL', 'http://localhost/spine/public/api/');

spineApp.run(function ($rootScope) {
    $rootScope.pageTransition = 'pt-page-moveFromTopFade-init';
});