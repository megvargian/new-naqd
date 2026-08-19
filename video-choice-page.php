<?php
/**
 * Template Name: Video Choice Page
 */
get_header();
$get_choice_fields = get_fields();
$background_image = !empty($get_choice_fields['choice_background_image']) ? $get_choice_fields['choice_background_image'] : get_template_directory_uri() . '/inc/assets/images/rassif.jpg';
$choice_title      = !empty($get_choice_fields['choice_title']) ? $get_choice_fields['choice_title'] : __('Choose your path', 'wp-bootstrap-starter');

// find the page using the videos page template so the choice links stay correct without hardcoding a slug
$videos_page = get_posts(array(
    'post_type'      => 'page',
    'posts_per_page' => 1,
    'meta_key'       => '_wp_page_template',
    'meta_value'     => 'new-video-page.php',
    'fields'         => 'ids',
));
$videos_page_url = !empty($videos_page) ? get_permalink($videos_page[0]) : home_url('/new-video-page/');
$red_url  = add_query_arg('set', 'red', $videos_page_url);
$blue_url = add_query_arg('set', 'blue', $videos_page_url);
?>
<section class="video-choice" style="background-image: url('<?php echo esc_url($background_image); ?>');">
    <div class="video-choice__overlay"></div>
    <div class="video-choice__content">
        <h1 class="video-choice__title"><?php echo esc_html($choice_title); ?></h1>
        <div class="video-choice__options">
            <a href="<?php echo esc_url($red_url); ?>" class="video-choice__option video-choice__option--red">
                <?php _e('Red', 'wp-bootstrap-starter'); ?>
            </a>
            <a href="<?php echo esc_url($blue_url); ?>" class="video-choice__option video-choice__option--blue">
                <?php _e('Blue', 'wp-bootstrap-starter'); ?>
            </a>
        </div>
    </div>
</section>

<style>
    .video-choice {
        position: relative;
        min-height: calc( 100dvh - 445px );
        display: flex;
        align-items: center;
        justify-content: center;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    .video-choice__overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.45);
    }
    .video-choice__content {
        position: relative;
        z-index: 1;
        text-align: center;
        color: #fff;
        padding: 0 20px;
    }
    .video-choice__title {
        font-size: clamp(28px, 4vw, 52px);
        margin-bottom: 40px;
        font-weight: 700;
    }
    .video-choice__options {
        display: flex;
        gap: 24px;
        justify-content: center;
        flex-wrap: wrap;
    }
    .video-choice__option {
        display: inline-block;
        min-width: 160px;
        padding: 16px 40px;
        font-size: 20px;
        font-weight: 600;
        text-decoration: none;
        border-radius: 8px;
        color: #fff;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }
    .video-choice__option:hover {
        transform: translateY(-4px);
        color: #fff;
    }
    .video-choice__option--red {
        background: #d21f1f;
        box-shadow: 0 6px 18px rgba(210, 31, 31, 0.5);
    }
    .video-choice__option--blue {
        background: #1f5bd2;
        box-shadow: 0 6px 18px rgba(31, 91, 210, 0.5);
    }

    @media (max-width: 576px) {
        .video-choice__options {
            flex-direction: column;
            align-items: center;
        }
    }
</style>
<?php
get_footer();

