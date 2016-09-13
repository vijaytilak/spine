//Step Service - Regular Job
spineApp.service('regularStepService', function() {

    var regularJobSteps = [
        {
            title: 'General Configuration',
            templateUrl: 'app/components/job-regular/general/general.view.hbs',
            hasForm: true,
            controller: 'regularGeneralController',
        },
        {
            title: 'Rail',
            templateUrl: 'app/components/job-regular/rail/rail.view.hbs',
            hasForm: true,
            controller: 'regularRailController',
        },
        {
            title: 'Roof',
            templateUrl: 'app/components/job-regular/roof/roof.view.hbs',
            hasForm: true,
            controller: 'regularRoofController',
        },
        /*{
            title: 'Support',
            templateUrl: 'app/components/job-regular/support/support.view.hbs',
            hasForm: true,
            controller: 'regularSupportController',
        },
        {
            title: 'Gutter',
            templateUrl: 'app/components/job-regular/gutter/gutter.view.hbs',
            hasForm: true,
            controller: 'regularGutterController',
        },
        {
            title: 'Endfill',
            templateUrl: 'app/components/job-regular/endfill/endfill.view.hbs',
            hasForm: true,
            controller: 'regularEndfillController',
        },
        {
            title: 'Section',
            templateUrl: 'app/components/job-regular/section/section.view.hbs',
            hasForm: true,
            controller: 'regularSectionController',
        },
        {
            title: 'Additional Items',
            templateUrl: 'app/components/job-regular/additional/additional.view.hbs',
            hasForm: true,
            controller: 'regularAdditionalController',
        },
        {
            title: 'Summary',
            templateUrl: 'app/components/job-regular/summary/summary.view.hbs',
            hasForm: true,
            controller: 'regularSummaryController',
        },*/
    ];


    var getAllSteps = function(){
        return regularJobSteps;
    };

/*    var setStepValidityByController = function(controller,isValid){
        //Search controller in regularJobSteps
        for (var i in regularJobSteps) {
            if (regularJobSteps[i].controller == controller) {
                regularJobSteps[i].isValid = isValid;
                break;
            }
        }
        return true;
    };*/

    return {
        getAllSteps: getAllSteps
    };

});