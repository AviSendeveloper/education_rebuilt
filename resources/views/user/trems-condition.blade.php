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
    /*margin: 70px 0 0 0;*/
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
.delete i{color: #fff;
    background: #0d2c6a;
    height: 35px;
    width: 35px;
    /* float: right; */
    border-radius: 50%;
    padding-left: 11px;
    padding-top: 10px;}
</style>

<body>
    <div id="__next">
        <div class="">
            @include('layout.header')
            <div class="SearchTitle container">
                <!--<h1 class="SearchTitle-module_title" style="opacity:1;transform:none; color: #0ca3fe;">Upload Your Kids-->
                <!--    Art &amp; Craft Talents</h1>-->
            </div>
            <div style="opacity:1">
                  <div class="SearchTitle-module_root_3mwIP typography-small container">
                                <div class="SearchBar-module_container_1AXk_ search-module_search_2NhRQ">
                                    <div class="SearchBar-module_search-bar-container_qVYML">
                                        <div class="SearchBar-module_search-bar_32NYp">
                                            <div class="SearchBar-module_search-form_3O6b_ form">
                                                
                                                <div class="row">
                                                    <div class="col-md-10 col-lg-10 col-sm-12">
                                                        <div class="SearchBar-module_search-box_tsBww">
                                                        <form action="/search-subject" method="post"
                                                            title="Search 30,000+ educational resources" role="search">@csrf
                                                            <div>
                                                                <div role="combobox" aria-haspopup="listbox"
                                                                    aria-owns="react-autowhatever-1" aria-expanded="false"
                                                                    class="react-autosuggest__container">
                                                                    <input type="text" name="search" autocomplete="off"
                                                                        aria-autocomplete="list"
                                                                        aria-controls="react-autowhatever-1"
                                                                        class="SearchBar-module_search-input_GtOux"
                                                                        placeholder="Search Talent"
                                                                        title="Search worksheets" name="q" value="">
                                                                    <div id="react-autowhatever-1" role="listbox"
                                                                        class="react-autosuggest__suggestions-container">
                                                                    </div>
                                                                </div>
                                                            </div><button
                                                                class=" btn-tertiary btn-normal Button-module_btn_1JCnt Button-module_tertiary_EUghB Button-module_shadowless_3Yoni SearchBar-module_search-button_wRuXp SearchBar-module_btn_1Fgsj"
                                                                title="Search" type="submit"><img
                                                                    src="../_next/static/img/search.png" alt=""
                                                                    style="width: 17px;"></button>
                                                        </form>
                                                    </div>
                                                </div>  
                                                <div class="col-md-2 col-lg-2 col-sm-12" style="text-align: center;">
                                                    <button style="border: none;background: transparent;">
                                                        @if (Auth::check())
                                                            <a href="#" data-id="model" data-target="#mymodel" class="btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb">Add Talent</a></button>
                                                        @else
                                                            <a href="#" id="modalBtn14" class="btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb">Add Talent</a></button>
                                                        @endif
                                                </div> 
                                                      
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <div class="container-fluid">
                    <div id="unified-search-results">
                        <div class="search-module_searchResults_1cQN6">
                          
                            
                            {{-- start upload form --}}
                            <div id="mymodel" class="model">
                                <div class="model-content">
                                    <div class="modal-header"
                                        style="float:center; background-color: rgb(57, 160, 219);">
                                        {{-- model header --}}
                                        <h3>Upload Talent</h3>
                                        <span class="close" data-close="model">&times;</span>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/upload-subject" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Name</label>
                                                        <input type="text" name="name" class="form-control"
                                                            id="exampleInputPassword1" placeholder="name" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1">Category</label>
                                                        <?php 
                                                            use App\Models\Category;
                                                            $categoryModel = new Category;
                                                            $categories = $categoryModel->categoryList();
                                                        ?>
                                                        <select name="category" class="form-control"
                                                            id="exampleFormControlSelect1" required>
                                                            @foreach ($categories as $category)
                                                            <option value="{{ $category['url'] }}">
                                                                {{ $category['name'] }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlFile1">Image</label>
                                                        <input type="file" name="image" class="form-control-file"
                                                            id="exampleFormControlFile1" required>
                                                        <span style="color:red;">Png or Jpg files.</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Grade</label>
                                                        <input name="grade" class="form-control" id="exampleFormControlTextarea1" required>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio" name="upload_style" id="public" value="public" checked>
                                                      <label class="form-check-label" for="public">
                                                        Public
                                                      </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio" name="upload_style" id="private" value="private">
                                                      <label class="form-check-label" for="private">
                                                        Private
                                                      </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                                   
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Description</label>
                                                        <textarea name="description" class="form-control"
                                                            id="exampleFormControlTextarea1" rows="3" required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlFile1">File</label>
                                                        <input type="file" name="file" class="form-control-file"
                                                            id="exampleFormControlFile1" required>
                                                        <span style="color:red;">Png, Jpg, PDF or Doc files. You can use same file as image. This will be what user can download.</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">School</label>
                                                        <input name="school" class="form-control" id="exampleFormControlTextarea1" required>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                    <div style="text-align: center;"> <button type="submit"
                                                            class="btn tp-btn-register">Add</button></div>
                                                </div>
                                        </form>

                                    </div>
                                </div>
                                <div class="modal-footer" style="background-color: rgb(57, 160, 219); padding:20px">
                                    {{-- model footer --}}
                                </div>
                            </div>
                        </div>
                        {{-- end upload form --}}
<div id="myModal14" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
  
 
       <header class="modal-header">
           <div class="modal-header-title" style="padding:20px !important;">
               <p class="modal-header-title" style="padding:20px !important;">
                   Log in to The Parent Teacher Hub
               </p>
               <p>
                   This application requires separate login from QuickMints
               </p>
               <p style="color:red">
                   After login you can post your Kids Talents
               </p>
           </div>
            <span class="close14">&times</span>
           <!--<button class="close12" class="modal-header-icon">-->
           <!--    <span class="icon">-->
           <!--        <i class="bx bx-x"></i>-->
           <!--    </span>-->
           <!--</button>-->
       </header>
       <!-- Modal body -->
 
       <div class="modal-body">
            <div class="form-group" style="text-align: center;">
               <a href="{{ url('auth/facebook') }}"><button class="loginBtn loginBtn--facebook">
                   Login with Facebook
                 </button></a>
                 
                 <a href="{{ url('auth/google') }}"><button class="loginBtn loginBtn--google">
                   Login with Google</button></a>
                    <br>
                    </div>
           <form method="post" action="/login-check">
               @csrf               
               <div class="form-group">
                   <input type="text" name="email" class="form-control hei" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                   <br>
                   <input type="password" name="password" class="form-control hei" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter password">
 
               </div>
               <div class="form-group clearfix"><label class="radio-item form-check-label float-left"><a href="/forgot-password" class="float-right forgot-txt">Forgot
                       Password?</a></label></div>
               <br>
             
               <div style="text-align: center;">
                   <button style="border: none;background: transparent;"><a class="btn btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb " style="width: 115px;">Login</a></button>
               </div>
               <br>
               <div id="open-modal5" class="d-flex justify-content-center modal-bottom-links"> Don't have an account?
                   <a href="javascript:void(0);" class="ml-2">Register</a></div>
           </form>
           
       </div>
 
 
  
  </div>
</div>
                        <div class="SearchFilters-module_overlay_1PBZq"></div>
                        <div class="SearchFilters-module_container_2SNWX">
                            <div class="FacetsMobileBtn-module_container__uS19"><button
                                    class="btn btn-tertiary btn-normal Button-module_btn_1JCnt Button-module_tertiary_EUghB FacetsMobileBtn-module_button_3xHjO"></button></div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-lg-2 col-sm-12">
                                @include('user.category')
                            </div>
                            <div class="col-md-10 col-lg-10 col-sm-12">
                                <!-- <div class="row"> -->
                                    <h1>Terms of Service</h1>
                                  <br>
<h2>An Introduction to Parent Teacher Hub Terms of Service</h2>
<p>Welcome to the Parent Teacher Hub! <strong>Our mission is to help the parent and teacher community</strong>. The ParentTeacherHub platform (referred to as the platform) offers a place to ask questions about academics, parenting, school and college related questions or any questions you may need help with for your child and connect with people who contribute unique insights and quality answers. This empowers people to learn from each other and to help each other.</p>
<ul>
<li><strong>You own the content that you post;</strong> you also grant us and other users of the platform certain rights and license to use it. By submitting, posting, or displaying Your Content on the Platform, you grant the platform and its affiliated companies a nonexclusive, worldwide, royalty free, fully paid up, transferable, sublicensable (through multiple tiers), license to use, copy, reproduce, process, adapt, modify, create derivative works from, publish, transmit, store, display and distribute, translate, communicate and make available to the public, and otherwise use Your Content in connection with the operation or use of the Platform or the promotion, advertising or marketing of the Platform or our business partners, in any and all media or distribution methods (now known or later developed), including via means of automated distribution, such as through an application programming interface (also known as an “API”). You agree that this license includes the right for the platform to make Your Content available to other companies, organizations, business partners, or individuals who collaborate with the platform for the syndication, broadcast, communication and making available to the public, distribution or publication of Your Content on the the Platform or through other media or distribution methods. This license also includes the right for other users of the Platform to use, copy, reproduce, adapt, modify, create derivative works from, publish, transmit, display, and distribute, translate, communicate and make available to the public Your Content, subject to our Terms of Service.</li>
<li>Once you post an answer to a question, you may edit or delete your answer at any time from public display on the platform. However, we may not be able to control removal of the answer from display on syndicated channels or other previously distributed methods outside of the parentteacherhub.com. Parent Teacher Hub may remove suspected spam from your answers. Once you post a question, it may be edited or deleted by other users or by ParentTeacherHub at any time. Any edits and changes made by you may be visible to other users. The right for ParentTeacherHub to copy, display, transmit, publish, perform, distribute, store, modify, and otherwise use any question you post, and sublicense those rights to others, is perpetual and irrevocable, to the maximum extent permitted by law, except as otherwise specified in this Agreement.</li>
<li>You acknowledge and agree that Parenteacherhub may preserve Your Content and may also disclose Your Content and related information if required to do so by law or in the good faith belief that such preservation or disclosure is reasonably necessary to: (a) comply with legal process, applicable laws or government requests; (b) enforce these Terms of Service; (c) respond to claims that any of Your Content violates the rights of third parties; (d) detect, prevent, or otherwise address fraud, security or technical issues; or (e) protect the rights, property, or personal safety of Parenteacherhub, its users, or the public.</li>
<li>You understand that we may modify, adapt, or create derivative works from Your Content in order to transmit, display or distribute it over computer networks, devices, service providers, and in various media. We also may remove or refuse to publish Your Content, in whole or part, at any time.</li>
<li>You further give us the permission and authority to act as your nonexclusive agent to take enforcement action against any unauthorized use by third parties of any of Your Content outside of the Parenteacherhub Platform or in violation of our Terms of Service.</li>
	<li>
	<ul>
<li><strong>You are responsible for the content that you post.</strong> This includes ensuring that you have the rights needed for you to post that content and that your content does not violate the legal rights of another party or any applicable laws.</li>
<li><strong>You can repost a small portion of any answer or post posted on Parenteacherhub elsewhere,</strong> provided that you attribute such content back to the Parenteacherhub platform and respect the rights of the original poster, including any “not for reproduction” designation, and do not use automated tools.</li>
<li><strong>We do not endorse or verify content posted by users.</strong> Our content and materials are provided to you “as is,” without any guarantees. You are solely responsible for your own use of the Parenteacherhub platform. Posts from lawyers, doctors, and other professionals should not be treated as a substitute for professional advice for your specific situation.</li>
<li><strong>You agree to follow the rules of our platform.</strong> When you use the Parenteacherhub platform, you also agree to our Terms of Service, accept our Privacy Policy, and agree to Copyright and Trademark policy</li>
<li><strong>You agree to alternative dispute resolution.</strong> You agree to attempt initially to resolve matters cooperatively with us and, if that fails, to use individual arbitration, except in limited situations.</li>
<li><strong>We offer tools for you to give feedback and report complaints.</strong> If you think someone has violated your intellectual property rights, other laws, or Parenteacherhub's policies, you can send us an email to parentteacherhhub@gmail.com</li>
	</ul>
	</li>
</ul>
<p>We are pleased that you want to join the Parenteacherhub platform and encourage you to read the full Terms of Service.</p>
<h2>Parenteacherhub Terms of Service</h2>
<p>Welcome to Parenteacherhub! Parenteacherhub is a platform to gain and share knowledge, and help the parent and teacher community.</p>
<p>These terms of service (“Terms of Service”) set forth the agreement (“Agreement”) between you and Parenteacherhub. It governs your use of the products and services we offer through our websites and applications (collectively the “Parenteacherhub Platform”).</p>
<p>Please make sure to read it, because, by using the Parenteacherhub Platform, you consent to these Terms of Service.</p>
<p>IMPORTANT ARBITRATION NOTICE: IF YOU ARE IN THE UNITED STATES OR CANADA, YOU AGREE THAT DISPUTES BETWEEN YOU AND Parenteacherhub WILL BE RESOLVED BY BINDING, INDIVIDUAL ARBITRATION AND YOU WAIVE YOUR RIGHT TO PARTICIPATE IN A CLASS ACTION LAWSUIT OR CLASS-WIDE ARBITRATION. WE EXPLAIN SOME EXCEPTIONS AND HOW YOU CAN OPT OUT OF ARBITRATION BELOW IN SECTION 10.</p>
<ol>
	<li>
<strong>The Mission of the Parenteacherhub Platform

Parenteacherhub's mission is to help the parent and teacher community.</strong> The Parenteacherhub Platform is a place to ask questions and connect with other parents, teachers or educators who contribute unique insights and quality answers. This empowers people to learn from each other.
	</li>
	<li>
<strong>Using the Parenteacherhub Platform</strong>
		<ol>
		<li>
<strong>Who Can Use It.</strong> Use of the Parenteacherhub Platform by anyone under 13 years of age is prohibited. You represent that you are at least the age of majority in the jurisdiction where you live or, if you are not, your parent or legal guardian must consent to these Terms of Service and affirm that they accept this Agreement on your behalf and bear responsibility for your use. If you are accepting these Terms of Service on behalf of someone else or an entity, you confirm that you have the legal authority to bind that person or entity to this Agreement.
		</li>
		<li>
<strong>Registration.</strong> When you set up a profile on the Parenteacherhub Platform, you will be asked to provide certain information about yourself. You agree to provide us accurate information when you create your account on the Parenteacherhub Platform. We will treat information you provide as part of registration in accordance with our Privacy Policy. You should take care in maintaining the confidentiality of your password.
		</li>
		<li>
<strong>Privacy Policy.</strong> Our privacy practices are set forth in our Privacy Policy. By use of the Parenteacherhub Platform, you agree to accept our Privacy Policy, regardless of whether you are a registered user.
		</li>
		<li>
<strong>Changes to the Parenteacherhub Platform.</strong> We are always trying to improve your experience on the Parenteacherhub Platform. We may need to add or change features and may do so without notice to you.
		</li>
		<li>
<strong>Feedback.</strong> We welcome your feedback and suggestions about how to improve the Parenteacherhub Platform. Feel free to submit feedback at parentteacherhub@gmail.com. By submitting feedback, you agree to grant us the right, at our discretion, to use, disclose and otherwise exploit the feedback, in whole or part, freely and without compensation to you.
		</li>
		</ol>
	</li>
	<li>
Your Content</strong>
		<ol>
		<li>
<strong>Definition of Your Content.</strong> The Parenteacherhub Platform enables you to add posts, texts, photos, videos, links, and other files and information about yourself to share with others. All material that you upload, publish or display to others via the Parenteacherhub Platform will be referred to collectively as “Your Content.” You acknowledge and agree that, as part of using the Parenteacherhub Platform, Your Content may be viewed by the general public.
		</li>
		<li>
<strong>Ownership. You, or your licensors, as applicable, retain ownership of the copyright and other intellectual property in Your Content, subject to the non-exclusive rights granted below.</strong>
		</li>
		<li>
<strong>License and Permission to Use Your Content.</strong>
			<ol>
			<li>
By submitting, posting, or displaying Your Content on the Parenteacherhub Platform, you grant Parenteacherhub and its affiliated companies a nonexclusive, worldwide, royalty free, fully paid up, transferable, sublicensable (through multiple tiers), license to use, copy, reproduce, process, adapt, modify, create derivative works from, publish, transmit, store, display and distribute, translate, communicate and make available to the public, and otherwise use Your Content in connection with the operation or use of the Parenteacherhub Platform or the promotion, advertising or marketing of the Parenteacherhub Platform or our business partners, in any and all media or distribution methods (now known or later developed), including via means of automated distribution, such as through an application programming interface (also known as an “API”). You agree that this license includes the right for Parenteacherhub to make Your Content available to other companies, organizations, business partners, or individuals who collaborate with Parenteacherhub for the syndication, broadcast, communication and making available to the public, distribution or publication of Your Content on the Parenteacherhub Platform or through other media or distribution methods. This license also includes the right for other users of the Parenteacherhub Platform to use, copy, reproduce, adapt, modify, create derivative works from, publish, transmit, display, and distribute, translate, communicate and make available to the public Your Content, subject to our Terms of Service. Except as expressly provided in these Terms of Service, this license will not confer the right for you to use automated technology to copy or post questions and answers or to aggregate questions and answers for the purpose of making derivative works. If you do not wish to allow your answers to be translated by other users, you can globally opt out of translation in your profile settings or you can designate certain answers not for translation.
			</li>
			<li>
Once you post an answer to a question, you may edit or delete your answer at any time from public display on https://www.Parenteacherhub.com, except in the case of anonymously posted answers. However, we may not be able to control removal of the answer from display on syndicated channels or other previously distributed methods outside of https://www.Parenteacherhub.com. Parenteacherhub may remove suspected spam from your answers. Once you post a question, it may be edited or deleted by other users or by Parenteacherhub at any time. Any edits and changes made by you may be visible to other users. The right for Parenteacherhub to copy, display, transmit, publish, perform, distribute, store, modify, and otherwise use any question you post, and sublicense those rights to others, is perpetual and irrevocable, to the maximum extent permitted by law, except as otherwise specified in this Agreement.
			</li>
			<li>
You acknowledge and agree that Parenteacherhub may preserve Your Content and may also disclose Your Content and related information if required to do so by law or in the good faith belief that such preservation or disclosure is reasonably necessary to: (a) comply with legal process, applicable laws or government requests; (b) enforce these Terms of Service; (c) respond to claims that any of Your Content violates the rights of third parties; (d) detect, prevent, or otherwise address fraud, security or technical issues; or (e) protect the rights, property, or personal safety of Parenteacherhub, its users, or the public.
			</li>
			<li>
You understand that we may modify, adapt, or create derivative works from Your Content in order to transmit, display or distribute it over computer networks, devices, service providers, and in various media. We also may remove or refuse to publish Your Content, in whole or part, at any time.
			</li>
			<li>
You further give us the permission and authority to act as your nonexclusive agent to take enforcement action against any unauthorized use by third parties of any of Your Content outside of the Parenteacherhub Platform or in violation of our Terms of Service.
			</li>
			</ol>
		</li>
		<li>
<strong>Your Responsibilities for Your Content.</strong> By posting Your Content on the Parenteacherhub Platform, you represent and warrant to us that: i) you have the ownership rights, or you have obtained all necessary licenses or permissions to use Your Content and grant us the rights to use Your Content as provided for under this Agreement, and ii) that posting Your Content violates no intellectual property or personal right of others or any applicable law or regulation, including any laws or regulations requiring disclosure that you have been compensated for Your Content. You accept full responsibility for avoiding infringement of the intellectual property or personal rights of others or violation of laws and regulations in connection with Your Content. You are responsible for ensuring that Your Content does not violate copyright or trademark policy or any applicable law or regulation. You agree to pay all royalties, fees, and any other monies owed to any person by reason of Your Content.
		</li>
		</ol>
	</li>
	<li>
<strong>Our Content and Materials</strong>
		<ol>
		<li>
<strong>Definition of Our Content and Materials.</strong> All intellectual property in or related to the Parenteacherhub Platform (specifically including, but not limited to our software, the Parenteacherhub marks, the Parenteacherhub logo, but excluding Your Content) is the property of Parenteacherhub, Inc., or its subsidiaries and affiliates, or content posted by other Parenteacherhub users licensed to us (collectively “Our Content and Materials”).
		</li>
		<li>
<strong>Data.</strong> All data Parenteacherhub collects (“Data”) about use of the Parenteacherhub Platform by you or others is the property of Parenteacherhub, Inc., its subsidiaries, and affiliates. For clarity, Data does not include Your Content and is separate from Our Content and Materials.
		</li>
		<li>
<strong>No Endorsement or Verification.</strong> Please note that the Parenteacherhub Platform contains access to third-party content, products and services, and it offers interactions with third parties. Participation or availability on the Parenteacherhub Platform does not amount to endorsement or verification by us. We make no warranties or representations about the accuracy, completeness, or timeliness of any content posted on the Parenteacherhub Platform by anyone.
		</li>
		<li>
<strong>Ownership.</strong> You acknowledge and agree that Our Content and Materials remain the property of Parenteacherhub's users or Parenteacherhub. The content, information and services made available on the Parenteacherhub Platform are protected by U.S. and international copyright, trademark, and other laws, and you acknowledge that these rights are valid and enforceable.
		</li>
		</ol>
	</li>
	<li>
<strong>Integrated Service Provider.</strong> You may enable another online service provider, such as a social networking service (“Integrated Service Provider”), to be directly integrated into your account on the Parenteacherhub Platform. By enabling an integrated service, you are allowing us to pass to, and receive from, the Integrated Service Provider your log-in information and other user data. For more information about Parenteacherhub’s use, storage, and disclosure of information related to you and your use of integrated services within Parenteacherhub, please see our Privacy Policy. Note that your use of any Integrated Service Provider and its own handling of your data and information is governed solely by their terms of use, privacy policies, and other policies.
	</li>
	<li>
<strong>DISCLAIMERS AND LIMITATION OF LIABILITY

PLEASE READ THIS SECTION CAREFULLY SINCE IT LIMITS THE LIABILITY OF Parenteacherhub ENTITIES TO YOU.</strong>

“Parenteacherhub ENTITIES” MEANS Parenteacherhub, INC., AND ANY SUBSIDIARIES, AFFILIATES, RELATED COMPANIES, SUPPLIERS, LICENSORS AND PARTNERS, AND THE OFFICERS, DIRECTORS, EMPLOYEES, AGENTS AND REPRESENTATIVES OF EACH OF THEM. EACH PROVISION BELOW APPLIES TO THE MAXIMUM EXTENT PERMITTED UNDER APPLICABLE LAW.
		<ol>
		<li>
WE ARE PROVIDING YOU THE Parenteacherhub PLATFORM, ALONG WITH OUR CONTENT AND MATERIALS AND THE OPPORTUNITY TO CONNECT WITH OTHERS, ON AN “AS IS” AND “AS AVAILABLE” BASIS, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED. WITHOUT LIMITING THE FOREGOING, Parenteacherhub ENTITIES EXPRESSLY DISCLAIM ANY AND ALL WARRANTIES AND CONDITIONS OF MERCHANTABILITY, TITLE, ACCURACY AND COMPLETENESS, UNINTERRUPTED OR ERROR-FREE SERVICE, FITNESS FOR A PARTICULAR PURPOSE, QUIET ENJOYMENT, NON-INFRINGEMENT, AND ANY WARRANTIES ARISING OUT OF COURSE OF DEALING OR TRADE USAGE.
		</li>
		<li>
Parenteacherhub MAKES NO PROMISES WITH RESPECT TO, AND EXPRESSLY DISCLAIMS ALL LIABILITY FOR: (i) CONTENT POSTED BY ANY USER OR THIRD PARTY; (ii) ANY THIRD-PARTY WEBSITE, THIRD-PARTY PRODUCT, OR THIRD-PARTY SERVICE LISTED ON OR ACCESSIBLE TO YOU THROUGH THE Parenteacherhub PLATFORM, INCLUDING AN INTEGRATED SERVICE PROVIDER OR PROFESSIONAL CONTRIBUTOR; (iii) THE QUALITY OR CONDUCT OF ANY THIRD PARTY YOU ENCOUNTER IN CONNECTION WITH YOUR USE OF THE Parenteacherhub PLATFORM; OR (iv) UNAUTHORIZED ACCESS, USE OR ALTERATION OF YOUR CONTENT. Parenteacherhub MAKES NO WARRANTY THAT: (a) THE Parenteacherhub PLATFORM WILL MEET YOUR REQUIREMENTS; (b) THE Parenteacherhub PLATFORM WILL BE UNINTERRUPTED, TIMELY, SECURE, OR ERROR-FREE; (c) THE RESULTS OR INFORMATION THAT YOU MAY OBTAIN FROM THE USE OF THE Parenteacherhub PLATFORM, A PROFESSIONAL CONTRIBUTOR, OR ANY OTHER USER WILL BE ACCURATE OR RELIABLE; OR (d) THE QUALITY OF ANY PRODUCTS, SERVICES, INFORMATION, OR OTHER MATERIAL OBTAINED OR PURCHASED BY YOU THROUGH THE Parenteacherhub PLATFORM WILL BE SATISFACTORY.
		</li>
		<li>
YOU AGREE THAT TO THE MAXIMUM EXTENT PERMITTED BY LAW, Parenteacherhub ENTITIES WILL NOT BE LIABLE TO YOU UNDER ANY THEORY OF LIABILITY. WITHOUT LIMITING THE FOREGOING, YOU AGREE THAT, TO THE MAXIMUM EXTENT PERMITTED BY LAW, Parenteacherhub ENTITIES SPECIFICALLY WILL NOT BE LIABLE FOR ANY INDIRECT, INCIDENTAL, CONSEQUENTIAL, SPECIAL, OR EXEMPLARY DAMAGES, LOSS OF PROFITS, BUSINESS INTERRUPTION, REPUTATIONAL HARM, OR LOSS OF DATA (EVEN IF WE HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES OR SUCH DAMAGES ARE FORESEEABLE) ARISING OUT OF OR IN ANY WAY CONNECTED WITH YOUR USE OF, OR INABILITY TO USE, THE Parenteacherhub PLATFORM.
		</li>
		<li>
YOUR SOLE REMEDY FOR DISSATISFACTION WITH THE Parenteacherhub PLATFORM IS TO STOP USING THE Parenteacherhub PLATFORM.
		</li>
		<li>
WITHOUT LIMITING THE FOREGOING, Parenteacherhub’S MAXIMUM AGGREGATE LIABILITY TO YOU FOR LOSSES OR DAMAGES THAT YOU SUFFER IN CONNECTION WITH THE Parenteacherhub PLATFORM OR THIS AGREEMENT IS LIMITED TO THE AMOUNT PAID TO Parenteacherhub IN CONNECTION WITH THE Parenteacherhub PLATFORM IN THE TWELVE (12) MONTHS PRIOR TO THE ACTION GIVING RISE TO LIABILITY.
		</li>
		<li>
SOME JURISDICTIONS DO NOT ALLOW LIMITATIONS ON IMPLIED WARRANTIES OR EXCLUSION OF LIABILITY FOR CERTAIN TYPES OF DAMAGES. AS A RESULT, THE ABOVE LIMITATIONS OR EXCLUSIONS MAY NOT APPLY TO YOU IN WHOLE OR IN PART, AND THE FOREGOING SECTIONS 8(c), 8(d), AND 8(e) WILL NOT APPLY TO A RESIDENT OF NEW JERSEY, TO THE EXTENT DAMAGES TO SUCH NEW JERSEY RESIDENT ARE THE RESULT OF Parenteacherhub’S NEGLIGENT, FRAUDULENT, RECKLESS, OR INTENTIONAL MISCONDUCT.
		</li>
		</ol>
	</li>
	<li>
<strong>Indemnification</strong>

You agree to release, indemnify, and defend Parenteacherhub Entities from all third-party claims and costs (including reasonable attorneys’ fees) arising out of or related to: i) your use of the Parenteacherhub Platform, ii) Your Content, iii) your conduct or interactions with other users of the Parenteacherhub Platform, or iv) your breach of any part of this Agreement. We will promptly notify you of any such claim and will provide you (at your expense) with reasonable assistance in defending the claim. You will allow us to participate in the defense and will not settle any such claim without our prior written consent. We reserve the right, at our own expense, to assume the exclusive defense of any matter otherwise subject to indemnification by you. In that event, you will have no further obligation to defend us in that matter.
	</li>
	</ol>
                                <!-- </div> -->

                                <style>
                                .effect-steve img {
                                    width: 100%;
                                    border-radius: 8px;
                                }

                                .grid {
                                    display: block;
                                    margin: 0 auto;
                                    /* width: 95%; */
                                    padding-left: 0;
                                    font-size: 0;
                                    text-align: center;
                                }

                                .gapp {
                                    margin-bottom: 30px;
                                    /* height:100%; */
                                    /* padding: 0px; */
                                }

                                .grid figure {
                                    margin: 0.1em;
                                    /* width: 340px; */
                                    /* height: 240px; */
                                    /* background: #3085a3; */
                                    display: inline-block;
                                    position: relative;
                                    overflow: hidden;
                                    text-align: center;
                                    width:100%;
                                }

                                /* Common style */
                                .grid figure img {
                                    position: relative;
                                    display: block;
                                    opacity: 0.8;

                                    /* height: 240px; */
                                    @media(max-width: 1260px) {
                                        height: 270px;
                                    }
                                }

                                .grid figure figcaption {
                                    color: #fff;
                                    font-size: 1.25em;
                                    -webkit-backface-visibility: hidden;
                                    backface-visibility: hidden;
                                }

                                .grid figcaption h2 {
                                    text-transform: uppercase;
                                    word-spacing: -0.15em;
                                    font-weight: 300;
                                    margin: 1em;
                                }

                                .grid figure figcaption::before,
                                .grid figure figcaption::after {
                                    pointer-events: none;
                                }

                                .grid figure figcaption,
                                .grid figure figcaption>a {
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    width: 100%;
                                    height: 100%;
                                }

                                .grid figure figcaption>a {
                                    z-index: 1000;
                                    text-indent: 200%;
                                    white-space: nowrap;
                                    font-size: 0;
                                    opacity: 0;
                                }

                                .grid figure h2 {
                                    word-spacing: -0.15em;
                                    font-weight: 300;
                                    margin: 1em;
                                }

                                .grid figure h2 span {
                                    font-weight: 800;
                                }

                                figure.effect-steve {
                                    z-index: auto;
                                    /* background: #000; */
                                }

                                figure.effect-steve:before {
                                    box-shadow: 0 3px 30px rgba(0, 0, 0, 0.8);
                                    opacity: 0;
                                }

                                figure.effect-steve figcaption {
                                    z-index: 1;
                                }

                                figure.effect-steve img {
                                    opacity: 1;
                                    -webkit-transition: -webkit-transform 0.35s;
                                    transition: transform 0.35s;
                                    -webkit-transform: perspective(1000px) translate3d(0, 0, 0);
                                    transform: perspective(1000px) translate3d(0, 0, 0);
                                }

                                figure.effect-steve h2,
                                figure.effect-steve p {
                                    background: #f1f1f1;
                                    color: #2d434e;
                                }

                                figure.effect-steve h2 {
                                    position: absolute;
                                    padding: 0.25em;
                                    bottom: 10px;
                                    width: 100%;
                                }

                                figure.effect-steve p {
                                    margin-top: 1em;
                                    padding: 0.5em;
                                    font-weight: 800;
                                    opacity: 0;
                                    -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
                                    transition: opacity 0.35s, transform 0.35s;
                                }

                                figure.effect-steve:hover:before {
                                    opacity: 1;
                                }

                                figure.effect-steve:hover img {
                                    -webkit-transform: perspective(1000px) translate3d(0, 0, 21px);
                                    transform: perspective(1000px) translate3d(0, 0, 21px);
                                }

                                figure.effect-steve:hover h2:before {
                                    opacity: 0;
                                }

                                figure.effect-steve:hover p {
                                    opacity: 1;
                                }

                                .grid figure,
                                figcaption,
                                img {
                                    z-index: 0;
                                }

                                .grid figure figcaption h2 {
                                    font-size: 24px;
                                    margin-bottom: 0;
                                    margin-left: 0;
                                    margin-right: 0;
                                }

                                .grid figcaption p {
                                    font-size: 16px;
                                    font-weight: 200;
                                    position: absolute;
                                    bottom: 0;
                                    margin: 0;
                                    height: auto;
                                    width: 100%;
                                }

                                figure:hover h2 {
                                    background: #f1f1f1;
                                    transition: transform 0.35s;
                                    transform: translateY(-2.5em);
                                }

                                h1.slogan {
                                    text-align: center;
                                    background-color: #2d434e;
                                    font-weight: 100;
                                    margin: 0;
                                    padding: 20px;
                                }
                                </style>
                                <div class="search-module_clear_1b8vy"></div>

                            </div>
                        </div>

                    </div>

                    <!--<div class="page-width SearchFooter-module_root_1pe5g">-->
                    <!--    <h3 class="SearchFootnote-module_title_30ejz">Savor the Free Uploads and Artistics for Kids!-->
                    <!--    </h3>-->
                    <!--    <div class="SearchFootnote-module_description_32nHE">Relish the Free Uploads for your Kid’s-->
                    <!--        Talent! You can upload as many Artistics and Creatives of Your Kids. We entertain all-->
                    <!--        the grades from K to 12. Enjoy the Benefits of Creatives, DIY activities, Crafts, Images-->
                    <!--        together with uploading Questions, and many more Exclusionary.-->
                    <!--        Creativity is intelligence having fun. Happy Crafting!-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>

    </div>
    </div>
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