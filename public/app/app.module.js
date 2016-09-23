var spineApp = angular.module('spineApp', [
//    'ngAnimate',
    'satellizer',
    'ui.router',
    'ui.bootstrap',
    'multiStepForm',
    'kendo.directives',
    'dialogs.main',
    'oitozero.ngSweetAlert',
    'ngToast'
]);

// Config continues in app.routes.js
spineApp.config(function(dialogsProvider){
    // dialog config
    dialogsProvider.useBackdrop(true);
    dialogsProvider.useEscClose(true);
    dialogsProvider.useCopy(false);
    dialogsProvider.setSize('md');
});

// Constant variable with the WEB & API URL
spineApp.constant('BASE_WEB_URL', '/spine/public');
spineApp.constant('BASE_API_URL', '/spine/public/api');

spineApp.run([
    '$location',
    '$rootScope',
    '$state',
    function ($location, $rootScope, $state, $stateParams) {
        $rootScope.$location = $location;
        $rootScope.$protocol = $location.protocol();
        $rootScope.$host = $location.host();

        console.log('location =>');
        console.log($location);

        //Values from vTiger
        $rootScope.record = {
            crmId: '12345',
            module: 'Quotes',
            mode: 'Quote', //modes : quote, planning and implementation
            jobType: 'Regular'
        };


        // $stateChangeStart is fired whenever the state changes. We can use some parameters
        // such as toState to hook into details about the state as it is changing
        $rootScope.$on('$stateChangeStart', function(event, toState, toParams, fromState, fromParams) {
            console.log('state change From =>');
            console.log(fromState.name);
            console.log(fromParams);
            console.log('state change To =>');
            console.log(toState.name);
            console.log(toParams);

            //Store crmId for the First time
            if(!$rootScope.record.crmId) {
                $rootScope.record.crmId = toParams.crmId;
            }

            // redirectTo Child State
            if (toState.redirectTo) {
                event.preventDefault();
                $state.go(toState.redirectTo, toParams);
            }


            // Grab the user from local storage and parse it to an object
            var user = JSON.parse(localStorage.getItem('user'));

            // If there is any user data in local storage then the user is quite
            // likely authenticated. If their token is expired, or if they are
            // otherwise not actually authenticated, they will be redirected to
            // the auth state because of the rejected request anyway
            if(user) {

                // The user's authenticated state gets flipped to
                // true so we can now show parts of the UI that rely
                // on the user being logged in
                $rootScope.authenticated = true;

                // Putting the user's data on $rootScope allows
                // us to access it anywhere across the app. Here
                // we are grabbing what is in local storage
                $rootScope.currentUser = user;

                // If the user is logged in and we hit the auth route we don't need
                // to stay there and can send the user to the main state
                if(toState.name === "auth") {

                    // Preventing the default behavior allows us to use $state.go
                    // to change states
                    event.preventDefault();

                    // go to the "main" state which in our case is users
                    $state.go('index.home',{crmId: $rootScope.record.crmId});
                }
            } else {
                // If there is no logged in user and the To state is Not 'auth' or 'error'
                // redirect to Auth
                if((toState.name != "auth")&&(toState.name != "error")) {

                    // Preventing the default behavior allows us to use $state.go
                    event.preventDefault();

                    if(toParams.crmId) {
                        //Return Url
                        toParams.returnUrl = $location.url();

                        // go to Auth
                        $state.go('auth',toParams);
                    } else {
                        // show Error
                        $state.go('error');
                    }
                }
            }
        });



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