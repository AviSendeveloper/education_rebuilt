<?php use App\Models\addslot; ?>
<?php use App\Models\referral; ?>
<!DOCTYPE html>
<html data-ng-app="SUGApp" lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Referral Table</title>
    <script type="text/javascript"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('slot/dist/css/SUGstyleV3-responsive.minf4a1.css?v=1636996767345')}}">

    <script type="text/javascript" src="{{asset('slot/dist/js/lib/jquery-1.11.1.minf4a1.js?v=1636996767345')}}">
    </script>
</head>

<style>
table.SUGtableouter {
    border-width: 2px 2px 2px 2px;
    border-style: solid solid solid solid;
    border-color: #FFFFFF #FFFFFF #FFFFFF #FFFFFF;
    -moz-border-radius: 0px 0px 0px 0px;
    background-color: rgb(90, 96, 117);
}

td.SUGtableheader {
    border-width: 1px 1px 1px 1px;
    padding: 8px 5px 8px 5px;
    border-style: solid solid solid solid;
    border-color: #FFFFFF #FFFFFF #FFFFFF #FFFFFF;
    -moz-border-radius: 0px 0px 0px 0px;
    font-family: Helvetica, Arial, sans-serif;
    font-size: 12pt;
    font-weight: bold;
    color: #FFFFFF !important;
    background-color: rgb(34 126 222);
}

td.SUGtable {
    border-width: 1px 1px 1px 1px;
    padding: 5px 5px 5px 5px;
    border-style: solid solid solid solid;
    border-color: #FFFFFF #FFFFFF #FFFFFF #FFFFFF;
    -moz-border-radius: 0px 0px 0px 0px;
}

.SUGbigbold {
    font-family: Helvetica, Arial, sans-serif;
    font-size: 12pt;
    font-weight: bold;
    line-height: 16pt;
    color: #FFFFFF;
}

.SUGbutton {
    padding: 6px 15px 6px 15px;
    border: 1px solid #FFFFFF;
    background-color: rgb(34 126 222);
    font-family: Helvetica, Arial, sans-serif;
    font-size: 11pt;
    font-weight: 700;
    color: #FFFFFF;
    background-image: url(/images/spacer.gif);
}

.SUGcomment,
.SUGMemberComment {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 10pt;
    line-height: 14pt;
    color: #ACC034;
    margin-top: 2px;
    margin-bottom: 4px;
    display: block;
}
</style>

<body>
    @include('slot/layout.header')
    <section style="background: #1eb5ff3d;">
        <div class="background" style="padding-top: 40px; padding-bottom: 40px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-5 col-sm-12">
                        <img src="{{asset('signups/image')}}/{{($signup->image)}}" alt="" style="width:100%;">
                    </div>
                    <div class="col-md-7 col-lg-7 col-sm-12">
                        <h2>{{$signup->title}}</h2>
                        <p>{{$signup->group}}</p>
                        <p>Created by: {{$signup->category}} </p>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('success')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        @if(Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{Session::get('error')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <br>
                        <div>
                            <table width="100%" cellspacing="0" align="center" class="SUGtableouter">
                                <tbody>
                                    <tr>
                                        <td height="35" class="SUGtableheader">Date <span
                                                class="SUGheaddate">(mm/dd/yyyy)</span></td>
                                        <td height="35" class="SUGtableheader">
                                            Location
                                        </td>
                                        <td height="35" class="SUGtableheader">Time
                                            <span class="SUGheaddate">({{$signup['timezone']}})</span>
                                        </td>
                                        <td height="35" class="SUGtableheader">
                                            Available Slot <span class="SUGheaddate"></span>
                                        </td>
                                    </tr>
                                    @foreach ($adddate as $day => $add)
                                    <?php 
                                                    $count = count($add);
                                                          $ls = $count+1; 
                                                    
                                                    ?>
                                    <tr>
                                        <td class="SUGtable" valign="top" rowspan="{{$ls}}"
                                            style="padding-top:10px;padding-bottom:10px;">
                                            <span class="SUGbigbold">{{date('m/d/Y',strtotime($day))}}(Tue.)</span>
                                        </td>
                                    </tr>

                                    @foreach ($add as $addss)
                                    <?php 
                                                   $explode = explode(',',$addss['addslot_id']); 
                                                   ?>
                                    <tr>
                                        <td class="SUGtable enforce-wrap" valign="top" rowspan="1"
                                            style="padding-top:10px;">
                                            <span class="SUGbigbold">&nbsp;{{$addss['location']}}</span>
                                        </td>
                                        <td class="SUGtable" valign="top" style="padding-top:10px;padding-bottom:10px;">
                                            <span class="SUGbigbold">
                                            {{date('h:i A', strtotime($addss['time1']))}} - {{date('h:i A', strtotime($addss['time2']))}} &nbsp;</span>
                                        </td>
                                        <td class="SUGtable" valign="top" width="45%">
                                            <table width="100%" cellpadding="2" cellspacing="0">
                                                <tbody>
                                                    @foreach($explode as $slots)
                                                    <?php  $addsloting = addslot::where('id', $slots)->first(); ?>
                                                    <tr>
                                                        <td valign="top" width="48%" style="padding-top:10px;">
                                                            @if (isset($addsloting['tslot']))
                                                            <p class="SUGbigbold hrow">{{$addsloting['tslot']}} ({{$addsloting['number']}}) </p>
                                                            @else
                                                            <p class="SUGbigbold hrow"></p>
                                                            @endif
                                                            <p class="SUGsmall hrow">
                                                            </p>
                                                           
                                                            <?php $refer = referral::where('addslot_id',$addsloting['id'])->where('adddate_id',$addss['id'])->get(); 
                                                                // swarna($refer);
                                                            ?>
                                                            @if(isset($refer))
                                                            @foreach($refer as $refers)
                                                            <div style="display: flex;">
                                                            <div class="ppic ppic-30 bs" style="background-color: #ACC034 !important; color: #FFFFFF !important;"> {{substr($refers['member_firstname'], 0, 1)}}{{substr($refers['member_lastname'], 0, 1)}} </div>
                                                            &nbsp;&nbsp;<p class="SUGcomment hrow">{{$refers['member_firstname']}} {{$refers['member_lastname']}}</p>
                                                            </div>
                                                            <br>
                                                            @endforeach
                                                            @endif
                                                        </td>
                                                        <td width="4%" valign="top">
                                                            &nbsp;
                                                        </td>
                                                        <td valign="top" width="48%">
                                                            <div class="SUGbuttonContainer link_cursor"
                                                                style="margin-top:10px;">
                                                                <span class="SUGbutton rounded">
                                                                  <a href="/process/{{$addss['id']}}/{{$slots}}"> <span>Sign
                                                                        Up&nbsp;</span></a> 
                                                                    <input name="siid" type="checkbox"
                                                                        value="1066270061" id="checkbox1066270061"
                                                                        style="vertical-align: middle;position:relative;bottom:3px;">
                                                                </span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    
    <div id="myModal1" class="modal">
        <div id="modal-content1" class="modal-content animation-1">
            <header class="modal-header">
                <p class="modal-header-title">
                    Create New Group2
                </p>
                <button id="close1" class="modal-header-icon">
                    <span class="icon">
                        <i class="bx bx-x"></i>
                    </span>
                </button>
            </header>
            <!-- Modal body -->
            <div class="modal-body">


                <div class="tabset">
                    <!-- Tab 1 -->
                    <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
                    <label for="tab1">Märzen</label>
                    <!-- Tab 2 -->
                    <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
                    <label for="tab2">Rauchbier</label>
                    <!-- Tab 3 -->


                    <div class="tab-panels">
                        <section id="marzen" class="tab-panel">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1">Title of slot</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1">Help Comment</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="col-md-4">
                                    <label for="exampleFormControlSelect1">Number Wanted</label>
                                    <input type="number" class="form-control" name="number" value="1">
                                </div>

                            </div>

                            <br>



                            <div id="req_input" class="datainputs">
                                <input type="datetime-local" id="birthdaytime" name="birthdaytime">
                                <input type="datetime-local" id="birthdaytime" name="birthdaytime">
                            </div>

                            <a href="#" id="addmore" class="add_input">Add more</a>
                            <button type="submit" class="btn btn-success">Success</button>
                        </section>
                        <section id="rauchbier" class="tab-panel">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1">Title of slot</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1">Help Comment</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="col-md-4">
                                    <label for="exampleFormControlSelect1">Number Wanted</label>
                                    <input type="number" class="form-control" name="number" value="1">
                                </div>

                            </div>
                            <div id="req_input1" class="datainputs">
                                <input type="datetime-local" id="birthdaytime" name="birthdaytime">
                                <input type="datetime-local" id="birthdaytime" name="birthdaytime">
                            </div>

                            <a href="#" id="addmore1" class="add_input">Add more</a>
                            <button type="submit" class="btn btn-success">Success</button>
                        </section>

                    </div>

                </div>


            </div>
        </div>
    </div>
    </div>
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



</body>

</html>