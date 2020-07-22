<header class="masthead">
    <div class="header-top">
        <div class="container">
            <div class="side-menu-trigger"><span class="trigger-icon"><i class="icon_menu"></i></span></div><!-- /.side-menu-trigger -->
            <a class="navbar-brand hidden-xs" href="./"><img src="{{asset('images/logo.png')}}" alt="Site Logo"></a>
            <div class="menu-search">
                <div class="form-trigger"><i class="icon_search"></i></div>
                <form action="#">
                    <input type="text" name="search" id="menu-search" placeholder="Search here..">
                </form>
            </div>

            <nav class="sidebar-menu">
                <a class="navbar-brand" href="{{route('index')}}"><img src="{{asset('images/logo.png')}}" alt="Site Logo"></a>
                <span class="menu-close"><i class="icon_close"></i></span>

                <ul class="nav navbar-nav">
                    <li class="menu-item menu-item-has-children active">
                        <a href="#">Home</a>
                        <ul class="sub-menu children">
                            <li><a href="index-01.html">Home 01</a></li>
                        </ul>
                    </li>

                    <li class="menu-item menu-item-has-children">
                        <a href="#">Features</a>
                        <ul class="sub-menu children">
                            <li><a href="standard.html">Post Standard</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="categories.html">Categories</a></li>
                    <li class="menu-item"><a href="about.html">About</a></li>
                    <li class="menu-item"><a href="contact.html">Contact</a></li>
                </ul><!-- /.navbar-nav -->

                <div class="menu-social">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div><!-- /.menu-social -->
            </nav><!-- /.sidebar-menu -->
        </div><!-- /.container -->
    </div><!-- /.header-top -->

    <div class="header-bottom">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand visible-xs" href="./"><img src="http://demos-jeweltheme.ipunu91y.maxcdn-edge.com/sasha/images/logo3.png" alt="Site Logo"></a>
                </div>

                <div id="main-menu" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="menu-item menu-item-has-children active">
                            <a href="#">Home</a>
                            <ul class="sub-menu children">
                                <li><a href="index-01.html">Home 01</a></li>
                            </ul>
                        </li>

                        <li class="menu-item menu-item-has-children">
                            <a href="#">Features</a>
                            <ul class="sub-menu children">
                                <li><a href="standard.html">Post Standard</a></li>
                            </ul>
                        </li>
                        <li class="menu-item"><a href="categories.html">Categories</a></li>
                        <li class="menu-item"><a href="about.html">About</a></li>
                        <li class="menu-item"><a href="contact.html">Contact</a></li>
                    </ul><!-- /.navbar-nav -->
                </div><!-- /.navbar-collapse -->
            </nav>
        </div><!-- /.container -->
    </div><!-- /.header-bottom -->
</header><!-- /.masthead -->
