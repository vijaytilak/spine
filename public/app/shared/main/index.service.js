//Record Service
spineApp.service('recordService', function ($rootScope,$http) {
    //vTiger Record
    var record = {};

    var getRecordObjFromDB = function (crmId) {
        //Lookup Record from DB
        //Else lookup Record from vTiger

        return $http.get('/spine/public/api/records/'+crmId);
    };

    return {
        getRecordObjFromDB: getRecordObjFromDB,
    };

});

//Step Service
spineApp.service('stepService', function ($rootScope,$filter,recordService) {

    var regularJobSteps = [
        {
            title: 'General',
            templateUrl: 'app/components/job-regular/general/general.view.hbs',
            hasForm: true,
            controller: 'regularGeneralController',
            data: {
                listOrder: 1,
                mandatory: true,
                selected: true
            }
        },
        {
            title: 'Rail',
            templateUrl: 'app/components/job-regular/rail/rail.view.hbs',
            hasForm: true,
            controller: 'regularRailController',
            data: {
                listOrder: 2,
                mandatory: false,
                selected: true
            }

        },
        {
            title: 'Roof',
            templateUrl: 'app/components/job-regular/roof/roof.view.hbs',
            hasForm: true,
            controller: 'regularRoofController',
            data: {
                listOrder: 3,
                mandatory: false,
                selected: false
            }

        },
        {
            title: 'Support',
            templateUrl: 'app/components/job-regular/support/support.view.hbs',
            hasForm: true,
            controller: 'regularSupportController',
            data: {
                listOrder: 4,
                mandatory: false,
                selected: false
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

    var customJobSteps = [
        {
            title: 'General',
            templateUrl: 'app/components/job-custom/general/general.view.hbs',
            hasForm: true,
            controller: 'customGeneralController',
            data: {
                listOrder: 1,
                mandatory: true,
                selected: true
            }
        },
        {
            title: 'Rail',
            templateUrl: 'app/components/job-custom/rail/rail.view.hbs',
            hasForm: true,
            controller: 'customRailController',
            data: {
                listOrder: 2,
                mandatory: false,
                selected: true
            }

        },
        {
            title: 'Roof',
            templateUrl: 'app/components/job-custom/roof/roof.view.hbs',
            hasForm: true,
            controller: 'customRoofController',
            data: {
                listOrder: 3,
                mandatory: false,
                selected: false
            }

        },
        {
            title: 'Support',
            templateUrl: 'app/components/job-custom/support/support.view.hbs',
            hasForm: true,
            controller: 'customSupportController',
            data: {
                listOrder: 4,
                mandatory: false,
                selected: false
            }
        }
    ];


    var getAllSteps = function () {
        var allSteps = $filter('orderBy')(regularJobSteps, 'data.listOrder', false);
        return allSteps;
    };

    var getSelectedSteps = function () {
        var selectedSteps = $filter('filter')(regularJobSteps, {data:{selected:true}});
        selectedSteps = $filter('orderBy')(selectedSteps, 'data.listOrder', false);
        return selectedSteps;
    };

    var toggleSelection = function (index) {
        regularJobSteps[index].data.selected = !regularJobSteps[index].data.selected;
        return regularJobSteps[index].data.selected;
    };


    var getSelectedAttr = function () {
        var allSteps = getAllSteps();
        var selectedAttr = allSteps.map(function(item) { return item['data'].selected; });
        return selectedAttr;
    };


    return {
        getAllSteps: getAllSteps,
        getSelectedSteps: getSelectedSteps,
        toggleSelection: toggleSelection,
        getSelectedAttr: getSelectedAttr

    };

});