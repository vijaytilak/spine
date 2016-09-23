spineApp.controller('authController', function ($auth, $location,$stateParams, $http, $rootScope) {
    var vm = this;

    vm.loginError = false;
    vm.loginErrorText;

    vm.login = function() {

        var credentials = {
            email: vm.email,
            password: vm.password
        };

        $auth.login(credentials).then(function() {

            // Return an $http request for the now authenticated
            // user so that we can flatten the promise chain
            return $http.get('api/authenticate/user').then(function(response) {

                // Stringify the returned data to prepare it
                // to go into local storage
                var user = JSON.stringify(response.data.user);

                // Set the stringified user data into local storage
                localStorage.setItem('user', user);

                // The user's authenticated state gets flipped to
                // true so we can now show parts of the UI that rely
                // on the user being logged in
                $rootScope.authenticated = true;

                // Putting the user's data on $rootScope allows
                // us to access it anywhere across the app
                $rootScope.currentUser = response.data.user;

                // Everything worked out so we can now redirect to
                // the users state to view the data
                $location.url($stateParams.returnUrl);
            });

            // Handle errors
        }, function(error) {
            vm.loginError = true;
            vm.loginErrorText = error.data.error;
        });
    }
});