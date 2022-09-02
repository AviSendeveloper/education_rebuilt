<?php use App\Models\Comment; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charSet="utf-8" />
    <title>Home</title>

    <meta name="page_type" content="page" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="preload" href="{{ asset('_next/static/css/de79cee5857d13c6dd3a.css') }}" as="style" />
    <link rel="stylesheet" href="{{ asset('_next/static/css/de79cee5857d13c6dd3a.css') }}" />
    <link rel="preload"
        href="{{ asset('_next/static/css/948bd495162824a1e75b0f407256f639d3726e33_CSS.de79cee5.chunk.css') }}"
        as="style" />
    <link rel="stylesheet"
        href="{{ asset('_next/static/css/948bd495162824a1e75b0f407256f639d3726e33_CSS.de79cee5.chunk.css') }}" />
    <link rel="preload" href="{{ asset('_next/static/css/42ed995f3f9c450642ce.css') }}" as="style" />
    <link rel="stylesheet" href="{{ asset('_next/static/css/42ed995f3f9c450642ce.css') }}" />
    <link rel="preload" href="{{ asset('_next/static/css/styles.42ed995f.chunk.css') }}" as="style" />
    <link rel="stylesheet" href="{{ asset('_next/static/css/styles.42ed995f.chunk.css') }}" />
    <link rel="preload" href="{{ asset('_next/static/css/44495ce05e15228a2271.css') }}" as="style" />
    <link rel="stylesheet" href="{{ asset('_next/static/css/44495ce05e15228a2271.css') }}" />
    <link rel="stylesheet" href="{{ asset('_next/static/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')}}"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css')}}" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <link rel="stylesheet" href="{{ asset('assets1/css/quick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/quick2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/style-ext.css') }}">
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
        padding: 16px 16px;
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

    /*.modal-header .close {*/
    /*    margin-top: 10px !important;*/
    /*}*/
.modal-content span{font-size:30px !important;}
</style>

<body>
    <div id="__next">
        <div class="">
            @include('layout.header')


            <section>
                <div class="container">
                    <div class="SearchTitle-module_root_3mwIP typography-small">
                        <div class="SearchBar-module_container_1AXk_ search-module_search_2NhRQ">
                            <div class="SearchBar-module_search-bar-container_qVYML">
                                <div class="SearchBar-module_search-bar_32NYp">
                                    <div class="SearchBar-module_search-form_3O6b_ form">
                                        <div class="SearchBar-module_search-box_tsBww">
                                            <form action="/search-question" method="post"
                                                title="Search 30,000+ educational resources" role="search">
                                                @csrf <div>
                                                    <div role="combobox" aria-haspopup="listbox"
                                                        aria-owns="react-autowhatever-1" aria-expanded="false"
                                                        class="react-autosuggest__container">
                                                        <input type="text" name="search" autocomplete="off"
                                                            aria-autocomplete="list"
                                                            aria-controls="react-autowhatever-1"
                                                            class="SearchBar-module_search-input_GtOux"
                                                            placeholder="Search Questions by Keywords"
                                                            title="Search worksheets" value="">
                                                        <div id="react-autowhatever-1" role="listbox"
                                                            class="react-autosuggest__suggestions-container">
                                                        </div>
                                                    </div>
                                                </div><button
                                                    class=" btn-tertiary btn-normal Button-module_btn_1JCnt Button-module_tertiary_EUghB Button-module_shadowless_3Yoni SearchBar-module_search-button_wRuXp SearchBar-module_btn_1Fgsj"
                                                    title="Search" type="submit"><img
                                                        src="../_next/static/img/search.png" alt=""
                                                        style="width: 17px;"></button>
                                            </form>
                                        </div>

                                    </div>
                                    @if (Session::has('success'))
                                        <div class="alert alert-success" role="alert"
                                            style="color: black;font-size: 16;">
                                            {{ Session::get('success') }}
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                    @if (Session::has('error'))
                                        <div class="alert alert-danger" role="alert"
                                            style="color: black;font-size: 16;">
                                            {{ Session::get('error') }}
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-sm-12">
                            <br>
                            @if (Auth::check())
                                <div class="tweet-question">
                                    <button type="button" class="btn bttunh">
                                        <div class="tweet-question-heading tp-btn-register">
                                            <h4 data-id="model" data-target="#mymodel">Ask a Question</h4>
                                        </div>
                                    </button>
                                    @include('user.question.category')
                                </div>
                            @else
                                <div class="tweet-question">
                                    <button type="button" class="btn bttunh">
                                        <div class="tweet-question-heading tp-btn-register">
                                            <h4 id="modalBtn31">Ask a Question</h4>
                                        </div>
                                    </button>
                                    @include('user.question.category')
                                </div>
                            @endif
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-12">
                            <h2 class="screen-reader-text">{{ $categoryName }}</h2>
                            @foreach ($data as $item)
                                <div class="tweet">
                                    <div class="tweet-head">
                                        <div class="tweet-image">
                                            @if (isset($item->dp))
                                                <img src="uploads/profile/{{ $item->dp }}" alt="avatar" />
                                            @else
                                                <img src="{{ asset('assets/uploads/avatar.png') }}" alt="avatar" />
                                            @endif
                                        </div>
                                        <div class="tweet-author">
                                            <div class="name">{{ $item->firstname }} {{ $item->lastname }}
                                            </div>
                                            <div class="handle">{{ $item->title }}</div>
                                        </div>
                                    </div>

                                    <div class="tweet-body">
                                        <a href="/{{ $item->slug }}">
                                            <h4>{{ $item->question }}</h4>
                                        </a>
                                        <p id="tweet-text">{!! $item->description !!}</p>
                                        @if (isset($item->image))
                                            <img src="uploads/image/{{ $item->image }}" alt="" style="width:75%;">
                                        @endif
                                    </div>
                                    <div class="tweet-footer">
                                        <div class="icons">
                                            <?php
                                            // use App\Models\Comment;
                                            $answerModel = new Comment();
                                            $answerCount = $answerModel->answerCount($item->id);
                                            ?>
                                            <a href="/{{ $item->slug }}"><i
                                                    class="fas fa-comments"></i>{{ $answerCount }}</a>
                                            @if (isset(Auth::User()->id))
                                                @if (Auth::User()->id == $item->user_id)
                                                    <a href="/delete-user-question/{{ $item->user_question_id }}"
                                                        onclick="return confirm('Are you sure, you want to delete this question?')"
                                                        class="float-right"><i class="fas fa-trash-alt"></i></a>
                                                    <a href="/edit-user-question/{{ $item->user_question_id }}"
                                                        class="float-right"><i class="fas fa-edit"></i></a>
                                                @endif
                                            @endif
                                            {{-- <i class="fas fa-retweet"></i>
                                <i class="fas fa-heart"></i> --}}
                                            @if (Auth::check())
                                                &nbsp;&nbsp;&nbsp;<a class="ftry"
                                                    href="https://www.facebook.com/sharer/sharer.php?u=https://parentteacherhub.com/{{ $item->slug }}&display=popup"
                                                    target="blank"><i class="fab fa-facebook-f "></i></a>
                                                &nbsp;<a class="ftry"
                                                    href="https://api.whatsapp.com/send?text=https://parentteacherhub.com/{{ urlencode($item->slug) }}"
                                                    target="blank"><i class="fab fa-whatsapp"></i></a>
                                            @else
                                                &nbsp;&nbsp;&nbsp;<a class="ftry" href="/redirect-login"><i
                                                        class="fab fa-facebook-f "></i></a>
                                                &nbsp;<a class="ftry" href="/redirect-login"><i
                                                        class="fab fa-whatsapp"></i></a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="float-right">
                                {{ $data->links() }}
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <div id="mymodel" class="model">
                <div class="model-content">
                    <div class="modal-header" style="float:center; background-color: rgb(57, 160, 219);">
                        <br>
                        <h3>Post Your Question</h3>
                        <span class="close" data-close="model">&times;</span>
                    </div>
                    <div class="modal-body">
                        <form action="/upload-question" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Category</label>
                                        <?php
                                        use App\Models\QuestionCategory;
                                        $categoryModel = new QuestionCategory();
                                        $categories = $categoryModel->categoryList();
                                        ?>
                                        <select name="category" class="form-control" id="exampleFormControlSelect1"
                                            required>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category['url'] }}">{{ $category['name'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Question</label>
                                        <textarea name="question" class="form-control"
                                            id="exampleFormControlTextarea1" rows="3" required></textarea>
                                    </div>

                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Image</label>
                                        <input type="file" name="image" class="form-control-file"
                                            id="exampleFormControlFile1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Question Description</label>
                                        <textarea name="description" class="form-control"
                                            id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div style="text-align: center;"> <button type="submit"
                                            class="tp-btn-register">Add</button>
                                    </div>
                                </div>
                        </form>

                    </div>
                </div>
                <div class="modal-footer" style="background-color: rgb(57, 160, 219);">

                </div>
            </div>
        </div>
        <!-- login show after clicking on ask a question -->
        <div id="myModal31" class="modal">

            <!-- Modal content -->
            <div class="modal-content">


                <header class="modal-header">
                    <div class="modal-header-title" style="padding:20px !important;">
                        <p class="modal-header-title" style="padding:20px !important;">
                            Login
                        </p>
                        <p>
                            <!-- This application requires separate login from QuickMints-->
                        </p>
                        <p style="color:red">
                            <!--After login you can post your Kids Talents-->
                        </p>
                    </div>
                    <span class="close31">&times</span>
                    <!--<button class="close12" class="modal-header-icon">-->
                    <!--    <span class="icon">-->
                    <!--        <i class="bx bx-x"></i>-->
                    <!--    </span>-->
                    <!--</button>-->
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
                            <input type="text" name="email" class="form-control hei" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email">
                            <br>
                            <input type="password" name="password" class="form-control hei" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter password">

                        </div>
                        <div class="form-group clearfix"><label class="radio-item form-check-label float-left"><a
                                    href="/forgot-password" class="float-right forgot-txt">Forgot
                                    Password?</a></label></div>
                        <br>

                        <div style="text-align: center;">
                            <button style="border: none;background: transparent;"><a
                                    class="btn btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb "
                                    style="width: 115px;">Login</a></button>
                        </div>
                        <div id="open-modal32" class="d-flex justify-content-center modal-bottom-links"> Do not have an
                            account
                            <a href="javascript:void(0);" class="ml-2">Register</a>
                        </div>
                    </form>

                </div>



            </div>
        </div>

        <div id="myModal32" class="modal">
            <div id="modal-content32" class="modal-content modd animation-1">
                <header class="modal-header">
                    <div class="modal-header-title" style="padding:20px !important;">
                        <p class="modal-header-title" style="padding:20px !important;">
                            Register
                        </p>
                        <p>
                            <!--This application requires separate register from QuickMints-->
                        </p>
                    </div>
                    <button id="close32" class="modal-header-icon">
                        <span class="icon">
                            <i class='bx bx-x'></i>
                        </span>
                    </button>
                </header>

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
                                <input type="text" name="firstname" class="form-control hei" id="fname17"
                                    aria-describedby="emailHelp" placeholder="Enter firstname" required="">
                                <span id="fnameM17" style="color:red"></span>
                                <br>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="lastname" class="form-control hei" id="lname17"
                                    aria-describedby="emailHelp" placeholder="Enter lastname" required="">
                                <span id="lnameM17" style="color:red"></span>
                                <br>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control hei" id="email17"
                                    aria-describedby="emailHelp" placeholder="Enter email" required="">
                                <span id="emailM17" style="color:red"></span>
                                <br>
                            </div>
                            <div class="col-md-6">
                                <input type="password" name="password" class="form-control hei" id="pwd17"
                                    aria-describedby="emailHelp" placeholder="Enter password">
                                <span id="pwdM17" style="color:red"></span>
                                <br>
                            </div>
                            <div class="col-md-6">
                                <input type="password" name="confirm-password" class="form-control hei" id="cpwd17"
                                    aria-describedby="emailHelp" placeholder="Enter confirm password">
                                <span id="cpwdM17" style="color:red"></span>
                                <br>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="title" class="form-control hei" id="title"
                                    aria-describedby="emailHelp" placeholder="Title: Parent, Teacher, Educator etc."
                                    required>
                                <br>
                            </div>
                        </div>
                        <div class="form-group clearfix"><label
                                class="radio-item form-check-label float-left"></label><a href="/forgot-password"
                                class="float-right forgot-txt">Forgot
                                Password?</a></div>
                        <div style="text-align: center;">
                            <button style="border: none;background: transparent;"><a
                                    class="btn btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb "
                                    style="width: 115px;">Register</a></button>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center modal-bottom-links">
                            By joining, you agree to the <a href="/trems-conditions" class="ml-2">Terms and
                                Conditions</a> &nbsp;and <a href="/privacy-policy" class="ml-2"> Privacy
                                Policy</a>
                        </div>


                    </form>
                </div>
            </div>
        </div>

        @include('layout.footer')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        {{-- start form validation --}}
        <script>
            function validateForm() {
                //collect form data in JavaScript variables  
                var pwd = document.getElementById("pwd17").value;
                var cpwd = document.getElementById("cpwd17").value;
                var email = document.getElementById("email17").value;
                var fname = document.getElementById("fname17").value;
                var lname = document.getElementById("lname17").value;

                //check empty first name field  
                if (fname == "") {
                    document.getElementById("fnameM17").innerHTML = "**Fill the first name";
                    return false;
                }

                //character data validation  
                if (!isNaN(fname)) {
                    document.getElementById("fnameM17").innerHTML = "**Only characters are allowed";
                    return false;
                }

                //character data validation  
                if (!isNaN(lname)) {
                    document.getElementById("lnameM17").innerHTML = "**Only characters are allowed";
                    return false;
                }

                //check empty email field  
                if (email == "") {
                    document.getElementById("emailM17").innerHTML = "**Fill the email";
                    return false;
                }

                //check empty password field  
                if (pwd == "") {
                    document.getElementById("pwdM17").innerHTML = "**Fill the password please!";
                    return false;
                }

                //check empty confirm password field  
                if (cpwd == "") {
                    document.getElementById("cpwdM17").innerHTML = "**Enter the password please!";
                    return false;
                }

                if (pwd != cpwd) {
                    document.getElementById("cpwdM17").innerHTML = "**Passwords are not same";
                    return false;
                }
            }
        </script>
        {{-- end form validation --}}

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
        <script>
            // Get the modal
            var modal31 = document.getElementById("myModal31");

            // Get the button that opens the modal
            var btn31 = document.getElementById("modalBtn31");

            // Get the <span> element that closes the modal
            var close31 = document.getElementsByClassName("close31")[0];

            // When the user clicks on the button, open the modal
            btn31.onclick = function() {
                modal31.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            close31.onclick = function() {
                modal31.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal31.style.display = "none";
                }
            }
        </script>
        <script>
            var modal32 = document.getElementById("myModal32");
            var btn32 = document.getElementById("open-modal32");
            var span32 = document.getElementById("close32");
            btn32.onclick = function() {
                modal32.style.display = "block";
            }
            span32.onclick = function() {
                modal32.style.display = "none";
            }
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal32.style.display = "none";
                }
            }
        </script>

</html>
