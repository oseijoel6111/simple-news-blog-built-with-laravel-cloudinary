<header>
    <!--Mobile Header-->
    <div class="mobile-header bg-white typo-dark">
        <div class="mobile-header-inner">
            <div class="sticky-outer">
                <div class="sticky-head">
                    <div class="basic-container clearfix">
                        <ul class="nav mobile-header-items pull-left">
                            <li class="nav-item"><a href="#" class="zmm-toggle img-before"><i
                                        class="ti-menu"></i></a></li>
                        </ul>
                        <ul class="nav mobile-header-items pull-center">
                            <li>
                                <a href="/" class="img-before"><img src="{{ asset('frontend_assets/images/logo-dark.png') }}"
                                        class="img-fluid" width="149" height="45" alt="Logo"></a>
                            </li>
                        </ul>
                        <ul class="nav mobile-header-items pull-right">
                            <li class="nav-item"><a href="#" class="img-before overlay-search-switch"><i
                                        class="icon-magnifier icons"></i></a></li>
                        </ul>
                    </div>
                    <!-- .basic-container -->
                </div>
                <!-- .sticky-head -->
            </div>
            <!-- .sticky-outer -->
        </div>
        <!-- .mobile-header-inner -->
    </div>
    <!-- .mobile-header -->
    <!--Header-->
    <div class="header-inner header-1 header-absolute">
        <!--Topbar-->
        <div class="topbar relative">
            <div class="basic-container clearfix">
                <ul class="nav topbar-items pull-left">
                    <li class="nav-item">
                        <ul class="nav header-info">
                            <li>
                                <div class="header-address typo-white"><span class="ti-location-pin"></span>
                                    684 West College St. Sun City, USA</div>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav topbar-items pull-right">
                    <li class="nav-item">
                        <div class="social-icons typo-white">
                            <a href="#" class="social-fb"><span class="ti-facebook"></span></a>
                            <a href="#" class="social-twitter"><span class="ti-twitter"></span></a>
                            <a href="#" class="social-instagram"><span class="ti-instagram"></span></a>
                            <a href="#" class="social-pinterest"><span class="ti-pinterest"></span></a>
                            <a href="#" class="social-youtube"><span class="ti-youtube"></span></a>
                            <a href="#" class="social-dribble"><span class="ti-dribbble"></span></a>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="full-view-switch text-center">
                            <i class="ti-search typo-white"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!--Search-->
            <div class="full-view-wrapper hide">
                <a href="#" class="close full-view-close"></a>
                <form class="navbar-form search-form" role="search">
                    @csrf
                    <div class="input-group">
                        <input class="form-control" placeholder="Search hit enter.." name="srch-term"
                            type="text">
                    </div>
                </form>
            </div>
        </div>
        <!--Topbar-->
        <!--Sticky part-->
        <div class="sticky-outer">
            <div class="sticky-head">
                <!--Navbar-->
                <nav class="navbar nav-shadow">
                    <div class="basic-container clearfix">
                        <div class="navbar-inner">
                            <!--Overlay Menu Switch-->
                            <ul class="nav navbar-items pull-left">
                                <li class="list-item">
                                    <a href="/" class="logo-general"><img
                                            src="{{ asset('frontend_assets/images/logo-light.png') }}" class="img-fluid" width="166"
                                            height="50" alt="Logo" /></a>
                                    <a href="/" class="logo-sticky"><img src="{{ asset('frontend_assets/images/logo-dark.png') }}"
                                            class="img-fluid" width="166" height="50" alt="Logo" /></a>
                                </li>
                            </ul>
                            <!-- Menu -->
                            <ul class="nav navbar-items pull-right">
                                <!--List Item-->
                                <li class="list-item">
                                    <ul class="nav navbar-main menu-white">
                                        <li class="active cus-img-menu">
                                            <a href="/">Home</a>
                                        </li>
                                        <li class="dropdown dropdown-sub"><a href="#">Pages</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="/about-us">About Us</a></li>
                                                <li class="dropdown"><a href="events.html">Events</a>
                                                    <ul class="dropdown-menu child-dropdown-menu">
                                                        <li><a href="events.html">Events Default</a></li>
                                                        <li><a href="events-2.html">Events 2</a></li>
                                                        <li><a href="events-3.html">Events 3</a></li>
                                                        <li><a href="event-details.html">Event Details</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown"><a href="gallery.html">Gallery</a>
                                                    <ul class="dropdown-menu child-dropdown-menu">
                                                        <li><a href="gallery-2-columns.html">Gallery 2
                                                                Columns</a></li>
                                                        <li><a href="gallery-3-columns.html">Gallery 3
                                                                Columns</a></li>
                                                        <li><a href="gallery-4-columns.html">Gallery 4
                                                                Columns</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown"><a href="#">Gallery Single</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="gallery-standard.html">Standard</a>
                                                        </li>
                                                        <li><a href="gallery-video.html">Video</a></li>
                                                        <li><a href="gallery-audio.html">Audio</a></li>
                                                        <li><a href="single-gallery.html">Single Gallery</a>
                                                        </li>
                                                        <li><a href="google-maps.html">Google Maps</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown"><a href="our-pastors.html">Our
                                                        Pastors</a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="our-pastors-slide.html">Our Pastors
                                                                Slide</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown"><a href="campaigns.html">Campaigns</a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="donate-now.html">Donate Now</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-sub"><a href="/sermons">Sermons</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown">
                                                    <a href="sermons-grid.html">Sermons Grid</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="sermons-grid-2.html">Sermons Grid 2</a>
                                                        </li>
                                                        <li><a href="sermons-grid-3.html">Sermons Grid 3</a>
                                                        </li>
                                                        <li><a href="sermons-grid-4.html">Sermons Grid 4</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="/sermons">Sermon List</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="sermons-list-left-sidebar.html">Sermons
                                                                List Left Sidebar</a></li>
                                                        <li><a href="sermons-list-right-sidebar.html">Sermons
                                                                List Right Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="/sermon-details">Sermon Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown mega-dropdown dropdown-sub relative"><a
                                                href="/ministries-grid-2">Ministries</a>
                                            <ul class="dropdown-menu mega-dropdown-menu dropdown-col-2">
                                                <li class="mega-dropdown-col"><a href="#"
                                                        class="text-uppercase theme-color">Ministry
                                                        Details</a>
                                                    <ul class="mega-child-dropdown-menu">
                                                        <li><a href="childrens-ministry.html">Childrens
                                                                Ministry</a></li>
                                                        <li><a href="family-ministry.html">Family
                                                                Ministry</a></li>
                                                        <li><a href="global-ministry.html">Global
                                                                Ministry</a></li>
                                                        <li><a href="music-ministry.html">Music Ministry</a>
                                                        </li>
                                                        <li><a href="prison-ministry.html">Prison
                                                                Ministry</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-dropdown-col"><a href="#"
                                                        class="text-uppercase theme-color">Ministry
                                                        Layouts</a>
                                                    <ul class="mega-child-dropdown-menu">
                                                        <li><a href="ministries-grid-2.html">Ministries Grid
                                                                2</a></li>
                                                        <li><a href="ministries-grid-3.html">Ministries Grid
                                                                3</a></li>
                                                        <li><a href="ministries-grid-4.html">Ministries Grid
                                                                4</a></li>
                                                        <li><a href="ministries-left-sidebar.html">Ministries
                                                                Left Sidebar</a></li>
                                                        <li><a href="ministries-grid-2.html">Ministries
                                                                Right Sidebar</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-sub"><a href="/blog">Blog</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown"><a href="/blog">Blog Grid</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="blog-grid-right-sidebar.html">Blog Grid
                                                                2</a></li>
                                                        <li><a href="blog-grid-3.html">Blog Grid 3</a></li>
                                                        <li><a href="blog-grid-4.html">Blog Grid 4</a></li>
                                                        <li><a href="blog-grid-left-sidebar.html">Blog Grid
                                                                Left Sidebar</a></li>
                                                        <li><a href="blog-grid-right-sidebar.html">Blog Grid
                                                                Right Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown"><a href="blog-masonry-3.html">Blog
                                                        Masonry</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="blog-masonry-right-sidebar.html">Blog
                                                                Masonry 2</a></li>
                                                        <li><a href="blog-masonry-3.html">Blog Masonry 3</a>
                                                        </li>
                                                        <li><a href="blog-masonry-4.html">Blog Masonry 4</a>
                                                        </li>
                                                        <li><a href="blog-masonry-left-sidebar.html">Blog
                                                                Masonry + Left Sidebar</a></li>
                                                        <li><a href="blog-masonry-right-sidebar.html">Blog
                                                                Masonry + Right Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="/blog-single">Blog Single</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/contact-us">Contact Us</a></li>
                                    </ul>
                                </li>
                                <!--List Item End-->
                                <!--List Item-->
                                <li class="list-item">
                                    <div class="header-navbar-text-1"><a href="/donate-now"
                                            class="h-donate-btn">Donate</a></div>
                                </li>
                                <!--List Item End-->
                            </ul>
                            <!-- Menu -->
                        </div>
                    </div>
                </nav>
            </div>
            <!--sticky-head-->
        </div>
        <!--sticky-outer-->
    </div>
</header>