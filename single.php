<?php get_header(); ?>
    <!-- Blog Sectin Start Here -->
    <div id="blog-post">
        <div class="container">
            <div class="row">
                <!-- .blog-content -->
                <div class="col-lg-8 col-sm-12 blog-content">
                    <!-- article -->
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <article class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0s">
                            <div class="post-meta clearfix">
                                <div class="post-title">
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                </div>
                            </div>
                            <?php the_content(); ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- .comment-area -->
                                    <div class="comments_area">
                                        <?php comments_template(); ?>
                                        <div class="col-lg-12">
                                            <div class="comment_title">
                                                <div class="col-lg-12">
                                                    <h4>comments <span>(5)</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_comment">
                                            <div class="col-lg-2">
                                                <div class="comment_img"> <img src="assets/img/blog-single/com_1.jpg" alt=""> </div>
                                            </div>
                                            <div class="col-lg-10">
                                                <div class="comment_text">
                                                    <h5>john michale</h5>
                                                    <p><span class="c_date">Dec 26 2014</span> | <span>reply</span></p>
                                                    <p class="c_text">Duis aute irure dolor in reprehenderit in vol uptate velit esse cillum dolore eu fugiat nulla pari atur. Excepteur sint occaecat cupidatat non proid pent.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_comment">
                                            <div class="col-lg-2">
                                                <div class="comment_img"> <img src="assets/img/blog-single/com_1.jpg" alt=""> </div>
                                            </div>
                                            <div class="col-lg-10">
                                                <div class="comment_text">
                                                    <h5>john michale</h5>
                                                    <p><span class="c_date">Dec 26 2014</span> | <span>reply</span></p>
                                                    <p class="c_text">Duis aute irure dolor in reprehenderit in vol uptate velit esse cillum dolore eu fugiat nulla pari atur. Excepteur sint occaecat cupidatat non proid pent.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reply_comment single_comment">
                                            <div class="col-lg-2">
                                                <div class="comment_img"> <img src="assets/img/blog-single/com_1.jpg" alt=""> </div>
                                            </div>
                                            <div class="col-lg-10">
                                                <div class="comment_text">
                                                    <h5>john michale</h5>
                                                    <p><span class="c_date">Dec 26 2014</span> | <span>reply</span></p>
                                                    <p class="c_text">Duis aute irure dolor in reprehenderit in vol uptate velit esse cillum dolore eu fugiat nulla pari atur. Excepteur sint occaecat cupidatat non proid pent.</p>
                                                </div>
                                                <!-- .comment-reply -->
                                                <div class="single_comment comment_reply">
                                                    <div class="col-lg-2">
                                                        <div class="comment_reply_img comment_img"> <img src="assets/img/blog-single/com_2.jpg" alt=""> </div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <div class="comment_text">
                                                            <h5>john michale</h5>
                                                            <p><span class="c_date">Dec 26 2014</span> | <span>reply</span></p>
                                                            <p class="c_text">Duis aute irure dolor in reprehenderit in vol uptate velit esse cillum dolore eu fugiat nulla pari atur. Excepteur sint occaecat cupidatat non proid pent.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.comment-reply -->
                                            </div>
                                        </div>
                                        <div class="single_comment">
                                            <div class="col-lg-2">
                                                <div class="comment_img"> <img src="assets/img/blog-single/com_1.jpg" alt=""> </div>
                                            </div>
                                            <div class="col-lg-10">
                                                <div class="comment_text">
                                                    <h5>john michale</h5>
                                                    <p><span class="c_date">Dec 26 2014</span> | <span>reply</span></p>
                                                    <p class="c_text">Duis aute irure dolor in reprehenderit in vol uptate velit esse cillum dolore eu fugiat nulla pari atur. Excepteur sint occaecat cupidatat non proid pent.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.comment-area -->
                                </div>
                            </div>
                        </article>
                    <?php endwhile; else : ?>
                        <article class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0s">
                            <p><em>No se encontraron articulos</em></p>
                        </article>
                    <?php endif; ?>
                    <!-- /article -->
                </div>
                <!-- /.blog-content -->
                <!-- .sidebar -->
                <div class="col-lg-3 col-xs-12 sidebar pull-right">
                    <?php get_sidebar(); ?>
                </div>
                <!-- /.sidebar -->
            </div>
        </div>
    </div>
    <!-- Blog Sectin End Here -->
<?php get_footer(); ?>