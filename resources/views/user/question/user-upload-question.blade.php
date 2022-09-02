<?php use App\Models\Comment; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charSet="utf-8" />
    <title>Home</title>

    <meta name="page_type" content="page" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="preload" href="{{asset('_next/static/css/de79cee5857d13c6dd3a.css')}}" as="style" />
    <link rel="stylesheet" href="{{asset('_next/static/css/de79cee5857d13c6dd3a.css')}}" />
    <link rel="preload" href="{{asset('_next/static/css/948bd495162824a1e75b0f407256f639d3726e33_CSS.de79cee5.chunk.css')}}"
        as="style" />
    <link rel="stylesheet" href="{{asset('_next/static/css/948bd495162824a1e75b0f407256f639d3726e33_CSS.de79cee5.chunk.css')}}" />
    <link rel="preload" href="{{asset('_next/static/css/42ed995f3f9c450642ce.css')}}" as="style" />
    <link rel="stylesheet" href="{{asset('_next/static/css/42ed995f3f9c450642ce.css')}}" />
    <link rel="preload" href="{{asset('_next/static/css/styles.42ed995f.chunk.css')}}" as="style" />
    <link rel="stylesheet" href="{{asset('_next/static/css/styles.42ed995f.chunk.css')}}" />
    <link rel="preload" href="{{asset('_next/static/css/44495ce05e15228a2271.css')}}" as="style" />
    <link rel="stylesheet" href="{{asset('_next/static/css/44495ce05e15228a2271.css')}}" />
    <link rel="stylesheet" href="{{asset('_next/static/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')}}"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css')}}" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

    <link rel="stylesheet" href="{{asset('assets1/css/quick.css')}}">
    <link rel="stylesheet" href="{{asset('assets1/css/quick2.css')}}">
    <link rel="stylesheet" href="{{asset('assets1/css/lightbox.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets1/css/style-ext.css')}}">
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
            @include('layout.header')


<section>
    <div class="container">
         <div class="SearchTitle-module_root_3mwIP typography-small">
                                <div class="SearchBar-module_container_1AXk_ search-module_search_2NhRQ">
                                    <div class="SearchBar-module_search-bar-container_qVYML">
                                        <div class="SearchBar-module_search-bar_32NYp">
                                            <div class="SearchBar-module_search-form_3O6b_ form">
                                                <div class="SearchBar-module_search-box_tsBww">
                                                  <form action="/search-question" method="post" title="Search 30,000+ educational resources" role="search">
                                                      @csrf                                                            <div>
                                                     <div role="combobox" aria-haspopup="listbox" aria-owns="react-autowhatever-1" aria-expanded="false" class="react-autosuggest__container">
                                                                    <input type="text" name="search" autocomplete="off" aria-autocomplete="list" aria-controls="react-autowhatever-1" class="SearchBar-module_search-input_GtOux" placeholder="Search Questions by Keywords" title="Search worksheets" value="">
                                                                    <div id="react-autowhatever-1" role="listbox" class="react-autosuggest__suggestions-container">
                                                                    </div>
                                                                </div>
                                                            </div><button class=" btn-tertiary btn-normal Button-module_btn_1JCnt Button-module_tertiary_EUghB Button-module_shadowless_3Yoni SearchBar-module_search-button_wRuXp SearchBar-module_btn_1Fgsj" title="Search" type="submit"><img src="../_next/static/img/search.png" alt="" style="width: 17px;"></button>
                                                        </form>
                                                    </div>
                                               
                                                 </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
        <div class="row">
             <div class="col-md-3 col-lg-3 col-sm-12">
                @if (Auth::check())
                   
                    <div class="tweet-question">
                        <button type="button" class="btn bttunh"><div class="tweet-question-heading tp-btn-register">
                            <h4 data-id="model" data-target="#mymodel">Ask a Question</h4>
                        </div></button>
                        @include('user.question.category')
                    </div>
                @else
                    <div class="tweet-question">
                        <button type="button" class="btn bttunh"><div class="tweet-question-heading tp-btn-register">
                            <h4 id="open-modal2">Ask a Question</h4>
                        </div></button>
                        @include('user.question.category')
                    </div>
                @endif
            </div>
            <div class="col-md-9 col-lg-9 col-sm-12">
                <h2 class="screen-reader-text">{{$categoryName}}</h2>
                @foreach ($data as $item)
                    <div class="tweet">
                        <div class="tweet-head">
                            <div class="tweet-image">
                                @if (isset($item->dp))
                                    <img src="uploads/profile/{{$item->dp}}" alt="avatar" />
                                @else
                                    <img src="{{asset('assets/uploads/avatar.png')}}" alt="avatar" />
                                @endif
                            </div>
                            <div class="tweet-author">
                                <div class="name">{{$item->firstname}} {{$item->lastname}}</div>
                                <div class="handle">{{$item->title}}</div>
                            </div>
                        </div>

                        <div class="tweet-body">
                            <a href="#"><h4>{{$item->question}}</h4></a>
                            <p id="tweet-text">{{$item->description}}</p>
                            @if (isset($item->image))
                                <img src="uploads/image/{{$item->image}}" alt="" style="width:75%;">
                            @endif
                        </div>
                        <div class="tweet-footer">
                            <div class="icons">
                                {{-- <button class="btn" id="green"><i class="fa fa-thumbs-up fa-lg"
                                        aria-hidden="true"></i></button>
                                <button class="btn" id="red"><i class="fa fa-thumbs-down fa-lg"
                                        aria-hidden="true"></i></button> --}}
                                <?php
                                    // use App\Models\Comment;
                                    $answerModel = new Comment;
                                    $answerCount = $answerModel->answerCount($item->id);
                                ?>
                                <a href="#"><i class="fas fa-comments"></i>{{$answerCount}}</a>
                                @if (isset(Auth::User()->id))
                                  @if (Auth::User()->id == $item->user_id)
                                      <a href="/delete-user-question/{{$item->id}}" onclick="return confirm('Are you sure, you want to delete this question?')" class="float-right"><i class="fas fa-trash-alt"></i></a>
                                  @endif
                                @endif
                                {{-- <i class="fas fa-retweet"></i>
                                <i class="fas fa-heart"></i> --}}
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
                                $categoryModel = new QuestionCategory;
                                $categories = $categoryModel->categoryList();
                            ?>
                            <select name="category" class="form-control" id="exampleFormControlSelect1" required>
                            @foreach ($categories as $category)
                                <option value="{{ $category['url'] }}">{{ $category['name'] }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Question</label>
                            <textarea name="question" class="form-control" id="exampleFormControlTextarea1"
                                rows="3" required></textarea>
                        </div>

                        
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Image</label>
                            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Question Description</label>
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1"
                                rows="3"></textarea>
                        </div>
                        
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div style="text-align: center;"> <button type="submit" class="btn btn-warning">Add</button>
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
<div id="myModal2" class="modal">
    <div id="modal-content" class="modal-content animation-1">
    <header class="modal-header">
      <p class="modal-header-title" style="padding:20px !important;">
          Log In
      </p>
      <button id="close2" class="modal-header-icon">
          <span class="icon">
              <i class='bx bx-x'></i>
          </span>
      </button>
    </header>
    <!-- Modal body -->
    <div class="modal-body">
      <p style="text-align:center">Please login to Ask a Question</p>
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
              <br>
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
          <!--<div id="open-modal5" class="d-flex justify-content-center modal-bottom-links"> Don't have an account?-->
          <!--    <a href="javascript:void(0);" class="ml-2">Register</a>-->
          <!--</div>-->
      </form>
    
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