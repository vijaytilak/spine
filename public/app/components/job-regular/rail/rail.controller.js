/**
 * Regular Job Controller -Rail
 *
 */
spineApp.controller('regularRailController', function ($scope,$rootScope, multiStepFormInstance) {

    /***************Required for all Steps******************/
    $rootScope.multiStepFormInstance = multiStepFormInstance;

/*
    $rootScope.multiStepFormInstance.setValidity(true,3);

    /!**
     * Watch Validity changes in multiStepFormInstance & update isValid in regularStepService
     * ******************************Required for all Steps**********************************
     *!/
    $scope.$watch(function ($scope) {
        return  multiStepFormInstance.steps.map(function (obj) {
            return {"controller": obj.controller, "isValid": obj.valid}
        });
    }, function (val) {
        angular.forEach(val, function(value, key) {
            regularStepService.setStepValidityByController(value.controller, value.isValid);
        });
    }, true);*/


});
