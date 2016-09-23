//vTiger Service
spineApp.service('vtigerService', function ($rootScope, $http) {

    var token;
    var userName = 'admin';
    var accessKey = 'bEh8h1WRxnTLskUb';
    var endPointUrl = "http://vtiger.frescoshades.co.nz/webservice.php";

    var getToken = function () {

        $http({
            method: 'GET',
            url: endPointUrl,
            params: {'operation':'getchallenge', 'username':userName }
        }).then(function successCallback(response) {
            console.log(response);
        }, function errorCallback(response) {
        });

    };


    return {
        getToken: getToken,
    };

});
