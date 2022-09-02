<?php use App\Models\{addslot,referral}; ?>
<!DOCTYPE html>
<html data-ng-app="SUGApp" lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Design</title>
    <script type="text/javascript">
    if (top !== self)
        top.location = self.location;
    </script>
    <script type="text/javascript" src="slot/slot/cdn-3.convertexperiments.com/js/10022692-10021493.js"></script>
    <script type="text/javascript" src="slot/slot/dist/js/lib/jquery-1.7.2.minf4a1.js?v=1636996767345"></script>
    <script type="text/javascript" src="slot/slot/dist/js/lib/jquery-1.11.1.minf4a1.js?v=1636996767345"></script>
    <script type="text/javascript" src="slot/slot/dist/js/lib/ui-bootstrap-0.11.0.minf4a1.js?v=1636996767345"></script>
    <script type="text/javascript"></script>
    <script type="text/javascript" src="slot/slot/dist/js/lib/sug-globals.minf4a1.js?v=1636996767345"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="slot/css/magnific-popup-minf4a1.css?v=1636996767345">
    <link rel="stylesheet" href="slot/css/angular/magnific-ngModal.minf4a1.css?v=1636996767345">
    <link href="slot/js/lib/ngImgCrop/ng-img-cropf4a1.css?v=1636996767345" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="slot/dist/css/SUGstyleV3-responsive.minf4a1.css?v=1636996767345">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>
    @include('slot/layout.header')
    <div class="mainbody">
        <div class="spacer-sm"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="btuntr" style="text-align: right;
                  margin-bottom: 10px;">
                        <div class="half">
                            <a href="/design" class="tp-btn-register">Create a Signup</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-lg-2 col-sm-12">
                    <div id="protoolsbar" class="member-blocks--sidebar no-print">
                        <ul class="nav nav-tabs member-sidebar--menu" style="display: inline-grid;">
                            <li id="member-sidebar--menu-signupsid " class="active">
                                <a href="#a" data-toggle="tab">
                                    <div class="menu-icon">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px"
                                            width="22px" height="36px" viewBox="0 0 32 36.5"
                                            style="enable-background:new 0 0 32.3 38; margin-left:4px;"
                                            xml:space="preserve">
                                            <path class="menu-icon-fill" d="M32.1,17.8L30.3,16c-0.1-0.1-0.2-0.1-0.3-0.1c-0.1,0-0.2,0-0.3,0.1l-4.9,4.9l-1.3,1.3c-0.1,0.1-0.2,0.1-0.3,0.1
                              c-0.1,0-0.2,0-0.3-0.1l-2.2-2.2c-0.1-0.1-0.2-0.1-0.3-0.1c-0.1,0-0.2,0-0.3,0.1l-1.8,1.8c-0.1,0.1-0.1,0.2-0.1,0.3
                              c0,0.1,0,0.2,0.1,0.3l4.6,4.6c0.1,0.1,0.2,0.1,0.3,0.1c0.1,0,0.2,0,0.3-0.1l8.5-8.5c0.1-0.1,0.1-0.2,0.1-0.3
                              C32.3,17.9,32.2,17.8,32.1,17.8z M27.3,26.1V28h-10V18h7.4l2-2H15.3v14h14v-5.9L27.3,26.1z M5.3,16h8v-0.8c0-0.7,0.5-1.2,1.2-1.2
                              h12.1V4.7C26.7,4.3,26.4,4,26,4h-3.3v4c0,0.7-0.6,1.3-1.3,1.3h-16C4.6,9.3,4,8.7,4,8V4H0.7C0.3,4,0,4.3,0,4.7v32.7
                              C0,37.7,0.3,38,0.7,38H26c0.4,0,0.7-0.3,0.7-0.7V32H14.6c-0.7,0-1.2-0.5-1.2-1.2v-1.4h-8c-0.4,0-0.7-0.3-0.7-0.7v-1.3
                              c0-0.4,0.3-0.7,0.7-0.7h8V24h-8c-0.4,0-0.7-0.3-0.7-0.7V22c0-0.4,0.3-0.7,0.7-0.7h8v-2.7h-8c-0.4,0-0.7-0.3-0.7-0.7v-1.3
                              C4.7,16.3,5,16,5.3,16z M20,2.7h-2.6V1.4C17.3,0.7,16.7,0,16,0h-5.3C9.9,0,9.3,0.7,9.3,1.4v1.2H6.7C6,2.7,5.3,3.3,5.3,4v2.6
                              C5.3,7.4,6,8,6.7,8H20c0.7,0,1.4-0.6,1.4-1.3V4C21.3,3.3,20.7,2.7,20,2.7z"></path>
                                        </svg>
                                </a>
                            </li>
                            <li id="member-sidebar--menu-groupsid"><a href="#b" data-toggle="tab">
                                    <div class="menu-icon">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px"
                                            width="30px" height="38px" viewBox="0 0 40 28"
                                            style="enable-background:new 0 0 42 31;" xml:space="preserve">
                                            <path class="menu-icon-fill" d="M11.4,12.5c0.5,0,1-0.1,1.5-0.2c0-0.1,0-0.2,0-0.3c0-3.2,1.9-5.9,4.6-7.3C16.7,2,14.3,0,11.4,0
                  C7.9,0,5.2,2.8,5.2,6.2S7.9,12.5,11.4,12.5z M9.3,25.2c1.7-3.1,4.1-5.3,7.1-6.5c-0.4-0.3-0.8-0.6-1.2-1c-1-1-1.7-2.3-2.1-3.7c-0.4-0.1-0.9-0.1-1.4-0.1
                  c-0.9,0-1.8,0.1-2.2,0.3l-0.1,0c-4.3,1.1-7.2,3.8-9,8.6c-0.5,1.3-0.4,1.8-0.3,2c0.2,0.3,0.9,0.5,2,0.5C4.5,25.2,6.9,25.2,9.3,25.2z M41.9,24.7c0.2-0.4,0.1-1.2-0.4-2.5c-1.7-4.3-4.5-7-8.8-8.1c-0.5-0.1-1.1-0.2-1.8-0.2c-0.7,0-1.5,0.1-2,0.2
                  c-0.5,1.9-1.7,3.5-3.3,4.6c3.1,1.3,5.4,3.5,7,6.5c2.4,0,4.7,0,6.9,0C40.9,25.2,41.6,25.1,41.9,24.7z M26.8,6.3c1.5,1.6,2.4,3.6,2.4,5.8c0,0.1,0,0.2,0,0.3c0.5,0.1,0.9,0.2,1.4,0.2c3.4,0,6.2-2.8,6.2-6.2
                  S34.1,0,30.6,0c-2.9,0-5.3,2-6,4.7C25.4,5.1,26.2,5.6,26.8,6.3z M21.1,5.8C21.1,5.8,21,5.8,21.1,5.8c-3.5,0-6.3,2.8-6.3,6.2c0,3.4,2.8,6.3,6.2,6.3c0,0,0,0,0,0
                  c3.4,0,6.2-2.8,6.2-6.2C27.3,8.6,24.5,5.8,21.1,5.8z M23.1,19.9c-0.5-0.1-1.1-0.2-1.8-0.2c0,0,0,0-0.1,0c-0.9,0-1.7,0.1-2.2,0.3L19,20c-4.3,1-7.2,3.7-9,8.5
                  c-0.5,1.3-0.4,1.8-0.3,2c0.2,0.3,0.9,0.5,2,0.5c2.6,0,5.1,0,7.7,0c3.6,0,7.2,0,10.5,0c0,0,0,0,0.1,0c1.3,0,2.1-0.2,2.3-0.5
                  c0.2-0.4,0.1-1.2-0.4-2.5C30.2,23.7,27.3,21.1,23.1,19.9z"></path>
                                        </svg>
                                    </div>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-10 col-lg-10 col-sm-12">
                    <div class="tabs-left">
                        <div class="tab-content">
                            <div class="tab-pane active" id="a">
                                <div id="memPgCenter" class="member-blocks--maincontent-wide">
                                    <script type="text/javascript" src="slot/js/directives/tb-size.js"></script>
                                    <script type="text/javascript" src="slot/ckeditor4/ckeditor.js"></script>
                                    <script
                                        src="slot/js/lib/angular/angular-minicolors/jquery.minicolors.js?v=1497896519"
                                        type="text/javascript"></script>
                                    <script
                                        src="slot/js/lib/angular/angular-minicolors/angular-minicolors.js?v=1497896519"
                                        type="text/javascript" language="Javascript"></script>
                                    <div id="wizardView" data-ng-view="" class="ng-scope">
                                        <style class="ng-binding ng-scope">
                                        .slide-down-panel {
                                            top: -144px !important;
                                            height: auto !important;
                                        }

                                        .modal-small.smaller-width.location-selection-modal {
                                            width: 450px;
                                        }
                                        </style>
                                        <div id="signupWizardContainer" class=" row ng-scope">
                                            <div class="col-xs-12">
                                                <h1 class="hrow wizard-heading ng-binding">
                                                    Create a Sign Up
                                                </h1>
                                            </div>
                                            <div class="col-xs-12" data-ng-show="w0.initialized">
                                                <div class="btn-tabs">
                                                    <button class="btn btn-tab ng-binding active"
                                                        data-ng-class="{'active': w0.activestep==1}"
                                                        data-ng-click="w0.setActive(1)"
                                                        data-ng-bind="w0.tablabels.step1">Design</button>
                                                    <button class="btn btn-tab ng-binding disabled"
                                                        data-ng-class="{'active': w0.activestep==1,}"
                                                        data-ng-click="w0.setActive(2)"
                                                        data-ng-bind="w0.tablabels.step2">Slots</button>
                                                    <button class="btn btn-tab ng-binding disabled"
                                                        data-ng-class="{'active': w0.activestep==3, 'disabled': !w0.availablesteps.step3}"
                                                        data-ng-click="w0.setActive(3)"
                                                        data-ng-bind="w0.tablabels.step3">Settings</button>
                                                    <button class="btn btn-tab ng-binding disabled"
                                                        data-ng-class="{'active': w0.activestep==4, 'disabled': !w0.availablesteps.step4}"
                                                        data-ng-click="w0.setActive(4)"
                                                        data-ng-bind="w0.tablabels.step4">Publish</button>
                                                </div>
                                            </div>
                                            <div id="wizardStepContainer" class="col-xs-12"
                                                data-ng-show="w0.initialized">
                                                <div data-ng-include="w0.activetemplate" class="ng-scope">
                                                    <link rel="stylesheet"
                                                        href="slot/js/lib/jstree/themes/default/style.min.css?v=1"
                                                        class="ng-scope">
                                                    <link rel="stylesheet"
                                                        href="slot/js/lib/ng-jcrop/jcrop/css/jquery.jcrop.min.css?v=1"
                                                        class="ng-scope">
                                                    <link rel="stylesheet"
                                                        href="slot/js/lib/angular/angular-minicolors/jquery.minicolors-builder.css?v=1"
                                                        class="ng-scope">
                                                    <script src="slot/js/lib/color-thief/color-thief.js?v=1"
                                                        type="text/javascript" language="Javascript" class="ng-scope">
                                                    </script>
                                                    <script src="slot/js/lib/html2canvas/html2canvas100.js?v=1"
                                                        type="text/javascript" language="Javascript" class="ng-scope">
                                                    </script>
                                                    <div id="wizardStep1" class="l-wizard-step-1 ng-scope">
                                                        <div id="myModal9" class="modal">
                                                            <!-- Modal content -->
                                                            <div id="modal-content" class="modal-content animation-1">
                                                                <!-- Modal header -->
                                                                <header class="modal-header">
                                                                    <p class="modal-header-title">
                                                                        Create New Group
                                                                    </p>
                                                                    <button id="close9" class="modal-header-icon">
                                                                        <span class="icon">
                                                                            <i class="bx bx-x"></i>
                                                                        </span>
                                                                    </button>
                                                                </header>
                                                                <!-- Modal body -->
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">Group
                                                                            Name</label>
                                                                        <form method="post" action="/group-submit">
                                                                            @csrf
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control"
                                                                                    name="group">
                                                                            </div>
                                                                            <div class="form-group"
                                                                                style="float: right;">
                                                                                <button type="submit"
                                                                                    formaction="/group-submit"
                                                                                    class="btn btn-primary float-right btn-submit">Submit</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-horizontal">
                                                            <form action="/submit-design" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="form-group feedback-group">
                                                                    <label for="signuptitle"
                                                                        class="col-xs-2 control-label text-left">Event Name</label>
                                                                    <div class="col-xs-5">
                                                                        <input autocomplete="off" name="title"
                                                                            type="text" class="form-control "
                                                                            maxlength="255" placeholder="" required="">
                                                                    </div>
                                                                </div>
                                                        </div>
                                                       
                                                        <div class="form-horizontal">
                                                            <div class="form-group feedback-group">
                                                             <div class="col-md-2 col-lg-2 col-sm-12">
                                                              <label>Event Description</label>
                                                               </div>
                                                               <div class="col-md-5 col-lg-5 col-sm-12">
                                                             <textarea class="form-control rounded-0" name="group" id="exampleFormControlTextarea1" rows="3" require></textarea>
                                                             </div>
                                                           
                                                               
                                                              </div>
                                                               </div>

                                                               <div class="form-group feedback-group">
                                                               <div class="col-md-2 col-lg-2 col-sm-12">
                                                               <label for="exampleFormControlFile1">Images</label>
                                                               </div>
                                                               <div class="col-md-5 col-lg-5 col-sm-12">
                                                               <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1" require>
                                                             </div>
                                                               </div>
                                                               <div class="form-group feedback-group">
                                                               <div class="col-md-2 col-lg-2 col-sm-12">
                                                               <label for="exampleFormControlFile1">Organizer Name</label>
                                                               </div>
                                                               <div class="col-md-5 col-lg-5 col-sm-12">
                                                               <input type="text" name="category" class="form-control" placeholder="Name" require>
                                                             </div>
                                                               </div>
                                                               <div class="form-group feedback-group">
                                                               <div class="col-md-2 col-lg-2 col-sm-12">
                                                               <label for="exampleFormControlFile1">Organizer Phone</label>
                                                               </div>
                                                               <div class="col-md-5 col-lg-5 col-sm-12">
                                                               <input type="phone" name="cause" class="form-control" placeholder="Phone" require>
                                                             </div>
                                                               </div>
                                                                
                                            <div class="spacer"></div>
                                            <!-- <div data-ng-show="w1.showSlideout" outside-click="w1.showSlideout=false"
                                                click-watcher="w1.showSlideout" class="ng-hide">
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="c-genius-tips" genius-tips-container="">
                                    <!-- <div data-ng-show="displayGeniusTips"
                                        class="c-genius-tips--tip-container is-open ng-hide"
                                        data-ng-class="{'is-expanded':displayLearnMore}" style="bottom: 654.578px;">
                                    </div> -->
                                    <div class="c-genius-tips--tip-anchor"></div>
                                </div>
                            </div>
                            <div class="spacer ng-hide" data-ng-show="w0.activestep !== 1"></div>
                            <div class="col-xs-10">
                                <button type="submit" class="tp-btn-register">Save and
                                    Continue</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <div class="tab-pane" id="b">
                    <?php use App\Models\adddate; ?>
                    <?php $adddate = adddate::adddate(); ?>
                <div class="member-blocks--maincontent-narrow">
                                    <div>
                                        <style class="ng-binding">
                                        .col-signup-width {
                                            width: calc(100% - 190px);
                                        }
                                        </style>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="row">
                                                            <ol class="breadcrumb ng-isolate-scope"
                                                                sug-breadcrumb="breadcrumbs">
                                                                <li data-ng-repeat="crumb in sugBreadcrumb"
                                                                    data-ng-class="{active: crumb.active}"
                                                                    class="ng-scope">
                                                                    <a data-ng-if="crumb.href !== ''"
                                                                        href="/myaccount"
                                                                        class="ng-binding ng-scope">My Accounts</a>
                                                                </li>
                                                                <li data-ng-repeat="crumb in sugBreadcrumb"
                                                                    data-ng-class="{active: crumb.active}"
                                                                    class="ng-scope active">
                                                                    <span data-ng-if="crumb.href === ''"
                                                                        class="ng-binding ng-scope">Manage</span>
                                                                </li>
                                                            </ol>
                                                        </div>
                                                        <h1 class="hrow ng-binding">My Signups <a href=""
                                                                data-ng-click="showHelp()"
                                                                data-ng-show="str.helpTitle.length || str.helpBody.length"
                                                                popover="Help" popover-placement="top"
                                                                popover-trigger="mouseenter" popover-popup-delay="300"
                                                                class="ng-scope ng-hide"><span
                                                                    class="glyphicon glyphicon-question-sign helpme"></span></a>
                                                        </h1>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div data-ng-view="" class="ng-scope">
                                                            <div class="row ng-scope">
                                                                <div class="col-xs-12">
                                                                    <div class="row gridHeading">

                                                                        <div class="col-xs-4">
                                                                            <div class="gridHeadingElement">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-3">
                                                                            <div class="gridHeadingElement">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <table
                                                                                class="table table-hover table-striped sTable">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th
                                                                                            class="tcell no-wrap width-50">
                                                                                            <strong
                                                                                                class="ng-binding">Group
                                                                                                Name
                                                                                                <span></span></strong>
                                                                                        </th>
                                                                                        <th
                                                                                            class="tcell no-wrap centered">
                                                                                            <strong
                                                                                                class="ng-binding">Date
                                                                                            </strong>
                                                                                        </th>
                                                                                        <th
                                                                                            class="tcell no-wrap centered">
                                                                                            <strong
                                                                                                class="ng-binding">Time
                                                                                            </strong>
                                                                                        </th>
                                                                                        <th
                                                                                            class="tcell no-wrap centered">
                                                                                            <strong
                                                                                                class="ng-binding">Members
                                                                                            </strong>
                                                                                        </th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody
                                                                                    data-ng-if="myGroupsFiltered.length > 0"
                                                                                    class="ng-scope">
                                                                                    @foreach($adddate as $adddates)
                                                                                    <?php $explode_id = explode(',', $adddates['addslot_id']);?>
                                                                                    @foreach($explode_id as $id)
                                                                                    <?php $addslot = addslot::where('id', $id)->first(); 
                                                                                $count = referral::where('addslot_id', $addslot['id'])->where('adddate_id', $adddates['id'])->count();
                                                                          ?>
                                                                                    <tr class="ng-scope">

                                                                                        <td
                                                                                            class="tcell tfirst enforce-wrap ng-binding">
                                                                                            {{$addslot['tslot']}}
                                                                                        </td>

                                                                                        <td
                                                                                            class="tcell tfirst enforce-wrap ng-binding">
                                                                                            {{date('m.d.Y',strtotime($adddates['date']))}}
                                                                                        </td>
                                                                                        <td
                                                                                            class="tcell tfirst enforce-wrap ng-binding">
                                                                                            {{date('h:i A',strtotime($adddates['time1']))}}-{{date('h:i A',strtotime($adddates['time2']))}}
                                                                                        </td>
                                                                                        <td class="tcell icon">
                                                                                            <div class="icon-badged ng-scope"
                                                                                                popover="There are 3 members in this group"
                                                                                                popover-placement="top"
                                                                                                popover-trigger="mouseenter"
                                                                                                popover-popup-delay="300">
                                                                                                <span
                                                                                                    class="glyphicon glyphicon-user table-icon mono no-hover"
                                                                                                    alt="There are 3 members in this group"></span><span
                                                                                                    class="badge ng-binding">{{$count}}</span>
                                                                                            </div>

                                                                                        </td>
                                                                                        </td>
                                                                                        <td class="tcell icon">
                                                                                            <a href="/edit-group/{{$addslot['id']}}/{{$adddates['id']}}"
                                                                                                popover="Edit This Group"
                                                                                                popover-placement="top"
                                                                                                popover-trigger="mouseenter"
                                                                                                popover-popup-delay="300"
                                                                                                class="ng-scope">
                                                                                                <span
                                                                                                    class="glyphicon glyphicon-pencil table-icon mono"
                                                                                                    alt="Add/remove/edit members of this group"></span>
                                                                                            </a>

                                                                                        </td>
                                                                                        <td class="tcell icon">
                                                                                            <div class="icon-badged ng-scope"
                                                                                                popover="There is 1 sign up using this group"
                                                                                                popover-placement="top"
                                                                                                popover-trigger="mouseenter"
                                                                                                popover-popup-delay="300">

                                                                                                <a
                                                                                                    href="{{$adddates['url']}}"><i
                                                                                                        class="fas fa-share"></i></a>
                                                                                            </div>
                                                                                        </td>

                                                                                    </tr>
                                                                                    @endforeach
                                                                                    @endforeach
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <noscript>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <h1>Disabled JavaScript</h1>
                                                <br />
                                                <p>JavaScript is currently disabled on your browser. Our application
                                                    requires
                                                    JavaScript to properly function.
                                                </p>
                                                <p>Here are instructions on how you can enable JavaScript on your
                                                    browser.</p>
                                                <h3>Chrome:</h3>
                                                <ul>
                                                    <li>On the upper right-hand corner of the browser, click on the
                                                        "<b>Customize and control Google Chrome</b>" (three vertical
                                                        line,
                                                        a.k.a. 'humberger menu') and select "<b>Settings</b>".
                                                    </li>
                                                    <li>In the "<b>Settings</b>" page, locate and click on the "<b>Show
                                                            advanced
                                                            settings...</b>" link (typically at the very bottom of the
                                                        page).
                                                    </li>
                                                    <li>The advance settings are shown. Under the the "<b>Privacy</b>"
                                                        section,
                                                        locate and click on the "<b>Content settings...</b>" button.
                                                    </li>
                                                    <li>The Content Settings dialog window opens. Under the
                                                        "<b>JavaScript</b>"
                                                        section, select "<b>Allow all sites to run JavaScript
                                                            (recommended)</b>".
                                                    <li>Click on the "Done" button to save the settings and close the
                                                        dialog
                                                        window.
                                                    <li>You may close the "Settings" tab and reload the SignUpGenius
                                                        application.
                                                    </li>
                                                </ul>
                                                <h3>FireFox:</h3>
                                                <ul>
                                                    <li>Open a new tab and in the address bar, enter the following:
                                                        <b>about:config</b> and press Enter.
                                                    </li>
                                                    <li>If a warning message is displayed "This might void your
                                                        warranty!",
                                                        click "<b>I'll be careful, I promise!</b>" button.
                                                    </li>
                                                    <li>This will take you to the browser configuration menu. In the
                                                        Search
                                                        input, type <b>javascript.enabled</b>.
                                                    </li>
                                                    <li>Select the line record at exactly match
                                                        "<b>javascript.enabled</b>" -
                                                        under the "Value" column, it should be "<b>false</b>".
                                                        Double-click the
                                                        selected row to toggle and enable JavaScript. Verify that the
                                                        Value
                                                        should now be set to "<b>true</b>".
                                                    </li>
                                                    <li>You may close the configuration tab and reload the SignUpGenius
                                                        application.
                                                    </li>
                                                </ul>
                                                <h3>Internet Explorer (IE):</h3>
                                                <ul>
                                                    <li>Open a new tab and on the upper right-hand corner of the
                                                        browser, click
                                                        "<b>Tools</b>" icon (cog or a rotary icon) and select
                                                        "<b>Internet
                                                            Options</b>".
                                                    <li>The Internet Options dialog window will be displayed.
                                                        Under the "<b>Internet Options</b>" window select the
                                                        "<b>Security</b>"
                                                        tab.
                                                    </li>
                                                    <li>Within the "<b>Security</b>" locate and click the "<b>Custom
                                                            level...</b>" button.
                                                    </li>
                                                    <li>Another dialog window will be displayed. Within the "<b>Security
                                                            Settings - Internet Zone</b>" window, look for the
                                                        "<b>Scripting</b>" section (should be towards the bottom).
                                                    </li>
                                                    <li>Under the "<b>Scripting</b>" section, locate "<b>Active
                                                            Scripting</b>"
                                                        item then select "<b>Enable</b>".
                                                    </li>
                                                    <li>If a "<b>Warning!</b>" window pops up, select "Yes". Click "OK"
                                                        to save
                                                        and close the dialog windows.
                                                    </li>
                                                    <li>You may then reload the SignUpGenius application.</li>
                                                </ul>
                                                <h3>Safari:</h3>
                                                <ul>
                                                    <li>In the Safari menu, click on the "<b>Safari</b>" and select
                                                        "<b>Preferences</b>".
                                                    </li>
                                                    <li>The "<b>Preferences</b>" window is displayed. Locate and select
                                                        "<b>Security</b>" tab.
                                                    </li>
                                                    <li>Under the "<b>Security</b>" tab, locate the "<b>Web content</b>"
                                                        section
                                                        and check the "<b>Enable JavaScript</b>" option.
                                                    </li>
                                                    <li>Close the "<b>Preferences</b>" window, and reload the
                                                        SignUpGenius
                                                        application.
                                                    </li>
                                                </ul>
                                                <h3>If you are not using any of the above browsers:</h3>
                                                <ul>
                                                    <li><a href="/help" target="_blank">Contact</a> our support team,
                                                        we'll be
                                                        glad to help you!
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </noscript>
                                </div>
                </div>
                <div class="tab-pane" id="c" style="height: 396px;">
                    <div id="memPgCenter" class="member-blocks--maincontent-narrow">
                        <link rel="stylesheet" href="slot/js/lib/jstree/themes/default/style.min.css">
                        <div data-ng-controller="mainMessageCenter" class="ng-scope">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1>Messages</h1>
                                    <ul class="nav nav-tabs tab tabbf" role="tablist">
                                        <li class="tablinks active" onclick="openCity(event, 'London')">
                                            <a href="#/"><span class="glyphicon glyphicon-dashboard"></span>
                                                Dashboard</a>
                                        </li>
                                        <li data-ng-hide="unsupportedBrowser" class="tablinks"
                                            onclick="openCity(event, 'Paris')">
                                            <a href="#/compose"><span class="glyphicon glyphicon-send"></span>
                                                Compose</a>
                                        </li>
                                        <li data-ng-hide="unsupportedBrowser" class="tablinks"
                                            onclick="openCity(event, 'Tokyo')">
                                            <a href="#/drafts"><span class="glyphicon glyphicon-file"></span> Drafts
                                                &amp; Templates</a>
                                        </li>
                                        <li data-ng-hide="unsupportedBrowser" data-ng-if="showSent"
                                            class="tablinks ng-scope" onclick="openCity(event, 'Tokyo1')">
                                            <a href="#/sent"><span class="glyphicon glyphicon-envelope"></span>
                                                Sent</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="London" class="tabcontent" style="display:block;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div data-ng-view="" class="ng-scope">
                                            <style class="ng-scope">
                                            .progress-bar {
                                                text-align: left !important;
                                            }
                                            </style>
                                            <div class="row ng-scope">
                                                <div class="col-xs-12">
                                                    <h2 class="fade-in ng-binding">Account Overview: December</h2>
                                                </div>
                                            </div>
                                            <div class="row ng-scope" data-ng-if="!ajaxCalls.getMemberEmailLimits">
                                                <div class="col-xs-5">
                                                    <p><strong>Plan:</strong></p>
                                                    <div class="progress ng-isolate-scope" max="memberLimits.dailyLimit"
                                                        value="memberLimits.sentToday" type="success">
                                                        <div class="progress-bar progress-bar-success"
                                                            ng-class="type &amp;&amp; 'progress-bar-' + type"
                                                            role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                                            aria-valuemax="1000"
                                                            ng-style="{width: (percent < 100 ? percent : 100) + '%'}"
                                                            aria-valuetext="0%" aria-labelledby="progressbar"
                                                            style="min-width: 0px; width: 0%;" ng-transclude="">
                                                            <span
                                                                style="color:black; white-space:nowrap;padding-left:5px;"
                                                                class="ng-binding ng-scope">0 / 1,000 email messages
                                                                used today</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress ng-isolate-scope"
                                                        max="memberLimits.monthlyLimit"
                                                        value="memberLimits.sentForTheMonth" type="success">
                                                        <div class="progress-bar progress-bar-success"
                                                            ng-class="type &amp;&amp; 'progress-bar-' + type"
                                                            role="progressbar" aria-valuenow="3" aria-valuemin="0"
                                                            aria-valuemax="1000"
                                                            ng-style="{width: (percent < 100 ? percent : 100) + '%'}"
                                                            aria-valuetext="0%" aria-labelledby="progressbar"
                                                            style="min-width: 0px; width: 0.3%;" ng-transclude="">
                                                            <span
                                                                style="color:black; white-space:nowrap;padding-left:5px;"
                                                                class="ng-binding ng-scope">3 / 1,000 email messages
                                                                used this month </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-7" data-ng-show="showChart">
                                                    <div class="row">
                                                        <div class="col-xs-5">
                                                            <ul class="nav nav-pills nav-stacked">
                                                                <li ng-repeat="record in deliveryStats"
                                                                    class="ng-binding ng-scope">
                                                                    <span class="badge black pull-right">3</span>
                                                                    Total Sent
                                                                </li>
                                                                <li ng-repeat="record in deliveryStats"
                                                                    class="ng-binding ng-scope">
                                                                    <span class="badge green pull-right">3</span>
                                                                    Delivered
                                                                </li>
                                                                <li ng-repeat="record in deliveryStats"
                                                                    class="ng-binding ng-scope">
                                                                    <span class="badge yellow pull-right">0</span>
                                                                    Bounced
                                                                </li>
                                                                <li ng-repeat="record in deliveryStats"
                                                                    class="ng-binding ng-scope">
                                                                    <span class="badge orange pull-right">0</span>
                                                                    Dropped
                                                                </li>
                                                                <li ng-repeat="record in deliveryStats"
                                                                    class="ng-binding ng-scope">
                                                                    <span class="badge red pull-right">0</span>
                                                                    Spam
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-xs-7">
                                                            <div google-chart="" chart="chartMonthDeliveryStats"
                                                                class="mGraph ng-isolate-scope"
                                                                style="margin-top:-40px;">
                                                                <div style="position: relative;">
                                                                    <div dir="ltr"
                                                                        style="position: relative; width: 222px; height: 200px;">
                                                                        <div aria-label="A chart."
                                                                            style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                                                                            <svg width="222" height="200"
                                                                                aria-label="A chart."
                                                                                style="overflow: hidden;">
                                                                                <defs id="_ABSTRACT_RENDERER_ID_1">
                                                                                </defs>
                                                                                <rect x="0" y="0" width="222"
                                                                                    height="200" stroke="none"
                                                                                    stroke-width="0" fill="#ffffff">
                                                                                </rect>
                                                                                <g>
                                                                                    <path
                                                                                        d="M186,92.5L186,107.5A75,60,0,0,1,36,107.50000000000001L36,92.5A75,60,0,0,0,186,92.5"
                                                                                        stroke="#819027"
                                                                                        stroke-width="1" fill="#819027">
                                                                                    </path>
                                                                                    <ellipse cx="111" cy="92.5" rx="75"
                                                                                        ry="60" stroke="#acc034"
                                                                                        stroke-width="1" fill="#acc034">
                                                                                    </ellipse>
                                                                                    <text text-anchor="start" x="99.5"
                                                                                        y="95.65" font-family="Arial"
                                                                                        font-size="9" stroke="none"
                                                                                        stroke-width="0"
                                                                                        fill="#ffffff">100%</text>
                                                                                </g>
                                                                                <g></g>
                                                                            </svg>
                                                                            <div aria-label="A tabular representation of the data in the chart."
                                                                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                                                                <table>
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Name</th>
                                                                                            <th>Value</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>Delivered</td>
                                                                                            <td>3</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Bounced</td>
                                                                                            <td>0</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Dropped</td>
                                                                                            <td>0</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Spam</td>
                                                                                            <td>0</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div aria-hidden="true"
                                                                        style="display: none; position: absolute; top: 210px; left: 232px; white-space: nowrap; font-family: Arial; font-size: 9px;">
                                                                        100%
                                                                    </div>
                                                                    <div></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ng-scope" data-ng-show="showEmails">
                                                <div class="col-sm-12">
                                                    <h2 class="hrow fade-in">Recently Sent</h2>
                                                    <table class="table table-hover sTable align-top">
                                                        <thead>
                                                            <tr>
                                                                <th class="tcell date"
                                                                    data-ng-click="emailSortBy = 'datesent';emailSortReverse = !emailSortReverse"
                                                                    ng-class="{hOver: hover}" ng-mouseenter="hover=true"
                                                                    ng-mouseleave="hover=false" nowrap="">
                                                                    <a href=""><strong>Date Sent</strong> <span
                                                                            data-ng-show="emailSortBy === 'datesent'"
                                                                            data-ng-class="{'glyphicon glyphicon-chevron-down':!emailSortReverse,'glyphicon glyphicon-chevron-up':emailSortReverse}"
                                                                            class="glyphicon glyphicon-chevron-up"></span></a>
                                                                </th>
                                                                <th width="40%"
                                                                    data-ng-click="emailSortBy = 'subject';emailSortReverse = !emailSortReverse"
                                                                    ng-class="{hOver: hover}" ng-mouseenter="hover=true"
                                                                    ng-mouseleave="hover=false">
                                                                    <a href=""><strong>Subject</strong>
                                                                        <span data-ng-show="emailSortBy === 'subject'"
                                                                            data-ng-class="{'glyphicon glyphicon-chevron-down':!emailSortReverse,'glyphicon glyphicon-chevron-up':emailSortReverse}"
                                                                            class="ng-hide glyphicon glyphicon-chevron-up"></span></a>
                                                                </th>
                                                                <th data-ng-click="emailSortBy = 'sentto';emailSortReverse = !emailSortReverse"
                                                                    ng-class="{hOver: hover}" ng-mouseenter="hover=true"
                                                                    ng-mouseleave="hover=false">
                                                                    <a href=""><strong>Sent To</strong>
                                                                        <span data-ng-show="emailSortBy === 'sentto'"
                                                                            data-ng-class="{'glyphicon glyphicon-chevron-down':!emailSortReverse,'glyphicon glyphicon-chevron-up':emailSortReverse}"
                                                                            class="ng-hide glyphicon glyphicon-chevron-up"></span></a>
                                                                </th>
                                                                <th class="tcell icon"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr ng-repeat="message in SentMessages | orderBy:emailSortBy:emailSortReverse"
                                                                class="ng-scope">
                                                                <td class="ng-binding">2021-12-09 1:04pm</td>
                                                                <td><span data-ng-bind-html="message.subject"
                                                                        class="ng-binding">vb Invite</span></td>
                                                                <td class="ng-binding">Select Members</td>
                                                                <td class="tcell icon" ng-click="">
                                                                    <a href="#/sent/345006279" popover="Message Details"
                                                                        popover-placement="top"
                                                                        popover-trigger="mouseenter"
                                                                        popover-popup-delay="300"><span
                                                                            class="glyphicon glyphicon-stats table-icon mono"></span></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <td colspan="4">
                                                                    <a href="#/sent"
                                                                        class="btn btn-default btn-sm pull-right">View
                                                                        More</a>
                                                                </td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row ng-scope ng-hide" data-ng-show="showReminders">
                                                <div class="col-sm-12">
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <h2 class="hrow fade-in">Upcoming Reminders</h2>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div
                                                                class="input-group input-group-sm table-heading--element">
                                                                <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-search"></span>
                                                                </span>
                                                                <input type="text"
                                                                    class="form-control ng-pristine ng-untouched ng-valid"
                                                                    name="filter" data-ng-model="filter"
                                                                    placeholder="Search">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ng-scope">
                                                <div class="col-sm-12">
                                                    <span class="verysmalltext text-muted"
                                                        data-ng-show="!showReport &amp;&amp; SentMessages.length">
                                                        <span data-ng-if="dateFormatString != ''"
                                                            class="ng-binding ng-scope">NOTE: Dates are in
                                                            yyyy-mm-dd.
                                                            <span data-ng-if="tzShort != ''"
                                                                class="ng-binding ng-scope">Times
                                                                are shown in
                                                                IST.
                                                                To modify, update your <a href="#">settings</a>.</span>
                                                        </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Paris" class="tabcontent" style="display: none;">
                                <div data-ng-if="initialized &amp;&amp; signUpList.length" class="ng-scope">
                                    <form name="composeform" class="form-horizontal ng-pristine ng-valid ng-submitted"
                                        role="form">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12">
                                                <span class="h2 fade-in ng-binding"
                                                    data-ng-bind-html="composeHeaderLabel">Compose Message
                                                </span>
                                                <sup>
                                                    <span class="text-orange pointer ng-scope" data-ng-if="!complete"
                                                        data-ng-click="showHelp()">
                                                        <span class="glyphicon glyphicon-question-sign helpme"
                                                            uib-popover="Click to learn more about composing messages."
                                                            popover-placement="top" popover-trigger="mouseenter"
                                                            popover-popup-delay="300" popover-enable="true"></span>
                                                    </span>
                                                </sup>
                                                <span class="spacer-sm"></span>
                                                <p data-ng-if="messagetype" class="ng-scope">
                                                    Select the type of message you would like to compose
                                                </p>
                                            </div>
                                        </div>
                                        <span data-ng-if="initialized" class="ng-scope">
                                            <div data-ng-if="messagetype" class="ng-scope">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="btn-underlines">
                                                            <button class="btn btn-underline active"
                                                                data-ng-class="{active: showType == 'email'}"
                                                                data-ng-click="setShowType('email')">
                                                                Email
                                                            </button>
                                                            <button data-ng-if="!specificSignup"
                                                                class="btn btn-underline ng-scope"
                                                                data-ng-class="{active: showType == 'template'}"
                                                                data-ng-click="setShowTypeHandler('template')">
                                                                Email Template <img
                                                                    src="slot/images/messageCenter/pro.png" width="24">
                                                            </button>
                                                            <button data-ng-if="!specificSignup"
                                                                class="btn btn-underline ng-scope"
                                                                data-ng-class="{active: showType == 'text'}"
                                                                data-ng-click="setShowTypeHandler('text')">
                                                                Text Message <img
                                                                    src="slot/images/messageCenter/pro.png" width="24">
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-horizontal">
                                                    <div class="row ng-scope" data-ng-if="showType == 'email'">
                                                        <div class="col-xs-12">
                                                            <input type="radio" name="emailType" id="invite"
                                                                data-ng-model="objForm.emailType" value="4"
                                                                class="css-radio ng-pristine ng-untouched ng-valid"
                                                                data-ng-change="typeChange()">
                                                            <label for="invite" class="radio-css-label">Invite people to
                                                                a sign
                                                                up</label>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <input type="radio" name="emailType" id="bulk"
                                                                data-ng-model="objForm.emailType" value="1"
                                                                class="css-radio ng-pristine ng-untouched ng-valid"
                                                                data-ng-change="typeChange()">
                                                            <label for="bulk" class="radio-css-label">Email people
                                                                participating
                                                                in a sign
                                                                up</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="spacer spacer-small"></span>
                                        </span>
                                    </form>
                                </div>
                                <p></p>
                            </div>
                            <div id="Tokyo" class="tabcontent" style="display: none;">
                                <div class="ng-scope">
                                    <div class="row ng-hide" data-ng-show="message.length">
                                        <div class="col-lg-12">
                                            <span data-ng-class="messageClass" class="success">
                                                <center class="ng-binding"></center>
                                            </span>
                                        </div>
                                        <br>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-8">
                                            <h2 class="hrow fade-in">Draft Messages &amp; Templates</h2>
                                        </div>
                                        <div class="col-xs-3">
                                            <span class="form-inline ">
                                                <div class="form-group">
                                                    <div class="input-group input-group-sm table-heading--element">
                                                        <div class="input-group-addon"><span
                                                                class="glyphicon glyphicon-search"></span></div>
                                                        <input type="text"
                                                            class="form-control ng-pristine ng-untouched ng-valid"
                                                            id="filterText" placeholder="Search"
                                                            data-ng-model="filters.search">
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
                                        <div class="col-xs-1">
                                            <span class="pull-right table-heading--element">
                                                <a class="dropdown-toggle tool-icon-link" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="true" popover="Settings"
                                                    popover-placement="top" popover-trigger="mouseenter"
                                                    popover-popup-delay="300">
                                                    <span class="glyphicon glyphicon-cog tool-icon mono"></span>
                                                </a>
                                                <ul class="dropdown-menu settingsOption" id="settingsDropdown"
                                                    data-ng-click="dropDownClickEvent($event)">
                                                    <li>
                                                        <h2>Display Options:</h2>
                                                    </li>
                                                    <li>
                                                        <div class="form-horizontal">
                                                            <div class="form-group">
                                                                <label for="messagetypes"
                                                                    class="col-xs-6 text-left control-label">Message
                                                                    Type</label>
                                                                <div class="col-xs-6">
                                                                    <select id="messagetypes"
                                                                        class="form-control ng-pristine ng-untouched ng-valid"
                                                                        data-ng-model="filters.messagetype">
                                                                        <option value="" selected="selected">All
                                                                        </option>
                                                                        <option value="Bulk" selected="">Bulk</option>
                                                                        <option value="Invite" selected="">Invite
                                                                        </option>
                                                                        <option value="Custom Confirmation" selected="">
                                                                            Custom
                                                                            Confirmations
                                                                        </option>
                                                                        <option value="Custom Reminder" selected="">
                                                                            Custom
                                                                            Reminders
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-horizontal">
                                                            <div class="form-group">
                                                                <label class="col-xs-6 text-left control-label"
                                                                    for="signUpPerPageId">Items/Page</label>
                                                                <div class="col-xs-6">
                                                                    <input type="number" name="signUpPerPageId"
                                                                        id="signUpPerPageId"
                                                                        data-ng-model="dp.itemsperpage"
                                                                        class="form-control ng-pristine ng-untouched ng-valid ng-valid-min ng-valid-max ng-valid-maxlength"
                                                                        maxlength="3" min="1" max="999">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="col-5">
                                                            <span class="btn btn-success btn-block"
                                                                title="Save Settings"><span
                                                                    class="glyphicon glyphicon-floppy-disk"></span>
                                                                Save</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row ng-scope" data-ng-if="!drafts.length  &amp;&amp; !processing">
                                        <div class="col-md-12 centered">
                                            No draft messages
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Tokyo1" class="tabcontent" style="display: none;">
                                <div data-ng-view="" class="ng-scope">
                                    <style class="ng-scope">
                                    .iPhoneBody {
                                        display: block;
                                        padding: 20px;
                                    }

                                    .stat {
                                        padding-top: 5px;
                                        font-size: 30px;
                                        font-weight: bold;
                                        line-height: 100%;
                                    }

                                    .stat.statlabel {
                                        color: #000;
                                        font-size: 14px;
                                        font-weight: bold;
                                        display: block;
                                    }

                                    .progress-bar {
                                        text-align: left;
                                        padding-left: 5px;
                                    }

                                    div.withProGeniusImage {
                                        opacity: 0.4;
                                        background: #FFFFFF;
                                    }

                                    td.proOnly {
                                        background-color: #f5f5f5;
                                    }
                                    </style>
                                    <div class="ng-scope">
                                        <div id="loadingReportDetails" class="processing ng-hide"
                                            data-ng-show="processing">
                                            <div class="spinner fade-in delay-1" role="progressbar"
                                                style="position: absolute; width: 0px; z-index: 2000000000; left: 50%; top: 50%;">
                                                <div
                                                    style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-60-25-0-15;">
                                                    <div
                                                        style="position: absolute; width: 20px; height: 5px; background: rgb(239, 153, 52); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(0deg) translate(20px, 0px); border-radius: 2px;">
                                                    </div>
                                                </div>
                                                <div
                                                    style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-60-25-1-15;">
                                                    <div
                                                        style="position: absolute; width: 20px; height: 5px; background: rgb(239, 153, 52); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(24deg) translate(20px, 0px); border-radius: 2px;">
                                                    </div>
                                                </div>
                                                <div
                                                    style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-60-25-2-15;">
                                                    <div
                                                        style="position: absolute; width: 20px; height: 5px; background: rgb(239, 153, 52); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(48deg) translate(20px, 0px); border-radius: 2px;">
                                                    </div>
                                                </div>
                                                <div
                                                    style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-60-25-3-15;">
                                                    <div
                                                        style="position: absolute; width: 20px; height: 5px; background: rgb(239, 153, 52); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(72deg) translate(20px, 0px); border-radius: 2px;">
                                                    </div>
                                                </div>
                                                <div
                                                    style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-60-25-4-15;">
                                                    <div
                                                        style="position: absolute; width: 20px; height: 5px; background: rgb(239, 153, 52); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(96deg) translate(20px, 0px); border-radius: 2px;">
                                                    </div>
                                                </div>
                                                <div
                                                    style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-60-25-5-15;">
                                                    <div
                                                        style="position: absolute; width: 20px; height: 5px; background: rgb(239, 153, 52); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(120deg) translate(20px, 0px); border-radius: 2px;">
                                                    </div>
                                                </div>
                                                <div
                                                    style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-60-25-6-15;">
                                                    <div
                                                        style="position: absolute; width: 20px; height: 5px; background: rgb(239, 153, 52); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(144deg) translate(20px, 0px); border-radius: 2px;">
                                                    </div>
                                                </div>
                                                <div
                                                    style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-60-25-7-15;">
                                                    <div
                                                        style="position: absolute; width: 20px; height: 5px; background: rgb(239, 153, 52); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(168deg) translate(20px, 0px); border-radius: 2px;">
                                                    </div>
                                                </div>
                                                <div
                                                    style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-60-25-8-15;">
                                                    <div
                                                        style="position: absolute; width: 20px; height: 5px; background: rgb(239, 153, 52); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(192deg) translate(20px, 0px); border-radius: 2px;">
                                                    </div>
                                                </div>
                                                <div
                                                    style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-60-25-9-15;">
                                                    <div
                                                        style="position: absolute; width: 20px; height: 5px; background: rgb(239, 153, 52); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(216deg) translate(20px, 0px); border-radius: 2px;">
                                                    </div>
                                                </div>
                                                <div
                                                    style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-60-25-10-15;">
                                                    <div
                                                        style="position: absolute; width: 20px; height: 5px; background: rgb(239, 153, 52); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(240deg) translate(20px, 0px); border-radius: 2px;">
                                                    </div>
                                                </div>
                                                <div
                                                    style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-60-25-11-15;">
                                                    <div
                                                        style="position: absolute; width: 20px; height: 5px; background: rgb(239, 153, 52); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(264deg) translate(20px, 0px); border-radius: 2px;">
                                                    </div>
                                                </div>
                                                <div
                                                    style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-60-25-12-15;">
                                                    <div
                                                        style="position: absolute; width: 20px; height: 5px; background: rgb(239, 153, 52); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(288deg) translate(20px, 0px); border-radius: 2px;">
                                                    </div>
                                                </div>
                                                <div
                                                    style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-60-25-13-15;">
                                                    <div
                                                        style="position: absolute; width: 20px; height: 5px; background: rgb(239, 153, 52); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(312deg) translate(20px, 0px); border-radius: 2px;">
                                                    </div>
                                                </div>
                                                <div
                                                    style="position: absolute; top: -2px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-60-25-14-15;">
                                                    <div
                                                        style="position: absolute; width: 20px; height: 5px; background: rgb(239, 153, 52); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(336deg) translate(20px, 0px); border-radius: 2px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--- content --->
                                        <div class="row" ng-hide="showReport">
                                            <div class="col-xs-8">
                                                <h2 class="hrow fade-in">Sent Messages</h2>
                                            </div>
                                            <div class="col-xs-3">
                                                <span class="form-inline">
                                                    <div class="form-group">
                                                        <div class="input-group input-group-sm  table-heading--element">
                                                            <div class="input-group-addon"><span
                                                                    class="glyphicon glyphicon-search"></span></div>
                                                            <input type="text"
                                                                class="form-control ng-pristine ng-untouched ng-valid"
                                                                id="filterText" placeholder="Search"
                                                                data-ng-model="filters.search">
                                                        </div>
                                                    </div>
                                                </span>
                                            </div>
                                            <div class="col-xs-1">
                                                <span class="pull-right  table-heading--element">
                                                    <a class="dropdown-toggle tool-icon-link" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="true" popover="Settings"
                                                        popover-placement="top" popover-trigger="mouseenter"
                                                        popover-popup-delay="300">
                                                        <span class="glyphicon glyphicon-cog tool-icon mono"></span>
                                                    </a>
                                                    <ul class="dropdown-menu settingsOption" id="settingsDropdown"
                                                        data-ng-click="dropDownClickEvent($event)">
                                                        <li>
                                                            <h2>Display Options:</h2>
                                                        </li>
                                                        <li>
                                                            <div class="form-horizontal">
                                                                <div class="form-group">
                                                                    <label for="messagetypes"
                                                                        class="col-xs-6 text-left control-label">Message
                                                                        Type</label>
                                                                    <div class="col-xs-6">
                                                                        <select id="messagetypes"
                                                                            class="form-control ng-pristine ng-untouched ng-valid"
                                                                            data-ng-model="filters.messagetype">
                                                                            <option value="" selected="selected">All
                                                                            </option>
                                                                            <option value="bulk" selected="">Bulk
                                                                            </option>
                                                                            <option value="Invite" selected="">Invite
                                                                            </option>
                                                                            <option value="Change Notice" selected="">
                                                                                Change
                                                                                Notice
                                                                            </option>
                                                                            <option value="Reminder" selected="">
                                                                                Reminder
                                                                            </option>
                                                                            <option value="TextOptIn" selected="">Text
                                                                                Opt In
                                                                            </option>
                                                                            <option value="Text" selected="">Text
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-horizontal">
                                                                <div class="form-group">
                                                                    <label class="col-xs-6 text-left control-label"
                                                                        for="signUpPerPageId">Items/Page</label>
                                                                    <div class="col-xs-6">
                                                                        <input type="number" name="signUpPerPageId"
                                                                            id="signUpPerPageId"
                                                                            data-ng-model="sentPagination.itemsperpage"
                                                                            class="form-control ng-pristine ng-untouched ng-valid ng-valid-min ng-valid-max ng-valid-maxlength"
                                                                            maxlength="3" min="1" max="999">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-5">
                                                                <span class="btn btn-success btn-block"
                                                                    title="Save Settings"><span
                                                                        class="glyphicon glyphicon-floppy-disk"></span>
                                                                    Save</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <table class="table table-hover sTable align-top"
                                                    data-ng-show="!showReport &amp;&amp; SentMessages.length">
                                                    <thead>
                                                        <tr>
                                                            <th class="tcell date"
                                                                ng-click="setSentMessageSort('datesent')"
                                                                ng-class="{hOver: hover}" ng-mouseenter="hover=true"
                                                                ng-mouseleave="hover=false" nowrap="">
                                                                <a href="">
                                                                    <strong>Sent </strong>
                                                                    <span ng-show="sortBy=='datesent'"
                                                                        class="glyphicon glyphicon-chevron-up smalltext"></span>
                                                                </a>
                                                            </th>
                                                            <th ng-click="setSentMessageSort('subject')"
                                                                ng-class="{hOver: hover}" ng-mouseenter="hover=true"
                                                                ng-mouseleave="hover=false" class="">
                                                                <a href=""><strong>Subject <span
                                                                            ng-show="sortBy=='subject'"
                                                                            class="glyphicon glyphicon-chevron-up smalltext ng-hide"></span></strong></a>
                                                            </th>
                                                            <th class="tcell sentto"
                                                                ng-click="setSentMessageSort('countsent')"
                                                                ng-class="{hOver: hover}" ng-mouseenter="hover=true"
                                                                ng-mouseleave="hover=false">
                                                                <a href=""><strong>Sent To <span
                                                                            ng-show="sortBy=='countsent'"
                                                                            class="glyphicon glyphicon-chevron-up smalltext ng-hide"></span></strong></a>
                                                            </th>
                                                            <th class="tcell status"
                                                                ng-click="setSentMessageSort('status')"
                                                                ng-class="{hOver: hover}" ng-mouseenter="hover=true"
                                                                ng-mouseleave="hover=false">
                                                                <a href=""><strong>Status <span
                                                                            ng-show="sortBy=='status'"
                                                                            class="glyphicon glyphicon-chevron-up smalltext ng-hide"></span></strong></a>
                                                            </th>
                                                            <th class="tcell icon"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr ng-repeat="message in filteredSentMessages"
                                                            ng-class="{hOver: hover}" ng-mouseenter="hover=true"
                                                            ng-mouseleave="hover=false" class="ng-scope">
                                                            <td class="tcell date ng-binding">2021-12-09 1:04pm</td>
                                                            <td class="tcell">
                                                                <span data-ng-bind-html="message.subject"
                                                                    class="ng-binding">vb
                                                                    Invite</span> <br>
                                                                <span class="verysmalltext text-muted ng-binding">Invite
                                                                    -
                                                                    vb</span>
                                                            </td>
                                                            <td class="tcell sentto ng-binding">3</td>
                                                            <td class="tcell status ng-binding">Complete</td>
                                                            <td class="tcell icon">
                                                                <a href="#" popover="Message Details"
                                                                    popover-placement="top" popover-trigger="mouseenter"
                                                                    popover-popup-delay="300"><span
                                                                        class="glyphicon glyphicon-stats table-icon mono"></span></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <span class="verysmalltext text-muted"
                                            data-ng-show="!showReport &amp;&amp; SentMessages.length">
                                            <span data-ng-if="dateFormatString != ''" class="ng-binding ng-scope">NOTE:
                                                Dates
                                                are in yyyy-mm-dd. </span>
                                            <span data-ng-if="tzShort != ''" class="ng-binding ng-scope">Times
                                                are shown in - IST. To modify, update your <a
                                                    href="#">settings</a>.</span>
                                            <br><br>
                                        </span>
                                        <section ng-show="showReport" class="ng-hide">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h2 class="hrow fade-in ng-binding ng-scope"
                                                        data-ng-if="messageHeader[0].sendtext != 1">
                                                        Sent Message:
                                                    </h2>
                                                    <div class="btn-underlines">
                                                        <a href="#/sent" class="btn btn-underline">Back</a>
                                                        <button class="btn btn-underline active"
                                                            ng-class="{active: activeTab==1}"
                                                            ng-click="setActiveTab(1,SelectedRowID)"> Message
                                                            Details</button>
                                                        <button class="btn btn-underline"
                                                            ng-class="{active: activeTab==2}"
                                                            ng-click="setActiveTab(2,SelectedRowID)"> Message
                                                            Analytics</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div ng-show="activeTab==1" class="">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="spacer-sm"></div>
                                                        <div class="row">
                                                            <div class="col-sm-4">Sent</div>
                                                            <div class="col-sm-8">
                                                                <span class="ng-binding"></span>
                                                                <span class="subtext ng-binding"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <hr class="divider">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-4">Related Signup</div>
                                                            <div class="col-sm-8">
                                                                <span data-ng-if="!messageHeader[0].urlid.length"
                                                                    class="ng-binding ng-scope">
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <hr class="divider">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-4">From</div>
                                                            <div class="col-sm-8 ng-binding"></div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <hr class="divider">
                                                            </div>
                                                        </div>
                                                        <div class="row ng-scope" data-ng-if="!isTextMessage">
                                                            <div class="col-sm-4">Reply To</div>
                                                            <div class="col-sm-8 ng-binding"></div>
                                                        </div>
                                                        <div class="row ng-scope" data-ng-if="!isTextMessage">
                                                            <div class="col-sm-12">
                                                                <hr class="divider">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-4">Sent To</div>
                                                            <div class="col-sm-8">
                                                                <span data-ng-if="messageHeader[0].senttoname != ''"
                                                                    class="ng-binding ng-scope"></span>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <hr class="divider">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="spacer"></div>
                                                        <div class="email-preview ng-scope" data-ng-if="!isTextMessage">
                                                            <div class="link-blocking-cover"></div>
                                                            <div class="email-content">
                                                                <div data-ng-bind-html="bodyPreview" align="left"
                                                                    class="ng-binding"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div ng-show="activeTab==2" class="ng-hide">
                                                <span data-ng-if="!isTextMessage" class="ng-scope">
                                                    <div class="spacer-sm"></div>
                                                    <h3>Delivery Stats</h3>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <ul class="list-unstyled">
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div google-chart="" chart="chartMsgDStats"
                                                                class="mGraph ng-isolate-scope">
                                                                <div style="position: relative;">
                                                                    <div dir="ltr"
                                                                        style="position: relative; width: 400px; height: 200px;">
                                                                        <div aria-label="A chart."
                                                                            style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                                                                            <svg width="400" height="200"
                                                                                aria-label="A chart."
                                                                                style="overflow: hidden;">
                                                                                <defs id="_ABSTRACT_RENDERER_ID_5">
                                                                                </defs>
                                                                                <rect x="0" y="0" width="400"
                                                                                    height="200" stroke="none"
                                                                                    stroke-width="0" fill="#ffffff">
                                                                                </rect>
                                                                                <g>
                                                                                    <text text-anchor="start" x="10"
                                                                                        y="23.2" font-family="Arial"
                                                                                        font-size="12"
                                                                                        font-weight="bold" stroke="none"
                                                                                        stroke-width="0"
                                                                                        fill="#000000">Delivery
                                                                                        Stats
                                                                                    </text>
                                                                                    <rect x="10" y="13" width="267"
                                                                                        height="12" stroke="none"
                                                                                        stroke-width="0"
                                                                                        fill-opacity="0" fill="#ffffff">
                                                                                    </rect>
                                                                                </g>
                                                                                <text text-anchor="middle" x="143.5"
                                                                                    y="103.85" font-family="Arial"
                                                                                    font-size="11" stroke="none"
                                                                                    stroke-width="0" fill="#000000">No
                                                                                    data
                                                                                </text>
                                                                                <g></g>
                                                                            </svg>
                                                                            <div aria-label="A tabular representation of the data in the chart."
                                                                                style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                                                                <table>
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Name</th>
                                                                                            <th>Value</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody></tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div aria-hidden="true"
                                                                        style="display: none; position: absolute; top: 210px; left: 410px; white-space: nowrap; font-family: Arial; font-size: 11px;">
                                                                        No data
                                                                    </div>
                                                                    <div></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                        </div>
                                                        <div class="col-sm-3">
                                                        </div>
                                                    </div>
                                                </span>
                                                <span data-ng-if="!isTextMessage" class="ng-scope">
                                                    <div class="spacer-sm"></div>
                                                    <h3 ng-class="{withProGeniusImage: !isProUser}"
                                                        class="withProGeniusImage">
                                                        <img data-ng-if="!isProUser"
                                                            src="slot/images/messageCenter/pro.png" width="40"
                                                            class="ng-scope">Response Stats
                                                    </h3>
                                                    <div class="row withProGeniusImage"
                                                        ng-class="{withProGeniusImage: !isProUser}">
                                                        <div class="col-sm-3 col-xs-12"
                                                            data-ng-class="{'col-xs-3': showResponseStatsGraphs, 'col-xs-12': !showResponseStatsGraphs}">
                                                            <ul class="list-unstyled">
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </span>
                                                <div class="row ng-scope" data-ng-if="!isTextMessage">
                                                    <div class="col-xs-12">
                                                        <h2 class="hrow">Delivery Details</h2>
                                                        <div ng-show="!messageDetails.length" class="">
                                                            No delivery details at this time
                                                        </div>
                                                        <table class="table table-hover sTable align-top ng-hide"
                                                            ng-show="messageDetails.length">
                                                            <thead>
                                                                <tr>
                                                                    <th ng-click="setDetailSort('email')"
                                                                        ng-class="{hOver: hover}"
                                                                        ng-mouseenter="hover=true"
                                                                        ng-mouseleave="hover=false" class="">
                                                                        <strong><a href="">Email <span
                                                                                    ng-show="detailSort=='email'"
                                                                                    class="glyphicon  ng-hide"></span></a></strong>
                                                                    </th>
                                                                    <th class="tcell status"
                                                                        ng-click="setDetailSort('memberevents','Status')"
                                                                        ng-class="{hOver: hover}"
                                                                        ng-mouseenter="hover=true"
                                                                        ng-mouseleave="hover=false">
                                                                        <strong><a href="">Status <span
                                                                                    ng-show="sortedColumn=='Status'"
                                                                                    class="glyphicon  ng-hide"></span></a></strong>
                                                                    </th>
                                                                    <th class="tcell flexible"
                                                                        ng-click="setDetailSort('memberevents','Issues')"
                                                                        ng-class="{hOver: hover}"
                                                                        ng-mouseenter="hover=true"
                                                                        ng-mouseleave="hover=false">
                                                                        <strong><a href="">Issues <span
                                                                                    ng-show="sortedColumn=='Issues'"
                                                                                    class="glyphicon  ng-hide"></span></a></strong>
                                                                    </th>
                                                                    <th class="tcell status ng-scope"
                                                                        ng-click="setDetailSort('signedup')"
                                                                        ng-class="{hOver: hover}"
                                                                        ng-mouseenter="hover=true"
                                                                        ng-mouseleave="hover=false"
                                                                        data-ng-if="messageType != 'textoptin'">
                                                                        <strong><a href="">Signed Up <span
                                                                                    ng-show="sortedColumn=='signedup'"
                                                                                    class="glyphicon  ng-hide"></span></a></strong>
                                                                    </th>
                                                                    <th class="tcell flexible no-wrap ng-scope"
                                                                        data-ng-if="notProGoldPlatinum()">
                                                                        <strong>Opened</strong>
                                                                        <span
                                                                            popover="This option is available for Pro Gold &amp; Platinum subscribers"
                                                                            popover-trigger="mouseenter"
                                                                            popover-placement="top">
                                                                            <img src="slot/images/messageCenter/pro.png"
                                                                                width="30"
                                                                                style="margin-left: 10px !important; margin-top: -4px !important;">
                                                                        </span>
                                                                    </th>
                                                                    <th class="tcell flexible no-wrap ng-scope"
                                                                        data-ng-if="notProGoldPlatinum()">
                                                                        <strong>Clicked</strong>
                                                                        <span
                                                                            popover="This option is available for Pro Gold &amp; Platinum subscribers"
                                                                            popover-trigger="mouseenter"
                                                                            popover-placement="top">
                                                                            <img src="slot/images/messageCenter/pro.png"
                                                                                width="30"
                                                                                style="margin-left: 10px !important; margin-top: -4px !important;">
                                                                        </span>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script type="text/ng-template" id="confirmationwindow.html">
                            <div class="modal modal-tiny">
                           <button title="Close (Esc)" type="button" class="modal-close" data-ng-click="cancel()">&times;</button>
                           
                           <h2>Confirmation</h2>
                           
                           
                           <div class="spacer"></div>
                           <div class="centered">
                           <button class="btn btn-green btn-lg btn-wide" ng-click="ok()">Yes</button>
                           </div>
                           </div>
                        </script>
                    </div>
                </div>
                <div class="tab-pane" id="d">
                    <div class="member-blocks--maincontent-narrow">
                        <script type="text/javascript" src="slot/plugins/jquery-1.7.2.min.js"></script>
                        <script src="slot/plugins/jquery-ui-1.8.16.custom.min.js" type="text/javascript"
                            language="Javascript"></script>
                        <link href="slot/css/ui-lightness/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css">
                        <script>
                        $(function() {
                            $('.noFlashHide').css({
                                'display': 'block'
                            });
                            $("#quickBox").dialog({
                                autoOpen: false,
                                width: 500,
                                modal: true,
                                resizable: false
                            });
                            quickClose();
                        });

                        function quickPop(urlString, strFormData, boxtitle) {
                            $('#quickBox').load(urlString, strFormData);
                            $('#quickBox').dialog('option', 'title', boxtitle);
                            $("#quickBox").dialog('option', 'close', function() {
                                window.location.reload();
                            });
                            $('#quickBox').dialog('open').height('auto');
                        }

                        function quickClose() {
                            $('#quickBox').dialog('close');
                        }

                        $("#quickBox").dialog({
                            open: function(event, ui) {
                                $('#divCloseDialog').load('', function() {
                                    $('#quickBox').dialog('close');
                                });

                                $('#linkInDialog').load('', function() {})

                            }
                        });
                        </script>
                        <h1>Reports</h1>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="nav nav-tabs" role="tablist" style="font-size:11pt !important;">
                                    <li class="tablinks active" onclick="openCity(event, 'tabb1')"><a href="#"><span
                                                class="glyphicon glyphicon-list-alt"></span> Sign Ups</a></li>
                                    <li class="tablinks" onclick="openCity(event, 'tabb2')"><a href="#"><span
                                                class="glyphicon glyphicon-stats"></span>
                                            Stats</a>
                                    </li>
                                    <li class="tablinks" onclick="openCity(event, 'tabb3')"><a href="#"><span
                                                class="glyphicon glyphicon-user"></span>
                                            Volunteers</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <script language="JavaScript">
                        var datePickerDivID = "datepicker";
                        var iFrameDivID = "datepickeriframe";

                        var dayArrayShort = new Array('Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa');
                        var dayArrayMed = new Array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
                        var dayArrayLong = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday',
                            'Saturday');
                        var monthArrayShort = new Array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep',
                            'Oct',
                            'Nov', 'Dec');
                        var monthArrayMed = new Array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept',
                            'Oct',
                            'Nov', 'Dec');
                        var monthArrayLong = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July',
                            'August',
                            'September', 'October', 'November', 'December');


                        var defaultDateSeparator = "/";
                        var defaultDateFormat = "mdy"
                        var dateSeparator = defaultDateSeparator;
                        var dateFormat = defaultDateFormat;


                        function displayDatePicker(dateFieldName, displayBelowThisObject, dtFormat, dtSep) {
                            var targetDateField = document.getElementsByName(dateFieldName).item(0);


                            if (!displayBelowThisObject)
                                displayBelowThisObject = targetDateField;


                            if (dtSep)
                                dateSeparator = dtSep;
                            else
                                dateSeparator = defaultDateSeparator;


                            if (dtFormat)
                                dateFormat = dtFormat;
                            else
                                dateFormat = defaultDateFormat;

                            var x = displayBelowThisObject.offsetLeft;
                            var y = displayBelowThisObject.offsetTop + displayBelowThisObject.offsetHeight;


                            var parent = displayBelowThisObject;
                            while (parent.offsetParent) {
                                parent = parent.offsetParent;
                                x += parent.offsetLeft;
                                y += parent.offsetTop;
                            }

                            var winWidth = window.innerWidth || 1170;
                            if (x + 211 > winWidth)
                                x += -211;

                            drawDatePicker(targetDateField, x, y);
                        }


                        function drawDatePicker(targetDateField, x, y) {
                            var dt = getFieldDate(targetDateField.value);
                            var dtNow = new Date();


                            if ((dtNow.getFullYear() - dt.getFullYear()) > 5)
                                dt = dtNow;

                            if (!document.getElementById(datePickerDivID)) {

                                var newNode = document.createElement("div");
                                newNode.setAttribute("id", datePickerDivID);
                                newNode.setAttribute("class", "dpDiv");
                                newNode.setAttribute("style", "visibility: hidden;");
                                document.body.appendChild(newNode);
                            }


                            var pickerDiv = document.getElementById(datePickerDivID);
                            pickerDiv.style.position = "absolute";
                            pickerDiv.style.left = x + "px";
                            pickerDiv.style.top = y + "px";
                            pickerDiv.style.visibility = (pickerDiv.style.visibility == "visible" ? "hidden" :
                                "visible");
                            pickerDiv.style.display = (pickerDiv.style.display == "block" ? "none" : "block");
                            pickerDiv.style.zIndex = 10000;


                            refreshDatePicker(targetDateField.name, dt.getFullYear(), dt.getMonth(), dt.getDate());
                        }

                        function refreshDatePicker(dateFieldName, year, month, day) {

                            var thisDay = new Date();

                            if ((month >= 0) && (year > 0)) {
                                thisDay = new Date(year, month, 1);
                            } else {
                                day = thisDay.getDate();
                                thisDay.setDate(1);
                            }

                            var crlf = "\r\n";
                            var TABLE = "<table cols=7 class='yellowbox rounded'>" + crlf;
                            var xTABLE = "</table>" + crlf;
                            var TR = "<tr class='dpTR'>";
                            var TR_title = "<tr class='dpTitleTR'>";
                            var TR_days = "<tr class='dpDayTR'>";
                            var TR_todaybutton = "<tr class='dpTodayButtonTR'>";
                            var xTR = "</tr>" + crlf;
                            var TD =
                                "<td class='dpTD' onMouseOut='this.className=\"dpTD\";' onMouseOver=' this.className=\"dpTDHover\";' "; // leave this tag open, because we'll be adding an onClick event
                            var TD_title = "<td colspan=5 class='dpTitleTD' align='center'>";
                            var TD_buttonRight = "<td class='dpButtonTDRight' align='right'>";
                            var TD_buttonLeft = "<td class='dpButtonTDLeft' align='left'>";
                            var TD_todaybutton = "<td colspan=7 class='yellowbox'>";
                            var TD_days = "<td class='dpDayTD'>";
                            var TD_selected =
                                "<td class='dpDayHighlightTD' onMouseOut='this.className=\"dpDayHighlightTD\";' onMouseOver='this.className=\"dpTDHover\";' "; // leave this tag open, because we'll be adding an onClick event
                            var xTD = "</td>" + crlf;
                            var DIV_title = "<div class='dpTitleText'>";
                            var DIV_selected = "<div class='dpDayHighlight'>";
                            var xDIV = "</div>";


                            var html = TABLE;


                            html += TR_title;
                            html += TD_buttonLeft + getButtonCode(dateFieldName, thisDay, -1,
                                "<span class='glyphicon glyphicon-arrow-left'></span>") + xTD;
                            html += TD_title + DIV_title + monthArrayLong[thisDay.getMonth()] + " " + thisDay
                                .getFullYear() +
                                xDIV + xTD;
                            html += TD_buttonRight + getButtonCode(dateFieldName, thisDay, 1,
                                "<span class='glyphicon glyphicon-arrow-right'></span>") + xTD;
                            html += xTR;


                            html += TR_days;
                            for (i = 0; i < dayArrayShort.length; i++)
                                html += TD_days + dayArrayShort[i] + xTD;
                            html += xTR;


                            html += TR;


                            for (i = 0; i < thisDay.getDay(); i++)
                                html += TD + "&nbsp;" + xTD;


                            do {
                                dayNum = thisDay.getDate();
                                TD_onclick = " onclick=\"updateDateField('" + dateFieldName + "', '" + getDateString(
                                        thisDay) +
                                    "');\">";

                                if (dayNum == day)
                                    html += TD_selected + TD_onclick + DIV_selected + dayNum + xDIV + xTD;
                                else
                                    html += TD + TD_onclick + dayNum + xTD;


                                if (thisDay.getDay() == 6)
                                    html += xTR + TR;


                                thisDay.setDate(thisDay.getDate() + 1);
                            } while (thisDay.getDate() > 1)


                            if (thisDay.getDay() > 0) {
                                for (i = 6; i > thisDay.getDay(); i--)
                                    html += TD + "&nbsp;" + xTD;
                            }
                            html += xTR;


                            var today = new Date();
                            var todayString = "Today is " + dayArrayMed[today.getDay()] + ", " + monthArrayMed[today
                                .getMonth()] + " " + today.getDate();
                            html += TR_todaybutton + TD_todaybutton;
                            html += "<button class='btn btn-default btn-xs' onClick='refreshDatePicker(\"" +
                                dateFieldName +
                                "\");'>Current</button> ";
                            html +=
                                "<span class='pull-right'><button class='btn btn-warning btn-xs' onClick='updateDateField(\"" +
                                dateFieldName + "\");'>Close</button></span>";
                            html += xTD + xTR;


                            html += xTABLE;

                            document.getElementById(datePickerDivID).innerHTML = html;

                            adjustiFrame();
                        }

                        function getButtonCode(dateFieldName, dateVal, adjust, label) {
                            var newMonth = (dateVal.getMonth() + adjust) % 12;
                            var newYear = dateVal.getFullYear() + parseInt((dateVal.getMonth() + adjust) / 12);
                            if (newMonth < 0) {
                                newMonth += 12;
                                newYear += -1;
                            }

                            return "<button class='btn btn-default btn-sm' onClick='refreshDatePicker(\"" +
                                dateFieldName +
                                "\", " + newYear + ", " + newMonth + ");'>" + label + "</button>";
                        }

                        function getDateString(dateVal) {
                            var dayString = "00" + dateVal.getDate();
                            var monthString = "00" + (dateVal.getMonth() + 1);
                            dayString = dayString.substring(dayString.length - 2);
                            monthString = monthString.substring(monthString.length - 2);

                            switch (dateFormat) {
                                case "dmy":
                                    return dayString + dateSeparator + monthString + dateSeparator + dateVal
                                        .getFullYear();
                                case "ymd":
                                    return dateVal.getFullYear() + dateSeparator + monthString + dateSeparator +
                                        dayString;
                                case "mdy":
                                default:
                                    return monthString + dateSeparator + dayString + dateSeparator + dateVal
                                        .getFullYear();
                            }
                        }

                        function getFieldDate(dateString) {
                            var dateVal;
                            var dArray;
                            var d, m, y;

                            try {
                                dArray = splitDateString(dateString);
                                if (dArray) {
                                    switch (dateFormat) {
                                        case "dmy":
                                            d = parseInt(dArray[0], 10);
                                            m = parseInt(dArray[1], 10) - 1;
                                            y = parseInt(dArray[2], 10);
                                            break;
                                        case "ymd":
                                            d = parseInt(dArray[2], 10);
                                            m = parseInt(dArray[1], 10) - 1;
                                            y = parseInt(dArray[0], 10);
                                            break;
                                        case "mdy":
                                        default:
                                            d = parseInt(dArray[1], 10);
                                            m = parseInt(dArray[0], 10) - 1;
                                            y = parseInt(dArray[2], 10);
                                            break;
                                    }
                                    dateVal = new Date(y, m, d);
                                } else if (dateString) {
                                    dateVal = new Date(dateString);
                                } else {
                                    dateVal = new Date();
                                }
                            } catch (e) {
                                dateVal = new Date();
                            }

                            return dateVal;
                        }

                        function splitDateString(dateString) {
                            var dArray;
                            if (dateString.indexOf("/") >= 0)
                                dArray = dateString.split("/");
                            else if (dateString.indexOf(".") >= 0)
                                dArray = dateString.split(".");
                            else if (dateString.indexOf("-") >= 0)
                                dArray = dateString.split("-");
                            else if (dateString.indexOf("\\") >= 0)
                                dArray = dateString.split("\\");
                            else
                                dArray = false;

                            return dArray;
                        }


                        function updateDateField(dateFieldName, dateString) {
                            var targetDateField = document.getElementsByName(dateFieldName).item(0);
                            if (dateString)
                                targetDateField.value = dateString;

                            var pickerDiv = document.getElementById(datePickerDivID);
                            pickerDiv.style.visibility = "hidden";
                            pickerDiv.style.display = "none";

                            adjustiFrame();
                            targetDateField.focus();


                            if ((dateString) && (typeof(datePickerClosed) == "function"))
                                datePickerClosed(targetDateField);
                        }


                        function adjustiFrame(pickerDiv, iFrameDiv) {

                            var is_opera = (navigator.userAgent.toLowerCase().indexOf("opera") != -1);
                            if (is_opera)
                                return;


                            try {
                                if (!document.getElementById(iFrameDivID)) {

                                    var newNode = document.createElement("iFrame");
                                    newNode.setAttribute("id", iFrameDivID);
                                    newNode.setAttribute("src", "javascript:false;");
                                    newNode.setAttribute("scrolling", "no");
                                    newNode.setAttribute("frameborder", "0");
                                    document.body.appendChild(newNode);
                                }

                                if (!pickerDiv)
                                    pickerDiv = document.getElementById(datePickerDivID);
                                if (!iFrameDiv)
                                    iFrameDiv = document.getElementById(iFrameDivID);

                                try {
                                    iFrameDiv.style.position = "absolute";
                                    iFrameDiv.style.width = pickerDiv.offsetWidth;
                                    iFrameDiv.style.height = pickerDiv.offsetHeight;
                                    iFrameDiv.style.top = pickerDiv.style.top;
                                    iFrameDiv.style.left = pickerDiv.style.left;
                                    iFrameDiv.style.zIndex = pickerDiv.style.zIndex - 1;
                                    iFrameDiv.style.visibility = pickerDiv.style.visibility;
                                    iFrameDiv.style.display = pickerDiv.style.display;
                                } catch (e) {}

                            } catch (ee) {}

                        }
                        </script>
                        <style>
                        .yellowbox {
                            background: #fefae0;
                            padding: 10px;
                            border-radius: 5px;
                            -moz-box-shadow: inset 0 0 50px #fcecc0;
                            -webkit-box-shadow: inset 0 0 50px #fcecc0;
                            box-shadow: 4px 4px 2px #999999;
                        }

                        .rounded {
                            -moz-border-radius: 5px;
                            -webkit-border-radius: 5px;
                            -khtml-border-radius: 5px;
                            border-radius: 5px;
                        }

                        .dpTable {
                            font-family: Tahoma, Arial, Helvetica, sans-serif;
                            font-size: 12px;
                            text-align: center;
                            color: #505050;
                            background-color: #ece9d8;
                            border: 1px solid #AAAAAA;
                        }

                        .dpTitleTR {
                            border: 1px solid #ece9d8;
                        }

                        .dpTodayButtonTR {
                            border: 1px solid #ece9d8;
                        }

                        .dpTD {
                            border: 1px solid #ece9d8;
                            padding: 4px;
                            text-align: center;
                        }

                        .dpDayHighlightTD {
                            color: white;
                            background-color: #a8bd0f;
                            border: 1px solid #AAAAAA;
                            text-align: center;
                        }

                        .dpTDHover {
                            background-color: #aca998;
                            border: 1px solid #888888;
                            cursor: pointer;
                            color: white;
                            font-weight: bold;
                            text-align: center;
                            padding: 4px;
                        }

                        .dpButtonTDRight {
                            padding-right: 3px;
                            padding-top: 3px;
                            padding-bottom: 3px;
                        }

                        .dpButtonTDLeft {
                            padding-left: 3px;
                            padding-top: 3px;
                            padding-bottom: 3px;
                        }

                        .dpDayTD {
                            background-color: #CCCCCC;
                            border: 1px solid #AAAAAA;
                            color: white;
                            text-align: center;
                        }

                        .dpTitleText {
                            font-size: 16px;
                            color: gray;
                            font-weight: bold;
                        }

                        /* additional style information for the cell that holds a highlighted day (usually either today's date or the current date field value) */
                        .dpDayHighlight {
                            color: 4060ff;
                            font-weight: bold;
                        }

                        /* the forward/backward buttons at the top */
                        .dpButton {
                            font-family: Verdana, Tahoma, Arial, Helvetica, sans-serif;
                            font-size: 10px;
                            color: gray;
                            background: #d8e8ff;
                            font-weight: bold;
                            padding: 0px;
                        }

                        /* the "This Month" and "Close" buttons at the bottom */
                        .dpTodayButton {
                            font-family: Verdana, Tahoma, Arial, Helvetica, sans-serif;
                            font-size: 10px;
                            color: gray;
                            background: #d8e8ff;
                            font-weight: bold;
                        }
                        </style>
                        Fill out the form below to build a custom report using data from all your sign ups.
                        <div id="tabb1" class="tabcontent" style="display: block;">
                            <span class="spacer-sm"></span>
                            <form name="myform" id="myform" action="/index.cfm?go=t.ProcessCustomReport" method="POST"
                                onsubmit="return _CF_checkmyform(this)" class="ng-pristine ng-valid">
                                <input name="memberid" id="memberid" type="hidden" value="128801955"><input
                                    name="successpage" id="successpage" type="hidden" value="t.CustomReport"><input
                                    name="failpage" id="failpage" type="hidden" value="t.Reports">
                                <h3>Include the Following Sign Ups:</h3>
                                <ul>
                                    <table cellspacing="0" cellpadding="2">
                                        <tbody>
                                            <tr>
                                                <td class="smalltext" valign="top">
                                                    <input type="checkbox" class="css-checkbox-chkbx-mini" name="listid"
                                                        id="listid_33404602" value="33404602"
                                                        onclick="checkboxlimit(document.myform.listid, 25);">
                                                    <label for="listid_33404602" class="chkbx-css-label-mini"
                                                        title="hello">hello</label><br>
                                                    <input type="checkbox" class="css-checkbox-chkbx-mini" name="listid"
                                                        id="listid_33404627" value="33404627"
                                                        onclick="checkboxlimit(document.myform.listid, 25);">
                                                    <label for="listid_33404627" class="chkbx-css-label-mini"
                                                        title="vb">vb</label><br>
                                                </td>
                                                <td class="smalltext" valign="top">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <button type="button" name="Reload"
                                                        onclick="window.location='/index.cfm?go=t.reports&amp;memberid=128801955&amp;showall=1&amp;search=1';"
                                                        class="btn btn-default btn-sm">Show Older Sign Ups Also</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </ul>
                                <h3>Date Range (yyyy-mm-dd):</h3>
                                <ul>
                                    <input type="radio" name="allDates" id="allDates_1" value="1" class="css-radio-mini"
                                        checked="">
                                    <label for="allDates_1" class="radio-css-label-mini">Include all dates from the
                                        selected sign ups</label><br>
                                    <input type="radio" name="allDates" id="allDates_0" value="0"
                                        class="css-radio-mini">
                                    <label for="allDates_0" class="radio-css-label-mini">Only include dates on the
                                        selected sign ups that are between</label>
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <div class="input-group input-group">
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"
                                                        onclick="displayDatePicker('startdate', this, 'ymd', '-');"
                                                        style="font-size: 12pt;"></span>
                                                </span>
                                                <input type="text" class="form-control" name="startdate" size="12"
                                                    value="2021-11-10">
                                            </div>
                                        </div>
                                        <div class="col-xs-3">
                                            <div class="input-group input-group">
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"
                                                        onclick="displayDatePicker('enddate', this, 'ymd', '-');"
                                                        style="font-size: 12pt;"></span>
                                                </span>
                                                <input type="text" class="form-control" name="enddate" size="12"
                                                    value="2022-02-10">
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                                <h3>Report Style:</h3>
                                <ul>
                                    <span class="smalltext"><span style="color:red;">Note:</span> If you collected phone
                                        &amp; address information or a custom question, choose the "List of Sign Ups"
                                        report.<br></span>
                                    <div class="indentblock">
                                        <input type="radio" name="style" id="style_count" value="count"
                                            class="css-radio-mini" checked="">
                                        <label for="style_count" class="radio-css-label-mini">Total Sign Up Quantity by
                                            User</label><br>
                                        <input type="radio" name="style" id="style_users" value="users"
                                            class="css-radio-mini">
                                        <label for="style_users" class="radio-css-label-mini">List of Users for Export
                                            to Excel</label><br>
                                        <input type="radio" name="style" id="style_slots" value="slots"
                                            class="css-radio-mini">
                                        <label for="style_slots" class="radio-css-label-mini">List of Sign Ups for
                                            Export to Excel</label>
                                        <div id="showFields" class="indentblock noFlashHide" style="display: block;">
                                            <div id="reportFieldSelection"></div>
                                        </div>
                                    </div>
                                </ul>
                                <br>
                                <button type="button" name="create" class="btn btn-success"
                                    onclick="js_submitCustomReport()">Create
                                    Report</button>
                            </form>
                        </div>
                        <div id="tabb2" class="tabcontent">
                            <form name="myform" id="myform" action="/index.cfm?go=t.ProcessSignupStatsReport"
                                method="POST" onsubmit="return _CF_checkmyform(this)" class="ng-pristine ng-valid">
                                <input name="memberid" id="memberid" type="hidden" value="128801955"><input
                                    name="successpage" id="successpage" type="hidden" value="t.SignupStatsReport"><input
                                    name="failpage" id="failpage" type="hidden" value="t.SignupStats">
                                <strong>Include the Following Signup Forms:</strong>
                                <ul>
                                    <table cellspacing="0" cellpadding="2">
                                        <tbody>
                                            <tr>
                                                <td class="smalltext" valign="top">
                                                    <input type="checkbox" class="css-checkbox-chkbx-mini" name="listid"
                                                        id="listid_33404602" value="33404602"
                                                        onclick="checkboxlimit(document.myform.listid, 25);">
                                                    <label for="listid_33404602" class="chkbx-css-label-mini"
                                                        title="hello">hello</label><br>
                                                    <input type="checkbox" class="css-checkbox-chkbx-mini" name="listid"
                                                        id="listid_33404627" value="33404627"
                                                        onclick="checkboxlimit(document.myform.listid, 25);">
                                                    <label for="listid_33404627" class="chkbx-css-label-mini"
                                                        title="vb">vb</label><br>
                                                </td>
                                                <td class="smalltext" valign="top">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <script language="JavaScript">
                                                    function checkAll(field) {
                                                        var limit = 25;
                                                        for (i = 0; i < field.length; i++) {
                                                            if (field.length < limit) {
                                                                field[i].checked = true;
                                                            } else {
                                                                alert("You can only select a maximum of " + limit +
                                                                    " sign ups for your report.")
                                                                this.checked = false
                                                                break;
                                                            }

                                                        }
                                                    }

                                                    function uncheckAll(field) {
                                                        for (i = 0; i < field.length; i++)
                                                            field[i].checked = false;
                                                    }

                                                    function checkboxlimit(checkgroup, limit) {
                                                        var checkgroup = checkgroup
                                                        var limit = limit
                                                        for (var i = 0; i < checkgroup.length; i++) {
                                                            checkgroup[i].onclick = function() {
                                                                var checkedcount = 0
                                                                for (var i = 0; i < checkgroup.length; i++)
                                                                    checkedcount += (checkgroup[i].checked) ? 1 : 0
                                                                if (checkedcount > limit) {
                                                                    alert("You can only select a maximum of " +
                                                                        limit +
                                                                        " sign ups for your report.")
                                                                    this.checked = false
                                                                }
                                                            }
                                                        }
                                                    }
                                                    //  End -->
                                                    </script>
                                                    <button type="button" name="CheckAll"
                                                        onclick="checkAll(document.myform.listid)"
                                                        class="btn btn-default btn-sm">Check All</button>
                                                    <button type="button" name="UnCheckAll"
                                                        onclick="uncheckAll(document.myform.listid)"
                                                        class="btn btn-default btn-sm">Uncheck All</button>
                                                    <button type="button" name="Reload"
                                                        onclick="window.location='/index.cfm?go=t.SignupStats&amp;memberid=128801955&amp;showall=1';"
                                                        class="btn btn-default btn-sm">Show Older Sign Ups Also</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </ul>
                                <br>
                                <strong>Date Range for Visitor Statistics (yyyy-mm-dd):</strong>
                                <ul>
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <div class="input-group input-group">
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"
                                                        onclick="displayDatePicker('startdate', this, 'ymd', '-');"
                                                        style="font-size: 12pt;"></span>
                                                </span>
                                                <input type="text" class="form-control" name="startdate" size="12"
                                                    value="2021-12-03">
                                            </div>
                                        </div>
                                        <div class="col-xs-3">
                                            <div class="input-group input-group">
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"
                                                        onclick="displayDatePicker('enddate', this, 'ymd', '-');"
                                                        style="font-size: 12pt;"></span>
                                                </span>
                                                <input type="text" class="form-control" name="enddate" size="12"
                                                    value="2021-12-10">
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                                <br>
                                <button type="submit" name="submit" class="btn btn-success">Create Stats Report</button>
                            </form>
                        </div>
                        <div id="tabb3" class="tabcontent">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <img src="slot/images/PRO-stamp_100.png" height="40"
                                        align="center">&nbsp;&nbsp;&nbsp;<strong>This report is available for Pro Gold
                                        &amp;
                                        Platinum subscribers. <a href="/Pro">Learn more</a>.</strong><br clear="all">
                                </div>
                            </div>
                            <div class="pull-right">
                                <a href="" title="Family Group Settings">
                                    <input type="button" value="Set Up Family Group Settings" id="familyGroup"
                                        class="btn btn-default btn-sm  disabled" disabled="">
                                </a>
                            </div>
                            <h2 style="padding-top:0;margin-top:0;">Volunteer Hours Report</h2>
                            "Calculate the volunteer hours that your members signed up for."
                            <br>
                            <br>
                            <form name="myform" id="myform" action="/index.cfm?go=t.ProcessVolunteerReportSlotWindow"
                                method="POST" onsubmit="return _CF_checkmyform(this)" class="ng-pristine ng-valid">
                                <input name="memberid" id="memberid" type="hidden" value="128801955"><input
                                    name="successpage" id="successpage" type="hidden" value="t.VolunteerReport"><input
                                    name="failpage" id="failpage" type="hidden" value="t.Volunteer">
                                <strong>Include the Following Sign Ups:</strong>
                                <ul>
                                    <table cellspacing="0" cellpadding="2">
                                        <tbody>
                                            <tr>
                                                <td class="smalltext" valign="top">
                                                    <input type="checkbox" class="css-checkbox-chkbx-mini" name="listid"
                                                        id="listid_33404602" value="33404602"
                                                        onclick="checkboxlimit(document.myform.listid, 25);"
                                                        disabled="">
                                                    <label for="listid_33404602" class="chkbx-css-label-mini"
                                                        title="hello">hello</label><br>
                                                    <input type="checkbox" class="css-checkbox-chkbx-mini" name="listid"
                                                        id="listid_33404627" value="33404627"
                                                        onclick="checkboxlimit(document.myform.listid, 25);"
                                                        disabled="">
                                                    <label for="listid_33404627" class="chkbx-css-label-mini"
                                                        title="vb">vb</label><br>
                                                </td>
                                                <td class="smalltext" valign="top">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <input type="button" name="Reload" value="Show Older Sign Ups Also"
                                                        onclick="window.location='/index.cfm?go=t.Volunteer&amp;memberid=128801955&amp;showall=1&amp;search=1';"
                                                        class="btn btn-default btn-sm  disabled"
                                                        style="font-weight: normal !important;" disabled="">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </ul>
                                <strong>Date Range:</strong>
                                <ul>
                                    <input type="radio" name="allDates" value="1" checked="" disabled=""> Include all
                                    dates from
                                    the selected sign ups<br>
                                    <input type="radio" name="allDates" value="0" disabled=""> Only include dates on the
                                    selected sign ups that are between<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="startdate" size="12"
                                        value="2021-10-11" class="smalltext disabled" disabled="">
                                    <a href="#" onclick="displayDatePicker('startdate', this, 'ymd', '-');"><img
                                            src="slot/plugins/datepickerpopcal/cal.gif" width="16" height="16"
                                            border="0"></a>
                                    and
                                    <input type="text" name="enddate" size="12" value="2022-02-11"
                                        class="smalltext disabled" disabled="">
                                    <a href="#" onclick="displayDatePicker('enddate', this, 'ymd', '-');"><img
                                            src="slot/plugins/datepickerpopcal/cal.gif" width="16" height="16"
                                            border="0"></a>
                                </ul>
                                <strong>Volunteer Parameters:</strong><br>
                                <div class="indentblock">
                                    <input type="radio" name="showWho" checked="" value="all" disabled="">Show all users
                                    that
                                    signed up.<br>
                                    <input type="radio" name="showWho" value="group" disabled="">Show all users from the
                                    group:
                                    disabled
                                    <select name="communityID" class="smalltext disabled"
                                        style="padding-top:3px; padding-bottom:3px;" disabled="">
                                        <option value="">er</option>
                                    </select>
                                    <br>
                                    <br>
                                    <input type="checkbox" name="groupByFamily" value="on" disabled=""> Group by Family
                                    [Note:
                                    You must set up family groupings] <br>
                                    <input type="checkbox" name="hourLimit" value="true" disabled=""> Only show users
                                    that
                                    signed up for
                                    <select name="moreLess" disabled="" class="disabled">
                                        <option value="more">at least</option>
                                        <option value="Less">less than</option>
                                    </select>
                                    <input type="text" name="totalHours" value="" style="width:25px;" disabled="">
                                    total hours.
                                </div>
                                <div id="showTimes" class="noFlashHide" style="display: block;">
                                    <div id="reportTimeSelection"></div>
                                </div>
                                <div id="showFields" class="noFlashHide" style="display: block;">
                                    <div id="reportFieldSelection"></div>
                                </div>
                                <br>
                                <input type="button" value="Create Report" class="button btn btn-success disabled"
                                    onclick="javascript:void(0);" disabled="">
                                <br><br>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <img src="slot/images/PRO-stamp_100.png" height="40"
                                            align="center">&nbsp;&nbsp;&nbsp;<strong>This report is available for Pro
                                            Gold &amp;
                                            Platinum subscribers. <a href="/Pro">Learn more</a>.</strong><br
                                            clear="all">
                                    </div>
                                </div>
                                <br><br>
                            </form>
                        </div>
                        <script language="JavaScript">
                        $(window).on('beforeunload', function() {
                            $(window).scrollTop(0); // scroll to the top
                        });




                        function checkAll(field) {
                            for (i = 0; i < field.length; i++)
                                field[i].checked = true;
                        }

                        function uncheckAll(field) {
                            for (i = 0; i < field.length; i++)
                                field[i].checked = false;
                        }

                        function toggleCustomFields(maincheck, allchecks) {
                            var a = document.getElementById(maincheck);
                            var b = allchecks.split(',');
                            if (a.checked) {
                                for (var i = 0; i < b.length; i++) {
                                    document.getElementById(b[i]).checked = true;
                                }
                            } else {
                                for (var i = 0; i < b.length; i++) {
                                    document.getElementById(b[i]).checked = false;
                                }
                            }
                        }


                        function checkboxlimit(checkgroup, limit) {
                            var checkgroup = checkgroup
                            var limit = limit
                            for (var i = 0; i < checkgroup.length; i++) {
                                checkgroup[i].onclick = function() {
                                    var checkedcount = 0
                                    for (var i = 0; i < checkgroup.length; i++)
                                        checkedcount += (checkgroup[i].checked) ? 1 : 0
                                    if (checkedcount > limit) {
                                        alert("You can only select a maximum of " + limit +
                                            " sign ups for your report.")
                                        this.checked = false
                                        loadReportFieldSelection()
                                    }
                                }
                            }
                        }


                        function js_submitCustomReport() {

                            var popup = false;
                            var validForm = true;
                            var listChecked = false;

                            for (var i = 0; i < document.myform.style.length; i++) {
                                if (document.myform.style[i].checked && document.myform.style[i].value.toLowerCase() ==
                                    "slots") {
                                    popup = true;
                                    break
                                }
                            }



                            if (popup) {



                                var urlString = '/index.cfm?go=t.ProcessCustomReportSlotWindow'
                                var strFormData = $("#myform").serializeArray();

                                quickPop(urlString, strFormData, 'Building Report');

                            } else {
                                document.myform.submit();
                            }

                        }



                        $(function() {
                            $("input[name=style]").click(function() {
                                if ($(this).val() == 'slots') {
                                    $('#showFields').show();
                                    loadReportFieldSelection();
                                } else {
                                    $('#showFields').hide();
                                }
                            });

                            $('input[name=listid]:checkbox').click(function() {
                                loadReportFieldSelection();
                            });

                        });


                        function loadReportFieldSelection() {
                            var listIDs = [];
                            $('input[name=listid]:checkbox').each(function() {
                                if ($(this).prop('checked')) {
                                    listIDs.push($(this).val());
                                }
                            });
                            if (listIDs.length == 0) {
                                listIDs.push(0);
                            }
                            ColdFusion.navigate('/view/tools/dspReportFieldSelection.cfm?listID=' + listIDs,
                                'reportFieldSelection');
                            if ($('#style_slots').is(':checked')) {
                                $('#showFields').show();
                            } else {
                                $('#showFields').hide();
                            }
                        }
                        </script>
                    </div>
                </div>
                <div class="tab-pane" id="e">
                    <div id="memPgCenter" class="member-blocks--maincontent-wide">
                        <script src="slot/js/controllers/tools/proToolsViewController.js" type="text/javascript">
                        </script>
                        <script src="slot/js/services/tools/proToolsService.js" type="text/javascript"></script>
                        <h1 class="tools-spacing">Tools</h1>
                        <style>
                        .l-pro-tools--tool:nth-child(2n) {
                            clear: left;
                        }
                        </style>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="spacer-sm"></div>
                                <p><strong><img src="slot/images/PRO-stamp_100.png" height="40" align="center"> These
                                        advanced features are available with premium plans. <a href="/pricing">Learn
                                            more</a>.</strong>
                                </p>
                            </div>
                        </div>
                        <div class="row ng-scope" ng-controller="proToolsViewController">
                            <div ng-init="mpid='128801955'"></div>
                            <div class="l-pro-tools--tool">
                                <div class="l-pro-tools--icon disabled">
                                    <svg class="pro-tools--svg" data-name="Manage Administrators"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96">
                                        <title>Manage Administrators</title>
                                        <path
                                            d="M81.12,55.51a1.05,1.05,0,0,1-.46.12c-.39,0-.66-.3-.66-.81V41H76.26A1.27,1.27,0,0,1,75,39.74V30.26A1.27,1.27,0,0,1,76.26,29H88.74A1.27,1.27,0,0,1,90,30.26v9.48A1.27,1.27,0,0,1,88.74,41H85v10l-3.88,4.46ZM85,34V32H80v2Zm.23,46.86C79.48,65.92,69.47,56.7,54.67,52.69A22.45,22.45,0,0,0,48.5,52a26.87,26.87,0,0,0-7.76.95l-.21.07c-15,3.67-24.9,13.1-31.21,29.67-1.71,4.46-1.48,6.25-1,7,.72,1,3.08,1.58,7,1.6,21.58.06,43.57,0,63,0,4.69,0,7.38-.6,8.21-1.82S87,85.32,85.23,80.86ZM47.47,5A21.64,21.64,0,1,0,69.11,26.64,21.64,21.64,0,0,0,47.47,5Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="l-pro-tools--label">
                                    <span class="cursor-not-allowed">
                                        <h3 class="hrow no-wrap"><b>Manage Administrators&nbsp;</b><img
                                                src="slot/images/PRO-stamp_100.svg" height="35"></h3>
                                    </span>
                                    <div class="sub-text cursor-not-allowed">Set up multiple administrators who can
                                        help manage your sign ups.
                                    </div>
                                </div>
                            </div>
                            <div class="l-pro-tools--tool">
                                <div class="l-pro-tools--icon disabled">
                                    <svg class="pro-tools--svg" data-name="Portal Pages" version="1.0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 3 96 96">
                                        <title>Portal Pages</title>
                                        <path d="M79.1,77.2c-0.3-0.4-0.6-0.5-1.1-0.5H30.3c-0.4,0-0.8,0.2-1.1,0.5s-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2
                                       s0.7,0.5,1.1,0.5H78c0.4,0,0.8-0.2,1.1-0.5c0.3-0.3,0.5-0.7,0.5-1.2v-3.4C79.6,77.9,79.4,77.5,79.1,77.2z M22.7,77.2
                                       c-0.3-0.4-0.7-0.5-1.2-0.5h-3.4c-0.5,0-0.9,0.2-1.2,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2
                                       c0.3,0.3,0.7,0.5,1.2,0.5h3.4c0.5,0,0.9-0.2,1.2-0.5s0.5-0.7,0.5-1.2v-3.4C23.2,77.9,23,77.5,22.7,77.2z M79.1,63.9
                                       c-0.3-0.4-0.6-0.5-1.1-0.5H30.3c-0.4,0-0.8,0.2-1.1,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2s0.7,0.5,1.1,0.5H78
                                       c0.4,0,0.8-0.2,1.1-0.5c0.3-0.3,0.5-0.7,0.5-1.2v-3.4C79.6,64.6,79.4,64.2,79.1,63.9z M22.7,63.9c-0.3-0.4-0.7-0.5-1.2-0.5h-3.4
                                       c-0.5,0-0.9,0.2-1.2,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2c0.3,0.3,0.7,0.5,1.2,0.5h3.4c0.5,0,0.9-0.2,1.2-0.5
                                       s0.5-0.7,0.5-1.2v-3.4C23.2,64.6,23,64.2,22.7,63.9z M79.1,50.5C78.8,50.2,78.5,50,78,50H30.3c-0.4,0-0.8,0.2-1.1,0.5
                                       s-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2s0.7,0.5,1.1,0.5H78c0.4,0,0.8-0.2,1.1-0.5c0.3-0.3,0.5-0.7,0.5-1.2v-3.4
                                       C79.6,51.2,79.4,50.8,79.1,50.5z M22.7,50.5C22.4,50.2,22,50,21.5,50h-3.4c-0.5,0-0.9,0.2-1.2,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4
                                       c0,0.5,0.2,0.9,0.5,1.2c0.3,0.3,0.7,0.5,1.2,0.5h3.4c0.5,0,0.9-0.2,1.2-0.5s0.5-0.7,0.5-1.2v-3.4C23.2,51.2,23,50.8,22.7,50.5z
                                       M79.1,36.2c-0.5-0.5-0.9-0.7-1.5-0.7H18.4c-0.5,0-1,0.2-1.4,0.7s-0.6,1-0.6,1.7v4.8c0,0.7,0.2,1.2,0.6,1.7s0.9,0.7,1.4,0.7h59.3
                                       c0.5,0,1-0.2,1.4-0.7c0.4-0.5,0.6-1,0.6-1.7v-4.8C79.7,37.2,79.5,36.7,79.1,36.2z M79.1,36.2c-0.5-0.5-0.9-0.7-1.5-0.7H18.4
                                       c-0.5,0-1,0.2-1.4,0.7s-0.6,1-0.6,1.7v4.8c0,0.7,0.2,1.2,0.6,1.7s0.9,0.7,1.4,0.7h59.3c0.5,0,1-0.2,1.4-0.7c0.4-0.5,0.6-1,0.6-1.7
                                       v-4.8C79.7,37.2,79.5,36.7,79.1,36.2z M78,76.7H30.3c-0.4,0-0.8,0.2-1.1,0.5s-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2
                                       s0.7,0.5,1.1,0.5H78c0.4,0,0.8-0.2,1.1-0.5c0.3-0.3,0.5-0.7,0.5-1.2v-3.4c0-0.5-0.2-0.9-0.5-1.2C78.8,76.8,78.5,76.7,78,76.7z
                                       M78,63.4H30.3c-0.4,0-0.8,0.2-1.1,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2s0.7,0.5,1.1,0.5H78
                                       c0.4,0,0.8-0.2,1.1-0.5c0.3-0.3,0.5-0.7,0.5-1.2v-3.4c0-0.5-0.2-0.9-0.5-1.2C78.8,63.5,78.5,63.4,78,63.4z M78,50H30.3
                                       c-0.4,0-0.8,0.2-1.1,0.5s-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2s0.7,0.5,1.1,0.5H78c0.4,0,0.8-0.2,1.1-0.5
                                       c0.3-0.3,0.5-0.7,0.5-1.2v-3.4c0-0.5-0.2-0.9-0.5-1.2C78.8,50.2,78.5,50,78,50z M21.5,76.7h-3.4c-0.5,0-0.9,0.2-1.2,0.5
                                       c-0.3,0.3-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2c0.3,0.3,0.7,0.5,1.2,0.5h3.4c0.5,0,0.9-0.2,1.2-0.5s0.5-0.7,0.5-1.2v-3.4
                                       c0-0.5-0.2-0.9-0.5-1.2C22.4,76.8,22,76.7,21.5,76.7z M21.5,63.4h-3.4c-0.5,0-0.9,0.2-1.2,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4
                                       c0,0.5,0.2,0.9,0.5,1.2c0.3,0.3,0.7,0.5,1.2,0.5h3.4c0.5,0,0.9-0.2,1.2-0.5s0.5-0.7,0.5-1.2v-3.4c0-0.5-0.2-0.9-0.5-1.2
                                       C22.4,63.5,22,63.4,21.5,63.4z M21.5,50h-3.4c-0.5,0-0.9,0.2-1.2,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2
                                       c0.3,0.3,0.7,0.5,1.2,0.5h3.4c0.5,0,0.9-0.2,1.2-0.5s0.5-0.7,0.5-1.2v-3.4c0-0.5-0.2-0.9-0.5-1.2S22,50,21.5,50z M89.7,16.3
                                       c-1.5-1.5-3.4-2.3-5.5-2.3H11.9c-2.2,0-4,0.8-5.5,2.3C4.8,17.8,4,19.7,4,21.8v64.4c0,2.1,0.8,4,2.3,5.5S9.7,94,11.8,94h72.3
                                       c2.2,0,4-0.8,5.5-2.3s2.3-3.4,2.3-5.5V21.8C92,19.7,91.2,17.8,89.7,16.3z M85.2,86.9h-0.1c0,0.4-0.2,0.8-0.5,1.1
                                       c-0.3,0.3-0.7,0.5-1.1,0.5H11.1c-0.4,0-0.8-0.2-1.1-0.5s-0.5-0.7-0.5-1.1V33.1c0-0.4,0.2-0.8,0.5-1.1s0.7-0.5,1.1-0.5h72.5
                                       c0.4,0,0.8,0.2,1.1,0.5s0.5,0.7,0.5,1.1V86.9z M77.6,35.5H18.4c-0.5,0-1,0.2-1.4,0.7s-0.6,1-0.6,1.7v4.8c0,0.7,0.2,1.2,0.6,1.7
                                       s0.9,0.7,1.4,0.7h59.3c0.5,0,1-0.2,1.4-0.7c0.4-0.5,0.6-1,0.6-1.7v-4.8c0-0.7-0.2-1.2-0.6-1.7C78.6,35.7,78.2,35.5,77.6,35.5z
                                       M78,76.7H30.3c-0.4,0-0.8,0.2-1.1,0.5s-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2s0.7,0.5,1.1,0.5H78c0.4,0,0.8-0.2,1.1-0.5
                                       c0.3-0.3,0.5-0.7,0.5-1.2v-3.4c0-0.5-0.2-0.9-0.5-1.2C78.8,76.8,78.5,76.7,78,76.7z M78,63.4H30.3c-0.4,0-0.8,0.2-1.1,0.5
                                       c-0.3,0.3-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2s0.7,0.5,1.1,0.5H78c0.4,0,0.8-0.2,1.1-0.5c0.3-0.3,0.5-0.7,0.5-1.2v-3.4
                                       c0-0.5-0.2-0.9-0.5-1.2C78.8,63.5,78.5,63.4,78,63.4z M78,50H30.3c-0.4,0-0.8,0.2-1.1,0.5s-0.5,0.7-0.5,1.2v3.4
                                       c0,0.5,0.2,0.9,0.5,1.2s0.7,0.5,1.1,0.5H78c0.4,0,0.8-0.2,1.1-0.5c0.3-0.3,0.5-0.7,0.5-1.2v-3.4c0-0.5-0.2-0.9-0.5-1.2
                                       C78.8,50.2,78.5,50,78,50z M21.5,76.7h-3.4c-0.5,0-0.9,0.2-1.2,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2
                                       c0.3,0.3,0.7,0.5,1.2,0.5h3.4c0.5,0,0.9-0.2,1.2-0.5s0.5-0.7,0.5-1.2v-3.4c0-0.5-0.2-0.9-0.5-1.2C22.4,76.8,22,76.7,21.5,76.7z
                                       M21.5,63.4h-3.4c-0.5,0-0.9,0.2-1.2,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2c0.3,0.3,0.7,0.5,1.2,0.5h3.4
                                       c0.5,0,0.9-0.2,1.2-0.5s0.5-0.7,0.5-1.2v-3.4c0-0.5-0.2-0.9-0.5-1.2C22.4,63.5,22,63.4,21.5,63.4z M21.5,50h-3.4
                                       c-0.5,0-0.9,0.2-1.2,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2c0.3,0.3,0.7,0.5,1.2,0.5h3.4c0.5,0,0.9-0.2,1.2-0.5
                                       s0.5-0.7,0.5-1.2v-3.4c0-0.5-0.2-0.9-0.5-1.2S22,50,21.5,50z M79.1,36.2c-0.5-0.5-0.9-0.7-1.5-0.7H18.4c-0.5,0-1,0.2-1.4,0.7
                                       s-0.6,1-0.6,1.7v4.8c0,0.7,0.2,1.2,0.6,1.7s0.9,0.7,1.4,0.7h59.3c0.5,0,1-0.2,1.4-0.7c0.4-0.5,0.6-1,0.6-1.7v-4.8
                                       C79.7,37.2,79.5,36.7,79.1,36.2z M79.1,50.5C78.8,50.2,78.5,50,78,50H30.3c-0.4,0-0.8,0.2-1.1,0.5s-0.5,0.7-0.5,1.2v3.4
                                       c0,0.5,0.2,0.9,0.5,1.2s0.7,0.5,1.1,0.5H78c0.4,0,0.8-0.2,1.1-0.5c0.3-0.3,0.5-0.7,0.5-1.2v-3.4C79.6,51.2,79.4,50.8,79.1,50.5z
                                       M79.1,63.9c-0.3-0.4-0.6-0.5-1.1-0.5H30.3c-0.4,0-0.8,0.2-1.1,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2
                                       s0.7,0.5,1.1,0.5H78c0.4,0,0.8-0.2,1.1-0.5c0.3-0.3,0.5-0.7,0.5-1.2v-3.4C79.6,64.6,79.4,64.2,79.1,63.9z M79.1,77.2
                                       c-0.3-0.4-0.6-0.5-1.1-0.5H30.3c-0.4,0-0.8,0.2-1.1,0.5s-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2s0.7,0.5,1.1,0.5H78
                                       c0.4,0,0.8-0.2,1.1-0.5c0.3-0.3,0.5-0.7,0.5-1.2v-3.4C79.6,77.9,79.4,77.5,79.1,77.2z M22.7,50.5C22.4,50.2,22,50,21.5,50h-3.4
                                       c-0.5,0-0.9,0.2-1.2,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2c0.3,0.3,0.7,0.5,1.2,0.5h3.4c0.5,0,0.9-0.2,1.2-0.5
                                       s0.5-0.7,0.5-1.2v-3.4C23.2,51.2,23,50.8,22.7,50.5z M22.7,63.9c-0.3-0.4-0.7-0.5-1.2-0.5h-3.4c-0.5,0-0.9,0.2-1.2,0.5
                                       c-0.3,0.3-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2c0.3,0.3,0.7,0.5,1.2,0.5h3.4c0.5,0,0.9-0.2,1.2-0.5s0.5-0.7,0.5-1.2v-3.4
                                       C23.2,64.6,23,64.2,22.7,63.9z M22.7,77.2c-0.3-0.4-0.7-0.5-1.2-0.5h-3.4c-0.5,0-0.9,0.2-1.2,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4
                                       c0,0.5,0.2,0.9,0.5,1.2c0.3,0.3,0.7,0.5,1.2,0.5h3.4c0.5,0,0.9-0.2,1.2-0.5s0.5-0.7,0.5-1.2v-3.4C23.2,77.9,23,77.5,22.7,77.2z
                                       M79.1,36.2c-0.5-0.5-0.9-0.7-1.5-0.7H18.4c-0.5,0-1,0.2-1.4,0.7s-0.6,1-0.6,1.7v4.8c0,0.7,0.2,1.2,0.6,1.7s0.9,0.7,1.4,0.7h59.3
                                       c0.5,0,1-0.2,1.4-0.7c0.4-0.5,0.6-1,0.6-1.7v-4.8C79.7,37.2,79.5,36.7,79.1,36.2z M78,76.7H30.3c-0.4,0-0.8,0.2-1.1,0.5
                                       s-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2s0.7,0.5,1.1,0.5H78c0.4,0,0.8-0.2,1.1-0.5c0.3-0.3,0.5-0.7,0.5-1.2v-3.4
                                       c0-0.5-0.2-0.9-0.5-1.2C78.8,76.8,78.5,76.7,78,76.7z M78,63.4H30.3c-0.4,0-0.8,0.2-1.1,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4
                                       c0,0.5,0.2,0.9,0.5,1.2s0.7,0.5,1.1,0.5H78c0.4,0,0.8-0.2,1.1-0.5c0.3-0.3,0.5-0.7,0.5-1.2v-3.4c0-0.5-0.2-0.9-0.5-1.2
                                       C78.8,63.5,78.5,63.4,78,63.4z M78,50H30.3c-0.4,0-0.8,0.2-1.1,0.5s-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2s0.7,0.5,1.1,0.5H78
                                       c0.4,0,0.8-0.2,1.1-0.5c0.3-0.3,0.5-0.7,0.5-1.2v-3.4c0-0.5-0.2-0.9-0.5-1.2C78.8,50.2,78.5,50,78,50z M21.5,76.7h-3.4
                                       c-0.5,0-0.9,0.2-1.2,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2c0.3,0.3,0.7,0.5,1.2,0.5h3.4c0.5,0,0.9-0.2,1.2-0.5
                                       s0.5-0.7,0.5-1.2v-3.4c0-0.5-0.2-0.9-0.5-1.2C22.4,76.8,22,76.7,21.5,76.7z M21.5,63.4h-3.4c-0.5,0-0.9,0.2-1.2,0.5
                                       c-0.3,0.3-0.5,0.7-0.5,1.2v3.4c0,0.5,0.2,0.9,0.5,1.2c0.3,0.3,0.7,0.5,1.2,0.5h3.4c0.5,0,0.9-0.2,1.2-0.5s0.5-0.7,0.5-1.2v-3.4
                                       c0-0.5-0.2-0.9-0.5-1.2C22.4,63.5,22,63.4,21.5,63.4z M21.5,50h-3.4c-0.5,0-0.9,0.2-1.2,0.5c-0.3,0.3-0.5,0.7-0.5,1.2v3.4
                                       c0,0.5,0.2,0.9,0.5,1.2c0.3,0.3,0.7,0.5,1.2,0.5h3.4c0.5,0,0.9-0.2,1.2-0.5s0.5-0.7,0.5-1.2v-3.4c0-0.5-0.2-0.9-0.5-1.2
                                       S22,50,21.5,50z"></path>
                                    </svg>
                                </div>
                                <div class="l-pro-tools--label">
                                    <span class="cursor-not-allowed">
                                        <h3 class="hrow no-wrap">
                                            <b>Portal Pages&nbsp;</b>
                                            <img src="slot/images/PRO-stamp_100.svg" height="35">
                                            <span class="smalltextlite ng-scope"
                                                style="line-height: 1rem;vertical-align:text-bottom;">Enterprise</span>
                                        </h3>
                                    </span>
                                    <div class="sub-text cursor-not-allowed">Create a custom landing page to display
                                        sign ups and provide additional information.
                                    </div>
                                </div>
                            </div>
                            <div class="l-pro-tools--tool">
                                <div class="l-pro-tools--icon disabled">
                                    <svg class="pro-tools--svg" data-name="Calendar Subscriptions"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 -2 96 96">
                                        <title>Calendar Subscriptions</title>
                                        <path
                                            d="M4,15.85A3.86,3.86,0,0,1,7.85,12H16V7.85A3.86,3.86,0,0,1,19.85,4h4.3A3.86,3.86,0,0,1,28,7.85V12H69V7.85A3.86,3.86,0,0,1,72.85,4h4.3A3.86,3.86,0,0,1,81,7.85V12h7.15A3.86,3.86,0,0,1,92,15.85V25H4Zm0,72.3V28H92V88.15A3.86,3.86,0,0,1,88.15,92H7.85A3.86,3.86,0,0,1,4,88.15ZM24,53V41H12V53Zm0,16V57H12V69Zm0,15V72H12V84ZM39,53V41H27V53Zm0,16V57H27V69Zm0,15V72H27V84ZM54,53V41H42V53Zm0,16V57H42V69Zm0,15V72H42V84ZM69,53V41H57V53Zm0,16V57H57V69Zm0,15V72H57V84ZM85,53V41H73V53Zm0,16V57H73V69Zm0,15V72H73V84Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="l-pro-tools--label">
                                    <span class="cursor-not-allowed">
                                        <h3 class="hrow no-wrap"><b>Calendar Subscriptions&nbsp;</b><img
                                                src="slot/images/PRO-stamp_100.svg" height="35"></h3>
                                    </span>
                                    <div class="sub-text cursor-not-allowed">Sync entire sign ups with dates/times
                                        to your digital calendar.
                                    </div>
                                </div>
                            </div>
                            <div class="l-pro-tools--tool">
                                <div class="l-pro-tools--icon disabled">
                                    <svg class="pro-tools--svg" data-name="Custom Themes"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="-5 -5 96 96">
                                        <title>Custom Themes</title>
                                        <path
                                            d="M15.76,23.73H6.35a2.35,2.35,0,0,1,0-4.7h9.41V9.62a2.36,2.36,0,1,1,4.71,0V19h9.41a2.35,2.35,0,1,1,0,4.7H20.47v9.42a2.36,2.36,0,0,1-4.71,0ZM53.41,80.67H48.24V75.5a1.89,1.89,0,0,0-3.77,0v5.17H39.29a1.89,1.89,0,0,0,0,3.77h5.18v5.18a1.89,1.89,0,0,0,3.77,0V84.44h5.17a1.89,1.89,0,0,0,0-3.77ZM91.06,51H87.29V47.26a.94.94,0,1,0-1.88,0V51H81.65a.94.94,0,1,0,0,1.88h3.76v3.76a.94.94,0,1,0,1.88,0V52.91h3.77a.94.94,0,0,0,0-1.88ZM84.87,35Q72.36,47.34,60.11,59.9c-1.7,1.73-3.27,2.33-5.35.84A9.83,9.83,0,0,0,53,59.91c-9.52-4-12.78-3-16.86,6.48-2.62,6.07-6.69,10.41-12.6,12.79a18.92,18.92,0,0,1-8.61.9c-3.16-.32-4.59-3.32-4.55-9.93.44-5,4.43-9.72,10.26-13.12,2.32-1.36,4.88-2.3,7.21-3.65,5.21-3.05,6-5,4.5-10.82A14.16,14.16,0,0,0,31,38.18c-2.56-3.83-1-6.29,1.94-9.13C40.72,21.6,48.29,13.88,55.8,6.13,57.91,4,59.3,4,61.41,6.13Q73,18,84.8,29.64C86.8,31.6,86.92,33,84.87,35ZM19.45,67.51c-3.08.64-3.31,2.94-3.12,3.86.28,1.32,1.4,2.06,3.11,2.06s3-1.11,3.09-2.16C22.6,70,22.53,68.15,19.45,67.51ZM61.46,53c-.43.12-.43-.4-.71-.48L38.64,29.59c-1.19,1.08-2.47,2.26-3.93,3.57L58,56C59.2,54.84,60,54.33,61.46,53ZM79.2,32.2c-6.53-6.39-12.69-12.39-18.78-18.47-1.5-1.48-2.6-1.1-3.88.22-2.32,2.42-4.85,4.64-7,7.19-.94,1.1-2.56,3.6-1.71,4.26.88.49,3.33.28,4.91,0,2.35-.46,6-3.15,6.94-2,.94.87-.41,4.85-1,7.18-.83,3.18-.26,3.94,3.13,3.42,4.3-.66,5.2.3,4.63,4.72-.12.93-.48,1.82.23,2.85.76.38,2.61-.24,3.43-.94C73.05,38.13,75.77,35.41,79.2,32.2Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="l-pro-tools--label">
                                    <span class="cursor-not-allowed">
                                        <h3 class="hrow no-wrap"><b>Custom Themes&nbsp;</b><img
                                                src="slot/images/PRO-stamp_100.svg" height="35"></h3>
                                    </span>
                                    <div class="sub-text cursor-not-allowed">Create custom designs for your sign ups
                                        to get the personalized look you want.
                                    </div>
                                </div>
                            </div>
                            <div class="l-pro-tools--tool">
                                <div class="l-pro-tools--icon">
                                    <a href=""
                                        ng-click="proToolsHelper('Edit People on a Sign Up','Edit',128801955,'ManagePeople')">
                                        <svg class="pro-tools--svg" data-name="Edit People on Sign Ups"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96">
                                            <title>Edit People on Sign Ups</title>
                                            <path
                                                d="M69.79,55.28a.15.15,0,0,1-.17-.17.49.49,0,0,1,0-.15L72,48.81l4.08,4.08L70,55.25Zm3.46-7.71L86.08,34.74l4.08,4.08L77.33,51.65ZM87.32,33.51l2-2a.73.73,0,0,1,.51-.21.75.75,0,0,1,.52.21l3.05,3.06a.71.71,0,0,1,.21.51.73.73,0,0,1-.21.51l-2,2ZM85.23,80.86C79.48,65.92,69.47,56.7,54.67,52.69A22.45,22.45,0,0,0,48.5,52a26.87,26.87,0,0,0-7.76.95l-.21.07c-15,3.67-24.9,13.1-31.21,29.67-1.71,4.46-1.48,6.25-1,7,.72,1,3.08,1.58,7,1.6,21.58.06,43.57,0,63,0,4.69,0,7.38-.6,8.21-1.82S87,85.32,85.23,80.86ZM47.47,5A21.64,21.64,0,1,0,69.11,26.64,21.64,21.64,0,0,0,47.47,5Z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="l-pro-tools--label">
                                    <a href=""
                                        ng-click="proToolsHelper('Edit People on a Sign Up','Edit',128801955,'ManagePeople')">
                                        <h3 class="hrow no-wrap"><b>Edit People on Sign Ups&nbsp;</b><img
                                                style="opacity:0" src="slot/images/PRO-stamp_100.svg" height="35"></h3>
                                    </a>
                                    <div class="sub-text">Manage participants and update their info on your sign
                                        ups.
                                    </div>
                                </div>
                            </div>
                            <div class="l-pro-tools--tool">
                                <div class="l-pro-tools--icon disabled">
                                    <svg class="pro-tools--svg" data-name="Sign Up Tabbing"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 96 96">
                                        <title>Sign Up Tabbing</title>
                                        <path
                                            d="M92.64,35.1c0,14.21,0,46.9,0,46.9H3S3,36.13,3,18.72a4,4,0,0,1,4-4c7.21-.08,14.43.13,21.64-.08,3.4-.09,4.84.94,4.73,4.55-.12,4.11-.06,7.8-.06,7.8s3.43.1,7.92.11c14.52,0,29,0,43.56,0C92.29,27.11,92.64,27.84,92.64,35.1ZM60.26,17.63A4,4,0,0,0,59.42,16a3.06,3.06,0,0,0-1.93-1.17C50.64,14.55,44,14.63,37,14.63V25H60.38C60.38,22.3,60.68,19.86,60.26,17.63Zm26.9,0a3.36,3.36,0,0,0-.33-.91,3.37,3.37,0,0,0-2.38-1.92c-6.86-.25-14-.17-20.45-.17V25H87.29C87.29,22.3,87.58,19.86,87.16,17.63Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="l-pro-tools--label">
                                    <span class="cursor-not-allowed">
                                        <h3 class="hrow no-wrap"><b>Sign Up Tabbing&nbsp;</b><img
                                                src="slot/images/PRO-stamp_100.svg" height="35"></h3>
                                    </span>
                                    <div class="sub-text cursor-not-allowed">Display multiple tabbed sign ups on one
                                        page for easy navigation.
                                    </div>
                                </div>
                            </div>
                            <div class="l-pro-tools--tool">
                                <div class="l-pro-tools--icon">
                                    <a href=""
                                        ng-click="proToolsHelper('Print a Sign Up','Print',128801955,'ViewReports')">
                                        <svg class="pro-tools--svg" data-name="Print a Sign Up"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96">
                                            <title>Print a Sign Up</title>
                                            <path
                                                d="M4.83,81a1.94,1.94,0,0,1-1.83-2V26.84A1.84,1.84,0,0,1,4.84,25H16a2,2,0,0,1,2,2v11.2A1.85,1.85,0,0,0,19.84,40H76.16A1.84,1.84,0,0,0,78,38.16V26.84A1.84,1.84,0,0,1,79.84,25H91.16A1.84,1.84,0,0,1,93,26.84V79a2,2,0,0,1-2,2H77.59a2.54,2.54,0,0,1-2.28-1.83l-1.4-7.39A2.48,2.48,0,0,0,71.63,70H24.37a2.52,2.52,0,0,0-2.28,1.81l-1.4,7.36A2.54,2.54,0,0,1,18.41,81Zm8.9-48.18a3.68,3.68,0,1,0-3.68,3.69A3.68,3.68,0,0,0,13.73,32.82ZM21,34.19l-.15-21.37a2.09,2.09,0,0,1,2-1.82H73a2.08,2.08,0,0,1,2,1.82l-.15,21.37A1.61,1.61,0,0,1,73.21,36H22.64A1.61,1.61,0,0,1,21,34.19Zm1.91,52.42a1.65,1.65,0,0,1,.06-.43l2.85-11.39A2.47,2.47,0,0,1,28.11,73H67.67A2.49,2.49,0,0,1,70,74.78l2.85,11.4a2.18,2.18,0,0,1,0,.43A1.38,1.38,0,0,1,71.39,88h-47A1.39,1.39,0,0,1,22.91,86.61Z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="l-pro-tools--label">
                                    <a href=""
                                        ng-click="proToolsHelper('Print a Sign Up','Print',128801955,'ViewReports')">
                                        <h3 class="hrow no-wrap"><b>Print a Sign Up&nbsp;</b><img style="opacity:0"
                                                src="slot/images/PRO-stamp_100.svg" height="35"></h3>
                                    </a>
                                    <div class="sub-text">Choose a sign up and generate a print out of participants
                                        and slots.
                                    </div>
                                </div>
                            </div>
                            <div class="l-pro-tools--tool">
                                <div class="l-pro-tools--icon disabled">
                                    <svg class="pro-tools--svg" data-name="SignUpGenius API"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 -2 96 96">
                                        <title>SignUpGenius API</title>
                                        <path
                                            d="M12,86.27V80.73A2.74,2.74,0,0,1,14.73,78H31.27A2.74,2.74,0,0,1,34,80.73v5.54A2.74,2.74,0,0,1,31.27,89H14.73A2.74,2.74,0,0,1,12,86.27ZM15.21,67H21V55.37A1.38,1.38,0,0,1,22.37,54H45V47h6v7H73.63A1.38,1.38,0,0,1,75,55.37V67h5.79l-8.08,8.4L64.64,67H70V60H51v7h4.79l-8.08,8.4L39.64,67H45V60H26v7h5.36l-8.07,8.4ZM37,86.27V80.73A2.74,2.74,0,0,1,39.73,78H56.27A2.74,2.74,0,0,1,59,80.73v5.54A2.74,2.74,0,0,1,56.27,89H39.73A2.74,2.74,0,0,1,37,86.27Zm25,0V80.73A2.74,2.74,0,0,1,64.73,78H81.27A2.74,2.74,0,0,1,84,80.73v5.54A2.74,2.74,0,0,1,81.27,89H64.73A2.74,2.74,0,0,1,62,86.27ZM10.38,46.75A1.32,1.32,0,0,1,9,45.5V44.25A1.32,1.32,0,0,1,10.38,43H18V9.73A2.74,2.74,0,0,1,20.73,7H75.27A2.74,2.74,0,0,1,78,9.73V43h6.63A1.37,1.37,0,0,1,86,44.37V45.5a1.32,1.32,0,0,1-1.37,1.25L83.25,48H11.75ZM74,43V11H22V43Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="l-pro-tools--label">
                                    <span class="cursor-not-allowed">
                                        <h3 class="hrow no-wrap"><b>SignUpGenius API&nbsp;</b><img
                                                src="slot/images/PRO-stamp_100.svg" height="35"></h3>
                                    </span>
                                    <div class="sub-text cursor-not-allowed">Integrate SignUpGenius data into your
                                        own applications.
                                    </div>
                                </div>
                            </div>
                            <div class="l-pro-tools--tool">
                                <div class="l-pro-tools--icon">
                                    <a href="/index.cfm?go=t.buttonbuilder">
                                        <svg class="pro-tools--svg" data-name="Web Button Builder"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 -6 96 96">
                                            <title>Web Button Builder</title>
                                            <path
                                                d="M93,24.13V65.87A3.13,3.13,0,0,1,89.87,69H81.05L57.94,39.37,51,30.47V69H6.13A3.13,3.13,0,0,1,3,65.87V24.13A3.13,3.13,0,0,1,6.13,21H89.87A3.13,3.13,0,0,1,93,24.13ZM80,73,55,41.26V83.33l6.39-6.16,1.43,4.06,1.88,5.33L75,82.92l-2.12-6L71.54,73Z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="l-pro-tools--label">
                                    <a href="/index.cfm?go=t.buttonbuilder">
                                        <h3 class="hrow no-wrap"><b>Web Button Builder&nbsp;</b><img style="opacity:0"
                                                src="slot/images/PRO-stamp_100.svg" height="35"></h3>
                                    </a>
                                    <div class="sub-text">Create a sign up button to embed on your website for easy
                                        access to your sign ups.
                                    </div>
                                </div>
                            </div>
                            <div class="l-pro-tools--tool">
                                <div class="l-pro-tools--icon disabled">
                                    <svg class="pro-tools--svg" data-name="GeniusDrive"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96">
                                        <title>GeniusDrive</title>
                                        <path
                                            d="M6,78.34V75a7,7,0,0,1,6.94-6.94H83.06A7,7,0,0,1,90,75v3.31a7,7,0,0,1-6.94,6.93H12.94A7,7,0,0,1,6,78.34ZM19.74,16.08a4.51,4.51,0,0,1,4.19-3.35H72.07a4.53,4.53,0,0,1,4.2,3.35L88.16,65.53a10.28,10.28,0,0,0-4.84-1.26H12.68a10.28,10.28,0,0,0-4.84,1.26Zm56.9,62.51V74.77H72.82v3.82Zm7.63,0V74.77H80.45v3.82Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="l-pro-tools--label">
                                    <span class="cursor-not-allowed">
                                        <h3 class="hrow no-wrap"><b>GeniusDrive&nbsp;</b><img
                                                src="slot/images/PRO-stamp_100.svg" height="35">
                                        </h3>
                                    </span>
                                    <div class="sub-text cursor-not-allowed">Access cloud file storage for
                                        attachments and images displayed on your sign ups.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <style>
                        .cursor-not-allowed {
                            cursor: not-allowed;
                        }
                        </style>
                    </div>
                </div>
                <div class="tab-pane" id="f">FFFFFFThirdamuno, ipsum dolor sit amet, consectetur adipiscing elit.
                    Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt
                    condimentum vitae.
                </div>
            </div>
        </div>
    </div>
    </div>



    </div>
    </div>
    <style>
    footer {
        margin-top: 40px;
        background: #2B2B2B;
    }

    .footer_inner h2 {
        font-style: normal;
        font-weight: normal;
        font-size: 22px;
        line-height: 16px;
        color: #FFFFFF;
        margin: 0 0 30px 0;
        padding: 0;
    }

    .footer_inner ul li a {
        font-style: normal;
        font-weight: normal;
        font-size: 15px;
        text-decoration: none;
        color: #9E9E9E;
        transition: .5s;
    }

    .contact_footer_box p {
        font-style: normal;
        font-weight: normal;
        font-size: 15px;
        line-height: 18px;
        color: #9E9E9E;
        margin: 0 0 10px 0;
        padding: 2px 0 2px 32px;
    }

    .copy_right {
        padding: 20px 0;
        border-top: 1px solid #3a3b3d;
    }

    .copy_right_inner p {
        font-style: normal;
        font-weight: 300;
        font-size: 15px;
        line-height: 18px;
        color: #595959;
        margin: 0;
        padding: 0;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        top: 50%;
        left: 50%;
        color: #4a4a4a;
        max-width: 100%;
        position: relative;
        border-radius: 10px;
        border: 1px solid #ccc;
        width: 40%;
        /* Could be more or less, depending on screen size */
        transform: translate(-50%, -50%);
    }

    .modal-header {
        align-items: stretch;
        box-shadow: 0 1px 1px rgb(10 10 10 / 10%);
        display: flex;
    }

    .modal-header-title {
        align-items: center;
        color: #363636;
        display: flex;
        flex-grow: 1;
        font-weight: 700;
        padding: 5px 15px;
    }

    .modal-header-icon {
        background: 0 0;
        border: none;
        color: currentColor;
        font-family: inherit;
        font-size: 1em;
        margin: 0;
        padding: 0;
        align-items: center;
        cursor: pointer;
        display: flex;
        justify-content: center;
        padding: 0.75rem 1rem;
    }

    #modal-content.animation-1 {
        animation: animation-1 0.5s forwards;
    }

    .modal-body {
        padding: 5px 40px;
    }

    @keyframes animation-1 {
        0% {
            transform: translate(-50%, -50%) scale(0);
        }

        50% {
            transform: translate(-50%, -50%) scale(1.2);
        }

        70% {
            transform: translate(-50%, -50%) scale(0.9);
        }

        100% {
            transform: translate(-50%, -50%) scale(1);
        }
    }
    </style>
    @include('slot/layout.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script>
    (function() {
        var d = document,
            tabs = d.querySelector('.tabs'),
            tab = d.querySelectorAll('li'),
            contents = d.querySelectorAll('.content');
        tabs.addEventListener('click', function(e) {
            if (e.target && e.target.nodeName === 'LI') {
                // change tabs
                for (var i = 0; i < tab.length; i++) {
                    tab[i].classList.remove('active');
                }
                e.target.classList.toggle('active');


                // change content
                for (i = 0; i < contents.length; i++) {
                    contents[i].classList.remove('active');
                }

                var tabId = '#' + e.target.dataset.tabId;
                d.querySelector(tabId).classList.toggle('active');
            }
        });
    })();
    </script>
    <script>
    var tabsFn = (function() {

        function init() {
            setHeight();
        }

        function setHeight() {
            var $tabPane = $('.tab-pane'),
                tabsHeight = $('.nav-tabs').height();

            $tabPane.css({
                height: tabsHeight
            });
        }

        $(init);
    })();
    </script>
    <script>
    function openCity(evt, cityName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    </script>
    <script>
    // Get the modal
    var modal9 = document.getElementById("myModal9");

    // Get the button that opens the modal
    var btn9 = document.getElementById("open-modal9");

    // Get the <span> element that closes the modal
    var span9 = document.getElementById("close9");

    // When the user clicks on the button, open the modal
    btn9.onclick = function() {
        modal9.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span9.onclick = function() {
        modal9.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
</body>

</html>