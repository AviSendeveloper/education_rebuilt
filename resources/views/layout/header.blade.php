<style>
    /*.modd{width:50% !important}*/
 
 
 /* Shared */
 .loginBtn {
   box-sizing: border-box;
   position: relative;
   /* width: 13em;  - apply for fixed size */
   margin: 0.2em;
   padding: 0 15px 0 46px;
   border: none;
   text-align: left;
   line-height: 34px;
   white-space: nowrap;
   border-radius: 0.2em;
   font-size: 16px;
   color: #FFF;
 }
 .loginBtn:before {
   content: "";
   box-sizing: border-box;
   position: absolute;
   top: 0;
   left: 0;
   width: 34px;
   height: 100%;
 }
 .loginBtn:focus {
   outline: none;
 }
 .loginBtn:active {
   box-shadow: inset 0 0 0 32px rgba(0,0,0,0.1);
 }
 
 
 /* Facebook */
 .loginBtn--facebook {
   background-color: #4C69BA;
   background-image: linear-gradient(#4C69BA, #3B55A0);
   /*font-family: "Helvetica neue", Helvetica Neue, Helvetica, Arial, sans-serif;*/
   text-shadow: 0 -1px 0 #354C8C;
 }
 .loginBtn--facebook:before {
   border-right: #364e92 1px solid;
   background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png') 6px 6px no-repeat;
 }
 .loginBtn--facebook:hover,
 .loginBtn--facebook:focus {
   background-color: #5B7BD5;
   background-image: linear-gradient(#5B7BD5, #4864B1);
 }
 
 
 /* Google */
 .loginBtn--google {
   /*font-family: "Roboto", Roboto, arial, sans-serif;*/
   background: #DD4B39;
 }
 .loginBtn--google:before {
   border-right: #BB3F30 1px solid;
   background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_google.png') 6px 6px no-repeat;
 }
 .loginBtn--google:hover,
 .loginBtn--google:focus {
   background: #E74B37;
 }
 </style>
 <style>
   .modal {
   display: none;
   position: fixed;
   z-index: 100;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
   overflow: auto;
   background-color: rgb(0, 0, 0);
   background-color: rgba(0, 0, 0, 0.4);
 }
 
 
 .modal-content {
   background-color: #fff;
   top: 50%;
   left: 50%;
   color: #4a4a4a;
   max-width: 100%;
   position: relative;
   border-radius: 10px;
   border: 1px solid #ccc;
   width: 40%;
   transform: translate(-50%, -50%);
 }
 
 .modal-header {
   align-items: stretch;
   box-shadow: 0 1px 1px rgb(10 10 10 / 10%);
   display: flex;
 }
 
 .modal-header-title {
   text-align: center;
   color: #363636;
   /* display: flex; */
   flex-grow: 1;
   font-weight: 600;
   padding: 5px 15px;
   font-size: 25px;
 
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
   padding: 33px 50px;
 }
 
 .hei {
   height: 44px !important;
 }
 .modal-header {
   padding: 16px 16px;
   background-color: #fff !important;
   color: #000 !important;
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
 <style>
   .profile-dropdown {
   display: inline-block;
   position: relative;
   background: #f2f2f2;
   margin: auto;
   font-weight: bold;
   font-size: 18px;
   border-radius: 3px;
   -webkit-user-select: none;
   /* Chrome all / Safari all */
   -moz-user-select: none;
   /* Firefox all */
   -ms-user-select: none;
   /* IE 10+ */
   user-select: none;
   /* Likely future */
 z-
 }
 .profile-dropdown * {
   -webkit-user-select: none;
   /* Chrome all / Safari all */
   -moz-user-select: none;
   /* Firefox all */
   -ms-user-select: none;
   /* IE 10+ */
   user-select: none;
   /* Likely future */
 }
 .profile-dropdown input[type=checkbox] {
   display: none;
 }
 .profile-dropdown input[type=checkbox]:checked ~ ul {
   display: block;
   animation: pulse 0.5s;
 }
 .profile-dropdown input[type=checkbox]:checked ~ img {
   background: orange;
 }
 .profile-dropdown input[type=checkbox]:checked ~ label {
   background: orange;
 }
 .profile-dropdown input[type=checkbox]:checked ~ label i {
   color: #f2f2f2;
 }
 .profile-dropdown input[type=checkbox]:checked ~ label:after {
   content: "";
   position: absolute;
   top: 100%;
   right: calc(50% - 10px);
   display: block;
   border-style: solid;
   border-width: 7px 10px 0 10px;
   border-color: orange transparent transparent transparent;
   width: 0;
   height: 0;
 }
 .profile-dropdown img {
   display: inline-block;
   background: #d9d9d9;
   height: 40px;
   width: 40px !important;
   vertical-align: middle;
   margin-right: 1rem;
   margin: 0.5rem 0.75rem 0.5rem 0.5rem;
   border-radius: 50%;
 }
 .profile-dropdown span {
   display: inline-block;
   vertical-align: sub;
   width: 125px;
   margin-right: 2rem;
   overflow: hidden;
   white-space: nowrap;
   text-overflow: ellipsis;
 }
 .profile-dropdown ul {
   display: none;
   list-style: none;
   padding: 0;
   marrgin: 0;
   background: #fff;
   position: absolute;
   top: 100%;
   right: 0;
   width: 100%;
   /* border-radius: 3px; */
   z-index: 100;
   box-shadow: 0 5px 6px 0 rgb(0 0 0 / 30%);
 }
 .half{margin-left: 20px;}
 .profile-dropdown ul li a {
   display: block;
   padding: 0.75rem 1rem;
   text-decoration: none;
   color: #737373;
  
 }
 .profile-dropdown ul li a i {
   font-size: 1.3rem;
   vertical-align: middle;
   margin: 0 0.75rem 0 -0.25rem;
 }
 .profile-dropdown ul li a:hover {
   background: #e5e5e5;
 }
 .profile-dropdown ul li:first-child a:hover {
   border-radius: 3px 3px 0 0;
 }
 .profile-dropdown ul li:last-child a:hover {
   border-radius: 0 0 3px 3px;
 }
 .profile-dropdown > label {
   position: absolute;
    height: 3.5rem;
    display: block;
    text-decoration: none;
    background: transparent;
    color: #333;
    box-sizing: border-box;
    padding: 0.9rem;
    float: right;
    border-radius: 0 3px 3px 0;
    bottom: 0;
    right: 0;
 }
 .profile-dropdown > label i {
   color: #b2b2b2;
   font-size: 1.75rem;
 }
 .profile-dropdown:after {
   content: "";
   display: table;
   clear: both;
 }
 
 
 
 p.subtitle {
   color: rgba(0, 0, 0, 0.5);
   font-weight: bold;
   text-align: center;
   margin: 0.5rem 0 2rem;
   letter-spacing: 0.1rem;
 }
 
 </style>
 <style>
.tweet {
border: 1px solid #e1e8ed;
border-radius: 5px;
position: relative;
padding: 20px;
background-color: #fff;
/* width: 400px; */
cursor: pointer;
transition: border-color 0.1s;
box-shadow: 0 2px 6px 0 rgb(0 0 0 / 30%);
margin-bottom: 20px;
}

/*.tweet-question {*/
/*box-shadow: 0 2px 6px 0 rgb(0 0 0 / 30%);*/
/*border-radius: 5px;*/
/*}*/

.tweet-question-heading {
/*background: #3f50c9;*/
/*padding: 10px;*/
/*border-radius: 8px;*/
/*border-top-left-radius: 5px;*/
/*border-top-right-radius: 5px;*/
width: 100%;
    /* margin: 0; */
    margin: 0px !important;
}

.tweet-question-heading h4 {
color: #fff !important;
text-align: center;
cursor: pointer;

}
.tweet-question{margin-bottom: 20px;
}
.tweet-question ul {
list-style: none;
/*background: #808080b8;*/
    margin-top: 14px;
    color: #000;
    padding:20px;
    box-shadow: 0 2px 6px 0 rgb(0 0 0 / 30%);
}

.tweet-question li {
padding: 5px 0px;
  color: #fff;
  text-align: left;

}
.bttunh{border: none;
width: 100%;
background: none;
margin: 0;
padding: 0;}
.tweet-question li a {
font-weight: bold;
  color: #444242;
  font-size: 17px;
}

.tweet:hover {
border-color: #ccd6dd;
}

.tweet .tweet-head {
display: flex;
line-height: 1.2;
}

.tweet .tweet-head .tweet-image {
display: flex;
align-items: center;
margin-right: 9px;
}

.tweet .tweet-head .tweet-image img {
border-radius: 999px;
height: 38px;
width: 38px;
}

.tweet .tweet-head .tweet-author {
display: flex;
flex-direction: column;
justify-content: center;
}

.tweet .tweet-head .tweet-author:hover .name {
color: #3b94d9;
}

.tweet .tweet-head .tweet-author .name {
font-weight: 800;
transition: color 0.1s;
}

.tweet .tweet-head .tweet-author .handle {
color: #697882;
font-size: 0.875rem;
}

.tweet .tweet-footer .icons .fas {
color: #697882;
margin-right: 1rem;
transition: color 0.1s;
}

.tweet .tweet-footer .icons .fas .icon-number {
font-family: "Roboto", sans-serif;
font-size: 1rem;
font-weight: normal;
}

.tweet .tweet-footer .icons .fa-reply:hover {
color: #3b94d9;
}

.tweet .tweet-footer .icons .fa-retweet:hover {
color: #3da50d;
}

.tweet .tweet-footer .icons .fa-heart:hover {
color: #E0245E;
}

@keyframes refresh {
0% {
transform: rotate(0);
}

100% {
transform: rotate(360deg);
}
}

.tweet-body {
padding: 20px 0px
}
.tweet-body h4{margin-bottom: 20px;}
.tweet-body p{margin-bottom: 20px;}
.green {
color: green;
}

.red {
color: red;
}
.navbar{margin-bottom: 0px !important;}
.icon i{font-size:30px !important;}
</style>
 <div class="header-sticky">
   <div fxlayout="column" fxlayoutalign="center" class="container"></div>
   <header class="header">
     <div class="container">
         <div>
           
             <div class="header_right_section">
                 <div class="header_right_section_top">
                     <div class="logo_section"><a href="/question-index"><img src="../_next/static/img/logo.png" alt=""></a></div>
                     <div class="login_country_select">
                         <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                             aria-controls="navbarSupportedContent" aria-expanded="false"
                             aria-label="Toggle navigation" class="navbar-toggler d-lg-none"><span
                                 id="menu-toggle" class="navbar-toggler-icon"></span></button>
                         @if(Auth::check())
                          <div class="login_section">
                             <a href="/logout" class="tp-btn-register">Log Out</a>
                         </div>
                         <div class="half">
                             <label for="profile2" class="profile-dropdown">
                               <input type="checkbox" id="profile2">
                               @if (isset(Auth::User()->dp))
                                    <img src="{{asset('uploads/profile')}}/{{Auth::User()->dp}}">
                               @else
                                    <img src="images/profile.jpg">
                               @endif
                               <span>{{Auth::User()->firstname}} {{Auth::User()->lastname}}</span>
                               <p style="text-align:center;">{{Auth::User()->title}}</p>
                               <label for="profile2"><i class="mdi mdi-menu"></i></label>
                               <ul>
                                 <li><a href="/edit-profile"><i class="mdi mdi-email-outline"></i>Edit your Profile</a></li>
                                 <li><a href="/upload-subject-list"><i class="mdi mdi-account"></i>Edit your Uploads</a></li>
                                 <li><a href="/upload-question-list"><i class="mdi mdi-settings"></i>Edit your Questions</a></li>
                                 <!-- <li><a href="#"><i class="mdi mdi-logout"></i>Logout</a></li> -->
                               </ul>
                             </label>
                         </div>
                         @else
                          <div class="login_section">
                             <a id="open-modal" href="javascript:void(0);" class="tp-btn-register">Sign In</a>
                              <a id="open-modal1" href="javascript:void(0);" class="tp-btn-register">Sign Up</a> 
                         </div>
                        @endif
                     </div>
                 </div>
                 <div class="header_right_section_bottom">
                     <div class="navigation">
                         <nav class="navbar navbar-expand-lg navbar-light">
                             <div id="menu" class="  navbar-collapse">
                               <ul class="navbar-nav">
                                 <li class="nav-item"><a href="/"
                                         class="nav-link home-icon active"><i aria-hidden="true"
                                             class="fa fa-home"></i></a></li>
                                 <li class="nav-item"><a href="/" class="nav-link">Ask a Question</a></li>
                                 @if(Auth::check())
                                 <li class="nav-item"><a href="/myaccount" class="nav-link">Create a Signup</a></li>
                                 @else
                                 <li class="nav-item"><a id="open-modal50" class="nav-link" href="javascript:void(0);">Create a Signup</a></li>
                                 @endif
                                 <li class="nav-item active"><a href="/talent-hub" class="nav-link">Helpful Resources</a></li>
                                 <!-- <li class="nav-item"><a href="https://quickmints.com/#/sub-category-class/" class="nav-link" target="blank">Kids Classes</a></li> -->
                                 <!-- <li class="nav-item"><a href="https://documents.quickmints.com/" class="nav-link" target="blank">Free Worksheets</a></li>
                                 <li class="nav-item"><a href="https://blogs.quickmints.com/" class="nav-link" target="blank">Blogs</a></li> -->
                             </ul>
                             </div>
                         </nav>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>
 </div>
 </body>
 
 {{-- pop-up --}}
 <!-- for login -->
 <div id="myModal" class="modal">
 
 
   <div id="modal-content" class="modal-content animation-1">
 
       <header class="modal-header">
           <div class="modal-header-title" style="padding:20px !important;">
               <p class="modal-header-title" style="padding:20px !important;">
                   Log in 
               </p>
               <p>
                  <!-- This application requires separate login from QuickMints-->
               </p>
               <p>
                   <b>Post Questions - A Place to share knowledge</b><br>
                   <b>Kid Zone - A Place to share Kids talents</b><br>
                   <b>Free Worksheets - Unlimited free worksheet downloads</b><br>
                  <!-- <b>Create a Signup - Create signup for volunteering, events, slot signups</b>-->
               </p>
           </div>
           <button id="close" class="modal-header-icon">
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
                           class="btn btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb "
                           style="width: 115px;">Login</a></button>
               </div>
               <br>
               <div id="open-modal5" class="d-flex justify-content-center modal-bottom-links"> Do not have an account
                   <a href="javascript:void(0);" class="ml-2">Register</a></div>
           </form>
           
       </div>
 
 
   </div>
 
 </div>
 
 <!-- for register -->
 <div id="myModal1" class="modal">
 
 
   <div id="modal-content1" class="modal-content modd animation-1">
 
       <header class="modal-header">
           <div class="modal-header-title" style="padding:20px !important;">
               <p class="modal-header-title" style="padding:20px !important;">
                   Sign Up
               </p>
               <p>
                 <!--  This application requires separate register from QuickMints-->
               </p>
           </div>
           <button id="close1" class="modal-header-icon">
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
           <form method="post" action="/register" >
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
                           class="btn btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb "
                           style="width: 115px;">Register</a></button>
               </div>
               <br>
             	<div class="d-flex justify-content-center modal-bottom-links">
                  By joining, you agree to the <a href="/trems-conditions" class="ml-2" style="margin-right:5px;"> Terms and Conditions </a> and <a href="/privacy-policy" class="ml-2"> Privacy Policy</a>
             	</div>
              
               <!--<div id="open-modal" class="d-flex justify-content-center modal-bottom-links"> Already have an account?-->
               <!--    <a href="javascript:void(0);" class="ml-2">Login</a></div>-->
           </form>
       </div>
 
 
   </div>
 
 </div>
 <!-- login create a signup -->
 <div id="myModal50" class="modal">
 
 
 <div id="modal-content" class="modal-content animation-1">

     <header class="modal-header">
         <div class="modal-header-title" style="padding:20px !important;">
             <p class="modal-header-title" style="padding:20px !important;">
                 Log in 
             </p>
             <p>
                <!-- This application requires separate login from QuickMints-->
             </p>
             <p>
                 <b>Post Questions - A Place to share knowledge</b><br>
                 <b>Kid Zone - A Place to share Kids talents</b><br>
                 <b>Free Worksheets - Unlimited free worksheet downloads</b><br>
                <!-- <b>Create a Signup - Create signup for volunteering, events, slot signups</b>-->
             </p>
         </div>
         <button id="close50" class="modal-header-icon">
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
                         class="btn btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb "
                         style="width: 115px;">Login</a></button>
             </div>
             <br>
             <!-- <div id="open-modal5" class="d-flex justify-content-center modal-bottom-links"> Do not have an account
                 <a href="javascript:void(0);" class="ml-2">Register</a></div> -->
         </form>
         
     </div>


 </div>

</div>
 <!-- end login -->
 
 <div id="myModal5" class="modal">
 
 
   <div id="modal-content5" class="modal-content modd animation-1">
 
       <header class="modal-header">
           <div class="modal-header-title" style="padding:20px !important;">
               <p class="modal-header-title" style="padding:20px !important;">
                   Register in to The Parent Teacher Hub
               </p>
           </div>
           <button id="close5" class="modal-header-icon">
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
                         <input type="password" name="password" class="form-control hei" id="pwd" aria-describedby="emailHelp" placeholder="Enter password">
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
                           class="btn btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb "
                           style="width: 115px;">Register</a></button>
               </div>
               <br>
             	<div class="d-flex justify-content-center modal-bottom-links">
                  By joining, you agree to the <a href="/trems-conditions" class="ml-2">Terms of Service </a> and <a href="/privacy-policy" class="ml-2"> Privacy Policy</a>
             	</div>
              
               <!--<div id="open-modal" class="d-flex justify-content-center modal-bottom-links"> Already have an account?-->
               <!--    <a href="javascript:void(0);" class="ml-2">Login</a></div>-->
           </form>
       </div>
 
 
   </div>
 
 </div>
 <!-- slot booking login-->
<div id="myModal10" class="modal">
 
 
   <div id="modal-content" class="modal-content animation-1">
 
       <header class="modal-header">
           <div class="modal-header-title" style="padding:20px !important;">
               <p class="modal-header-title" style="padding:20px !important;">
                   Log in to The Parent Teacher Hub
               </p>
               <p>
                   <b>Post Questions - A Place to share knowledge</b><br>
                   <b>Kid Zone - A Place to share Kids talents</b><br>
                   <b>Free Worksheets - Unlimited free worksheet downloads</b><br>
                   <b>Create a Signup - Create signup for volunteering, events, slot signups</b>
               </p>
           </div>
           <button id="close10" class="modal-header-icon">
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
                           class="btn btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb "
                           style="width: 115px;">Login</a></button>
               </div>
           </form>
           
       </div>
 
 
   </div>
 
 </div>

<!-- slot booking register -->
<div id="myModal11" class="modal">
 
 
   <div id="modal-content" class="modal-content modd animation-1">
 
       <header class="modal-header">
           <div class="modal-header-title" style="padding:20px !important;">
               <p class="modal-header-title" style="padding:20px !important;">
                   Register in to The Parent Teacher Hub
               </p>
           </div>
           <button id="close11" class="modal-header-icon">
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
                           class="btn btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb "
                           style="width: 115px;">Register</a></button>
               </div>
               <br>
             	<div class="d-flex justify-content-center modal-bottom-links">
                  By joining, you agree to the <a href="/trems-conditions" class="ml-2" style="margin-right:5px;">Terms and Conditions </a> and <a href="/privacy-policy" class="ml-2"> Privacy Policy</a>
             	</div>
               
              
               <!--<div id="open-modal" class="d-flex justify-content-center modal-bottom-links"> Already have an account?-->
               <!--    <a href="javascript:void(0);" class="ml-2">Login</a></div>-->
           </form>
       </div>
 
 
   </div>
 
 </div>
 <script>
 var modal = document.getElementById("myModal");
 var btn = document.getElementById("open-modal");
 var span = document.getElementById("close");
 btn.onclick = function() {
   modal.style.display = "block";
 }
 span.onclick = function() {
   modal.style.display = "none";
 }
 window.onclick = function(event) {
   if (event.target == modal) {
       modal.style.display = "none";
   }
 }
 </script>
 <script>
 var modal1 = document.getElementById("myModal1");
 var btn1 = document.getElementById("open-modal1");
 var span1 = document.getElementById("close1");
 btn1.onclick = function() {
   modal1.style.display = "block";
 }
 span1.onclick = function() {
   modal1.style.display = "none";
 }
 window.onclick = function(event) {
   if (event.target == modal) {
       modal1.style.display = "none";
   }
 }
 </script>
 <script>
 var modal5 = document.getElementById("myModal5");
 var btn5 = document.getElementById("open-modal5");
 var span5 = document.getElementById("close5");
 btn5.onclick = function() {
   modal5.style.display = "block";
 }
 span5.onclick = function() {
   modal5.style.display = "none";
 }
 window.onclick = function(event) {
   if (event.target == modal) {
       modal5.style.display = "none";
   }
 }
 </script>

<script>
 var modal50 = document.getElementById("myModal50");
 var btn50 = document.getElementById("open-modal50");
 var span50 = document.getElementById("close50");
 btn50.onclick = function() {
   modal50.style.display = "block";
 }
 span50.onclick = function() {
   modal50.style.display = "none";
 }
 window.onclick = function(event) {
   if (event.target == modal) {
       modal50.style.display = "none";
   }
 }
 </script>
 {{-- end pop-up --}}
 {{-- start form validation --}}
<script>
 function validateForm() {  
     //collect form data in JavaScript variables  
     var pwd = document.getElementById("pwd").value;  
     var cpwd = document.getElementById("cpwd").value;
     var email = document.getElementById("email").value;
    
       alert(email)
    
     //check empty email field  
     if(email == "") {  
       document.getElementById("emailM").innerHTML = "**Fill the email";  
       return false;  
     }
     
     //check empty password field  
     if(pwd == "") {  
       document.getElementById("pwdM").innerHTML = "**Fill the password please!";  
       return false;  
     }  
     
     //check empty confirm password field  
     if(cpwd == "") {  
       document.getElementById("cpwdM").innerHTML = "**Enter the password please!";  
       return false;  
     }
     
     if(pwd != cpwd) {  
       document.getElementById("cpwdM").innerHTML = "**Passwords are not same";  
       return false;  
     }  
  }  
 </script>
 {{-- end form validation --}}
 <script>
 $(document).ready(function () {
   var width = $(window).width();
   if (width < 1200) {
       $("#navbarSupportedContent li a").click(function () {
           $(".navbar-toggler").trigger("click");
       });
   }
 });
 </script>
 <script>
var modal10 = document.getElementById("myModal10");
var btn10 = document.getElementById("open-modal10");
var span10 = document.getElementById("close10");
btn10.onclick = function() {
  modal10.style.display = "block";
}
span10.onclick = function() {
  modal10.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
      modal10.style.display = "none";
  }
}
</script>
<script>
var modal11 = document.getElementById("myModal11");
var btn11 = document.getElementById("open-modal11");
var span11 = document.getElementById("close11");
btn11.onclick = function() {
  modal11.style.display = "block";
}
span11.onclick = function() {
  modal11.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
      modal11.style.display = "none";
  }
}
</script>
 <script>
 $.fn.extend({
 
   threeBarToggle: function (options) {
 
       var defaults = {
           color: "black",
           width: 30,
           height: 25,
           speed: 400,
           animate: true
       };
       var options = $.extend(defaults, options);
 
       return this.each(function () {
           $(this)
               .empty()
               .css({
 
               });
           $(this).addClass("tb-menu-toggle");
           $(this)
               .prepend("<i></i><i></i><i></i>")
               .on("click", function (event) {
                   event.preventDefault();
                   $(this).toggleClass("tb-active-toggle");
                   if (options.animate) {
                       $(this).toggleClass("tb-animate-toggle");
                   }
                   $(".tb-mobile-menu").slideToggle(options.speed);
               });
           $(this)
               .children()
               .css("background", options.color);
       });
   },
 
   accordionMenu: function (options) {
 
       var defaults = {
           speed: 400
       };
       var options = $.extend(defaults, options);
 
       return this.each(function () {
           $(this).addClass("tb-mobile-menu");
           var menuItems = $(this).children("li");
           menuItems
               .find(".sub-menu")
               .parent()
               .addClass("tb-parent");
           $(".tb-parent ul").hide();
           $(".tb-parent > a").on("click", function (event) {
               event.stopPropagation();
               event.preventDefault();
               $(this)
                   .siblings()
                   .slideToggle(options.speed);
           });
       });
   }
 });
 
 $("#menu-toggle").threeBarToggle({ color: "#A0283A", width: 30, height: 25 });
 $("#menu").accordionMenu();
 
 </script>
 <script>
 
 function myFunction() {
   document.getElementById("myDropdown").classList.toggle("show");
 }
 window.onclick = function (event) {
   if (!event.target.matches('.dropbtn')) {
       var dropdowns = document.getElementsByClassName("dropdown-content");
       var i;
       for (i = 0; i < dropdowns.length; i++) {
           var openDropdown = dropdowns[i];
           if (openDropdown.classList.contains('show')) {
               openDropdown.classList.remove('show');
           }
       }
   }
 }
 
 </script>