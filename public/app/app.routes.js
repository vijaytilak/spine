/**
 * State Configuration : Main
 */
spineApp.config(function (
    $stateProvider,
    $urlRouterProvider,
    $locationProvider,
    $authProvider,
    $httpProvider,
    $provide,
    BASE_API_URL
) {

    function redirectWhenLoggedOut($q, $injector) {

        return {

            responseError: function(rejection) {

                // Need to use $injector.get to bring in $state or else we get
                // a circular dependency error
                var $state = $injector.get('$state');

                // Instead of checking for a status code of 400 which might be used
                // for other reasons in Laravel, we check for the specific rejection
                // reasons to tell us if we need to redirect to the login state
                var rejectionReasons = ['token_not_provided', 'token_expired', 'token_absent', 'token_invalid'];

                // Loop through each rejection reason and redirect to the login
                // state if one is encountered
                angular.forEach(rejectionReasons, function(value, key) {

                    if(rejection.data.error === value) {

                        // If we get a rejection corresponding to one of the reasons
                        // in our array, we know we need to authenticate the user so
                        // we can remove the current user from local storage
                        localStorage.removeItem('user');

                        // Send the user to the auth state so they can login
                        $state.go('auth');
                    }
                });

                return $q.reject(rejection);
            }
        }
    }

    // Setup for the $httpInterceptor
    $provide.factory('redirectWhenLoggedOut', redirectWhenLoggedOut);

    // Push the new factory onto the $http interceptor array
    $httpProvider.interceptors.push('redirectWhenLoggedOut');

    // Satellizer configuration that specifies which API
    // route the JWT should be retrieved from
    $authProvider.loginUrl = BASE_API_URL+'/authenticate';


    //No crmId ? - Redirect to 404
    $urlRouterProvider.when('/', '/error');
    $urlRouterProvider.when('/auth', '/error');

    $stateProvider
        //JWT AUTH
        .state('auth', {
            url: '/{crmId:[0-9]+}/auth?returnUrl',
            templateUrl: 'app/shared/auth/auth.view.hbs',
            controller: 'authController as auth',
            params: {
                'returnUrl': '/home'
            }
        })

        //USERS
        .state('users', {
            url: '/users',
            templateUrl: 'app/shared/user/user.view.hbs',
            controller: 'userController as user'
        })

        // ERROR
        .state('error', {
            url: '/error',
            templateUrl: 'app/shared/errors/error.view.hbs',
            controller: 'errorController'
        })

        // INDEX
        .state('index', {
            url: '/{crmId:[0-9]+}',
            templateUrl: 'app/shared/main/index.view.hbs',
            controller: 'indexController',
            redirectTo: 'index.home'
        })

        // HOME
        .state('index.home', {
            url: '/home',
            templateUrl: 'app/components/home/home.view.hbs',
            controller: 'homeController'
        })

        // REGULAR
        .state('index.regular', {
            url: '/regular?step',
            templateUrl: 'app/components/job-regular/regular.view.hbs',
            controller: 'regularController',
            params: {
                'step': null
            }
        });

    // Redirect to the auth state if any other states
    // are requested other than index
    $urlRouterProvider.otherwise('/auth');

    // use the HTML5 History API - to remove #
    $locationProvider.html5Mode(true);

});