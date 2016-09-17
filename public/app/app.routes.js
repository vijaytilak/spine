/**
 * State Configuration : Main
 */
spineApp.config(function ($stateProvider, $urlRouterProvider, $locationProvider) {

    //No crmId ? - Redirect to 404
    $urlRouterProvider.when('/', '/error');

    $stateProvider

        // ERROR
        .state('error', {
            url: '/error',
            templateUrl: 'app/shared/errors/error.view.hbs',
            controller: 'errorController'
        })

        // INDEX
        .state('index', {
            url: '',
            templateUrl: 'app/shared/main/index.view.hbs',
            controller: 'indexController'
        })
        .state('index.home', {
            url: '/{crmId:[0-9]+}',
            templateUrl: 'app/components/home/home.view.hbs',
            controller: 'homeController'
        })
        .state('index.regular', {
            url: '/{crmId:[0-9]+}/regular',
            templateUrl: 'app/components/job-regular/regular.view.hbs',
            controller: 'regularController'
        });

    $urlRouterProvider.otherwise('/error');

    // use the HTML5 History API - to remove #
    $locationProvider.html5Mode(true);

});