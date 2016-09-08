var spineApp = angular.module('spineApp', [
//    'ngAnimate',
    'ui.router',
    'ui.bootstrap',
    'multiStepForm'
]);

// constant variable with the WEB & API URL
spineApp.constant('WEB_URL', 'http://localhost/spine/public/');
spineApp.constant('API_URL', 'http://localhost/spine/public/api/');

spineApp.run([
    '$location',
    '$rootScope',
    function ($location, $rootScope) {
        $rootScope.$location = $location;

        //Values from vTiger
        $rootScope.record = {
            crmId: '12345',
            module: 'projects',
            mode: 'planning' //modes : quote, planning and implementation
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