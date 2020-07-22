@extends('blog.master')
@section('content')
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
    </section><!-- /.banner-slider -->
@endsection
