<!DOCTYPE html>
<html data-ng-app="SUGApp" lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <script type="text/javascript"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="slot/dist/css/SUGstyleV3-responsive.minf4a1.css?v=1636996767345">

    <script type="text/javascript" src="slot/dist/js/lib/jquery-1.11.1.minf4a1.js?v=1636996767345"></script>
</head>

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
    
 </style>

<body>
    @include('slot/layout.header')
    <section style="background: #1eb5ff3d;">
        <div class="background" style="padding-top: 40px; padding-bottom: 40px;">
            <div class="container">
                <h2 class="hrow ng-binding">Send invites to your near and dear ones!</h2>
                <p class="wizard-signuppublished-subtext ng-binding">The link below will allow you to share the page with your friends and peers  or send invites to them </p>
                <br>
                <div class="copy">
          
                    <form style="display: flex;">
                      <input type="text" class="form-control" value="{{url(('share/'.$code.'/'.$id))}}" readonly="">
                      <button type="button">Copy</button>
                    </form>
                  </div>
                  <div class="icon" style="margin-top:20px;">
                    <h2>INVITE BY</h2>
                    <div id="holder" style="margin-top:20px;">
                      <h1><i>Social Media Icons</i></h1>
                      <div>
                          <a href="https://www.facebook.com/sharer.php?u={{url(('share/'.$code.'/'.$id))}}&display=popup&text=Hey {{$signup['category']}} is inviting you to join the {{$signup['title']}}.Here is the link for sign up{{url(('share/'.$code.'/'.$id))}}" rel="me" title="Facebook" target="_blank"><img src="{{asset('slot/images/facebook.png')}}" alt=""></a>
                          <a href="https://www.instagram.com/?url={{url(('share/'.$code.'/'.$id))}}" target="_blank" rel="noopener"><img src="{{asset('slot/images/instragram.png')}}" alt=""></a>
                          <!-- <a href="https://www.instagram.com/?url={{url(('share/'.$code.'/'.$id))}}" target="_blank" rel="noopener"><img src="{{asset('slot/images/facebook.png')}}" alt=""></a> -->
                          <a href="https://twitter.com/share?text=Hey {{$signup['category']}} is inviting you to join the {{$signup['title']}}.Here is the link for sign up {{url(('share/'.$code.'/'.$id))}}" rel="me" title="Twitter" target="_blank"><img src="{{asset('slot/images/twitter.png')}}" alt=""></a>
                          <a href="https://api.whatsapp.com/send?text= Hey {{$signup['category']}} is inviting you to join the {{$signup['title']}}.Here is the link for sign up {{url(('share/'.$code.'/'.$id))}}"><img src="{{asset('slot/images/whatsapp.png')}}" alt=""></a>
                      </div>
                      <br>
                    </div>
                </div>
                <br>
                <a href="/myaccount"><button class="tp-btn-register">Save and
                    Continue</button></a>
            </div>

        </div>
    </section>
     @include('slot/layout.footer')
  
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
    <script>
        (function() {
var copyButton = document.querySelector('.copy button');
var copyInput = document.querySelector('.copy input');
copyButton.addEventListener('click', function(e) {
  e.preventDefault();
  var text = copyInput.select();
  document.execCommand('copy');
});

copyInput.addEventListener('click', function() {
  this.select();
});
})();
    </script>


</body>

</html>
