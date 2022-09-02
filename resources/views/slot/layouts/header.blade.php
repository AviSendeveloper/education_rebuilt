 <!-- HEADER MOBILE-->
 <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
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
                        <li class="{{'admin-index'==request()->path()?'active':''}}  has-sub">
                            <a class="js-arrow" href="/admin-index">
                                <i class="fas fa-tachometer-alt"></i>Admin Table</a>
                            
                        </li>
                       
                        <li class=" {{'user-table'==request()->path()?'active':''}} ">
                            <a href="/user-table">
                                <i class="fas fa-table"></i>User Table</a>
                        </li>

                         <li class=" {{'user-group'==request()->path()?'active':''}} ">
                            <a href="/user-group">
                                <i class="fas fa-object-group"></i>User Group Table</a>
                        </li>
                       <li class=" {{'user-reffer'==request()->path()?'active':''}} ">
                            <a href="/user-reffer">
                                <i class="fa fa-user-plus" aria-hidden="true"></i>User Reffer Table</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="/">
                    <img src="{{asset('images/icon/logo.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        
                        <li class="{{'admin-index'==request()->path()?'active':''}}  has-sub">
                            <a class="js-arrow" href="/admin-index">
                                <i class="fas fa-tachometer-alt"></i>Admin Table</a>
                            
                        </li>
                       
                        <li class=" {{'user-table'==request()->path()?'active':''}} ">
                            <a href="/user-table">
                                <i class="fas fa-table"></i>User Table</a>
                        </li>

                         <li class="{{'user-group'==request()->path()?'active':''}} ">
                            <a href="/user-group">
                                <i class="fas fa-object-group"></i>User Group Table</a>
                        </li>
                       <li class="{{'user-reffer'==request()->path()?'active':''}} ">
                            <a href="/user-reffer">
                                <i class="fa fa-user-plus" aria-hidden="true"></i>User Reffer Table</a>
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
                                    <a href="/admin-logout"><i class="fa fa-sign-out-alt fa-2x"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->