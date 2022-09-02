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
                                    <p>This Privacy Policy (“Privacy Policy”) describes our policies and procedures on the collection, use, disclosure, and sharing of your personal information when you use the Parentteacherhub Platform.</p>
<h3>The Information We Collect</h3>
<p>We collect information directly from individuals, from third parties, and automatically through the Parentteacherhub Platform.</p>
<p><strong>Account and Profile Information:</strong> When you create an account and profile on the Parentteacherhub Platform, we collect your name, contact information, demographic information, and other information you provide, such as topics that you know about or find interesting. Your name, photo, and any other information that you choose to add to your public-facing profile will be available for viewing by the public and other users of the Parentteacherhub Platform. Once you create a profile, others will be able to see in your profile certain information about your activity on the Parentteacherhub Platform, such as the questions and answers you post.</p>
<p><strong>Your Content:</strong> We collect the information and content that you post to the Parentteacherhub Platform, including your questions, answers, photos, and comments. Unless you have posted certain content anonymously, your content, date and time stamps, and all associated comments are publicly viewable on the Parentteacherhub Platform, along with your name. This also may be indexed by search engines and be republished elsewhere on the Internet in accordance with our Terms of Service. For more information about what you can change, see the below section on Your Choices.</p>
<p><strong>Communications.</strong> When you communicate with us (via email, through the Parentteacherhub Platform, or otherwise), we may maintain a record of your communication.</p>
<p><strong>Automatically Collected Information About Your Activity.</strong> We may use cookies, log files, pixel tags, local storage objects, and other tracking technologies to automatically collect information about your activities, such as your searches, page views, date and time of your visit, and other information about your use of the Parentteacherhub Platform. We may also collect information that your computer or mobile device provides to us in connection with your use of the Parentteacherhub Platform such as your browser type, type of computer or mobile device, browser language, IP address, mobile carrier, unique device identifier, location, and requested and referring URLs. We also receive information when you view content on or otherwise interact with the Parentteacherhub Platform, even if you have not created an account. For more information, see the “Cookies, Pixels and Tracking” section below and our Cookie Policy.</p>
<p><strong>Engagement.</strong> We collect browsing information – such as IP address and location, date and time stamp, user agent, Parentteacherhub cookie ID (if applicable), URL, unique advertising or content identifiers (if applicable) and time zone, and other information about user activities on the Parentteacherhub Platform, as well as on third-party sites and services that have embedded our Parentteacherhub pixels (“Pixels''), widgets, plug-ins, buttons, or related services. See the section below about Parentteacherhub Ads and Personalization for more detailed information about how our Pixels may be used by publishers or users of our advertising services (“Ad Services”) on the Parentteacherhub Platform to enable personalization, as well as your choices related to advertising and personalization. We may also receive information about you from third parties, such as other users, partners (including ad partners), or our affiliated companies.</p>
<h3>How We Use Your Information</h3>
<p>We do not sell your personal information – such as your name and contact information – to third parties to use for their own marketing purposes. Parentteacherhub uses the information we collect for the following purposes:</p>
<ul>
<li>Provide our Services. To provide you the services we offer on the Parentteacherhub Platform and make the Parentteacherhub Platform available to the public, communicate with you about your use of the Parentteacherhub Platform, respond to your inquiries, provide troubleshooting, and for other customer service purposes.</li>
<li>Marketing and Promotions. For marketing and promotional purposes, such as to send you news and newsletters, special offers, and promotions, or to otherwise contact you about products or information we think may interest you, including information about third-party products and services.</li>
<li>Analytics. To gather metrics to better understand how users access and use the Parentteacherhub Platform; to evaluate and improve the Parentteacherhub Platform, including the Ad Services and personalization, and to develop new products and services.</li>
<li>Comply with Law. To comply with legal obligations, as part of our general business operations, and for other business administration purposes.</li>
<li>Prevent Misuse. Where we believe necessary to investigate, prevent or take action regarding illegal activities, suspected fraud, situations involving potential threats to the safety of any person or violations of our Terms of Service or this Privacy Policy.</li>
</ul>
<h3>How We Share Your Information</h3>
<p>We share information as set forth below, and where individuals have otherwise consented:</p>
<p><strong>Service Providers.</strong> We may share your information with third-party service providers who use this information to perform services for us, such as payment processors, hosting providers, auditors, advisors, consultants, customer service and support providers, as well as those who assist us in providing the Ad Services.</p>
<p><strong>Affiliates.</strong> The information collected about you may be accessed by or shared with subsidiaries and affiliates of Parentteacherhub, Inc., whose use and disclosure of your personal information is subject to this Privacy Policy.</p>
<p><strong>Business Transfers.</strong> We may disclose or transfer information, including personal information, as part of any merger, sale, and transfer of our assets, acquisition or restructuring of all or part of our business, bankruptcy, or similar event.</p>
<p><strong>Legally Required.</strong> We may disclose your information if we are required to do so by law.</p>
<p><strong>Protection of Rights.</strong> We may disclose information where we believe it necessary to respond to claims asserted against us or, comply with legal process (e.g., subpoenas or warrants), enforce or administer our agreements and terms, for fraud prevention, risk assessment, investigation, and protect the rights, property or safety of Parentteacherhub, its users, or others.</p>
<p><strong>Your Content and Public Information.</strong> Your content, including your name, profile picture, profile information, and certain associated activity information is available to other users of the Parentteacherhub Platform and may also be viewed publicly. Public viewing includes availability to non-registered visitors and can occur when users share your content across other sites or services. In addition, your content may be indexed by search engines. In some cases, we may charge for access to your content and public information on the Parentteacherhub Platform. See the section below about Your Choices for information about how you may change how certain information is shared or viewed by others.</p>
<p><strong>Metrics.</strong> We may share with our advertisers or publishers aggregate statistics, metrics and other reports about the performance of their ads or content in the Parentteacherhub Platform such as the number of unique user views, demographics about the users who saw their ads or content, conversion rates, and date and time information. We do not share IP addresses or personal information, but certain features may allow you to share your personal information with advertisers on our platform if you choose to do so. We may also allow our advertisers or publishers to use Pixels on the Parentteacherhub Platform in order to collect information about the performance of their ads or content.</p>
<p><strong>Anonymized and Aggregated Data.</strong> We may share aggregated or de-identified information with third parties for research, marketing, analytics and other purposes, provided such information does not identify a particular individual.</p>
<p><strong>Cookies, Pixels and Tracking</strong>
We and our third-party providers use cookies, clear GIFs/pixel tags, JavaScript, local storage, log files, and other mechanisms to automatically collect and record information about your usage and browsing activities on the Parentteacherhub Platform and across third-party sites or online services. </p>
<h3>How We Protect Your Information</h3>
<p>The security of your information is important to us. Parentteacherhub has implemented safeguards to protect the information we collect. However, no website or Internet transmission is completely secure. We urge you to take steps to keep your personal information safe, such as choosing a strong password and keeping it private, as well as logging out of your user account, and closing your web browser when finished using the Parentteacherhub Platform on a shared or unsecured device.</p>
<p><strong>Access and Amend Your Information</strong>
You may update or correct your account information at any time by logging in to your account. You may also make a number of other adjustments to settings or the display of information about you as described in more detail in the following section about Your Choices.</p>
<p><strong>Your Choices</strong>
You may, of course, decline to submit information through the Parentteacherhub Platform, in which case we may not be able to provide certain services to you. You may also control the types of notifications and communications we send, limit the information shared within the Parentteacherhub Platform about you, and otherwise amend certain privacy settings. Here is some further information about some of your choices:</p>
<p><strong>Your Content.</strong> You may edit or delete the answers that you post at any time. Any questions you have posted may remain on the Parentteacherhub Platform and be edited by other users. </p>
<p><strong>Emails and Notifications.</strong> When you join the Parentteacherhub Platform by signing up for an account or creating a profile, as part of the service, you will receive email digests containing content from the Parentteacherhub Platform that we believe may match your interests. </p>
<p><strong>Children’s Privacy</strong>
We do not knowingly collect or solicit personal information from anyone under the age of 13 or knowingly allow such persons to register. If we become aware that we have collected personal information from a child under the relevant age without parental consent, we take steps to delete that information.</p>
<p><strong>Links to Other Websites</strong>
The Parentteacherhub Platform may contain links to third-party sites or online services. We are not responsible for the practices of such third parties, whose information practices are subject to their own policies and procedures, not to this Privacy Policy.</p>
<p><strong>Additional Information for California Residents</strong>
This section provides information organized in accordance with the California Consumer Privacy Act (“CCPA”) for residents of California about how we handle certain personal information we have collected over the past 12 months.</p>
<p><strong>Categories of Personal Information.</strong> This Privacy Policy discloses the categories of personal information that we collect, use, and disclose in order to operate our business over the past 12 months.</p>
<ul>
<li><strong>Collect.</strong> The section above entitled <strong>The Information We Collect</strong> discloses the categories of personal information that we collect, which include your account and profile information, your content, your communications with us, your information you provide from linked networks, information about your activity on Parentteacherhub, and how you engage with our Parentteacherhub.</li>
<li><strong>Use.</strong> The section above entitled <strong>How We Use Your Information</strong> discloses the that the categories of personal information we collect are used to provide our services, for personalization, to provide advertising in order to generate income to operate Parentteacherhub, to promote our services to you, to analyze how our services are used, to comply with law, and to prevent misuse of Parentteacherhub.</li>
<li><strong>Disclose.</strong> The section above entitled <strong>How We Share Your Information</strong> discloses that we share your personal information with, service providers, affiliates, law enforcement authorities, and as needed with third parties to provide our services.</li>
</ul>
<p><strong>We do not sell your personal information to third parties.</strong> Parentteacherhub may share your personal information with third parties and third parties may collect your personal information as described above in the How We Share Your Information section. </p>
<h3>Contact Us</h3>
<p>If you have any questions about our practices or this Privacy Policy, please contact us at Parentteacherhub@gmail.com.</p>

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