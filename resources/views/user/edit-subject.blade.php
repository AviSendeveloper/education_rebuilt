<!DOCTYPE html>
<html lang="en">

<head>
    <meta charSet="utf-8" />
    <title>Home</title>

    <meta name="page_type" content="page" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="preload" href="_next/static/css/de79cee5857d13c6dd3a.css" as="style" />
    <link rel="stylesheet" href="_next/static/css/de79cee5857d13c6dd3a.css" />
    <link rel="preload" href="_next/static/css/948bd495162824a1e75b0f407256f639d3726e33_CSS.de79cee5.chunk.css"
        as="style" />
    <link rel="stylesheet" href="_next/static/css/948bd495162824a1e75b0f407256f639d3726e33_CSS.de79cee5.chunk.css" />
    <link rel="preload" href="_next/static/css/42ed995f3f9c450642ce.css" as="style" />
    <link rel="stylesheet" href="_next/static/css/42ed995f3f9c450642ce.css" />
    <link rel="preload" href="_next/static/css/styles.42ed995f.chunk.css" as="style" />
    <link rel="stylesheet" href="_next/static/css/styles.42ed995f.chunk.css" />
    <link rel="preload" href="_next/static/css/44495ce05e15228a2271.css" as="style" />
    <link rel="stylesheet" href="_next/static/css/44495ce05e15228a2271.css" />
    <link rel="stylesheet" href="_next/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
   <link rel="stylesheet" href="https://education.workstream.club/assets/css/responsive.css">

    <link rel="stylesheet" href="assets1/css/quick.css">
    <link rel="stylesheet" href="assets1/css/quick2.css">
    <link rel="stylesheet" href="assets1/css/lightbox.min.css">
    <link rel="stylesheet" href="assets1/css/style-ext.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<style>
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
</style>
<style>
.model {
    display: none;
    position: fixed;
    padding-top: 100px;
    top: 0;
    left: 0;
    z-index: 100;
    overflow: auto;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.4);
}

.model-content {
    position: relative;
    width: 60%;
    margin: auto;
    background-color: #fff;
    animation-name: animatetop;
    animation-duration: 0.4s
}

@keyframes animatetop {
    from {
        top: -300px;
        opacity: 0
    }

    to {
        top: 0;
        opacity: 1
    }
}

.close {
    color: white;
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

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {
    padding: 2px 16px;
}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-header .close {
    margin-top: 10px !important;
}
</style>

<body>
    <div id="__next">
        <div class="">
            @include('layout.header')
<style>
.tweet {
    border: 1px solid #e1e8ed;
    border-radius: 5px;
    position: relative;
    padding: 20px;
    background-color: #fff;
    /* width: 400px; */
    cursor: pointer;
    transition: border-color 0.1s;
    box-shadow: 0 2px 6px 0 rgb(0 0 0 / 30%);
    margin-bottom: 20px;
}

.tweet-question {
    box-shadow: 0 2px 6px 0 rgb(0 0 0 / 30%);
    border-radius: 5px;
}

.tweet-question-heading {
    background: #0e9cff;
    padding: 10px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
}

.tweet-question-heading h4 {
    color: #fff !important;
    text-align: center;
}

.tweet-question ul {
    list-style: auto;
}

.tweet-question li {
    padding: 5px 0px;
}

.tweet:hover {
    border-color: #ccd6dd;
}

.tweet .tweet-head {
    display: flex;
    line-height: 1.2;
}

.tweet .tweet-head .tweet-image {
    display: flex;
    align-items: center;
    margin-right: 9px;
}

.tweet .tweet-head .tweet-image img {
    border-radius: 999px;
    height: 38px;
    width: 38px;
}

.tweet .tweet-head .tweet-author {
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.tweet .tweet-head .tweet-author:hover .name {
    color: #3b94d9;
}

.tweet .tweet-head .tweet-author .name {
    font-weight: 800;
    transition: color 0.1s;
}

.tweet .tweet-head .tweet-author .handle {
    color: #697882;
    font-size: 0.875rem;
}

.tweet .tweet-footer .icons .fas {
    color: #697882;
    margin-right: 1rem;
    transition: color 0.1s;
}

.tweet .tweet-footer .icons .fas .icon-number {
    font-family: "Roboto", sans-serif;
    font-size: 1rem;
    font-weight: normal;
}

.tweet .tweet-footer .icons .fa-reply:hover {
    color: #3b94d9;
}

.tweet .tweet-footer .icons .fa-retweet:hover {
    color: #3da50d;
}

.tweet .tweet-footer .icons .fa-heart:hover {
    color: #E0245E;
}

@keyframes refresh {
    0% {
        transform: rotate(0);
    }

    100% {
        transform: rotate(360deg);
    }
}

.tweet-body {
    padding: 20px 0px
}

.green {
    color: green;
}

.red {
    color: red;
}

.detal {
    box-shadow: 0 2px 6px 0 rgb(0 0 0 / 30%);
    width: 500px;
    margin: auto;
    padding: 25px;
    margin-top: 40px;
}

.detal h2 {
    padding-bottom: 34px;
    color: #317044;
    text-align: center;
    font-size: 30px;
}
</style>


<section>
    <div class="container">
        <div class="detal">
            <h2 style="color:#2257DE !important">Edit Subject</h2>
            <form action="/edit-user-subject" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="subject_id" value="{{ $subjectDetails['user_subject_id'] }}">
                <div class="form-group">
                    <label class="profile_details_text">Name:</label>
                    <input type="text" name="name" class="form-control" value="{{ $subjectDetails['name'] }}" placeholder="Name" required="">
                </div>
                <br>
                <div class="form-group">
                    <label class="profile_details_text">Description:</label>
                    <input type="text" name="description" class="form-control" value="{{ $subjectDetails['description'] }}" placeholder="Description" required="">
                </div>
                <br>
                <div class="form-group">
                    <label class="profile_details_text">Grade:</label>
                    <input type="text" name="grade" class="form-control" value="{{ $subjectDetails['grade'] }}" placeholder="Grade" required="">
                </div>
                <br>
                <div class="form-group">
                    <label class="profile_details_text">School:</label>
                    <input type="text" name="school" class="form-control" value="{{ $subjectDetails['school'] }}" placeholder="School" required="">
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Image</label>
                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlFile1">File</label>
                    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <br>
                <button type="submit" style="border: none;background: transparent;"><a
                           class="btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb "
                           style="width: 115px;">Update</a></button>

            </form>
        </div>
    </div>
</section>

<style>
footer {
    margin: 70px 0 0 0;
    background: #2B2B2B;


}

button {
    cursor: pointer;
    outline: 0;
    color: #AAA;

}

.btn:focus {
    outline: none;
}
</style>
<footer class="foot">
    <div class="container">
        <div class="row footer_inner">
            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                <div _ngcontent-vpu-c169="" class="footer_main_box">
                    <h2 _ngcontent-vpu-c169="">QuickMints </h2>
                    <ul _ngcontent-vpu-c169="">
                        <li _ngcontent-vpu-c169=""><a _ngcontent-vpu-c169="" href="#/how-work"
                                ng-reflect-router-link="/how-work">How It works</a></li>
                        <li _ngcontent-vpu-c169=""><a _ngcontent-vpu-c169="" href="#/term-conditions"
                                ng-reflect-router-link="/term-conditions">Terms &amp; Conditions</a>
                        </li>
                        <li _ngcontent-vpu-c169=""><a _ngcontent-vpu-c169="" href="#/Privacy-policy"
                                ng-reflect-router-link="/Privacy-policy">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                <div _ngcontent-vpu-c169="" class="footer_main_box">
                    <h2 _ngcontent-vpu-c169="">Providers </h2>
                    <ul _ngcontent-vpu-c169="">
                        <li _ngcontent-vpu-c169=""><a _ngcontent-vpu-c169="" href="#/provider-faq"
                                ng-reflect-router-link="/provider-faq">Provider FAQS</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                <div _ngcontent-vpu-c169="" class="footer_main_box">
                    <h2 _ngcontent-vpu-c169="">Customers </h2>
                    <ul _ngcontent-vpu-c169="">
                        <li _ngcontent-vpu-c169=""><a _ngcontent-vpu-c169="" href="#/customer-faq"
                                ng-reflect-router-link="/customer-faq">Customer FAQS</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                <div _ngcontent-vpu-c169="" class="footer_main_box contact_footer_box">
                    <h2 _ngcontent-vpu-c169="">Contact Us</h2>
                    <p _ngcontent-vpu-c169="" ng-reflect-ng-class="[object Object]" class="message">
                        admin@quickmints.com </p>
                    <p _ngcontent-vpu-c169="" ng-reflect-ng-class="[object Object]" class="address"> San
                        Ramon, CA </p>


                </div>
            </div>
        </div>

    </div>

    <div _ngcontent-vpu-c169="" class="copy_right">
        <div _ngcontent-vpu-c169="" class="container">
            <div _ngcontent-vpu-c169="" class="copy_right_inner">
                <p _ngcontent-vpu-c169="">© 2021 Quickmints. All rights reserved.</p><a _ngcontent-vpu-c169=""
                    href="#"><img _ngcontent-vpu-c169="" src="../_next/static/img/payment_options5.png" alt=""></a>
            </div>
        </div>
    </div>
</footer>

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
    if (event.target == modal) {
        modal2.style.display = "none";
    }
}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$('[data-id="model"]').on('click', function() {
    var thisModel = $(this).data('target');
    $(thisModel).show();
    $(thisModel).find('[data-close="model"]').click(function() {
        $(thisModel).hide();
    });
    $(window).click(function(event) {
        if ('#' + event.target.id == thisModel) {
            $(thisModel).hide();
        }
    });
});
</script>
<script>
var btn1 = document.querySelector('#green');
var btn2 = document.querySelector('#red');

btn1.addEventListener('click', function() {

    if (btn2.classList.contains('red')) {
        btn2.classList.remove('red');
    }
    this.classList.toggle('green');

});

btn2.addEventListener('click', function() {

    if (btn1.classList.contains('green')) {
        btn1.classList.remove('green');
    }
    this.classList.toggle('red');

});
</script>



</html>