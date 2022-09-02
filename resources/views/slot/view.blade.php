<!DOCTYPE html>
<html data-ng-app="SUGApp" lang="en-US">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Home</title>
      <script type="text/javascript"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
         integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link rel="stylesheet" href="slot/dist/css/SUGstyleV3-responsive.minf4a1.css?v=1636996767345">
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
      
      <script type="text/javascript" src="slot/dist/js/lib/jquery-1.11.1.minf4a1.js?v=1636996767345"></script>
   </head>
   <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
/*     
    tr:nth-child(even) {
      background-color: #dddddd;
    } */
    </style>
   <style>/*
    CSS for the main interaction
   */.datainputs{
  margin-top:20px;
}
.datainputs input{
    font-size: 18px;
    line-height: 21px;
    color: #3D3D3D;
    height: 40px;
    padding: 0px 20px;
    border-radius: 5px;
    border: 1px solid #ddd;
    box-shadow: 0px 0px 1px #D8D8D8;
    margin: 0px 30px 20px 0px !important;
  }
  .inputRemove{color: #fff !important;
    background: #056b99;}
    .add_input{color: #fff !important;
    background: #056b99;border: none !important;}
input:focus{
  outline:none;
}
.add_input, .inputRemove{
  display: inline-block;
  color:#3d3d3d;
  text-align:center;
  text-decoration:none;
  width:auto;
  height:40px;
  line-height:40px;
  border:2px solid #3d3d3d;
  padding:0px 15px;
  border-radius: 5px;
}
.inputRemove{
cursor:pointer;
}
   .tabset > input[type="radio"] {
     position: absolute;
     left: -200vw;
   }
   
   .tabset .tab-panel {
     display: none;
   }
   
   .tabset > input:first-child:checked ~ .tab-panels > .tab-panel:first-child,
   .tabset > input:nth-child(3):checked ~ .tab-panels > .tab-panel:nth-child(2),
   .tabset > input:nth-child(5):checked ~ .tab-panels > .tab-panel:nth-child(3),
   .tabset > input:nth-child(7):checked ~ .tab-panels > .tab-panel:nth-child(4),
   .tabset > input:nth-child(9):checked ~ .tab-panels > .tab-panel:nth-child(5),
   .tabset > input:nth-child(11):checked ~ .tab-panels > .tab-panel:nth-child(6) {
     display: block;
   }
   
   /*
    Styling
   */
   body {
     font: 16px/1.5em "Overpass", "Open Sans", Helvetica, sans-serif;
     color: #333;
     font-weight: 300;
   }
   
   .tabset > label {
     position: relative;
     display: inline-block;
     padding: 15px 15px 25px;
     border: 1px solid transparent;
     border-bottom: 0;
     cursor: pointer;
     font-weight: 600;
   }
   
   .tabset > label::after {
     content: "";
     position: absolute;
     left: 15px;
     bottom: 10px;
     width: 22px;
     height: 4px;
     background: #8d8d8d;
   }
   
   .tabset > label:hover,
   .tabset > input:focus + label {
     color: #06c;
   }
   
   .tabset > label:hover::after,
   .tabset > input:focus + label::after,
   .tabset > input:checked + label::after {
     background: #06c;
   }
   
   .tabset > input:checked + label {
     border-color: #ccc;
     border-bottom: 1px solid #fff;
     margin-bottom: -1px;
   }
   
   .tab-panel {
     padding: 30px 0;
     border-top: 1px solid #ccc;
   }
   
  
   .tabset {
     max-width: 65em;
   }</style>
   <body>
    
        
        
         
         
        
      <header class="no-print header--responsive">
         <div class="container">
            <div class="logo"><a href="index.html"><img src="slot/images/logo.png"
               onerror="this.onerror=null; this.src='images/logo.png'" alt="" /></a></div>
            <nav>
               <div class="menu-trigger">
                  <div class="chzbrgr btn collapsed" id="trigger-top-nav" type="button" data-toggle="collapse"
                     data-target="#main-nav" aria-expanded="false" aria-controls="collapseHeader">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="chzbrgr-layer"></span>
                     <span class="chzbrgr-layer"></span>
                     <span class="chzbrgr-layer"></span>
                     <span class="chzbrgr-layer"></span>
                  </div>
               </div>
               <div class="collapse navbar-collapse cover-menu no-transition" id="main-nav">
                  <div class="hidden-xs">
                     <ul class="nav navbar-nav navbar-right">
                        <li><a href="register.html" class="profile" alt="Log In or Register" popover="Log In or Register"
                           popover-placement="bottom" popover-trigger="mouseenter" popover-popup-delay="300"
                           popover-enable="true">Log In</a></li>
                        <li class="nav-item--search"><a href="findasignup.html"
                           aria-label="Search a sign up or site resources"><span class="sugicon-search">
                           </span></a>
                        </li>
                     </ul>
                     <div class="nav navbar-form navbar-right dropdown nav-dropdown-menu">
                     </div>
                     <div class="nav navbar-form navbar-right hidden-xs">
                        <a href="indexebcf.html"><button class="btn btn-green black-shadow-active">Create a Sign
                        Up</button></a>
                     </div>
                  </div>
               </div>
            </nav>
         </div>
      </header>
      <div class="mainbody">
         <div class="container">
            <div id="protoolsbar" class="member-blocks--sidebar no-print">
               <ul class="nav nav-tabs member-sidebar--menu">
                  <li id="member-sidebar--menu-signupsid" class="active" style="float: none !important;">
                     <a href="#a"
                        data-toggle="tab">
                        <div class="menu-icon">
                           <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="22px" height="36px"
                              viewBox="0 0 32 36.5" style="enable-background:new 0 0 32.3 38; margin-left:4px;"
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
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="30px" height="38px"
                     viewBox="0 0 40 28" style="enable-background:new 0 0 42 31;" xml:space="preserve">
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
                  <li id="member-sidebar--menu-messagesid"><a href="#c" data-toggle="tab">
                  <div class="menu-icon">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="23px" height="35px"
                     viewBox="0 0 32 37.75" style="enable-background:new 0 0 32 37.3;" xml:space="preserve">
                  <path class="menu-icon-fill" d="M2.7,16H0L16,0l16,16h-2.7l-2,2l-8.7-8.7L5.4,18.7L2.7,16z M0,16l9.3,9.3L0,34.7V16z M10.7,26.7h10.7L32,37.3H0
                     L10.7,26.7z M22.7,25.3L32,16v18.7L22.7,25.3z"></path>
                  </svg>
                  </div>
                  </a></li>
                  <li id="member-sidebar--menu-messagesid"><a href="#d" data-toggle="tab">
                  <div class="menu-icon">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="26px" height="38px"
                     viewBox="0 0 36 36" style="enable-background:new 0 0 36 32;" xml:space="preserve">
                  <path class="menu-icon-fill" d="M0,29.3h2.7v-6c0-0.4,0.3-0.7,0.7-0.7h5.3c0.4,0,0.7,0.3,0.7,0.7v6h1.3v-14c0-0.4,0.3-0.7,0.7-0.7h5.3
                     c0.4,0,0.7,0.3,0.7,0.7v14h1.3V0.7C18.7,0.3,19,0,19.3,0h5.3c0.4,0,0.7,0.3,0.7,0.7v28.7h1.3V10c0-0.4,0.3-0.7,0.7-0.7h5.3
                     c0.4,0,0.7,0.3,0.7,0.7v19.3H36V32H0V29.3z"></path>
                  </svg>
                  </div>
                  </a></li>
                  <li id="member-sidebar--menu-messagesid"><a href="#e" data-toggle="tab">
                  <div class="menu-icon">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="26px" height="41px"
                     viewBox="0 0 31.4 31.6" style="enable-background:new 0 0 31.4 31.6;" xml:space="preserve">
                  <path class="menu-icon-fill" d="M5.4,10C5.2,9.7,4.7,9.5,4.3,9.6l-0.7,0c-0.4,0-0.8-0.2-1-0.5L0.1,5.3C0,5.1,0,5,0,4.8c0-0.2,0.1-0.4,0.2-0.6
                     l1.9-1.9c0.2-0.2,0.4-0.2,0.6-0.2c0.2,0,0.3,0,0.4,0.1L7,4.7c0.3,0.2,0.5,0.7,0.5,1l0,0.7c0,0.4,0.2,0.9,0.4,1.1l4.1,4l-2.6,2.4
                     L5.4,10z M1,27.5c-0.3-0.3-0.4-0.6-0.4-0.9s0.1-0.7,0.4-0.9l15.4-15.4C16.1,9.5,16,8.7,16,7.9c0-2.7,1.4-5.3,4-6.8
                     C21.2,0.4,22.6,0,23.9,0c1.3,0,2.7,0.4,4,1.3l-6.6,3.5l3.7,5.9l6.4-3.2c0,0.2,0,0.4,0,0.6c0,2.9-1.5,4.9-3.9,6.3
                     c-1.2,0.7-2.6,1-3.9,1c-0.9,0-1.7-0.1-2.6-0.4L5.7,30.3c-0.3,0.3-0.6,0.4-0.9,0.4c-0.3,0-0.7-0.1-0.9-0.4L1,27.5z M24.5,31.6
                     c-0.2,0-0.3-0.1-0.5-0.2l-7.7-8.5l4.7-4.9l8.6,7.8c0.1,0.1,0.2,0.3,0.2,0.5c0,0.2-0.1,0.3-0.2,0.5L25,31.4
                     C24.9,31.6,24.7,31.6,24.5,31.6z"></path>
                  </svg>
                  </div>
                  </a></li>
                  <li id="member-sidebar--menu-messagesid"> <a href="#f" data-toggle="tab">
                  <div class="menu-icon">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="26px" height="40px"
                     viewBox="0 0 40 28.6" style="enable-background:new 0 0 40 28.6;" xml:space="preserve">
                  <path class="menu-icon-fill" d="M0,8.6h31.4v20H0V8.6z M24.2,25.7c0-2.9,2-4.4,4.4-4.4v-5.4c-2.4,0-4.4-1.6-4.4-4.4H7.3c0,2.9-2,4.4-4.4,4.4
                     v5.4c2.4,0,4.4,1.6,4.4,4.4H24.2z M32.9,7.1H4.3V4.3h31.4v20h-2.9V7.1z M37.1,2.9H8.6V0H40v20h-2.9V2.9z M11.5,18.6
                     c0-2.4,1.9-4.3,4.3-4.3s4.3,1.9,4.3,4.3c0,2.4-1.9,4.3-4.3,4.3S11.5,20.9,11.5,18.6z M18.7,18.6c0-1.7-1.4-3-3-3c-1.7,0-3,1.4-3,3
                     c0,1.7,1.4,3,3,3C17.4,21.6,18.7,20.2,18.7,18.6z"></path>
                  </svg>
                  </div>
                  </a></li>
               </ul>
               </div>
               <div class="tabs-left">
                  <div class="tab-content">
                     <div class="tab-pane active" id="a">
                        <div id="memPgCenter" class="member-blocks--maincontent-wide">
                           <div id="wizardView" data-ng-view="" class="ng-scope">
                              <div id="signupWizardContainer" class="l-wizard row ng-scope">
                                 <div class="col-xs-12">
                                    <h1 class="hrow wizard-heading ng-binding">Edit Sign Up
                                       <small class="h2 text-darkgray fade-in ng-binding ng-scope"
                                          data-ng-if="w0.signupinfo.signup.title.length"> dfgbfgbfgb</small>
                                    </h1>
                                 </div>
                                 <div class="col-xs-12" data-ng-show="w0.initialized">
                                    <div class="btn-tabs">
                                       <button class="btn btn-tab ng-binding tablinks" onclick="openCity(event, 'Lon')">Design</button>
                                       <button class="btn btn-tab ng-binding tablinks" onclick="openCity(event, 'Lon11')">Slots</button>
                                       <button class="btn btn-tab ng-binding tablinks " onclick="openCity(event, 'Lon23')">Settings</button>
                                       <button class="btn btn-tab ng-binding tablinks"onclick="openCity(event, 'Lon25')" >Share</button>
                                       <button class="btn btn-tab ng-binding tablinks active "onclick="openCity(event, 'Lon26')" >View</button>
                                    </div>
                                 </div>
                                 <div id="Lon" class="tabcontent" style="display: none;">
                                    <div id="wizardStep1" class="l-wizard-step-1 ng-scope" data-ng-controller="wizardStep1 as w1">
                                       <div class="form-horizontal">
                                          <div class="form-group feedback-group" data-ng-class="{'has-error': w0.es.getErrors('w1-signup-signuptitle')}">
                                             <label for="signuptitle" class="col-xs-2 control-label text-left">Title
                                             of Sign Up</label>
                                             <div class="col-xs-5">
                                                <input autocomplete="off" name="title_hidden_" type="text" class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-maxlength" id="signuptitle" maxlength="255" ng-model="w1.signupinfo.signup.title" data-ng-change="w1.signupTitleChanged()" placeholder="">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-horizontal">
                                          <div class="form-group feedback-group">
                                             <label id="grouplabel" for="groupinputfield" class="col-xs-2 control-label text-left ng-binding">Group</label>
                                             <div class="col-xs-10">
                                                <span data-ng-if="w1.showGroups" class="ng-scope">
                                                   <div class="row">
                                                      <div class="col-xs-11">
                                                         <div class="w1-max-width-480 pull-left">
                                                            <select class="form-control inline-field pull-left w1-max-width-480 ng-pristine ng-untouched ng-valid ng-empty" id="selectgroup" title="Select a group" data-ng-model="w1.selectedGroup" data-ng-options="(group.id) as (group.community | groupCharLimit) for group in w1.wizardmetadata.groups | orderBy: &quot;community&quot;" data-ng-change="w1.changeGroup(w1.selectedGroup)">
                                                               <option disabled="" value="" data-hidden="true" class="" selected="selected">
                                                                  Select a group
                                                               </option>
                                                               <option label="er" value="number:14972696">er
                                                               </option>
                                                               <option label="hello" value="number:14972685">
                                                                  hello
                                                               </option>
                                                            </select>
                                                         </div>
                                                         
                                                       
                                                      </div>
                                                   </div>
                                                </span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-horizontal">
                                          <div class="form-group feedback-group" data-ng-class="{'has-error': w0.es.getErrors('w1-signup-signupcategory')}">
                                             <label for="searchThemes" class="col-xs-2 control-label text-left">Type/Category</label>
                                             <div class="col-xs-10">
                                                <span>
                                                   <div class="row">
                                                      <div class="col-md-16">
                                                         <div class="w1-max-width-480 pull-left" data-ng-class="{'has-error': w0.es.getErrors('w1-signup-signuptype')}">
                                                            <div class="form-horizontal">
                                                               <div class="form-group w1-margin-bottom-0">
                                                                  <div class="row">
                                                                     <div class="col-md-6 col-sm-12">
                                                                        <input class="form-control" type="text" value="General" readonly="">
                                                                     </div>
                                                                     <div class="col-md-6 col-sm-12">
                                                                        <select class="selectpicker show-tick form-control inline-field ng-pristine ng-untouched ng-valid ng-not-empty" id="selecttype" title="Select a Type" data-width="auto" ng-model="w1.selectedType" ng-options="type for type in w1.wizardmetadata.types" ng-change="w1.changeType(w1.selectedType)" tabindex="-98">
                                                                           <option class="bs-title-option" value="">
                                                                              Select a Type
                                                                           </option>
                                                                           <option label="General" value="string:General" selected="selected">
                                                                              General
                                                                           </option>
                                                                           <option label="Fundraising" value="string:Fundraising">Fundraising
                                                                           </option>
                                                                           <option label="Scheduling" value="string:Scheduling">Scheduling
                                                                           </option>
                                                                           <option label="Volunteering" value="string:Volunteering">Volunteering
                                                                           </option>
                                                                        </select>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-16">
                                                         <div class="w1-pad-left-10 pull-left" data-ng-class="{'has-error': w0.es.getErrors('w1-signup-signupcategory')}">
                                                            <select class="form-control">
                                                               <option>Select a
                                                                  category/cause
                                                               </option>
                                                               <option data-original-index="2">Animals &amp;
                                                                  Pets
                                                               </option>
                                                               <option data-original-index="3">Arts &amp;
                                                                  Culture
                                                               </option>
                                                               <option data-original-index="4">Business
                                                               </option>
                                                               <option data-original-index="5">Civic &amp;
                                                                  Community
                                                               </option>
                                                               <option data-original-index="6">Clubs &amp;
                                                                  Groups
                                                               </option>
                                                               <option data-original-index="7">Disaster &amp;
                                                                  Emergency
                                                               </option>
                                                               <option data-original-index="8">Education
                                                               </option>
                                                               <option data-original-index="9">Environment
                                                               </option>
                                                               <option data-original-index="10">Government
                                                               </option>
                                                               <option data-original-index="11">Health &amp;
                                                                  Wellness
                                                               </option>
                                                               <option data-original-index="12">Holiday &amp;
                                                                  Seasonal
                                                               </option>
                                                               <option data-original-index="13">Home &amp;
                                                                  Family
                                                               </option>
                                                               <option data-original-index="14">Other
                                                               </option>
                                                               <option data-original-index="15">Parks &amp;
                                                                  Nature
                                                               </option>
                                                               <option data-original-index="16">Personal
                                                                  Events
                                                               </option>
                                                               <option data-original-index="17">Politics
                                                               </option>
                                                               <option data-original-index="18">Real
                                                                  Estate
                                                               </option>
                                                               <option data-original-index="19">Religion &amp;
                                                                  Spirituality
                                                               </option>
                                                               <option data-original-index="20">Senior
                                                                  Services
                                                               </option>
                                                               <option data-original-index="21">Sports &amp;
                                                                  Recreation
                                                               </option>
                                                               <option data-original-index="22">Technology
                                                                  &amp; Computing
                                                               </option>
                                                               <option data-original-index="23">Travel
                                                               </option>
                                                               <option data-original-index="24">Video
                                                                  Gaming
                                                               </option>
                                                            </select>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="spacer"></div>
                                       <div data-ng-show="w1.showSlideout" outside-click="w1.showSlideout=false" click-watcher="w1.showSlideout" class="ng-hide">
                                       </div>
                                    </div>
                                    <div class="spacer" data-ng-show="w0.activestep !== 1"></div>
                                    <div class="col-xs-10">
                                       <button class="btn btn-lg btn-wide btn-green no-animate ng-binding">Save and
                                       Continue</button>
                                    </div>
                                    <div class="col-xs-2 text-right">
                                    </div>
                                 </div>
                                 <div id="Lon11" class="tabcontent" style="display: none;">
                                    <div id="wizardStepContainer" class="col-xs-12" data-ng-show="w0.initialized">
                                       <div data-ng-show="es.hasErrors &amp;&amp; arrErrors.length"
                                          class="form-group no-animate margin-bottom-10 ng-isolate-scope ng-hide" es="w0.es" str="w0.str"
                                          key="wizard-top-level">
                                          <div class="alert alert-danger feedback-error fade-in-up black-shadow-active">
                                             <span
                                                class="glyphicon glyphicon-exclamation-sign"></span> <strong><span
                                                data-ng-bind-html="str.errorsTitle" class="ng-binding"></span></strong> <span
                                                data-ng-bind-html="str.errorsPleaseCorrect" class="ng-binding">Please correct the following
                                             issues:</span>
                                             <ul>
                                                <!-- ngRepeat: error in arrErrors -->
                                             </ul>
                                          </div>
                                       </div>
                                       <form name="w0.signUpForm"
                                          data-ng-keypress="($event.charCode==13) ? $event.preventDefault(): return"
                                          class="ng-pristine ng-valid">
                                          <div data-ng-include="w0.activetemplate" class="ng-scope">
                                             <style class="ng-scope">
                                                .table>tbody>tr>td.table-wrapper {
                                                padding: 0;
                                                border: 0;
                                                vertical-align: top;
                                                }
                                                .table>tbody>tr>td.table-wrapper>.table {
                                                margin-bottom: 0;
                                                background: transparent;
                                                }
                                                .cleared {
                                                border-top: 0px transparent hidden !important;
                                                border-left: 0px transparent hidden !important;
                                                border-right: 0px transparent hidden !important;
                                                background: #fff;
                                                }
                                                .table>thead>tr>th.cleared {
                                                padding-right: 0;
                                                }
                                                .animate-selection {
                                                transition: box-shadow 0.2s ease-out;
                                                border-radius: 4px;
                                                }
                                                .empty-header {
                                                height: 56px;
                                                }
                                                .gridHeading {
                                                margin-bottom: 8px;
                                                padding: 0;
                                                }
                                                .date-notice {
                                                padding-left: 0 !important;
                                                }
                                                /* Checkbox inputs in the tables */
                                                .checkbox-icon-container {
                                                height: 22px;
                                                }
                                                .checkbox-icon-label {
                                                padding-left: 24px !important;
                                                margin: 1px 0 0 14px !important;
                                                }
                                                .borderless-b {
                                                border-bottom: 0 !important;
                                                }
                                                .borderless-l {
                                                border-left: 0 !important;
                                                }
                                                .borderless-lr {
                                                border-left: 0 !important;
                                                border-right: 0 !important;
                                                }
                                                .borderless-r {
                                                border-right: 0 !important;
                                                }
                                                .borderless-tb {
                                                border-bottom: 0 !important;
                                                border-top: 0 !important;
                                                }
                                                span.format-selector {
                                                margin-left: -10px;
                                                white-space: nowrap;
                                                }
                                                .pencil-icon {
                                                padding-left: 0px;
                                                }
                                                .format-cancel-btn {
                                                margin-bottom: 4px;
                                                }
                                                .format-help-icon {
                                                color: #222222;
                                                }
                                                .location-input {
                                                min-width: 400px;
                                                }
                                                .pagination-table {
                                                margin-top: -40px;
                                                border-bottom: 0 !important;
                                                }
                                                .location-icon {
                                                opacity: 0.50;
                                                }
                                                .l-wizard-step-2 .virtual-location-icon {
                                                opacity: 0.50;
                                                top: 2px;
                                                }
                                                .payment-icon {
                                                font-size: small;
                                                }
                                                td.align-top {
                                                vertical-align: top !important;
                                                }
                                                .action-icon-wrap {
                                                min-width: 103px;
                                                vertical-align: top !important;
                                                }
                                                .slot-name {
                                                max-width: 450px;
                                                }
                                             </style>
                                             <div id="wizarStepContainer" class="ng-scope"></div>
                                             <div class="l-wizard-step-2 ng-scope" data-ng-controller="wizardStep2 as w2">
                                                <div data-ng-if="w2.pageStatus == 'showCreate'" class="ng-scope">
                                                   <h2 class="ng-binding">Select the format for your sign up</h2>
                                                   <div class="row">
                                                      <div class="col-xs-3">
                                                         <div>
                                                            <input type="radio" id="css" name="fav_language" value="CSS">
                                                            <label for="css"><strong class="ng-binding">Sort by Date</strong></label>
                                                         </div>
                                                         <p class="smalltext text-muted ng-binding">
                                                            For sign ups having one or more slots per date/time
                                                            <br><a href="#" class="ng-binding">See examples</a>
                                                         </p>
                                                      </div>
                                                      <div class="col-xs-3">
                                                         <div>
                                                            <input type="radio" id="css" name="fav_language" value="CSS">
                                                            <label for="css"><strong class="ng-binding">Sort by Slot</strong></label>
                                                         </div>
                                                         <p class="smalltext text-muted ng-binding">
                                                            For sign ups where people scan the slots before the date/time
                                                            <br><a href="#" class="ng-binding">See examples</a>
                                                         </p>
                                                      </div>
                                                      <div class="col-xs-3">
                                                         <div>
                                                            <input type="radio" id="css" name="fav_language" value="CSS">
                                                            <label for="css"><strong class="ng-binding">Slots
                                                            Only</strong></label>
                                                         </div>
                                                         <p class="smalltext text-muted ng-binding">
                                                            For sign ups without a specific date or time involved
                                                            <br><a href="javascript:;" data-ng-click="w2.showExample('nodate')"
                                                               class="ng-binding">See examples</a>
                                                         </p>
                                                      </div>
                                                      <div class="col-xs-3">
                                                         <div>
                                                            <input type="radio" id="css" name="fav_language" value="CSS">
                                                            <label for="css"><strong class="ng-binding">Single Date
                                                            RSVP</strong></label>
                                                         </div>
                                                         <p class="smalltext text-muted ng-binding">
                                                            For a one date event where you want to see who can attend
                                                            <br><a href="#" class="ng-binding">See examples</a>
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="ng-scope">
                                                      <div class="row">
                                                         <div class="col-xs-12">
                                                            
                                       <table class="table table-bordered sTable ng-style:w2.style.themed.table;"
                                          style="background-color: rgb(199, 48, 40); border-width: 2px; border-color: rgb(255, 255, 255);">
                                       <thead>
                                       <tr class="cleared">
                                       <th class="cleared">

                                       </th>
                                       <th class="cleared">
                                       <span class="pull-right">
                                       <div id="open-modal1" class="btn btn-orange Click-here">
                                       <span class="glyphicon glyphicon-plus"></span>
                                       Add Dates
                                       </div>
                                       </span>
                                       </th>
                                       </tr>
                                       <tr>
                                       <th nowrap="" class="ng-style:w2.style.themed.th; ng-binding"
                                          style="background-color: rgb(30, 28, 27); color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-top-width: 2px; border-top-style: solid; font-weight: bold; vertical-align: bottom;">
                                       Available Slot</th>
                                       <th nowrap="" class="ng-style:w2.style.themed.th; ng-binding"
                                          style="background-color: rgb(30, 28, 27); color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-top-width: 2px; border-top-style: solid; font-weight: bold; vertical-align: bottom;">
                                       Dates/Times</th>
                                       </tr>
                                       </thead>
                                       <tbody class="black-shadow-active">
                                       <!-- ngRepeat: i in [1,2] -->
                                       <tr data-ng-repeat="i in [1,2]" class="ng-scope">
                                       <td class="col-xs-4 ng-style:w2.style.themed.td;"
                                          style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                       </td>
                                       <td class="table-wrapper">
                                       <table class="table">
                                       <tbody>
                                       <!-- ngRepeat: j in [1,2] -->
                                       <tr data-ng-repeat="j in [1,2]" class="ng-scope">
                                       <td class="tcell tfirst ng-style:w2.style.themed.td;"
                                          style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                       </td>
                                       <td class="col-xs-5 ng-style:w2.style.themed.td;"
                                          style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                       </td>
                                       </tr><!-- end ngRepeat: j in [1,2] -->
                                       <tr data-ng-repeat="j in [1,2]" class="ng-scope">
                                       <td class="tcell tfirst ng-style:w2.style.themed.td;"
                                          style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                       </td>
                                       <td class="col-xs-5 ng-style:w2.style.themed.td;"
                                          style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                       </td>
                                       </tr><!-- end ngRepeat: j in [1,2] -->
                                       </tbody>
                                       </table>
                                       </td>
                                       </tr><!-- end ngRepeat: i in [1,2] -->
                                       <tr data-ng-repeat="i in [1,2]" class="ng-scope">
                                       <td class="col-xs-4 ng-style:w2.style.themed.td;"
                                          style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                       </td>
                                       <td class="table-wrapper">
                                       <table class="table">
                                       <tbody>
                                       <tr data-ng-repeat="j in [1,2]" class="ng-scope">
                                       <td class="tcell tfirst ng-style:w2.style.themed.td;"
                                          style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                       </td>
                                       <td class="col-xs-5 ng-style:w2.style.themed.td;"
                                          style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                       </td>
                                       </tr>
                                       <tr data-ng-repeat="j in [1,2]" class="ng-scope">
                                       <td class="tcell tfirst ng-style:w2.style.themed.td;"
                                          style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                       </td>
                                       <td class="col-xs-5 ng-style:w2.style.themed.td;"
                                          style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                       </td>
                                       </tr>
                                       </tbody>
                                       </table>
                                       </td>
                                       </tr>
                                       </tbody>
                                       </table>
                                       </div>
                                       </div>
                                       </div>
                                       </div>
                                       </div>
                                       <div class="spacer" data-ng-show="w0.activestep !== 1"></div>
                                       <div class="col-xs-10">
                                       <button type="submit" class="btn btn-lg btn-wide btn-green no-animate ng-binding">Save and
                                       Continue</button>
                                       </div>
                                       <div class="col-xs-2 text-right">
                                       </div>
                                       </form>
                                       </div>
                                    </div>
                              </div>
                                    <div id="Lon23" class="tabcontent" style="display: none;">
                                      <div id="wizardStepContainer" class="col-xs-12" data-ng-show="w0.initialized">
                  
                  
                  
                  
                  
                  
                                        <form name="w0.signUpForm" data-ng-keypress="($event.charCode==13) ? $event.preventDefault(): return" class="ng-valid ng-valid-maxlength ng-valid-hour-not-provided ng-valid-date ng-valid-url ng-valid-date-disabled ng-valid-parse ng-pristine">
                                          <div data-ng-include="w0.activetemplate" class="ng-scope">
                                            <div class="l-wizard-step-3 ng-scope" data-ng-controller="wizardStep3 as w3">
                  
                  
                                              <h2 class="hrow" style="margin-top:0px;">Ask Participants For:</h2>
                  
                                              <div class="row">
                                                <div class="col-xs-12 ask-participants-for-container">
                  
                                                
                                                  <div class="row form-group ask-participants-for-wrapper">
                                                    <div class="col-xs-6 col-lg-5 ask-participants-for-label">
                                                    
                                                      <span class="glyphicon glyphicon-ok text-orange" style="padding-right: 12px;"></span>
                                                      <input type="checkbox" checked="" name="name" id="name" disabled="disabled" class="css-checkbox-chkbx-mini hideinline">
                  
                                                    
                                                      <span class="hgroup">Name</span>
                                                      <input type="checkbox" checked="" name="name" id="name" disabled="disabled" class="css-checkbox-chkbx-mini hideinline">
                                                    </div>
                  
                                                   
                                                    <div class="col-xs-2 ask-participants-for-option" style="padding-top: 3px;">
                                                      Required
                                                      <input type="hidden" name="nameRequired" value="1">
                                                    </div>
                                                  </div>
                  
                                                 
                                                  <div class="row form-group ask-participants-for-wrapper">
                                                    <div class="col-xs-6 col-lg-5 ask-participants-for-label">
                                                    
                                                      <input name="email" id="email" value="1" type="checkbox" checked="" disabled="disabled" class="css-checkbox-chkbx-mini hideinline">
                                                      <span class="glyphicon glyphicon-ok text-orange" style="padding-right: 12px;"></span>
                  
                                                      
                                                      <span class="hgroup">Email</span>
                                                    </div>
                  
                                                    
                                                    <div class="col-xs-2 ask-participants-for-option">
                                                     <span data-ng-if="!w3.isEmailRequired()" class="ng-scope">
                                                        <select name="emailrequired" id="emailrequired" class="form-control input-sm ng-pristine ng-untouched ng-valid ng-not-empty" data-ng-disabled="w3.form.disableField" data-ng-model="w3.form.selectedEmailOption" data-ng-options="option for option in w3.form.questionOptions" data-ng-selected="w3.form.selectedEmailOption" data-ng-change="w3.handleStandardStatusChange( 'email' )" selected="selected">
                                                          <option label="Required" value="string:Required">Required</option>
                                                          <option label="Optional" value="string:Optional">Optional</option>
                                                        </select>
                                                      </span>
                                                    </div>
                                                  </div>
                  
                                                 
                                                  <div class="form-group" data-ng-show="!w3.additionalsignupinfo.isRsvpNoItems">
                                                    <div class="row ask-participants-for-wrapper">
                                                      <div class="col-xs-6 col-lg-5 ask-participants-for-label">
                                                     
                                                        <input name="commentTitleEnabled" id="commentTitleEnabled" value="1" type="checkbox" checked="" disabled="disabled" class="css-checkbox-chkbx-mini hideinline">
                                                        <span class="glyphicon glyphicon-ok text-orange" style="padding-right: 12px;"></span>
                  
                                                       <span data-ng-if="w3.form.commentTitle.length <= 45" class="hgroup ng-binding ng-scope">
                                                          Comment
                                                        </span>
                                                        <a href="javascript:;" class="no-animate" data-ng-show="!w3.form.showCommentForm" data-ng-click="w3.toggleCommentForm()" popover-enable="true" uib-popover="Edit Comment" popover-placement="top" popover-trigger="mouseenter" popover-popup-delay="300">
                                                          <span class="icon--additional-settings glyphicon glyphicon-pencil icon"></span>
                                                        </a>
                                                      </div>
                  
                                                     
                                                      <div class="col-xs-2 ask-participants-for-option">
                                                        <select name="commentrequired" id="commentrequired" class="form-control input-sm ng-pristine ng-untouched ng-valid ng-not-empty" data-ng-disabled="w3.form.disableField" data-ng-model="w3.form.selectedCommentOption" data-ng-options="option for option in w3.form.questionOptions" data-ng-selected="w3.form.selectedCommentOption" data-ng-change="w3.handleStandardStatusChange( 'comment' )" selected="selected">
                                                          <option label="Required" value="string:Required">Required</option>
                                                          <option label="Optional" value="string:Optional" selected="selected">Optional
                                                          </option>
                                                        </select>
                                                      </div>
                                                    </div>
                  
                                                    
                                                    <div class="row ng-hide" data-ng-show="w3.form.showCommentForm" data-ng-class="{'has-error': w0.es.getErrors('w3-commenttitle')}">
                                                      <div class="feedback-group">
                                                        <div class="col-xs-12">
                                                          <div class="padded-options checkmark indicator">
                                                            <div class="form-inline">
                                                              <input type="text" class="form-control inline-field input-sm ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-maxlength" name="commentTitle" id="commentTitle" placeholder="Comment" data-ng-model="w3.form.commentTitle" maxlength="256" data-ng-keypress="($event.charCode==13) ? w3.updateComment() : return" data-ng-change="w3.commentTitleChanged()" data-ng-disabled="w3.form.disableField">
                                                              <button type="button" data-ng-class="{'btn-processing':w3.form.disableField}" data-ng-click="w3.updateComment()" data-ng-disabled="w3.form.disableField" class="btn btn-success btn-sm text-white inline-field ng-binding">Update</button>
                                                              <button type="button" class="btn btn-default btn-sm inline-field ng-binding" data-ng-click="w3.toggleCommentForm(true)">Cancel</button>
                                                              <span popover-enable="true" uib-popover="Your group members can enter a comment for each item they sign up for. This field will be seen publicly on the sign up." popover-placement="top" popover-trigger="mouseenter" popover-popup-delay="300" class="glyphicon glyphicon-question-sign helpme"></span>
                                                              
                                                            </div>
                                                            <p class="smalltextlite">This is a title for the public comment entered by
                                                              your participants.</p>
                                                          </div>
                                                        </div>
                  
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div sv-root="" data-ng-show="w3.signupinfo.customquestions.length > 0 &amp;&amp; w3.signupinfo.settings.type !== 'rsvp'" sv-on-sort="w3.handleOrderChange(w3.signupinfo.signup.signupid)" class="ng-hide">
                                                    <div sv-part="w3.signupinfo.customquestions" class="ng-scope">
                  
                                                     
                  
                                                      
                                                    </div> 
                                                  </div>
                                                </div>
                  
                                                <div class="spacer ng-scope"></div>
                                                
                  
                                              </div>
                                            </div>
                  
                  
                  
                                          </div>
                                      </form></div>
                                      <div class="col-xs-10">
                                        <span class="btn btn-lg btn-wide btn-green no-animate ng-binding" data-ng-show="w0.initialized &amp;&amp; w0.activestep != 4" data-ng-click="!w0.processing ? w0.saveSignUp() : ''" data-ng-bind="w0.str.btnSave" popover="" popover-placement="right" popover-trigger="mouseenter" popover-popup-delay="300">Save and
                                          Continue</span>
                                      </div>
                                      
                  
                  
                  
                  
                                      <div class="c-genius-tips" genius-tips-container="">
                                        <div data-ng-show="displayGeniusTips" class="c-genius-tips--tip-container is-open ng-hide" data-ng-class="{'is-expanded':displayLearnMore}" style="bottom: 309px;">
                                          <!-- ngRepeat: tip in arrGeniusTips -->
                                        </div>
                                        <div class="c-genius-tips--tip-anchor"></div>
                                      </div>
                                    </div>
                                    <div id="Lon25" class="tabcontent" style="display: none;">
                                      
                                        <h2 class="hrow ng-binding">Hooray! Don't Forget to Send Invites!</h2>
                                        <p class="wizard-signuppublished-subtext ng-binding">Use the following link to share the page yourself or choose an option below to invite people to sign up.</p>
                                        <div class="copy">
          
                                            <form style="display: flex;">
                                              <input type="text" class="form-control" value="https://codepen.io/she_codes/pen/OgrJJe/">
                                              <button type="button">Copy</button>
                                            </form>
                                          </div>
                  <br>
                  
                
                  <div>
                      <h2>INVITE BY</h2>
                      <div id="holder">
                        <h1>Social Media Icons</h1>
                        <div>
                            <a href="#"><img src="slot/images/facebook.png" alt=""></a>
                            <a href="#"><img src="slot/images/instragram.png" alt=""></a>
                            <a href="#"><img src="slot/images/twitter.png" alt=""></a>
                            <a href="#"><img src="slot/images/whatsapp.png" alt=""></a>
                        </div>
                        <br>
                      </div>
                  </div>
                  <button type="submit" class="btn btn-lg btn-wide btn-green no-animate ng-binding">Save and
                    Continue</button>
                                  </div>
                                  <div id="Lon26" class="tabcontent active" style="display: block;">
                                      
                                   
                                    <p class="wizard-signuppublished-subtext ng-binding">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                                    
              <form>
                <button type="submit" class="btn btn-success"><a href="#" style="color: #fff;">View</a></button>
              </form>
            
          
                              </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     
                     <div class="tab-pane" id="b">
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
                                             <ol class="breadcrumb ng-isolate-scope" sug-breadcrumb="breadcrumbs">
                                                <li data-ng-repeat="crumb in sugBreadcrumb" class="ng-scope">
                                                   <a class="ng-binding ng-scope">Groups</a>
                                                </li>
                                                <li data-ng-repeat="crumb in sugBreadcrumb" data-ng-class="{active: crumb.active}"
                                                   class="ng-scope active">
                                                   <span data-ng-if="crumb.href === ''" class="ng-binding ng-scope">Manage</span>
                                                </li>
                                             </ol>
                                          </div>
                                          <h1 class="hrow ng-binding">Groups <a href="" data-ng-click="showHelp()"
                                             data-ng-show="str.helpTitle.length || str.helpBody.length" popover="Help"
                                             popover-placement="top" popover-trigger="mouseenter" popover-popup-delay="300"
                                             class="ng-scope ng-hide"><span class="glyphicon glyphicon-question-sign helpme"></span></a>
                                          </h1>
                                          <p data-ng-show="str.pageDescr" class="ng-binding">Use this area to
                                             manage your email groups. To send emails to these groups, go to
                                             "Messages."
                                          </p>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-xs-12">
                                          <div id="processing" class="processing ng-hide" data-ng-show="processing">
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
                                          <div data-ng-view="" class="ng-scope">
                                             <div class="row ng-scope">
                                                <div class="col-xs-12">
                                                   <div class="row gridHeading">
                                                      <div class="col-xs-5">
                                                         <h2 class="hrow pull-left fade-in ng-binding">My
                                                            Groups
                                                         </h2>
                                                         <div class="dropdown dropdown-inline pull-left groupsSettings">
                                                            <a href="" class="dropdown-toggle ng-scope" data-toggle="dropdown"
                                                               aria-haspopup="true" aria-expanded="false" popover="Settings"
                                                               popover-placement="top" popover-trigger="mouseenter" popover-popup-delay="300">
                                                            <span class="glyphicon glyphicon-cog subtext"></span>
                                                            </a>
                                                            <ul class="dropdown-menu settingsOption" data-ng-click="dropDownClickEvent($event)">
                                                               <li>
                                                                  <div class="h2 ng-binding">Sort By:
                                                                  </div>
                                                               </li>
                                                               <li>
                                                                  <input type="radio" name="sortBy" id="sortByCommunityId"
                                                                     data-ng-model="frmObj.orderColumn" value="community"
                                                                     class="css-radio-mini ng-pristine ng-untouched ng-valid ng-not-empty">
                                                                  <label for="sortByCommunityId" class="radio-css-label-mini ng-binding">Group
                                                                  Name</label>
                                                               </li>
                                                               <li>
                                                                  <input type="radio" name="sortBy" id="sortByMemberCount"
                                                                     data-ng-model="frmObj.orderColumn" value="membercount"
                                                                     class="css-radio-mini ng-pristine ng-untouched ng-valid ng-not-empty">
                                                                  <label for="sortByMemberCount"
                                                                     class="radio-css-label-mini ng-binding">Members</label>
                                                               </li>
                                                               <li>
                                                                  <input type="radio" name="sortBy" id="sortByListCount"
                                                                     data-ng-model="frmObj.orderColumn" value="listcount"
                                                                     class="css-radio-mini ng-pristine ng-untouched ng-valid ng-not-empty">
                                                                  <label for="sortByListCount" class="radio-css-label-mini ng-binding">Sign
                                                                  Ups</label>
                                                               </li>
                                                               <li>
                                                                  <div class="spacer-sm"></div>
                                                               </li>
                                                               <li>
                                                                  <div class="form-horizontal">
                                                                     <div class="form-group">
                                                                        <label class="col-xs-6 text-left control-label ng-binding"
                                                                           for="sortDirectionId">Sort
                                                                        Order: </label>
                                                                        <div class="col-xs-6">
                                                                           <select name="sortDirection" id="sortDirectionId"
                                                                              data-ng-model="frmObj.direction"
                                                                              class="form-control ng-pristine ng-untouched ng-valid ng-not-empty"
                                                                              data-ng-options="o.value as o.label for o in sortOptions">
                                                                              <option label="ASC" value="boolean:false" selected="selected">
                                                                                 ASC
                                                                              </option>
                                                                              <option label="DESC" value="boolean:true">
                                                                                 DESC
                                                                              </option>
                                                                           </select>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </li>
                                                               <li>
                                                                  <div class="form-horizontal">
                                                                     <div class="form-group">
                                                                        <label class="col-xs-6 text-left control-label ng-binding"
                                                                           for="numPerPageId">Items Per
                                                                        Page: </label>
                                                                        <div class="col-xs-6">
                                                                           <input name="numPerPage" id="numPerPageId"
                                                                              data-ng-model="frmObj.numPerPage"
                                                                              class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength ng-not-empty"
                                                                              maxlength="3">
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </li>
                                                               <li>
                                                                  <span class="btn btn-success btn-block text-white ng-binding"
                                                                     title="Save Settings"> <span
                                                                     class="glyphicon glyphicon-floppy-disk text-white"
                                                                     title="Save Settings"></span>
                                                                  Save</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <div class="col-xs-4">
                                                         <div class="gridHeadingElement">
                                                            <div data-ng-show="myGroups.length > frmObj.numPerPage || frmObj.groupFilter.length"
                                                               class="input-group input-group-sm ng-hide">
                                                               <span class="input-group-addon">
                                                               <span class="glyphicon glyphicon-search"></span>
                                                               </span>
                                                               <input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-empty"
                                                                  name="filter" data-ng-model="frmObj.groupFilter" placeholder="Search"
                                                                  autocomplete="off">
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-xs-3">
                                                         <div class="gridHeadingElement">
                                                            <button data-ng-if="manageAllGroups" type="button"
                                                               class="btn btn-warning btn-sm pull-right ng-binding ng-scope"
                                                               data-ng-click="showAddGroup()"><i class="glyphicon glyphicon-plus"></i>
                                                            Add New Group</button>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-xs-12">
                                                         <table class="table table-hover table-striped sTable">
                                                            <thead>
                                                               <tr>
                                                                  <th class="tcell no-wrap width-50">
                                                                     <a href="" data-ng-click="setSort('community')">
                                                                     <strong class="ng-binding">Group
                                                                     Name <span data-ng-if="frmObj.orderColumn=='community'"
                                                                        class="glyphicon glyphicon-chevron-up"></span></strong>
                                                                     </a>
                                                                  </th>
                                                                  <th class="tcell no-wrap centered">
                                                                     <a href="" data-ng-click="setSort('membercount')">
                                                                     <strong class="ng-binding">Members
                                                                     </strong>
                                                                     </a>
                                                                  </th>
                                                                  <th class="tcell no-wrap centered">
                                                                     <a href="" data-ng-click="setSort('listcount')">
                                                                     <strong class="ng-binding">Sign
                                                                     Ups </strong>
                                                                     </a>
                                                                  </th>
                                                                  <th class="tcell no-wrap"
                                                                     data-ng-attr-colspan="{{manageAllGroups &amp;&amp; '4' || '3'}}" colspan="4">
                                                                     <div class="table-header-icon-actions btn-group pull-right">
                                                                        <a data-ng-if="manageAllGroups" href="#/transfer" popover="Transfer"
                                                                           popover-placement="left" popover-trigger="mouseenter"
                                                                           popover-popup-delay="300" style="padding: 0px 6px;" class="ng-scope">
                                                                        <span class="glyphicon glyphicon-transfer"></span>
                                                                        </a>
                                                                        <a data-ng-if="manageAllGroups" href="#/merge" popover="Merge"
                                                                           popover-placement="left" popover-trigger="mouseenter"
                                                                           popover-popup-delay="300" style="padding: 0px 6px;" class="ng-scope">
                                                                        <span class="glyphicon glyphicon-random"></span>
                                                                        </a>
                                                                        <a href="#/export" popover="Export" popover-placement="left"
                                                                           popover-trigger="mouseenter" popover-popup-delay="300"
                                                                           style="padding-left: 6px;" class="ng-scope">
                                                                        <span class="glyphicon glyphicon-export"></span>
                                                                        </a>
                                                                     </div>
                                                                  </th>
                                                               </tr>
                                                            </thead>
                                                            <tbody data-ng-if="myGroupsFiltered.length > 0" class="ng-scope">
                                                               <tr
                                                                  data-ng-repeat="group in myGroupsFiltered | filter:{community:frmObj.groupFilter} | orderBy:frmObj.orderColumn:frmObj.direction | limitTo:pagination.currentPage*pagination.numPerPage | limitTo:-pagination.numPerPage"
                                                                  class="ng-scope">
                                                                  <td class="tcell tfirst enforce-wrap ng-binding">
                                                                     er
                                                                  </td>
                                                                  <td class="tcell icon">
                                                                     <div class="icon-badged ng-scope" popover="There are 3 members in this group"
                                                                        popover-placement="top" popover-trigger="mouseenter"
                                                                        popover-popup-delay="300">
                                                                        <span class="glyphicon glyphicon-user table-icon mono no-hover"
                                                                           alt="There are 3 members in this group"></span><span
                                                                           class="badge ng-binding">3</span>
                                                                     </div>
                                                                  </td>
                                                                  <td class="tcell icon">
                                                                     <div class="icon-badged ng-scope"
                                                                        popover="There is 1 sign up using this group" popover-placement="top"
                                                                        popover-trigger="mouseenter" popover-popup-delay="300">
                                                                        <span class="glyphicon glyphicon-ok table-icon mono no-hover"
                                                                           alt="There are 1 sign ups using this group"></span><span
                                                                           class="badge ng-binding">1</span>
                                                                     </div>
                                                                  </td>
                                                                  <td class="tcell icon">
                                                                     <a href="#/edit/14972696" popover="Edit This Group" popover-placement="top"
                                                                        popover-trigger="mouseenter" popover-popup-delay="300" class="ng-scope">
                                                                     <span class="glyphicon glyphicon-pencil table-icon mono"
                                                                        alt="Add/remove/edit members of this group"></span>
                                                                     </a>
                                                                  </td>
                                                                  <td class="tcell icon">
                                                                     <a href="javascript:;" popover="Delete This Group" popover-placement="top"
                                                                        popover-trigger="mouseenter" popover-popup-delay="300"
                                                                        data-ng-click="deleteGroup(group.id,group.community)" class="ng-scope">
                                                                     <span class="glyphicon glyphicon-remove table-icon mono"
                                                                        alt="Delete this group"></span>
                                                                     </a>
                                                                  </td>
                                                                  <td class="tcell icon">
                                                                     <a href="javascript:;" popover="Export This Group" popover-placement="top"
                                                                        popover-trigger="mouseenter" popover-popup-delay="300"
                                                                        ng-click="pickGroup('export', group.id)" class="ng-scope">
                                                                     <span class="glyphicon glyphicon-export table-icon mono"
                                                                        alt="Export this group"></span>
                                                                     </a>
                                                                  </td>
                                                                  <td data-ng-if="manageAllGroups" class="tcell icon ng-scope">
                                                                     <div class="btn-group">
                                                                        <a href="javascript:;" class="dropdown-toggle  ng-scope"
                                                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                                           popover="More Actions" popover-placement="left"
                                                                           popover-trigger="mouseenter" popover-popup-delay="300">
                                                                        <span class="glyphicon glyphicon-option-horizontal table-icon mono"
                                                                           alt="More Actions"></span>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-menu-right groupActions left-side"
                                                                           style="margin-left:-10px;">
                                                                           <li>
                                                                              <a href="javascript:;" class="reset-width ng-scope ng-binding"
                                                                                 popover="Transfer Group" popover-placement="left"
                                                                                 popover-trigger="mouseenter" popover-popup-delay="300"
                                                                                 ng-click="pickGroup('transfer', group.id)">
                                                                              <span class="glyphicon glyphicon-transfer"></span>
                                                                              &nbsp; Transfer
                                                                              </a>
                                                                           </li>
                                                                           <li>
                                                                              <a href="javascript:;" class="reset-width ng-scope ng-binding"
                                                                                 popover="Merge Group" popover-placement="left"
                                                                                 popover-trigger="mouseenter" popover-popup-delay="300"
                                                                                 ng-click="pickGroup('merge', group.id)">
                                                                              <span class="glyphicon glyphicon-random"></span>
                                                                              &nbsp; Merge
                                                                              </a>
                                                                           </li>
                                                                           <li>
                                                                              <a href="javascript:;" class="reset-width ng-scope ng-binding"
                                                                                 popover="Duplicate Group" popover-placement="left"
                                                                                 popover-trigger="mouseenter" popover-popup-delay="300"
                                                                                 ng-click="showDuplicateGroup(group.id, group.community)">
                                                                              <span class="glyphicon glyphicon-duplicate"></span>
                                                                              &nbsp; Duplicate
                                                                              </a>
                                                                           </li>
                                                                        </ul>
                                                                     </div>
                                                                  </td>
                                                               </tr>
                                                               <tr
                                                                  data-ng-repeat="group in myGroupsFiltered | filter:{community:frmObj.groupFilter} | orderBy:frmObj.orderColumn:frmObj.direction | limitTo:pagination.currentPage*pagination.numPerPage | limitTo:-pagination.numPerPage"
                                                                  class="ng-scope">
                                                                  <td class="tcell tfirst enforce-wrap ng-binding">
                                                                     hello
                                                                  </td>
                                                                  <td class="tcell icon">
                                                                     <div class="icon-badged ng-scope" popover="There are 0 members in this group"
                                                                        popover-placement="top" popover-trigger="mouseenter"
                                                                        popover-popup-delay="300">
                                                                        <span class="glyphicon glyphicon-user table-icon mono no-hover"
                                                                           alt="There are 0 members in this group"></span><span
                                                                           class="badge ng-binding">0</span>
                                                                     </div>
                                                                  </td>
                                                                  <td class="tcell icon">
                                                                     <div class="icon-badged ng-scope"
                                                                        popover="There are 2 sign ups using this group" popover-placement="top"
                                                                        popover-trigger="mouseenter" popover-popup-delay="300">
                                                                        <span class="glyphicon glyphicon-ok table-icon mono no-hover"
                                                                           alt="There are 2 sign ups using this group"></span><span
                                                                           class="badge ng-binding">2</span>
                                                                     </div>
                                                                  </td>
                                                                  <td class="tcell icon">
                                                                     <a href="#/edit/14972685" popover="Edit This Group" popover-placement="top"
                                                                        popover-trigger="mouseenter" popover-popup-delay="300" class="ng-scope">
                                                                     <span class="glyphicon glyphicon-pencil table-icon mono"
                                                                        alt="Add/remove/edit members of this group"></span>
                                                                     </a>
                                                                  </td>
                                                                  <td class="tcell icon">
                                                                     <a href="javascript:;" popover="Delete This Group" popover-placement="top"
                                                                        popover-trigger="mouseenter" popover-popup-delay="300"
                                                                        data-ng-click="deleteGroup(group.id,group.community)" class="ng-scope">
                                                                     <span class="glyphicon glyphicon-remove table-icon mono"
                                                                        alt="Delete this group"></span>
                                                                     </a>
                                                                  </td>
                                                                  <td class="tcell icon">
                                                                     <a href="javascript:;" popover="Export This Group" popover-placement="top"
                                                                        popover-trigger="mouseenter" popover-popup-delay="300"
                                                                        ng-click="pickGroup('export', group.id)" class="ng-scope">
                                                                     <span class="glyphicon glyphicon-export table-icon mono"
                                                                        alt="Export this group"></span>
                                                                     </a>
                                                                  </td>
                                                                  <td data-ng-if="manageAllGroups" class="tcell icon ng-scope">
                                                                     <div class="btn-group">
                                                                        <a href="javascript:;" class="dropdown-toggle  ng-scope"
                                                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                                           popover="More Actions" popover-placement="left"
                                                                           popover-trigger="mouseenter" popover-popup-delay="300">
                                                                        <span class="glyphicon glyphicon-option-horizontal table-icon mono"
                                                                           alt="More Actions"></span>
                                                                        </a>
                                                                        <ul class="dropdown-menu dropdown-menu-right groupActions left-side"
                                                                           style="margin-left:-10px;">
                                                                           <li>
                                                                              <a href="javascript:;" class="reset-width ng-scope ng-binding"
                                                                                 popover="Transfer Group" popover-placement="left"
                                                                                 popover-trigger="mouseenter" popover-popup-delay="300"
                                                                                 ng-click="pickGroup('transfer', group.id)">
                                                                              <span class="glyphicon glyphicon-transfer"></span>
                                                                              &nbsp; Transfer
                                                                              </a>
                                                                           </li>
                                                                           <li>
                                                                              <a href="javascript:;" class="reset-width ng-scope ng-binding"
                                                                                 popover="Merge Group" popover-placement="left"
                                                                                 popover-trigger="mouseenter" popover-popup-delay="300"
                                                                                 ng-click="pickGroup('merge', group.id)">
                                                                              <span class="glyphicon glyphicon-random"></span>
                                                                              &nbsp; Merge
                                                                              </a>
                                                                           </li>
                                                                           <li>
                                                                              <a href="javascript:;" class="reset-width ng-scope ng-binding"
                                                                                 popover="Duplicate Group" popover-placement="left"
                                                                                 popover-trigger="mouseenter" popover-popup-delay="300"
                                                                                 ng-click="showDuplicateGroup(group.id, group.community)">
                                                                              <span class="glyphicon glyphicon-duplicate"></span>
                                                                              &nbsp; Duplicate
                                                                              </a>
                                                                           </li>
                                                                        </ul>
                                                                     </div>
                                                                  </td>
                                                               </tr>
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
                                    <p>JavaScript is currently disabled on your browser. Our application requires
                                       JavaScript to properly function.
                                    </p>
                                    <p>Here are instructions on how you can enable JavaScript on your browser.</p>
                                    <h3>Chrome:</h3>
                                    <ul>
                                       <li>On the upper right-hand corner of the browser, click on the
                                          "<b>Customize and control Google Chrome</b>" (three vertical line,
                                          a.k.a. 'humberger menu') and select "<b>Settings</b>".
                                       </li>
                                       <li>In the "<b>Settings</b>" page, locate and click on the "<b>Show advanced
                                          settings...</b>" link (typically at the very bottom of the page).
                                       </li>
                                       <li>The advance settings are shown. Under the the "<b>Privacy</b>" section,
                                          locate and click on the "<b>Content settings...</b>" button.
                                       </li>
                                       <li>The Content Settings dialog window opens. Under the "<b>JavaScript</b>"
                                          section, select "<b>Allow all sites to run JavaScript
                                          (recommended)</b>".
                                       <li>Click on the "Done" button to save the settings and close the dialog
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
                                       <li>If a warning message is displayed "This might void your warranty!",
                                          click "<b>I'll be careful, I promise!</b>" button. 
                                       </li>
                                       <li>This will take you to the browser configuration menu. In the Search
                                          input, type <b>javascript.enabled</b>. 
                                       </li>
                                       <li>Select the line record at exactly match "<b>javascript.enabled</b>" -
                                          under the "Value" column, it should be "<b>false</b>". Double-click the
                                          selected row to toggle and enable JavaScript. Verify that the Value
                                          should now be set to "<b>true</b>".
                                       </li>
                                       <li>You may close the configuration tab and reload the SignUpGenius
                                          application.
                                       </li>
                                    </ul>
                                    <h3>Internet Explorer (IE):</h3>
                                    <ul>
                                       <li>Open a new tab and on the upper right-hand corner of the browser, click
                                          "<b>Tools</b>" icon (cog or a rotary icon) and select "<b>Internet
                                          Options</b>".
                                       <li>The Internet Options dialog window will be displayed.
                                          Under the "<b>Internet Options</b>" window select the "<b>Security</b>"
                                          tab.
                                       </li>
                                       <li>Within the "<b>Security</b>" locate and click the "<b>Custom
                                          level...</b>" button.
                                       </li>
                                       <li>Another dialog window will be displayed. Within the "<b>Security
                                          Settings - Internet Zone</b>" window, look for the
                                          "<b>Scripting</b>" section (should be towards the bottom).
                                       </li>
                                       <li>Under the "<b>Scripting</b>" section, locate "<b>Active Scripting</b>"
                                          item then select "<b>Enable</b>".
                                       </li>
                                       <li>If a "<b>Warning!</b>" window pops up, select "Yes". Click "OK" to save
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
                                       <li>Under the "<b>Security</b>" tab, locate the "<b>Web content</b>" section
                                          and check the "<b>Enable JavaScript</b>" option.
                                       </li>
                                       <li>Close the "<b>Preferences</b>" window, and reload the SignUpGenius
                                          application.
                                       </li>
                                    </ul>
                                    <h3>If you are not using any of the above browsers:</h3>
                                    <ul>
                                       <li><a href="/help" target="_blank">Contact</a> our support team, we'll be
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
                                       <li data-ng-hide="unsupportedBrowser" class="tablinks" onclick="openCity(event, 'Paris')">
                                          <a href="#/compose"><span class="glyphicon glyphicon-send"></span>
                                          Compose</a>
                                       </li>
                                       <li data-ng-hide="unsupportedBrowser" class="tablinks" onclick="openCity(event, 'Tokyo')">
                                          <a href="#/drafts"><span class="glyphicon glyphicon-file"></span> Drafts
                                          &amp; Templates</a>
                                       </li>
                                       <li data-ng-hide="unsupportedBrowser" data-ng-if="showSent" class="tablinks ng-scope"
                                          onclick="openCity(event, 'Tokyo1')">
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
                                                      ng-class="type &amp;&amp; 'progress-bar-' + type" role="progressbar" aria-valuenow="0"
                                                      aria-valuemin="0" aria-valuemax="1000"
                                                      ng-style="{width: (percent < 100 ? percent : 100) + '%'}" aria-valuetext="0%"
                                                      aria-labelledby="progressbar" style="min-width: 0px; width: 0%;" ng-transclude="">
                                                      <span style="color:black; white-space:nowrap;padding-left:5px;"
                                                         class="ng-binding ng-scope">0 / 1,000 email messages
                                                      used today</span>
                                                   </div>
                                                </div>
                                                <div class="progress ng-isolate-scope" max="memberLimits.monthlyLimit"
                                                   value="memberLimits.sentForTheMonth" type="success">
                                                   <div class="progress-bar progress-bar-success"
                                                      ng-class="type &amp;&amp; 'progress-bar-' + type" role="progressbar" aria-valuenow="3"
                                                      aria-valuemin="0" aria-valuemax="1000"
                                                      ng-style="{width: (percent < 100 ? percent : 100) + '%'}" aria-valuetext="0%"
                                                      aria-labelledby="progressbar" style="min-width: 0px; width: 0.3%;" ng-transclude="">
                                                      <span style="color:black; white-space:nowrap;padding-left:5px;"
                                                         class="ng-binding ng-scope">3 / 1,000 email messages
                                                      used this month </span>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xs-7" data-ng-show="showChart">
                                                <div class="row">
                                                   <div class="col-xs-5">
                                                      <ul class="nav nav-pills nav-stacked">
                                                         <li ng-repeat="record in deliveryStats" class="ng-binding ng-scope">
                                                            <span class="badge black pull-right">3</span>
                                                            Total Sent
                                                         </li>
                                                         <li ng-repeat="record in deliveryStats" class="ng-binding ng-scope">
                                                            <span class="badge green pull-right">3</span>
                                                            Delivered
                                                         </li>
                                                         <li ng-repeat="record in deliveryStats" class="ng-binding ng-scope">
                                                            <span class="badge yellow pull-right">0</span>
                                                            Bounced
                                                         </li>
                                                         <li ng-repeat="record in deliveryStats" class="ng-binding ng-scope">
                                                            <span class="badge orange pull-right">0</span>
                                                            Dropped
                                                         </li>
                                                         <li ng-repeat="record in deliveryStats" class="ng-binding ng-scope">
                                                            <span class="badge red pull-right">0</span>
                                                            Spam
                                                         </li>
                                                      </ul>
                                                   </div>
                                                   <div class="col-xs-7">
                                                      <div google-chart="" chart="chartMonthDeliveryStats" class="mGraph ng-isolate-scope"
                                                         style="margin-top:-40px;">
                                                         <div style="position: relative;">
                                                            <div dir="ltr" style="position: relative; width: 222px; height: 200px;">
                                                               <div aria-label="A chart."
                                                                  style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                                                                  <svg width="222" height="200" aria-label="A chart." style="overflow: hidden;">
                                                                     <defs id="_ABSTRACT_RENDERER_ID_1">
                                                                     </defs>
                                                                     <rect x="0" y="0" width="222" height="200" stroke="none" stroke-width="0"
                                                                        fill="#ffffff">
                                                                     </rect>
                                                                     <g>
                                                                        <path
                                                                           d="M186,92.5L186,107.5A75,60,0,0,1,36,107.50000000000001L36,92.5A75,60,0,0,0,186,92.5"
                                                                           stroke="#819027" stroke-width="1" fill="#819027">
                                                                        </path>
                                                                        <ellipse cx="111" cy="92.5" rx="75" ry="60" stroke="#acc034"
                                                                           stroke-width="1" fill="#acc034">
                                                                        </ellipse>
                                                                        <text text-anchor="start" x="99.5" y="95.65" font-family="Arial"
                                                                           font-size="9" stroke="none" stroke-width="0" fill="#ffffff">100%</text>
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
                                                               style=" position: absolute; top: 210px; left: 232px; white-space: nowrap; font-family: Arial; font-size: 9px;">
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
                                                            ng-class="{hOver: hover}" ng-mouseenter="hover=true" ng-mouseleave="hover=false"
                                                            nowrap="">
                                                            <a href=""><strong>Date Sent</strong> <span
                                                               data-ng-show="emailSortBy === 'datesent'"
                                                               data-ng-class="{'glyphicon glyphicon-chevron-down':!emailSortReverse,'glyphicon glyphicon-chevron-up':emailSortReverse}"
                                                               class="glyphicon glyphicon-chevron-up"></span></a>
                                                         </th>
                                                         <th width="40%"
                                                            data-ng-click="emailSortBy = 'subject';emailSortReverse = !emailSortReverse"
                                                            ng-class="{hOver: hover}" ng-mouseenter="hover=true" ng-mouseleave="hover=false">
                                                            <a href=""><strong>Subject</strong>
                                                            <span data-ng-show="emailSortBy === 'subject'"
                                                               data-ng-class="{'glyphicon glyphicon-chevron-down':!emailSortReverse,'glyphicon glyphicon-chevron-up':emailSortReverse}"
                                                               class="ng-hide glyphicon glyphicon-chevron-up"></span></a>
                                                         </th>
                                                         <th data-ng-click="emailSortBy = 'sentto';emailSortReverse = !emailSortReverse"
                                                            ng-class="{hOver: hover}" ng-mouseenter="hover=true" ng-mouseleave="hover=false">
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
                                                         <td><span data-ng-bind-html="message.subject" class="ng-binding">vb Invite</span></td>
                                                         <td class="ng-binding">Select Members</td>
                                                         <td class="tcell icon" ng-click="">
                                                            <a href="#/sent/345006279" popover="Message Details" popover-placement="top"
                                                               popover-trigger="mouseenter" popover-popup-delay="300"><span
                                                               class="glyphicon glyphicon-stats table-icon mono"></span></a>
                                                         </td>
                                                      </tr>
                                                   </tbody>
                                                   <tfoot>
                                                      <tr>
                                                         <td colspan="4">
                                                            <a href="#/sent" class="btn btn-default btn-sm pull-right">View
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
                                                      <div class="input-group input-group-sm table-heading--element">
                                                         <span class="input-group-addon">
                                                         <span class="glyphicon glyphicon-search"></span>
                                                         </span>
                                                         <input type="text" class="form-control ng-pristine ng-untouched ng-valid"
                                                            name="filter" data-ng-model="filter" placeholder="Search">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row ng-scope">
                                             <div class="col-sm-12">
                                                <span class="verysmalltext text-muted"
                                                   data-ng-show="!showReport &amp;&amp; SentMessages.length">
                                                <span data-ng-if="dateFormatString != ''" class="ng-binding ng-scope">NOTE: Dates are in
                                                yyyy-mm-dd.
                                                <span data-ng-if="tzShort != ''" class="ng-binding ng-scope">Times are shown in
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
                                    <form name="composeform" class="form-horizontal ng-pristine ng-valid ng-submitted" role="form">
                                       <div class="row">
                                          <div class="col-md-12 col-lg-12">
                                             <span class="h2 fade-in ng-binding" data-ng-bind-html="composeHeaderLabel">Compose Message
                                             </span>
                                             <sup>
                                             <span class="text-orange pointer ng-scope" data-ng-if="!complete"
                                                data-ng-click="showHelp()">
                                             <span class="glyphicon glyphicon-question-sign helpme"
                                                uib-popover="Click to learn more about composing messages." popover-placement="top"
                                                popover-trigger="mouseenter" popover-popup-delay="300" popover-enable="true"></span>
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
                                                      <button class="btn btn-underline active" data-ng-class="{active: showType == 'email'}"
                                                         data-ng-click="setShowType('email')">
                                                      Email
                                                      </button>
                                                      <button data-ng-if="!specificSignup" class="btn btn-underline ng-scope"
                                                         data-ng-class="{active: showType == 'template'}"
                                                         data-ng-click="setShowTypeHandler('template')">
                                                      Email Template <img src="slot/images/messageCenter/pro.png" width="24">
                                                      </button>
                                                      <button data-ng-if="!specificSignup" class="btn btn-underline ng-scope"
                                                         data-ng-class="{active: showType == 'text'}"
                                                         data-ng-click="setShowTypeHandler('text')">
                                                      Text Message <img src="slot/images/messageCenter/pro.png" width="24">
                                                      </button>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="form-horizontal">
                                                <div class="row ng-scope" data-ng-if="showType == 'email'">
                                                   <div class="col-xs-12">
                                                      <input type="radio" name="emailType" id="invite" data-ng-model="objForm.emailType"
                                                         value="4" class="css-radio ng-pristine ng-untouched ng-valid"
                                                         data-ng-change="typeChange()">
                                                      <label for="invite" class="radio-css-label">Invite people to a sign up</label>
                                                   </div>
                                                   <div class="col-xs-12">
                                                      <input type="radio" name="emailType" id="bulk" data-ng-model="objForm.emailType"
                                                         value="1" class="css-radio ng-pristine ng-untouched ng-valid"
                                                         data-ng-change="typeChange()">
                                                      <label for="bulk" class="radio-css-label">Email people participating in a sign
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
                                                   <div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
                                                   <input type="text" class="form-control ng-pristine ng-untouched ng-valid" id="filterText"
                                                      placeholder="Search" data-ng-model="filters.search">
                                                </div>
                                             </div>
                                          </span>
                                       </div>
                                       <div class="col-xs-1">
                                          <span class="pull-right table-heading--element">
                                             <a class="dropdown-toggle tool-icon-link" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="true" popover="Settings" popover-placement="top" popover-trigger="mouseenter"
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
                                                         <label for="messagetypes" class="col-xs-6 text-left control-label">Message
                                                         Type</label>
                                                         <div class="col-xs-6">
                                                            <select id="messagetypes" class="form-control ng-pristine ng-untouched ng-valid"
                                                               data-ng-model="filters.messagetype">
                                                               <option value="" selected="selected">All</option>
                                                               <option value="Bulk" selected="">Bulk</option>
                                                               <option value="Invite" selected="">Invite</option>
                                                               <option value="Custom Confirmation" selected="">Custom Confirmations</option>
                                                               <option value="Custom Reminder" selected="">Custom Reminders</option>
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
                                                            <input type="number" name="signUpPerPageId" id="signUpPerPageId"
                                                               data-ng-model="dp.itemsperpage"
                                                               class="form-control ng-pristine ng-untouched ng-valid ng-valid-min ng-valid-max ng-valid-maxlength"
                                                               maxlength="3" min="1" max="999">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="col-5">
                                                      <span class="btn btn-success btn-block" title="Save Settings"><span
                                                         class="glyphicon glyphicon-floppy-disk"></span> Save</span>
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
                                       <div id="loadingReportDetails" class="processing ng-hide" data-ng-show="processing">
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
                                                      <div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
                                                      <input type="text" class="form-control ng-pristine ng-untouched ng-valid"
                                                         id="filterText" placeholder="Search" data-ng-model="filters.search">
                                                   </div>
                                                </div>
                                             </span>
                                          </div>
                                          <div class="col-xs-1">
                                             <span class="pull-right  table-heading--element">
                                                <a class="dropdown-toggle tool-icon-link" data-toggle="dropdown" aria-haspopup="true"
                                                   aria-expanded="true" popover="Settings" popover-placement="top"
                                                   popover-trigger="mouseenter" popover-popup-delay="300">
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
                                                            <label for="messagetypes" class="col-xs-6 text-left control-label">Message
                                                            Type</label>
                                                            <div class="col-xs-6">
                                                               <select id="messagetypes" class="form-control ng-pristine ng-untouched ng-valid"
                                                                  data-ng-model="filters.messagetype">
                                                                  <option value="" selected="selected">All</option>
                                                                  <option value="bulk" selected="">Bulk</option>
                                                                  <option value="Invite" selected="">Invite</option>
                                                                  <option value="Change Notice" selected="">Change Notice</option>
                                                                  <option value="Reminder" selected="">Reminder</option>
                                                                  <option value="TextOptIn" selected="">Text Opt In</option>
                                                                  <option value="Text" selected="">Text</option>
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
                                                               <input type="number" name="signUpPerPageId" id="signUpPerPageId"
                                                                  data-ng-model="sentPagination.itemsperpage"
                                                                  class="form-control ng-pristine ng-untouched ng-valid ng-valid-min ng-valid-max ng-valid-maxlength"
                                                                  maxlength="3" min="1" max="999">
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="col-5">
                                                         <span class="btn btn-success btn-block" title="Save Settings"><span
                                                            class="glyphicon glyphicon-floppy-disk"></span> Save</span>
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
                                                      <th class="tcell date" ng-click="setSentMessageSort('datesent')"
                                                         ng-class="{hOver: hover}" ng-mouseenter="hover=true" ng-mouseleave="hover=false"
                                                         nowrap="">
                                                         <a href="">
                                                         <strong>Sent </strong>
                                                         <span ng-show="sortBy=='datesent'"
                                                            class="glyphicon glyphicon-chevron-up smalltext"></span>
                                                         </a>
                                                      </th>
                                                      <th ng-click="setSentMessageSort('subject')" ng-class="{hOver: hover}"
                                                         ng-mouseenter="hover=true" ng-mouseleave="hover=false" class="">
                                                         <a href=""><strong>Subject <span ng-show="sortBy=='subject'"
                                                            class="glyphicon glyphicon-chevron-up smalltext ng-hide"></span></strong></a>
                                                      </th>
                                                      <th class="tcell sentto" ng-click="setSentMessageSort('countsent')"
                                                         ng-class="{hOver: hover}" ng-mouseenter="hover=true" ng-mouseleave="hover=false">
                                                         <a href=""><strong>Sent To <span ng-show="sortBy=='countsent'"
                                                            class="glyphicon glyphicon-chevron-up smalltext ng-hide"></span></strong></a>
                                                      </th>
                                                      <th class="tcell status" ng-click="setSentMessageSort('status')"
                                                         ng-class="{hOver: hover}" ng-mouseenter="hover=true" ng-mouseleave="hover=false">
                                                         <a href=""><strong>Status <span ng-show="sortBy=='status'"
                                                            class="glyphicon glyphicon-chevron-up smalltext ng-hide"></span></strong></a>
                                                      </th>
                                                      <th class="tcell icon"></th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr ng-repeat="message in filteredSentMessages" ng-class="{hOver: hover}"
                                                      ng-mouseenter="hover=true" ng-mouseleave="hover=false" class="ng-scope">
                                                      <td class="tcell date ng-binding">2021-12-09 1:04pm</td>
                                                      <td class="tcell">
                                                         <span data-ng-bind-html="message.subject" class="ng-binding">vb Invite</span> <br>
                                                         <span class="verysmalltext text-muted ng-binding">Invite - vb</span>
                                                      </td>
                                                      <td class="tcell sentto ng-binding">3</td>
                                                      <td class="tcell status ng-binding">Complete</td>
                                                      <td class="tcell icon">
                                                         <a href="#" popover="Message Details" popover-placement="top"
                                                            popover-trigger="mouseenter" popover-popup-delay="300"><span
                                                            class="glyphicon glyphicon-stats table-icon mono"></span></a>
                                                      </td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                       <span class="verysmalltext text-muted" data-ng-show="!showReport &amp;&amp; SentMessages.length">
                                       <span data-ng-if="dateFormatString != ''" class="ng-binding ng-scope">NOTE: Dates are in
                                       yyyy-mm-dd. </span>
                                       <span data-ng-if="tzShort != ''" class="ng-binding ng-scope">Times
                                       are shown in - IST. To modify, update your <a href="#">settings</a>.</span>
                                       <br><br>
                                       </span>
                                       <section ng-show="showReport" class="ng-hide">
                                          <div class="row">
                                             <div class="col-sm-12">
                                                <h2 class="hrow fade-in ng-binding ng-scope" data-ng-if="messageHeader[0].sendtext != 1">
                                                   Sent Message: 
                                                </h2>
                                                <div class="btn-underlines">
                                                   <a href="#/sent" class="btn btn-underline">Back</a>
                                                   <button class="btn btn-underline active" ng-class="{active: activeTab==1}"
                                                      ng-click="setActiveTab(1,SelectedRowID)"> Message Details</button>
                                                   <button class="btn btn-underline" ng-class="{active: activeTab==2}"
                                                      ng-click="setActiveTab(2,SelectedRowID)"> Message Analytics</button>
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
                                                         <span data-ng-if="!messageHeader[0].urlid.length" class="ng-binding ng-scope">
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
                                                         <div data-ng-bind-html="bodyPreview" align="left" class="ng-binding"></div>
                                                      </div>
                                                   </div>
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
                                 <input name="memberid"
                                    id="memberid" type="hidden" value="128801955"><input name="successpage" id="successpage"
                                    type="hidden" value="t.CustomReport"><input name="failpage" id="failpage" type="hidden"
                                    value="t.Reports">
                                 <h3>Include the Following Sign Ups:</h3>
                                 <ul>
                                    <table cellspacing="0" cellpadding="2">
                                       <tbody>
                                          <tr>
                                             <td class="smalltext" valign="top">
                                                <input type="checkbox" class="css-checkbox-chkbx-mini" name="listid" id="listid_33404602"
                                                   value="33404602" onclick="checkboxlimit(document.myform.listid, 25);">
                                                <label for="listid_33404602" class="chkbx-css-label-mini" title="hello">hello</label><br>
                                                <input type="checkbox" class="css-checkbox-chkbx-mini" name="listid" id="listid_33404627"
                                                   value="33404627" onclick="checkboxlimit(document.myform.listid, 25);">
                                                <label for="listid_33404627" class="chkbx-css-label-mini" title="vb">vb</label><br>
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
                                    <input type="radio" name="allDates" id="allDates_1" value="1" class="css-radio-mini" checked="">
                                    <label for="allDates_1" class="radio-css-label-mini">Include all dates from the
                                    selected sign ups</label><br>
                                    <input type="radio" name="allDates" id="allDates_0" value="0" class="css-radio-mini">
                                    <label for="allDates_0" class="radio-css-label-mini">Only include dates on the
                                    selected sign ups that are between</label>
                                    <!-- <div class="row">
                                       <div class="col-xs-3">
                                         <div class="input-group input-group">
                                           <span class="input-group-addon">
                                             <span class="glyphicon glyphicon-calendar"
                                               onclick="displayDatePicker('startdate', this, 'ymd', '-');"
                                               style="font-size: 12pt;"></span>
                                           </span>
                                           <input type="text" class="form-control" name="startdate" size="12" value="2021-11-10">
                                         </div>
                                       </div>
                                       <div class="col-xs-3">
                                         <div class="input-group input-group">
                                           <span class="input-group-addon">
                                             <span class="glyphicon glyphicon-calendar"
                                               onclick="displayDatePicker('enddate', this, 'ymd', '-');" style="font-size: 12pt;"></span>
                                           </span>
                                           <input type="text" class="form-control" name="enddate" size="12" value="2022-02-10">
                                         </div>
                                       </div>
                                       </div> -->
                                 </ul>
                                 <h3>Report Style:</h3>
                                 <ul>
                                    <span class="smalltext"><span style="color:red;">Note:</span> If you collected phone
                                    &amp; address information or a custom question, choose the "List of Sign Ups"
                                    report.<br></span>
                                    <div class="indentblock">
                                       <input type="radio" name="style" id="style_count" value="count" class="css-radio-mini" checked="">
                                       <label for="style_count" class="radio-css-label-mini">Total Sign Up Quantity by
                                       User</label><br>
                                       <input type="radio" name="style" id="style_users" value="users" class="css-radio-mini">
                                       <label for="style_users" class="radio-css-label-mini">List of Users for Export
                                       to Excel</label><br>
                                       <input type="radio" name="style" id="style_slots" value="slots" class="css-radio-mini">
                                       <label for="style_slots" class="radio-css-label-mini">List of Sign Ups for
                                       Export to Excel</label>
                                       <div id="showFields" class="indentblock noFlashHide" style="display: block;">
                                          <div id="reportFieldSelection"></div>
                                       </div>
                                    </div>
                                 </ul>
                                 <br>
                                 <button type="button" name="create" class="btn btn-success" onclick="js_submitCustomReport()">Create
                                 Report</button>
                              </form>
                           </div>
                           <div id="tabb2" class="tabcontent">
                              <form name="myform" id="myform" action="/index.cfm?go=t.ProcessSignupStatsReport" method="POST"
                                 onsubmit="return _CF_checkmyform(this)" class="ng-pristine ng-valid">
                                 <input name="memberid"
                                    id="memberid" type="hidden" value="128801955"><input name="successpage" id="successpage"
                                    type="hidden" value="t.SignupStatsReport"><input name="failpage" id="failpage" type="hidden"
                                    value="t.SignupStats">
                                 <strong>Include the Following Signup Forms:</strong>
                                 <ul>
                                    <table cellspacing="0" cellpadding="2">
                                       <tbody>
                                          <tr>
                                             <td class="smalltext" valign="top">
                                                <input type="checkbox" class="css-checkbox-chkbx-mini" name="listid" id="listid_33404602"
                                                   value="33404602" onclick="checkboxlimit(document.myform.listid, 25);">
                                                <label for="listid_33404602" class="chkbx-css-label-mini" title="hello">hello</label><br>
                                                <input type="checkbox" class="css-checkbox-chkbx-mini" name="listid" id="listid_33404627"
                                                   value="33404627" onclick="checkboxlimit(document.myform.listid, 25);">
                                                <label for="listid_33404627" class="chkbx-css-label-mini" title="vb">vb</label><br>
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
                                                         alert("You can only select a maximum of " + limit + " sign ups for your report.")
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
                                                       checkgroup[i].onclick = function () {
                                                         var checkedcount = 0
                                                         for (var i = 0; i < checkgroup.length; i++)
                                                           checkedcount += (checkgroup[i].checked) ? 1 : 0
                                                         if (checkedcount > limit) {
                                                           alert("You can only select a maximum of " + limit + " sign ups for your report.")
                                                           this.checked = false
                                                         }
                                                       }
                                                     }
                                                   }
                                                   //  End -->
                                                </script>
                                                <button type="button" name="CheckAll" onclick="checkAll(document.myform.listid)"
                                                   class="btn btn-default btn-sm">Check All</button>
                                                <button type="button" name="UnCheckAll" onclick="uncheckAll(document.myform.listid)"
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
                                    <div>
                                       <div>
                                          <div class="input-group input-group">
                                             <span class="input-group-addon">
                                             <span class="glyphicon glyphicon-calendar"
                                                onclick="displayDatePicker('startdate', this, 'ymd', '-');"
                                                style="font-size: 12pt;"></span>
                                             </span>
                                             <input type="text" class="form-control" name="startdate" size="12" value="2021-12-03">
                                          </div>
                                       </div>
                                       <div class="col-xs-3">
                                          <div class="input-group input-group">
                                             <span class="input-group-addon">
                                             <span class="glyphicon glyphicon-calendar"
                                                onclick="displayDatePicker('enddate', this, 'ymd', '-');" style="font-size: 12pt;"></span>
                                             </span>
                                             <input type="text" class="form-control" name="enddate" size="12" value="2021-12-10">
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
                                    <img src="slot/images/PRO-stamp_100.png" height="40" align="center">&nbsp;&nbsp;&nbsp;<strong>This
                                    report is available for Pro Gold &amp; Platinum subscribers. <a href="/Pro">Learn
                                    more</a>.</strong><br clear="all">
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
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane" id="e">
                        <div id="memPgCenter" class="member-blocks--maincontent-wide">
                           <!-- <script src="/js/controllers/tools/proToolsViewController.js" type="text/javascript"></script> -->
                           <!-- <script src="/js/services/tools/proToolsService.js" type="text/javascript"></script> -->
                           <h1 class="tools-spacing">Tools</h1>
                           <div class="panel panel-default">
                              <div class="panel-heading">
                                 <div class="spacer-sm"></div>
                                 <p><strong><img src="slot/images/PRO-stamp_100.png" height="40" align="center"> These
                                    advanced features are available with premium plans. <a href="/pricing">Learn
                                    more</a>.</strong>
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- <div class="tab-pane" id="f">FFFFFFThirdamuno, ipsum dolor sit amet, consectetur adipiscing elit.
                        Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt
                        condimentum vitae.</div> -->
                  </div>
               </div>
               </noscript>
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
               .modal-content {
               background-color: #fefefe;
               top: 50%;
               left: 50%;
               color: #4a4a4a;
               max-width: 100%;
               position: relative;
               border-radius: 10px;
               border: 1px solid #ccc;
               width: 70%;
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
               .tabs {
               max-width: 538px;
               }
               .tabs-nav li {
               float: left;
               width: 50%;
               list-style-type: none;
               }
               .tabs-nav li:first-child a {
               border-right: 0;
               border-top-left-radius: 6px;
               }
               .tabs-nav li:last-child a {
               border-top-right-radius: 6px;
               }
               .tab-active a {
               background: #fff;
               border-bottom-color: transparent;
               color: #2db34a;
               cursor: default;
               border-bottom: 2px solid;
               }
               .tabs-stage {
               border: 1px solid #cecfd5;
               border-radius: 0 0 6px 6px;
               border-top: 0;
               clear: both;
               padding: 24px 30px;
               position: relative;
               top: -1px;
               }
            </style>
            <footer>
               <div class="container">
                  <div class="row footer_inner">
                     <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div _ngcontent-vpu-c169="" class="footer_main_box">
                           <h2 _ngcontent-vpu-c169="">QuickMints </h2>
                           <ul _ngcontent-vpu-c169="">
                              <li _ngcontent-vpu-c169=""><a _ngcontent-vpu-c169="" href="#/how-work"
                                 ng-reflect-router-link="/how-work">How It works</a></li>
                              <li _ngcontent-vpu-c169=""><a _ngcontent-vpu-c169="" href="#/term-conditions"
                                 ng-reflect-router-link="/term-conditions">Terms &amp; Conditions</a>
                              </li>
                              <li _ngcontent-vpu-c169=""><a _ngcontent-vpu-c169="" href="#/Privacy-policy"
                                 ng-reflect-router-link="/Privacy-policy">Privacy Policy</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div _ngcontent-vpu-c169="" class="footer_main_box">
                           <h2 _ngcontent-vpu-c169="">Providers </h2>
                           <ul _ngcontent-vpu-c169="">
                              <li _ngcontent-vpu-c169=""><a _ngcontent-vpu-c169="" href="#/provider-faq"
                                 ng-reflect-router-link="/provider-faq">Provider FAQS</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div _ngcontent-vpu-c169="" class="footer_main_box">
                           <h2 _ngcontent-vpu-c169="">Customers </h2>
                           <ul _ngcontent-vpu-c169="">
                              <li _ngcontent-vpu-c169=""><a _ngcontent-vpu-c169="" href="#/customer-faq"
                                 ng-reflect-router-link="/customer-faq">Customer FAQS</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div _ngcontent-vpu-c169="" class="footer_main_box contact_footer_box">
                           <h2 _ngcontent-vpu-c169="">Contact Us</h2>
                           <p _ngcontent-vpu-c169="" ng-reflect-ng-class="[object Object]" class="message">
                              admin@quickmints.com 
                           </p>
                           <p _ngcontent-vpu-c169="" ng-reflect-ng-class="[object Object]" class="address"> San
                              Ramon, CA 
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div _ngcontent-vpu-c169="" class="copy_right">
                  <div _ngcontent-vpu-c169="" class="container">
                     <div _ngcontent-vpu-c169="" class="copy_right_inner">
                        <p _ngcontent-vpu-c169="">© 2021 Quickmints. All rights reserved.</p>
                        <a _ngcontent-vpu-c169="" href="#"><img
                           _ngcontent-vpu-c169="" src="slot/_next/static/img/payment_options5.png" alt=""></a>
                     </div>
                  </div>
               </div>
            </footer>
            <div id="myModal1" class="modal">
               <div id="modal-content1" class="modal-content animation-1">
                  <header class="modal-header">
                     <p class="modal-header-title">
                        Create New Group2
                     </p>
                     <button id="close1" class="modal-header-icon">
                     <span class="icon">
                     <i class="bx bx-x"></i>
                     </span>
                     </button>
                  </header>
                  <!-- Modal body -->
                  <div class="modal-body">
                  

<div class="tabset">
  <!-- Tab 1 -->
  <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
  <label for="tab1">Märzen</label>
  <!-- Tab 2 -->
  <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
  <label for="tab2">Rauchbier</label>
  <!-- Tab 3 -->
 
  
  <div class="tab-panels">
    <section id="marzen" class="tab-panel">
      <div class="row">
        <div class="col-md-4">
          <label for="exampleInputEmail1">Title of slot</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="col-md-4">
          <label for="exampleInputEmail1">Help Comment</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="col-md-4">
          <label for="exampleFormControlSelect1">Number Wanted</label>
     <input type="number" class="form-control" name="number" value="1">
        </div>

      </div>
     
      <br>
      
     
      
      <div id="req_input" class="datainputs">
        <input type="datetime-local" id="birthdaytime" name="birthdaytime">
        <input type="datetime-local" id="birthdaytime" name="birthdaytime">
      </div>
      
      <a href="#" id="addmore" class="add_input">Add more</a>
      <button type="submit" class="add_input">Success</button>
    </section>
    <section id="rauchbier" class="tab-panel">
      <div class="row">
        <div class="col-md-4">
          <label for="exampleInputEmail1">Title of slot</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="col-md-4">
          <label for="exampleInputEmail1">Help Comment</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="col-md-4">
          <label for="exampleFormControlSelect1">Number Wanted</label>
     <input type="number" class="form-control" name="number" value="1">
        </div>

      </div>
      <div id="req_input1" class="datainputs">
        <input type="datetime-local" id="birthdaytime" name="birthdaytime">
        <input type="datetime-local" id="birthdaytime" name="birthdaytime">
      </div>
      
      <a href="#" id="addmore1" class="add_input">Add more</a>
      <button type="submit" class="btn btn-success">Success</button>
    </section>
   
  </div>
  
</div>

                     
               </div>
            </div>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
      <script>
         (function () {
           var d = document,
             tabs = d.querySelector('.tabs'),
             tab = d.querySelectorAll('li'),
             contents = d.querySelectorAll('.content');
           tabs.addEventListener('click', function (e) {
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
         var tabsFn = (function () {
         
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
         
           var i, tabcontent, tablinks;
         
         
           tabcontent = document.getElementsByClassName("tabcontent");
           for (i = 0; i < tabcontent.length; i++) {
             tabcontent[i].style.display = "none";
           }
         
         
           tablinks = document.getElementsByClassName("tablinks");
           for (i = 0; i < tablinks.length; i++) {
             tablinks[i].className = tablinks[i].className.replace(" active", "");
           }
         
         
           document.getElementById(cityName).style.display = "block";
           evt.currentTarget.className += " active";
         }
      </script>
      <script>
         var modal = document.getElementById("myModal");
         var btn = document.getElementById("open-modal");
         var span = document.getElementById("close");
         btn.onclick = function () {
           modal.style.display = "block";
         }
         span.onclick = function () {
           modal.style.display = "none";
         }
         window.onclick = function (event) {
           if (event.target == modal) {
             modal.style.display = "none";
           }
         }
      </script>
      <script>
         var modal2 = document.getElementById("myModal2");
         var btn2
         var span2 = document.getElementById("close2");
         btn2.onclick = function () {
           modal2.style.display = "block";
         }
         span2.onclick = function () {
           modal2.style.display = "none";
         }
         window.onclick = function (event) {
           if (event.target == modal2) {
             modal2.style.display = "none";
           }
         }
      </script>
      <script>
         $('.tabs-stage div').hide();
         $('.tabs-stage div:first').show();
         $('.tabs-nav li:first').addClass('tab-active');
         $('.tabs-nav a').on('click', function (event) {
           event.preventDefault();
           $('.tabs-nav li').removeClass('tab-active');
           $(this).parent().addClass('tab-active');
           $('.tabs-stage div').hide();
           $($(this).attr('href')).show();
         });
      </script>
      <script>
         $(".Click-here").on('click', function () {
           $(".custom-model-main").addClass('model-open');
         });
         $(".close-btn, .bg-overlay").click(function () {
           $(".custom-model-main").removeClass('model-open');
         });
         
         $('#datePick').multiDatesPicker({
           dateFormat: "yy-mm-dd"
         });
      </script>
      <script>
         $('.tabs-stage div').hide();
         $('.tabs-stage div:first').show();
         $('.tabs-nav li:first').addClass('tab-active');

         $('.tabs-nav a').on('click', function (event) {
           event.preventDefault();
           $('.tabs-nav li').removeClass('tab-active');
           $(this).parent().addClass('tab-active');
           $('.tabs-stage div').hide();
           $($(this).attr('href')).show();
         });
      </script>
      <script>
         var modal1 = document.getElementById("myModal1");
         
         var btn1 = document.getElementById("open-modal1");
         
         var span1 = document.getElementById("close1");
         
         btn1.onclick = function () {
           modal1.style.display = "block";
         }
         span1.onclick = function () {
           modal1.style.display = "none";
         }
         window.onclick = function (event) {
           if (event.target == modal1) {
             modal1.style.display = "none";
           }
         }
         var modal2 = document.getElementById("myModal2");
         
         var btn2 = document.getElementById("open-modal2");
         
         var span2 = document.getElementById("close2");
         
         btn2.onclick = function () {
         modal2.style.display = "block";
         }
         span2.onclick = function () {
         modal2.style.display = "none";
         }
         window.onclick = function (event) {
         if (event.target == modal2) {
         modal2.style.display = "none";
         }
         }
         const tabs = document.querySelectorAll('.tab'); 
         
         tabs.forEach(tab => {
         tab.addEventListener('click', event => {
         console.log(event.currentTarget); 
         console.log(event.currentTarget.dataset);
         document.querySelector('.tab.active')?.classList.remove('active');
         event.currentTarget.classList.add('active');
         document.querySelector('.content.show').classList.remove('show');
         const selectedContent = event.currentTarget.dataset.content; 
         document.querySelector(selectedContent).classList.add('show');
         })
         })
         
      </script>
      <script>
         $(document).ready(function() {
         var buttonAdd = $("#add-button");
         var buttonRemove = $("#remove-button");
         var className = ".dynamic-field";
         var count = 0;
         var field = "";
         var maxFields = 5;
         
         function totalFields() {
         return $(className).length;
         }
         
         function addNewField() {
         count = totalFields() + 1;
         field = $("#dynamic-field-1").clone();
         field.attr("id", "dynamic-field-" + count);
         field.children("label").text("Field " + count);
         field.find("input").val("");
         $(className + ":last").after($(field));
         }
         
         function removeLastField() {
         if (totalFields() > 1) {
           $(className + ":last").remove();
         }
         }
         
         function enableButtonRemove() {
         if (totalFields() === 2) {
           buttonRemove.removeAttr("disabled");
           buttonRemove.addClass("shadow-sm");
         }
         }
         
         function disableButtonRemove() {
         if (totalFields() === 1) {
           buttonRemove.attr("disabled", "disabled");
           buttonRemove.removeClass("shadow-sm");
         }
         }
         
         function disableButtonAdd() {
         if (totalFields() === maxFields) {
           buttonAdd.attr("disabled", "disabled");
           buttonAdd.removeClass("shadow-sm");
         }
         }
         
         function enableButtonAdd() {
         if (totalFields() === (maxFields - 1)) {
           buttonAdd.removeAttr("disabled");
           buttonAdd.addClass("shadow-sm");
         }
         }
         
         buttonAdd.click(function() {
         addNewField();
         enableButtonRemove();
         disableButtonAdd();
         });
         
         buttonRemove.click(function() {
         removeLastField();
         disableButtonRemove();
         enableButtonAdd();
         });
         });
      </script>
      <script>
        $(document).ready(function() {
  $("#addmore").click(function() {
    $("#req_input").append('<div class="required_inp"><input type="datetime-local" id="birthdaytime" name="birthdaytime"><input type="datetime-local" id="birthdaytime" name="birthdaytime">' + '<input type="button" class="inputRemove" value="Remove"/></div>');
  });
  $("#addmore1").click(function() {
    $("#req_input1").append('<div class="required_inp"><input type="datetime-local" id="birthdaytime" name="birthdaytime"><input type="datetime-local" id="birthdaytime" name="birthdaytime">' + '<input type="button" class="inputRemove" value="Remove"/></div>');
  });
  $('body').on('click','.inputRemove',function() {
    $(this).parent('div.required_inp').remove()
  });
});
      </script>
      <script>
          (function() {
  var copyButton = document.querySelector('.copy button');
  var copyInput = document.querySelector('.copy input');
  copyButton.addEventListener('click', function(e) {
    e.preventDefault();
    var text = copyInput.select();
    document.execCommand('copy');
  });

  copyInput.addEventListener('click', function() {
    this.select();
  });
})();
      </script>
   </body>
</html>