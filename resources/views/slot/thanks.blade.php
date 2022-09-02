<!DOCTYPE html>
<html data-ng-app="SUGApp" lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thanks Page</title>
    <script type="text/javascript"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="slot/dist/css/SUGstyleV3-responsive.minf4a1.css?v=1636996767345">

    <script type="text/javascript" src="slot/dist/js/lib/jquery-1.11.1.minf4a1.js?v=1636996767345"></script>
</head>
<style>table { 
	width: 750px; 
	border-collapse: collapse; 
	margin:50px auto;
	}

/* Zebra striping */
tr:nth-of-type(odd) { 
	background: #eee; 
	}

th { 
	background: #3498db; 
	color: white; 
	font-weight: bold; 
	}

td, th { 
	padding: 10px; 
	border: 1px solid #ccc; 
	text-align: left; 
	font-size: 18px;
	}

/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	table { 
	  	width: 100%; 
	}

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}

	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
		/* Label the data */
		content: attr(data-column);

		color: #000;
		font-weight: bold;
	}

}</style>
  <style>
    footer {
    margin-top: 0px !important;
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
    z-index: 1;
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
    .tabs {
    max-width: 538px;
    }
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

<body>
    @include('slot/layout.header')
    <section style="background: #1eb5ff3d;">
        <div class="background" style="padding-top: 40px; padding-bottom: 40px;">
            <div class="container">
               
               <h1 style="color: #ACC034;">
                {{$referral['member_firstname']}} {{$referral['member_lastname']}}</h1><br>
                <h2 style="font-weight: bold;">
                    You're all signed up for {{$signup['title']}}.</h2>
                    <p  style="font-weight: bold;">A confirmation email has been sent to you.</p><br>
                    <br>
                  
                   <br>
                  
                    <p style="font-weight: bold;"> My Sign Up: <span>@if($referral['comment']){{$referral['comment']}}@endif</span></p><br>
                   <strong>Slot Name:</strong>   <p style="font-weight: bold;" >{{$addslot['tslot']}}</p>
                        <br>
                   <strong>Date:</strong> <p style="font-weight: bold;">
                        {{date('d-m-y', strtotime($adddate['date']))}}, &nbsp;&nbsp;&nbsp; 
                        </p><br>
                      <strong>Time:</strong>  <p>{{date('h:i A', strtotime($adddate['time1']))}}-{{date('h:i A', strtotime($adddate['time2']))}}</p>
                        <br>
                        <!-- <button type="submit" class="btn btn-success">Success</button>
                        <br> -->
            </div>

        </div>
    </section>
    <?php Session::forget('rererral_id'); ?>
    
   @include('slot/layout.footer')
    <div id="myModal1" class="modal">
        <div id="modal-content1" class="modal-content animation-1">
            
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
                            <button type="submit" class="add_input">Success</button>
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
                            <button type="submit" class="add_input">Success</button>
                        </section>

                    </div>

                </div>


            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>



</body>

</html>