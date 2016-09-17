var spineApp = angular.module('spineApp', [
//    'ngAnimate',
    'ui.router',
    'ui.bootstrap',
    'multiStepForm',
    'kendo.directives',
]);

// constant variable with the WEB & API URL
spineApp.constant('BASE_WEB_URL', '/spine/public/');
spineApp.constant('BASE_API_URL', '/spine/public/api/');

spineApp.run([
    '$location',
    '$rootScope',
    function ($location, $rootScope) {
        $rootScope.$location = $location;
        $rootScope.$protocol = $location.protocol();
        $rootScope.$host = $location.host();
        $rootScope.$baseUrlWeb = '/spine/public/';
        $rootScope.$baseUrlApi = '/spine/public/api/';


        //Values from vTiger
        $rootScope.record = {
            crmId: '12345',
            module: 'Project',
            mode: 'Planning', //modes : quote, planning and implementation
            jobType: 'Regular'
        };

    }
]);

/*
.run(function ($rootScope, $urlRouter, UserService) {

    $rootScope.$on('$locationChangeSuccess', function(e) {
        // UserService is an example service for managing user state
        if (UserService.isLoggedIn()) return;

        // Prevent $urlRouter's default handler from firing
        e.preventDefault();

        UserService.handleLogin().then(function() {
            // Once the user has logged in, sync the current URL
            // to the router:
            $urlRouter.sync();
        });
    });

    // Configures $urlRouter's listener *after* your custom listener
    $urlRouter.listen();
});

    */