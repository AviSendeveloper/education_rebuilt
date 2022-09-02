<!DOCTYPE html>
<html lang="en">

<head>
    <meta charSet="utf-8" />
    <title>Home</title>

    <meta name="page_type" content="page" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
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

.delete {
    position: absolute;
    top: 3px;
    left: 18px;
}

.delete i {
    color: #fff;
    background: #0d2c6a;
    height: 35px;
    width: 35px;
    /* float: right; */
    border-radius: 50%;
    padding-left: 11px;
    padding-top: 10px;
}
</style>
<style>
    .page_404{ padding:40px 0; background:#fff; font-family: 'Arvo', serif;
}

.page_404  img{ width:100%;}

.four_zero_four_bg{
 
 background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
    height: 400px;
    background-position: center;
 }
 
 
 .four_zero_four_bg h1{
 font-size:80px;
 }
 
  .four_zero_four_bg h3{
			 font-size:80px;
			 }
			 
			 .link_404{			 
	color: #fff!important;
    padding: 10px 20px;
    background: #39ac31;
    margin: 20px 0;
    display: inline-block;}
	.contant_box_404{ margin-top:-50px;}
</style>
<body>
    
    
  @include('layout.header')

  <section class="page_404">
	<div class="container">
		<div class="row">	
		<div class="col-sm-12 ">
		<div class="col-sm-10 col-sm-offset-1  text-center">
		<div class="four_zero_four_bg">
			<h1 class="text-center ">404</h1>
		
		
		</div>
		
		<div class="contant_box_404">
		
		
		<p>"Sorry we looked around and this page does not exist"</p>
		
		<a href="" class="link_404">Go to Home</a>
	</div>
		</div>
		</div>
		</div>
	</div>
</section>


            
            
    @include('layout.footer')
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
    // Get the modal
    var modal14 = document.getElementById("myModal14");

    // Get the button that opens the modal
    var btn14 = document.getElementById("modalBtn14");

    // Get the <span> element that closes the modal
    var close14 = document.getElementsByClassName("close14")[0];

    // When the user clicks on the button, open the modal
    btn14.onclick = function() {
        modal14.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    close14.onclick = function() {
        modal14.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal14.style.display = "none";
        }
    }
    </script>


</html>