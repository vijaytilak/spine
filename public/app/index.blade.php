<!DOCTYPE html>
<html lang="en" ng-app="monarchApp">
<head>

    <meta charset="UTF-8">
    <base href="<% asset('/') %>">


    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title> Monarch UI - Bootstrap Frontend &amp; Admin Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicons -->

    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="assets/images/icons/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="assets/images/icons/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="assets/images/icons/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/icons/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/images/icons/favicon.png">


    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">


    <!-- HELPERS -->

    <link rel="stylesheet" type="text/css" href="assets/helpers/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/helpers/backgrounds.css">
    <link rel="stylesheet" type="text/css" href="assets/helpers/boilerplate.css">
    <link rel="stylesheet" type="text/css" href="assets/helpers/border-radius.css">
    <link rel="stylesheet" type="text/css" href="assets/helpers/grid.css">
    <link rel="stylesheet" type="text/css" href="assets/helpers/page-transitions.css">
    <link rel="stylesheet" type="text/css" href="assets/helpers/spacing.css">
    <link rel="stylesheet" type="text/css" href="assets/helpers/typography.css">
    <link rel="stylesheet" type="text/css" href="assets/helpers/utils.css">
    <link rel="stylesheet" type="text/css" href="assets/helpers/colors.css">

    <!-- ELEMENTS -->

    <link rel="stylesheet" type="text/css" href="assets/elements/badges.css">
    <link rel="stylesheet" type="text/css" href="assets/elements/buttons.css">
    <link rel="stylesheet" type="text/css" href="assets/elements/content-box.css">
    <link rel="stylesheet" type="text/css" href="assets/elements/dashboard-box.css">
    <link rel="stylesheet" type="text/css" href="assets/elements/forms.css">
    <link rel="stylesheet" type="text/css" href="assets/elements/images.css">
    <link rel="stylesheet" type="text/css" href="assets/elements/info-box.css">
    <link rel="stylesheet" type="text/css" href="assets/elements/invoice.css">
    <link rel="stylesheet" type="text/css" href="assets/elements/loading-indicators.css">
    <link rel="stylesheet" type="text/css" href="assets/elements/menus.css">
    <link rel="stylesheet" type="text/css" href="assets/elements/panel-box.css">
    <link rel="stylesheet" type="text/css" href="assets/elements/response-messages.css">
    <link rel="stylesheet" type="text/css" href="assets/elements/responsive-tables.css">
    <link rel="stylesheet" type="text/css" href="assets/elements/ribbon.css">
    <link rel="stylesheet" type="text/css" href="assets/elements/social-box.css">
    <link rel="stylesheet" type="text/css" href="assets/elements/tables.css">
    <link rel="stylesheet" type="text/css" href="assets/elements/tile-box.css">
    <link rel="stylesheet" type="text/css" href="assets/elements/timeline.css">


    <!-- ICONS -->

    <link rel="stylesheet" type="text/css" href="assets/icons/fontawesome/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="assets/icons/linecons/linecons.css">
    <link rel="stylesheet" type="text/css" href="assets/icons/spinnericon/spinnericon.css">


    <!-- WIDGETS -->

    <link rel="stylesheet" type="text/css" href="assets/widgets/accordion-ui/accordion.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/calendar/calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/carousel/carousel.css">

    <link rel="stylesheet" type="text/css" href="assets/widgets/charts/justgage/justgage.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/charts/morris/morris.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/charts/piegage/piegage.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/charts/xcharts/xcharts.css">

    <link rel="stylesheet" type="text/css" href="assets/widgets/chosen/chosen.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/colorpicker/colorpicker.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/datatable/datatable.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/datepicker/datepicker.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/datepicker-ui/datepicker.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/dialog/dialog.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/dropdown/dropdown.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/dropzone/dropzone.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/file-input/fileinput.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/input-switch/inputswitch.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/input-switch/inputswitch-alt.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/ionrangeslider/ionrangeslider.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/jcrop/jcrop.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/jgrowl-notifications/jgrowl.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/loading-bar/loadingbar.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/maps/vector-maps/vectormaps.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/markdown/markdown.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/modal/modal.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/multi-select/multiselect.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/multi-upload/fileupload.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/nestable/nestable.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/noty-notifications/noty.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/popover/popover.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/pretty-photo/prettyphoto.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/progressbar/progressbar.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/range-slider/rangeslider.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/slidebars/slidebars.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/slider-ui/slider.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/tabs-ui/tabs.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/theme-switcher/themeswitcher.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/timepicker/timepicker.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/tocify/tocify.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/tooltip/tooltip.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/touchspin/touchspin.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/uniform/uniform.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/wizard/wizard.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/xeditable/xeditable.css">

    <!-- SNIPPETS -->

    <link rel="stylesheet" type="text/css" href="assets/snippets/chat.css">
    <link rel="stylesheet" type="text/css" href="assets/snippets/files-box.css">
    <link rel="stylesheet" type="text/css" href="assets/snippets/login-box.css">
    <link rel="stylesheet" type="text/css" href="assets/snippets/notification-box.css">
    <link rel="stylesheet" type="text/css" href="assets/snippets/progress-box.css">
    <link rel="stylesheet" type="text/css" href="assets/snippets/todo.css">
    <link rel="stylesheet" type="text/css" href="assets/snippets/user-profile.css">
    <link rel="stylesheet" type="text/css" href="assets/snippets/mobile-navigation.css">

    <!-- APPLICATIONS -->

    <link rel="stylesheet" type="text/css" href="assets/applications/mailbox.css">

    <!-- Admin theme -->

    <link rel="stylesheet" type="text/css" href="assets/themes/admin/layout.css">
    <link rel="stylesheet" type="text/css" href="assets/themes/admin/color-schemes/default.css">

    <!-- Components theme -->

    <link rel="stylesheet" type="text/css" href="assets/themes/components/default.css">
    <link rel="stylesheet" type="text/css" href="assets/themes/components/border-radius.css">

    <!-- Admin responsive -->

    <link rel="stylesheet" type="text/css" href="assets/helpers/responsive-elements.css">
    <link rel="stylesheet" type="text/css" href="assets/helpers/admin-responsive.css">

    <!-- JS Core -->

    <script type="text/javascript" src="assets/js-core/jquery-core.js"></script>
    <script type="text/javascript" src="assets/js-core/jquery-ui-core.js"></script>
    <script type="text/javascript" src="assets/js-core/jquery-ui-widget.js"></script>
    <script type="text/javascript" src="assets/js-core/jquery-ui-mouse.js"></script>
    <script type="text/javascript" src="assets/js-core/jquery-ui-position.js"></script>
    <!--<script type="text/javascript" src="assets/js-core/transition.js"></script>-->
    <script type="text/javascript" src="assets/js-core/modernizr.js"></script>
    <script type="text/javascript" src="assets/js-core/jquery-cookie.js"></script>


    <script src="http://code.angularjs.org/1.2.13/angular.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.13/angular-route.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.13/angular-animate.js"></script>
    <script type="text/javascript" src="assets/angular/app.js"></script>

    <link rel="stylesheet" type="text/css" href="assets/angular/page-animations.css">


</head>


<body ng-controller="mainController">


<div id="page-wrapper">
    <div id="page-header" class="bg-gradient-9">
        <div id="mobile-navigation">
            <button id="nav-toggle" class="collapsed" data-toggle="collapse" data-target="#page-sidebar"><span></span>
            </button>
            <a href="index.html" class="logo-content-small" title="MonarchUI"></a>
        </div>
        <div id="header-logo" class="logo-bg">
            <a href="index.html" class="logo-content-big" title="MonarchUI">
                Monarch <i>UI</i>
                <span>The perfect solution for user interfaces</span>
            </a>
            <a href="index.html" class="logo-content-small" title="MonarchUI">
                Monarch <i>UI</i>
                <span>The perfect solution for user interfaces</span>
            </a>
            <a id="close-sidebar" href="#" title="Close sidebar">
                <i class="glyph-icon icon-angle-left"></i>
            </a>
        </div>
        <div id="header-nav-left">
            <div class="user-account-btn dropdown">
                <a href="#" title="My Account" class="user-profile clearfix" data-toggle="dropdown">
                    <img width="28" src="assets/image-resources/gravatar.jpg" alt="Profile image">
                    <span>Thomas Barnes</span>
                    <i class="glyph-icon icon-angle-down"></i>
                </a>
                <div class="dropdown-menu float-left">
                    <div class="box-sm">
                        <div class="login-box clearfix">
                            <div class="user-img">
                                <a href="#" title="" class="change-img">Change photo</a>
                                <img src="assets/image-resources/gravatar.jpg" alt="">
                            </div>
                            <div class="user-info">
                            <span>
                                Thomas Barnes
                                <i>UX/UI developer</i>
                            </span>
                                <a href="#" title="Edit profile">Edit profile</a>
                                <a href="#" title="View notifications">View notifications</a>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <ul class="reset-ul mrg5B">
                            <li>
                                <a href="#">
                                    <i class="glyph-icon float-right icon-caret-right"></i>
                                    View login page example

                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="glyph-icon float-right icon-caret-right"></i>
                                    View lockscreen example

                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="glyph-icon float-right icon-caret-right"></i>
                                    View account details

                                </a>
                            </li>
                        </ul>
                        <div class="pad5A button-pane button-pane-alt text-center">
                            <a href="#" class="btn display-block font-normal btn-danger">
                                <i class="glyph-icon icon-power-off"></i>
                                Logout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- #header-nav-left -->

        <div id="header-nav-right">
            <a href="#" class="hdr-btn popover-button" title="Search" data-placement="bottom" data-id="#popover-search">
                <i class="glyph-icon icon-search"></i>
            </a>
            <div class="hide" id="popover-search">
                <div class="pad5A box-md">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search terms here ...">
                        <span class="input-group-btn">
                        <a class="btn btn-primary" href="#">Search</a>
                    </span>
                    </div>
                </div>
            </div>
            <a href="#" class="hdr-btn" id="fullscreen-btn" title="Fullscreen">
                <i class="glyph-icon icon-arrows-alt"></i>
            </a>
            <a href="#" class="hdr-btn sb-toggle-left" id="chatbox-btn" title="Chat sidebar">
                <i class="glyph-icon icon-linecons-paper-plane"></i>
            </a>
            <div class="dropdown" id="notifications-btn">
                <a data-toggle="dropdown" href="#" title="">
                    <span class="small-badge bg-yellow"></span>
                    <i class="glyph-icon icon-linecons-megaphone"></i>
                </a>
                <div class="dropdown-menu box-md float-right">

                    <div class="popover-title display-block clearfix pad10A">
                        Notifications
                        <a class="text-transform-cap font-primary font-normal btn-link float-right" href="#"
                           title="View more options">
                            More options...
                        </a>
                    </div>
                    <div class="scrollable-content scrollable-slim-box">
                        <ul class="no-border notifications-box">
                            <li>
                                <span class="bg-danger icon-notification glyph-icon icon-bullhorn"></span>
                                <span class="notification-text">This is an error notification</span>
                                <div class="notification-time">
                                    a few seconds ago
                                    <span class="glyph-icon icon-clock-o"></span>
                                </div>
                            </li>
                            <li>
                                <span class="bg-warning icon-notification glyph-icon icon-users"></span>
                                <span class="notification-text font-blue">This is a warning notification</span>
                                <div class="notification-time">
                                    <b>15</b> minutes ago
                                    <span class="glyph-icon icon-clock-o"></span>
                                </div>
                            </li>
                            <li>
                                <span class="bg-green icon-notification glyph-icon icon-sitemap"></span>
                                <span class="notification-text font-green">A success message example.</span>
                                <div class="notification-time">
                                    <b>2 hours</b> ago
                                    <span class="glyph-icon icon-clock-o"></span>
                                </div>
                            </li>
                            <li>
                                <span class="bg-azure icon-notification glyph-icon icon-random"></span>
                                <span class="notification-text">This is an error notification</span>
                                <div class="notification-time">
                                    a few seconds ago
                                    <span class="glyph-icon icon-clock-o"></span>
                                </div>
                            </li>
                            <li>
                                <span class="bg-warning icon-notification glyph-icon icon-ticket"></span>
                                <span class="notification-text">This is a warning notification</span>
                                <div class="notification-time">
                                    <b>15</b> minutes ago
                                    <span class="glyph-icon icon-clock-o"></span>
                                </div>
                            </li>
                            <li>
                                <span class="bg-blue icon-notification glyph-icon icon-user"></span>
                                <span class="notification-text font-blue">Alternate notification styling.</span>
                                <div class="notification-time">
                                    <b>2 hours</b> ago
                                    <span class="glyph-icon icon-clock-o"></span>
                                </div>
                            </li>
                            <li>
                                <span class="bg-purple icon-notification glyph-icon icon-user"></span>
                                <span class="notification-text">This is an error notification</span>
                                <div class="notification-time">
                                    a few seconds ago
                                    <span class="glyph-icon icon-clock-o"></span>
                                </div>
                            </li>
                            <li>
                                <span class="bg-warning icon-notification glyph-icon icon-user"></span>
                                <span class="notification-text">This is a warning notification</span>
                                <div class="notification-time">
                                    <b>15</b> minutes ago
                                    <span class="glyph-icon icon-clock-o"></span>
                                </div>
                            </li>
                            <li>
                                <span class="bg-green icon-notification glyph-icon icon-user"></span>
                                <span class="notification-text font-green">A success message example.</span>
                                <div class="notification-time">
                                    <b>2 hours</b> ago
                                    <span class="glyph-icon icon-clock-o"></span>
                                </div>
                            </li>
                            <li>
                                <span class="bg-purple icon-notification glyph-icon icon-user"></span>
                                <span class="notification-text">This is an error notification</span>
                                <div class="notification-time">
                                    a few seconds ago
                                    <span class="glyph-icon icon-clock-o"></span>
                                </div>
                            </li>
                            <li>
                                <span class="bg-warning icon-notification glyph-icon icon-user"></span>
                                <span class="notification-text">This is a warning notification</span>
                                <div class="notification-time">
                                    <b>15</b> minutes ago
                                    <span class="glyph-icon icon-clock-o"></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="pad10A button-pane button-pane-alt text-center">
                        <a href="#" class="btn btn-primary" title="View all notifications">
                            View all notifications
                        </a>
                    </div>
                </div>
            </div>
            <div class="dropdown" id="progress-btn">
                <a data-toggle="dropdown" href="#" title="">
                    <span class="small-badge bg-azure"></span>
                    <i class="glyph-icon icon-linecons-params"></i>
                </a>
                <div class="dropdown-menu pad0A box-sm float-right" id="progress-dropdown">
                    <div class="scrollable-content scrollable-slim-box">
                        <ul class="no-border progress-box progress-box-links">
                            <li>
                                <a href="#" title="">
                                    <b class="pull-right">23%</b>
                                    <div class="progress-title">
                                        Finishing uploading files

                                    </div>
                                    <div class="progressbar-smaller progressbar" data-value="23">
                                        <div class="progressbar-value bg-blue-alt">
                                            <div class="progressbar-overlay"></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <b class="pull-right">91%</b>
                                    <div class="progress-title">
                                        Roadmap progress
                                    </div>
                                    <div class="progressbar-smaller progressbar" data-value="91">
                                        <div class="progressbar-value bg-red">
                                            <div class="progressbar-overlay"></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <b class="pull-right">58%</b>
                                    <div class="progress-title">
                                        Images upload
                                    </div>
                                    <div class="progressbar-smaller progressbar" data-value="58">
                                        <div class="progressbar-value bg-green"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <b class="pull-right">74%</b>
                                    <div class="progress-title">
                                        WordPress migration
                                    </div>
                                    <div class="progressbar-smaller progressbar" data-value="74">
                                        <div class="progressbar-value bg-purple"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <b class="pull-right">91%</b>
                                    <div class="progress-title">
                                        Agile development procedures
                                    </div>
                                    <div class="progressbar-smaller progressbar" data-value="91">
                                        <div class="progressbar-value bg-black">
                                            <div class="progressbar-overlay"></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <b class="pull-right">58%</b>
                                    <div class="progress-title">
                                        Systems integration
                                    </div>
                                    <div class="progressbar-smaller progressbar" data-value="58">
                                        <div class="progressbar-value bg-azure"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <b class="pull-right">97%</b>
                                    <div class="progress-title">
                                        Code optimizations
                                    </div>
                                    <div class="progressbar-smaller progressbar" data-value="97">
                                        <div class="progressbar-value bg-yellow"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="pad5A button-pane button-pane-alt text-center">
                        <a href="#" class="btn display-block font-normal hover-green" title="View all notifications">
                            View all notifications
                        </a>
                    </div>
                </div>
            </div>
            <div class="dropdown" id="cloud-btn">
                <a href="#" data-placement="bottom" class="tooltip-button sb-toggle-right" title="Statistics Sidebar">
                    <i class="glyph-icon icon-linecons-cloud"></i>
                </a>
            </div>
            <div class="dropdown" id="dashnav-btn">
                <a href="#" data-toggle="dropdown" data-placement="bottom" class="popover-button-header tooltip-button"
                   title="Dashboard Quick Menu">
                    <i class="glyph-icon icon-linecons-cog"></i>
                </a>
                <div class="dropdown-menu float-right">
                    <div class="box-sm">
                        <div class="pad5T pad5B pad10L pad10R dashboard-buttons clearfix">
                            <a href="#" class="btn vertical-button hover-blue-alt" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-dashboard opacity-80 font-size-20"></i>
                            </span>
                                Dashboard
                            </a>
                            <a href="#" class="btn vertical-button hover-green" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-tags opacity-80 font-size-20"></i>
                            </span>
                                Widgets
                            </a>
                            <a href="#" class="btn vertical-button hover-orange" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-fire opacity-80 font-size-20"></i>
                            </span>
                                Tables
                            </a>
                            <a href="#" class="btn vertical-button hover-orange" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-bar-chart-o opacity-80 font-size-20"></i>
                            </span>
                                Charts
                            </a>
                            <a href="#" class="btn vertical-button hover-purple" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-laptop opacity-80 font-size-20"></i>
                            </span>
                                Buttons
                            </a>
                            <a href="#" class="btn vertical-button hover-azure" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-code opacity-80 font-size-20"></i>
                            </span>
                                Panels
                            </a>
                        </div>
                        <div class="divider"></div>
                        <div class="pad5T pad5B pad10L pad10R dashboard-buttons clearfix">
                            <a href="#" class="btn vertical-button remove-border btn-info" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-dashboard opacity-80 font-size-20"></i>
                            </span>
                                Dashboard
                            </a>
                            <a href="#" class="btn vertical-button remove-border btn-danger" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-tags opacity-80 font-size-20"></i>
                            </span>
                                Widgets
                            </a>
                            <a href="#" class="btn vertical-button remove-border btn-purple" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-fire opacity-80 font-size-20"></i>
                            </span>
                                Tables
                            </a>
                            <a href="#" class="btn vertical-button remove-border btn-azure" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-bar-chart-o opacity-80 font-size-20"></i>
                            </span>
                                Charts
                            </a>
                            <a href="#" class="btn vertical-button remove-border btn-yellow" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-laptop opacity-80 font-size-20"></i>
                            </span>
                                Buttons
                            </a>
                            <a href="#" class="btn vertical-button remove-border btn-warning" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-code opacity-80 font-size-20"></i>
                            </span>
                                Panels
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="header-btn" id="logout-btn" href="lockscreen-3.html" title="Lockscreen page example">
                <i class="glyph-icon icon-linecons-lock"></i>
            </a>

        </div><!-- #header-nav-right -->

    </div>
    <div id="page-sidebar">
        <div class="scroll-sidebar">


            <ul id="sidebar-menu">
                <li class="header"><span>Overview</span></li>
                <li>
                    <a href="#index" title="Admin Dashboard">
                        <i class="glyph-icon icon-linecons-tv"></i>
                        <span>Admin dashboard</span>
                    </a>
                </li>
                <li class="divider"></li>
                <li class="no-menu">
                    <a href="../frontend-template/index.html" title="Frontend template">
                        <i class="glyph-icon icon-linecons-beaker"></i>
                        <span>Frontend template</span>
                        <span class="bs-label label-danger">
                NEW
            </span>
                    </a>
                </li>
                <li class="header"><span>Components</span></li>
                <li>
                    <a href="javascript:void(0);" title="Elements">
                        <i class="glyph-icon icon-linecons-diamond"></i>
                        <span>Elements</span>
                    </a>
                    <div class="sidebar-submenu">

                        <ul>
                            <li><a href="#buttons" title="Buttons"><span>Buttons</span></a></li>
                            <li><a href="#labels-badges" title="Labels & Badges"><span>Labels &amp; Badges</span></a>
                            </li>
                            <li><a href="#content-boxes" title="Content boxes"><span>Content boxes</span></a></li>
                            <li><a href="#icons" title="Icons"><span>Icons</span></a></li>
                            <li><a href="#nav-menus" title="Navigation menus"><span>Navigation menus</span></a></li>
                            <li><a href="#response-messages"
                                   title="Response messages"><span>Response messages</span></a></li>
                            <li><a href="#images" title="Images"><span>Images</span></a></li>
                        </ul>

                    </div><!-- .sidebar-submenu -->
                </li>
                <li>
                    <a href="javascript:void(0);" title="Dashboard boxes">
                        <i class="glyph-icon icon-linecons-lightbulb"></i>
                        <span>Dashboard boxes</span>
                        <span class="bs-label label-primary">Hot</span>
                    </a>
                    <div class="sidebar-submenu">

                        <ul>
                            <li><a href="#chart-boxes" title="Chart boxes"><span>Chart boxes</span></a></li>
                            <li><a href="#tile-boxes" title="Tile boxes"><span>Tile boxes</span></a></li>
                            <li><a href="#social-boxes" title="Social boxes"><span>Social boxes</span></a></li>
                            <li><a href="#panel-boxes" title="Panel boxes"><span>Panel boxes</span></a></li>
                        </ul>

                    </div><!-- .sidebar-submenu -->
                </li>
                <li>
                    <a href="javascript:void(0);" title="Widgets">
                        <i class="glyph-icon icon-linecons-wallet"></i>
                        <span>Widgets</span>
                    </a>
                    <div class="sidebar-submenu">

                        <ul>
                            <li><a href="#tabs" title="Responsive tabs"><span>Responsive tabs</span></a></li>
                            <li><a href="#collapsable" title="Collapsables"><span>Collapsable accordions</span></a></li>
                            <li><a href="#bs-carousel" title="Bootstrap Carousel"><span>Bootstrap carousel</span></a>
                            </li>
                            <li><a href="#calendar" title="Calendar"><span>Calendar</span></a></li>
                            <li><a href="#scrollbars" title="Custom scrollbars"><span>Custom scrollbars</span></a></li>
                            <li><a href="#modals" title="Modals"><span>Modals</span></a></li>
                            <li><a href="#notifications" title="Notifications"><span>Notifications</span></a></li>
                            <li><a href="#lazyload" title="Lazyload"><span>Lazyload</span></a></li>
                            <li><a href="#loading-feedback" title="Loading feedback"><span>Loading feedback</span></a>
                            </li>
                            <li><a href="#popovers-tooltips"
                                   title="Popovers & Tooltips"><span>Popovers & Tooltips</span></a></li>
                            <li><a href="#progress-bars" title="Progress bars"><span>Progress bars</span></a></li>
                            <li><a href="#sortable-elements"
                                   title="Sortable elements"><span>Sortable elements</span></a></li>
                        </ul>

                    </div><!-- .sidebar-submenu -->
                </li>
                <li>
                    <a href="javascript:void(0);" title="Forms UI">
                        <i class="glyph-icon icon-linecons-eye"></i>
                        <span>Forms UI</span>
                    </a>
                    <div class="sidebar-submenu">

                        <ul>
                            <li><a href="#forms-elements" title="Form elements"><span>Form elements</span></a></li>
                            <li><a href="#forms-validation" title="Form validation"><span>Form validation</span></a>
                            </li>
                            <li><a href="#pickers" title="Pickers"><span>Pickers</span></a></li>
                            <li><a href="#sliders" title="Sliders"><span>Sliders</span></a></li>
                            <li><a href="#forms-wizard" title="Form wizards"><span>Form wizards</span></a></li>
                            <li><a href="#forms-masks" title="Form input masks"><span>Form input masks</span></a></li>
                            <li><a href="#image-crop" title="Image crop"><span>Image crop</span></a></li>
                            <li><a href="#dropzone-uploader"
                                   title="Dropzone uploader"><span>Dropzone uploader</span></a></li>
                            <li><a href="#multi-uploader" title="Multi uploader"><span>Multi uploader</span></a></li>
                            <li><a href="#input-knobs" title="Input knobs"><span>Input knobs</span></a></li>
                            <li><a href="#ckeditor" title="Ckeditor"><span>Ckeditor</span></a></li>
                            <li><a href="#summernote" title="Summernote"><span>Summernote</span></a></li>
                            <li><a href="#markdown" title="Markdown editor"><span>Markdown editor</span></a></li>
                            <li><a href="#inline-editor" title="Inline editor"><span>Inline editor</span></a></li>
                        </ul>

                    </div><!-- .sidebar-submenu -->
                </li>
                <li>
                    <a href="javascript:void(0);" title="Advanced tables">
                        <i class="glyph-icon icon-linecons-megaphone"></i>
                        <span>Advanced tables</span>
                    </a>
                    <div class="sidebar-submenu">

                        <ul>
                            <li><a href="#tables" title="Basic tables"><span>Basic tables</span></a></li>
                            <li><a href="#responsive-tables"
                                   title="Responsive tables"><span>Responsive tables</span></a></li>
                            <li><a href="#data-tables" title="Data tables"><span>Data tables</span></a></li>
                            <li><a href="#advanced-datatables"
                                   title="Advanced data tables"><span>Advanced data tables</span></a></li>
                            <li><a href="#fixed-datatables" title="Fixed data tables"><span>Fixed data tables</span></a>
                            </li>
                            <li><a href="#responsive-datatables" title="Responsive data tables"><span>Responsive data tables</span></a>
                            </li>
                        </ul>

                    </div><!-- .sidebar-submenu -->
                </li>
                <li>
                    <a href="javascript:void(0);" title="Charts">
                        <i class="glyph-icon icon-linecons-paper-plane"></i>
                        <span>Charts</span>
                    </a>
                    <div class="sidebar-submenu">

                        <ul>
                            <li><a href="#flot-charts" title="Flot charts"><span>Flot charts</span></a></li>
                            <li><a href="#sparklines" title="Sparklines"><span>Sparklines</span></a></li>
                            <li><a href="#pie-gages" title="PieGages"><span>PieGages</span></a></li>
                            <li><a href="#just-gage" title="justGage"><span>justGage</span></a></li>
                            <li><a href="#morris-charts" title="Morris charts"><span>Morris charts</span></a></li>
                            <li><a href="#xcharts" title="xCharts"><span>xCharts</span></a></li>
                            <li><a href="#chart-js" title="Chart.js"><span>Chart.js</span></a></li>
                        </ul>

                    </div><!-- .sidebar-submenu -->
                </li>
                <li>
                    <a href="javascript:void(0);" title="Maps">
                        <i class="glyph-icon icon-linecons-sound"></i>
                        <span>Maps</span>
                    </a>
                    <div class="sidebar-submenu">

                        <ul>
                            <li><a href="#gmaps" title="gMaps"><span>gMaps</span></a></li>
                            <li><a href="#vector-maps" title="Vector maps"><span>Vector maps</span></a></li>
                            <li><a href="#mapael" title="Mapael"><span>Mapael</span></a></li>
                        </ul>

                    </div><!-- .sidebar-submenu -->
                </li>
                <li class="header"><span>Extra</span></li>
                <li>
                    <a href="javascript:void(0);" title="Pages">
                        <i class="glyph-icon icon-linecons-fire"></i>
                        <span>Pages</span>
                        <span class="bs-label badge-yellow">NEW</span>
                    </a>
                    <div class="sidebar-submenu">

                        <ul>
                            <li><a href="#index-alt" title="Alternate dashboard"><span>Alternate dashboard</span></a>
                            </li>
                            <li><a href="#view-profile" title="View profile"><span>View profile</span></a></li>
                            <li><a href="#faq-section" title="FAQ section"><span>FAQ section</span></a></li>
                            <li><a href="#auto-menu" title="Auto menu"><span>Auto menu</span></a></li>
                            <li><a href="#invoice" title="Invoice"><span>Invoice</span></a></li>
                            <li><a href="#admin-blog" title="Blog posts list"><span>Blog posts list</span></a></li>
                            <li><a href="#admin-pricing" title="Pricing tables"><span>Pricing tables</span></a></li>
                            <li><a href="#portfolio-gallery"
                                   title="Portfolio gallery"><span>Portfolio gallery</span></a></li>
                            <li><a href="#portfolio-masonry"
                                   title="Portfolio masonry"><span>Portfolio masonry</span></a></li>
                            <li><a href="#slidebars" title="Slidebars"><span>Slidebars</span></a></li>
                        </ul>

                    </div><!-- .sidebar-submenu -->
                </li>
                <li>
                    <a href="javascript:void(0);" title="Other Pages">
                        <i class="glyph-icon icon-linecons-cup"></i>
                        <span>Other Pages</span>
                    </a>
                    <div class="sidebar-submenu">

                        <ul>
                            <li><a href="#login-1" target="_blank" title="Login page 1"><span>Login page 1</span></a>
                            </li>
                            <li><a href="#login-2" target="_blank" title="Login page 2"><span>Login page 2</span></a>
                            </li>
                            <li><a href="#login-3" target="_blank" title="Login page 3"><span>Login page 3</span></a>
                            </li>
                            <li><a href="#login-4" target="_blank" title="Login page 4"><span>Login page 4</span></a>
                            </li>
                            <li><a href="#login-5" target="_blank" title="Login page 5"><span>Login page 5</span></a>
                            </li>
                            <li><a href="#lockscreen-1" target="_blank" title="Lockscreen page 1"><span>Lockscreen page 1</span></a>
                            </li>
                            <li><a href="#lockscreen-2" target="_blank" title="Lockscreen page 2"><span>Lockscreen page 2</span></a>
                            </li>
                            <li><a href="#lockscreen-3" target="_blank" title="Lockscreen page 3"><span>Lockscreen page 3</span></a>
                            </li>
                            <li><a href="#server-1" target="_blank"
                                   title="Server page 1"><span>Error 404 page</span></a></li>
                            <li><a href="#server-2" target="_blank"
                                   title="Server page 2"><span>Error 404 alternate</span></a></li>
                            <li><a href="#server-3" target="_blank" title="Server page 3"><span>Server 500 error</span></a>
                            </li>
                        </ul>

                    </div><!-- .sidebar-submenu -->
                </li>
                <li>
                    <a href="javascript:void(0);" title="Mailbox">
                        <i class="glyph-icon icon-linecons-mail"></i>
                        <span>Mailbox</span>
                        <span class="bs-badge badge-danger">3</span>
                    </a>
                    <div class="sidebar-submenu">

                        <ul>
                            <li><a href="#mailbox-inbox" title="Inbox"><span>Inbox</span></a></li>
                            <li><a href="#mailbox-compose" title="Compose message"><span>Compose message</span></a></li>
                            <li><a href="#mailbox-single" title="Single message"><span>Single message</span></a></li>
                        </ul>

                    </div><!-- .sidebar-submenu -->
                </li>
                <li>
                    <a href="javascript:void(0);" title="Snippets">
                        <i class="glyph-icon icon-linecons-cd"></i>
                        <span>Snippets</span>
                    </a>
                    <div class="sidebar-submenu">

                        <ul>
                            <li><a href="#timeline" title="Timeline"><span>Timeline</span></a></li>
                            <li><a href="#chat" title="Chat"><span>Chat</span></a></li>
                            <li><a href="#checklist" title="Checklist"><span>Checklist</span></a></li>
                        </ul>

                    </div><!-- .sidebar-submenu -->
                </li>
                <li>
                    <a href="javascript:void(0);" title="Helpers">
                        <i class="glyph-icon icon-linecons-doc"></i>
                        <span>Helpers</span>
                    </a>
                    <div class="sidebar-submenu">

                        <ul>
                            <li><a href="#helper-classes" title="Helper classes"><span>Helper classes</span></a></li>
                            <li><a href="#page-transitions" title="Page transitions"><span>Page transitions</span></a>
                            </li>
                            <li><a href="#animations" title="Animations"><span>Animations</span></a></li>
                        </ul>

                    </div><!-- .sidebar-submenu -->
                </li>
            </ul><!-- #sidebar-menu -->


        </div>
    </div>
    <div id="page-content-wrapper">
        <div id="page-content">


            <div id="theme-options" class="admin-options">
                <a href="javascript:void(0);" class="btn btn-primary theme-switcher tooltip-button"
                   data-placement="left" title="Color schemes and layout options">
                    <i class="glyph-icon icon-linecons-cog icon-spin"></i>
                </a>
                <div id="theme-switcher-wrapper">
                    <div class="scroll-switcher">
                        <h5 class="header">Layout options</h5>
                        <ul class="reset-ul">
                            <li>
                                <label for="boxed-layout">Boxed layout</label>
                                <input type="checkbox" data-toggletarget="boxed-layout" id="boxed-layout"
                                       class="input-switch-alt">
                            </li>
                            <li>
                                <label for="fixed-header">Fixed header</label>
                                <input type="checkbox" data-toggletarget="fixed-header" id="fixed-header"
                                       class="input-switch-alt">
                            </li>
                            <li>
                                <label for="fixed-sidebar">Fixed sidebar</label>
                                <input type="checkbox" data-toggletarget="fixed-sidebar" id="fixed-sidebar"
                                       class="input-switch-alt">
                            </li>
                            <li>
                                <label for="closed-sidebar">Closed sidebar</label>
                                <input type="checkbox" data-toggletarget="closed-sidebar" id="closed-sidebar"
                                       class="input-switch-alt">
                            </li>
                        </ul>
                        <div class="boxed-bg-wrapper hide">
                            <h5 class="header">
                                Boxed Page Background
                                <a class="set-background-style" data-header-bg="" title="Remove all styles"
                                   href="javascript:void(0);">Clear</a>
                            </h5>
                            <div class="theme-color-wrapper clearfix">
                                <h5>Patterns</h5>
                                <a class="tooltip-button set-background-style pattern-bg-3"
                                   data-header-bg="pattern-bg-3" title="Pattern 3" href="javascript:void(0);">Pattern
                                    3</a>
                                <a class="tooltip-button set-background-style pattern-bg-4"
                                   data-header-bg="pattern-bg-4" title="Pattern 4" href="javascript:void(0);">Pattern
                                    4</a>
                                <a class="tooltip-button set-background-style pattern-bg-5"
                                   data-header-bg="pattern-bg-5" title="Pattern 5" href="javascript:void(0);">Pattern
                                    5</a>
                                <a class="tooltip-button set-background-style pattern-bg-6"
                                   data-header-bg="pattern-bg-6" title="Pattern 6" href="javascript:void(0);">Pattern
                                    6</a>
                                <a class="tooltip-button set-background-style pattern-bg-7"
                                   data-header-bg="pattern-bg-7" title="Pattern 7" href="javascript:void(0);">Pattern
                                    7</a>
                                <a class="tooltip-button set-background-style pattern-bg-8"
                                   data-header-bg="pattern-bg-8" title="Pattern 8" href="javascript:void(0);">Pattern
                                    8</a>
                                <a class="tooltip-button set-background-style pattern-bg-9"
                                   data-header-bg="pattern-bg-9" title="Pattern 9" href="javascript:void(0);">Pattern
                                    9</a>
                                <a class="tooltip-button set-background-style pattern-bg-10"
                                   data-header-bg="pattern-bg-10" title="Pattern 10" href="javascript:void(0);">Pattern
                                    10</a>

                                <div class="clear"></div>

                                <h5 class="mrg15T">Solids &amp;Images</h5>
                                <a class="tooltip-button set-background-style bg-black" data-header-bg="bg-black"
                                   title="Black" href="javascript:void(0);">Black</a>
                                <a class="tooltip-button set-background-style bg-gray mrg10R" data-header-bg="bg-gray"
                                   title="Gray" href="javascript:void(0);">Gray</a>

                                <a class="tooltip-button set-background-style full-bg-1"
                                   data-header-bg="full-bg-1 fixed-bg" title="Image 1" href="javascript:void(0);">Image
                                    1</a>
                                <a class="tooltip-button set-background-style full-bg-2"
                                   data-header-bg="full-bg-2 fixed-bg" title="Image 2" href="javascript:void(0);">Image
                                    2</a>
                                <a class="tooltip-button set-background-style full-bg-3"
                                   data-header-bg="full-bg-3 fixed-bg" title="Image 3" href="javascript:void(0);">Image
                                    3</a>
                                <a class="tooltip-button set-background-style full-bg-4"
                                   data-header-bg="full-bg-4 fixed-bg" title="Image 4" href="javascript:void(0);">Image
                                    4</a>
                                <a class="tooltip-button set-background-style full-bg-5"
                                   data-header-bg="full-bg-5 fixed-bg" title="Image 5" href="javascript:void(0);">Image
                                    5</a>
                                <a class="tooltip-button set-background-style full-bg-6"
                                   data-header-bg="full-bg-6 fixed-bg" title="Image 6" href="javascript:void(0);">Image
                                    6</a>

                            </div>
                        </div>
                        <h5 class="header">
                            Header Style
                            <a class="set-adminheader-style" data-header-bg="bg-gradient-9" title="Remove all styles"
                               href="javascript:void(0);">Clear</a>
                        </h5>
                        <div class="theme-color-wrapper clearfix">
                            <h5>Solids</h5>
                            <a class="tooltip-button set-adminheader-style bg-primary"
                               data-header-bg="bg-primary font-inverse" title="Primary" href="javascript:void(0);">Primary</a>
                            <a class="tooltip-button set-adminheader-style bg-green"
                               data-header-bg="bg-green font-inverse" title="Green" href="javascript:void(0);">Green</a>
                            <a class="tooltip-button set-adminheader-style bg-red" data-header-bg="bg-red font-inverse"
                               title="Red" href="javascript:void(0);">Red</a>
                            <a class="tooltip-button set-adminheader-style bg-blue"
                               data-header-bg="bg-blue font-inverse" title="Blue" href="javascript:void(0);">Blue</a>
                            <a class="tooltip-button set-adminheader-style bg-warning"
                               data-header-bg="bg-warning font-inverse" title="Warning" href="javascript:void(0);">Warning</a>
                            <a class="tooltip-button set-adminheader-style bg-purple"
                               data-header-bg="bg-purple font-inverse" title="Purple"
                               href="javascript:void(0);">Purple</a>
                            <a class="tooltip-button set-adminheader-style bg-black"
                               data-header-bg="bg-black font-inverse" title="Black" href="javascript:void(0);">Black</a>

                            <div class="clear"></div>

                            <h5 class="mrg15T">Gradients</h5>
                            <a class="tooltip-button set-adminheader-style bg-gradient-1"
                               data-header-bg="bg-gradient-1 font-inverse" title="Gradient 1"
                               href="javascript:void(0);">Gradient 1</a>
                            <a class="tooltip-button set-adminheader-style bg-gradient-2"
                               data-header-bg="bg-gradient-2 font-inverse" title="Gradient 2"
                               href="javascript:void(0);">Gradient 2</a>
                            <a class="tooltip-button set-adminheader-style bg-gradient-3"
                               data-header-bg="bg-gradient-3 font-inverse" title="Gradient 3"
                               href="javascript:void(0);">Gradient 3</a>
                            <a class="tooltip-button set-adminheader-style bg-gradient-4"
                               data-header-bg="bg-gradient-4 font-inverse" title="Gradient 4"
                               href="javascript:void(0);">Gradient 4</a>
                            <a class="tooltip-button set-adminheader-style bg-gradient-5"
                               data-header-bg="bg-gradient-5 font-inverse" title="Gradient 5"
                               href="javascript:void(0);">Gradient 5</a>
                            <a class="tooltip-button set-adminheader-style bg-gradient-6"
                               data-header-bg="bg-gradient-6 font-inverse" title="Gradient 6"
                               href="javascript:void(0);">Gradient 6</a>
                            <a class="tooltip-button set-adminheader-style bg-gradient-7"
                               data-header-bg="bg-gradient-7 font-inverse" title="Gradient 7"
                               href="javascript:void(0);">Gradient 7</a>
                            <a class="tooltip-button set-adminheader-style bg-gradient-8"
                               data-header-bg="bg-gradient-8 font-inverse" title="Gradient 8"
                               href="javascript:void(0);">Gradient 8</a>
                        </div>
                        <h5 class="header">
                            Sidebar Style
                            <a class="set-sidebar-style" data-header-bg="" title="Remove all styles"
                               href="javascript:void(0);">Clear</a>
                        </h5>
                        <div class="theme-color-wrapper clearfix">
                            <h5>Solids</h5>
                            <a class="tooltip-button set-sidebar-style bg-primary"
                               data-header-bg="bg-primary font-inverse" title="Primary" href="javascript:void(0);">Primary</a>
                            <a class="tooltip-button set-sidebar-style bg-green" data-header-bg="bg-green font-inverse"
                               title="Green" href="javascript:void(0);">Green</a>
                            <a class="tooltip-button set-sidebar-style bg-red" data-header-bg="bg-red font-inverse"
                               title="Red" href="javascript:void(0);">Red</a>
                            <a class="tooltip-button set-sidebar-style bg-blue" data-header-bg="bg-blue font-inverse"
                               title="Blue" href="javascript:void(0);">Blue</a>
                            <a class="tooltip-button set-sidebar-style bg-warning"
                               data-header-bg="bg-warning font-inverse" title="Warning" href="javascript:void(0);">Warning</a>
                            <a class="tooltip-button set-sidebar-style bg-purple"
                               data-header-bg="bg-purple font-inverse" title="Purple"
                               href="javascript:void(0);">Purple</a>
                            <a class="tooltip-button set-sidebar-style bg-black" data-header-bg="bg-black font-inverse"
                               title="Black" href="javascript:void(0);">Black</a>

                            <div class="clear"></div>

                            <h5 class="mrg15T">Gradients</h5>
                            <a class="tooltip-button set-sidebar-style bg-gradient-1"
                               data-header-bg="bg-gradient-1 font-inverse" title="Gradient 1"
                               href="javascript:void(0);">Gradient 1</a>
                            <a class="tooltip-button set-sidebar-style bg-gradient-2"
                               data-header-bg="bg-gradient-2 font-inverse" title="Gradient 2"
                               href="javascript:void(0);">Gradient 2</a>
                            <a class="tooltip-button set-sidebar-style bg-gradient-3"
                               data-header-bg="bg-gradient-3 font-inverse" title="Gradient 3"
                               href="javascript:void(0);">Gradient 3</a>
                            <a class="tooltip-button set-sidebar-style bg-gradient-4"
                               data-header-bg="bg-gradient-4 font-inverse" title="Gradient 4"
                               href="javascript:void(0);">Gradient 4</a>
                            <a class="tooltip-button set-sidebar-style bg-gradient-5"
                               data-header-bg="bg-gradient-5 font-inverse" title="Gradient 5"
                               href="javascript:void(0);">Gradient 5</a>
                            <a class="tooltip-button set-sidebar-style bg-gradient-6"
                               data-header-bg="bg-gradient-6 font-inverse" title="Gradient 6"
                               href="javascript:void(0);">Gradient 6</a>
                            <a class="tooltip-button set-sidebar-style bg-gradient-7"
                               data-header-bg="bg-gradient-7 font-inverse" title="Gradient 7"
                               href="javascript:void(0);">Gradient 7</a>
                            <a class="tooltip-button set-sidebar-style bg-gradient-8"
                               data-header-bg="bg-gradient-8 font-inverse" title="Gradient 8"
                               href="javascript:void(0);">Gradient 8</a>
                        </div>
                    </div>
                </div>
            </div>

            <div ng-view ng-class="pageTransition"></div>


        </div>
    </div>
</div>


<!-- WIDGETS -->

<script type="text/javascript" src="assets/bootstrap/js/bootstrap.js"></script>

<!-- Bootstrap Dropdown -->

<!-- <script type="text/javascript" src="assets/widgets/dropdown/dropdown.js"></script> -->

<!-- Bootstrap Tooltip -->

<!-- <script type="text/javascript" src="assets/widgets/tooltip/tooltip.js"></script> -->

<!-- Bootstrap Popover -->

<!-- <script type="text/javascript" src="assets/widgets/popover/popover.js"></script> -->

<!-- Bootstrap Progress Bar -->

<script type="text/javascript" src="assets/widgets/progressbar/progressbar.js"></script>

<!-- Bootstrap Buttons -->

<!-- <script type="text/javascript" src="assets/widgets/button/button.js"></script> -->

<!-- Bootstrap Collapse -->

<!-- <script type="text/javascript" src="assets/widgets/collapse/collapse.js"></script> -->

<!-- Superclick -->

<script type="text/javascript" src="assets/widgets/superclick/superclick.js"></script>

<!-- Input switch alternate -->

<script type="text/javascript" src="assets/widgets/input-switch/inputswitch-alt.js"></script>

<!-- Slim scroll -->

<script type="text/javascript" src="assets/widgets/slimscroll/slimscroll.js"></script>

<!-- Slidebars -->

<script type="text/javascript" src="assets/widgets/slidebars/slidebars.js"></script>
<script type="text/javascript" src="assets/widgets/slidebars/slidebars-demo.js"></script>

<!-- PieGage -->

<script type="text/javascript" src="assets/widgets/charts/piegage/piegage.js"></script>
<script type="text/javascript" src="assets/widgets/charts/piegage/piegage-demo.js"></script>

<!-- Screenfull -->

<script type="text/javascript" src="assets/widgets/screenfull/screenfull.js"></script>

<!-- Content box -->

<script type="text/javascript" src="assets/widgets/content-box/contentbox.js"></script>

<!-- Overlay -->

<script type="text/javascript" src="assets/widgets/overlay/overlay.js"></script>

<!-- Widgets init for demo -->

<script type="text/javascript" src="assets/js-init/widgets-init.js"></script>

<!-- Theme layout -->

<script type="text/javascript" src="assets/themes/admin/layout.js"></script>

<!-- Theme switcher -->

<script type="text/javascript" src="assets/widgets/theme-switcher/themeswitcher.js"></script>

</div>
</body>
</html>