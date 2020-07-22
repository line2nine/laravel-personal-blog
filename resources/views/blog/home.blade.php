@extends('blog.master')
@section('content')
    <!-- /.banner-slider -->
    <section class="banner-slider">
        <div class="container">
            <div class="banner-slider-03 carousel slide">
                <ol class="carousel-indicators">
                    <li data-target=".banner-slider-03" data-slide-to="0" class="active"></li>
                    <li data-target=".banner-slider-03" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active background-bg" data-image-src="http://demos-jeweltheme.ipunu91y.maxcdn-edge.com/sasha/images/slider/1.jpg">
                        <article class="post type-post">
                            <div class="entry-content">
                                <div class="overlay">
                                    <div class="inner-content">
                                        <span class="category"><a href="categories.html">Lifestyle</a></span><!-- /.category -->
                                        <h2 class="entry-title"><a href="standard.html">Natural summer</a></h2><!-- /.entry-title -->
                                        <a href="standard.html" class="btn read-more">Read More</a><!-- /.btn -->
                                    </div><!-- /.inner-content -->
                                </div><!-- /.overlay -->
                            </div><!-- /.entry-content -->
                        </article><!-- /.post -->
                    </div><!-- /.item -->

                    <div class="item background-bg" data-image-src="http://demos-jeweltheme.ipunu91y.maxcdn-edge.com/sasha/images/slider/2.jpg">
                        <article class="post type-post">
                            <div class="entry-content">
                                <div class="overlay">
                                    <div class="inner-content">
                                        <span class="category"><a href="categories.html">Lifestyle</a></span><!-- /.category -->
                                        <h2 class="entry-title"><a href="standard.html">Cruise to Alaska</a></h2><!-- /.entry-title -->
                                        <a href="standard.html" class="btn read-more">Read More</a><!-- /.btn -->
                                    </div><!-- /.inner-content -->
                                </div><!-- /.overlay -->
                            </div><!-- /.entry-content -->
                        </article><!-- /.post -->
                    </div><!-- /.item -->
                </div><!-- /.carousel-inner -->
            </div><!-- /.banner-carousel-03 -->
        </div><!-- /.container -->
    </section>
    <!-- /.banner-slider -->

    <!-- /.main-content -->
    <section class="main-content">
        <div class="padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="masonry-posts">
                            <article class="post type-post col-sm-6">
                                <div class="entry-thumbnail"><img src="http://demos-jeweltheme.ipunu91y.maxcdn-edge.com/sasha/images/posts/03/1.jpg" alt="Thumbnail Image"></div><!-- /.entry-thumbnail -->
                                <div class="entry-content">
                                    <span class="category"><a href="categories.html">Lifestyle</a></span><!-- /.category -->
                                    <h2 class="entry-title"><a href="standard.html">Cruise to Alaska</a></h2><!-- /.entry-title -->
                                    <p>
                                        Proin gravida nibh vel velit auctor aliquet. Aenean sollicin lorem quisma bibendum auctor, nisi it consequat ipsnecsa gittis sem nibh idelit. Duis sed odio sit amet nibh vulputate cursus amet
                                    </p>

                                    <a href="standard.html" class="btn">Read more</a><!-- /.btn -->
                                </div><!-- /.entry-content -->
                            </article><!-- /.post -->
                        </div><!-- /.masonry-posts -->

                        <div class="btn-container"><a href="#" class="btn load-more">Load more</a></div><!-- /.btn-container -->
                    </div>

                    <div class="col-sm-4">
                        <aside class="sidebar text-center">
                            <div class="widget widget_about_author">
                                <h3 class="widget-title">About me</h3><!-- /.widget-title -->
                                <div class="widget-details">
                                    <div class="author-avatar"><img src="http://demos-jeweltheme.ipunu91y.maxcdn-edge.com/sasha/images/sidebar/a.jpg" alt="Avatar" class="img-circle"></div><!-- /.author-avatar -->
                                    <p>
                                        Ahasellus rhoncus laoreet odio, sit amet rutrum metus aliquet quis. Sed sed nulla erat. Curabitur ullamcorper dum tortor.
                                    </p>
                                    <div class="author-social">
                                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </div><!-- /.author-social -->
                                </div><!-- /.widget-details -->
                            </div><!-- /.widget -->

                            <div class="widget widget_newsletter">
                                <h3 class="widget-title">Newsletter</h3><!-- /.widget-title -->
                                <div class="widget-details">
                                    <form class="mc4wp-form" method="post">
                                        <div class="mc4wp-form-fields">
                                            <input class="form-control" type="email" name="EMAIL" placeholder="Email Address" required="">
                                            <input type="submit" class="form-control" name="submit" value="Subscribe">
                                        </div>
                                        <div class="mc4wp-response"></div>
                                    </form>
                                </div><!-- /.widget-details -->
                            </div><!-- /.widget -->

                            <div class="widget widget_recent_posts">
                                <h3 class="widget-title">Recent Posts</h3><!-- /.widget-title -->
                                <div class="widget-details">
                                    <article class="post type-post media">
                                        <div class="entry-thumbnail media-left pull-left"><img src="http://demos-jeweltheme.ipunu91y.maxcdn-edge.com/sasha/images/sidebar/a1.jpg" alt="Thumb Image"></div><!-- /.entry-thumbnail -->
                                        <div class="entry-content media-body">
                                            <h3 class="entry-title"><a href="standard.html">Good morning World</a></h3><!-- /.entry-title -->
                                            <span class="time"><time datetime="2017-12-05">May 12, 2017</time></span><!-- /.time -->
                                        </div><!-- /.entry-content -->
                                    </article><!-- /.post -->
                                </div><!-- /.widget-details -->
                            </div><!-- /.widget -->

                            <div class="widget widget_ad">
                                <div class="widget-details">
                                    <a href="#" class="ad-banner"><img src="http://demos-jeweltheme.ipunu91y.maxcdn-edge.com/sasha/images/sidebar/ad.jpg" alt="Ad Banner"></a>
                                </div><!-- /.widget-details -->
                            </div><!-- /.widget -->
                        </aside><!-- /.sidebar -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.padding -->
    </section>
    <!-- /.main-content -->
@endsection
