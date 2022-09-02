<!DOCTYPE html>
<html lang="en">

<head>
    <meta charSet="utf-8" />
    <title>Home</title>

    <meta name="page_type" content="page" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="preload" href="../_next/static/css/de79cee5857d13c6dd3a.css" as="style" />
    <link rel="stylesheet" href="../_next/static/css/de79cee5857d13c6dd3a.css" />
    <link rel="preload" href="../_next/static/css/948bd495162824a1e75b0f407256f639d3726e33_CSS.de79cee5.chunk.css"
        as="style" />
    <link rel="stylesheet" href="../_next/static/css/948bd495162824a1e75b0f407256f639d3726e33_CSS.de79cee5.chunk.css" />
    <link rel="preload" href="../_next/static/css/42ed995f3f9c450642ce.css" as="style" />
    <link rel="stylesheet" href="../_next/static/css/42ed995f3f9c450642ce.css" />
    <link rel="preload" href="../_next/static/css/styles.42ed995f.chunk.css" as="style" />
    <link rel="stylesheet" href="../_next/static/css/styles.42ed995f.chunk.css" />
    <link rel="preload" href="../_next/static/css/44495ce05e15228a2271.css" as="style" />
    <link rel="stylesheet" href="../_next/static/css/44495ce05e15228a2271.css" />
    <link rel="stylesheet" href="http://127.0.0.1:8000/_next/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/responsive.css">

    <link rel="stylesheet" href="assets1/css/quick.css">
    <link rel="stylesheet" href="assets1/css/quick2.css">
    <link rel="stylesheet" href="assets1/css/lightbox.min.css">
    <link rel="stylesheet" href="assets1/css/style-ext.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<style>
footer {
    margin: 70px 0 0 0;
    background: #2B2B2B;
}

.footer_inner {
    padding-top: 70px;
    padding-bottom: 30px;

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

.footer_inner ul {
    margin: 0;
    padding: 0;
}

.footer_inner ul li {
    margin: 0 0 8px 0;
    padding: 0;
    list-style-type: none;
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

.contact_footer_box p.message {
    background: url('../_next/static/img/message.png') no-repeat left center;
}

.contact_footer_box p.address {
    background: url('../_next/static/img/location.png') no-repeat left center;
}

.copy_right {
    padding: 20px 0;
    border-top: 1px solid #3a3b3d;
}

.copy_right_inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
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
</style>
<style>
.model {
    display: none;
    position: fixed;
    padding-top: 100px;
    top: 0;
    left: 0;
    z-index: 100;
    overflow: auto;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.4);
}

.model-content {
    position: relative;
    width: 60%;
    margin: auto;
    background-color: #fff;
    animation-name: animatetop;
    animation-duration: 0.4s
}

@keyframes animatetop {
    from {
        top: -300px;
        opacity: 0
    }

    to {
        top: 0;
        opacity: 1
    }
}

.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {
    padding: 2px 16px;
}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-header .close {
    margin-top: 10px !important;
}
</style>

<body>
    <div id="__next">
        <div class="">
            <style>
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
                box-shadow: inset 0 0 0 32px rgba(0, 0, 0, 0.1);
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
                font-weight: 700;
                padding: 5px 15px;
                font-size: 40px;

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
                padding: 2px 16px;
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
            <div class="header-sticky">
                <div fxlayout="column" fxlayoutalign="center" class="container"></div>
                <header class="header">
                    <div class="container">
                        <div>

                            <div class="header_right_section">
                                <div class="header_right_section_top">
                                    <div class="logo_section"><a href="#/home"><img src="../_next/static/img/logo.png"
                                                alt=""></a></div>
                                    <div class="login_country_select">
                                        <button type="button" data-toggle="collapse"
                                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation"
                                            class="navbar-toggler d-lg-none"><span id="menu-toggle"
                                                class="navbar-toggler-icon"></span></button>
                                        <div class="login_section">
                                            <a id="open-modal" href="javascript:void(0);" class="tp-btn-register">Sign
                                                In</a>
                                            <a id="open-modal1" href="javascript:void(0);" class="tp-btn-register">Sign
                                                Up</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="header_right_section_bottom">
                                    <div class="navigation">
                                        <nav class="navbar navbar-expand-lg navbar-light">
                                            <div id="menu" class="collapse navbar-collapse">
                                                <ul class="navbar-nav">
                                                    <li class="nav-item"><a href="https://quickmints.com/"
                                                            class="nav-link home-icon active"><i aria-hidden="true"
                                                                class="fa fa-home"></i></a></li>
                                                    <li class="nav-item"><a href="https://documents.quickmints.com/"
                                                            class="nav-link">Free Worksheets</a>
                                                    </li>
                                                    <li class="nav-item"><a href="/question-index" class="nav-link">Post
                                                            Question</a></li>
                                                    <li class="nav-item active"><a href="/" class="nav-link">Kids Talent
                                                            Zone</a>
                                                    </li>
                                                    <li class="nav-item"><a href="/myaccount" target="_blank"
                                                            class="nav-link">Create a Slot</a>
                                                    </li>
                                                    <li class="nav-item"><a
                                                            href="https://quickmints.com/#/sub-category-class/"
                                                            class="nav-link">Classes</a>
                                                    </li>
                                                    <li class="nav-item"><a href="https://blogs.quickmints.com/"
                                                            class="nav-link">Blogs</a>
                                                    </li>
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


<!-- for login -->
<div id="myModal" class="modal">


    <div id="modal-content" class="modal-content animation-1">

        <header class="modal-header">
            <p class="modal-header-title" style="padding:20px !important;">
                Log In
            </p>
            <button id="close" class="modal-header-icon">
                <span class="icon">
                    <i class='bx bx-x'></i>
                </span>
            </button>
        </header>
        <!-- Modal body -->

        <div class="modal-body">
            <div class="form-group">
                <a href="http://127.0.0.1:8000/auth/facebook"><button class="loginBtn loginBtn--facebook">
                        Login with Facebook
                    </button></a>

                <a href="http://127.0.0.1:8000/auth/google"><button class="loginBtn loginBtn--google">
                        Login with Google</button></a>
                <br>
            </div>
            <form method="post" action="/login-check">
                <input type="hidden" name="_token" value="o138ssxARDEbqvzn1rTnExFEJOxSeYyOEslIPie4">
                <div class="form-group">

                    <input type="text" name="email" class="form-control hei" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Enter email">
                    <br>
                    <input type="password" name="password" class="form-control hei" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Enter password">

                </div>
                <div class="form-group clearfix"><label class="radio-item form-check-label float-left"><a
                            href="/forgot-password" class="float-right forgot-txt">Forgot
                            Password?</a></div>
                <br>

                <div style="text-align: center;">
                    <button style="border: none;background: transparent;"><a
                            class="btn btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb "
                            style="width: 115px;">Login</a></button>
                </div>
                <br>
                <div id="open-modal5" class="d-flex justify-content-center modal-bottom-links"> Don't have an account?
                    <a href="javascript:void(0);" class="ml-2">Register</a>
                </div>
            </form>

        </div>


    </div>

</div>

<!-- for register -->
<div id="myModal1" class="modal">


    <div id="modal-content1" class="modal-content animation-1">

        <header class="modal-header">
            <p class="modal-header-title" style="padding:20px !important;">
                Register
            </p>
            <button id="close1" class="modal-header-icon">
                <span class="icon">
                    <i class='bx bx-x'></i>
                </span>
            </button>
        </header>
        <!-- Modal body -->

        <div class="modal-body">
            <div class="form-group">
                <a href="http://127.0.0.1:8000/auth/facebook"><button class="loginBtn loginBtn--facebook">
                        Login with Facebook
                    </button></a>

                <a href="http://127.0.0.1:8000/auth/google"><button class="loginBtn loginBtn--google">
                        Login with Google</button></a>
                <br>
            </div>
            <form method="post" action="/register" onsubmit="return validateForm()">
                <input type="hidden" name="_token" value="o138ssxARDEbqvzn1rTnExFEJOxSeYyOEslIPie4">
                <div class="form-group">

                    <input type="text" name="firstname" class="form-control hei" id="fname" aria-describedby="emailHelp"
                        placeholder="Enter firstname" required>
                    <span id="fnameM" style="color:red"></span>
                    <br>
                    <input type="text" name="lastname" class="form-control hei" id="lname" aria-describedby="emailHelp"
                        placeholder="Enter lastname" required>
                    <span id="lnameM" style="color:red"></span>
                    <br>
                    <input type="email" name="email" class="form-control hei" id="email" aria-describedby="emailHelp"
                        placeholder="Enter email" required>
                    <span id="emailM" style="color:red"></span>
                    <br>
                    <input type="password" name="password" class="form-control hei" id="pwd"
                        aria-describedby="emailHelp" placeholder="Enter password">
                    <span id="pwdM" style="color:red"></span>
                    <br>
                    <input type="password" name="confirm-password" class="form-control hei" id="cpwd"
                        aria-describedby="emailHelp" placeholder="Enter confirm password">
                    <span id="cpwdM" style="color:red"></span>
                </div>
                <div class="form-group clearfix"><label class="radio-item form-check-label float-left"></label><a
                        href="/forgot-password" class="float-right forgot-txt">Forgot
                        Password?</a></div>
                <br>

                <div style="text-align: center;">
                    <button style="border: none;background: transparent;"><a
                            class="btn btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb "
                            style="width: 115px;">Register</a></button>
                </div>

                <br>
                <!--<div id="open-modal" class="d-flex justify-content-center modal-bottom-links"> Already have an account?-->
                <!--    <a href="javascript:void(0);" class="ml-2">Login</a></div>-->
            </form>
        </div>


    </div>

</div>

<div id="myModal5" class="modal">


    <div id="modal-content5" class="modal-content animation-1">

        <header class="modal-header">
            <p class="modal-header-title" style="padding:20px !important;">
                Register
            </p>
            <button id="close5" class="modal-header-icon">
                <span class="icon">
                    <i class='bx bx-x'></i>
                </span>
            </button>
        </header>
        <!-- Modal body -->

        <div class="modal-body">
            <div class="form-group">
                <a href="http://127.0.0.1:8000/auth/facebook"><button class="loginBtn loginBtn--facebook">
                        Login with Facebook
                    </button></a>

                <a href="http://127.0.0.1:8000/auth/google"><button class="loginBtn loginBtn--google">
                        Login with Google</button></a>
                <br>
            </div>
            <form method="post" action="/register" onsubmit="return validateForm()">
                <input type="hidden" name="_token" value="o138ssxARDEbqvzn1rTnExFEJOxSeYyOEslIPie4">
                <div class="form-group">

                    <input type="text" name="firstname" class="form-control hei" id="fname" aria-describedby="emailHelp"
                        placeholder="Enter firstname" required>
                    <span id="fnameM" style="color:red"></span>
                    <br>
                    <input type="text" name="lastname" class="form-control hei" id="lname" aria-describedby="emailHelp"
                        placeholder="Enter lastname" required>
                    <span id="lnameM" style="color:red"></span>
                    <br>
                    <input type="email" name="email" class="form-control hei" id="email" aria-describedby="emailHelp"
                        placeholder="Enter email" required>
                    <span id="emailM" style="color:red"></span>
                    <br>
                    <input type="password" name="password" class="form-control hei" id="pwd"
                        aria-describedby="emailHelp" placeholder="Enter password">
                    <span id="pwdM" style="color:red"></span>
                    <br>
                    <input type="password" name="confirm-password" class="form-control hei" id="cpwd"
                        aria-describedby="emailHelp" placeholder="Enter confirm password">
                    <span id="cpwdM" style="color:red"></span>
                </div>
                <div class="form-group clearfix"><label class="radio-item form-check-label float-left"></label><a
                        href="/forgot-password" class="float-right forgot-txt">Forgot
                        Password?</a></div>

                <br>
                <div style="text-align: center;">
                    <button style="border: none;background: transparent;"><a
                            class="btn btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb "
                            style="width: 115px;">Register</a></button>
                </div>

                <br>
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
function validateForm() {
    //collect form data in JavaScript variables  
    var pwd = document.getElementById("pwd").value;
    var cpwd = document.getElementById("cpwd").value;
    var email = document.getElementById("email").value;
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;

    //check empty first name field  
    if (fname == "") {
        document.getElementById("fnameM").innerHTML = "**Fill the first name";
        return false;
    }

    //character data validation  
    if (!isNaN(fname)) {
        document.getElementById("fnameM").innerHTML = "**Only characters are allowed";
        return false;
    }

    //character data validation  
    if (!isNaN(lname)) {
        document.getElementById("lnameM").innerHTML = "**Only characters are allowed";
        return false;
    }

    //check empty email field  
    if (email == "") {
        document.getElementById("emailM").innerHTML = "**Fill the email";
        return false;
    }

    //check empty password field  
    if (pwd == "") {
        document.getElementById("pwdM").innerHTML = "**Fill the password please!";
        return false;
    }

    //check empty confirm password field  
    if (cpwd == "") {
        document.getElementById("cpwdM").innerHTML = "**Enter the password please!";
        return false;
    }

    if (pwd != cpwd) {
        document.getElementById("cpwdM").innerHTML = "**Passwords are not same";
        return false;
    }
}
</script>

<script>
$(document).ready(function() {
    var width = $(window).width();
    if (width < 1200) {
        $("#navbarSupportedContent li a").click(function() {
            $(".navbar-toggler").trigger("click");
        });
    }
});
</script>
<script>
$.fn.extend({

    threeBarToggle: function(options) {

        var defaults = {
            color: "black",
            width: 30,
            height: 25,
            speed: 400,
            animate: true
        };
        var options = $.extend(defaults, options);

        return this.each(function() {
            $(this)
                .empty()
                .css({

                });
            $(this).addClass("tb-menu-toggle");
            $(this)
                .prepend("<i></i><i></i><i></i>")
                .on("click", function(event) {
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

    accordionMenu: function(options) {

        var defaults = {
            speed: 400
        };
        var options = $.extend(defaults, options);

        return this.each(function() {
            $(this).addClass("tb-mobile-menu");
            var menuItems = $(this).children("li");
            menuItems
                .find(".sub-menu")
                .parent()
                .addClass("tb-parent");
            $(".tb-parent ul").hide();
            $(".tb-parent > a").on("click", function(event) {
                event.stopPropagation();
                event.preventDefault();
                $(this)
                    .siblings()
                    .slideToggle(options.speed);
            });
        });
    }
});

$("#menu-toggle").threeBarToggle({
    color: "#A0283A",
    width: 30,
    height: 25
});
$("#menu").accordionMenu();
</script>
<script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function(event) {
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
.tweet-question{ box-shadow: 0 2px 6px 0 rgb(0 0 0 / 30%);border-radius: 5px;}
.tweet-question-heading{background: #0e9cff;
    padding: 10px;border-top-left-radius: 5px;
    border-top-right-radius: 5px;
}
    .tweet-question-heading h4{
        color: #fff !important;
    text-align: center;
    }
.tweet-question ul{list-style: auto;}
.tweet-question li{padding: 5px 0px;}

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

.green {
    color: green;
}

.red {
    color: red;
}
</style>


<section>
    <div class="container">
        <div class="row">
<div class="col-md-9 col-lg-9 col-sm-12">
<div class="tweet">
            <div class="tweet-head">
                <div class="tweet-image">
                    <img src="https://source.unsplash.com/7_TTPznVIQI/50/" alt="avatar" />
                </div>
                <div class="tweet-author">
                    <div class="name">John Smith</div>
                    <div class="handle">@john_smith</div>
                </div>
            </div>

            <div class="tweet-body">
                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
                <p id="tweet-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porta nisi nunc, et
                    porttitor justo condimentum ac. Pellentesque orci aliquam.</p>
            </div>
            <div class="tweet-footer">
                <div class="icons">
                    <button class="btn" id="green"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"></i></button>
                    <button class="btn" id="red"><i class="fa fa-thumbs-down fa-lg" aria-hidden="true"></i></button>

                    <i class="fas fa-comments"></i>
                    <i class="fas fa-retweet"></i>
                    <i class="fas fa-heart"></i>
                </div>
            </div>
        </div>

        <div class="tweet">
            <div class="tweet-head">
                <div class="tweet-image">
                    <img src="https://source.unsplash.com/7_TTPznVIQI/50/" alt="avatar" />
                </div>
                <div class="tweet-author">
                    <div class="name">John Smith</div>
                    <div class="handle">@john_smith</div>
                </div>
            </div>

            <div class="tweet-body">
                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
                <p id="tweet-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porta nisi nunc, et
                    porttitor justo condimentum ac. Pellentesque orci aliquam.</p>
            </div>
            <div class="tweet-footer">
                <div class="icons">
                    <button class="btn" id="green"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"></i></button>
                    <button class="btn" id="red"><i class="fa fa-thumbs-down fa-lg" aria-hidden="true"></i></button>

                    <i class="fas fa-comments"></i>
                    <i class="fas fa-retweet"></i>
                    <i class="fas fa-heart"></i>
                </div>
            </div>
        </div>
        <div class="tweet">
            <div class="tweet-head">
                <div class="tweet-image">
                    <img src="https://source.unsplash.com/7_TTPznVIQI/50/" alt="avatar" />
                </div>
                <div class="tweet-author">
                    <div class="name">John Smith</div>
                    <div class="handle">@john_smith</div>
                </div>
            </div>

            <div class="tweet-body">
                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
                <p id="tweet-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porta nisi nunc, et
                    porttitor justo condimentum ac. Pellentesque orci aliquam.</p>
            </div>
            <div class="tweet-footer">
                <div class="icons">
                    <button class="btn" id="green"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"></i></button>
                    <button class="btn" id="red"><i class="fa fa-thumbs-down fa-lg" aria-hidden="true"></i></button>

                    <i class="fas fa-comments"></i>
                    <i class="fas fa-retweet"></i>
                    <i class="fas fa-heart"></i>
                </div>
            </div>
        </div>
</div>
<div class="col-md-3 col-lg-3 col-sm-12">
<div class="tweet-question">
    <div class="tweet-question-heading">
      <h4>Ask a Question</h4>
    </div>
    <ul>
        <li><a href="#">All</a></li>
        <li><a href="#">New Question Category</a></li>
        <li><a href="#">High School Topics</a></li>
        <li><a href="#">Middle School Topics</a></li>
        <li><a href="#">Elementary School Topics</a></li>
    </ul>

</div>
</div>
        </div>
    </div>
</section>

<style>
footer {
    margin: 70px 0 0 0;
    background: #2B2B2B;


}

button {
    cursor: pointer;
    outline: 0;
    color: #AAA;

}

.btn:focus {
    outline: none;
}
</style>
<footer class="foot">
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
                        admin@quickmints.com </p>
                    <p _ngcontent-vpu-c169="" ng-reflect-ng-class="[object Object]" class="address"> San
                        Ramon, CA </p>


                </div>
            </div>
        </div>

    </div>

    <div _ngcontent-vpu-c169="" class="copy_right">
        <div _ngcontent-vpu-c169="" class="container">
            <div _ngcontent-vpu-c169="" class="copy_right_inner">
                <p _ngcontent-vpu-c169="">© 2021 Quickmints. All rights reserved.</p><a _ngcontent-vpu-c169=""
                    href="#"><img _ngcontent-vpu-c169="" src="../_next/static/img/payment_options5.png" alt=""></a>
            </div>
        </div>
    </div>
</footer>

<script>
var modal2 = document.getElementById("myModal2");
var btn2 = document.getElementById("open-modal2");
var span2 = document.getElementById("close2");
btn2.onclick = function() {
    modal2.style.display = "block";
}
span2.onclick = function() {
    modal2.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal2.style.display = "none";
    }
}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$('[data-id="model"]').on('click', function() {
    var thisModel = $(this).data('target');
    $(thisModel).show();
    $(thisModel).find('[data-close="model"]').click(function() {
        $(thisModel).hide();
    });
    $(window).click(function(event) {
        if ('#' + event.target.id == thisModel) {
            $(thisModel).hide();
        }
    });
});
</script>
<script>
var btn1 = document.querySelector('#green');
var btn2 = document.querySelector('#red');

btn1.addEventListener('click', function() {

    if (btn2.classList.contains('red')) {
        btn2.classList.remove('red');
    }
    this.classList.toggle('green');

});

btn2.addEventListener('click', function() {

    if (btn1.classList.contains('green')) {
        btn1.classList.remove('green');
    }
    this.classList.toggle('red');

});
</script>



</html>