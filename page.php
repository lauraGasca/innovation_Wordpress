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