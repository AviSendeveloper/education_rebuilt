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
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    {{-- botstrap --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
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
                                <a href="/group-details-export"><button class="btn btn-warning float-right">Export Excel</button></a>
                                <!-- DATA TABLE-->
                                 <!-- <div style="float: right; padding-bottom: 20px;">
                                    <a href="/export-user"><button class="btn btn-primary">Export File</button></a>
                                    </div> -->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Title of Sign Up</th>
                                                <th>Event Name</th>
                                                <th>Organizer Name</th>
                                                <th>Organizer Phone</th>
                                                <th>Time</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                      @foreach($data as $item)
                                            <tr>
                                                <td>{{$item->title}}</td>
                                                <td>{{$item->group}}</td>
                                                <td>{{$item->category}}</td>
                                                <td>{{$item->cause}}</td>
                                                <td>{{$item->created_at}}</td>
                                                @if(isset($item->image))
                                                <td><a href="/download/file/{{$item->image}}"><i class="fas fa-download"></i></a></td>
                                                @else
                                                <td></td>
                                                @endif
                                                <td><a tittle="Show All Slot" href="/slot-detail/{{$item->id}}"><i class="fas fa-plus"></i></a></td>
                                            </tr>
                                      @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="float-right">
                                   {{$data->links()}}
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        @include('layouts.footer')
