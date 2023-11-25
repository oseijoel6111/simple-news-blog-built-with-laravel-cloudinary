<nav class="site-nav">
    <div class="container">
        <div class="site-navigation">
            <div class="row">
                <div class="col-md-6 text-center order-1 order-md-2 mb-3 mb-md-0">
                    <a href="/" class="logo m-0 text-uppercase">MagDesign</a>
                </div>
                <div class="col-md-3 order-3 order-md-1">
                    <form action="#" class="search-form">
                        @csrf
                        <span class="icon-search2"></span>
                        <input type="search" class="form-control" placeholder="Search...">
                    </form>
                </div>
                <div class="col-md-3 text-end order-2 order-md-3 mb-3 mb-md-0">
                    <div class="d-flex">
                        <ul class="list-unstyled social me-auto">
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                        <a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block"
                            data-toggle="collapse" data-target="#main-navbar">
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
            <ul class="js-clone-nav d-none d-lg-inline-none text-start site-menu float-end">
                <li class="active"><a href="/">Home</a></li>
                <li class="has-children">
                    <a href="/categories">Categories</a>
                    <ul class="dropdown">
                        <li><a href="/travel">Travel</a></li>
                        <li><a href="#">Food</a></li>
                        <li><a href="#">Technology</a></li>
                        <li><a href="#">Business</a></li>
                        <li class="has-children">
                            <a href="#">Dropdown</a>
                            <ul class="dropdown">
                                <li><a href="#">Sub Menu One</a></li>
                                <li><a href="#">Sub Menu Two</a></li>
                                <li><a href="#">Sub Menu Three</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="/post">Travel</a></li>
                <li><a href="/food">Food</a></li>
                <li><a href="#">Technology</a></li>
                <li><a href="#">Business</a></li>
            </ul>
        </div>
    </div>
</nav>