<!DOCTYPE html>
<html lang="en" ng-app="spineApp">
<head>

    <!-- Required for Angular Location -->
    <meta charset="UTF-8">
    <base href="<% asset('/') %>">

    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <![endif]-->
    <title> Spine App - Frescoshades </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <%-- Includes --%>
    @include('shared/main/includes')
    @include('shared/errors/includes')
    @include('components/home/includes')
    @include('components/job-regular/includes')
    @include('components/job-regular/general/includes')
    @include('components/job-regular/rail/includes')
    @include('components/job-regular/roof/includes')

</head>

<body ng-controller="mainController">
    <div id="page-wrapper">
        <!-- Main View -->
        <div ui-view></div>
    </div>
</body>
</html>