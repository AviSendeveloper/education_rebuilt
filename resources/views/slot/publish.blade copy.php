<!DOCTYPE html>

<html lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Slots</title>

    <script type="text/javascript"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="slot/dist/css/SUGstyleV3-responsive.minf4a1.css?v=1636996767345">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script type="text/javascript" src="slot/dist/js/lib/jquery-1.11.1.minf4a1.js?v=1636996767345"></script>
</head>
<style>
.datainputs {
    margin-top: 39px;
    padding-left: 14px;
}

.datainputs input {
    font-size: 18px;
    line-height: 21px;
    color: #3D3D3D;
    height: 40px;
    padding: 0px 20px;
    border-radius: 5px;
    border: 1px solid #ddd;
    box-shadow: 0px 0px 1px #D8D8D8;
    margin: 0px 10px 20px 0px !important;
}

.inputRemove {
    color: #fff !important;
    background: #056b99;
}

.add_input {
    color: #fff !important;
    background: #056b99;
    border: none !important;
}

input:focus {
    outline: none;
}

.add_input,
.inputRemove {
    display: inline-block;
    color: #3d3d3d;
    text-align: center;
    text-decoration: none;
    width: auto;
    height: 40px;
    line-height: 40px;
    border: 2px solid #3d3d3d;
    padding: 0px 15px;
    border-radius: 5px;
}

.inputRemove {
    cursor: pointer;
}

.tabset>input[type="radio"] {
    position: absolute;
    left: -200vw;
}

.tabset .tab-panel {
    display: none;
}

.tabset>input:first-child:checked~.tab-panels>.tab-panel:first-child,
.tabset>input:nth-child(3):checked~.tab-panels>.tab-panel:nth-child(2),
.tabset>input:nth-child(5):checked~.tab-panels>.tab-panel:nth-child(3),
.tabset>input:nth-child(7):checked~.tab-panels>.tab-panel:nth-child(4),
.tabset>input:nth-child(9):checked~.tab-panels>.tab-panel:nth-child(5),
.tabset>input:nth-child(11):checked~.tab-panels>.tab-panel:nth-child(6) {
    display: block;
}


.tabset>label {
    position: relative;
    display: inline-block;
    padding: 15px 15px 25px;
    border: 1px solid transparent;
    border-bottom: 0;
    cursor: pointer;
    font-weight: 600;
}

.tabset>label::after {
    content: "";
    position: absolute;
    left: 15px;
    bottom: 10px;
    width: 22px;
    height: 4px;
    background: #8d8d8d;
}

.tabset>label:hover,
.tabset>input:focus+label {
    color: #06c;
}

.tabset>label:hover::after,
.tabset>input:focus+label::after,
.tabset>input:checked+label::after {
    background: #06c;
}

.tabset>input:checked+label {
    border-color: #ccc;
    border-bottom: 1px solid #fff;
    margin-bottom: -1px;
}

.tab-panel {
    padding: 30px 0;
    border-top: 1px solid #ccc;
}


.tabset {
    max-width: 65em;
}
</style>

<body>

    @include('slot/layout.header')

    <style>
    ul.tabs {
        margin: 0px;
        padding: 0px;
        list-style: none;
    }

    ul.tabs li {
        background: none;
        color: #222;
        display: inline-block;
        padding: 10px 15px;
        cursor: pointer;
    }

    ul.tabs li.current {
        background: #ededed;
        color: #222;
    }

    ul.tabs {
        margin: 0px;
        padding: 0px;
        list-style: none;
    }

    ul.tabs li {
        background: none;
        color: #222;
        display: inline-block;
        padding: 10px 15px;
        cursor: pointer;
    }



    .tabbb {
        display: none;
        /* background: #ededed; */
        padding: 35px 15px;
    }

    .tab-content.current {
        display: block;
    }

    .tab-content.current {
        display: block;
    }
    </style>

    <div class="mainbody">


        <div id="myModal7" class="modal">


            <div id="modal-content1" class="modal-content animation-1">

                <header class="modal-header">
                    <p class="modal-header-title">

                    </p>
                    <button id="close7" class="modal-header-icon">
                        <span class="icon">
                            <i class="bx bx-x"></i>
                        </span>
                    </button>
                </header>

                <div class="modal-body">


                    <div class="tabset">
                        <!-- Tab 1 -->
                        <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
                        <label for="tab1">Details</label>
                        <!-- Tab 2 -->
                        <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
                        <label for="tab2">Help Comment</label>
                        <!-- Tab 3 -->


                        <div class="tab-panels">

                            <section id="marzen" class="tab-panel">
                                <div class="row">
                                    <form action="/submit-design" method="post">
                                        @csrf
                                        <input type="hidden" name="detail_id" value="{{$detail['id']}}">

                                        <div class="col-md-3">
                                            <label for="exampleInputEmail1">Title of slot</label>
                                            <input type="text" class="form-control" name="tslot" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="exampleInputEmail1">Location</label>
                                            <input type="text" class="form-control" name="location"
                                                id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="exampleInputEmail1">Help Comment</label>
                                            <input type="text" class="form-control" name="help" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" value="">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="exampleFormControlSelect1">Number Wanted</label>
                                            <input type="number" class="form-control" name="number" value="1">
                                        </div>
                                        <br><br>
                                        <div id="req_input" class="datainputs">
                                            <input type="datetime-local" id="birthdaytime" name="time1[]" value=""
                                                multiple>
                                            <input type="datetime-local" id="birthdaytime1" name="time2[]" value=""
                                                multiple>
                                        </div>

                                        <a href="#" id="addmore" class="add_input">Add more</a>
                                        <button type="submit" class="add_input">Success</button>
                                    </form>
                                </div>
                            </section>


                            <section id="rauchbier" class="tab-panel">
                                <div class="row">
                                    <form action="/submit-design" method="post">
                                        @csrf
                                        <input type="hidden" name="help_id" value="{{$detail['id']}}">
                                        <div class="col-md-3">
                                            <label for="exampleInputEmail1">List of slot</label>
                                            <input type="text" class="form-control" name="lslot" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="exampleInputEmail1">Location</label>
                                            <input type="text" class="form-control" name="location"
                                                id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="exampleInputEmail1">Help Comment</label>
                                            <input type="text" class="form-control" name="help" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" value="">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="exampleFormControlSelect1">Number Wanted</label>
                                            <input type="number" class="form-control" name="number" value="1">
                                        </div>

                                        <br><br>
                                        <div id="req_input1" class="datainputs">
                                            <input type="datetime-local" id="birthdaytime2" name="time1[]">
                                            <input type="datetime-local" id="birthdaytime3" name="time2[]">
                                        </div>

                                        <a href="#" id="addmore1" class="add_input">Add more</a>
                                        <button type="submit" class="add_input">Success</button>
                                    </form>
                                </div>
                            </section>



                        </div>

                    </div>


                </div>
            </div>

        </div>
        <div id="myModal8" class="modal">


            <div id="modal-content1" class="modal-content animation-1">

                <header class="modal-header">
                    <p class="modal-header-title">

                    </p>
                    <button id="close8" class="modal-header-icon">
                        <span class="icon">
                            <i class="bx bx-x"></i>
                        </span>
                    </button>
                </header>

                <div class="modal-body">


                    <ul class="tabs">
                        <li class="tab-link current" data-tab="tab-1">Details</li>
                        <li class="tab-link" data-tab="tab-2">Help Comment</li>

                    </ul>

                    <div id="tab-1" class="tab-content tabbb current">
                        <form action="/submit-design" method="post">
                            @csrf <input type="hidden" name="detail_id" value="{{$detail['id']}}">

                            <div class="col-md-3">
                                <label for="exampleInputEmail1">Title of slot</label>
                                <input type="text" class="form-control" name="tslot" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="col-md-3">
                                <label for="exampleInputEmail1">Location</label>
                                <input type="text" class="form-control" name="location" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="col-md-3">
                                <label for="exampleInputEmail1">Help Comment</label>
                                <input type="text" class="form-control" name="help" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="">
                            </div>
                            <div class="col-md-3">
                                <label for="exampleFormControlSelect1">Number Wanted</label>
                                <input type="number" class="form-control" name="number" value="1">
                            </div>
                            <br><br>
                            <div id="req_input2" class="datainputs">
                                <input type="datetime-local" id="birthdaytime" name="time1[]" value="" multiple="">
                                <input type="datetime-local" id="birthdaytime1" name="time2[]" value="" multiple="">
                            </div>

                            <a href="#" id="addmore2" class="add_input">Add more</a>
                            <button type="submit" class="add_input">Success</button>
                        </form>
                    </div>
                    <div id="tab-2" class="tab-content tabbb">
                        <form action="/submit-design" method="post">
                            @csrf
                            <input type="hidden" name="help_id" value="{{$detail['id']}}">
                            <div class="col-md-3">
                                <label for="exampleInputEmail1">List of slot</label>
                                <input type="text" class="form-control" name="lslot" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="col-md-3">
                                <label for="exampleInputEmail1">Location</label>
                                <input type="text" class="form-control" name="location" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="col-md-3">
                                <label for="exampleInputEmail1">Help Comment</label>
                                <input type="text" class="form-control" name="help" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="">
                            </div>
                            <div class="col-md-3">
                                <label for="exampleFormControlSelect1">Number Wanted</label>
                                <input type="number" class="form-control" name="number" value="1">
                            </div>

                            <br><br>
                            <div id="req_input3" class="datainputs">
                                <input type="datetime-local" id="birthdaytime2" name="time1[]">
                                <input type="datetime-local" id="birthdaytime3" name="time2[]">
                            </div>

                            <a href="#" id="addmore3" class="add_input">Add more</a>
                            <button type="submit" class="add_input">Success</button>
                        </form>
                    </div>

                </div>
            </div>

        </div>
        <div id="myModal9" class="modal">


            <div id="modal-content1" class="modal-content animation-1">

                <header class="modal-header">
                    <p class="modal-header-title">
                        Slots Only
                    </p>
                    <button id="close9" class="modal-header-icon">
                        <span class="icon">
                            <i class="bx bx-x"></i>
                        </span>
                    </button>
                </header>
                <style>
                .rty a {
                    color: #000;
                }

                .rty li.active a {
                    border-bottom: 3px solid #056b99;

                    padding: 10px 14px;
                    background: none !important;
                }
                </style>
                <div class="modal-body">



                    <div id="exTab1" class="tabs">
                        <ul class="tabs rty">
                            <li class="active">
                                <a href="#1a" data-toggle="tab">Details</a>
                            </li>
                            <li><a href="#2a" data-toggle="tab">Help Comment</a>
                            </li>

                        </ul>

                        <div class="tab-content clearfix" style="padding: 35px 15px;">
                            <div class="tab-pane active" id="1a">
                                <form action="/submit-design" method="post">
                                    @csrf <input type="hidden" name="single_id" value="{{$detail['id']}}">

                                    <div class="col-md-3">
                                        <label for="exampleInputEmail1">Title of slot</label>
                                        <input type="text" class="form-control" name="tslot" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="exampleInputEmail1">Location</label>
                                        <input type="text" class="form-control" name="location" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="exampleInputEmail1">Help Comment</label>
                                        <input type="text" class="form-control" name="help" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="exampleFormControlSelect1">Number Wanted</label>
                                        <input type="number" class="form-control" name="number" value="1">
                                    </div>
                                    <br><br>
                                    <div id="req_input4" class="datainputs">

                                    </div>
                                    <div class="col-md-3">
                                        <button type="submit" class="add_input">Success</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="2a">
                                <form action="/submit-design" method="post">
                                    @csrf <input type="hidden" name="single_id" value="{{$detail['id']}}">
                                    <div class="col-md-3">
                                        <label for="exampleInputEmail1">List of slot</label>
                                        <input type="text" class="form-control" name="lslot" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="exampleInputEmail1">Location</label>
                                        <input type="text" class="form-control" name="location" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="exampleInputEmail1">Help Comment</label>
                                        <input type="text" class="form-control" name="help" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="exampleFormControlSelect1">Number Wanted</label>
                                        <input type="number" class="form-control" name="number" value="1">
                                    </div>

                                    <br><br>
                                    <div id="req_input4" class="datainputs">

                                    </div>


                                    <button type="submit" class="add_input">Success</button>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- <div id="myModal10" class="modal">


            <div id="modal-content1" class="modal-content animation-1">

                <header class="modal-header">
                    <p class="modal-header-title">
                    Single Date RSVP
                    </p>
                    <button id="close10" class="modal-header-icon">
                        <span class="icon">
                            <i class="bx bx-x"></i>
                        </span>
                    </button>
                </header>

                <div class="modal-body">


                    <ul class="tabs">
                        <li class="tab-link current" data-tab="tab-5">Details</li>
                        <li class="tab-link" data-tab="tab-6">Help Comment</li>

                    </ul>

                    <div id="tab-5" class="tab-content tabbb current">
                        <form action="/submit-design" method="post">
                            @csrf <input
                                type="hidden" name="detail_id" value="{{$detail['id']}}">

                            <div class="col-md-3">
                                <label for="exampleInputEmail1">Title of slot</label>
                                <input type="text" class="form-control" name="tslot" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="col-md-3">
                                <label for="exampleInputEmail1">Location</label>
                                <input type="text" class="form-control" name="location" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="col-md-3">
                                <label for="exampleInputEmail1">Help Comment</label>
                                <input type="text" class="form-control" name="help" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="">
                            </div>
                            <div class="col-md-3">
                                <label for="exampleFormControlSelect1">Number Wanted</label>
                                <input type="number" class="form-control" name="number" value="1">
                            </div>
                            <br><br>
                            <div id="req_input5" class="datainputs">
                                 <label for="exampleFormControlSelect1">Event Date</label>
                                <input type="datetime-local" id="birthdaytime" name="time1[]" value="" multiple="">
                                <input type="datetime-local" id="birthdaytime1" name="time2[]" value="" multiple="">
                            </div>

                            <a href="#" id="addmore5" class="add_input">Add more</a>
                            <button type="submit" class="add_input">Success</button>
                        </form>
                    </div>
                    <div id="tab-6" class="tab-content tabbb">
                        <form action="/submit-design" method="post">
                            @csrf <input
                                type="hidden" name="help_id" value="{{$detail['id']}}">
                            <div class="col-md-3">
                                <label for="exampleInputEmail1">List of slot</label>
                                <input type="text" class="form-control" name="lslot" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="col-md-3">
                                <label for="exampleInputEmail1">Location</label>
                                <input type="text" class="form-control" name="location" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="col-md-3">
                                <label for="exampleInputEmail1">Help Comment</label>
                                <input type="text" class="form-control" name="help" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="">
                            </div>
                            <div class="col-md-3">
                                <label for="exampleFormControlSelect1">Number Wanted</label>
                                <input type="number" class="form-control" name="number" value="1">
                            </div>

                            <br><br>
                            <div id="req_input6" class="datainputs">
                                 <label for="exampleFormControlSelect1">Event Date</label>
                                <input type="datetime-local" id="birthdaytime2" name="time1[]">
                                <input type="datetime-local" id="birthdaytime3" name="time2[]">
                            </div>

                            <a href="#" id="addmore6" class="add_input">Add more</a>
                            <button type="submit" class="add_input">Success</button>
                        </form>
                    </div>

                </div>
            </div>

        </div> -->
        <div id="myModal10" class="modal">


            <div id="modal-content1" class="modal-content animation-1">

                <header class="modal-header">
                    <p class="modal-header-title">
                        Single Date RSVP
                    </p>
                    <button id="close10" class="modal-header-icon">
                        <span class="icon">
                            <i class="bx bx-x"></i>
                        </span>
                    </button>
                </header>

                <div class="modal-body">
                    <div id="exTab2">
                        <ul class="tabs rty">
                            <li class="active">
                                <a href="#1" data-toggle="tab">Details</a>
                            </li>
                            <li><a href="#2" data-toggle="tab">Help Comment</a>
                            </li>

                        </ul>

                        <div class="tab-content " style="padding: 35px 15px;">
                            <div class="tab-pane active" id="1">
                                <form action="/submit-design" method="post">
                                    @csrf <input type="hidden" name="detail_id" value="{{$detail['id']}}">

                                    <div class="col-md-3">
                                        <label for="exampleInputEmail1">Title of slot</label>
                                        <input type="text" class="form-control" name="tslot" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="exampleInputEmail1">Location</label>
                                        <input type="text" class="form-control" name="location" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="exampleInputEmail1">Help Comment</label>
                                        <input type="text" class="form-control" name="help" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="exampleFormControlSelect1">Number Wanted</label>
                                        <input type="number" class="form-control" name="number" value="1">
                                    </div>
                                    <br><br>
                                    <div id="req_input5" class="datainputs">
                                        <label for="exampleFormControlSelect1">Event Date</label>
                                        <input type="datetime-local" id="birthdaytime" name="time1[]" value=""
                                            multiple="">
                                        <input type="datetime-local" id="birthdaytime1" name="time2[]" value=""
                                            multiple="">
                                    </div>

                                    <a href="#" id="addmore5" class="add_input">Add more</a>
                                    <button type="submit" class="add_input">Success</button>
                                </form>
                            </div>
                            <div class="tab-pane" id="2">
                                <form action="/submit-design" method="post">
                                    @csrf <input type="hidden" name="help_id" value="{{$detail['id']}}">
                                    <div class="col-md-3">
                                        <label for="exampleInputEmail1">List of slot</label>
                                        <input type="text" class="form-control" name="lslot" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="exampleInputEmail1">Location</label>
                                        <input type="text" class="form-control" name="location" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="exampleInputEmail1">Help Comment</label>
                                        <input type="text" class="form-control" name="help" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="exampleFormControlSelect1">Number Wanted</label>
                                        <input type="number" class="form-control" name="number" value="1">
                                    </div>

                                    <br><br>
                                    <div id="req_input6" class="datainputs">
                                        <label for="exampleFormControlSelect1">Event Date</label>
                                        <input type="datetime-local" id="birthdaytime2" name="time1[]">
                                        <input type="datetime-local" id="birthdaytime3" name="time2[]">
                                    </div>

                                    <a href="#" id="addmore6" class="add_input">Add more</a>
                                    <button type="submit" class="add_input">Success</button>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="spacer-sm"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="btuntr" style="text-align: right;
                     margin-bottom: 10px;">
                    <div class="half">
                        <a href="/design" class="tp-btn-register">Create a Signup</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-2 col-lg-2 col-sm-12">
                <div id="protoolsbar" class="member-blocks--sidebar no-print">
                    <ul class="nav nav-tabs member-sidebar--menu" style="display: inline-grid;">
                        <li id="member-sidebar--menu-signupsid" class="active"><a href="#a" data-toggle="tab">
                                <div class="menu-icon">

                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px"
                                        width="22px" height="36px" viewBox="0 0 32 36.5"
                                        style="enable-background:new 0 0 32.3 38; margin-left:4px;"
                                        xml:space="preserve">
                                        <path class="menu-icon-fill" d="M32.1,17.8L30.3,16c-0.1-0.1-0.2-0.1-0.3-0.1c-0.1,0-0.2,0-0.3,0.1l-4.9,4.9l-1.3,1.3c-0.1,0.1-0.2,0.1-0.3,0.1
    c-0.1,0-0.2,0-0.3-0.1l-2.2-2.2c-0.1-0.1-0.2-0.1-0.3-0.1c-0.1,0-0.2,0-0.3,0.1l-1.8,1.8c-0.1,0.1-0.1,0.2-0.1,0.3
    c0,0.1,0,0.2,0.1,0.3l4.6,4.6c0.1,0.1,0.2,0.1,0.3,0.1c0.1,0,0.2,0,0.3-0.1l8.5-8.5c0.1-0.1,0.1-0.2,0.1-0.3
    C32.3,17.9,32.2,17.8,32.1,17.8z M27.3,26.1V28h-10V18h7.4l2-2H15.3v14h14v-5.9L27.3,26.1z M5.3,16h8v-0.8c0-0.7,0.5-1.2,1.2-1.2
    h12.1V4.7C26.7,4.3,26.4,4,26,4h-3.3v4c0,0.7-0.6,1.3-1.3,1.3h-16C4.6,9.3,4,8.7,4,8V4H0.7C0.3,4,0,4.3,0,4.7v32.7
    C0,37.7,0.3,38,0.7,38H26c0.4,0,0.7-0.3,0.7-0.7V32H14.6c-0.7,0-1.2-0.5-1.2-1.2v-1.4h-8c-0.4,0-0.7-0.3-0.7-0.7v-1.3
    c0-0.4,0.3-0.7,0.7-0.7h8V24h-8c-0.4,0-0.7-0.3-0.7-0.7V22c0-0.4,0.3-0.7,0.7-0.7h8v-2.7h-8c-0.4,0-0.7-0.3-0.7-0.7v-1.3
    C4.7,16.3,5,16,5.3,16z M20,2.7h-2.6V1.4C17.3,0.7,16.7,0,16,0h-5.3C9.9,0,9.3,0.7,9.3,1.4v1.2H6.7C6,2.7,5.3,3.3,5.3,4v2.6
    C5.3,7.4,6,8,6.7,8H20c0.7,0,1.4-0.6,1.4-1.3V4C21.3,3.3,20.7,2.7,20,2.7z"></path>
                                    </svg>
                            </a></li>
                        <li id="member-sidebar--menu-groupsid"><a href="#b" data-toggle="tab">
                                <div class="menu-icon">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px"
                                        width="30px" height="38px" viewBox="0 0 40 28"
                                        style="enable-background:new 0 0 42 31;" xml:space="preserve">
                                        <path class="menu-icon-fill" d="M11.4,12.5c0.5,0,1-0.1,1.5-0.2c0-0.1,0-0.2,0-0.3c0-3.2,1.9-5.9,4.6-7.3C16.7,2,14.3,0,11.4,0
    C7.9,0,5.2,2.8,5.2,6.2S7.9,12.5,11.4,12.5z M9.3,25.2c1.7-3.1,4.1-5.3,7.1-6.5c-0.4-0.3-0.8-0.6-1.2-1c-1-1-1.7-2.3-2.1-3.7c-0.4-0.1-0.9-0.1-1.4-0.1
    c-0.9,0-1.8,0.1-2.2,0.3l-0.1,0c-4.3,1.1-7.2,3.8-9,8.6c-0.5,1.3-0.4,1.8-0.3,2c0.2,0.3,0.9,0.5,2,0.5C4.5,25.2,6.9,25.2,9.3,25.2z M41.9,24.7c0.2-0.4,0.1-1.2-0.4-2.5c-1.7-4.3-4.5-7-8.8-8.1c-0.5-0.1-1.1-0.2-1.8-0.2c-0.7,0-1.5,0.1-2,0.2
    c-0.5,1.9-1.7,3.5-3.3,4.6c3.1,1.3,5.4,3.5,7,6.5c2.4,0,4.7,0,6.9,0C40.9,25.2,41.6,25.1,41.9,24.7z M26.8,6.3c1.5,1.6,2.4,3.6,2.4,5.8c0,0.1,0,0.2,0,0.3c0.5,0.1,0.9,0.2,1.4,0.2c3.4,0,6.2-2.8,6.2-6.2
    S34.1,0,30.6,0c-2.9,0-5.3,2-6,4.7C25.4,5.1,26.2,5.6,26.8,6.3z M21.1,5.8C21.1,5.8,21,5.8,21.1,5.8c-3.5,0-6.3,2.8-6.3,6.2c0,3.4,2.8,6.3,6.2,6.3c0,0,0,0,0,0
    c3.4,0,6.2-2.8,6.2-6.2C27.3,8.6,24.5,5.8,21.1,5.8z M23.1,19.9c-0.5-0.1-1.1-0.2-1.8-0.2c0,0,0,0-0.1,0c-0.9,0-1.7,0.1-2.2,0.3L19,20c-4.3,1-7.2,3.7-9,8.5
    c-0.5,1.3-0.4,1.8-0.3,2c0.2,0.3,0.9,0.5,2,0.5c2.6,0,5.1,0,7.7,0c3.6,0,7.2,0,10.5,0c0,0,0,0,0.1,0c1.3,0,2.1-0.2,2.3-0.5
    c0.2-0.4,0.1-1.2-0.4-2.5C30.2,23.7,27.3,21.1,23.1,19.9z"></path>
                                    </svg>
                                </div>
                            </a></li>

                    </ul>


                </div>
            </div>
            <!-- col-2 end -->
            <div class="col-md-10 col-lg-10 col-sm-12">
                <div class="tabs-left">

                    <div class="tab-content">

                        <div class="tab-pane active" id="a">
                            <div id="memPgCenter" class="member-blocks--maincontent-wide">
                                <div id="wizardView" class="kaluscope">

                                    <div id="signupWizardContainer">



                                        <div class="col-xs-12">
                                            <h1 class="hrow wizard-heading kalubinding">Edit Sign Up
                                                <small class="h2 text-darkgray fade-in kalubinding kaluscope">
                                                    {{$detail['title']}}</small>
                                            </h1>
                                        </div>

                                        <div class="col-xs-12">
                                        <div class="btn-tabs">
                                 <button class="btn btn-tab kalubinding tablinks" onclick="openCity(event, 'Lon')">Design</button>
                                 <button class="btn btn-tab kalubinding tablinks " onclick="openCity(event, 'Lon11')"
                                    >Slots</button>
                                 <button class="btn btn-tab kalubinding  tablinks" onclick="openCity(event, 'Lon23')"
                                    >Settings</button>
                                 <button class="btn btn-tab kalubinding tablinks active" onclick="openCity(event, 'Lon25')"
                                    >Publish</button>
                              </div>
                                        </div>
                                        <div id="myModal2" class="modal">

                                            <!-- Modal content -->
                                            <div id="modal-content2" class="modal-content animation-1">
                                                <!-- Modal header -->
                                                <header class="modal-header">
                                                    <p class="modal-header-title">
                                                        Create New Group
                                                    </p>
                                                    <button id="close2" class="modal-header-icon">
                                                        <span class="icon">
                                                            <i class="bx bx-x"></i>
                                                        </span>
                                                    </button>
                                                </header>
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Group Name</label>
                                                        <form method="post" action="/group-submit">
                                                            @csrf
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="group">
                                                            </div>
                                                            <div class="form-group" style="float: right;">
                                                                <button type="submit" formaction="/group-submit"
                                                                    class="btn btn-primary float-right btn-submit">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                        <form action="/submit-design" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$detail['id']}}">
                                            <div id="Lon" class="tabcontent" style="display: none;">
                                                <div id="wizardStep1" class="l-wizard-step-1 kaluscope">


                                                    <div class="form-horizontal">
                                                        <div class="form-group feedback-group">
                                                            <label for="signuptitle"
                                                                class="col-xs-2 control-label text-left">Title
                                                                of Sign Up</label>
                                                            <div class="col-xs-5">
                                                                <input autocomplete="off" name="title"
                                                                    value="{{$detail['title']}}" type="text"
                                                                    class="form-control " id="signuptitle"
                                                                    maxlength="255" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-horizontal">
                                                        <div class="form-group feedback-group">
                                                            <div class="col-md-2 col-lg-2 col-sm-12">
                                                                <label>Message</label>
                                                            </div>
                                                            <div class="col-md-5 col-lg-5 col-sm-12">
                                                                <textarea class="form-control rounded-0" name="group"
                                                                    id="exampleFormControlTextarea1" rows="3"
                                                                    require> {{$detail['group']}}</textarea>
                                                            </div>


                                                        </div>
                                                    </div>

                                                    <div class="form-group feedback-group">
                                                        <div class="col-md-2 col-lg-2 col-sm-12">
                                                            <label for="exampleFormControlFile1">Images</label>
                                                        </div>
                                                        <div class="col-md-5 col-lg-5 col-sm-12">
                                                            <input type="file" class="form-control-file" name="image"
                                                                id="exampleFormControlFile1">
                                                        </div>
                                                    </div>
                                                    <div class="form-group feedback-group">
                                                        <div class="col-md-2 col-lg-2 col-sm-12">
                                                            <label for="exampleFormControlFile1">Organizer Name</label>
                                                        </div>
                                                        <div class="col-md-5 col-lg-5 col-sm-12">
                                                            <input type="text" name="category" class="form-control"
                                                                placeholder="Name" value="{{$detail['category']}}"
                                                                require>
                                                        </div>
                                                    </div>
                                                    <div class="form-group feedback-group">
                                                        <div class="col-md-2 col-lg-2 col-sm-12">
                                                            <label for="exampleFormControlFile1">Organizer Phone</label>
                                                        </div>
                                                        <div class="col-md-5 col-lg-5 col-sm-12">
                                                            <input type="phone" name="cause" class="form-control"
                                                                value="{{$detail['cause']}}" placeholder="Phone">
                                                        </div>
                                                    </div>



                                                    <div class="spacer"></div>

                                                    <div outside-click="w1.showSlideout=false"
                                                        click-watcher="w1.showSlideout" class="kaluhide">

                                                    </div>


                                                </div>
                                                <div class="spacer"></div>
                                                <div class="col-xs-10">
                                                    <button class="tp-btn-register">Save and
                                                        Continue</button>
                                                </div>
                                                <div class="col-xs-2 text-right">

                                                </div>
                                            </div>
                                        </form>
                                        <div id="Lon11" class="tabcontent" style="display: none;">
                                            <div id="wizardStepContainer" class="col-xs-12">






                                                <div class="kaluscope">
                                                    <style class="kaluscope">
                                                    .table>tbody>tr>td.table-wrapper {
                                                        padding: 0;
                                                        border: 0;
                                                        vertical-align: top;
                                                    }

                                                    .table>tbody>tr>td.table-wrapper>.table {
                                                        margin-bottom: 0;
                                                        background: transparent;
                                                    }

                                                    .cleared {
                                                        border-top: 0px transparent hidden !important;
                                                        border-left: 0px transparent hidden !important;
                                                        border-right: 0px transparent hidden !important;
                                                        background: #fff;
                                                    }

                                                    .table>thead>tr>th.cleared {
                                                        paddikaluright: 0;
                                                    }

                                                    .animate-selection {
                                                        transition: box-shadow 0.2s ease-out;
                                                        border-radius: 4px;
                                                    }

                                                    .empty-header {
                                                        height: 56px;
                                                    }

                                                    .gridHeading {
                                                        margin-bottom: 8px;
                                                        padding: 0;
                                                    }

                                                    .date-notice {
                                                        paddikaluleft: 0 !important;
                                                    }

                                                    /* Checkbox inputs in the tables */
                                                    .checkbox-icon-container {
                                                        height: 22px;
                                                    }

                                                    .checkbox-icon-label {
                                                        paddikaluleft: 24px !important;
                                                        margin: 1px 0 0 14px !important;
                                                    }

                                                    .borderless-b {
                                                        border-bottom: 0 !important;
                                                    }

                                                    .borderless-l {
                                                        border-left: 0 !important;
                                                    }

                                                    .borderless-lr {
                                                        border-left: 0 !important;
                                                        border-right: 0 !important;
                                                    }

                                                    .borderless-r {
                                                        border-right: 0 !important;
                                                    }

                                                    .borderless-tb {
                                                        border-bottom: 0 !important;
                                                        border-top: 0 !important;
                                                    }

                                                    span.format-selector {
                                                        margin-left: -10px;
                                                        white-space: nowrap;
                                                    }

                                                    .pencil-icon {
                                                        paddikaluleft: 0px;
                                                    }

                                                    .format-cancel-btn {
                                                        margin-bottom: 4px;
                                                    }

                                                    .format-help-icon {
                                                        color: #222222;
                                                    }

                                                    .location-input {
                                                        min-width: 400px;
                                                    }

                                                    .pagination-table {
                                                        margin-top: -40px;
                                                        border-bottom: 0 !important;
                                                    }

                                                    .location-icon {
                                                        opacity: 0.50;
                                                    }

                                                    .l-wizard-step-2 .virtual-location-icon {
                                                        opacity: 0.50;
                                                        top: 2px;
                                                    }

                                                    .payment-icon {
                                                        font-size: small;
                                                    }

                                                    td.align-top {
                                                        vertical-align: top !important;
                                                    }

                                                    .action-icon-wrap {
                                                        min-width: 103px;
                                                        vertical-align: top !important;
                                                    }

                                                    .slot-name {
                                                        max-width: 450px;
                                                    }
                                                    </style>
                                                    <div id="wizarStepContainer" class="kaluscope"></div>
                                                    <div class="l-wizard-step-2 kaluscope">

                                                        <div class="kaluscope">
                                                            <h2 class="kalubinding">Select the format for your sign up
                                                            </h2>

                                                            <form method="post" action="/submit-slot">
                                                                @csrf
                                                                <input type="hidden" name="submit_id"
                                                                    value="@if(Session::has('signup_id')){{Session::get('signup_id')}} @endif">
                                                                <div class="row">
                                                                    <div class="col-xs-3">
                                                                        <div syle="margin-bottom: 5px;">
                                                                            <input class="tab-a active-a" data-id="tab1"
                                                                                type="radio" id="css"
                                                                                name="fav_language" required=""
                                                                                value="sort_by_date">
                                                                            <label for="css"><strong
                                                                                    class="kalubinding">Sort by
                                                                                    Date</strong></label>

                                                                        </div>
                                                                        <p class="smalltext text-muted kalubinding">
                                                                            For sign ups having one or more slots per
                                                                            date/time
                                                                            <br>
                                                                        </p>
                                                                    </div>

                                                                    <div class="col-xs-3">


                                                                        <div syle="margin-bottom: 5px;">
                                                                            <input class="tab-a" data-id="tab2"
                                                                                type="radio" id="css"
                                                                                name="fav_language" required=""
                                                                                value="sort_by_slot">
                                                                            <label for="css"><strong
                                                                                    class="kalubinding">Sort by
                                                                                    Slot</strong></label>

                                                                        </div>
                                                                        <p class="smalltext text-muted kalubinding">
                                                                            For sign ups where people scan the slots
                                                                            before the
                                                                            date/time

                                                                        </p>
                                                                    </div>

                                                                    <div class="col-xs-3">
                                                                        <div syle="margin-bottom: 5px;">
                                                                            <input class="tab-a" data-id="tab3"
                                                                                type="radio" id="css"
                                                                                name="fav_language" required=""
                                                                                value="slots_only">
                                                                            <label for="css"><strong
                                                                                    class="kalubinding">Slots
                                                                                    Only</strong></label>

                                                                        </div>
                                                                        <p class="smalltext text-muted kalubinding">
                                                                            For sign ups without a specific date or time
                                                                            involved

                                                                        </p>
                                                                    </div>

                                                                    <div class="col-xs-3">
                                                                        <div syle="margin-bottom: 5px;">
                                                                            <input class="tab-a" data-id="tab4"
                                                                                type="radio" id="css"
                                                                                name="fav_language" required=""
                                                                                value="single_date">
                                                                            <label for="css"><strong
                                                                                    class="kalubinding">Single
                                                                                    Date
                                                                                    RSVP</strong></label>

                                                                        </div>
                                                                        <p class="smalltext text-muted kalubinding">
                                                                            For a one date event where you want to see
                                                                            who can
                                                                            attend

                                                                        </p>
                                                                    </div>
                                                                </div>

                                                                <div class="kaluscope tab tab-active" data-id="tab1">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">

                                                                            <div id="myModal" class="modal">


                                                                                <div id="modal-content"
                                                                                    class="modal-content animation-1">

                                                                                    <header class="modal-header">
                                                                                        <p class="modal-header-title">
                                                                                            Create New Group
                                                                                        </p>
                                                                                        <button id="close"
                                                                                            class="modal-header-icon">
                                                                                            <span class="icon">
                                                                                                <i class="bx bx-x"></i>
                                                                                            </span>
                                                                                        </button>
                                                                                    </header>


                                                                                </div>
                                                                            </div>

                                                                            <table
                                                                                class="table table-bordered sTable kalustyle:w2.style.themed.table;"
                                                                                style="background-color: rgb(225 73 15); border-width: 2px; border-color: rgb(255, 255, 255);">
                                                                                <thead>

                                                                                    <tr class="cleared">
                                                                                        <th class="cleared">
                                                                                            <span class="pull-right">

                                                                                            </span>
                                                                                        </th>

                                                                                        <th class="cleared">
                                                                                            <span class="pull-right">
                                                                                                <div id="open-modal7"
                                                                                                    class=" Click-here">
                                                                                                    <span
                                                                                                        class="tp-btn-register glyphicon-plus">
                                                                                                        Add Dates</span>

                                                                                                </div>
                                                                                            </span>
                                                                                        </th>
                                                                                    </tr>


                                                                                    <tr>
                                                                                        <th nowrap="" class=""
                                                                                            style="background-color: rgb(30, 28, 27); color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-top-width: 2px; border-top-style: solid; font-weight: bold; vertical-align: bottom;">
                                                                                            Dates/Times</th>
                                                                                        <th nowrap="" class=""
                                                                                            style="background-color: rgb(30, 28, 27); color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-top-width: 2px; border-top-style: solid; font-weight: bold; vertical-align: bottom;">
                                                                                            Available Slot</th>

                                                                                    </tr>
                                                                                </thead>
                                                                                @if(isset($show))
                                                                                <tbody class="black-shadow-active">
                                                                                    @foreach($show as $slot)
                                                                                    <tr class="kaluscope">
                                                                                        <td class="table-wrapper">
                                                                                            <table class="table">
                                                                                                <tbody>
                                                                                                    <?php $time= explode(',',  $slot['time']); ?>

                                                                                                    @foreach($time as
                                                                                                    $time1)
                                                                                                    <?php $timeArr = explode('|', $time1); ?>
                                                                                                    <tr>
                                                                                                        <td class="tcell tfirst "
                                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                                            {{date('d-m-y 
                                                                                                       D,H:i:s', strtotime($timeArr[0]))}}
                                                                                                        </td>
                                                                                                        <td class="tcell tfirst "
                                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                                            {{date('d-m-y 
                                                                                                       D,H:i:s', strtotime($timeArr[0]))}}
                                                                                                        </td>
                                                                                                        <td class="tcell tfirst "
                                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                                            {{date('d-m-y 
                                                                                                       D,H:i:s', strtotime($timeArr[0]))}}
                                                                                                        </td>


                                                                                                    </tr>

                                                                                                    @endforeach
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                        @if($slot['tslot']==null)
                                                                                        <td class="col-xs-4"
                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                            {{$slot['lslot']}}
                                                                                            &nbsp;&nbsp;(Location:-{{$slot['location']}})
                                                                                        </td>
                                                                                        @else
                                                                                        <td class="col-xs-4"
                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                            {{$slot['tslot']}}
                                                                                            (Location:-{{$slot['location']}})
                                                                                        </td>
                                                                                        @endif

                                                                                    </tr>
                                                                                    @endforeach
                                                                                </tbody>
                                                                                @else
                                                                                <tbody class="black-shadow-active">


                                                                                    <tr>
                                                                                        <td class="table-wrapper">
                                                                                            <table class="table">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td
                                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                                        </td>
                                                                                                        <td class="col-xs-5 "
                                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                                        </td>
                                                                                                        <td class="col-xs-5 "
                                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                                        </td>
                                                                                                    </tr>


                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>



                                                                                </tbody>


                                                                                @endif
                                                                            </table>
                                                                            <br>
                                                                            <p>
                                                                                NOTE: Dates are in mm/dd/yyyy.<br> Times
                                                                                are shown in
                                                                                '{{Session::get('timezone')}}' .<br> To
                                                                                modify, update
                                                                                your</p>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="kaluscope tab" data-id="tab2">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">

                                                                            <div id="myModal" class="modal">


                                                                                <div id="modal-content"
                                                                                    class="modal-content animation-1">

                                                                                    <header class="modal-header">
                                                                                        <p class="modal-header-title">
                                                                                            Create New Group
                                                                                        </p>
                                                                                        <button id="close"
                                                                                            class="modal-header-icon">
                                                                                            <span class="icon">
                                                                                                <i class="bx bx-x"></i>
                                                                                            </span>
                                                                                        </button>
                                                                                    </header>


                                                                                </div>
                                                                            </div>

                                                                            <table
                                                                                class="table table-bordered sTable kalustyle:w2.style.themed.table;"
                                                                                style="background-color: rgb(225 73 15); border-width: 2px; border-color: rgb(255, 255, 255);">
                                                                                <thead>

                                                                                    <tr class="cleared">
                                                                                        <th class="cleared">
                                                                                            <span class="pull-right">

                                                                                            </span>
                                                                                        </th>

                                                                                        <th class="cleared">
                                                                                            <span class="pull-right">
                                                                                                <div id="open-modal8"
                                                                                                    class="btn  Click-here">
                                                                                                    <span
                                                                                                        class="tp-btn-register glyphicon-plus">
                                                                                                        Add Dates</span>

                                                                                                </div>
                                                                                            </span>
                                                                                        </th>
                                                                                    </tr>


                                                                                    <tr>
                                                                                        <th nowrap="" class=""
                                                                                            style="background-color: rgb(30, 28, 27); color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-top-width: 2px; border-top-style: solid; font-weight: bold; vertical-align: bottom;">
                                                                                            Available Slot</th>


                                                                                        <th nowrap="" class=""
                                                                                            style="background-color: rgb(30, 28, 27); color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-top-width: 2px; border-top-style: solid; font-weight: bold; vertical-align: bottom;">
                                                                                            Dates/Times</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                @if(isset($show))
                                                                                <tbody class="black-shadow-active">
                                                                                    @foreach($show as $slot)
                                                                                    <tr class="kaluscope">

                                                                                        @if($slot['tslot']==null)
                                                                                        <td class="col-xs-4"
                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                            {{$slot['lslot']}}
                                                                                            &nbsp;&nbsp;(Location:-{{$slot['location']}})
                                                                                        </td>
                                                                                        @else
                                                                                        <td class="col-xs-4"
                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                            {{$slot['tslot']}}
                                                                                            &nbsp;&nbsp;(Location:-{{$slot['location']}})
                                                                                        </td>
                                                                                        @endif
                                                                                        <td class="table-wrapper">
                                                                                            <table class="table">
                                                                                                <tbody>
                                                                                                    <?php $time= explode(',',  $slot['time']); ?>

                                                                                                    @foreach($time as
                                                                                                    $time1)
                                                                                                    <?php $timeArr = explode('|', $time1); ?>
                                                                                                    <tr>
                                                                                                        <td class="tcell tfirst "
                                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                                            {{date('d-m-y 
                                                                                                       D,H:i:s', strtotime($timeArr[0]))}}
                                                                                                        </td>
                                                                                                        <td class="col-xs-5"
                                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                                            {{date('d-m-y 
                                                                                               D,H:i:s', strtotime($timeArr[1]))}}
                                                                                                        </td>
                                                                                                    </tr>

                                                                                                    @endforeach
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                    @endforeach
                                                                                </tbody>
                                                                                @else
                                                                                <tbody class="black-shadow-active">

                                                                                    <tr class="kaluscope">
                                                                                        <td class="col-xs-4 "
                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                        </td>
                                                                                        <td class="table-wrapper">
                                                                                            <table class="table">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td class="tcell "
                                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                                        </td>
                                                                                                        <td class="col-xs-5"
                                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td
                                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                                        </td>
                                                                                                        <td class="col-xs-5 "
                                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                                        </td>
                                                                                                    </tr>

                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>


                                                                                </tbody>


                                                                                @endif
                                                                            </table>
                                                                            <br>
                                                                            <p>
                                                                                NOTE: Dates are in mm/dd/yyyy.<br> Times
                                                                                are shown in
                                                                                '{{Session::get('timezone')}}'.<br> To
                                                                                modify, update
                                                                                your</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="kaluscope tab" data-id="tab3">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">

                                                                            <div id="myModal" class="modal">


                                                                                <div id="modal-content"
                                                                                    class="modal-content animation-1">

                                                                                    <header class="modal-header">
                                                                                        <p class="modal-header-title">
                                                                                            Create New Group
                                                                                        </p>
                                                                                        <button id="close"
                                                                                            class="modal-header-icon">
                                                                                            <span class="icon">
                                                                                                <i class="bx bx-x"></i>
                                                                                            </span>
                                                                                        </button>
                                                                                    </header>


                                                                                </div>
                                                                            </div>
                                                                            <div class="werfg">
                                                                                <span class="pull-right">
                                                                                    <div id="open-modal9"
                                                                                        class="btn Click-here">
                                                                                        <span
                                                                                            class="tp-btn-register glyphicon-plus">
                                                                                            Add Slots</span>

                                                                                    </div>
                                                                                </span>

                                                                            </div>
                                                                            <table
                                                                                class="table table-bordered sTable kalustyle:w2.style.themed.table;"
                                                                                style="background-color: rgb(225 73 15); border-width: 2px; border-color: rgb(255, 255, 255);">
                                                                                <thead>

                                                                                    <!-- <tr class="cleared">
                                                                                        <th class="cleared">
                                                                                            <span class="pull-right">

                                                                                            </span>
                                                                                        </th>

                                                                                        <th class="cleared">
                                                                                            <span class="pull-right">
                                                                                                <div id="open-modal9"
                                                                                                    class="btn btn-orange Click-here">
                                                                                                    <span
                                                                                                        class="tp-btn-register glyphicon-plus">
                                                                                                        Add Dates</span>

                                                                                                </div>
                                                                                            </span>
                                                                                        </th>
                                                                                    </tr> -->


                                                                                    <tr>
                                                                                        <th nowrap="" class=""
                                                                                            style="background-color: rgb(30, 28, 27); color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-top-width: 2px; border-top-style: solid; font-weight: bold; vertical-align: bottom;">
                                                                                            Available Slot</th>



                                                                                    </tr>
                                                                                </thead>
                                                                                @if(isset($show))
                                                                                <tbody class="black-shadow-active">

                                                                                    @foreach($show as $slot) <tr
                                                                                        class="kaluscope">

                                                                                        @if($slot['tslot']==null)
                                                                                        <td
                                                                                            style="width: 100%; background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                            {{$slot['lslot']}}
                                                                                            &nbsp;&nbsp;(Location:-{{$slot['location']}})
                                                                                        </td>
                                                                                        @else
                                                                                        <td
                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                            {{$slot['tslot']}}
                                                                                            &nbsp;&nbsp;(Location:-{{$slot['location']}})
                                                                                        </td>
                                                                                        @endif

                                                                                    </tr>

                                                                                    @endforeach </tbody>
                                                                                @else
                                                                                <tbody class="black-shadow-active">

                                                                                    <tr class="kaluscope">
                                                                                        <td
                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                        </td>

                                                                                    </tr>


                                                                                </tbody>


                                                                                @endif
                                                                            </table>
                                                                            <br>
                                                                            <p>
                                                                                NOTE: Dates are in mm/dd/yyyy.<br> Times
                                                                                are shown in
                                                                                '{{Session::get('timezone')}}'.<br> To
                                                                                modify, update
                                                                                your</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="kaluscope tab" data-id="tab4">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">

                                                                            <div id="myModal" class="modal">


                                                                                <div id="modal-content"
                                                                                    class="modal-content animation-1">

                                                                                    <header class="modal-header">
                                                                                        <p class="modal-header-title">
                                                                                            Create New Group
                                                                                        </p>
                                                                                        <button id="close"
                                                                                            class="modal-header-icon">
                                                                                            <span class="icon">
                                                                                                <i class="bx bx-x"></i>
                                                                                            </span>
                                                                                        </button>
                                                                                    </header>


                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div
                                                                                    class="col-md-6 col-lg-6 col-sm-12">
                                                                                    <div class="werfg">
                                                                                        <span class="pull-right">
                                                                                            <div id="open-modal10"
                                                                                                class="btn Click-here">
                                                                                                <span
                                                                                                    class="tp-btn-register glyphicon-plus">
                                                                                                    Add Dates</span>

                                                                                            </div>
                                                                                        </span>

                                                                                    </div>
                                                                                    <table
                                                                                        class="table table-bordered sTable kalustyle:w2.style.themed.table;"
                                                                                        style="background-color: rgb(225 73 15); border-width: 2px; border-color: rgb(255, 255, 255);">
                                                                                        <thead>



                                                                                            <tr>
                                                                                                <th nowrap="" class=""
                                                                                                    style="background-color: rgb(30, 28, 27); color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-top-width: 2px; border-top-style: solid; font-weight: bold; vertical-align: bottom;">
                                                                                                    Available Slot</th>



                                                                                            </tr>
                                                                                        </thead>
                                                                                        @if(isset($show))
                                                                                        <tbody
                                                                                            class="black-shadow-active">
                                                                                            @foreach($show as $slot)
                                                                                            <tr class="kaluscope">

                                                                                                @if($slot['tslot']==null)
                                                                                                <td
                                                                                                    style="width: 100%; background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                                    {{$slot['lslot']}}
                                                                                                    &nbsp;&nbsp;({{$slot['number']}})
                                                                                                </td>
                                                                                                @else
                                                                                                <td
                                                                                                    style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                                    {{$slot['tslot']}}
                                                                                                    &nbsp;&nbsp;({{$slot['number']}})
                                                                                                </td>
                                                                                                @endif

                                                                                            </tr>
                                                                                            @endforeach
                                                                                        </tbody>
                                                                                        @else
                                                                                        <tbody
                                                                                            class="black-shadow-active">

                                                                                            <tr class="kaluscope">
                                                                                                <td
                                                                                                    style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                                </td>

                                                                                            </tr>


                                                                                        </tbody>


                                                                                        @endif
                                                                                    </table>
                                                                                </div>
                                                                                <div
                                                                                    class="col-md-6 col-lg-6 col-sm-12">
                                                                                    <br>
                                                                                    <br>
                                                                                    <table
                                                                                        class="table table-bordered sTable kalustyle:w2.style.themed.table;"
                                                                                        style="background-color: rgb(225 73 15); border-width: 2px; border-color: rgb(255, 255, 255);">
                                                                                        <thead>



                                                                                            <tr>
                                                                                                <th nowrap="" class=""
                                                                                                    style="background-color: rgb(30, 28, 27); color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-top-width: 2px; border-top-style: solid; font-weight: bold; vertical-align: bottom;">
                                                                                                    RSVP Responses</th>



                                                                                            </tr>
                                                                                        </thead>

                                                                                        <tbody
                                                                                            class="black-shadow-active">

                                                                                            <tr class="kaluscope">
                                                                                                <td
                                                                                                    style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                                    Yes
                                                                                                </td>


                                                                                            </tr>
                                                                                            <tr class="kaluscope">
                                                                                                <td
                                                                                                    style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                                    Person 1 (2 Guests)
                                                                                                </td>


                                                                                            </tr>
                                                                                            <tr class="kaluscope">
                                                                                                <td
                                                                                                    style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                                    No
                                                                                                </td>


                                                                                            </tr>
                                                                                            <tr class="kaluscope">
                                                                                                <td
                                                                                                    style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                                    Person 2
                                                                                                </td>


                                                                                            </tr>

                                                                                        </tbody>



                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                            <p>
                                                                                NOTE: Dates are in mm/dd/yyyy.<br> Times
                                                                                are shown in
                                                                                '{{Session::get('timezone')}}' .<br> To
                                                                                modify, update
                                                                                your</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                        </div>

                                                    </div>

                                                    <div class="spacer"></div>
                                                    <div class="col-xs-10">
                                                        <button type="submit" class="tp-btn-register">Save and
                                                            Continue</button>
                                                    </div>
                                                    <div class="col-xs-2 text-right">

                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div id="Lon23" class="tabcontent active" style="display: none;">
                                            <div id="wizardStepContainer" class="col-xs-12"
                                                data-ng-show="w0.initialized">
                                                <form method="post" action="/add-setting">
                                                    @csrf
                                                    <input type="hidden" name="signup_id"
                                                        value="{{Session::get('signup_id')}}">
                                                    <div data-ng-include="w0.activetemplate" class="ng-scope">
                                                        <div class="l-wizard-step-3 ng-scope"
                                                            data-ng-controller="wizardStep3 as w3">
                                                            <h2 class="hrow" style="margin-top:0px;">Ask Participants
                                                                For:</h2>
                                                            <div class="row">
                                                                <div class="col-xs-12 ask-participants-for-container">
                                                                    <div
                                                                        class="row form-group ask-participants-for-wrapper">
                                                                        <div
                                                                            class="col-xs-6 col-lg-5 ask-participants-for-label">
                                                                            <span
                                                                                class="glyphicon glyphicon-ok text-orange"
                                                                                style="padding-right: 12px;"></span>
                                                                            <input type="checkbox" checked=""
                                                                                name="name" id="name"
                                                                                disabled="disabled"
                                                                                class="css-checkbox-chkbx-mini hideinline">
                                                                            <span class="hgroup">Name</span>
                                                                            <input type="checkbox" checked=""
                                                                                name="name" id="name"
                                                                                disabled="disabled"
                                                                                class="css-checkbox-chkbx-mini hideinline">
                                                                        </div>
                                                                        <div class="col-xs-2 ask-participants-for-option"
                                                                            style="padding-top: 3px;">
                                                                            Required
                                                                            <input type="hidden" name="nameRequired"
                                                                                value="1">
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="row form-group ask-participants-for-wrapper">
                                                                        <div
                                                                            class="col-xs-6 col-lg-5 ask-participants-for-label">
                                                                            <!-- <input name="email" id="email" value="1" type="checkbox" checked="" disabled="disabled" class="css-checkbox-chkbx-mini hideinline"> -->
                                                                            <span
                                                                                class="glyphicon glyphicon-ok text-orange"
                                                                                style="padding-right: 12px;"></span>
                                                                            <span class="hgroup">Email</span>
                                                                        </div>
                                                                        <div
                                                                            class="col-xs-2 ask-participants-for-option">
                                                                            <span data-ng-if="!w3.isEmailRequired()"
                                                                                class="ng-scope">
                                                                                <select name="email" id="emailrequired"
                                                                                    class="form-control input-sm ng-pristine ng-untouched ng-valid ng-not-empty"
                                                                                    selected="selected">
                                                                                    <option label="Required"
                                                                                        value="Required">Required
                                                                                    </option>
                                                                                    <option label="Optional"
                                                                                        value="Optional">Optional
                                                                                    </option>
                                                                                </select>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <!-- phone -->
                                                                    <div
                                                                        class="row form-group ask-participants-for-wrapper">
                                                                        <div
                                                                            class="col-xs-6 col-lg-5 ask-participants-for-label">
                                                                            <span
                                                                                class="glyphicon glyphicon-ok text-orange"
                                                                                style="padding-right: 12px;"></span>
                                                                            <span class="hgroup">Phone Number</span>
                                                                        </div>
                                                                        <div
                                                                            class="col-xs-2 ask-participants-for-option">
                                                                            <span data-ng-if="!w3.isEmailRequired()"
                                                                                class="ng-scope">
                                                                                <select name="phone" id="emailrequired"
                                                                                    class="form-control input-sm ng-pristine ng-untouched ng-valid ng-not-empty"
                                                                                    selected="selected">
                                                                                    <option label="Required"
                                                                                        value="Required">Required
                                                                                    </option>
                                                                                    <option label="Optional"
                                                                                        value="Optional">Optional
                                                                                    </option>
                                                                                </select>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div sv-root=""
                                                                        data-ng-show="w3.signupinfo.customquestions.length > 0 &amp;&amp; w3.signupinfo.settings.type !== 'rsvp'"
                                                                        sv-on-sort="w3.handleOrderChange(w3.signupinfo.signup.signupid)"
                                                                        class="ng-hide">
                                                                        <div sv-part="w3.signupinfo.customquestions"
                                                                            class="ng-scope">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="spacer ng-scope"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col-xs-10">
                                                <button type="submit" class="tp-btn-register">Save and
                                                    Continue</button>
                                            </div>
                                            <div class="c-genius-tips" genius-tips-container="">
                                                <div data-ng-show="displayGeniusTips"
                                                    class="c-genius-tips--tip-container is-open ng-hide"
                                                    data-ng-class="{'is-expanded':displayLearnMore}"
                                                    style="bottom: 309px;">
                                                    <!-- ngRepeat: tip in arrGeniusTips -->
                                                </div>
                                                <div class="c-genius-tips--tip-anchor"></div>
                                            </div>
                                            </form>
                                        </div>
                                        <div id="Lon25" class="tabcontent active">
                          
                          <div class="row">
                             <div class="col-md-5 col-lg-5 col-sm-12">
                                <img src="{{asset('signups/image')}}/{{($mali->image)}}" alt="" style="width:100%;">
                             </div>
                             <div class="col-md-7 col-lg-7 col-sm-12">
                                <p>{{$mali->category}}</p>
                                <h2>{{$mali['title']}}</h2>
                                <p>Please review the available slots below and click on the button to sign up. Thank you!</p>
                                <p>Created by: {{Auth::user()->firstname}} {{Auth::user()->lastname}}</p>
                                
                             </div>
                          </div>
                          <h2>Publish Table</h2>
                         <table class="table table-bordered sTable kalustyle:w2.style.themed.table;"
                                                     style="background-color: rgb(225 73 15); border-width: 2px; border-color: rgb(255, 255, 255);">
                                                     <thead>
                                                        <tr class="cleared">
                                                           <th class="cleared">
                                                              <span class="pull-right">
                                                              </span>
                                                           </th>
                                                           <th class="cleared">
                                                             
                                                           </th>
                                                        </tr>
                                                        <tr>
                                                           <th nowrap="" class=""
                                                              style="background-color: rgb(30, 28, 27); color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-top-width: 2px; border-top-style: solid; font-weight: bold; vertical-align: bottom;">
                                                              Available Slot
                                                           </th>
                                                           <th nowrap="" class=""
                                                              style="background-color: rgb(30, 28, 27); color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-top-width: 2px; border-top-style: solid; font-weight: bold; vertical-align: bottom;">
                                                              Dates/Times 
                                                           </th>
                                                        </tr>
                                                     </thead>
                                                     @if(isset($again))
                                                     <tbody class="black-shadow-active">
                                                        @foreach($again as $slot)
                                                        <tr class="kaluscope">
                                                           @if($slot['tslot']==null)
                                                           <td class="col-xs-4"
                                                              style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                              {{$slot['lslot']}}
                                                              &nbsp;&nbsp;(Location:-{{$slot['location']}})
                                                           </td>
                                                           @else
                                                           <td class="col-xs-4"
                                                              style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                              {{$slot['tslot']}}
                                                              &nbsp;&nbsp;(Location:-{{$slot['location']}})
                                                           </td>
                                                           @endif
                                                           <td class="table-wrapper">
                                                              <table class="table">
                                                                 <tbody>
                                                                    <?php $time= explode(',',  $slot['time']); ?>
                                                                    @foreach($time as $time1)
                                                                    <?php $timeArr = explode('|', $time1); ?>
                                                                    <tr>
                                                                       <td class="tcell tfirst "
                                                                          style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255); width: 45%;">
                                                                          {{date('d/m/y', strtotime($timeArr[0]))}}  
                                                                       </td>
                                                                        <td class="col-xs-3"
                                                                          style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                          {{date('H:i A', strtotime($timeArr[0]))}} 
                                                </td>
                                                                       <td class="col-xs-5"
                                                                          style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                          {{date('H:i A', strtotime($timeArr[1]))}} 
                                                
                                       &nbsp;&nbsp;
                                                                            <button class="btn btn-primary"><input type="checkbox" />&nbsp;signup</button>
                                                                       </td>
                                                                    </tr>
                                                                    @endforeach
                                                                 </tbody>
                                                              </table>
                                                           </td>
                                                        </tr>
                                                        @endforeach
                                                     </tbody>
                                                     @else
                                                     <tbody class="black-shadow-active">
                                                        <tr class="kaluscope">
                                                           <td class="col-xs-4 "
                                                              style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                           </td>
                                                           <td class="table-wrapper">
                                                              <table class="table">
                                                                 <tbody>
                                                                    <tr>
                                                                       <td class="tcell "
                                                                          style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                       </td>
                                                                       <td class="col-xs-5"
                                                                          style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                       </td>
                                                                    </tr>
                                                                    <tr >
                                                                       <td 
                                                                          style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                       </td>
                                                                       <td class="col-xs-5 "
                                                                          style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                       </td>
                                                                    </tr>
                                                                 </tbody>
                                                              </table>
                                                           </td>
                                                        </tr>
                                                     </tbody>
                                                     @endif
                                                  </table>
                          <br>
                          <a href="/share"><button class="tp-btn-register">Save and
                          Continue</button></a>
                          </form>
                       </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="b">
                            <div class="member-blocks--maincontent-narrow">
                                <div>
                                    <style class="ng-binding">
                                    .col-signup-width {
                                        width: calc(100% - 190px);
                                    }
                                    </style>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="row">
                                                        <ol class="breadcrumb ng-isolate-scope"
                                                            sug-breadcrumb="breadcrumbs">
                                                            <li class="ng-scope">
                                                                <a data-ng-if="crumb.href !== ''"
                                                                    href="/index.cfm?go=t.mygroups#/"
                                                                    class="ng-binding ng-scope">Groups</a>
                                                            </li>
                                                            <li class="ng-scope active">
                                                                <span data-ng-if="crumb.href === ''"
                                                                    class="ng-binding ng-scope">Manage</span>
                                                            </li>
                                                        </ol>
                                                    </div>
                                                    <h1 class="hrow ng-binding">Groups <a href=""
                                                            data-ng-click="showHelp()"
                                                            data-ng-show="str.helpTitle.length || str.helpBody.length"
                                                            popover="Help" popover-placement="top"
                                                            popover-trigger="mouseenter" popover-popup-delay="300"
                                                            class="ng-scope ng-hide"><span
                                                                class="glyphicon glyphicon-question-sign helpme"></span></a>
                                                    </h1>
                                                    <p data-ng-show="str.pageDescr" class="ng-binding">Use this area to
                                                        manage your email groups. To send emails to these groups, go to
                                                        "Messages."
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div data-ng-view="" class="ng-scope">
                                                        <div class="row ng-scope">
                                                            <div class="col-xs-12">
                                                                <div class="row gridHeading">
                                                                    <div class="col-xs-5">
                                                                        <h2 class="hrow pull-left fade-in ng-binding">My
                                                                            Groups
                                                                        </h2>
                                                                        <div
                                                                            class="dropdown dropdown-inline pull-left groupsSettings">
                                                                            <a href="" class="dropdown-toggle ng-scope"
                                                                                data-toggle="dropdown"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false" popover="Settings"
                                                                                popover-placement="top"
                                                                                popover-trigger="mouseenter"
                                                                                popover-popup-delay="300">
                                                                                <span
                                                                                    class="glyphicon glyphicon-cog subtext"></span>
                                                                            </a>
                                                                            <ul class="dropdown-menu settingsOption"
                                                                                data-ng-click="dropDownClickEvent($event)">
                                                                                <li>
                                                                                    <div class="h2 ng-binding">Sort By:
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <input type="radio" name="sortBy"
                                                                                        id="sortByCommunityId"
                                                                                        data-ng-model="frmObj.orderColumn"
                                                                                        value="community"
                                                                                        class="css-radio-mini ng-pristine ng-untouched ng-valid ng-not-empty">
                                                                                    <label for="sortByCommunityId"
                                                                                        class="radio-css-label-mini ng-binding">Group
                                                                                        Name</label>
                                                                                </li>
                                                                                <li>
                                                                                    <input type="radio" name="sortBy"
                                                                                        id="sortByMemberCount"
                                                                                        data-ng-model="frmObj.orderColumn"
                                                                                        value="membercount"
                                                                                        class="css-radio-mini ng-pristine ng-untouched ng-valid ng-not-empty">
                                                                                    <label for="sortByMemberCount"
                                                                                        class="radio-css-label-mini ng-binding">Members</label>
                                                                                </li>
                                                                                <li>
                                                                                    <input type="radio" name="sortBy"
                                                                                        id="sortByListCount"
                                                                                        data-ng-model="frmObj.orderColumn"
                                                                                        value="listcount"
                                                                                        class="css-radio-mini ng-pristine ng-untouched ng-valid ng-not-empty">
                                                                                    <label for="sortByListCount"
                                                                                        class="radio-css-label-mini ng-binding">Sign
                                                                                        Ups</label>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="spacer-sm"></div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="form-horizontal">
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                class="col-xs-6 text-left control-label ng-binding"
                                                                                                for="sortDirectionId">Sort
                                                                                                Order: </label>
                                                                                            <div class="col-xs-6">
                                                                                                <select
                                                                                                    name="sortDirection"
                                                                                                    id="sortDirectionId"
                                                                                                    data-ng-model="frmObj.direction"
                                                                                                    class="form-control ng-pristine ng-untouched ng-valid ng-not-empty"
                                                                                                    data-ng-options="o.value as o.label for o in sortOptions">
                                                                                                    <option label="ASC"
                                                                                                        value="boolean:false"
                                                                                                        selected="selected">
                                                                                                        ASC
                                                                                                    </option>
                                                                                                    <option label="DESC"
                                                                                                        value="boolean:true">
                                                                                                        DESC
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="form-horizontal">
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                class="col-xs-6 text-left control-label ng-binding"
                                                                                                for="numPerPageId">Items
                                                                                                Per
                                                                                                Page: </label>
                                                                                            <div class="col-xs-6">
                                                                                                <input name="numPerPage"
                                                                                                    id="numPerPageId"
                                                                                                    data-ng-model="frmObj.numPerPage"
                                                                                                    class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength ng-not-empty"
                                                                                                    maxlength="3">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <span
                                                                                        class="btn btn-success btn-block text-white ng-binding"
                                                                                        title="Save Settings"> <span
                                                                                            class="glyphicon glyphicon-floppy-disk text-white"
                                                                                            title="Save Settings"></span>
                                                                                        Save</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-4">
                                                                        <div class="gridHeadingElement">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-3">
                                                                        <div class="gridHeadingElement">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php use App\Models\publish; ?>
                                                                <?php $publish = publish::publish();?>
                                                                <div class="row">
                                                                    <div class="col-xs-12">
                                                                        <table
                                                                            class="table table-hover table-striped sTable">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th class="tcell no-wrap width-50">
                                                                                        <strong class="ng-binding">Group
                                                                                            Name <span></span></strong>
                                                                                    </th>
                                                                                    <th class="tcell no-wrap centered">
                                                                                        <strong class="ng-binding">Date
                                                                                        </strong>
                                                                                    </th>
                                                                                    <th class="tcell no-wrap centered">
                                                                                        <strong
                                                                                            class="ng-binding">Members
                                                                                        </strong>
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody
                                                                                data-ng-if="myGroupsFiltered.length > 0"
                                                                                class="ng-scope">
                                                                                @foreach($publish as $publishes)
                                                                                <?php $arr = explode(' | ', $publishes['time'])  ?>
                                                                                <tr class="ng-scope">
                                                                                    @if($publishes['tslot'])
                                                                                    <td
                                                                                        class="tcell tfirst enforce-wrap ng-binding">
                                                                                        {{$publishes['tslot']}}
                                                                                    </td>
                                                                                    @else
                                                                                    <td
                                                                                        class="tcell tfirst enforce-wrap ng-binding">
                                                                                        {{$publishes['lslot']}}
                                                                                    </td>
                                                                                    @endif
                                                                                    <td
                                                                                        class="tcell tfirst enforce-wrap ng-binding">
                                                                                        {{date('Y-m-d D,h:i:s', strtotime($arr[0]))}}
                                                                                        -
                                                                                        {{date('Y-m-d D,h:i:s', strtotime($arr[1]))}}
                                                                                    </td>
                                                                                    <td class="tcell icon">
                                                                                        <div class="icon-badged ng-scope"
                                                                                            popover="There are 3 members in this group"
                                                                                            popover-placement="top"
                                                                                            popover-trigger="mouseenter"
                                                                                            popover-popup-delay="300">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-user table-icon mono no-hover"
                                                                                                alt="There are 3 members in this group"></span><span
                                                                                                class="badge ng-binding">{{$publishes['count_member']}}</span>
                                                                                        </div>

                                                                                    </td>
                                                                                    </td>
                                                                                    <td class="tcell icon">
                                                                                        <a href="/edit-group/{{$publishes['id']}}"
                                                                                            popover="Edit This Group"
                                                                                            popover-placement="top"
                                                                                            popover-trigger="mouseenter"
                                                                                            popover-popup-delay="300"
                                                                                            class="ng-scope">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-pencil table-icon mono"
                                                                                                alt="Add/remove/edit members of this group"></span>
                                                                                        </a>

                                                                                    </td>
                                                                                    <td class="tcell icon">
                                                                                        <div class="icon-badged ng-scope"
                                                                                            popover="There is 1 sign up using this group"
                                                                                            popover-placement="top"
                                                                                            popover-trigger="mouseenter"
                                                                                            popover-popup-delay="300">
                                                                                            <?php
                                                                                             $code = base64_encode($publishes['signup_id']);
                                                                                              $id = base64_encode(Auth::User()->id);?>
                                                                                            <a
                                                                                                href="{{url(('share/'.$code.'/'.$id))}}"><i
                                                                                                    class="fas fa-share"></i></a>
                                                                                        </div>
                                                                                    </td>
                                                                                    @endforeach
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>
                </div>

            </div>
        </div>






    </div>

    <style>
    footer {
        margin-top: 40px;
        background: #2B2B2B;
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

    .copy_right {
        padding: 20px 0;
        border-top: 1px solid #3a3b3d;
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

    .modal {
        display: none;
        position: fixed;
        /* Stay in place */
        z-index: 100;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    .modal-content {
        background-color: #fefefe;
        top: 50%;
        left: 50%;
        color: #4a4a4a;
        max-width: 100%;
        position: relative;
        border-radius: 10px;
        border: 1px solid #ccc;
        width: 70%;
        /* Could be more or less, depending on screen size */
        transform: translate(-50%, -50%);
    }

    .modal-header {
        align-items: stretch;
        box-shadow: 0 1px 1px rgb(10 10 10 / 10%);
        display: flex;
        padding: 20px;
    }

    .modal-header-title {
        align-items: center;
        color: #363636;
        display: flex;
        flex-grow: 1;
        font-weight: 700;
        padding: 5px 15px;
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
        padding: 5px 40px;
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

    /* .tabs {
        max-width: 538px;
    } */

    .tabs-nav li {
        float: left;
        width: 50%;
        list-style-type: none;

    }

    .tabs-nav li:first-child a {
        border-right: 0;
        border-top-left-radius: 6px;
    }

    .tabs-nav li:last-child a {
        border-top-right-radius: 6px;
    }

    .tab-active a {
        background: #fff;
        border-bottom-color: transparent;
        color: #2db34a;
        cursor: default;
        border-bottom: 2px solid;
    }

    .tabs-stage {
        border: 1px solid #cecfd5;
        border-radius: 0 0 6px 6px;
        border-top: 0;
        clear: both;
        padding: 24px 30px;
        position: relative;
        top: -1px;
    }
    </style>
    <!-- =============================== -->




    <style>
    .tab-menu {}

    .tab-menu ul {
        margin: 0;
        padding: 0;
    }

    .tab-menu ul li {
        list-style-type: none;
        display: inline-block;
    }

    .tab-menu ul li a {
        text-decoration: none;
        color: rgba(0, 0, 0, 0.4);
        background-color: #b4cbc4;
        padding: 7px 25px;
        border-radius: 4px;
    }

    .tab-menu ul li a.active-a {
        background-color: #588d7d;
        color: #ffffff;
    }

    .tab {
        display: none;
    }

    .tab-active {
        display: block;
    }
    </style>
    <!-- =============================== -->
    @include('slot/layout.footer')


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script>
    (function() {
        var d = document,
            tabs = d.querySelector('.tabs'),
            tab = d.querySelectorAll('li'),
            contents = d.querySelectorAll('.content');
        tabs.addEventListener('click', function(e) {
            if (e.target && e.target.nodeName === 'LI') {
                // change tabs
                for (var i = 0; i < tab.length; i++) {
                    tab[i].classList.remove('active');
                }
                e.target.classList.toggle('active');


                // change content
                for (i = 0; i < contents.length; i++) {
                    contents[i].classList.remove('active');
                }

                var tabId = '#' + e.target.dataset.tabId;
                d.querySelector(tabId).classList.toggle('active');
            }
        });
    })();
    </script>

    <script>
    var tabsFn = (function() {

        function init() {
            setHeight();
        }

        function setHeight() {
            var $tabPane = $('.tab-pane'),
                tabsHeight = $('.nav-tabs').height();

            $tabPane.css({
                height: tabsHeight
            });
        }

        $(init);
    })();
    </script>
    <script>
    function openCity(evt, cityName) {

        var i, tabcontent, tablinks;


        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }


        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }


        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    </script>
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
    var modal2 = document.getElementById("myModal2");
    var btn2 //#endregion2 = document.getElementById("open-modal2");
    var span2 = document.getElementById("close2");
    btn2.onclick = function() {
        modal2.style.display = "block";
    }
    span2.onclick = function() {
        modal2.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal2) {
            modal2.style.display = "none";
        }
    }
    </script>

    <script>
    $('.tabs-stage div').hide();
    $('.tabs-stage div:first').show();
    $('.tabs-nav li:first').addClass('tab-active');

    // Change tab class and display content
    $('.tabs-nav a').on('click', function(event) {
        event.preventDefault();
        $('.tabs-nav li').removeClass('tab-active');
        $(this).parent().addClass('tab-active');
        $('.tabs-stage div').hide();
        $($(this).attr('href')).show();
    });
    </script>
    <script>
    $(".Click-here").on('click', function() {
        $(".custom-model-main").addClass('model-open');
    });
    $(".close-btn, .bg-overlay").click(function() {
        $(".custom-model-main").removeClass('model-open');
    });

    $('#datePick').multiDatesPicker({
        dateFormat: "yy-mm-dd" //default mm/dd/yy
    });
    </script>
    <script>
    $('.tabs-stage div').hide();
    $('.tabs-stage div:first').show();
    $('.tabs-nav li:first').addClass('tab-active');

    // Change tab class and display content
    $('.tabs-nav a').on('click', function(event) {
        event.preventDefault();
        $('.tabs-nav li').removeClass('tab-active');
        $(this).parent().addClass('tab-active');
        $('.tabs-stage div').hide();
        $($(this).attr('href')).show();
    });
    </script>
    <script>
    var modal7 = document.getElementById("myModal7");

    var btn7 = document.getElementById("open-modal7");

    var span7 = document.getElementById("close7");

    btn7.onclick = function() {
        modal7.style.display = "block";
    }
    span7.onclick = function() {
        modal7.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal7.style.display = "none";
        }
    }
    </script>
    <script>
    var modal8 = document.getElementById("myModal8");

    var btn8 = document.getElementById("open-modal8");

    var span8 = document.getElementById("close8");

    btn8.onclick = function() {
        modal8.style.display = "block";
    }
    span8.onclick = function() {
        modal8.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal8.style.display = "none";
        }
    }
    </script>
    <script>
    var modal9 = document.getElementById("myModal9");

    var btn9 = document.getElementById("open-modal9");

    var span9 = document.getElementById("close9");

    btn9.onclick = function() {
        modal9.style.display = "block";
    }
    span9.onclick = function() {
        modal9.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal9.style.display = "none";
        }
    }
    </script>
    <script>
    var modal10 = document.getElementById("myModal10");

    var btn10 = document.getElementById("open-modal10");

    var span10 = document.getElementById("close10");

    btn10.onclick = function() {
        modal10.style.display = "block";
    }
    span10.onclick = function() {
        modal10.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal10.style.display = "none";
        }
    }
    </script>
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
        if (event.target == modal2) {
            modal2.style.display = "none";
        }
    }
    const tabs = document.querySelectorAll('.tab');

    tabs.forEach(tab => {
        tab.addEventListener('click', event => {
            console.log(event.currentTarget); // show what element was clicked in the console
            console.log(event.currentTarget.dataset); // get .dataset Object key from HTML element 

            // Remove 'active' class style from previously selected tab
            document.querySelector('.tab.active')?.classList.remove('active'); // optional chaining

            // Add 'active' class style to selected tab
            event.currentTarget.classList.add('active');

            // Hide previously selected tab's content
            document.querySelector('.content.show').classList.remove('show');

            // Show selected tab's respective content
            const selectedContent = event.currentTarget.dataset
                .content; // see .dataset console.log() above
            document.querySelector(selectedContent).classList.add('show');
        })
    })
    </script>
    <script>
    $(document).ready(function() {
        $("#addmore").click(function() {
            $("#req_input").append(
                '<div class="required_inp"><input type="datetime-local" name="time1[]" value="" multiple><input type="datetime-local" name="time2[]" value="" multiple>' +
                '<input type="button" class="inputRemove" value="Remove"/></div>');
        });
        $("#addmore1").click(function() {
            $("#req_input1").append(
                '<div class="required_inp"><input type="datetime-local" name="time1[]" value="" multiple><input type="datetime-local" name="time2[]" value="" multiple>' +
                '<input type="button" class="inputRemove" value="Remove"/></div>');
        });
        $("#addmore2").click(function() {
            $("#req_input2").append(
                '<div class="required_inp"><input type="datetime-local" name="time1[]" value="" multiple><input type="datetime-local" name="time2[]" value="" multiple>' +
                '<input type="button" class="inputRemove" value="Remove"/></div>');
        });
        $("#addmore3").click(function() {
            $("#req_input3").append(
                '<div class="required_inp"><input type="datetime-local" name="time1[]" value="" multiple><input type="datetime-local" name="time2[]" value="" multiple>' +
                '<input type="button" class="inputRemove" value="Remove"/></div>');
        });
        $("#addmore4").click(function() {
            $("#req_input4").append(
                '<div class="required_inp"><input type="datetime-local" name="time1[]" value="" multiple><input type="datetime-local" name="time2[]" value="" multiple>' +
                '<input type="button" class="inputRemove" value="Remove"/></div>');
        });
        $("#addmore5").click(function() {
            $("#req_input5").append(
                '<div class="required_inp"><input type="datetime-local" name="time1[]" value="" multiple><input type="datetime-local" name="time2[]" value="" multiple>' +
                '<input type="button" class="inputRemove" value="Remove"/></div>');
        });
        $("#addmore6").click(function() {
            $("#req_input6").append(

                '<div class="required_inp"><input type="datetime-local" name="time1[]" value="" multiple><input type="datetime-local" name="time2[]" value="" multiple>' +
                '<input type="button" class="inputRemove" value="Remove"/></div>');
        });
        $('body').on('click', '.inputRemove', function() {
            $(this).parent('div.required_inp').remove()
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $('.tab-a').click(function() {
            $(".tab").removeClass('tab-active');
            $(".tab[data-id='" + $(this).attr('data-id') + "']").addClass("tab-active");
            $(".tab-a").removeClass('active-a');
            $(this).parent().find(".tab-a").addClass('active-a');
        });
    });
    </script>
    <script>
    $(document).ready(function() {

        $('ul.tabs li').click(function() {
            var tab_id = $(this).attr('data-tab');

            $('ul.tabs li').removeClass('current');
            $('.tab-content').removeClass('current');

            $(this).addClass('current');
            $("#" + tab_id).addClass('current');
        })

    })
    </script>
</body>

</html>