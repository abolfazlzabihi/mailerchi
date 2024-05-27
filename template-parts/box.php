<div class="col-12 mb-4 single-meta p-4">

    <div class="row align-items-center">
        <div class="col-12 col-md-5">
            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="" class="rounded-3">

        </div>
        <div class="col-12 col-md-7">
            <div class="d-block p-3 mx-2 ">
                <div class="blog-p">

                    <a href="<?php the_permalink(); ?>" class="blog-title">
                        <?php the_title(); ?>
                    </a>
                    <div class="mb-3"></div>
                    <?php the_excerpt(); ?>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-calendar2 fs-6 me-2" style="color:var(--primary)"></i>
                            <span class="blog-calendar">
                                <?php echo get_the_date(); ?>
                            </span>
                        </div>
                        <div class="d-flex align-items-center ms-4">
                            <i class="bi bi-chat-right fs-6 me-2 pt-2" style="color:gray"></i>
                            <?php echo get_comments_number(); ?>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



</div>