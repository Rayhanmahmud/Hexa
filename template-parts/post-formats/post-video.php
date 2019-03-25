<article class="card single-blog text-center video-post col-lg-6">
                            <mark class="catagory"><?php the_category(" ");?></mark>
                            <h2 class="card-title h1"><?php the_title();?></h2>
                            <!-- Blog Content-->
                            <div class="blgo-content">
                                <a href="https://www.youtube.com/watch?v=qoq8B8ThgEM" class="video-overlay" data-fancybox><img class="card-img rounded-0" src="<?php the_post_thumbnail();?>" alt="Blog Image"></a>
                                <span class="posted-date"><?php echo esc_html(get_the_date());?></span>
                            </div>
                            <!-- Card Body -->
                            
                            <?php get_template_part('template-parts/common/blog');?>
                        </article>