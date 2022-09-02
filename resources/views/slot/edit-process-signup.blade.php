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
    <link rel="stylesheet" href="{{asset('slot/dist/css/SUGstyleV3-responsive.minf4a1.css?v=1636996767345')}}">

    <script type="text/javascript" src="{{asset('slot/dist/js/lib/jquery-1.11.1.minf4a1.js?v=1636996767345')}}"></script>
</head>
<style>
    table {
        width: 750px;
        border-collapse: collapse;
        margin: 50px auto;
    }

    /* Zebra striping */
    tr:nth-of-type(odd) {
        background: #eee;
    }

    th {
        background: #3498db;
        color: white;
        font-weight: bold;
    }

    td,
    th {
        padding: 10px;
        border: 1px solid #ccc;
        text-align: left;
        font-size: 18px;
    }

    /* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
    @media only screen and (max-width: 760px),
    (min-device-width: 768px) and (max-device-width: 1024px) {

        table {
            width: 100%;
        }

        /* Force table to not be like tables anymore */
        table,
        thead,
        tbody,
        th,
        td,
        tr {
            display: block;
        }

        /* Hide table headers (but not display: none;, for accessibility) */
        thead tr {
            position: absolute;
            top: -9999px;
            left: -9999px;
        }

        tr {
            border: 1px solid #ccc;
        }

        td {
            /* Behave  like a "row" */
            border: none;
            border-bottom: 1px solid #eee;
            position: relative;
            padding-left: 50%;
        }

        td:before {
            /* Now like a table header */
            position: absolute;
            /* Top/left values mimic padding */
            top: 6px;
            left: 6px;
            width: 45%;
            padding-right: 10px;
            white-space: nowrap;
            /* Label the data */
            content: attr(data-column);

            color: #000;
            font-weight: bold;
        }

    }
</style>
<style>
    footer {
        margin-top: 0px !important;
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

<body>
    @include('slot/layout.header')
    <section class="process" style="background: #5a6075;">
        <form action="/update-referral-accepted" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$refer['id']}}">
            <input type="hidden" name="signup_id" value="{{$adddate['signup_id']}}">
            <input type="hidden" name="refer_by_id" value="{{$refer_by['user_id']}}">
            <input type="hidden" name="adddate_id" value="{{$adddate['id']}}">
            <input type="hidden" name="addslot_id" value="{{$addslot['id']}}">
            <input type="hidden" name="refer_by" value="{{$refer_by['category']}}">
        <div class="container">
            <br>
            <h1><span class="ng-binding" style="color: #acc034;">Sign Me Up</span></h1>

            <table>
                <thead>
                    <tr>
                        <th>Available Slot</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>My Comment</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                   
                    <tr>
                       
                        <td data-column="First Name">{{$addslot['tslot']}}&nbsp;&nbsp;@if($adddate['location'])(location:-{{$adddate['location']}})@endif</td>
                       
                        <td data-column="Last Name">{{date('m/d/Y',strtotime($adddate['date']))}}</td>
                        <td data-column="Last Name">{{date('h:i A',strtotime($adddate['time1']))}}-{{date('h:i A',strtotime($adddate['time2']))}}</td>
                        <td data-column="Job Title"><input type="text" @if($refer['comment']) value="{{$refer['comment']}}" @endif name="comment"></td>
                        <td data-column="Twitter"><input type="number" @if($refer['quantity']) value="{{$refer['quantity']}}" @endif name="quantity" value="1"></td>
                    </tr>
                   
                </tbody>
            </table>
            <br>
            <div class="row">
                <div class="col-md-8 col-lg-8 col-sm-12">
                        <div class="row">
                            <div class="col-md-2 col-lg-2 col-sm-12">
                                <label for="staticEmail2" style="color:#fff;">Name :</label>
                            </div>
                            <div class="col-md-5 col-lg-5 col-sm-12">
                                <input type="text" class="form-control" name="member_firstname" @if(!empty($refer['member_firstname'])) value="{{$refer['member_firstname']}}" @endif @if($setting['name']=="Required") placeholder="First name (require*)" @else placeholder="First name (optional*)" @endif @if($setting['name']=="Required") required="" @endif>
                            </div>
                            <div class="col-md-5 col-lg-5 col-sm-12">
                                <input type="text" class="form-control" @if(!empty($refer['member_lastname'])) value="{{$refer['member_lastname']}}" @endif  @if($setting['name']=="Required") placeholder="Last name (require*)" @else placeholder="Last name (optional*)" @endif name="member_lastname" @if($setting['name']=="Required") required="" @endif>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-2 col-lg-2 col-sm-12">
                                <label for="staticEmail2" style="color:#fff;">Phone :</label>
                            </div>
                            <div class="col-md-10 col-lg-10 col-sm-12" >
                                <input type="phone" name="member_phone" @if(!empty($refer['member_phone'])) value="{{$refer['member_phone']}}" @endif class="form-control" @if($setting['phone']=="Required") placeholder="Enter your phone number (require*)" @else placeholder="Enter your phone number (optional*)" @endif @if($setting['phone']=="Required") required="" @endif>
                            </div>
                            
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-2 col-lg-2 col-sm-12">
                                <label for="staticEmail2" style="color:#fff;">Email :</label>
                            </div>
                            <div class="col-md-10 col-lg-10 col-sm-12" >
                                <input type="email" name="member_email"  @if(!empty($refer['member_email'])) value="{{$refer['member_email']}}" @endif class="form-control" @if($setting['email']=="Required") placeholder="Enter your email (require*)" @else placeholder="Enter your email (optional*)" @endif @if($setting['email']=="Required") required="" @endif>
                            </div>
                            
                        </div>
                        <br>
                        
                         <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12" style=" text-align: center;">
                                <label for="staticEmail2" style="color:#fff;">Already have an account? <a id="open-modal55" href="javascript:void(0);" class="tp-btn-register">Log In</a></label>
                            </div>
                            
                        </div>
                        <br>
                        <button type="submit" class="tp-btn-register">Update Sign Up</button>
                        <br>
                        <br>
                   
                </div>

            </div>
             </form>
    </section>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 50px auto;
        }

        /* Zebra striping */
        tr {
            background: #eee;
        }

        th {
            background: #3498db;
            color: white;
            font-weight: bold;
        }

        td,
        th {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
            font-size: 18px;
        }

        /* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
        @media only screen and (max-width: 760px),
        (min-device-width: 768px) and (max-device-width: 1024px) {

            table {
                width: 100%;
            }

            /* Force table to not be like tables anymore */
            table,
            thead,
            tbody,
            th,
            td,
            tr {
                display: block;
            }

            /* Hide table headers (but not display: none;, for accessibility) */
            thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }

            tr {
                border: 1px solid #ccc;
            }

            td {
                /* Behave  like a "row" */
                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding-left: 50%;
            }

            td:before {
                /* Now like a table header */
                position: absolute;
                /* Top/left values mimic padding */
                top: 6px;
                left: 6px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
                /* Label the data */
                content: attr(data-column);

                color: #000;
                font-weight: bold;
            }

        }
    </style>
   @include('slot/layout.footer')
    <div id="myModal1" class="modal">
        <div id="modal-content1" class="modal-content animation-1">
           
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
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1">Help Comment</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
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
                            <button type="submit" class="btn btn-success">Success</button>
                        </section>
                        <section id="rauchbier" class="tab-panel">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1">Title of slot</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1">Help Comment</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
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
    <div id="myModal55" class="modal">
 
 
   <div id="modal-content" class="modal-content animation-1">
 
       <header class="modal-header">
           <div class="modal-header-title" style="padding:20px !important;">
               <p class="modal-header-title" style="padding:20px !important;">
                   Log in 
               </p>
               
           </div>
           <button id="close55" class="modal-header-icon">
               <span class="icon">
                   <i class='bx bx-x'></i>
               </span>
           </button>
       </header>
       <!-- Modal body -->
 
       <div class="modal-body">
            <div class="form-group" style="text-align: center;">
               <a href="{{ url('auth/facebook') }}"><button class="loginBtn loginBtn--facebook">
                   Login with Facebook
                 </button></a>
                 
                 <a href="{{ url('auth/google') }}"><button class="loginBtn loginBtn--google">
                   Login with Google</button></a>
                    <br>
                    </div>
           <form method="post" action="/login-check">
               @csrf
               <div class="form-group">
 
                   <input type="text" name="email" class="form-control hei" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="Enter email">
                   <br>
                   <input type="password" name="password" class="form-control hei" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="Enter password">
 
               </div>
               <div class="form-group clearfix"><label class="radio-item form-check-label float-left"><a href="/forgot-password" class="float-right forgot-txt">Forgot
                       Password?</a></div>
               <br>
             
               <div style="text-align: center;">
                   <button style="border: none;background: transparent;"><a
                           class="tp-btn-register "
                           style="width: 115px;">Login</a></button>
               </div>
               <br>
               <div id="open-modal44" class="d-flex justify-content-center modal-bottom-links"> Don't have an account?
                   <a href="javascript:void(0);" class="ml-2">Register</a></div>
           </form>
           
       </div>
 
 
   </div>
 
 </div>
 <div id="myModal44" class="modal">
 
 
   <div id="modal-content1" class="modal-content modd animation-1">
 
       <header class="modal-header">
           <div class="modal-header-title" style="padding:20px !important;">
               <p class="modal-header-title" style="padding:20px !important;">
                   Register 
               </p>
              
           </div>
           <button id="close44" class="modal-header-icon">
               <span class="icon">
                   <i class='bx bx-x'></i>
               </span>
           </button>
       </header>
       <!-- Modal body -->
 
       <div class="modal-body">
            <div class="form-group" style="text-align: center;">
               <a href="{{ url('auth/facebook') }}"><button class="loginBtn loginBtn--facebook">
                   Login with Facebook
                 </button></a>
                 
                 <a href="{{ url('auth/google') }}"><button class="loginBtn loginBtn--google">
                   Login with Google</button></a>
                    <br>
                    </div>
           <form method="post" action="/register" onsubmit="return validateForm()">
               @csrf
               <div class="form-group row">
                     <div class="col-md-6">
                         <input type="text" name="firstname" class="form-control hei" id="fname" aria-describedby="emailHelp" placeholder="Enter firstname" required="">
                         <span id="fnameM" style="color:red"></span>
                         <br>
                     </div>
                     <div class="col-md-6">
                         <input type="text" name="lastname" class="form-control hei" id="lname" aria-describedby="emailHelp" placeholder="Enter lastname" required="">
                         <span id="lnameM" style="color:red"></span>
                         <br>
                     </div>
                     <div class="col-md-6">
                         <input type="email" name="email" class="form-control hei" id="email" aria-describedby="emailHelp" placeholder="Enter email" required="">
                         <span id="emailM" style="color:red"></span>
                         <br>
                     </div>
                     <div class="col-md-6">
                         <input type="password" name="password" class="form-control hei" id="pwd" aria-describedby="emailHelp" placeholder="Enter password" required>
                         <span id="pwdM" style="color:red"></span>
                         <br>
                     </div>
 
                     <div class="col-md-6">
                         <input type="password" name="confirm-password" class="form-control hei" id="cpwd" aria-describedby="emailHelp" placeholder="Enter confirm password">
                         <span id="cpwdM" style="color:red"></span>
                         <br>
                     </div>
 
                    <div class="col-md-6">
                        <input type="text" name="title" class="form-control hei" id="title" aria-describedby="emailHelp" placeholder="Title: Parent, Teacher, Educator etc." required>
                        <br>
                    </div>
 
                 </div>
               <div class="form-group clearfix"><label class="radio-item form-check-label float-left"></label><a href="/forgot-password" class="float-right forgot-txt">Forgot
                       Password?</a></div>
              
             
               <div style="text-align: center;">
                   <button style="border: none;background: transparent;"><a
                           class="tp-btn-register "
                           style="width: 115px;">Register</a></button>
               </div>
               
              
               <!--<div id="open-modal" class="d-flex justify-content-center modal-bottom-links"> Already have an account?-->
               <!--    <a href="javascript:void(0);" class="ml-2">Login</a></div>-->
           </form>
       </div>
 
 
   </div>
 
 </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <script>
var modal44 = document.getElementById("myModal44");
var btn44 = document.getElementById("open-modal44");
var span44 = document.getElementById("close44");
btn44.onclick = function() {
  modal44.style.display = "block";
}
span44.onclick = function() {
  modal44.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
      modal44.style.display = "none";
  }
}
</script>
<script>
var modal55 = document.getElementById("myModal55");
var btn55 = document.getElementById("open-modal55");
var span55 = document.getElementById("close55");
btn55.onclick = function() {
  modal55.style.display = "block";
}
span55.onclick = function() {
  modal55.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
      modal55.style.display = "none";
  }
}
</script>

</body>

</html>