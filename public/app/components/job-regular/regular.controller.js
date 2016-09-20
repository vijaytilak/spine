/**
 * MultiStepForm Controller - Wizard
 *
 */
spineApp.controller('multiStepFormController', function ($rootScope,multiStepFormInstance) {

    /***************Required for all Steps******************/
    $rootScope.multiStepFormInstance = multiStepFormInstance;

});

/**
 * Regular Job Controller - Wizard
 *
 */
spineApp.controller('regularController', function ($scope,stepService) {

    $scope.model = {};

    $scope.steps = stepService.getSelectedSteps();

    /**
     * Get Previous Btn Class
     *
     * @param isFirst
     * @returns {string}
     */
    $scope.getPreviousBtnClass = function (isFirst) {
        var previousBtnClass = isFirst ? 'hide' : 'previous navbtn';
        return (previousBtnClass);
    };

    /**
     * Get Next Btn Class
     *
     * @param isLast
     * @param hasForm
     * @param isValid
     * @returns {string}
     */
    $scope.getNextBtnClass = function (isLast,hasForm,isValid) {
        var nextBtnClass;

        if(isLast) {
            nextBtnClass = 'next hide';
        } else if(hasForm && !isValid) {
            nextBtnClass = 'next disabled';
        } else {
            nextBtnClass = 'next navbtn'
        }

        return (nextBtnClass);
    };

    /**
     * Get Class to show Form Validity
     *
     * @param hasForm
     * @param isValid
     * @returns {*}
     */
    $scope.getIsValidClass = function (hasForm,isValid) {
        var isValidClass;

        if(hasForm) {
            if(isValid)
                isValidClass = 'fa fa-check font-green';
            else
                isValidClass = 'fa fa-times font-red';
        } else {
            isValidClass = 'hide';
        }

        return (isValidClass);
    };

    /**
     * Get Class for Back to Home Btn
     *
     * @param isFirst
     * @returns {string}
     */
    $scope.getHomeBtnClass = function (isFirst) {
        var homeBtnClass = isFirst ? 'previous navbtn' : 'hide';
        return (homeBtnClass);
    };


});
