//Step Service - Regular Job
spineApp.service('regularStepService', function (orderByFilter) {

    var selectedStepList = [2,4,3];

    var regularJobSteps = [
        {
            title: 'General',
            templateUrl: 'app/components/job-regular/general/general.view.hbs',
            hasForm: true,
            controller: 'regularGeneralController',
            data: {
                listOrder: 1
            }
        },
        {
            title: 'Rail',
            templateUrl: 'app/components/job-regular/rail/rail.view.hbs',
            hasForm: true,
            controller: 'regularRailController',
            data: {
                listOrder: 2
            }

        },
        {
            title: 'Roof',
            templateUrl: 'app/components/job-regular/roof/roof.view.hbs',
            hasForm: true,
            controller: 'regularRoofController',
            data: {
                listOrder: 3
            }

        },
        {
            title: 'Support',
            templateUrl: 'app/components/job-regular/support/support.view.hbs',
            hasForm: true,
            controller: 'regularSupportController',
            data: {
                listOrder: 4
            }
        }
        /*{
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

    var setSelectedStep = function (listOrder) {
        selectedStepList.push(listOrder);
        return true;
    };

    var getAllSteps = function () {
        regularJobSteps = orderByFilter(regularJobSteps, 'data.listOrder', false);
        return regularJobSteps;
    };

    var getSelectedSteps = function () {
        var selectedSteps = [];
        for (var i in regularJobSteps) {
            if(selectedStepList.indexOf(regularJobSteps[i].data.listOrder) !== -1) {
                selectedSteps.push(regularJobSteps[i]);
            }
        }
        selectedSteps = orderByFilter(selectedSteps, 'data.listOrder', false);
        return selectedSteps;
    };

    return {
        setSelectedStep: setSelectedStep,
        getAllSteps: getAllSteps,
        getSelectedSteps: getSelectedSteps
    };

});