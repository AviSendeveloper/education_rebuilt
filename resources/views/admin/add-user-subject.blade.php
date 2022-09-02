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
    <title>Add User Subject</title>

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
                                        <form action="/accept-subject" method="post"  class="form-horizontal">
                                            @csrf
                                            <input type="hidden" name="user_subject_id" value="{{ $details['id'] }}">
                                            <div class="row form-group">
                                                
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Subject Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" value="{{ $details['name'] }}" name="name" placeholder="name" class="form-control">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" value="{{ $details['description'] }}" name="description" placeholder="description" class="form-control">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Category</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="email-input" value="{{ $details['category'] }}" name="category" placeholder="slug" class="form-control">
                                                    <!-- <small class="help-block form-text">Please enter your email</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Url</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="email-input" value="{{ $details['slug'] }}" name="slug" placeholder="slug" class="form-control" required>
                                                    <!-- <small class="help-block form-text">Please enter your email</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Upload Style</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio" name="upload_style" id="public" value="public" {{ $details['upload_style'] == 'public' ? 'checked':''}}>
                                                      <label class="form-check-label" for="public">
                                                        Public
                                                      </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio" name="upload_style" id="private" value="private" {{ $details['upload_style'] == 'private' ? 'checked':''}}>
                                                      <label class="form-check-label" for="private">
                                                        Private
                                                      </label>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                       <a href="/add-subject"><button class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Cancle
                                        </button></a> 
                                    </div>
                                    </form>
                                </div>
                               
                            </div>
                           
                        </div>
                      
@include('layouts.footer')
