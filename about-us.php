<?php
/**
 * Template Name: About and Contact us
 */
get_header();
?>
<section class="about-and-contact-us py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <?php
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;
                ?>
            </div>
            <div class="row justify-content-start">
                <div class="col-9">
                    <div class="contact-us">
                        <form action="/">
                            <input type="text" required>
                            <input type="email" required>
                            <input type="tel" required>
                            <textarea name="" id=""></textarea>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();