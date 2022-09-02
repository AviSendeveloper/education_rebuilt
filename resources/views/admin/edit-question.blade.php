<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Forms</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('css/theme.css')}}" rel="stylesheet" media="all">
    <style>
        :root {
        /* --background-gradient: linear-gradient(30deg, #f39c12 30%, #f1c40f); */
        --gray: #34495e;
        --darkgray: #2c3e50;
        }   

        select {
        /* Reset Select */
        appearance: none;
        outline: 0;
        border: 0;
        box-shadow: none;
        /* Personalize */
        flex: 1;
        padding: 0 1em;
        color: #fff;
        background-color: var(--darkgray);
        background-image: none;
        cursor: pointer;
        }
        /* Remove IE arrow */
        select::-ms-expand {
        display: none;
        }
        /* Custom Select wrapper */
        .select {
        position: relative;
        display: flex;
        width: 20em;
        height: 3em;
        border-radius: .25em;
        overflow: hidden;
        }
        /* Arrow */
        .select::after {
        content: '\25BC';
        position: absolute;
        top: 0;
        right: 0;
        padding: 1em;
        background-color: #34495e;
        transition: .25s all ease;
        pointer-events: none;
        }
        /* Transition */
        .select:hover::after {
        color: #f39c12;
        }
    </style>
</head>

<body class="animsition">
    <div class="page-wrapper">
    @include('layouts.header')

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                             
                            </div>
                            <div class="col-lg-6">
                               
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Basic Form</strong> Elements
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="/edit-question" method="post"  class="form-horizontal">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $data['id'] }}">
                                            <div class="row form-group">
                                                
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Category</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <?php 
                                                        use App\Models\QuestionCategory;
                                                        $categoryModel = new QuestionCategory;
                                                        $categories = $categoryModel->categoryList();
                                                    ?>
                                                    <select name="category" class="form-control" id="exampleFormControlSelect1">
                                                        @foreach ($categories as $category)
                                                        <option value="{{ $category['url'] }}" {{ $category['url'] == $data['category'] ? 'selected':'' }}>{{ $category['name'] }}</option>
                                                        @endforeach
                                                    </select>
                                                    {{-- <input type="text" id="text-input" value="{{ $data['category'] }}" name="category" placeholder="Text" class="form-control"> --}}
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Question</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea type="text" id="email-input" name="question" placeholder="Enter Email" class="form-control">{{ $data['question'] }}</textarea>
                                                    <!-- <small class="help-block form-text">Please enter your email</small> -->
                                                </div>
                                            </div>
                                            @if (isset($data['answer']))
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="email-input" class=" form-control-label">Answer</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <textarea type="text" id="email-input" name="answer" placeholder="Enter Email" class="form-control">{{ $data['answer'] }}</textarea>
                                                        <!-- <small class="help-block form-text">Please enter your email</small> -->
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="disabled-input" class=" form-control-label">Slug</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="disabled-input" value="{{ $data['slug'] }}" name="slug"  class="form-control">
                                                </div>
                                            </div>
                                            
                                            
                                        
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                    </form>
                                       <a href="/add-subject"><button class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Cancle
                                        </button></a> 
                                    </div>
                                </div>
                               
                            </div>
                           
                        </div>
                      
@include('layouts.footer')
