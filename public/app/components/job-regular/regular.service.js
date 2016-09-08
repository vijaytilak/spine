//Step Service - Regular Job
spineApp.service('regularStepService', function() {

    var regularJobSteps = [
        {
            defaultListId: '1',
            title: 'General Configuration',
            templateUrl: 'app/components/job-regular/general/general.view.hbs',
            hasForm: true,
            controller: 'regularGeneralController',
            dependencyListIds : ''
        },
        {
            defaultListId: '2',
            title: 'Rail',
            templateUrl: 'app/components/job-regular/rail/rail.view.hbs',
            hasForm: false,
            controller: 'regularRailController',
            dependencyListIds : ''
        },
        {
            defaultListId: '3',
            title: 'Roof',
            templateUrl: 'app/components/job-regular/roof/roof.view.hbs',
            hasForm: true,
            controller: 'regularRoofController',
            dependencyListIds : ''
        },
        /*{
            defaultListId: '4',
            title: 'Support',
            templateUrl: 'app/components/job-regular/support/support.view.hbs',
            hasForm: true,
            isolatedScope: true,
            controller: 'regularSupportController',
            dependencyListIds : ''
        },
        {
            defaultListId: '5',
            title: 'Gutter',
            templateUrl: 'app/components/job-regular/gutter/gutter.view.hbs',
            hasForm: true,
            isolatedScope: true,
            controller: 'regularGutterController',
            dependencyListIds : ''
        },
        {
            defaultListId: '6',
            title: 'Endfill',
            templateUrl: 'app/components/job-regular/endfill/endfill.view.hbs',
            hasForm: true,
            isolatedScope: true,
            controller: 'regularEndfillController',
            dependencyListIds : ''
        },
        {
            defaultListId: '7',
            title: 'Section',
            templateUrl: 'app/components/job-regular/section/section.view.hbs',
            hasForm: true,
            isolatedScope: true,
            controller: 'regularSectionController',
            dependencyListIds : ''
        },
        {
            defaultListId: '8',
            title: 'Additonal Items',
            templateUrl: 'app/components/job-regular/additional/additional.view.hbs',
            hasForm: true,
            isolatedScope: true,
            controller: 'regularAdditionalController',
            dependencyListIds : ''
        },
        {
            defaultListId: '9',
            title: 'Summary',
            templateUrl: 'app/components/job-regular/summary/summary.view.hbs',
            hasForm: true,
            isolatedScope: true,
            controller: 'regularSummaryController',
            dependencyListIds : ''
        },*/
    ];


    var getAllSteps = function(){
        return regularJobSteps;
    };

    return {
        getAllSteps: getAllSteps
    };

});