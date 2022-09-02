<!DOCTYPE html>
<html lang="en">

<head>
    <meta charSet="utf-8" />
     <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="stylesheet" href="{{asset('_next/static/css/style-gread1.css')}}">
    <link rel="stylesheet" href="{{asset('_next/static/css/style-gread2.css')}}">
    <link rel="stylesheet" href="{{asset('_next/static/css/style-gread3.css')}}">
    <link rel="stylesheet" href="{{asset('_next/static/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('_next/static/css/style2.css')}}">
    <link rel="stylesheet" href="{{asset('_next/static/css/bootstrap.min.css')}}">
    <link rel="preconnect" href="https://www.google-analytics.com/analytics.js">

    <link rel="preload" href="../_next/static/css/de79cee5857d13c6dd3a.css" as="style" />
    <link rel="stylesheet" href="../_next/static/css/de79cee5857d13c6dd3a.css" />
    <link rel="preload" href="../_next/static/css/948bd495162824a1e75b0f407256f639d3726e33_CSS.de79cee5.chunk.css"
        as="style" />
    <link rel="stylesheet" href="../_next/static/css/948bd495162824a1e75b0f407256f639d3726e33_CSS.de79cee5.chunk.css" />
    <link rel="preload" href="../_next/static/css/42ed995f3f9c450642ce.css" as="style" />
    <link rel="stylesheet" href="../_next/static/css/42ed995f3f9c450642ce.css" />
    <link rel="preload" href="../_next/static/css/styles.42ed995f.chunk.css" as="style" />
    <link rel="stylesheet" href="../_next/static/css/styles.42ed995f.chunk.css" />
    <link rel="preload" href="../_next/static/css/44495ce05e15228a2271.css" as="style" />
    <link rel="stylesheet" href="../_next/static/css/44495ce05e15228a2271.css" />
    <link rel="stylesheet" href="{{asset('_next/static/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
 {{-- header --}}
 <link rel="stylesheet" href="assets1/css/quick.css">
  <link rel="stylesheet" href="assets1/css/quick2.css">
  <link rel="stylesheet" href="assets1/css/lightbox.min.css">
  <link rel="stylesheet" href="assets1/css/style-ext.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    (function() {
        var ga_data = {};


        ga('create', 'UA-5641939-1', ga_data);

        // DC Integration
        ga('require', 'displayfeatures');

        var dimensions = {};
        dimensions = {
            "dimension4": "none",
            "dimension17": "Content",
            "dimension16": "workbook",
            "dimension14": "comparing-two-digit-numbers, creative-writing, early-writing-practice, two-digit-numbers, early-literacy-concepts, fiction-writing, genre-writing, writing, reading, number-sense, ela, math",
            "dimension15": "Math, Reading & writing",
            "dimension6": "first-grade",
            "contentGroup1": "first-grade"
        }
        // Add cid from session
        var cid = window.sessionStorage.getItem('cid');
        if (cid) {
            dimensions["dimension1"] = cid;
        }
        var current_cid = window.sessionStorage.getItem('current_cid');
        if (current_cid) {
            dimensions["dimension2"] = current_cid;
        }

        ga('set', dimensions);

        ga('send', 'pageview');

    })();
    </script>
    <!-- End Google Analytics -->


    <script>
    (function() {
        /* dataLayer for Google Tag Manager */
        window.dataLayer = [];

        var dimensions = {
            "dimension4": "none",
            "dimension17": "Content",
            "dimension16": "workbook",
            "dimension14": "comparing-two-digit-numbers, creative-writing, early-writing-practice, two-digit-numbers, early-literacy-concepts, fiction-writing, genre-writing, writing, reading, number-sense, ela, math",
            "dimension15": "Math, Reading & writing",
            "dimension6": "first-grade",
            "contentGroup1": "first-grade"
        } || {};

        // Add cid from session
        var cid = window.sessionStorage.getItem('cid');
        if (cid) {
            dimensions["dimension1"] = cid;
        }
        var current_cid = window.sessionStorage.getItem('current_cid');
        if (current_cid) {
            dimensions["dimension2"] = current_cid;
        }

        for (var i in dimensions) {
            if (dimensions.hasOwnProperty(i)) {
                var obj = {};
                obj[i] = "" + dimensions[i];
                window.dataLayer.push(obj);
            }
        }
    })();
    </script>

</head>
<style>
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 30px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.4);
}

.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 50%;
}

.close {
    color: #0c0b0b;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.rterewtr p {
    font-size: 15px;
    color: #066b99;
}

.rterewtr {
    margin-bottom: 15px;
}

footer {
    margin: 70px 0 0 0;
    background: #2B2B2B;
}

.footer_inner {
    padding-top: 70px;
    padding-bottom: 30px;

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

.footer_inner ul {
    margin: 0;
    padding: 0;
}

.footer_inner ul li {
    margin: 0 0 8px 0;
    padding: 0;
    list-style-type: none;
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

.contact_footer_box p.message {
    background: url('../_next/static/img/message.png') no-repeat left center;
}

.contact_footer_box p.address {
    background: url('../_next/static/img/location.png') no-repeat left center;
}

.copy_right {
    padding: 20px 0;
    border-top: 1px solid #3a3b3d;
}

.copy_right_inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
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

.gtyur {
    margin: 10px 0px;
}

.Tag-module_tagBody_3Vvf9.active {
    background: #007bff !important;
}

.Tag-module_tagBody_3Vvf9.active a {
    color: #fff !important;
}
</style>

<body>

    @include('layout.header')



    <div class="banner-notifications-container"></div>


    <main id='content'>
        <a class="anchor" name="anchor_11270"></a>


        <div id="pmid_11270" class="WorkbookContentDetail">


            <div class="content-detail-container">



                <div class="content-holder">




                    <script>
                    (window.dataLayer || []).push({
                        'dimension14': ["comparing-two-digit-numbers", "creative-writing",
                            "early-writing-practice", "two-digit-numbers", "early-literacy-concepts",
                            "fiction-writing", "genre-writing", "writing", "reading", "number-sense", "ela",
                            "math"
                        ]
                    });
                    </script>


                    <script>
                    // Creating the facebook view content event
                    (window.dataLayer || []).push({
                        event: 'GAEvent',
                        eventAction: 'ViewContent',
                        eventContentType: 'workbook',
                        eventContentIds: '174794',
                        eventValue: 0
                    });
                    </script>

                    <section class="page-width content-detail">
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
                        <div class="container">
                            <div class="content-type">
                                <h3 class="vertical-align-text">

                                    <!-- <span>Workbook</span> -->
                                </h3>
                            </div>
                            <h1 style="font-size: 40px;
                            line-height: 1.25;
                            color: #009DFC;">{{$subjectDetails['name']}}</h1>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <div class="main-thumbnail">
                                        <img src="{{asset('uploads/image')}}/{{$subjectDetails['image']}}" alt=""
                                            style="width: 100%;">
                                        <!-- <a href="/download/{{$subjectDetails['id']}}"><button
                                                class="btn btn-warning">Download</button></a> -->
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <div class="content-info">
                                        <div class="description">
                                            <p>{{$subjectDetails['description']}}</p>
                                          	@if (isset($subjectDetails['grade']))
                                            	<p>Grade - {{$subjectDetails['grade']}}</p>
                                          	@endif
                                          	@if (isset($subjectDetails['school']))
                                            	<p>School - {{$subjectDetails['school']}}</p>
                                          	@endif
                                            <div class="book-info">

                                            </div>
                                        </div>
                                        <button
                                            class="react-signup download-link btn btn-primary btn-lg" > <a style="color:#fff;" href="/download/{{$subjectDetails['id']}}"> Download File</a>
                                        </button>
                                        <br><br>
                                      	@if (Auth::check())
                                        &nbsp;&nbsp;&nbsp;<a class="ftry" href="https://www.facebook.com/sharer/sharer.php?u=https://parentteacherhub.com/{{$subjectDetails['slug']}}&display=popup" target="blank"><i class="fab fa-facebook-f "></i></a>
                                      	&nbsp;<a class="ftry" href="https://api.whatsapp.com/send?text=https://parentteacherhub.com/{{urlencode($subjectDetails['slug']) }}" target="blank"><i class="fab fa-whatsapp"></i></a>
                                      	@else
                                      	&nbsp;&nbsp;&nbsp;<a class="ftry" href="/redirect-login"><i class="fab fa-facebook-f "></i></a>
                                      	&nbsp;<a class="ftry" href="/redirect-login"><i class="fab fa-whatsapp"></i></a>
                                      	@endif

<style>
.comments-container {
		margin: 60px auto 15px;
		width: 768px;
	}

	.comments-container h1 {
		font-size: 36px;
		color: #283035;
		font-weight: 400;
	}

	.comments-container h1 a {
		font-size: 18px;
		font-weight: 700;
	}

	.comments-list {
		margin-top: 30px;
		position: relative;
	}

	.comments-list:before {
		content: '';
		width: 2px;
		height: 100%;
		background: #c7cacb;
		position: absolute;
		left: 32px;
		top: 0;
	}

	.comments-list:after {
		content: '';
		position: absolute;
		background: #c7cacb;
		bottom: 0;
		left: 27px;
		width: 7px;
		height: 7px;
		border: 3px solid #dee1e3;
		-webkit-border-radius: 50%;
		-moz-border-radius: 50%;
		border-radius: 50%;
	}

	.reply-list:before, .reply-list:after {display: none;}
	.reply-list li:before {
		content: '';
		width: 60px;
		height: 2px;
		background: #c7cacb;
		position: absolute;
		top: 25px;
		left: -55px;
	}


	.comments-list li {
		margin-bottom: 15px;
		display: block;
		position: relative;
	}

	.comments-list li:after {
		content: '';
		display: block;
		clear: both;
		height: 0;
		width: 0;
	}

	.reply-list {
		padding-left: 88px;
		clear: both;
		margin-top: 15px;
	}

	.comments-list .comment-avatar {
		width: 65px;
		height: 65px;
		position: relative;
		z-index: 99;
		float: left;
		border: 3px solid #FFF;
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;
		border-radius: 4px;
		-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
		-moz-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
		box-shadow: 0 1px 2px rgba(0,0,0,0.2);
		overflow: hidden;
	}

	.comments-list .comment-avatar img {
		width: 100%;
		height: 100%;
	}

	.reply-list .comment-avatar {
		width: 50px;
		height: 50px;
	}

	.comment-main-level:after {
		content: '';
		width: 0;
		height: 0;
		display: block;
		clear: both;
	}

	.comments-list .comment-box {
		width: 680px;
		float: right;
		position: relative;
		-webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.15);
		-moz-box-shadow: 0 1px 1px rgba(0,0,0,0.15);
		box-shadow: 0 1px 1px rgba(0,0,0,0.15);
		background-color: #FFF;
	}

	.comments-list .comment-box:before, .comments-list .comment-box:after {
		content: '';
		height: 0;
		width: 0;
		position: absolute;
		display: block;
		border-width: 10px 12px 10px 0;
		border-style: solid;
		border-color: transparent #FCFCFC;
		top: 8px;
		left: -11px;
	}

	.comments-list .comment-box:before {
		border-width: 11px 13px 11px 0;
		border-color: transparent rgba(0,0,0,0.05);
		left: -12px;
	}

	.reply-list .comment-box {
		width: 610px;
	}
	.comment-box .comment-head {
		background: #FCFCFC;
		padding: 10px 12px;
		border-bottom: 1px solid #E5E5E5;
		overflow: hidden;
		-webkit-border-radius: 4px 4px 0 0;
		-moz-border-radius: 4px 4px 0 0;
		border-radius: 4px 4px 0 0;
	}

	.comment-box .comment-head i {
		float: right;
		margin-left: 14px;
		position: relative;
		top: 2px;
		color: #A6A6A6;
		cursor: pointer;
		-webkit-transition: color 0.3s ease;
		-o-transition: color 0.3s ease;
		transition: color 0.3s ease;
	}

	.comment-box .comment-head i:hover {
		color: #03658c;
	}

	.comment-box .comment-name {
		color: #283035;
		font-size: 14px;
		font-weight: 700;
		float: left;
		margin-right: 10px;
	}

	.comment-box .comment-name a {
		color: #283035;
	}

	.comment-box .comment-head span {
		float: left;
		color: #999;
		font-size: 13px;
		position: relative;
		top: 1px;
	}

	.comment-box .comment-content {
		background: #FFF;
		padding: 12px;
		font-size: 15px;
		color: #595959;
		-webkit-border-radius: 0 0 0px 0px;
		-moz-border-radius: 0 0 0px 0px;
		border-radius: 0 0 0px 0px;
		border-bottom: .5px solid #e5e5e5;
	}

	.comment-box .comment-footer {
		border-radius: 0 0 4px 4px;
		padding: 12px;
		width: 100%;
		background: #fff none repeat scroll 0 0;
	}
	.comment-box .comment-footer textarea {
		resize: none;
		width: 100%;
		border-radius: 4px;
		padding: 1%;
	}
	.comment-box .send-button, .comment-box .comment-open {
		padding: 12px;
		background: #fff none repeat scroll 0 0;
	}
	.comment-box .send-button .btn-send, .comment-box .comment-open .btn-send {
		background-color: #03658c;
	    border-color: #03658c;
	    color: #fff;
	    padding: 6px 12px;
	    text-align: center;
	    vertical-align: middle;
	    cursor: pointer;
	}
	.comment-box .send-button .btn-send, .comment-box .comment-open .btn-send {
		text-decoration: none;
	}
	.comment-box .btn-reply {
		cursor: pointer;
	}
	.comment-box .comment-name.by-author, .comment-box .comment-name.by-author a {color: #03658c;}
	.comment-box .comment-name.by-author:after {
		/*content: '';*/
		background: #03658c;
		color: #FFF;
		font-size: 12px;
		padding: 3px 5px;
		font-weight: 700;
		margin-left: 10px;
		-webkit-border-radius: 3px;
		-moz-border-radius: 3px;
		border-radius: 3px;
	}
	.comment-box .posted-time {
		margin-top: 8px;
	}

	.comment-box .comment-footer {
		display: none;
	}
@media only screen and (max-width: 766px) {
	.comments-container {
		width: 480px;
	}

	.comments-list .comment-box {
		width: 390px;
	}

	.reply-list .comment-box {
		width: 320px;
	}
}
</style>

                                        <div class="CategoryTree-module_values_fZFlB" style="padding-top: 35px;">
                                            <h4 class="CategoryTree-module_title_1R1pj">Category</h4>
                                            <br>
                                            <?php 
                                                use App\Models\Category;
                                                $categoryModel = new Category;
                                                $categories = $categoryModel->categoryList();
                                            ?>
                                            @foreach ($categories as $category)
                                            <div
                                                class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if($subjectDetails['category']=='{{ $category[url] }}') active @endif">
                                                <a data-cid="10.993"
                                                    href="/{{ $category['url'] }}">{{ $category['name'] }}</a>
                                            </div>
                                            @endforeach
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>



                        </div>
                    </section>

                </div>
            </div>
            
            <script>
            var modal = document.getElementById("myModal");

            var btn = document.getElementById("myBtn");


            var span = document.getElementsByClassName("close")[0];


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



        </div>
      
    </main>








    {{-- <div class="gdpr-banner alert alert-notice" style="display: none">We enable strictly necessary cookies to give you
        the best possible experience on Education.com.<a href="/cookie-policy/" target="_blank">Cookie
            policy</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <button href="#" class="btn btn-secondary gdpr-opt-in" style="display: none">Enable Performance Cookies</button>
    </div>


    <div id="collections">
        <div class="overlay-back"></div>
        <div class="choose-collection">
            <i class="icon-cancel-light btn-round"></i>
            <h3 class="title">Add to collection</h3>
            <div class="item new">
                <div class="icon plus"><i class="icon-plus-light"></i></div>
                <div class="label">Create new collection</div>
            </div>
            <div class="list"></div>
        </div>
        <div class="new-collection">
            <i class="icon-cancel-light btn-round"></i>
            <h3 class="title">Create new collection</h3>
            <div class="form">
                <div class="input-row">
                    <label class="floating">
                        <span>Collection name</span>
                        <input name="title" type="text" maxlength="30">
                    </label>
                </div>
                <div class="error inactive"></div>
            </div>
            <div class="actions">
                <button class="btn btn-primary btn-save">Save</button>
                <button class="btn btn-secondary btn-cancel">Cancel</button>
            </div>
        </div>
        <div class="collection minimized">
            <div class="ribbon">
                <i class="icon-up-open"></i>
                <h3 class="title">New Collection</h3>
                <div class="count">0</div>
                <div class="error inactive"></div>
            </div>
            <div class="full">
                <i class="icon-down-open btn-round btn-minimize"></i>
                <div class="left">
                    <div class="change"><i class="icon-left-open btn-round btn-change-collection"></i></div>
                    <h3 class="title"><a>New Collection></a></h3>
                    <div class="info"><span class="count">0</span> <span class="count-label">items</span></div>
                    <div class="error inactive"></div>
                </div>
                <div class="right"></div>
            </div>
        </div>
    </div>
    <div class="modal" id="collections-featurewall">
        <i class="icon-cancel"></i>
        <img class="roly-collections"
            data-lazyload-src="" />
        <div class="modal-content">
            <h3>Sign up to start collecting!</h3>
            <p>Bookmark this to easily find it later. Then send your curated collection to your children, or put
                together your own custom lesson plan.</p>
            <div class="buttons">
                <a class="btn btn-teal btn-large collections-featurewall-btn-signup">Sign up</a>
                <a class="btn btn-tertiary btn-large collections-featurewall-btn-login">Log in</a>
            </div>
        </div>
    </div> --}}


    <script type="text/javascript">
    (function($) {
        $(".collections-featurewall-btn-signup").on("click", function() {
            $("#collections-featurewall").find(".icon-cancel").click();
            window.Edu.openSignup();
        });
        $(".collections-featurewall-btn-login").on("click", function() {
            $("#collections-featurewall").find(".icon-cancel").click();
            window.Edu.openLogin();
        });

        var paywall_modal = jQuery("#collections-featurewall").modal({
            onOpen: function(data) {
                if (this.ga_fired) return;
                this.ga_fired = true;

                var trackingData = {
                    action: "hit feature wall"
                };
                if (data) {
                    if (data.type) {
                        trackingData.itemType = data.type;
                    }
                    if (data.itemId) {
                        trackingData.itemId = data.id;
                    }
                }

                if (window.Edu && window.Edu.trackEvent) {
                    window.Edu.trackEvent("collections",
                        trackingData, {
                            eventCategory: "Collections",
                            eventAction: "Hit feature wall"
                        });
                }
            }
        });
    })(jQuery);
    </script>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div id="react-reg-modal" data-react="RegistrationModal"></div>

    <!--<footer>-->
    <!--    <div class="container">-->
    <!--        <div class="row footer_inner">-->
    <!--            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">-->
    <!--                <div _ngcontent-vpu-c169="" class="footer_main_box">-->
    <!--                    <h2 _ngcontent-vpu-c169="">QuickMints </h2>-->
    <!--                    <ul _ngcontent-vpu-c169="">-->
    <!--                        <li _ngcontent-vpu-c169=""><a _ngcontent-vpu-c169="" href="#/how-work"-->
    <!--                                ng-reflect-router-link="/how-work">How It works</a></li>-->
    <!--                        <li _ngcontent-vpu-c169=""><a _ngcontent-vpu-c169="" href="#/term-conditions"-->
    <!--                                ng-reflect-router-link="/term-conditions">Terms &amp; Conditions</a>-->
    <!--                        </li>-->
    <!--                        <li _ngcontent-vpu-c169=""><a _ngcontent-vpu-c169="" href="#/Privacy-policy"-->
    <!--                                ng-reflect-router-link="/Privacy-policy">Privacy Policy</a></li>-->
    <!--                    </ul>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">-->
    <!--                <div _ngcontent-vpu-c169="" class="footer_main_box">-->
    <!--                    <h2 _ngcontent-vpu-c169="">Providers </h2>-->
    <!--                    <ul _ngcontent-vpu-c169="">-->
    <!--                        <li _ngcontent-vpu-c169=""><a _ngcontent-vpu-c169="" href="#/provider-faq"-->
    <!--                                ng-reflect-router-link="/provider-faq">Provider FAQS</a></li>-->
    <!--                    </ul>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">-->
    <!--                <div _ngcontent-vpu-c169="" class="footer_main_box">-->
    <!--                    <h2 _ngcontent-vpu-c169="">Customers </h2>-->
    <!--                    <ul _ngcontent-vpu-c169="">-->
    <!--                        <li _ngcontent-vpu-c169=""><a _ngcontent-vpu-c169="" href="#/customer-faq"-->
    <!--                                ng-reflect-router-link="/customer-faq">Customer FAQS</a></li>-->
    <!--                    </ul>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">-->
    <!--                <div _ngcontent-vpu-c169="" class="footer_main_box contact_footer_box">-->
    <!--                    <h2 _ngcontent-vpu-c169="">Contact Us</h2>-->
    <!--                    <p _ngcontent-vpu-c169="" ng-reflect-ng-class="[object Object]" class="message">-->
    <!--                        admin@quickmints.com </p>-->
    <!--                    <p _ngcontent-vpu-c169="" ng-reflect-ng-class="[object Object]" class="address"> San-->
    <!--                        Ramon, CA </p>-->


    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->

    <!--    </div>-->

    <!--    <div _ngcontent-vpu-c169="" class="copy_right">-->
    <!--        <div _ngcontent-vpu-c169="" class="container">-->
    <!--            <div _ngcontent-vpu-c169="" class="copy_right_inner">-->
    <!--                <p _ngcontent-vpu-c169="">© 2021 Quickmints. All rights reserved.</p><a _ngcontent-vpu-c169=""-->
    <!--                    href="#"><img _ngcontent-vpu-c169="" src="../_next/static/img/payment_options5.png" alt=""></a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</footer>-->
    @include('layout.footer')
    <!-- Button trigger modal -->

<script>
    		$(document).on('click', '.btn-reply', function(eve){	
			eve.preventDefault();
			$(this).parent().parent().siblings('.comment-footer').slideToggle();
			eve.stopImmediatePropagation();
			console.log($(this));
		});
		
		$(document).on('click', '.btn-send', function(eve){
			var targetObject = $(this).parent().parent().parent().parent().parent();
			//console.log(targetObject);
			var reply_text = $(this).parent().siblings('textarea').val();

			if($.trim(reply_text) == " " || $.trim(reply_text) == ""){
				alert("insert comment");
			} else {
			if($(targetObject).hasClass("comment-main-level"))
				{	
					if($(targetObject).siblings('.comments-list.reply-list')) {
						element_prepend = '<li> <div class="comment-avatar"><img alt="" src="http://dummyimage.com/60"></div><div class="comment-box"> <div class="comment-head"> <h6 class="comment-name"><a href="#">Lorena Rojero</a></h6> <span class="posted-time">Posted on DD-MM-YYYY HH:MM</span> <i class="fa fa-reply"></i> <i class="fa fa-heart"></i> </div> <div class="comment-content">'+ reply_text +' <div class="comment-open"> <a class="btn-reply"> <i class="fa fa-reply"></i> </a> </div> </div> <div class="comment-footer"> <div class="comment-form"> <textarea id="" name="" class="form-control"></textarea> <div class="pull-right send-button"> <a class="btn-send">send</a> </div> </div> </div> </div> </li>';
						 $(targetObject).siblings('.comments-list.reply-list').prepend(element_prepend);
					}
				}
			}	
		});
</script>


</body>

</html>