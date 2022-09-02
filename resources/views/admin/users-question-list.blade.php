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
    <title>Question List</title>

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
                   
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                              
                            <div class="table-responsive m-b-40">
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
                                <table class="table table-borderless table-data3">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>User ID</th>
                                            <th>User Email</th>
                                            <th>Category</th>
                                            <th>Question</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Slug</th>
                                            <th>Upload Style</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $item)
                                        <tr>
                                            <td>{{$item['id']}}</td>
                                            <td>{{$item['user_id']}}</td>
                                            <td>{{$item['user_email']}}</td>
                                            <td class="process">{{$item['category']}}</td>
                                            <td>{{$item['question']}}</td>
                                            <td>{{$item['description']}}</td>
                                            <td> <img src="{{asset('uploads/image')}}/{{$item['image']}}" alt=""> </td>
                                            <td>{{$item['slug']}}</td>
                                            <td>{{$item['upload_style']}}</td>
                                            <td>
                                                <a href="/accept-question/{{$item['id']}}"><i class="fas fa-plus"></i></a>&nbsp;&nbsp;
                                                <a href="/deny-question/{{$item['id']}}" onclick="return confirm('Are you sure, you want to reject this content?')"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        <!-- END DATA TABLE-->
                        <div class="float-right">
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>
                @include('layouts.footer')
