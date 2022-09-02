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
    <title>Admin Permission</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
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
    {{-- botstrap --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<?php use App\Models\addslot; ?>
<body class="animsition">
    <div class="page-wrapper">
       @include('layouts.header')

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <a href="/user-group"><button class="btn btn-dark float-right">Back</button></a>
                                <!-- DATA TABLE-->
                                 <!-- <div style="float: right; padding-bottom: 20px;">
                                    <a href="/export-user"><button class="btn btn-primary">Export File</button></a>
                                    </div> -->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Title of Slot</th>
                                                <th>Help</th>
                                                <th>Number</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Location</th>
                                                <th>URL</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                      @foreach($addDates as $items)
                                      <?php $explode = explode(',', $items['addslot_id']); ?>
                                        @foreach($explode as $addslot_id)
                                        <?php $addslot = addslot::where('id', $addslot_id)->first(); ?>
                                            <tr>
                                                <td>{{$addslot->tslot}}</td>
                                                <td>{{$addslot->help}}</td>
                                                <td>{{$addslot->number}}</td>
                                                <td>{{$items->date}}</td>
                                                <td>{{$items->time1}} - {{$items->time2}}</td>
                                                <td>{{$items->location}}</td>
                                                <td>{{$items->url}}</td>
                                            </tr>
                                             @endforeach
                                      @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="float-right">
                                   {{$addDates->links()}}
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        @include('layouts.footer')
