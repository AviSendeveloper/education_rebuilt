<!DOCTYPE html>
<html lang="en">

<head>
    <meta charSet="utf-8" />
    <title>Home</title>

    <meta name="page_type" content="page" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="preload" href="{{ asset('_next/static/css/de79cee5857d13c6dd3a.css') }}" as="style" />
    <link rel="stylesheet" href="{{ asset('_next/static/css/de79cee5857d13c6dd3a.css') }}" />
    <link rel="preload"
        href="{{ asset('_next/static/css/948bd495162824a1e75b0f407256f639d3726e33_CSS.de79cee5.chunk.css') }}"
        as="style" />
    <link rel="stylesheet"
        href="{{ asset('_next/static/css/948bd495162824a1e75b0f407256f639d3726e33_CSS.de79cee5.chunk.css') }}" />
    <link rel="preload" href="{{ asset('_next/static/css/42ed995f3f9c450642ce.css') }}" as="style" />
    <link rel="stylesheet" href="{{ asset('_next/static/css/42ed995f3f9c450642ce.css') }}" />
    <link rel="preload" href="{{ asset('_next/static/css/styles.42ed995f.chunk.css') }}" as="style" />
    <link rel="stylesheet" href="{{ asset('_next/static/css/styles.42ed995f.chunk.css') }}" />
    <link rel="preload" href="{{ asset('_next/static/css/44495ce05e15228a2271.css') }}" as="style" />
    <link rel="stylesheet" href="{{ asset('_next/static/css/44495ce05e15228a2271.css') }}" />
    <link rel="stylesheet" href="{{ asset('_next/static/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')}}"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css')}}" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <link rel="stylesheet" href="{{ asset('assets1/css/quick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/quick2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/style-ext.css') }}">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
@include('layout.header')


<section>
    <div class="container">
        <div class="detal">
            <h2 style="color:#2257DE !important">Edit Question</h2>
            <form action="/edit-user-question" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="question_id" value="{{ $questionDetails['user_question_id'] }}">
                <div class="form-group">
                    <label class="profile_details_text">Question:</label>
                    <input type="text" name="question" class="form-control" value="{{ $questionDetails['question'] }}" placeholder="Question" required="">
                </div>
                <br>
                <div class="form-group">
                    <label class="profile_details_text">Description:</label>
                    <textarea type="text" name="description" class="form-control ckeditor" placeholder="Description" required="">{!! $questionDetails['description'] !!}</textarea>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Image</label>
                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
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

@include('layout.footer')
          
<!-- Text Editor -->
<!-- CKEditor -->
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
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