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
    <link rel="stylesheet" href="{{asset('_next/static/css/bootstrap.min.css')}}">
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
  
    {{-- header --}}
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
    /*margin: 70px 0 0 0;*/
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
.delete {
    position: absolute;
    top: 3px;
    left: 18px;
}
.delete i{color: #fff;
    background: #0d2c6a;
    height: 35px;
    width: 35px;
    /* float: right; */
    border-radius: 50%;
    padding-left: 11px;
    padding-top: 10px;
}
.edit {
    position: absolute;
    top: 3px;
    left: 60px;
}
.edit i{color: #fff;
    background: #0d2c6a;
    height: 35px;
    width: 35px;
     /*float: right; */
    border-radius: 50%;
    padding-left: 11px;
    padding-top: 10px;
}
.modal-content span{font-size:30px !important;}
</style>

<body>
    <div id="__next">
        <div class="">
            @include('layout.header')
            <div class="SearchTitle container">
                <!--<h1 class="SearchTitle-module_title" style="opacity:1;transform:none; color: #0ca3fe;">Upload Your Kids-->
                <!--    Art &amp; Craft Talents</h1>-->
            </div>
            <div style="opacity:1">
                  <div class="SearchTitle-module_root_3mwIP typography-small container">
                                <div class="SearchBar-module_container_1AXk_ search-module_search_2NhRQ">
                                    <div class="SearchBar-module_search-bar-container_qVYML">
                                        <div class="SearchBar-module_search-bar_32NYp">
                                            <div class="SearchBar-module_search-form_3O6b_ form">
                                                
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-12 col-sm-12">
                                                        <div class="SearchBar-module_search-box_tsBww">
                                                        <form action="/search-subject" method="post"
                                                            title="Search 30,000+ educational resources" role="search">@csrf
                                                            <div>
                                                                <div role="combobox" aria-haspopup="listbox"
                                                                    aria-owns="react-autowhatever-1" aria-expanded="false"
                                                                    class="react-autosuggest__container">
                                                                    <input type="text" name="search" autocomplete="off"
                                                                        aria-autocomplete="list"
                                                                        aria-controls="react-autowhatever-1"
                                                                        class="SearchBar-module_search-input_GtOux"
                                                                        placeholder="Search Talent, Worksheets, Crafts, etc"
                                                                        title="Search worksheets" name="q" value="">
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
                                                <!-- <div class="col-md-3 col-lg-2 col-sm-12" style="text-align: center;">
                                                    <button style="border: none;background: transparent;">
                                                        @if (Auth::check())
                                                            <a href="#" data-id="model" data-target="#mymodel" class="btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb">Add Talent</a></button>
                                                        @else
                                                            <a href="#" id="modalBtn14" class="btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb">Add Talent</a></button>
                                                        @endif
                                                </div> -->
                                                      
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <div class="container-fluid">
                    <div id="unified-search-results">
                        <div class="search-module_searchResults_1cQN6">
                          
                            @if(Session::has('success') || Session::has('error'))
                                <div class="search-module_tabs_B0z_I" role="navigation">
                                    <div class="HorizontalTabs-module_TabsHorizontal_3pM5Z">
                                        @if(Session::has('success'))
                                        <div class="alert alert-success" role="alert" style="color: black;font-size: 16;">
                                            {{Session::get('success')}}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @endif
                                        @if(Session::has('error'))
                                        <div class="alert alert-danger" role="alert" style="color: black;font-size: 16;">
                                            {{Session::get('error')}}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            @endif
                            {{-- start upload form --}}
                            <div id="mymodel" class="model">
                                <div class="model-content">
                                    <div class="modal-header"
                                        style="float:center; background-color: rgb(57, 160, 219);">
                                        {{-- model header --}}
                                        <h3>Upload Talent</h3>
                                        <span class="close" data-close="model">&times;</span>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/upload-subject" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Name</label>
                                                        <input type="text" name="name" class="form-control"
                                                            id="exampleInputPassword1" placeholder="name" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1">Category</label>
                                                        <?php 
                                                            use App\Models\Category;
                                                            $categoryModel = new Category;
                                                            $categories = $categoryModel->categoryList();
                                                        ?>
                                                        <select name="category" class="form-control"
                                                            id="exampleFormControlSelect1" required>
                                                            @foreach ($categories as $category)
                                                            <option value="{{ $category['url'] }}">
                                                                {{ $category['name'] }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlFile1">Image</label>
                                                        <input type="file" name="image" class="form-control-file"
                                                            id="exampleFormControlFile1">
                                                        <span style="color:red;">Png or Jpg files.</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Grade</label>
                                                        <input name="grade" class="form-control" id="exampleFormControlTextarea1" required>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio" name="upload_style" id="public" value="public" checked>
                                                      <label class="form-check-label" for="public">
                                                        Public
                                                      </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio" name="upload_style" id="private" value="private">
                                                      <label class="form-check-label" for="private">
                                                        Private
                                                      </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                   
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Description</label>
                                                        <textarea name="description" class="form-control"
                                                            id="exampleFormControlTextarea1" rows="3" required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlFile1">File</label>
                                                        <input type="file" name="file" class="form-control-file"
                                                            id="exampleFormControlFile1">
                                                        <span style="color:red;">Png, Jpg, PDF or Doc files. You can use same file as image. This will be what user can download.</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">School</label>
                                                        <input name="school" class="form-control" id="exampleFormControlTextarea1" required>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                    <div style="text-align: center;"> <button type="submit"
                                                            class="btn tp-btn-register">Add</button></div>
                                                </div>
                                        </form>

                                    </div>
                                </div>
                                <div class="modal-footer" style="background-color: rgb(57, 160, 219); padding:20px">
                                    {{-- model footer --}}
                                </div>
                            </div>
                        </div>
                        {{-- end upload form --}}
                         
                          
                          
                    
                          
<div id="myModal14" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
  
 
       <header class="modal-header">
           <div class="modal-header-title" style="padding:20px !important;">
               <p class="modal-header-title" style="padding:20px !important;">
                   Log in 
               </p>
               <p>
                   
               </p>
               <p style="color:red">
                   <!-- After login you can post your Kids Talents-->
               </p>
           </div>
            <span class="close14">&times</span>
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
                   <input type="text" name="email" class="form-control hei" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                   <br>
                   <input type="password" name="password" class="form-control hei" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter password">
 
               </div>
               <div class="form-group clearfix"><label class="radio-item form-check-label float-left"><a href="/forgot-password" class="float-right forgot-txt">Forgot
                       Password?</a></label></div>
               <br>
             
               <div style="text-align: center;">
                   <button style="border: none;background: transparent;"><a class="btn btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb " style="width: 115px;">Login</a></button>
               </div>
             <div id="open-modal16" class="d-flex justify-content-center modal-bottom-links"> Do not have an account
               <a href="javascript:void(0);" class="ml-2">Register</a></div>
           </form>
           
       </div>
 
 
  
  </div>
</div>
                          
                <div id="myModal16" class="modal">
<div id="modal-content16" class="modal-content modd animation-1">
<header class="modal-header">
<div class="modal-header-title" style="padding:20px !important;">
<p class="modal-header-title" style="padding:20px !important;">
Register in to The Parent Teacher Hub
</p>
<p>

</p>
</div>
<button id="close16" class="modal-header-icon">
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
<input type="hidden" name="_token" value="8VwEOryikROkfWFrrlh1B6Ne3stdlqQiLKxM3VbO"> <div class="form-group row">
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
<button style="border: none;background: transparent;"><a class="btn btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb " style="width: 115px;">Register</a></button>
</div>
               <br>
             	<div class="d-flex justify-content-center modal-bottom-links">
                  By joining, you agree to the <a href="/trems-conditions" class="ml-2">Terms and Conditions</a> &nbsp; and <a href="/privacy-policy" class="ml-2"> Privacy Policy</a>
             	</div>


</form>
</div>
</div>
</div>                   
                       
                          
                          
                        <div class="SearchFilters-module_overlay_1PBZq"></div>
                        <div class="SearchFilters-module_container_2SNWX">
                            <div class="FacetsMobileBtn-module_container__uS19"><button
                                    class="btn btn-tertiary btn-normal Button-module_btn_1JCnt Button-module_tertiary_EUghB FacetsMobileBtn-module_button_3xHjO"></button></div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-lg-2 col-sm-12"></div>
                            <div class="col-md-10 col-lg-10 col-sm-12">
                                <h2>{{$categoryName}}</h2>
                                <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-lg-2 col-sm-12">
                                @include('user.category')
                            </div>
                            <div class="col-md-8 col-lg-10 col-sm-12">
                                <div class="team row">
                                    @foreach($data as $item)
                                          
                                        <div class="col-md-6 col-lg-3 col-sm-6 ">
                                             
                                            <div>
                                                <a href="/{{$item->slug}}">
                                                <div class="grid gapp">
                                                    <figure class="effect-steve">
                                                        <img src="{{asset('uploads/image')}}/{{$item->image}}" />
                                                        <figcaption>
                                                            <h2><span>{{$item->name}}</span></h2>
                                                            <p>{{$item->description}}<br>
                                                                @if ($item->grade)
                                                                    Grade - {{$item->grade}}<br>
                                                                @endif
                                                                @if ($item->school)
                                                                    School - {{$item->school}}<br>
                                                                @endif
                                                            </p>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </a>
                                            </div>
                                            @if (isset(Auth::User()->id))
                                                @if (Auth::User()->id == $item->user_id)
                                                    <a href="/delete-user-subject/{{$item->user_subject_id}}" onclick="return confirm('Are you sure, you want to delete this content?')"><div class="delete"> <i class="fas fa-trash-alt"></i></div></a>
                                                    <a href="/edit-user-subject/{{$item->user_subject_id}}"><div class="edit"><i class="fas fa-edit"></i></div></a>
                                                @endif
                                            @endif
                                        </div>
                                    @endforeach
                                </div>

                                <style>
                                .effect-steve img {
                                    width: 100%;
                                    border-radius: 8px;
                                }

                                .grid {
                                    display: block;
                                    margin: 0 auto;
                                    /* width: 95%; */
                                    padding-left: 0;
                                    font-size: 0;
                                    text-align: center;
                                }

                                .gapp {
                                    margin-bottom: 30px;
                                    /* height:100%; */
                                    /* padding: 0px; */
                                }

                                .grid figure {
                                    margin: 0.1em;
                                    /* width: 340px; */
                                    /* height: 240px; */
                                    /* background: #3085a3; */
                                    display: inline-block;
                                    position: relative;
                                    overflow: hidden;
                                    text-align: center;
                                    width:100%;
                                }

                                /* Common style */
                                .grid figure img {
                                    position: relative;
                                    display: block;
                                    opacity: 0.8;

                                    /* height: 240px; */
                                    @media(max-width: 1260px) {
                                        height: 270px;
                                    }
                                }

                                .grid figure figcaption {
                                    color: #fff;
                                    font-size: 1.25em;
                                    -webkit-backface-visibility: hidden;
                                    backface-visibility: hidden;
                                }

                                .grid figcaption h2 {
                                    text-transform: uppercase;
                                    word-spacing: -0.15em;
                                    font-weight: 300;
                                    margin: 1em;
                                }

                                .grid figure figcaption::before,
                                .grid figure figcaption::after {
                                    pointer-events: none;
                                }

                                .grid figure figcaption,
                                .grid figure figcaption>a {
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    width: 100%;
                                    height: 100%;
                                }

                                .grid figure figcaption>a {
                                    z-index: 1000;
                                    text-indent: 200%;
                                    white-space: nowrap;
                                    font-size: 0;
                                    opacity: 0;
                                }

                                .grid figure h2 {
                                    word-spacing: -0.15em;
                                    font-weight: 300;
                                    margin: 1em;
                                }

                                .grid figure h2 span {
                                    font-weight: 800;
                                }

                                figure.effect-steve {
                                    z-index: auto;
                                    /* background: #000; */
                                }

                                figure.effect-steve:before {
                                    box-shadow: 0 3px 30px rgba(0, 0, 0, 0.8);
                                    opacity: 0;
                                }

                                figure.effect-steve figcaption {
                                    z-index: 1;
                                }

                                figure.effect-steve img {
                                    opacity: 1;
                                    -webkit-transition: -webkit-transform 0.35s;
                                    transition: transform 0.35s;
                                    -webkit-transform: perspective(1000px) translate3d(0, 0, 0);
                                    transform: perspective(1000px) translate3d(0, 0, 0);
                                }

                                figure.effect-steve h2,
                                figure.effect-steve p {
                                    background: #f1f1f1;
                                    color: #2d434e;
                                }

                                figure.effect-steve h2 {
                                    position: absolute;
                                    padding: 0.25em;
                                    bottom: 10px;
                                    width: 100%;
                                }

                                figure.effect-steve p {
                                    margin-top: 1em;
                                    padding: 0.5em;
                                    font-weight: 800;
                                    opacity: 0;
                                    -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
                                    transition: opacity 0.35s, transform 0.35s;
                                }

                                figure.effect-steve:hover:before {
                                    opacity: 1;
                                }

                                figure.effect-steve:hover img {
                                    -webkit-transform: perspective(1000px) translate3d(0, 0, 21px);
                                    transform: perspective(1000px) translate3d(0, 0, 21px);
                                }

                                figure.effect-steve:hover h2:before {
                                    opacity: 0;
                                }

                                figure.effect-steve:hover p {
                                    opacity: 1;
                                }

                                .grid figure,
                                figcaption,
                                img {
                                    z-index: 0;
                                }

                                .grid figure figcaption h2 {
                                    font-size: 24px;
                                    margin-bottom: 0;
                                    margin-left: 0;
                                    margin-right: 0;
                                }

                                .grid figcaption p {
                                    font-size: 16px;
                                    font-weight: 200;
                                    position: absolute;
                                    bottom: 0;
                                    margin: 0;
                                    height: auto;
                                    width: 100%;
                                }

                                figure:hover h2 {
                                    background: #f1f1f1;
                                    transition: transform 0.35s;
                                    transform: translateY(-2.5em);
                                }

                                h1.slogan {
                                    text-align: center;
                                    background-color: #2d434e;
                                    font-weight: 100;
                                    margin: 0;
                                    padding: 20px;
                                }
                                </style>
                                <div class="search-module_clear_1b8vy"></div>

                <div style="display: flex; justify-content: center;">
                    {{ $data->links() }}
                </div>
                            </div>
                        </div>

                    </div>

                    
                </div>
            </div>
        </div>

    </div>
    </div>
    @include('layout.footer')
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
// Get the modal
var modal14 = document.getElementById("myModal14");

// Get the button that opens the modal
var btn14 = document.getElementById("modalBtn14");

// Get the <span> element that closes the modal
var close14 = document.getElementsByClassName("close14")[0];

// When the user clicks on the button, open the modal
btn14.onclick = function() {
  modal14.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
close14.onclick = function() {
  modal14.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal14.style.display = "none";
  }
}
</script>
<script>
 var modal16 = document.getElementById("myModal16");
 var btn16 = document.getElementById("open-modal16");
 var span16 = document.getElementById("close16");
 btn16.onclick = function() {
   modal16.style.display = "block";
 }
 span16.onclick = function() {
   modal16.style.display = "none";
 }
 window.onclick = function(event) {
   if (event.target == modal) {
       modal16.style.display = "none";
   }
 }
 </script>

</html>