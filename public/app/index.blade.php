<!DOCTYPE html>
<html lang="en" ng-app="spineApp">
<head>

    <!-- Required for angular location -->
    <meta charset="UTF-8">
    <base href="<% asset('/') %>">

    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title> Spine App - Frescoshades </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <%-- JS & CSS : Included in blade views --%>
    @include('shared/main/includes/favicons')
    @include('shared/main/includes/css-helpers')
    @include('shared/main/includes/css-elements')
    @include('shared/main/includes/css-icons')
    @include('shared/main/includes/css-widgets')
    @include('shared/main/includes/css-snippets')
    @include('shared/main/includes/css-applications')
    @include('shared/main/includes/css-themes')
    @include('shared/main/includes/js-core')
    @include('shared/main/includes/js-angular')

    <%-- Angular App - Main --%>
    <script type="text/javascript" src="app/app.module.js"></script>
    <script type="text/javascript" src="app/app.routes.js"></script>
    <script type="text/javascript" src="app/app.controller.js"></script>

    <%-- Home --%>
    @include('components/home/includes')


</head>

<body ng-controller="mainController">

<div id="page-wrapper">
    @include('shared/main/headerView')
    @include('shared/main/sidebarView')

    <div id="page-content-wrapper">
        <div id="page-content">
            @include('shared/main/themeoptionsView')
            <div ng-view ng-class="pageTransition"></div>
        </div>
    </div>
</div>
@include('shared/main/includes/js-widgets')
</div>
</body>
</html>