 <article class="card single-blog no-image-post text-center col-lg-6">
                            <div class="inner-wrap">
                                <mark class="catagory"><?php the_category();?></mark>
                                <h2 class="card-title h1"><?php the_title();?></h2>
                                <!-- Blog Content-->
                                <div class="blgo-content">
                                    <span class="posted-date"><?php echo esc_html(get_the_date());?></span>
                                </div>
                                
                        <?php get_template_part('template-parts/common/blog');?>

                            </div>
                        </article>