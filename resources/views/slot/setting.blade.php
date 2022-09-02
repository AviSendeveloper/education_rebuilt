<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Setting</title>
    <script type="text/javascript"></script>
    <link rel="stylesheet" href="{{asset('assets1/css/quick.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="slot/dist/css/SUGstyleV3-responsive.minf4a1.css?v=1636996767345">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script type="text/javascript" src="slot/dist/js/lib/jquery-1.11.1.minf4a1.js?v=1636996767345"></script>
</head>
<style>
.datainputs {
    margin-top: 30px;
    padding-left: 14px;
}

.tool-icon-link {
    background: none !important;
    color: #227ede;
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

.rty a {
    color: #000;
}

.rty li.active a {
    border-bottom: 3px solid #056b99;
    padding: 10px 14px;
    background: none !important;
}

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

/* .slty {
      padding-bottom: 30px;
      } */
.tnrt {
    display: flex;
    justify-content: center;
}
}
</style>

<body>
    @include('slot/layout.header')
    <div class="mainbody">
       <div id="myModal7" class="modal">
            <div id="modal-content1" class="modal-content animation-1">
                <header class="modal-header">
                    <p class="modal-header-title"> Sort by Date</p>
                    <button id="close7" class="modal-header-icon">
                        <span class="icon">
                            <i class="bx bx-x"></i>
                        </span>
                    </button>
                </header>
                <div class="modal-body">
                    <div class="tabset">
                        <div class="row">
                            <form action="/setting-table" method="post">
                                @csrf
                                <input type="hidden" name="sortbydate_id" value="{{$detail['id']}}">
                                <div class="slty">
                                    <div class="tnrt row" style="margin-top: 20px;">
                                        <div class="col-md-5">
                                            <h5>Assign these dates/times to:</h5>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="form-control" style="position: relative;list-style: none;">
                                                <li class="button-dropdown">
                                                    <a href="javascript:void(0)" class="dropdown-toggle fgfgrf">
                                                        All available slots <i class="fas fa-calendar-alt"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <div class="select-dates-dropdown-container">
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <h3 class="margin-bottom-10 ng-binding">Select Slots
                                                                    </h3>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon cursor-pointer">
                                                                            <i class="fas fa-search-plus"></i>
                                                                        </span>
                                                                        <input type="text"
                                                                            class="form-control ng-pristine ng-valid ng-empty ng-touched"
                                                                            style="">
                                                                    </div>
                                                                    @if(isset($addslot))
                                                                    @foreach($addslot as $addslots)
                                                                    <div>
                                                                        <input type="checkbox"
                                                                            value="{{$addslots['id']}}"
                                                                            class="css-checkbox-chkbx-mini "
                                                                            id="slotdate_all_{{$addslots['id']}}"
                                                                            name="addslot_id[]">
                                                                        <label class="chkbx-css-label-mini ng-binding"
                                                                            for="slotdate_all_{{$addslots['id']}}">{{$addslots['tslot']}}</label>
                                                                    </div>
                                                                    @endforeach
                                                                    @endif
                                                                    <!--  <div class="row margin-top-10 margin-bottom-10">
                                                      <div class="col-xs-12"
                                                          style="text-align: center;">
                                                          <button type="submit"
                                                              class="add_input">Success</button>
                                                      </div>
                                                      </div> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="req_input" class="datainputs">
                                    <input class="date" type="date" id="birthdaytime" name="date[]" value="" multiple>
                                    <input type="time" id="birthdaytime1" name="time1[]" value="" multiple>
                                    <input type="time" id="birthdaytime1" name="time2[]" value="" multiple>
                                    <input type="text" id="birthdaytime1" name="location[]" placeholder="location"
                                        value="" multiple>
                                </div>
                                <a href="#" id="addmore" class="add_input">Add more</a>
                                <button type="submit" class="add_input">Success</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="myModal17" class="modal">
            <div id="modal-content1" class="modal-content animation-1">
                <header class="modal-header">
                    <p class="modal-header-title"> Slots</p>
                    <button id="close17" class="modal-header-icon">
                        <span class="icon">
                            <i class="bx bx-x"></i>
                        </span>
                    </button>
                </header>
                <div class="modal-body">
                    <div class="tabset">
                        <div class="row">
                            <form action="/setting-table" method="post">
                                @csrf
                                <input type="hidden" name="addslot_id" value="{{$detail['id']}}">
                                <div class="col-md-3">
                                    <label for="exampleInputEmail1">Title of slot</label>
                                    <input type="text" class="form-control" name="tslot" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="col-md-3">
                                    <label for="exampleInputEmail1">Help Comment</label>
                                    <input type="text" class="form-control" name="help" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="">
                                </div>
                                <div class="col-md-2">
                                    <label for="exampleFormControlSelect1">Number</label>
                                    <input type="number" class="form-control" name="number" value="1">
                                </div>
                                <div class="col-md-4">
                                    <br>
                                    <ul class="form-control" style="position: relative;list-style: none;">
                                        <li class="button-dropdown">
                                            <a href="javascript:void(0)" class="dropdown-toggle fgfgrf">
                                                All Dates <i class="fas fa-calendar-alt"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <div class="select-dates-dropdown-container">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <h3 class="margin-bottom-10 ng-binding">Select Dates</h3>
                                                            <div class="input-group">
                                                                <span class="input-group-addon cursor-pointer">
                                                                    <i class="fas fa-search-plus"></i>
                                                                </span>
                                                                <input type="text"
                                                                    class="form-control ng-pristine ng-valid ng-empty ng-touched"
                                                                    style="">
                                                            </div>
                                                            @if(isset($adddate))
                                                            <?php $count=1; ?>
                                                            @foreach($adddate as $adddates)
                                                            <div>
                                                                <input type="checkbox"
                                                                    class="css-checkbox-chkbx-mini ng-pristine "
                                                                    id="slotdate_all_{{$count}}"
                                                                    value="{{$adddates['id']}}" name="adddate_id[]">
                                                                <label class="chkbx-css-label-mini ng-binding"
                                                                    for="slotdate_all_{{$count}}">{{date('m.d.y',strtotime($adddates['date']))}}</label>
                                                            </div>
                                                            <?php  $count++; ?>
                                                            @endforeach
                                                            @endif
                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                        </li>
                                    </ul>
                                </div>
                                <br><br>
                                <div style="margin-top: 30px; margin-left: 14px;"> <button type="submit"
                                        class="add_input">Success</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="myModal8" class="modal">
            <div id="modal-content1" class="modal-content animation-1">
                <header class="modal-header">
                    <p class="modal-header-title">Sort by Slot</p>
                    <button id="close8" class="modal-header-icon">
                        <span class="icon">
                            <i class="bx bx-x"></i>
                        </span>
                    </button>
                </header>
                <div class="modal-body">
                    <div class="tabset">
                        <div class="row">
                            <form action="/setting-table" method="post">
                                @csrf
                                <input type="hidden" name="detail_id" value="3">
                                <div class="col-md-3">
                                    <label for="exampleInputEmail1">Title of slot</label>
                                    <input type="text" class="form-control" name="tslot" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="col-md-3">
                                    <label for="exampleInputEmail1">Help Comment</label>
                                    <input type="text" class="form-control" name="help" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="">
                                </div>
                                <div class="col-md-2">
                                    <label for="exampleFormControlSelect1">Number</label>
                                    <input type="number" class="form-control" name="number" value="1">
                                </div>
                                <div class="col-md-4">
                                    <br>
                                    <ul class="form-control" style="position: relative;list-style: none;">
                                        <li class="button-dropdown">
                                            <a href="javascript:void(0)" class="dropdown-toggle fgfgrf">
                                                All Dates <i class="fas fa-calendar-alt"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <div class="select-dates-dropdown-container">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <h3 class="margin-bottom-10 ng-binding">Select Dates</h3>
                                                            <div class="input-group">
                                                                <span class="input-group-addon cursor-pointer">
                                                                    <i class="fas fa-search-plus"></i>
                                                                </span>
                                                                <input type="text"
                                                                    class="form-control ng-pristine ng-valid ng-empty ng-touched"
                                                                    style="">
                                                            </div>
                                                            <div>
                                                                <input type="checkbox"
                                                                    class="css-checkbox-chkbx-mini ng-pristine ng-untouched ng-valid ng-not-empty"
                                                                    id="slotdate_all_6">
                                                                <label class="chkbx-css-label-mini ng-binding"
                                                                    for="slotdate_all_6">All dates on sign up</label>
                                                            </div>
                                                            <div class="select-dates-dropdown-scrollable-content">
                                                                <div class="ng-scope">
                                                                    <input type="checkbox" name="slotdate_0_7"
                                                                        id="slotdate_0_7"
                                                                        class="css-checkbox-chkbx-mini select-dates-dropdown-checkbox ng-pristine ng-untouched ng-valid ng-not-empty">
                                                                    <label class="chkbx-css-label-mini ng-binding"
                                                                        for="slotdate_0_7">Thursday, 01/13/2022<br>@
                                                                        5:05 AM - 6:05 AM</label>
                                                                </div>
                                                                <div class="ng-scope">
                                                                    <input type="checkbox" name="slotdate_0_8"
                                                                        id="slotdate_0_8"
                                                                        class="css-checkbox-chkbx-mini select-dates-dropdown-checkbox ng-pristine ng-untouched ng-valid ng-not-empty">
                                                                    <label class="chkbx-css-label-mini ng-binding"
                                                                        for="slotdate_0_8">Thursday, 01/13/2022<br>@
                                                                        5:05 AM - 6:05 AM</label>
                                                                </div>
                                                            </div>
                                                         
                                                        </div>
                                                    </div>
                                                </div>
                                        </li>
                                    </ul>
                                </div>
                                <br><br>
                                <div style="margin-top: 30px; margin-left: 14px;"> <button type="submit"
                                        class="add_input">Success</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="myModal18" class="modal">
            <div id="modal-content1" class="modal-content animation-1">
                <header class="modal-header">
                    <p class="modal-header-title">Sort by Date</p>
                    <button id="close18" class="modal-header-icon">
                        <span class="icon">
                            <i class="bx bx-x"></i>
                        </span>
                    </button>
                </header>
                <div class="modal-body">
                    <div class="tabset">
                        <div class="row">
                            <form action="/submit-design" method="post">
                                <div class="slty">
                                    <div class="tnrt row" style="margin-top: 20px;">
                                        <div class="col-md-5">
                                            <h5>Assign these dates/times to:</h5>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="form-control" style="position: relative;list-style: none;">
                                                <li class="button-dropdown">
                                                    <a href="javascript:void(0)" class="dropdown-toggle fgfgrf">
                                                        All available slots <i class="fas fa-calendar-alt"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <div class="select-dates-dropdown-container">
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <h3 class="margin-bottom-10 ng-binding">Select Slots
                                                                    </h3>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon cursor-pointer">
                                                                            <i class="fas fa-search-plus"></i>
                                                                        </span>
                                                                        <input type="text"
                                                                            class="form-control ng-pristine ng-valid ng-empty ng-touched"
                                                                            style="">
                                                                    </div>
                                                                    <div>
                                                                        <input type="checkbox"
                                                                            class="css-checkbox-chkbx-mini ng-pristine ng-untouched ng-valid ng-not-empty"
                                                                            id="slotdate_all_8">
                                                                        <label class="chkbx-css-label-mini ng-binding"
                                                                            for="slotdate_all_8">All dates on sign
                                                                            up</label>
                                                                    </div>
                                                                    <div
                                                                        class="select-dates-dropdown-scrollable-content">
                                                                        <div class="ng-scope">
                                                                            <input type="checkbox" name="slotdate_0_9"
                                                                                id="slotdate_0_9"
                                                                                class="css-checkbox-chkbx-mini select-dates-dropdown-checkbox ng-pristine ng-untouched ng-valid ng-not-empty">
                                                                            <label
                                                                                class="chkbx-css-label-mini ng-binding"
                                                                                for="slotdate_0_9">All available
                                                                                slots1</label>
                                                                        </div>
                                                                        <div class="ng-scope">
                                                                            <input type="checkbox" name="slotdate_0_10"
                                                                                id="slotdate_0_10"
                                                                                class="css-checkbox-chkbx-mini select-dates-dropdown-checkbox ng-pristine ng-untouched ng-valid ng-not-empty">
                                                                            <label
                                                                                class="chkbx-css-label-mini ng-binding"
                                                                                for="slotdate_0_10">All available
                                                                                slots2</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row margin-top-10 margin-bottom-10">
                                                                        <div class="col-xs-12"
                                                                            style="text-align: center;">
                                                                            <button type="submit"
                                                                                class="add_input">Success</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="detail_id" value="3">
                                <div id="req_input2" class="datainputs">
                                    <input type="datetime-local" id="birthdaytime" name="time1[]" value="" multiple="">
                                    <input type="datetime-local" id="birthdaytime1" name="time2[]" value="" multiple="">
                                </div>
                                <a href="#" id="addmore2" class="add_input">Add more</a>
                                <button type="submit" class="add_input">Success</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="myModal9" class="modal">
            <div id="modal-content1" class="modal-content animation-1">
                <header class="modal-header">
                    <p class="modal-header-title"> Slots Only </p>
                    <button id="close9" class="modal-header-icon">
                        <span class="icon"><i class="bx bx-x"></i></span>
                    </button>
                </header>
                <div class="modal-body">
                    <div class="tabset">
                        <div class="row">
                            <form action="/submit-design" method="post">
                                <!-- <div class="slty">
            <div class="tnrt">
                <h5>Assign these dates/times to:</h5>
                <div>
                    <select class="form-select" aria-label="Default select example">
                        <option selected="">Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            
            </div> -->
                                <input type="hidden" name="detail_id" value="3">
                                <div class="col-md-3">
                                    <label for="exampleInputEmail1">Title of slot</label>
                                    <input type="text" class="form-control" name="tslot" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="col-md-3">
                                    <label for="exampleInputEmail1">Help Comment</label>
                                    <input type="text" class="form-control" name="help" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="">
                                </div>
                                <div class="col-md-2">
                                    <label for="exampleFormControlSelect1">Number</label>
                                    <input type="number" class="form-control" name="number" value="1">
                                </div>
                                <div class="col-md-4">
                                    <br>
                                    <ul class="form-control" style="position: relative;list-style: none;">
                                        <li class="button-dropdown">
                                            <a href="javascript:void(0)" class="dropdown-toggle fgfgrf">
                                                All Dates <i class="fas fa-calendar-alt"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <div class="select-dates-dropdown-container">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <h3 class="margin-bottom-10 ng-binding">Select Dates</h3>
                                                            <div class="input-group">
                                                                <span class="input-group-addon cursor-pointer">
                                                                    <i class="fas fa-search-plus"></i>
                                                                </span>
                                                                <input type="text"
                                                                    class="form-control ng-pristine ng-valid ng-empty ng-touched"
                                                                    style="">
                                                            </div>
                                                            <div>
                                                                <input type="checkbox"
                                                                    class="css-checkbox-chkbx-mini ng-pristine ng-untouched ng-valid ng-not-empty"
                                                                    id="slotdate_all_11">
                                                                <label class="chkbx-css-label-mini ng-binding"
                                                                    for="slotdate_all_11">All dates on sign up</label>
                                                            </div>
                                                            <div class="select-dates-dropdown-scrollable-content">
                                                                <div class="ng-scope">
                                                                    <input type="checkbox" name="slotdate_0_12"
                                                                        id="slotdate_0_12"
                                                                        class="css-checkbox-chkbx-mini select-dates-dropdown-checkbox ng-pristine ng-untouched ng-valid ng-not-empty">
                                                                    <label class="chkbx-css-label-mini ng-binding"
                                                                        for="slotdate_0_12">Thursday, 01/13/2022<br>@
                                                                        5:05 AM - 6:05 AM</label>
                                                                </div>
                                                                <div class="ng-scope">
                                                                    <input type="checkbox" name="slotdate_0_13"
                                                                        id="slotdate_0_13"
                                                                        class="css-checkbox-chkbx-mini select-dates-dropdown-checkbox ng-pristine ng-untouched ng-valid ng-not-empty">
                                                                    <label class="chkbx-css-label-mini ng-binding"
                                                                        for="slotdate_0_13">Thursday, 01/13/2022<br>@
                                                                        5:05 AM - 6:05 AM</label>
                                                                </div>
                                                            </div>
                                                            <div class="row margin-top-10 margin-bottom-10">
                                                                <div class="col-xs-12" style="text-align: center;">
                                                                    <button type="submit"
                                                                        class="add_input">Success</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </li>
                                    </ul>
                                </div>
                                <br><br>
                                <div style="margin-top: 30px; margin-left: 14px;"> <button type="submit"
                                        class="add_input">Success</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="myModal77" class="modal">
            <div id="modal-content1" class="modal-content animation-1">
                <header class="modal-header">
                    <p class="modal-header-title"> Slot Only </p>
                    <button id="close77" class="modal-header-icon">
                        <span class="icon"> <i class="bx bx-x"></i> </span>
                    </button>
                </header>
                <div class="modal-body">
                    <div id="exTab2">
                        <form action="/setting-table" method="post">
                            @csrf
                            <input type="hidden" name="detail_id" value="{{$detail['id']}}">
                            <div class="col-md-3">
                                <label for="exampleInputEmail1">Title of slot</label>
                                <input type="text" class="form-control" name="tslot" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" required="">
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
                                <input type="date" id="birthdaytime" name="date" value="" multiple="" required="">
                                <input type="time" id="birthdaytime" name="time1" value="" multiple="" required="">
                                <input type="time" id="birthdaytime1" name="time2" value="" multiple="" required="">
                            </div>
                            <!-- <a href="#" id="addmore5" class="add_input">Add more</a> -->
                            <button type="submit" class="add_input">Success</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="spacer-sm"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="btuntr" style="text-align: right; margin-bottom: 10px;">
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
                                        <path class="menu-icon-fill"
                                            d="M32.1,17.8L30.3,16c-0.1-0.1-0.2-0.1-0.3-0.1c-0.1,0-0.2,0-0.3,0.1l-4.9,4.9l-1.3,1.3c-0.1,0.1-0.2,0.1-0.3,0.1 c-0.1,0-0.2,0-0.3-0.1l-2.2-2.2c-0.1-0.1-0.2-0.1-0.3-0.1c-0.1,0-0.2,0-0.3,0.1l-1.8,1.8c-0.1,0.1-0.1,0.2-0.1,0.3c0,0.1,0,0.2,0.1,0.3l4.6,4.6c0.1,0.1,0.2,0.1,0.3,0.1c0.1,0,0.2,0,0.3-0.1l8.5-8.5c0.1-0.1,0.1-0.2,0.1-0.3 C32.3,17.9,32.2,17.8,32.1,17.8z M27.3,26.1V28h-10V18h7.4l2-2H15.3v14h14v-5.9L27.3,26.1z M5.3,16h8v-0.8c0-0.7,0.5-1.2,1.2-1.2 h12.1V4.7C26.7,4.3,26.4,4,26,4h-3.3v4c0,0.7-0.6,1.3-1.3,1.3h-16C4.6,9.3,4,8.7,4,8V4H0.7C0.3,4,0,4.3,0,4.7v32.7 C0,37.7,0.3,38,0.7,38H26c0.4,0,0.7-0.3,0.7-0.7V32H14.6c-0.7,0-1.2-0.5-1.2-1.2v-1.4h-8c-0.4,0-0.7-0.3-0.7-0.7v-1.3 c0-0.4,0.3-0.7,0.7-0.7h8V24h-8c-0.4,0-0.7-0.3-0.7-0.7V22c0-0.4,0.3-0.7,0.7-0.7h8v-2.7h-8c-0.4,0-0.7-0.3-0.7-0.7v-1.3 C4.7,16.3,5,16,5.3,16z M20,2.7h-2.6V1.4C17.3,0.7,16.7,0,16,0h-5.3C9.9,0,9.3,0.7,9.3,1.4v1.2H6.7C6,2.7,5.3,3.3,5.3,4v2.6 C5.3,7.4,6,8,6.7,8H20c0.7,0,1.4-0.6,1.4-1.3V4C21.3,3.3,20.7,2.7,20,2.7z">
                                        </path>
                                    </svg>
                            </a></li>
                        <li id="member-sidebar--menu-groupsid"><a href="#b" data-toggle="tab">
                                <div class="menu-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px"
                                        width="30px" height="38px" viewBox="0 0 40 28"
                                        style="enable-background:new 0 0 42 31;" xml:space="preserve">
                                        <path class="menu-icon-fill"
                                            d="M11.4,12.5c0.5,0,1-0.1,1.5-0.2c0-0.1,0-0.2,0-0.3c0-3.2,1.9-5.9,4.6-7.3C16.7,2,14.3,0,11.4,0 C7.9,0,5.2,2.8,5.2,6.2S7.9,12.5,11.4,12.5z M9.3,25.2c1.7-3.1,4.1-5.3,7.1-6.5c-0.4-0.3-0.8-0.6-1.2-1c-1-1-1.7-2.3-2.1-3.7c-0.4-0.1-0.9-0.1-1.4-0.1 c-0.9,0-1.8,0.1-2.2,0.3l-0.1,0c-4.3,1.1-7.2,3.8-9,8.6c-0.5,1.3-0.4,1.8-0.3,2c0.2,0.3,0.9,0.5,2,0.5C4.5,25.2,6.9,25.2,9.3,25.2z M41.9,24.7c0.2-0.4,0.1-1.2-0.4-2.5c-1.7-4.3-4.5-7-8.8-8.1c-0.5-0.1-1.1-0.2-1.8-0.2c-0.7,0-1.5,0.1-2,0.2 c-0.5,1.9-1.7,3.5-3.3,4.6c3.1,1.3,5.4,3.5,7,6.5c2.4,0,4.7,0,6.9,0C40.9,25.2,41.6,25.1,41.9,24.7z M26.8,6.3c1.5,1.6,2.4,3.6,2.4,5.8c0,0.1,0,0.2,0,0.3c0.5,0.1,0.9,0.2,1.4,0.2c3.4,0,6.2-2.8,6.2-6.2 S34.1,0,30.6,0c-2.9,0-5.3,2-6,4.7C25.4,5.1,26.2,5.6,26.8,6.3z M21.1,5.8C21.1,5.8,21,5.8,21.1,5.8c-3.5,0-6.3,2.8-6.3,6.2c0,3.4,2.8,6.3,6.2,6.3c0,0,0,0,0,0 c3.4,0,6.2-2.8,6.2-6.2C27.3,8.6,24.5,5.8,21.1,5.8z M23.1,19.9c-0.5-0.1-1.1-0.2-1.8-0.2c0,0,0,0-0.1,0c-0.9,0-1.7,0.1-2.2,0.3L19,20c-4.3,1-7.2,3.7-9,8.5 c-0.5,1.3-0.4,1.8-0.3,2c0.2,0.3,0.9,0.5,2,0.5c2.6,0,5.1,0,7.7,0c3.6,0,7.2,0,10.5,0c0,0,0,0,0.1,0c1.3,0,2.1-0.2,2.3-0.5 c0.2-0.4,0.1-1.2-0.4-2.5C30.2,23.7,27.3,21.1,23.1,19.9z">
                                        </path>
                                    </svg>
                                </div>
                            </a></li>
                    </ul>
                </div>
            </div>
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
                                                    -{{$detail['title']}}</small>
                                            </h1>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="btn-tabs">
                                                <button class="btn btn-tab kalubinding tablinks"
                                                    onclick="openCity(event, 'Lon')">Design</button>
                                                <button class="btn btn-tab kalubinding tablinks "
                                                    onclick="openCity(event, 'Lon11')">Slots</button>
                                                <button class="btn btn-tab kalubinding  tablinks active"
                                                    onclick="openCity(event, 'Lon23')">Settings</button>
                                                <button class="btn btn-tab kalubinding disabled">Publish</button>
                                            </div>
                                        </div>
                                        <div id="myModal2" class="modal">
                                            <div id="modal-content2" class="modal-content animation-1">
                                                <header class="modal-header">
                                                    <p class="modal-header-title"> Create New Group </p>
                                                    <button id="close2" class="modal-header-icon">
                                                        <span class="icon"> <i class="bx bx-x"></i> </span>
                                                    </button>
                                                </header>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Group Name</label>
                                                        <form method="post" action="/group-submit">
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
                                        <form action="/setting-table" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$detail['id']}}">
                                            <div id="Lon" class="tabcontent" style="display: none;">
                                                <div id="wizardStep1" class="l-wizard-step-1 kaluscope">
                                                    <div class="form-horizontal">
                                                        <div class="form-group feedback-group">
                                                            <label for="signuptitle"
                                                                class="col-xs-2 control-label text-left">Event Name</label>
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
                                                                <label>Event Description</label>
                                                            </div>
                                                            <div class="col-md-5 col-lg-5 col-sm-12">
                                                                <textarea class="form-control rounded-0" name="group"
                                                                    id="exampleFormControlTextarea1" rows="3"
                                                                    require>{{$detail['group']}} </textarea>
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
                                                                placeholder="Name" value="{{$detail['category']}} "
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
                                                </div>
                                                <div class="spacer"></div>
                                                <div class="col-xs-10">
                                                    <button class="tp-btn-register">Save and Continue</button>
                                                </div>
                                                <div class="col-xs-2 text-right">
                                                </div>
                                            </div>
                                        </form>
                                        <div id="Lon11" class="tabcontent " style="display: none;">
                                            <div id="wizardStepContainer" class="col-xs-12">
                                                <div class="kaluscope">
                                                    <style>
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
                                                            <form method="post" action="/setting-table">
                                                                @csrf
                                                                <input type="hidden" name="submit_id"
                                                                    value="{{$detail['id']}}">
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
                                                                        <p class="smalltext text-muted kalubinding"> For
                                                                            sign ups having one or more slots per
                                                                            date/time</p>
                                                                    </div>
                                                                    <div class="col-xs-3" style="display: none;">
                                                                        <div syle="margin-bottom: 5px;">
                                                                            <input class="tab-a" data-id="tab2"
                                                                                type="radio" id="css"
                                                                                name="fav_language" required=""
                                                                                value="sort_by_slot">
                                                                            <label for="css"><strong
                                                                                    class="kalubinding">Sort by
                                                                                    Slot</strong></label>
                                                                        </div>
                                                                        <p class="smalltext text-muted kalubinding"> For
                                                                            sign ups where people scan the slot before
                                                                            the date/time </p>
                                                                    </div>
                                                                    <div class="col-xs-3" style="display: none;">
                                                                        <div syle="margin-bottom: 5px;">
                                                                            <input class="tab-a" data-id="tab3"
                                                                                type="radio" id="css"
                                                                                name="fav_language" required=""
                                                                                value="slots_only">
                                                                            <label for="css"><strong
                                                                                    class="kalubinding">Slots
                                                                                    Only</strong></label>
                                                                        </div>
                                                                        <p class="smalltext text-muted kalubinding">For
                                                                            sign ups without a specific date or time
                                                                            involved</p>
                                                                    </div>
                                                                    <div class="col-xs-3">
                                                                        <div syle="margin-bottom: 5px;">
                                                                            <input class="tab-a" data-id="tab4"
                                                                                type="radio" id="css"
                                                                                name="fav_language" required=""
                                                                                value="single_date">
                                                                            <label for="css"><strong
                                                                                    class="kalubinding">Slot Only</strong></label>
                                                                        </div>
                                                                        <p class="smalltext text-muted kalubinding"> For
                                                                            a one slot event where you want to see who
                                                                            can attend</p>
                                                                    </div>
                                                                </div>
                                                                <div class="kaluscope tab tab-active" data-id="tab1">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <div id="myModal" class="modal">
                                                                                <div id="modal-conten"
                                                                                    class="modal-content animation-1">
                                                                                    <header class="modal-header">
                                                                                        <p class="modal-header-title">
                                                                                            Create New Group</p>
                                                                                        <button id="close"
                                                                                            class="modal-header-icon">
                                                                                            <span class="icon"><i
                                                                                                    class="bx bx-x"></i>
                                                                                            </span>
                                                                                        </button>
                                                                                    </header>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-6 col-sm-6">
                                                                                    <span class="pull-right">
                                                                                        <div id="open-modal7"
                                                                                            class=" Click-here">
                                                                                            <span
                                                                                                class="tp-btn-register glyphicon-plus">
                                                                                                Add Dates</span>
                                                                                        </div>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6">
                                                                                    <span class="pull-right">
                                                                                        <div id="open-modal17"
                                                                                            class=" Click-here">
                                                                                            <span
                                                                                                class="tp-btn-register glyphicon-plus">
                                                                                                Add Slots</span>
                                                                                        </div>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <?php use App\Models\addslot; ?>
                                                                            <table
                                                                                class="table table-bordered sTable ng-style:w2.style.themed.table;"
                                                                                style="background-color: rgb(90, 96, 117); border-width: 2px; border-color: rgb(255, 255, 255);">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th class="ng-style:w2.style.themed.th; borderless-lr ng-binding"
                                                                                            style="width: 250px; background-color: rgb(34 126 222); color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-top-width: 2px; border-top-style: solid; font-weight: bold; vertical-align: bottom;">
                                                                                            Dates/Times
                                                                                        </th>
                                                                                        <th class="ng-style:w2.style.themed.th; borderless-lr"
                                                                                            style="background-color: rgb(34 124 219); color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-top-width: 2px; border-top-style: solid; font-weight: bold; vertical-align: bottom;">
                                                                                            <!-- ngIf: w2.showLocation --><span
                                                                                                data-ng-if="w2.showLocation"
                                                                                                class="ng-scope">Location</span>
                                                                                            <!-- end ngIf: w2.showLocation -->
                                                                                        </th>
                                                                                        <th class="ng-style:w2.style.themed.th; borderless-lr"
                                                                                            style="background-color: rgb(34 126 222); color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-top-width: 2px; border-top-style: solid; font-weight: bold; vertical-align: bottom;">
                                                                                        </th>
                                                                                        <th class="ng-style:w2.style.themed.th; borderless-r"
                                                                                            style="background-color: rgb(34 126 222); color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-top-width: 2px; border-top-style: solid; font-weight: bold; vertical-align: bottom;">
                                                                                            Available Slot
                                                                                        </th>
                                                                                        <th class="ng-style:w2.style.themed.th; borderless-lr action-icon-wrap"
                                                                                            style="background-color: rgb(34 126 222); color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-top-width: 2px; border-top-style: solid; font-weight: bold; vertical-align: bottom;">
                                                                                        </th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <div class="modal modal_multi">
                                                                                    <!-- Modal content -->
                                                                                    <div class="modal-content">
                                                                                        <span
                                                                                            class="close close_multi">×</span>
                                                                                        <p>Some text in the Modal..</p>
                                                                                    </div>
                                                                                </div>
                                                                                @if(isset($adddate))
                                                                                <tbody class="black-shadow-active">
                                                                                    @foreach($adddate as $adddates)
                                                                                    <?php $slot_id = explode(',',$adddates['addslot_id']); ?>
                                                                                    <tr style="height:50px;"
                                                                                        class="ng-scope">
                                                                                        <td class="tcell tfirst date ng-style:w2.style.themed.td; borderless-lr align-top ng-binding ng-scope"
                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                            {{date('m/d/Y',strtotime($adddates['date']))}}
                                                                                            <div
                                                                                                class="ng-binding ng-scope">
                                                                                                ({{date('h:s A',strtotime($adddates['time1']))}}
                                                                                                <span
                                                                                                    class="ng-binding ng-scope">-
                                                                                                    {{date('h:s A',strtotime($adddates['time2']))}}</span>)
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="tcell ng-style:w2.style.themed.td; borderless-lr align-top ng-scope"
                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                            <span
                                                                                                class="ng-binding ng-isolate-scope">{{$adddates['location']}}</span>
                                                                                        </td>
                                                                                        <span
                                                                                            class="ng-binding ng-isolate-scope"></span>
                                                                                        </td>
                                                                                        <td class="tcell ng-style:w2.style.themed.td; borderless-l action-icon-wrap ng-scope"
                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                            <span
                                                                                                class="no-animate pull-right ng-scope">
                                                                                                <a href="/delete-date/{{$adddates['id']}}"
                                                                                                    class="tool-icon-link pull-right" onclick="return confirm('do you want to delete?')">
                                                                                                    <span
                                                                                                        class=" glyphicon glyphicon-remove table-icon mono ng-style:w2.style.themed.icon;"
                                                                                                        alt="Delete this date"
                                                                                                        style="color: rgb(255, 255, 255); text-shadow: rgb(172, 192, 52) 1px 1px;"></span>
                                                                                                </a>
                                                                                            </span>
                                                                                            <span
                                                                                                class="no-animate pull-right ng-scope">
                                                                                                <a href="/edit-date-setting/{{$adddates['id']}}"
                                                                                                    class="tool-icon-link pull-right">
                                                                                                    <span
                                                                                                        class="glyphicon glyphicon-pencil table-icon mono ng-style:w2.style.themed.icon;"
                                                                                                        alt="Edit date/location"
                                                                                                        style="color: rgb(255, 255, 255); text-shadow: rgb(172, 192, 52) 1px 1px;"></span>
                                                                                                </a>
                                                                                            </span>
                                                                                        </td>
                                                                                        <td class="table-wrapper ng-scope"
                                                                                            colspan="2" style="">
                                                                                            <table class="table">
                                                                                                <tbody>
                                                                                                    @if(!empty($adddates['addslot_id']) )
                                                                                                    @foreach($slot_id as
                                                                                                    $slot)
                                                                                                    <?php $addslots = addslot::where('id', $slot)->orderBy('tslot','ASC')->first(); ?>
                                                                                                    <tr style="height:50px;"
                                                                                                        class="ng-scope">
                                                                                                        <td class="ng-style:w2.style.themed.td; slot-name"
                                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                                            <span
                                                                                                                class="no-wrap ng-binding ng-isolate-scope">{{$addslots['tslot']}}</span>
                                                                                                            <span
                                                                                                                class="ng-binding ng-scope">({{$addslots['number']}})</span>
                                                                                                            <div
                                                                                                                class="ng-scope">
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="no-wrap ng-binding ng-scope ng-isolate-scope">
                                                                                                                {{$addslots['help']}}
                                                                                                            </div>
                                                                                                            <span class="no-animate pull-right ng-scope">
                                                                                                        <a href="/delete-slots-from-date/{{$addslots['id']}}/{{$adddates['id']}}" class="tool-icon-link pull-right" onclick="return confirm('do you want to delete?')">
                                                                                                            <span class=" glyphicon glyphicon-remove table-icon mono ng-style:w2.style.themed.icon;" alt="Delete this date" style="color: rgb(255, 255, 255); text-shadow: rgb(172, 192, 52) 1px 1px;"></span>
                                                                                                        </a>
                                                                                                    </span>
                                                                                                    <span class="no-animate pull-right ng-scope">
                                                                                                        <a href="/edit-rsvp-setting/{{$addslots['id']}}" class="tool-icon-link pull-right">
                                                                                                            <span class="glyphicon glyphicon-pencil table-icon mono ng-style:w2.style.themed.icon;" alt="Edit date/location" style="color: rgb(255, 255, 255); text-shadow: rgb(172, 192, 52) 1px 1px;"></span>
                                                                                                        </a>
                                                                                                    </span> 
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    @endforeach
                                                                                                    @else
                                                                                                    <tr style="height:50px;"
                                                                                                        class="ng-scope">
                                                                                                        <td class="ng-style:w2.style.themed.td; slot-name"
                                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                                            <span
                                                                                                                class="no-wrap ng-binding ng-isolate-scope"></span>
                                                                                                            <span
                                                                                                                class="ng-binding ng-scope"></span>
                                                                                                            <div
                                                                                                                class="ng-scope">
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="no-wrap ng-binding ng-scope ng-isolate-scope">
                                                                                                            </div>
                                                                                                            <span
                                                                                                                class="no-animate pull-right ">
                                                                                                            </span>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    @endif
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                    @endforeach
                                                                                </tbody>
                                                                                @else
                                                                                <tbody class="black-shadow-active">
                                                                                    <tr style="height:50px;"
                                                                                        class="ng-scope">
                                                                                        <td class="tcell tfirst date ng-style:w2.style.themed.td; borderless-lr align-top ng-binding ng-scope"
                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                            <div
                                                                                                class="ng-binding ng-scope">
                                                                                                <span
                                                                                                    class="ng-binding ng-scope">-
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="tcell ng-style:w2.style.themed.td; borderless-lr align-top ng-scope"
                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                            <span
                                                                                                class="ng-binding ng-isolate-scope"></span>
                                                                                        </td>
                                                                                        <td class="tcell ng-style:w2.style.themed.td; borderless-l action-icon-wrap ng-scope"
                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">

                                                                                        </td>
                                                                                        <td class="table-wrapper ng-scope"
                                                                                            colspan="2" style="">
                                                                                            <table class="table">
                                                                                                <tbody>
                                                                                                    <tr style="height:50px;"
                                                                                                        class="ng-scope">
                                                                                                        <td class="ng-style:w2.style.themed.td; slot-name"
                                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                                            <span
                                                                                                                class="no-wrap ng-binding ng-isolate-scope"></span>
                                                                                                            <span
                                                                                                                class="ng-binding ng-scope"></span>
                                                                                                            <div
                                                                                                                class="ng-scope">
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="no-wrap ng-binding ng-scope ng-isolate-scope">
                                                                                                            </div>

                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr style="height: 50px;"
                                                                                                        class="ng-scope">
                                                                                                        <td class="ng-style:w2.style.themed.td; slot-name"
                                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                                            <span
                                                                                                                class="no-wrap ng-binding ng-isolate-scope"></span>
                                                                                                            <span
                                                                                                                class="ng-binding ng-scope"></span>
                                                                                                            <div
                                                                                                                class="no-wrap ng-binding ng-scope ng-isolate-scope">
                                                                                                            </div>

                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr style="height: 50px;"
                                                                                                        class="ng-scope">
                                                                                                        <td class="ng-style:w2.style.themed.td; slot-name"
                                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                                            <span
                                                                                                                class="no-wrap ng-binding ng-isolate-scope">
                                                                                                            </span><span
                                                                                                                class="ng-binding ng-scope"></span>
                                                                                                            <div
                                                                                                                class="ng-scope">
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="no-wrap ng-binding ng-scope ng-isolate-scope">
                                                                                                            </div>

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
                                                                            '{{$detail['timezone']}}'.<br> </p>
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
                                                                            <div class="row">
                                                                                <div class="col-md-6 col-sm-6">
                                                                                    <span class="pull-right">
                                                                                        <div id="open-modal8"
                                                                                            class=" Click-here">
                                                                                            <span
                                                                                                class="tp-btn-register glyphicon-plus">
                                                                                                Add slots</span>
                                                                                        </div>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6">
                                                                                    <span class="pull-right">
                                                                                        <div id="open-modal18"
                                                                                            class=" Click-here">
                                                                                            <span
                                                                                                class="tp-btn-register glyphicon-plus">
                                                                                                Add Dates</span>
                                                                                        </div>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <table
                                                                                class="table table-bordered sTable ng-style:w2.style.themed.table;"
                                                                                style="background-color: rgb(90, 96, 117); border-width: 2px; border-color: rgb(255, 255, 255);">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th class="ng-style:w2.style.themed.th; borderless-lr ng-binding"
                                                                                            style="width: 250px; background-color: rgb(34 126 222); color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-top-width: 2px; border-top-style: solid; font-weight: bold; vertical-align: bottom;">
                                                                                            Available Slot
                                                                                        </th>
                                                                                        <th class="ng-style:w2.style.themed.th; borderless-lr"
                                                                                            style="background-color: rgb(34 126 222); color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-top-width: 2px; border-top-style: solid; font-weight: bold; vertical-align: bottom;">
                                                                                        </th>
                                                                                        <th class="ng-style:w2.style.themed.th; borderless-lr"
                                                                                            style="background-color: rgb(34 126 222); color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-top-width: 2px; border-top-style: solid; font-weight: bold; vertical-align: bottom;">
                                                                                        </th>
                                                                                        <th class="ng-style:w2.style.themed.th; borderless-r"
                                                                                            style="background-color: rgb(34 126 222); color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-top-width: 2px; border-top-style: solid; font-weight: bold; vertical-align: bottom;">
                                                                                            Dates/Times
                                                                                        </th>
                                                                                        <th class="ng-style:w2.style.themed.th; borderless-lr action-icon-wrap"
                                                                                            style="background-color: rgb(34 126 222); color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-top-width: 2px; border-top-style: solid; font-weight: bold; vertical-align: bottom;">
                                                                                        </th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody class="black-shadow-active">
                                                                                    <tr style="height:50px;"
                                                                                        class="ng-scope">
                                                                                        <td class="tcell tfirst date ng-style:w2.style.themed.td; borderless-lr align-top ng-binding ng-scope"
                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">

                                                                                            frdderfxex
                                                                                        </td>
                                                                                        <td class="tcell ng-style:w2.style.themed.td; borderless-lr align-top ng-scope"
                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                            <span
                                                                                                class="ng-binding ng-isolate-scope"></span>
                                                                                        </td>
                                                                                        <td class="tcell ng-style:w2.style.themed.td; borderless-l action-icon-wrap ng-scope"
                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                            <span
                                                                                                class="no-animate pull-right ng-scope">
                                                                                                <a href="#"
                                                                                                    class="tool-icon-link pull-right">
                                                                                                    <span
                                                                                                        class="glyphicon glyphicon-remove table-icon mono ng-style:w2.style.themed.icon;"
                                                                                                        alt="Delete this date"
                                                                                                        style="color: rgb(255, 255, 255); text-shadow: rgb(172, 192, 52) 1px 1px;"></span>
                                                                                                </a>
                                                                                            </span>
                                                                                            <span
                                                                                                class="no-animate pull-right ng-scope">
                                                                                                <a href="#"
                                                                                                    class="tool-icon-link pull-right">
                                                                                                    <span
                                                                                                        class="glyphicon glyphicon-pencil table-icon mono ng-style:w2.style.themed.icon;"
                                                                                                        alt="Edit date/location"
                                                                                                        style="color: rgb(255, 255, 255); text-shadow: rgb(172, 192, 52) 1px 1px;"></span>
                                                                                                </a>
                                                                                            </span>
                                                                                        </td>
                                                                                        <td class="table-wrapper ng-scope"
                                                                                            colspan="2" style="">
                                                                                            <table class="table">
                                                                                                <tbody>
                                                                                                    <tr style="height:50px;"
                                                                                                        class="ng-scope">
                                                                                                        <td class="ng-style:w2.style.themed.td; slot-name"
                                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                                            01/10/2022
                                                                                                            <div
                                                                                                                class="ng-binding ng-scope">
                                                                                                                (Mon.
                                                                                                                4:07 am
                                                                                                                <span
                                                                                                                    class="ng-binding ng-scope">-
                                                                                                                    5:07
                                                                                                                    am</span>)
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="ng-scope">
                                                                                                            </div>
                                                                                                            <span
                                                                                                                class="no-animate pull-right ng-scope">
                                                                                                                <a href="#"
                                                                                                                    class="tool-icon-link pull-right">
                                                                                                                    <span
                                                                                                                        class="glyphicon glyphicon-remove table-icon mono ng-style:w2.style.themed.icon;"
                                                                                                                        alt="Delete this date"
                                                                                                                        style="color: rgb(255, 255, 255); text-shadow: rgb(172, 192, 52) 1px 1px;"></span>
                                                                                                                </a>
                                                                                                            </span>
                                                                                                            <span
                                                                                                                class="no-animate pull-right ng-scope">
                                                                                                                <a href="#"
                                                                                                                    class="tool-icon-link pull-right">
                                                                                                                    <span
                                                                                                                        class="glyphicon glyphicon-pencil table-icon mono ng-style:w2.style.themed.icon;"
                                                                                                                        alt="Edit date/location"
                                                                                                                        style="color: rgb(255, 255, 255); text-shadow: rgb(172, 192, 52) 1px 1px;"></span>
                                                                                                                </a>
                                                                                                            </span>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr style="height: 50px;"
                                                                                                        class="ng-scope">
                                                                                                        <td class="tcell tfirst date ng-style:w2.style.themed.td; borderless-lr align-top ng-binding ng-scope"
                                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                                            01/10/2022
                                                                                                            <div
                                                                                                                class="ng-binding ng-scope">
                                                                                                                (Mon.
                                                                                                                4:07 am
                                                                                                                <span
                                                                                                                    class="ng-binding ng-scope">-
                                                                                                                    5:07
                                                                                                                    am</span>)
                                                                                                            </div>
                                                                                                            <span
                                                                                                                class="no-animate pull-right ng-scope">
                                                                                                                <a href="#"
                                                                                                                    class="tool-icon-link pull-right">
                                                                                                                    <span
                                                                                                                        class="glyphicon glyphicon-remove table-icon mono ng-style:w2.style.themed.icon;"
                                                                                                                        alt="Delete this date"
                                                                                                                        style="color: rgb(255, 255, 255); text-shadow: rgb(172, 192, 52) 1px 1px;"></span>
                                                                                                                </a>
                                                                                                            </span>
                                                                                                            <span
                                                                                                                class="no-animate pull-right ng-scope">
                                                                                                                <a href="#"
                                                                                                                    class="tool-icon-link pull-right">
                                                                                                                    <span
                                                                                                                        class="glyphicon glyphicon-pencil table-icon mono ng-style:w2.style.themed.icon;"
                                                                                                                        alt="Edit date/location"
                                                                                                                        style="color: rgb(255, 255, 255); text-shadow: rgb(172, 192, 52) 1px 1px;"></span>
                                                                                                                </a>
                                                                                                            </span>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr style="height: 50px;"
                                                                                                        class="ng-scope">
                                                                                                        <td class="ng-style:w2.style.themed.td; slot-name"
                                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                                            01/10/2022
                                                                                                            <div
                                                                                                                class="ng-binding ng-scope">
                                                                                                                (Mon.
                                                                                                                4:07 am
                                                                                                                <span
                                                                                                                    class="ng-binding ng-scope">-
                                                                                                                    5:07
                                                                                                                    am</span>)
                                                                                                            </div>
                                                                                                            <span
                                                                                                                class="no-animate pull-right ng-scope">
                                                                                                                <a href="#"
                                                                                                                    class="tool-icon-link pull-right">
                                                                                                                    <span
                                                                                                                        class="glyphicon glyphicon-remove table-icon mono ng-style:w2.style.themed.icon;"
                                                                                                                        alt="Delete this date"
                                                                                                                        style="color: rgb(255, 255, 255); text-shadow: rgb(172, 192, 52) 1px 1px;"></span>
                                                                                                                </a>
                                                                                                            </span>
                                                                                                            <span
                                                                                                                class="no-animate pull-right ng-scope">
                                                                                                                <a href="#"
                                                                                                                    class="tool-icon-link pull-right">
                                                                                                                    <span
                                                                                                                        class="glyphicon glyphicon-pencil table-icon mono ng-style:w2.style.themed.icon;"
                                                                                                                        alt="Edit date/location"
                                                                                                                        style="color: rgb(255, 255, 255); text-shadow: rgb(172, 192, 52) 1px 1px;"></span>
                                                                                                                </a>
                                                                                                            </span>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr style="height:50px;"
                                                                                        class="ng-scope">
                                                                                        <td class="tcell tfirst date ng-style:w2.style.themed.td; borderless-lr align-top ng-binding ng-scope"
                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                            cszczsfcszavfsz
                                                                        </div>
                                                                        </td>
                                                                        <td class="tcell ng-style:w2.style.themed.td; borderless-lr align-top ng-scope"
                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                            <span
                                                                                class="ng-binding ng-isolate-scope"></span>
                                                                        </td>
                                                                        <td class="tcell ng-style:w2.style.themed.td; borderless-l action-icon-wrap ng-scope"
                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                            <span
                                                                                class="no-animate pull-right ng-scope">
                                                                                <a href="#"
                                                                                    class="tool-icon-link pull-right">
                                                                                    <span
                                                                                        class="glyphicon glyphicon-remove table-icon mono ng-style:w2.style.themed.icon;"
                                                                                        alt="Delete this date"
                                                                                        style="color: rgb(255, 255, 255); text-shadow: rgb(172, 192, 52) 1px 1px;"></span>
                                                                                </a>
                                                                            </span>
                                                                            <span
                                                                                class="no-animate pull-right ng-scope">
                                                                                <a href="#"
                                                                                    class="tool-icon-link pull-right">
                                                                                    <span
                                                                                        class="glyphicon glyphicon-pencil table-icon mono ng-style:w2.style.themed.icon;"
                                                                                        alt="Edit date/location"
                                                                                        style="color: rgb(255, 255, 255); text-shadow: rgb(172, 192, 52) 1px 1px;"></span>
                                                                                </a>
                                                                            </span>
                                                                        </td>
                                                                        <td class="table-wrapper ng-scope" colspan="2"
                                                                            style="">
                                                                            <table class="table">
                                                                                <tbody>
                                                                                    <tr style="height:50px;"
                                                                                        class="ng-scope">
                                                                                        <td class="ng-style:w2.style.themed.td; slot-name"
                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                            01/10/2022
                                                                                            <div
                                                                                                class="ng-binding ng-scope">
                                                                                                (Mon. 4:07 am
                                                                                                <span
                                                                                                    class="ng-binding ng-scope">-
                                                                                                    5:07 am</span>)
                                                                                            </div>
                                                                                            <span
                                                                                                class="no-animate pull-right ng-scope">
                                                                                                <a href="#"
                                                                                                    class="tool-icon-link pull-right">
                                                                                                    <span
                                                                                                        class="glyphicon glyphicon-remove table-icon mono ng-style:w2.style.themed.icon;"
                                                                                                        alt="Delete this date"
                                                                                                        style="color: rgb(255, 255, 255); text-shadow: rgb(172, 192, 52) 1px 1px;"></span>
                                                                                                </a>
                                                                                            </span>
                                                                                            <span
                                                                                                class="no-animate pull-right ng-scope">
                                                                                                <a href="#"
                                                                                                    class="tool-icon-link pull-right">
                                                                                                    <span
                                                                                                        class="glyphicon glyphicon-pencil table-icon mono ng-style:w2.style.themed.icon;"
                                                                                                        alt="Edit date/location"
                                                                                                        style="color: rgb(255, 255, 255); text-shadow: rgb(172, 192, 52) 1px 1px;"></span>
                                                                                                </a>
                                                                                            </span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr style="height: 50px;"
                                                                                        class="ng-scope">
                                                                                        <td class="ng-style:w2.style.themed.td; slot-name"
                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                            01/10/2022
                                                                                            <div
                                                                                                class="ng-binding ng-scope">
                                                                                                (Mon. 4:07 am
                                                                                                <span
                                                                                                    class="ng-binding ng-scope">-
                                                                                                    5:07 am</span>)
                                                                                            </div>
                                                                                            <span
                                                                                                class="no-animate pull-right ng-scope">
                                                                                                <a href="#"
                                                                                                    class="tool-icon-link pull-right">
                                                                                                    <span
                                                                                                        class="glyphicon glyphicon-remove table-icon mono ng-style:w2.style.themed.icon;"
                                                                                                        alt="Delete this date"
                                                                                                        style="color: rgb(255, 255, 255); text-shadow: rgb(172, 192, 52) 1px 1px;"></span>
                                                                                                </a>
                                                                                            </span>
                                                                                            <span
                                                                                                class="no-animate pull-right ng-scope">
                                                                                                <a href="#"
                                                                                                    class="tool-icon-link pull-right">
                                                                                                    <span
                                                                                                        class="glyphicon glyphicon-pencil table-icon mono ng-style:w2.style.themed.icon;"
                                                                                                        alt="Edit date/location"
                                                                                                        style="color: rgb(255, 255, 255); text-shadow: rgb(172, 192, 52) 1px 1px;"></span>
                                                                                                </a>
                                                                                            </span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr style="height: 50px;"
                                                                                        class="ng-scope">
                                                                                        <td class="ng-style:w2.style.themed.td; slot-name"
                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                            01/10/2022
                                                                                            <div
                                                                                                class="ng-binding ng-scope">
                                                                                                (Mon. 4:07 am
                                                                                                <span
                                                                                                    class="ng-binding ng-scope">-
                                                                                                    5:07 am</span>)
                                                                                            </div>
                                                                                            <span
                                                                                                class="no-animate pull-right ng-scope">
                                                                                                <a href="#"
                                                                                                    class="tool-icon-link pull-right">
                                                                                                    <span
                                                                                                        class="glyphicon glyphicon-remove table-icon mono ng-style:w2.style.themed.icon;"
                                                                                                        alt="Delete this date"
                                                                                                        style="color: rgb(255, 255, 255); text-shadow: rgb(172, 192, 52) 1px 1px;"></span>
                                                                                                </a>
                                                                                            </span>
                                                                                            <span
                                                                                                class="no-animate pull-right ng-scope">
                                                                                                <a href="#"
                                                                                                    class="tool-icon-link pull-right">
                                                                                                    <span
                                                                                                        class="glyphicon glyphicon-pencil table-icon mono ng-style:w2.style.themed.icon;"
                                                                                                        alt="Edit date/location"
                                                                                                        style="color: rgb(255, 255, 255); text-shadow: rgb(172, 192, 52) 1px 1px;"></span>
                                                                                                </a>
                                                                                            </span>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                        </tr>
                                                                        </tbody>
                                                                        </table>
                                                                        <br>
                                                                       <p>
                                                                            NOTE: Dates are in mm/dd/yyyy.<br> Times
                                                                            are shown in
                                                                            '{{$detail['timezone']}}'.<br> </p>
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
                                                                            <div id="open-modal9" class=" Click-here">
                                                                                <span
                                                                                    class="tp-btn-register glyphicon-plus">
                                                                                    Add Slots</span>
                                                                            </div>
                                                                        </span>
                                                                    </div>
                                                                    <table
                                                                        class="table table-bordered sTable kalustyle:w2.style.themed.table;"
                                                                        style="background-color: rgb(90, 96, 117); border-width: 2px; border-color: rgb(255, 255, 255);">
                                                                        <thead>
                                                                            <tr>
                                                                                <th
                                                                                    style="background-color: rgb(34 126 222); color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-top-width: 2px; border-top-style: solid; font-weight: bold; vertical-align: bottom;">
                                                                                    Available Slot</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="black-shadow-active">
                                                                            <tr class="kaluscope">
                                                                                <td
                                                                                    style="width: 100%; background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                    ewefgtrht
                                                                                    <span
                                                                                        class="no-animate pull-right ng-scope">
                                                                                        <a href="#"
                                                                                            class="tool-icon-link pull-right">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-remove table-icon mono ng-style:w2.style.themed.icon;"
                                                                                                alt="Delete this date"
                                                                                                style="color: rgb(255, 255, 255); text-shadow: rgb(172, 192, 52) 1px 1px;"></span>
                                                                                        </a>
                                                                                    </span>
                                                                                    <span
                                                                                        class="no-animate pull-right ng-scope">
                                                                                        <a href="#"
                                                                                            class="tool-icon-link pull-right">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-pencil table-icon mono ng-style:w2.style.themed.icon;"
                                                                                                alt="Edit date/location"
                                                                                                style="color: rgb(255, 255, 255); text-shadow: rgb(172, 192, 52) 1px 1px;"></span>
                                                                                        </a>
                                                                                    </span>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <br>
                                                                    <p>
                                                                            NOTE: Dates are in mm/dd/yyyy.<br> Times
                                                                            are shown in
                                                                            '{{$detail['timezone']}}'.<br> </p>
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
                                                                        <div class="col-md-12 col-lg-12 col-sm-12">
                                                                            <div class="werfg">
                                                                                <span class="pull-right">
                                                                                    <div id="open-modal77"
                                                                                        class="btn Click-here">
                                                                                        <span
                                                                                            class="tp-btn-register glyphicon-plus">
                                                                                            Add Dates</span>
                                                                                    </div>
                                                                                </span>
                                                                            </div>
                                                                            <table
                                                                                class="table table-bordered sTable kalustyle:w2.style.themed.table;"
                                                                                style="background-color: rgb(90, 96, 117); border-width: 2px; border-color: rgb(255, 255, 255);">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th nowrap="" class=""
                                                                                            style="background-color: rgb(34 126 222); color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-top-width: 2px; border-top-style: solid; font-weight: bold; vertical-align: bottom;">
                                                                                            Available Slot</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                @if(isset($addslot))
                                                                                <tbody class="black-shadow-active">
                                                                                    @foreach($addslot as $addslots)
                                                                                    <tr class="kaluscope">
                                                                                        <td
                                                                                            style="width: 100%; background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                            {{$addslots['tslot']}}
                                                                                            ({{$addslots['number']}})

                                                                                            <span
                                                                                                class="no-animate pull-right ng-scope">
                                                                                                <a href="/edit-rsvp-setting/{{$addslots['id']}}"
                                                                                                    class="tool-icon-link pull-right">
                                                                                                    <span
                                                                                                        class="glyphicon glyphicon-pencil table-icon mono ng-style:w2.style.themed.icon;"
                                                                                                        alt="Edit date/location"
                                                                                                        style="color: rgb(255, 255, 255); text-shadow: rgb(172, 192, 52) 1px 1px;"></span>
                                                                                                </a>
                                                                                            </span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    @endforeach
                                                                                </tbody>
                                                                                @else
                                                                                <tbody class="black-shadow-active">
                                                                                    <tr class="kaluscope">
                                                                                        <td
                                                                                            style="width: 100%; background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                            <span
                                                                                                class="no-animate pull-right ng-scope">
                                                                                                <a href="#"
                                                                                                    class="tool-icon-link pull-right">
                                                                                                    <span
                                                                                                        class="glyphicon glyphicon-remove table-icon mono ng-style:w2.style.themed.icon;"
                                                                                                        alt="Delete this date"
                                                                                                        style="color: rgb(255, 255, 255); text-shadow: rgb(172, 192, 52) 1px 1px;"></span>
                                                                                                </a>
                                                                                            </span>
                                                                                            <span
                                                                                                class="no-animate pull-right ng-scope">
                                                                                                <a href="#"
                                                                                                    class="tool-icon-link pull-right">
                                                                                                    <span
                                                                                                        class="glyphicon glyphicon-pencil table-icon mono ng-style:w2.style.themed.icon;"
                                                                                                        alt="Edit date/location"
                                                                                                        style="color: rgb(255, 255, 255); text-shadow: rgb(172, 192, 52) 1px 1px;"></span>
                                                                                                </a>
                                                                                            </span>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                                @endif
                                                                                <tbody class="black-shadow-active">
                                                                                    <tr class="kaluscope">
                                                                                        <td
                                                                                            style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <!--<div class="col-md-6 col-lg-6 col-sm-12">-->
                                                                        <!--    <br>-->
                                                                        <!--    <br>-->
                                                                        <!--    <table-->
                                                                        <!--        class="table table-bordered sTable kalustyle:w2.style.themed.table;"-->
                                                                        <!--        style="background-color: rgb(90, 96, 117); border-width: 2px; border-color: rgb(255, 255, 255);">-->
                                                                        <!--        <thead>-->
                                                                        <!--            <tr>-->
                                                                        <!--                <th nowrap="" class=""-->
                                                                        <!--                    style="background-color: rgb(34 126 222); color: rgb(255, 255, 255); border-color: rgb(255, 255, 255); border-top-width: 2px; border-top-style: solid; font-weight: bold; vertical-align: bottom;">-->
                                                                        <!--                    RSVP Responses</th>-->
                                                                        <!--            </tr>-->
                                                                        <!--        </thead>-->
                                                                        <!--        <tbody class="black-shadow-active">-->
                                                                        <!--            <tr class="kaluscope">-->
                                                                        <!--                <td-->
                                                                        <!--                    style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">-->
                                                                        <!--                    Yes-->
                                                                        <!--                </td>-->
                                                                        <!--            </tr>-->
                                                                        <!--            <tr class="kaluscope">-->
                                                                        <!--                <td-->
                                                                        <!--                    style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">-->
                                                                        <!--                    Person 1 (2 Guests)-->
                                                                        <!--                </td>-->
                                                                        <!--            </tr>-->
                                                                        <!--            <tr class="kaluscope">-->
                                                                        <!--                <td-->
                                                                        <!--                    style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">-->
                                                                        <!--                    No-->
                                                                        <!--                </td>-->
                                                                        <!--            </tr>-->
                                                                        <!--            <tr class="kaluscope">-->
                                                                        <!--                <td-->
                                                                        <!--                    style="background-color: transparent; border-color: rgb(255, 255, 255); color: rgb(255, 255, 255);">-->
                                                                        <!--                    Person 2-->
                                                                        <!--                </td>-->
                                                                        <!--            </tr>-->
                                                                        <!--        </tbody>-->
                                                                        <!--    </table>-->
                                                                        <!--</div>-->
                                                                    </div>
                                                                    <br>
                                                                    <p>
                                                                            NOTE: Dates are in mm/dd/yyyy.<br> Times
                                                                            are shown in
                                                                            '{{$detail['timezone']}}'.<br> </p>
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
                                    <div id="Lon23" class="tabcontent active" style="display: block;">
                                        <div id="wizardStepContainer" class="col-xs-12" data-ng-show="w0.initialized">
                                            <form method="post" action="/setting-table">
                                               @csrf
                                                <div data-ng-include="w0.activetemplate" class="ng-scope">
                                                    <div class="l-wizard-step-3 ng-scope"
                                                        data-ng-controller="wizardStep3 as w3">
                                                        @if(Session::has('success'))
                                                    <div class="alert alert-success" role="alert"
                                                        style="color: black;font-size: 16;">
                                                        {{Session::get('success')}}
                                                        <button type="button" class="close" data-dismiss="alert"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    @endif
                                                    @if(Session::has('error'))
                                                    <div class="alert alert-danger" role="alert"
                                                        style="color: black;font-size: 16;">
                                                        {{Session::get('error')}}
                                                        <button type="button" class="close" data-dismiss="alert"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    @endif
                                                        <h2 class="hrow" style="margin-top:0px;">Ask Participants
                                                            For:</h2>
                                                        <div class="row">
                                                            <div class="col-xs-12 ask-participants-for-container">
                                                                <div
                                                                    class="row form-group ask-participants-for-wrapper">
                                                                    <div
                                                                        class="col-xs-6 col-lg-5 ask-participants-for-label">
                                                                        <span class="glyphicon glyphicon-ok text-orange"
                                                                            style="padding-right: 12px;"></span>
                                                                        <input type="checkbox" checked="" name="name"
                                                                            id="name" disabled="disabled"
                                                                            class="css-checkbox-chkbx-mini hideinline">
                                                                        <span class="hgroup">Name</span>
                                                                        <input type="checkbox" checked="" name="name"
                                                                            id="name" disabled="disabled"
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
                                                                        <span class="glyphicon glyphicon-ok text-orange"
                                                                            style="padding-right: 12px;"></span>
                                                                        <span class="hgroup">Email</span>
                                                                    </div>
                                                                    <div class="col-xs-2 ask-participants-for-option">
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
                                                                        <span class="glyphicon glyphicon-ok text-orange"
                                                                            style="padding-right: 12px;"></span>
                                                                        <span class="hgroup">Phone Number</span>
                                                                    </div>
                                                                    <div class="col-xs-2 ask-participants-for-option">
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
                                                <div class="col-xs-10">
                                            <button type="submit" class="tp-btn-register">Save and
                                                Continue</button>
                                        </div>
                                            </form>
                                        </div>
                                        
                                        <div class="c-genius-tips" genius-tips-container="">
                                            <div data-ng-show="displayGeniusTips"
                                                class="c-genius-tips--tip-container is-open ng-hide"
                                                data-ng-class="{'is-expanded':displayLearnMore}" style="bottom: 309px;">
                                                <!-- ngRepeat: tip in arrGeniusTips -->
                                            </div>
                                            <div class="c-genius-tips--tip-anchor"></div>
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
        padding: 20px 40px;
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
    var modal17 = document.getElementById("myModal17");

    var btn17 = document.getElementById("open-modal17");

    var span17 = document.getElementById("close17");

    btn17.onclick = function() {
        modal17.style.display = "block";
    }
    span17.onclick = function() {
        modal17.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal17.style.display = "none";
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
    var modal18 = document.getElementById("myModal18");

    var btn18 = document.getElementById("open-modal18");

    var span18 = document.getElementById("close18");

    btn18.onclick = function() {
        modal18.style.display = "block";
    }
    span18.onclick = function() {
        modal18.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal18.style.display = "none";
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
    var modal77 = document.getElementById("myModal77");

    var btn77 = document.getElementById("open-modal77");

    var span77 = document.getElementById("close77");

    btn77.onclick = function() {
        modal77.style.display = "block";
    }
    span77.onclick = function() {
        modal77.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal77.style.display = "none";
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
                '<div class="required_inp"><input type="date" name="date[]" value="" multiple required=""><input type="time" name="time1[]" value="" multiple required=""><input type="time" name="time2[]" value="" multiple required=""><input type="text" name="location[]" value="" placeholder="location" multiple>' +
                '<input type="button" class="inputRemove" value="Remove"/></div>');
        });
        $("#addmore1").click(function() {
            $("#req_input1").append(
                '<div class="required_inp"><input type="datetime-local" name="time1[]" value="" multiple required=""><input type="datetime-local" name="time2[]" value="" multiple required="">' +
                '<input type="button" class="inputRemove" value="Remove"/></div>');
        });
        $("#addmore2").click(function() {
            $("#req_input2").append(
                '<div class="required_inp"><input type="datetime-local" name="time1[]" value="" multiple required=""><input type="datetime-local" name="time2[]" value="" multiple required="">' +
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
    <script>
    jQuery(document).ready(function(e) {
        function t(t) {
            e(t).bind("click", function(t) {
                t.preventDefault();
                e(this).parent().fadeOut()
            })
        }
        e(".dropdown-toggle").click(function() {
            var t = e(this).parents(".button-dropdown").children(".dropdown-menu").is(":hidden");
            e(".button-dropdown .dropdown-menu").hide();
            e(".button-dropdown .dropdown-toggle").removeClass("active");
            if (t) {
                e(this).parents(".button-dropdown").children(".dropdown-menu").toggle().parents(
                    ".button-dropdown").children(".dropdown-toggle").addClass("active")
            }
        });
        e(document).bind("click", function(t) {
            var n = e(t.target);
            if (!n.parents().hasClass("button-dropdown")) e(".button-dropdown .dropdown-menu").hide();
        });
        e(document).bind("click", function(t) {
            var n = e(t.target);
            if (!n.parents().hasClass("button-dropdown")) e(".button-dropdown .dropdown-toggle")
                .removeClass("active");
        })
    });
    </script>
</body>

</html>