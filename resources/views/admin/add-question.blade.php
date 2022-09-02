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
    <title>Add Question</title>

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
    <style>
        .search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 3px solid #fff;
  border-right: none;
  padding: 5px;
  height: 35px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
  width: 40px;
  height: 36px;
  border: 1px solid #1a8cff;
  background: #1a8cff;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 30%;
  position: absolute;
  top: 4%;
  left: 25%;
  transform: translate(-50%, -50%);
}
    </style>
</head>

<body class="animsition">
    <div class="page-wrapper">
       @include('layouts.header')

            <!-- MAIN CONTENT-->
            <div class="main-content">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/question-form-submit" method="post" enctype="multipart/form-data">
                            @csrf
                            <h4>Category</h4><br>
                            <div class="form-group">
                                <div class="select">
                                    <select name="category">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category['url'] }}">{{ $category['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                        <div class="form-group">
                            <label for="recipient-name" class="form-label">Question:</label>
                            <textarea name="question" id="" cols="30" rows="5" style="border: 1px solid orange;" required=""></textarea>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="form-label">Description:</label>
                            <textarea name="description" id="" cols="30" rows="5" style="border: 1px solid orange;" required=""></textarea>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Slug:</label>
                            <input type="text" class="form-control" name="slug" id="recipient-name" required="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Image:</label>
                            <input type="file" class="form-control" name="image" id="recipient-name">
                        </div>
                     
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                    </form>
                    </div>
                </div>
                </div>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                   
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- search start -->
                                <form method="post" action="/search-admin-question">
                                    @csrf
                                    <div class="wrap">
                                       <div class="search">
                                          <input type="text" name="search" class="searchTerm" placeholder="What are you looking for?" required>
                                          <button type="submit" class="searchButton">
                                            <i class="fa fa-search"></i>
                                         </button>
                                       </div>
                                    </div>
                                </form>
                                <!-- search end -->
                            <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" style="margin-bottom: 20px;">Add Question</button>
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
                                @if ($errors->any())
                                  <div class="alert alert-danger">
                                     <ul>
                                        @foreach ($errors->all() as $error)
                                           <li>{{ $error }}</li>
                                        @endforeach
                                     </ul>
                                    
                                  </div>
                                @endif
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Category</th>
                                                <th>Question</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Slug</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $item)
                                            <tr>
                                                <td>{{$item['id']}}</td>
                                                <td class="process">{{$item['category']}}</td>
                                                <td>{{$item['question']}}</td>
                                                <td>{{$item['description']}}</td>
                                                <td> <img src="{{asset('uploads/image')}}/{{$item['image']}}" alt=""> </td>
                                                <td>{{$item['slug']}}</td>
                                                <td>
                                                    <a href="/delete-question/{{$item['id']}}" onclick="return confirm('Are you sure, you want to delete this content?')"><i class="fas fa-trash"></i></a>&nbsp;&nbsp;
                                                    <a href="/edit-question/{{$item['id']}}"><i class="fas fa-edit"></i></a>
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
