<!DOCTYPE html>
<html data-ng-app="SUGApp" lang="en-US"> 


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head><script type="text/javascript" src="cf_scripts/scripts/cfform.js"></script>
<script type="text/javascript" src="cf_scripts/scripts/masks.js"></script>

   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

   <meta charset="utf-8">
   
       <meta name="viewport" content="width=device-width, initial-scale=1">
   
   <title>Register for a Free Account</title>
   <meta NAME="Author" CONTENT="SignUpGenius">
   <meta name="description" content="Register for a free online account at SignUpGenius.com">
   <meta NAME="Keywords" CONTENT="sign up form list sheet meal food potluck snacks schedule group scheduling calendar register reservation volunteer">
   

  

   <script type="text/javascript" src="dist/js/lib/jquery-1.7.2.minf4a1.js?v=1636996767345"></script>

   <script type="text/javascript" src="dist/js/lib/jquery-1.11.1.minf4a1.js?v=1636996767345"></script>

       <script type="text/javascript" src="dist/js/lib/angular-1.2.minf4a1.js?v=1636996767345"></script>
   
   <script type="text/javascript" src="dist/js/lib/ui-bootstrap-0.11.0.minf4a1.js?v=1636996767345"></script>

   <script type="text/javascript">
       
   </script>



<script type="text/javascript" src="dist/js/lib/sug-globals.minf4a1.js?v=1636996767345"></script>

   
       <link rel="stylesheet" href="css/magnific-popup-minf4a1.css?v=1636996767345">
   

       
       <link rel="stylesheet" href="css/angular/magnific-ngModal.minf4a1.css?v=1636996767345">
       <link href="js/lib/ngImgCrop/ng-img-cropf4a1.css?v=1636996767345" rel="stylesheet" type="text/css" />

       
       
           
           <link rel="stylesheet" href="dist/css/SUGstyleV3-responsive.minf4a1.css?v=1636996767345">
       

</head>

   <body>




<div class="mainbody">
   <div class="container" style="padding-top:30px;">
       <div class="row">
           <div class="col-xs-12">
           <link rel="stylesheet" href="css/bootstrap/sugmodal.css">



<style>
   
   .loginFormContainer{width:600px;overflow:hidden;}
   .tabclass{width:50%}
   .nav-tabs{margin:0;font-weight:700;font-size:14pt;text-align:center;}
   .nav-tabs a{height:62px}
   .nav-tabs>li>a{line-height:2.428571}
   .formContents{padding:30px 20px}
   .centeredContents{float:none;margin:0 auto}
   .input-group-addon{min-width:130px;text-align:left}
   .smalllink{font-size:9pt}

   
       

       
       .loginFormContainer{width:600px;overflow:hidden;}
       .tabclass{width:50%}
       .nav-tabs{margin:0;font-weight:700;font-size:14pt;text-align:center;}
       .nav-tabs a{height:62px}
       .nav-tabs>li>a{line-height:2.428571}
       .formContents{padding:30px 20px}
       .centeredContents{float:none;margin:0 auto}
       .input-group-addon{min-width:130px;text-align:left}
       .smalllink{font-size:9pt}

       
       body {
           background: url(images/login/login-background.jpg) top center no-repeat;
           background-size: 100% 100%;
           background-attachment:fixed;
       }

   
       .background-things {
           position:fixed;
           left:0;
           width:100%;
           height:100%;
           min-width: 768px;
           overflow:hidden;
           z-index:-1;
           top:0;
       }

       .overlay {
           background:#653e14;
           background-size:100%;
           height:100%;
           width:100%;
           overflow:hidden;
           position:absolute;
           opacity:.7;
           z-index:10;
       }

       .box-spacing{
           padding-bottom: 5px;
       }

       .divider-or {
           position: relative;
           color: white;
       }
       .divider-or:before {
           position: absolute;
           left: 0;
           width: 38%;
           height: 1px;
           right: auto;
           content: "";
           display: block;
           border-top: 1px solid white;
           top: 12px;
       }
       .divider-or:after {
           position: absolute;
           right: 0;
           width: 38%;
           height: 1px;
           left: auto;
           content: "";
           display: block;
           border-top: 1px solid white;
           top: 12px;
       }

       .btn-facebook {
           border:1px solid transparent;
           background-color:#3B5998;
           color:white;
       }
       .btn-facebook:hover, .btn-facebook:focus, .btn-facebook.focus {
           border:1px solid transparent;
           background-color:#2b4a8c;
           color:white;
       }

       .leftimageB{position: absolute; z-index: 5; overflow: hidden; -webkit-transform: rotate(-16deg); -ms-transform: rotate(16deg); transform: rotate(16deg); left: -60px; top: 230px; }
       .rightimageB{position: absolute; z-index: 6; overflow: hidden; right: 40px; top: 300px; }

       .leftimageA{position: absolute; z-index: 5; overflow: hidden; left: 0px; top: 180px; }
       .rightimageA{position: absolute; z-index: 6; overflow: hidden; right: 60px; top: 360px; }
       .atomicsticker{position: absolute; z-index: 7; overflow: hidden; left: 266px; top: 500px;  transform: translate3d(0px, 0px, 0px);}

       .leftimageP{position: absolute; z-index: 5; overflow: hidden; -webkit-transform: rotate(-16deg); -ms-transform: rotate(-16deg); transform: rotate(-16deg); left: 70px; top: 280px; }
       .rightimageP{position: absolute; z-index: 6; overflow: hidden; right: 40px; top: 260px; }
       .tmessages{position: absolute; z-index: 7; overflow: hidden;  left: 83px; top: 330px; transform: rotate(-16deg) translate3d(0px, 0px, 0px);}

       .ie9 .tmessages {
       display:none;
       }

       .light {
           margin:0 auto;
           text-align:center;
           position:absolute;
           width:800px;
           height:800px;
           margin-top:-200px;
           margin-left:-200px;
           right:-200px;
           top:150px;
           z-index: 4;

           -webkit-animation-name: flicker;
                   animation-name: flicker;
           -webkit-animation-duration: 8s;
                   animation-duration: 8s;
           -webkit-animation-iteration-count: infinite;
                   animation-iteration-count: infinite;
           -webkit-animation-timing-function: linear;
                   animation-timing-function: linear;
       }

       .form-horizontal .control-label {
           text-align: right;
           margin-bottom: 0;
           padding-top: 7px;
       }

       .light {
           position:absolute;

           
           background: radial-gradient(ellipse at center, rgba(255, 255, 255, 0.60) 0%, rgba(255, 255, 255, 0) 40%, rgba(255, 255, 255, 0) 100%);
           filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4dffffff', endColorstr='#00ffffff',GradientType=1 );

           }

       .ie9 .light {
       opacity:0.0;
       }

       .loginlink a {color: #ffffff !important; text-decoration: underline; }

   

</style>



   

<div class="row">
   
       <div class="col-sm-12">
           
               <div class="spacer"></div>
           
           <h1 class="hero-title shadow text-white" align="center">It's a great day</h1>
       </div>
   
</div>

<div class="row">

       

       
       <div class="tab-content">

       
           <div role="tabpanel" class="tab-pane active" id="login">
               <div style="display: flex; justify-content: center;">
          @if(Session::has('success'))
          <div class="alert alert-success" role="alert">
          {{Session::get('success')}}
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
           </div>
             @endif
             @if(Session::has('error'))
             <div class="alert alert-danger" role="alert">
          {{Session::get('error')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
           </button>
       </div>
       @endif
      </div>

               <form  id="LoginForm" method="post" action="/user-register">
                @csrf
               
                   <div class="col-sm-10 centeredContents form-horizontal">
               
                    <div class="spacer"></div>
                    <div class="form-group createincludepadding">
            <label for="firstname" class="text-white col-sm-3 col-lg-4 control-label">
              <span class="visible-xs-inline-block">First&nbsp;</span>Name
            </label>

            
              <div class="col-sm-6 col-lg-5">
            
              <div class="col-sm-6 padding-left-0 padding-xs-right-0">
                <input name="firstname" id="firstNameId" value="" maxlength="50" size="35" label="First Name" class="form-control black-shadow-active" placeholder="First Name" autofocus="" type="text" autocomplete="section-register given-name">
              </div>

              <span class="visible-xs-inline-block">
                <label for="lastname" class="text-white col-sm-3 col-lg-4 control-label padding-left-0" style="padding-top:22px;">Last Name</label>
              </span>

              <div class="col-sm-6 padding-left-0 padding-right-0">
                <input name="lastname" id="lastNameId" value="" maxlength="100" size="35" label="Last Name" class="form-control black-shadow-active" placeholder="Last Name" type="text" autocomplete="section-register family-name">
              </div>
            </div>
          </div>

              
               

               <div class="form-group">
                   <label class="text-white col-sm-3 col-lg-4 control-label">Email</label>

                   
                       <div class="col-sm-6 col-lg-5">
                   

                       <input name="email" id="email" type="email" maxlength="100" class="form-control black-shadow-active" autofocus value="" autocomplete="section-login email" />
                   </div>
               </div>

               <div class="form-group">
                   <label class="text-white col-sm-3 col-lg-4 control-label">Password</label>

                   
                       <div class="col-sm-6 col-lg-5">
                   

                       <input sug-password-visible name="password" id="pword" type="password" maxlength="100" class="form-control black-shadow-active" size="20" autocomplete="section-login current-password" />
                   </div>
               </div>

               <div class="form-group createincludepadding">
            
                <div class="col-sm-6 col-sm-offset-3 col-lg-5 col-lg-offset-4">
            
                <div class="spacer-sm"></div>
            <input name="submit" type="submit" value="Register Now" class="btn btn-success btn-block black-shadow-active">
                <div class="spacer-sm"></div>
            </div>

            
                <div class="col-sm-6 col-sm-offset-3 col-lg-5 col-lg-offset-4">
            
                    <div class="centered">
                        
                           
                            <div class="spacer-sm"></div>
                            <a href="/login" aria-controls="registration" role="tab" data-toggle="tab" class="text-white">Already a member? <span style="text-decoration: underline;"> Login </span></a>
                        
                    </div>
                </div>
            </div>
               </div>
               </form>

           </div>
           

           
       
       </div>
       

</div>



           </div>
       </div>

   </div> 
</div>

</html>



