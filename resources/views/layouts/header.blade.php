 <style>
     .sub-menu a{
    justify-content: space-between;}
    .sub-menu ul{list-style: none;
    /* padding: 0; */
    /* margin: 4px; */
    padding-left: 16px;
}
 </style>
 <!-- HEADER MOBILE-->
 <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="{{asset('_next/static/img/logo.png')}}" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="admin-index">
                                <i class="fas fa-tachometer-alt"></i>Admin Table</a>
                        </li>
                        <li>
                            <a href="/user-details">
                                <i class="fas fa-table"></i>User Details</a>
                        </li>
                        <li>
                            <a href="/show-category">
                                <i class="far fa-check-square"></i>Show Talent Category</a>
                        </li>
                        <li>
                            <a href="/show-question-category">
                                <i class="far fa-check-square"></i>Show Question Category</a>
                        </li>
                        <li>
                            <a href="/add-subject">
                                <i class="far fa-check-square"></i>Add Talent</a>
                        </li>
                        <li>
                            <a href="/add-question">
                                <i class="far fa-check-square"></i>Post Question</a>
                        </li>
                        <li>
                            <a href="/user-upload-subject">
                                <i class="far fa-check-square"></i>User Upload Talent</a>
                        </li>
                        <li>
                            <a href="/user-upload-question">
                                <i class="far fa-check-square"></i>User Upload Question</a>
                        </li>
                        <li class=" {{'user-group'==request()->path()?'active':''}} ">
                            <a href="/user-group">
                                <i class="fas fa-object-group"></i>User Group Table</a>
                        </li>
                        <li class=" {{'user-reffer'==request()->path()?'active':''}} ">
                            <a href="/user-reffer">
                                <i class="fa fa-user-plus" aria-hidden="true"></i>User Reffer Table</a>
                        </li>
                        <li>
                            <a href="/cache-clear">
                                <i class="fas fa-table"></i>Cache Clear</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('_next/static/img/logo.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1 animated bounceInDown">
                <nav class="navbar-sidebar">
                    
                         
                        		
                        	
                    <ul class="list-unstyled navbar__list">
                        <!-- dropdown start -->
                	 <!--   <li class='sub-menu'><a class="icn"><i class="fas fa-tachometer-alt"></i>Help<div class='fa fa-caret-down right' style="margin-left: 15px;"></div></a>-->
                		<!--	<ul>-->
                		<!--		<li><a href='#settings'><i class="fas fa-tachometer-alt"></i>FAQ's</a></li>-->
                		<!--		<li><a href='#settings'><i class="fas fa-tachometer-alt"></i>Submit a Ticket</a></li>-->
                		<!--		<li><a href='#settings'><i class="fas fa-tachometer-alt"></i>Network Status</a></li>-->
                		<!--	</ul>-->
                		<!--</li>-->
                		<!-- dropdown end -->
                        
                        <li class="{{'admin-index'==request()->path()?'active':''}}  has-sub">
                            <a class="js-arrow" href="/admin-index">
                                <i class="fas fa-tachometer-alt"></i>Admin Table</a>
                        </li>
                        <li class=" {{'user-details'==request()->path()?'active':''}} ">
                            <a href="/user-details">
                                <i class="fas fa-user"></i>User Details</a>
                        </li>
                        
                        <!-- talent zone start -->
                            <li class='sub-menu'><a class="icn" href="#"><i class="fas fa-address-card"></i>Talent Zone<div class='fa fa-caret-down right' style="margin-left: 15px;"></div></a>
                                <ul>
                                    <li><a href='/show-category'><i class="fas fa-eye"></i>Show Talent Category</a></li>
                                    <li><a href='/add-subject'><i class="fa fa-plus"></i>Add Talent</a></li>
                                    <li><a href='/user-upload-subject'><i class="fa fa-upload"></i>User Upload Talent</a></li>
                                </ul>
                		    </li>
                        <!-- talent zone end -->
                        
                        <!-- post question start -->
                            <li class='sub-menu'><a class="icn" href="#"><i class="fas fa-question-circle"></i>Post Question<div class='fa fa-caret-down right' style="margin-left: 15px;"></div></a>
                                <ul>
                                    <li><a href='/show-question-category'><i class="fas fa-eye"></i></i>Show Question Category</a></li>
                                    <li><a href='/add-question'><i class="fa fa-plus"></i>Add Question</a></li>
                                    <li><a href='/user-upload-question'><i class="fa fa-upload"></i>User Upload Question</a></li>
                                </ul>
                		    </li>
                        <!-- post question end -->
                        
                        <!-- signup start -->
                         <li class='sub-menu'><a class="icn" href="#"><i class="fas fa-tachometer-alt"></i>Signup<div class='fa fa-caret-down right' style="margin-left: 15px;"></div></a>
                                <ul>
                                    <li><a href='/user-group'><i class="fas fa-object-group"></i>User Group Table</a></li>
                                    <li><a href='/user-reffer'><i class="fa fa-user-plus"></i>User Reffer Table</a></li>
                                </ul>
                		    </li> 
                        <!-- signup end -->
                        
                        <!-- cache clear -->
                        <li class="has-sub">
                            <a class="js-arrow" href="/cache-clear">
                                <i class="fas fa-tachometer-alt"></i>Cache Clear</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

          <!-- PAGE CONTAINER-->
          <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                               
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{asset('images/profile.jpg')}}" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{Auth::guard('admin')->user()->name}}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{asset('images/profile.jpg')}}" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{Auth::guard('admin')->user()->name}}</a>
                                                    </h5>
                                                    <span class="email">{{Auth::guard('admin')->user()->email}}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="/admin-logout">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->