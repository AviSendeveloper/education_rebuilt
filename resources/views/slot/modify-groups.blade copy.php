<!DOCTYPE html>
<html lang="en-US">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Publish</title>
     
      <script type="text/javascript"></script>
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
         integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     
      <link rel="stylesheet" href="{{asset('slot/dist/css/SUGstyleV3-responsive.minf4a1.css?v=1636996767345')}}">
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
      <script type="text/javascript" src="{{asset('slot/dist/js/lib/jquery-1.11.1.minf4a1.js?v=1636996767345')}}"></script>
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
         
      </style>
   </head>
   <style>
      
      .datainputs {
      margin-top: 39px;
      paddikaluleft: 14px;
      }
      .datainputs input {
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
      .inputRemove {
      color: #fff !important;
      background: #056b99;
      }
      .add_input {
      color: #fff !important;
      background: #056b99;
      border: none !important;
      }
      input:focus {
      outline: none;
      }
      .add_input,
      .inputRemove {
      display: inline-block;
      color: #3d3d3d;
      text-align: center;
      text-decoration: none;
      width: auto;
      height: 40px;
      line-height: 40px;
      border: 2px solid #3d3d3d;
      padding: 0px 15px;
      border-radius: 5px;
      }
      .inputRemove {
      cursor: pointer;
      }
      .tabset>input[type="radio"] {
      position: absolute;
      left: -200vw;
      }
      .tabset .tab-panel {
      display: none;
      }
      .tabset>input:first-child:checked~.tab-panels>.tab-panel:first-child,
      .tabset>input:nth-child(3):checked~.tab-panels>.tab-panel:nth-child(2),
      .tabset>input:nth-child(5):checked~.tab-panels>.tab-panel:nth-child(3),
      .tabset>input:nth-child(7):checked~.tab-panels>.tab-panel:nth-child(4),
      .tabset>input:nth-child(9):checked~.tab-panels>.tab-panel:nth-child(5),
      .tabset>input:nth-child(11):checked~.tab-panels>.tab-panel:nth-child(6) {
      display: block;
      }
     
    
      .tabset>label {
      position: relative;
      display: inline-block;
      padding: 15px 15px 25px;
      border: 1px solid transparent;
      border-bottom: 0;
      cursor: pointer;
      font-weight: 600;
      }
      .tabset>label::after {
      content: "";
      position: absolute;
      left: 15px;
      bottom: 10px;
      width: 22px;
      height: 4px;
      background: #8d8d8d;
      }
      .tabset>label:hover,
      .tabset>input:focus+label {
      color: #06c;
      }
      .tabset>label:hover::after,
      .tabset>input:focus+label::after,
      .tabset>input:checked+label::after {
      background: #06c;
      }
      .tabset>input:checked+label {
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
      }
   </style>
   <body>
      @include('slot/layout.header')
      <div class="mainbody">
         <div id="myModal7" class="modal">
            <div id="modal-content7" class="modal-content animation-1">
               <header class="modal-header">
                  <p class="modal-header-title">
                     Create New Group2
                  </p>
                  <button id="close7" class="modal-header-icon">
                  <span class="icon">
                  <i class="bx bx-x"></i>
                  </span>
                  </button>
               </header>
               <div class="modal-body">
                  <div class="tabset">
                     <!-- Tab 1 -->
                     <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
                     <label for="tab1">Details</label>
                     <!-- Tab 2 -->
                     <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
                     <label for="tab2">Help Comment</label>
                     <!-- Tab 3 -->
                     <div class="tab-panels">
                        <section id="marzen" class="tab-panel">
                           <div class="row">
                              <form action="/modify-design-publish" method="post">
                                 @csrf
                                  <input type="hidden" name="publish_id" value="{{$item['id']}}">
                                 <div class="col-md-3">
                                    <label for="exampleInputEmail1">Title of slot</label>
                                    <input type="text" class="form-control" name="tslot" id="exampleInputEmail1" aria-describedby="emailHelp">
                                 </div>
                                  <div class="col-md-3">
                                 <label for="exampleInputEmail1">Location</label>
                                 <input type="text" class="form-control" name="location" id="exampleInputEmail1" aria-describedby="emailHelp">
                               </div>
                                 <div class="col-md-3">
                                    <label for="exampleInputEmail1">Help Comment</label>
                                    <input type="text" class="form-control" name="help" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
                                 </div>
                                 <div class="col-md-3">
                                    <label for="exampleFormControlSelect1">Number Wanted</label>
                                    <input type="number" class="form-control" name="number" value="1">
                                 </div>
                                 <br><br>
                                 <div id="req_input" class="datainputs">
                                    <input type="datetime-local" id="birthdaytime" name="time1[]" value="" multiple>
                                    <input type="datetime-local" id="birthdaytime1" name="time2[]" value="" multiple>
                                 </div>
                                 <a href="#" id="addmore" class="add_input">Add more</a>
                                 <button type="submit" class="add_input">Success</button>
                              </form>
                           </div>
                        </section>
                        <section id="rauchbier" class="tab-panel">
                           <div class="row">
                              <form action="/modify-design-publish" method="post">
                                 @csrf
                                 <input type="hidden" name="publish_id" value="{{$item['id']}}">
                                 <div class="col-md-3">
                                    <label for="exampleInputEmail1">List of slot</label>
                                    <input type="text" class="form-control" name="lslot" id="exampleInputEmail1" aria-describedby="emailHelp">
                                 </div>
                                  <div class="col-md-3">
                                 <label for="exampleInputEmail1">Location</label>
                                 <input type="text" class="form-control" name="location" id="exampleInputEmail1" aria-describedby="emailHelp">
                               </div>
                                 <div class="col-md-3">
                                    <label for="exampleInputEmail1">Help Comment</label>
                                    <input type="text" class="form-control" name="help" id="exampleInputEmail1" aria-describedby="emailHelp" value=""> 
                                 </div>
                                 <div class="col-md-3">
                                    <label for="exampleFormControlSelect1">Number Wanted</label>
                                    <input type="number" class="form-control" name="number" value="1">
                                 </div>
                                 <br><br>
                                 <div id="req_input1" class="datainputs">
                                    <input type="datetime-local" id="birthdaytime2" name="time1[]">
                                    <input type="datetime-local" id="birthdaytime3" name="time2[]">
                                 </div>
                                 <a href="#" id="addmore1" class="add_input">Add more</a>
                                 <button type="submit" class="add_input">Success</button>
                              </form>
                           </div>
                        </section>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
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
         <ul class="nav nav-tabs member-sidebar--menu"  style="display: inline-grid;">
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
            
         </ul>
         </div>
               </div>
<!-- col-2-end -->
<div class="col-md-10 col-lg-10 col-sm-12">
<div class="tabs-left">
            <div class="tab-content">
               <div class="tab-pane active" id="a">
                  <div id="memPgCenter" class="member-blocks--maincontent-wide">
                     <div id="wizardView" class="kaluscope">
                        <div id="signupWizardContainer">
                           <div class="col-xs-12">
                              <h1 class="hrow wizard-heading kalubinding">Edit Sign Up
                                 <small class="h2 text-darkgray fade-in kalubinding kaluscope"
                                    >- {{$item['title']}} </small>
                              </h1>
                           </div>
                           <div class="col-xs-12" >
                              <div class="btn-tabs">
                                 <button class="btn btn-tab kalubinding tablinks" onclick="openCity(event, 'Lon')">Design</button>
                                 <button class="btn btn-tab kalubinding tablinks " onclick="openCity(event, 'Lon11')"
                                    >Slots</button>
                                 <button class="btn btn-tab kalubinding  tablinks" onclick="openCity(event, 'Lon23')"
                                    >Settings</button>
                                 <button class="btn btn-tab kalubinding tablinks active" onclick="openCity(event, 'Lon25')"
                                    >Publish</button>
                              </div>
                           </div>
                           <div id="myModal2" class="modal">
                            
                              <div id="modal-content2" class="modal-content animation-1">
                              
                                 <header class="modal-header">
                                    <p class="modal-header-title">
                                       Create New Group
                                    </p>
                                    <button id="close2" class="modal-header-icon">
                                    <span class="icon">
                                    <i class="bx bx-x"></i>
                                    </span>
                                    </button>
                                 </header>
                                
                                 <div class="modal-body">
                                    <div class="form-group">
                                       <label for="exampleInputEmail1">Group Name</label>
                                       <form method="post" action="/group-submit">
                                          @csrf
                                          <div class="form-group">
                                             <input type="text" class="form-control" name="group">
                                          </div>
                                          <div class="form-group" style="float: right;">
                                             <button type="submit" formaction="/group-submit" class="btn btn-primary float-right btn-submit">Submit</button>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <form action="/modify-design-publish" method="post">
                              @csrf
                              <input type="hidden" name="signup_id" value="{{$item['id']}}"> 
                              <div id="Lon" class="tabcontent" style="display: none;">
                                 <div id="wizardStep1" class="l-wizard-step-1 kaluscope">
                                    <div class="form-horizontal">
                                       <div class="form-group feedback-group">
                                          <label for="signuptitle" class="col-xs-2 control-label text-left">Title
                                          of Sign Up</label>
                                          <div class="col-xs-5">
                                             <input autocomplete="off" name="title" value="{{$item['title']}}" type="text" class="form-control " id="signuptitle" maxlength="255" placeholder="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-horizontal">
                                                            <div class="form-group feedback-group">
                                                             <div class="col-md-2 col-lg-2 col-sm-12">
                                                              <label>Message</label>
                                                               </div>
                                                               <div class="col-md-5 col-lg-5 col-sm-12">
                                                               <textarea class="form-control rounded-0" name="group" id="exampleFormControlTextarea1" rows="3"
                    require> {{$item['group']}}</textarea>
                                                             </div>
                                                           
                                                               
                                                              </div>
                                                               </div>

                                                               <div class="form-group feedback-group">
                                                               <div class="col-md-2 col-lg-2 col-sm-12">
                                                               <label for="exampleFormControlFile1">Images</label>
                                                               </div>
                                                               <div class="col-md-5 col-lg-5 col-sm-12">
                                                               <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
                                                             </div>
                                                               </div>
                                                               <div class="form-group feedback-group">
                                                               <div class="col-md-2 col-lg-2 col-sm-12">
                                                               <label for="exampleFormControlFile1">Organizer Name</label>
                                                               </div>
                                                               <div class="col-md-5 col-lg-5 col-sm-12">
                                                               <input type="text" name="category" class="form-control" placeholder="Name" value="{{$item['category']}}"
                require>
                                                             </div>
                                                               </div>
                                                               <div class="form-group feedback-group">
                                                               <div class="col-md-2 col-lg-2 col-sm-12">
                                                               <label for="exampleFormControlFile1">Organizer Phone</label>
                                                               </div>
                                                               <div class="col-md-5 col-lg-5 col-sm-12">
                                                               <input type="phone" name="cause" class="form-control" value="{{$item['cause']}}" placeholder="Phone"
                require>
                                                             </div>
                                                               </div>
                                                                
                                    <div class="spacer"></div>
                                    <div outside-click="w1.showSlideout=false" click-watcher="w1.showSlideout" class="kaluhide">
                                    </div>
                                 </div>
                                 <div class="spacer"></div>
                                 <div class="col-xs-10">
                                    <button class="tp-btn-register">Save and
                                    Continue</button>
                                 </div>
                                 <div class="col-xs-2 text-right">
                                 </div>
                              </div>
                           </form>
                           <div id="Lon11" class="tabcontent" style="display: none;">
                              <div id="wizardStepContainer" class="col-xs-12">
                                 <form >
                                    <div  class="kaluscope">
                                       <style class="kaluscope">
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
                                          paddikaluright: 0;
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
                                          paddikaluleft: 0 !important;
                                          }
                                        
                                          .checkbox-icon-container {
                                          height: 22px;
                                          }
                                          .checkbox-icon-label {
                                          paddikaluleft: 24px !important;
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
                                          paddikaluleft: 0px;
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
                                       <div id="wizarStepContainer" class="kaluscope"></div>
                                       <div class="l-wizard-step-2 kaluscope">
                                          <div  class="kaluscope">
                                             <h2 class="kalubinding">Select the format for your sign up</h2>
                                             <div class="row">
                                                <div class="col-xs-3">
                                                   <div>
                                                      <input type="radio" id="css" name="fav_language" required="" value="sort_by_date" @if($pp['type_of_sort']=='sort_by_date') checked="" @endif>
                                                      <label for="css"><strong class="kalubinding">Sort by Date</strong></label>
                                                   </div>
                                                   <p class="smalltext text-muted kalubinding">
                                                      For sign ups having one or more slots per date/time
                                                      <br><a href="#" class="kalubinding">See examples</a>
                                                   </p>
                                                </div>
                                                <div class="col-xs-3">
                                                   <div>
                                                      <input type="radio" id="css" name="fav_language" required="" value="sort_by_slot" @if($pp['type_of_sort']=='sort_by_slot') checked="" @endif>
                                                      <label for="css"><strong class="kalubinding">Sort by Slot</strong></label>
                                                   </div>
                                                   <p class="smalltext text-muted kalubinding">
                                                      For sign ups where people scan the slots before the date/time
                                                      <br><a href="#" class="kalubinding">See examples</a>
                                                   </p>
                                                </div>
                                                <div class="col-xs-3">
                                                   <div>
                                                      <input type="radio" id="css" name="fav_language" required="" value="slots_only" @if($pp['type_of_sort']=='slots_only') checked="" @endif>
                                                      <label for="css"><strong class="kalubinding">Slots
                                                      Only</strong></label>
                                                   </div>
                                                   <p class="smalltext text-muted kalubinding">
                                                      For sign ups without a specific date or time involved
                                                      <br><a href="javascript:;"
                                                         class="kalubinding">See examples</a>
                                                   </p>
                                                </div>
                                                <div class="col-xs-3">
                                                   <div>
                                                      <input type="radio" id="css" name="fav_language" required="" value="single_date" @if($pp['type_of_sort']=='single_date') checked="" @endif>
                                                      <label for="css"><strong class="kalubinding">Single Date
                                                      RSVP</strong></label>
                                                   </div>
                                                   <p class="smalltext text-muted kalubinding">
                                                      For a one date event where you want to see who can attend
                                                      <br><a href="#" class="kalubinding">See examples</a>
                                                   </p>
                                                </div>
                                             </div>
                                             <div class="kaluscope">
                                                <div class="row">
                                                   <div class="col-xs-12">
                                                      <div id="myModal" class="modal">
                                                         <div id="modal-content" class="modal-content animation-1">
                                                            <header class="modal-header">
                                                               <p class="modal-header-title">
                                                                  Create New Group
                                                               </p>
                                                               <button id="close" class="modal-header-icon">
                                                               <span class="icon">
                                                               <i class="bx bx-x"></i>
                                                               </span>
                                                               </button>
                                                            </header>
                                                            <!-- Modal body -->
                                                            <div class="modal-body">
                                                               <div class="tabs">
                                                                  <ul class="tabs-nav">
                                                                     <li class="tab-active"><a href="#tab-1">Features</a></li>
                                                                     <li><a href="#tab-2">Details</a></li>
                                                                  </ul>
                                                                  <div class="tabs-stage">
                                                                     <div id="tab-1">
                                                                        <label for="exampleInputEmail1">Title of slot</label>
                                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                                           aria-describedby="emailHelp">
                                                                        <br>
                                                                        <label for="exampleInputEmail1">Help Comment</label>
                                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                                           aria-describedby="emailHelp">
                                                                        <br>
                                                                        <label for="exampleFormControlSelect1">Number Wanted</label>
                                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                                           <option>1</option>
                                                                           <option>2</option>
                                                                           <option>3</option>
                                                                           <option>4</option>
                                                                           <option>5</option>
                                                                        </select>
                                                                        <br>
                                                                        <button type="button"
                                                                           class="btn btn-lg btn-green kalubinding">Save</button>
                                                                        <button type="button"
                                                                           class="btn btn-lg btn-wide btn-green kalubinding kaluscope">Cancle</button>
                                                                     </div>
                                                                     <div id="tab-2">
                                                                        <label for="exampleInputEmail1">Title of slot</label>
                                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                                           aria-describedby="emailHelp">
                                                                        <br>
                                                                        <label for="exampleInputEmail1">Help Comment</label>
                                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                                           aria-describedby="emailHelp">
                                                                        <br>
                                                                        <label for="exampleFormControlSelect1">Number Wanted</label>
                                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                                           <option>1</option>
                                                                           <option>2</option>
                                                                           <option>3</option>
                                                                           <option>4</option>
                                                                           <option>5</option>
                                                                        </select>
                                                                        <br>
                                                                        <button type="button"
                                                                           class="btn btn-lg btn-green kalubinding">Save</button>
                                                                        <button type="button"
                                                                           class="btn btn-lg btn-wide btn-green kalubinding kaluscope">Cancle</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <table class="table table-bordered sTable kalustyle:w2.style.themed.table;"
                                                         style="background-color: rgb(225 73 15); border-width: 2px; border-color: rgb(255, 255, 255);">
                                                         <thead>
                                                            <tr class="cleared">
                                                               <th class="cleared">
                                                                  <span class="pull-right">
                                                                  </span>
                                                               </th>
                                                               <th class="cleared">
                                                                  <span class="pull-right">
                                                                     <div id="open-modal7" class="tp-btn-register">
                                                                        <span class="glyphicon glyphicon-plus"></span>
                                                                        Add Dates
                                                                     </div>
                                                                  </span>
                                                               </th>
                                                            </tr>
                                                            <tr>
                                                               <th nowrap="" class=""
                                                                  style="background-color: rgb(30, 28, 27); color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-top-width: 2px; border-top-style: solid; font-weight: bold; vertical-align: bottom;">
                                                                  Available Slot
                                                               </th>
                                                               <th nowrap="" class=""
                                                                  style="background-color: rgb(30, 28, 27); color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-top-width: 2px; border-top-style: solid; font-weight: bold; vertical-align: bottom;">
                                                                  Dates/Times
                                                               </th>
                                                            </tr>
                                                         </thead>
                                                         @if(isset($publish))
                                                         <tbody class="black-shadow-active">
                                                            @foreach($publish as $slot)
                                                            <tr class="kaluscope">
                                                               @if($slot['tslot']==null)
                                                               <td class="col-xs-4"
                                                                  style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                  {{$slot['lslot']}}&nbsp;&nbsp;(Location:-{{$slot['location']}})
                                                               </td>
                                                               @else
                                                               <td class="col-xs-4"
                                                                  style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                  {{$slot['tslot']}}&nbsp;&nbsp;(Location:-{{$slot['location']}})
                                                               </td>
                                                               @endif
                                                               <td class="table-wrapper">
                                                                  <table class="table">
                                                                     <tbody>
                                                                        <?php $time= explode(',',  $slot['time']); ?>
                                                                        @foreach($time as $time1)
                                                                        <?php $timeArr = explode('|', $time1); ?>
                                                                        <tr>
                                                                           <td class="tcell tfirst "
                                                                              style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                             {{date('d-m-y 
                                                    D,H:i:s', strtotime($timeArr[0]))}} 
                                                                           </td>
                                                                           <td class="col-xs-5"
                                                                              style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                              {{date('d-m-y 
                                                    D,H:i:s', strtotime($timeArr[1]))}} 
                                                                           </td>
                                                                        </tr>
                                                                        @endforeach
                                                                     </tbody>
                                                                  </table>
                                                               </td>
                                                            </tr>
                                                            @endforeach
                                                         </tbody>
                                                         @else
                                                         <tbody class="black-shadow-active">
                                                            <tr class="kaluscope">
                                                               <td class="col-xs-4 "
                                                                  style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                               </td>
                                                               <td class="table-wrapper">
                                                                  <table class="table">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td class="tcell "
                                                                              style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                           </td>
                                                                           <td class="col-xs-5"
                                                                              style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                           </td>
                                                                        </tr>
                                                                        <tr >
                                                                           <td 
                                                                              style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                           </td>
                                                                           <td class="col-xs-5 "
                                                                              style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                           </td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                         @endif
                                                      </table>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="spacer" ></div>
                                       <div class="col-xs-10">
                                          <button type="submit" class="tp-btn-register">Save and
                                          Continue</button>
                                       </div>
                                       <div class="col-xs-2 text-right">
                                       </div>
                                 </form>
                                 </div>
                              </div>
                           </div>
                           <div id="Lon23" class="tabcontent " style="display: none;">
                              <div id="wizardStepContainer" class="col-xs-12" data-kalushow="w0.initialized">
                                 <form method="post" action="/update-for-publish">
                                    @csrf
                                    <input type="hidden" name="signup_id" value="{{Session::get('signup_id')}}">
                                    <div data-kaluinclude="w0.activetemplate" class="kaluscope">
                                       <div class="l-wizard-step-3 kaluscope" data-kalucontroller="wizardStep3 as w3">
                                          <h2 class="hrow" style="margin-top:0px;">Ask Participants For:</h2>
                                          <div class="row">
                                             <div class="col-xs-12 ask-participants-for-container">
                                                <div class="row form-group ask-participants-for-wrapper">
                                                   <div class="col-xs-6 col-lg-5 ask-participants-for-label">
                                                      <span class="glyphicon glyphicon-ok text-orange" style="paddikaluright: 12px;"></span>
                                                      <input type="checkbox" checked="" name="name" id="name" disabled="disabled" class="css-checkbox-chkbx-mini hideinline">
                                                      <span class="hgroup">Name</span>
                                                      <input type="checkbox" checked="" name="name" id="name" disabled="disabled" class="css-checkbox-chkbx-mini hideinline">
                                                   </div>
                                                   <div class="col-xs-2 ask-participants-for-option" style="paddikalutop: 3px;">
                                                      Required
                                                      <input type="hidden" name="nameRequired" value="1">
                                                   </div>
                                                </div>
                                                <div class="row form-group ask-participants-for-wrapper">
                                                   <div class="col-xs-6 col-lg-5 ask-participants-for-label">
                                                      <!-- <input name="email" id="email" value="1" type="checkbox" checked="" disabled="disabled" class="css-checkbox-chkbx-mini hideinline"> -->
                                                      <span class="glyphicon glyphicon-ok text-orange" style="paddikaluright: 12px;"></span>
                                                      <span class="hgroup">Email</span>
                                                   </div>
                                                   <div class="col-xs-2 ask-participants-for-option">
                                                      <span data-kaluif="!w3.isEmailRequired()" class="kaluscope">
                                                         <select name="email" id="emailrequired" class="form-control input-sm kalupristine kaluuntouched kaluvalid kalunot-empty" selected="selected">
                                                            <option label="Required" value="Required" {{$setting['email'] == 'Required'? 'selected' : ''}}>Required</option>
                                                            <option label="Optional" value="Optional" {{$setting['email'] == 'Optional'? 'selected' : ''}}>Optional</option>
                                                         </select>
                                                      </span>
                                                   </div>
                                                </div>
                                                <!-- phone -->
                                                <div class="row form-group ask-participants-for-wrapper">
                                                   <div class="col-xs-6 col-lg-5 ask-participants-for-label">
                                                      <span class="glyphicon glyphicon-ok text-orange" style="paddikaluright: 12px;"></span>
                                                      <span class="hgroup">Phone Number</span>
                                                   </div>
                                                   <div class="col-xs-2 ask-participants-for-option">
                                                      <span data-kaluif="!w3.isEmailRequired()" class="kaluscope">
                                                         <select name="phone" id="emailrequired" class="form-control input-sm kalupristine kaluuntouched kaluvalid kalunot-empty" selected="selected">
                                                            <option label="Required" value="Required" {{$setting['phone'] == 'Required'? 'selected' : ''}}>Required</option>
                                                            <option label="Optional" value="Optional" {{$setting['phone'] == 'Optional'? 'selected' : ''}}>Optional</option>
                                                         </select>
                                                      </span>
                                                   </div>
                                                </div>
                                                <div class="kaluhide">
                                                   <div sv-part="w3.signupinfo.customquestions" class="kaluscope">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="spacer kaluscope"></div>
                                          </div>
                                       </div>
                                    </div>
                              </div>
                              <div class="col-xs-10">
                              <button type="submit" class="tp-btn-register">Save and
                              Continue</button>
                              </div>
                              <div class="c-genius-tips" genius-tips-container="">
                              <div  style="bottom: 309px;">
                              <!-- ngRepeat: tip in arrGeniusTips -->
                              </div>
                              <div class="c-genius-tips--tip-anchor"></div>
                              </div>
                              </form>
                           </div>
                           <div id="Lon25" class="tabcontent active">
                          
                              <div class="row">
                                 <div class="col-md-5 col-lg-5 col-sm-12">
                                    <img src="{{asset('signups/image')}}/{{($item->image)}}" alt="" style="width:100%;">
                                 </div>
                                 <div class="col-md-7 col-lg-7 col-sm-12">
                                    <p>{{$item->category}}</p>
                                    <h2>{{$item['title']}}</h2>
                                    <p>Please review the available slots below and click on the button to sign up. Thank you!</p>
                                    <p>Created by: {{Auth::user()->firstname}} {{Auth::user()->lastname}}</p>
                                    
                                 </div>
                              </div>
                              <h2>Publish Table</h2>
                             <table class="table table-bordered sTable kalustyle:w2.style.themed.table;"
                                                         style="background-color: rgb(225 73 15); border-width: 2px; border-color: rgb(255, 255, 255);">
                                                         <thead>
                                                            <tr class="cleared">
                                                               <th class="cleared">
                                                                  <span class="pull-right">
                                                                  </span>
                                                               </th>
                                                               <th class="cleared">
                                                                 
                                                               </th>
                                                            </tr>
                                                            <tr>
                                                               <th nowrap="" class=""
                                                                  style="background-color: rgb(30, 28, 27); color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-top-width: 2px; border-top-style: solid; font-weight: bold; vertical-align: bottom;">
                                                                  Available Slot
                                                               </th>
                                                               <th nowrap="" class=""
                                                                  style="background-color: rgb(30, 28, 27); color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-top-width: 2px; border-top-style: solid; font-weight: bold; vertical-align: bottom;">
                                                                  Dates/Times
                                                               </th>
                                                            </tr>
                                                         </thead>
                                                         @if(isset($data))
                                                         <tbody class="black-shadow-active">
                                                            @foreach($data as $slot)
                                                            <tr class="kaluscope">
                                                               @if($slot['tslot']==null)
                                                               <td class="col-xs-4"
                                                                  style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                  {{$slot['lslot']}}
                                                                  &nbsp;&nbsp;(Location:-{{$slot['location']}})
                                                               </td>
                                                               @else
                                                               <td class="col-xs-4"
                                                                  style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                  {{$slot['tslot']}}
                                                                  &nbsp;&nbsp;(Location:-{{$slot['location']}})
                                                               </td>
                                                               @endif
                                                               <td class="table-wrapper">
                                                                  <table class="table">
                                                                     <tbody>
                                                                        <?php $time= explode(',',  $slot['time']); ?>
                                                                        @foreach($time as $time1)
                                                                        <?php $timeArr = explode('|', $time1); ?>
                                                                        <tr>
                                                                           <td class="tcell tfirst "
                                                                              style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255); width: 45%;">
                                                                              {{date('d-m-y 
                                                    D,H:i:s', strtotime($timeArr[0]))}}  
                                                                           </td>
                                                                           <td class="col-xs-5"
                                                                              style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                              {{date('d-m-y 
                                                    D,H:i:s', strtotime($timeArr[1]))}} 
                                                                                <button class="btn btn-primary"><input type="checkbox" />&nbsp;signup</button>
                                                                           </td>
                                                                        </tr>
                                                                        @endforeach
                                                                     </tbody>
                                                                  </table>
                                                               </td>
                                                            </tr>
                                                            @endforeach
                                                         </tbody>
                                                         @else
                                                         <tbody class="black-shadow-active">
                                                            <tr class="kaluscope">
                                                               <td class="col-xs-4 "
                                                                  style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                               </td>
                                                               <td class="table-wrapper">
                                                                  <table class="table">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td class="tcell "
                                                                              style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                           </td>
                                                                           <td class="col-xs-5"
                                                                              style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                           </td>
                                                                        </tr>
                                                                        <tr >
                                                                           <td 
                                                                              style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                           </td>
                                                                           <td class="col-xs-5 "
                                                                              style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                           </td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                         @endif
                                                      </table>
                              <br>
                              <a href="/share"><button class="tp-btn-register">Save and
                              Continue</button></a>
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
                                          <li data-ng-repeat="crumb in sugBreadcrumb" data-ng-class="{active: crumb.active}"
                                             class="ng-scope">
                                             <a data-ng-if="crumb.href !== ''" href="/index.cfm?go=t.mygroups#/"
                                                class="ng-binding ng-scope">Groups</a>
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
                                                   </div>
                                                </div>
                                                <div class="col-xs-3">
                                                   <div class="gridHeadingElement">
                                                   </div>
                                                </div>
                                             </div>
                                             <?php use App\Models\publish; ?>
                                             <?php $publish = publish::publish();?>
                                             <div class="row">
                                                <div class="col-xs-12">
                                                   <table class="table table-hover table-striped sTable">
                                                      <thead>
                                                         <tr>
                                                            <th class="tcell no-wrap width-50">
                                                               <strong class="ng-binding">Group
                                                               Name <span ></span></strong>
                                                            </th>
                                                            <th class="tcell no-wrap centered">
                                                               <strong class="ng-binding">Date
                                                               </strong>
                                                            </th>
                                                            <th class="tcell no-wrap centered">
                                                               <strong class="ng-binding">Members
                                                               </strong>
                                                            </th>
                                                         </tr>
                                                      </thead>
                                                      <tbody data-ng-if="myGroupsFiltered.length > 0" class="ng-scope">
                                                         @foreach($publish as $publishes)
                                                         <?php $arr = explode(' | ', $publishes['time'])  ?>
                                                         <tr class="ng-scope">
                                                            @if($publishes['tslot'])
                                                            <td class="tcell tfirst enforce-wrap ng-binding">
                                                               {{$publishes['tslot']}}
                                                            </td>
                                                            @else
                                                            <td class="tcell tfirst enforce-wrap ng-binding">
                                                               {{$publishes['lslot']}}
                                                            </td>
                                                            @endif
                                                            <td class="tcell tfirst enforce-wrap ng-binding">
                                                               {{date('d-m-y 
                                                    D,H:i:s', strtotime($timeArr[0]))}}    - {{date('d-m-y 
                                                    D,H:i:s', strtotime($timeArr[1]))}} 
                                                            </td>
                                                            <td class="tcell icon">
                                                               <div class="icon-badged ng-scope" popover="There are 3 members in this group"
                                                                  popover-placement="top" popover-trigger="mouseenter"
                                                                  popover-popup-delay="300">
                                                                  <span class="glyphicon glyphicon-user table-icon mono no-hover"
                                                                     alt="There are 3 members in this group"></span><span
                                                                     class="badge ng-binding">{{$publishes['count_member']}}</span>
                                                               </div>
                                                               {{-- 
                                                               <div class="icon-badged ng-scope"></div>
                                                               --}}
                                                            </td>
                                                            </td>
                                                            <td class="tcell icon">
                                                               <a href="/edit-group/{{$publishes['id']}}" popover="Edit This Group" popover-placement="top" popover-trigger="mouseenter" popover-popup-delay="300" class="ng-scope">
                                                               <span class="glyphicon glyphicon-pencil table-icon mono" alt="Add/remove/edit members of this group"></span>
                                                               </a>

                                                            </td>
                                                            <td class="tcell icon">
                                                               <div class="icon-badged ng-scope"
                                                                  popover="There is 1 sign up using this group" popover-placement="top"
                                                                  popover-trigger="mouseenter" popover-popup-delay="300">
                                                                  <?php
                                                                     $code = base64_encode($publishes['signup_id']);
                                                                     $id = base64_encode(Auth::User()->id);
                                                                     ?>
                                                                  <a href="{{url(('share/'.$code.'/'.$id))}}"><i class="fas fa-share"></i></a>
                                                               </div>
                                                            </td>
                                                            @endforeach
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
                     <div data-mg-controller="mainMessageCenter" class="kaluscope">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1>Messages</h1>
                              <ul class="nav nav-tabs tab tabbf" role="tablist">
                                 <li class="tablinks active" onclick="openCity(event, 'London')">
                                    <a href="#/"><span class="glyphicon glyphicon-dashboard"></span>
                                    Dashboard</a>
                                 </li>
                                 <li data-mg-hide="unsupportedBrowser" class="tablinks" onclick="openCity(event, 'Paris')">
                                    <a href="#/compose"><span class="glyphicon glyphicon-send"></span>
                                    Compose</a>
                                 </li>
                                 <li data-mg-hide="unsupportedBrowser" class="tablinks" onclick="openCity(event, 'Tokyo')">
                                    <a href="#/drafts"><span class="glyphicon glyphicon-file"></span> Drafts
                                    &amp; Templates</a>
                                 </li>
                                 <li   class="tablinks kaluscope"
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
                                 <div data-mg-view="" class="kaluscope">
                                    <style class="kaluscope">
                                       .progress-bar {
                                       text-align: left !important;
                                       }
                                    </style>
                                    <div class="row kaluscope">
                                       <div class="col-xs-12">
                                          <h2 class="fade-in kalubinding">Account Overview: December</h2>
                                       </div>
                                    </div>
                                    <div class="row kaluscope" >
                                       <div class="col-xs-5">
                                          <p><strong>Plan:</strong></p>
                                          <div class="progress kaluisolate-scope" max="memberLimits.dailyLimit"
                                             value="memberLimits.sentToday" type="success">
                                             <div class="progress-bar progress-bar-success"
                                                kaluclass="type &amp;&amp; 'progress-bar-' + type" role="progressbar" aria-valuenow="0"
                                                aria-valuemin="0" aria-valuemax="1000"
                                                kalustyle="" aria-valuetext="0%"
                                                aria-labelledby="progressbar" style="min-width: 0px; width: 0%;" kalutransclude="">
                                                <span style="color:black; white-space:nowrap;paddikaluleft:5px;"
                                                   class="kalubinding kaluscope">0 / 1,000 email messages
                                                used today</span>
                                             </div>
                                          </div>
                                          <div class="progress kaluisolate-scope" max="memberLimits.monthlyLimit"
                                             value="memberLimits.sentForTheMonth" type="success">
                                             <div class="progress-bar progress-bar-success"
                                                kaluclass="type &amp;&amp; 'progress-bar-' + type" role="progressbar" aria-valuenow="3"
                                                aria-valuemin="0" aria-valuemax="1000"
                                                kalustyle="{width: (percent < 100 ? percent : 100) + '%'}" aria-valuetext="0%"
                                                aria-labelledby="progressbar" style="min-width: 0px; width: 0.3%;" kalutransclude="">
                                                <span style="color:black; white-space:nowrap;paddikaluleft:5px;"
                                                   class="kalubinding kaluscope">3 / 1,000 email messages
                                                used this month </span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-xs-7" data-mg-show="showChart">
                                          <div class="row">
                                             <div class="col-xs-5">
                                                <ul class="nav nav-pills nav-stacked">
                                                   <li kalurepeat="record in deliveryStats" class="kalubinding kaluscope">
                                                      <span class="badge black pull-right">3</span>
                                                      Total Sent
                                                   </li>
                                                   <li kalurepeat="record in deliveryStats" class="kalubinding kaluscope">
                                                      <span class="badge green pull-right">3</span>
                                                      Delivered
                                                   </li>
                                                   <li kalurepeat="record in deliveryStats" class="kalubinding kaluscope">
                                                      <span class="badge yellow pull-right">0</span>
                                                      Bounced
                                                   </li>
                                                   <li kalurepeat="record in deliveryStats" class="kalubinding kaluscope">
                                                      <span class="badge orange pull-right">0</span>
                                                      Dropped
                                                   </li>
                                                   <li kalurepeat="record in deliveryStats" class="kalubinding kaluscope">
                                                      <span class="badge red pull-right">0</span>
                                                      Spam
                                                   </li>
                                                </ul>
                                             </div>
                                             <div class="col-xs-7">
                                                <div google-chart="" chart="chartMonthDeliveryStats" class="mGraph kaluisolate-scope"
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
                                    <div class="row kaluscope" data-mg-show="showEmails">
                                       <div class="col-sm-12">
                                          <h2 class="hrow fade-in">Recently Sent</h2>
                                          <table class="table table-hover sTable align-top">
                                             <thead>
                                                <tr>
                                                   <th class="tcell date"
                                                      data-mg-click="emailSortBy = 'datesent';emailSortReverse = !emailSortReverse"
                                                      kaluclass="{hOver: hover}" kalumouseenter="hover=true" kalumouseleave="hover=false"
                                                      nowrap="">
                                                      <a href=""><strong>Date Sent</strong> <span
                                                         data-mg-show="emailSortBy === 'datesent'"
                                                         data-mg-class="{'glyphicon glyphicon-chevron-down':!emailSortReverse,'glyphicon glyphicon-chevron-up':emailSortReverse}"
                                                         class="glyphicon glyphicon-chevron-up"></span></a>
                                                   </th>
                                                   <th width="40%"
                                                      data-mg-click="emailSortBy = 'subject';emailSortReverse = !emailSortReverse"
                                                      kaluclass="{hOver: hover}" kalumouseenter="hover=true" kalumouseleave="hover=false">
                                                      <a href=""><strong>Subject</strong>
                                                      <span data-mg-show="emailSortBy === 'subject'"
                                                         data-mg-class="{'glyphicon glyphicon-chevron-down':!emailSortReverse,'glyphicon glyphicon-chevron-up':emailSortReverse}"
                                                         class="kaluhide glyphicon glyphicon-chevron-up"></span></a>
                                                   </th>
                                                   <th data-mg-click="emailSortBy = 'sentto';emailSortReverse = !emailSortReverse"
                                                      kaluclass="{hOver: hover}" kalumouseenter="hover=true" kalumouseleave="hover=false">
                                                      <a href=""><strong>Sent To</strong>
                                                      <span data-mg-show="emailSortBy === 'sentto'"
                                                         data-mg-class="{'glyphicon glyphicon-chevron-down':!emailSortReverse,'glyphicon glyphicon-chevron-up':emailSortReverse}"
                                                         class="kaluhide glyphicon glyphicon-chevron-up"></span></a>
                                                   </th>
                                                   <th class="tcell icon"></th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr kalurepeat="message in SentMessages | orderBy:emailSortBy:emailSortReverse"
                                                   class="kaluscope">
                                                   <td class="kalubinding">2021-12-09 1:04pm</td>
                                                   <td><span data-mg-bind-html="message.subject" class="kalubinding">vb Invite</span></td>
                                                   <td class="kalubinding">Select Members</td>
                                                   <td class="tcell icon" kaluclick="">
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
                                    <div class="row kaluscope kaluhide" data-mg-show="showReminders">
                                       <div class="col-sm-12">
                                          <div class="row">
                                             <div class="col-sm-8">
                                                <h2 class="hrow fade-in">Upcoming Reminders</h2>
                                             </div>
                                             <div class="col-sm-4">
                                                <div class="input-group input-group-sm table-headikalu-element">
                                                   <span class="input-group-addon">
                                                   <span class="glyphicon glyphicon-search"></span>
                                                   </span>
                                                   <input type="text" class="form-control kalupristine kaluuntouched kaluvalid"
                                                      name="filter" data-mg-model="filter" placeholder="Search">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row kaluscope">
                                       <div class="col-sm-12">
                                          <span class="verysmalltext text-muted"
                                             data-mg-show="!showReport &amp;&amp; SentMessages.length">
                                          <span  class="kalubinding kaluscope">NOTE: Dates are in
                                          yyyy-mm-dd.
                                          <span  class="kalubinding kaluscope">Times are shown in
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
                           <div  class="kaluscope">
                              <form name="composeform" class="form-horizontal kalupristine kaluvalid kalusubmitted" role="form">
                                 <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                       <span class="h2 fade-in kalubinding" data-mg-bind-html="composeHeaderLabel">Compose Message
                                       </span>
                                       <sup>
                                       <span class="text-orange pointer kaluscope">
                                       <span class="glyphicon glyphicon-question-sign helpme"
                                          uib-popover="Click to learn more about composing messages." popover-placement="top"
                                          popover-trigger="mouseenter" popover-popup-delay="300" popover-enable="true"></span>
                                       </span>
                                       </sup>
                                       <span class="spacer-sm"></span>
                                       <p class="kaluscope">
                                          Select the type of message you would like to compose
                                       </p>
                                    </div>
                                 </div>
                                 <span class="kaluscope">
                                    <div  class="kaluscope">
                                       <div class="row">
                                          <div class="col-sm-12">
                                             <div class="btn-underlines">
                                                <button class="btn btn-underline active" data-mg-class="{active: showType == 'email'}"
                                                   data-mg-click="setShowType('email')">
                                                Email
                                                </button>
                                                <button class="btn btn-underline kaluscope"
                                                   data-mg-class="{active: showType == 'template'}"
                                                   data-mg-click="setShowTypeHandler('template')">
                                                Email Template <img src="slot/images/messageCenter/pro.png" width="24">
                                                </button>
                                                <button class="btn btn-underline kaluscope"
                                                   data-mg-class="{active: showType == 'text'}"
                                                   data-mg-click="setShowTypeHandler('text')">
                                                Text Message <img src="slot/images/messageCenter/pro.png" width="24">
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-horizontal">
                                          <div class="row kaluscope">
                                             <div class="col-xs-12">
                                                <input type="radio" name="emailType" id="invite" data-mg-model="objForm.emailType"
                                                   value="4" class="css-radio kalupristine kaluuntouched kaluvalid"
                                                   data-mg-change="typeChange()">
                                                <label for="invite" class="radio-css-label">Invite people to a sign up</label>
                                             </div>
                                             <div class="col-xs-12">
                                                <input type="radio" name="emailType" id="bulk" data-mg-model="objForm.emailType"
                                                   value="1" class="css-radio kalupristine kaluuntouched kaluvalid"
                                                   data-mg-change="typeChange()">
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
                           <div class="kaluscope">
                              <div class="row kaluhide" data-mg-show="message.length">
                                 <div class="col-lg-12">
                                    <span data-mg-class="messageClass" class="success">
                                       <center class="kalubinding"></center>
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
                                          <div class="input-group input-group-sm table-headikalu-element">
                                             <div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
                                             <input type="text" class="form-control kalupristine kaluuntouched kaluvalid" id="filterText"
                                                placeholder="Search" data-mg-model="filters.search">
                                          </div>
                                       </div>
                                    </span>
                                 </div>
                                 <div class="col-xs-1">
                                    <span class="pull-right table-headikalu-element">
                                       <a class="dropdown-toggle tool-icon-link" data-toggle="dropdown" aria-haspopup="true"
                                          aria-expanded="true" popover="Settings" popover-placement="top" popover-trigger="mouseenter"
                                          popover-popup-delay="300">
                                       <span class="glyphicon glyphicon-cog tool-icon mono"></span>
                                       </a>
                                       <ul class="dropdown-menu settingsOption" id="settingsDropdown"
                                          data-mg-click="dropDownClickEvent($event)">
                                          <li>
                                             <h2>Display Options:</h2>
                                          </li>
                                          <li>
                                             <div class="form-horizontal">
                                                <div class="form-group">
                                                   <label for="messagetypes" class="col-xs-6 text-left control-label">Message
                                                   Type</label>
                                                   <div class="col-xs-6">
                                                      <select id="messagetypes" class="form-control kalupristine kaluuntouched kaluvalid"
                                                         data-mg-model="filters.messagetype">
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
                                                         data-mg-model="dp.itemsperpage"
                                                         class="form-control kalupristine kaluuntouched kaluvalid kaluvalid-min kaluvalid-max kaluvalid-maxlength"
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
                              <div class="row kaluscope" >
                                 <div class="col-md-12 centered">
                                    No draft messages
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="Tokyo1" class="tabcontent" style="display: none;">
                           <div data-mg-view="" class="kaluscope">
                              <style class="kaluscope">
                                 .iPhoneBody {
                                 display: block;
                                 padding: 20px;
                                 }
                                 .stat {
                                 paddikalutop: 5px;
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
                                 paddikaluleft: 5px;
                                 }
                                 div.withProGeniusImage {
                                 opacity: 0.4;
                                 background: #FFFFFF;
                                 }
                                 td.proOnly {
                                 background-color: #f5f5f5;
                                 }
                              </style>
                              <div class="kaluscope">
                                 <div id="loadingReportDetails" class="processing kaluhide" data-mg-show="processing">
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
                                 <div class="row" kaluhide="showReport">
                                    <div class="col-xs-8">
                                       <h2 class="hrow fade-in">Sent Messages</h2>
                                    </div>
                                    <div class="col-xs-3">
                                       <span class="form-inline">
                                          <div class="form-group">
                                             <div class="input-group input-group-sm  table-headikalu-element">
                                                <div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
                                                <input type="text" class="form-control kalupristine kaluuntouched kaluvalid"
                                                   id="filterText" placeholder="Search" data-mg-model="filters.search">
                                             </div>
                                          </div>
                                       </span>
                                    </div>
                                    <div class="col-xs-1">
                                       <span class="pull-right  table-headikalu-element">
                                          <a class="dropdown-toggle tool-icon-link" data-toggle="dropdown" aria-haspopup="true"
                                             aria-expanded="true" popover="Settings" popover-placement="top"
                                             popover-trigger="mouseenter" popover-popup-delay="300">
                                          <span class="glyphicon glyphicon-cog tool-icon mono"></span>
                                          </a>
                                          <ul class="dropdown-menu settingsOption" id="settingsDropdown"
                                             data-mg-click="dropDownClickEvent($event)">
                                             <li>
                                                <h2>Display Options:</h2>
                                             </li>
                                             <li>
                                                <div class="form-horizontal">
                                                   <div class="form-group">
                                                      <label for="messagetypes" class="col-xs-6 text-left control-label">Message
                                                      Type</label>
                                                      <div class="col-xs-6">
                                                         <select id="messagetypes" class="form-control kalupristine kaluuntouched kaluvalid"
                                                            data-mg-model="filters.messagetype">
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
                                                            data-mg-model="sentPagination.itemsperpage"
                                                            class="form-control kalupristine kaluuntouched kaluvalid kaluvalid-min kaluvalid-max kaluvalid-maxlength"
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
                                          data-mg-show="!showReport &amp;&amp; SentMessages.length">
                                          <thead>
                                             <tr>
                                                <th class="tcell date" kaluclick="setSentMessageSort('datesent')"
                                                   kaluclass="{hOver: hover}" kalumouseenter="hover=true" kalumouseleave="hover=false"
                                                   nowrap="">
                                                   <a href="">
                                                   <strong>Sent </strong>
                                                   <span kalushow="sortBy=='datesent'"
                                                      class="glyphicon glyphicon-chevron-up smalltext"></span>
                                                   </a>
                                                </th>
                                                <th kaluclick="setSentMessageSort('subject')" kaluclass="{hOver: hover}"
                                                   kalumouseenter="hover=true" kalumouseleave="hover=false" class="">
                                                   <a href=""><strong>Subject <span kalushow="sortBy=='subject'"
                                                      class="glyphicon glyphicon-chevron-up smalltext kaluhide"></span></strong></a>
                                                </th>
                                                <th class="tcell sentto" kaluclick="setSentMessageSort('countsent')"
                                                   kaluclass="{hOver: hover}" kalumouseenter="hover=true" kalumouseleave="hover=false">
                                                   <a href=""><strong>Sent To <span kalushow="sortBy=='countsent'"
                                                      class="glyphicon glyphicon-chevron-up smalltext kaluhide"></span></strong></a>
                                                </th>
                                                <th class="tcell status" kaluclick="setSentMessageSort('status')"
                                                   kaluclass="{hOver: hover}" kalumouseenter="hover=true" kalumouseleave="hover=false">
                                                   <a href=""><strong>Status <span kalushow="sortBy=='status'"
                                                      class="glyphicon glyphicon-chevron-up smalltext kaluhide"></span></strong></a>
                                                </th>
                                                <th class="tcell icon"></th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr kalurepeat="message in filteredSentMessages" kaluclass="{hOver: hover}"
                                                kalumouseenter="hover=true" kalumouseleave="hover=false" class="kaluscope">
                                                <td class="tcell date kalubinding">2021-12-09 1:04pm</td>
                                                <td class="tcell">
                                                   <span data-mg-bind-html="message.subject" class="kalubinding">vb Invite</span> <br>
                                                   <span class="verysmalltext text-muted kalubinding">Invite - vb</span>
                                                </td>
                                                <td class="tcell sentto kalubinding">3</td>
                                                <td class="tcell status kalubinding">Complete</td>
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
                                 <span class="verysmalltext text-muted" data-mg-show="!showReport &amp;&amp; SentMessages.length">
                                 <span  class="kalubinding kaluscope">NOTE: Dates are in
                                 yyyy-mm-dd. </span>
                                 <span class="kalubinding kaluscope">Times
                                 are shown in - IST. To modify, update your <a href="#">settings</a>.</span>
                                 <br><br>
                                 </span>
                                 <section kalushow="showReport" class="kaluhide">
                                    <div class="row">
                                       <div class="col-sm-12">
                                          <h2 class="hrow fade-in kalubinding kaluscope" >
                                             Sent Message: 
                                          </h2>
                                          <div class="btn-underlines">
                                             <a href="#/sent" class="btn btn-underline">Back</a>
                                             <button class="btn btn-underline active" kaluclass="{active: activeTab==1}"
                                                kaluclick="setActiveTab(1,SelectedRowID)"> Message Details</button>
                                             <button class="btn btn-underline" kaluclass="{active: activeTab==2}"
                                                kaluclick="setActiveTab(2,SelectedRowID)"> Message Analytics</button>
                                          </div>
                                       </div>
                                    </div>
                                    <div kalushow="activeTab==1" class="">
                                       <div class="row">
                                          <div class="col-sm-12">
                                             <div class="spacer-sm"></div>
                                             <div class="row">
                                                <div class="col-sm-4">Sent</div>
                                                <div class="col-sm-8">
                                                   <span class="kalubinding"></span>
                                                   <span class="subtext kalubinding"></span>
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
                                                   <span  class="kalubinding kaluscope">
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
                                                <div class="col-sm-8 kalubinding"></div>
                                             </div>
                                             <div class="row">
                                                <div class="col-sm-12">
                                                   <hr class="divider">
                                                </div>
                                             </div>
                                             <div class="row kaluscope" >
                                                <div class="col-sm-4">Reply To</div>
                                                <div class="col-sm-8 kalubinding"></div>
                                             </div>
                                             <div class="row kaluscope" >
                                                <div class="col-sm-12">
                                                   <hr class="divider">
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-sm-4">Sent To</div>
                                                <div class="col-sm-8">
                                                   <span 
                                                      class="kalubinding kaluscope"></span>
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
                                             <div class="email-preview kaluscope" >
                                                <div class="link-blockikalucover"></div>
                                                <div class="email-content">
                                                   <div data-mg-bind-html="bodyPreview" align="left" class="kalubinding"></div>
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
                        paddikaluright: 3px;
                        paddikalutop: 3px;
                        paddikalubottom: 3px;
                        }
                        .dpButtonTDLeft {
                        paddikaluleft: 3px;
                        paddikalutop: 3px;
                        paddikalubottom: 3px;
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
                           onsubmit="return _CF_checkmyform(this)" class="kalupristine kaluvalid">
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
                           onsubmit="return _CF_checkmyform(this)" class="kalupristine kaluvalid">
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
                        <h2 style="paddikalutop:0;margin-top:0;">Volunteer Hours Report</h2>
                        "Calculate the volunteer hours that your members signed up for."
                        <br>
                        <br>
                     </div>
                  </div>
               </div>
               <div class="tab-pane" id="e">
                  <div id="memPgCenter" class="member-blocks--maincontent-wide">
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
         .modal {
         display: none;
         position: fixed;
         /* Stay in place */
         z-index: 100;
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
         padding:20px;
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
      @include('slot/layout.footer')
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
         var btn2//#endregion2 = document.getElementById("open-modal2");
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
         
         // Change tab class and display content
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
           dateFormat: "yy-mm-dd"//default mm/dd/yy
         });
      </script>
      <script>
         $('.tabs-stage div').hide();
         $('.tabs-stage div:first').show();
         $('.tabs-nav li:first').addClass('tab-active');
         
         // Change tab class and display content
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
         console.log(event.currentTarget); // show what element was clicked in the console
         console.log(event.currentTarget.dataset); // get .dataset Object key from HTML element 
         
         // Remove 'active' class style from previously selected tab
         document.querySelector('.tab.active')?.classList.remove('active'); // optional chaining
         
         // Add 'active' class style to selected tab
         event.currentTarget.classList.add('active');
         
         // Hide previously selected tab's content
         document.querySelector('.content.show').classList.remove('show');
         
         // Show selected tab's respective content
         const selectedContent = event.currentTarget.dataset.content; // see .dataset console.log() above
         document.querySelector(selectedContent).classList.add('show');
         })
         })
         
      </script>
      <script>
         $(document).ready(function () {
           $("#addmore").click(function () {
             $("#req_input").append('<div class="required_inp"><input type="datetime-local" name="time1[]" value="" multiple><input type="datetime-local" name="time2[]" value="" multiple>' + '<input type="button" class="inputRemove" value="Remove"/></div>');
           });
           $("#addmore1").click(function () {
             $("#req_input1").append('<div class="required_inp"><input type="datetime-local" name="time1[]" value="" multiple><input type="datetime-local" name="time2[]" value="" multiple>' + '<input type="button" class="inputRemove" value="Remove"/></div>');
           });
           $('body').on('click', '.inputRemove', function () {
             $(this).parent('div.required_inp').remove()
           });
         });
      </script>

      <script>

    var modal7 = document.getElementById("myModal7");

    var btn7 = document.getElementById("open-modal7");

    var span7 = document.getElementById("close7");

    btn7.onclick = function () {
      modal7.style.display = "block";
    }
    span7.onclick = function () {
      modal7.style.display = "none";
    }
    window.onclick = function (event) {
      if (event.target == modal) {
        modal7.style.display = "none";
      }
    }
  </script>
   </body>
</html>