<?php
/**
 * Template Name: New Videos Page
 */
get_header();
$get_new_video_fields = get_fields();

// Hero section fields (ACF) with safe fallbacks
$hero_video_url  = !empty($get_new_video_fields['hero_video_url']) ? $get_new_video_fields['hero_video_url'] : '';
$hero_video_file = !empty($get_new_video_fields['hero_video_file']) ? $get_new_video_fields['hero_video_file'] : '';
$hero_poster     = !empty($get_new_video_fields['hero_video_poster']) ? $get_new_video_fields['hero_video_poster'] : '';
$hero_title      = !empty($get_new_video_fields['hero_title']) ? $get_new_video_fields['hero_title'] : get_the_title();
$hero_text       = !empty($get_new_video_fields['hero_text']) ? $get_new_video_fields['hero_text'] : '';

// Flip card faces: each click flips to the next image
$flip_faces = array();
if (!empty($get_new_video_fields['flip_card_images']) && is_array($get_new_video_fields['flip_card_images'])) {
    foreach ($get_new_video_fields['flip_card_images'] as $flip_image) {
        if (is_array($flip_image) && !empty($flip_image['url'])) {
            $flip_faces[] = $flip_image['url'];
        } elseif (is_string($flip_image) && $flip_image !== '') {
            $flip_faces[] = $flip_image;
        }
    }
}

// Latest 6 videos, rendered 3 per row
$video_ids = array();
$video_query = new WP_Query(
    array(
        'post_type'      => 'video',
        'posts_per_page' => 6,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'fields'         => 'ids',
    )
);
if ($video_query->have_posts()) {
    while ($video_query->have_posts()) {
        $video_query->the_post();
        array_push($video_ids, get_the_ID());
    }
    wp_reset_postdata();
}
?>
<section class="video-hero py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                <div class="video-hero__player">
                    <?php if ($hero_video_url) {
                        $hero_path  = parse_url($hero_video_url, PHP_URL_PATH);
                        $hero_parts = explode('/', $hero_path);
                        $hero_embed = end($hero_parts);
                    ?>
                        <iframe
                            src="https://www.youtube.com/embed/<?php echo esc_attr($hero_embed); ?>"
                            title="<?php echo esc_attr($hero_title); ?>"
                            frameborder="0"
                            allowfullscreen
                            allow="accelerometer; encrypted-media; picture-in-picture">
                        </iframe>
                    <?php } elseif ($hero_video_file) { ?>
                        <video controls playsinline<?php echo $hero_poster ? ' poster="' . esc_url($hero_poster) . '"' : ''; ?>>
                            <source src="<?php echo esc_url($hero_video_file); ?>" type="video/mp4">
                        </video>
                    <?php } elseif ($hero_poster) { ?>
                        <img src="<?php echo esc_url($hero_poster); ?>" alt="<?php echo esc_attr($hero_title); ?>">
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="video-hero__content">
                    <h1 class="video-hero__title"><?php echo esc_html($hero_title); ?></h1>
                    <div class="video-hero__text"><?php echo wp_kses_post($hero_text); ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="videos-grid-section py-5" style="border-top: 1px solid #5b5b5b">
    <div class="container position-relative">
        <?php if (!empty($flip_faces)) { ?>
            <div class="flip-card" id="flipCard" role="button" tabindex="0" aria-label="flip">
                <div class="flip-card__inner">
                    <div class="flip-card__face flip-card__face--front">
                        <img src="<?php echo esc_url($flip_faces[0]); ?>" alt="">
                    </div>
                    <div class="flip-card__face flip-card__face--back">
                        <img src="<?php echo esc_url(isset($flip_faces[1]) ? $flip_faces[1] : $flip_faces[0]); ?>" alt="">
                    </div>
                </div>
            </div>
        <?php } ?>

        <div class="row">
            <?php foreach ($video_ids as $video_id) {
                $url   = get_field('youtube_url', $video_id);
                $path  = parse_url($url, PHP_URL_PATH);
                $parts = explode('/', $path);
                $video_embed_id = end($parts);
            ?>
                <div class="col-lg-4 col-md-6 col-12 mb-3 px-1">
                    <div class="openPopup fade-in" data-key="<?php echo esc_attr($video_id); ?>" data-key-url="<?php echo esc_attr($video_embed_id); ?>">
                        <img class="w-100 d-block single-article-video" style="cursor: pointer;" src="<?php echo esc_url(get_the_post_thumbnail_url($video_id)); ?>" alt="<?php echo esc_attr(get_the_title($video_id)); ?>">
                        <img class="arrow-play" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/play.ico" alt="play">
                    </div>
                    <div class="overlay videoOverlay-<?php echo esc_attr($video_id); ?>">
                        <div class="position-relative w-100 h-100">
                            <div class="popup">
                                <button class="close-btn" data-key="<?php echo esc_attr($video_id); ?>">
                                    <span aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#fff"><path d="M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z"/></svg>
                                    </span>
                                </button>
                                <iframe
                                        frameborder="0"
                                        width="360" height="640"
                                        allowfullscreen
                                        allow="autoplay; encrypted-media">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<style>
    .video-hero__player {
        position: relative;
        width: 100%;
        padding-top: 56.25%;
        overflow: hidden;
        border-radius: 8px;
        background: #000;
    }
    .video-hero__player iframe,
    .video-hero__player video,
    .video-hero__player img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        border: 0;
    }
    .video-hero__title {
        font-size: clamp(24px, 3vw, 40px);
        margin-bottom: 16px;
    }
    .video-hero__text {
        font-size: clamp(15px, 1.3vw, 18px);
        line-height: 1.9;
    }

    .flip-card {
        position: absolute;
        top: -18px;
        right: 12px;
        width: 64px;
        height: 64px;
        perspective: 800px;
        cursor: pointer;
        z-index: 5;
    }
    .flip-card__inner {
        position: relative;
        width: 100%;
        height: 100%;
        transition: transform 0.6s;
        transform-style: preserve-3d;
    }
    .flip-card.is-flipped .flip-card__inner {
        transform: rotateY(180deg);
    }
    .flip-card__face {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        -webkit-backface-visibility: hidden;
        border-radius: 50%;
        overflow: hidden;
        background: #fff;
    }
    .flip-card__face--back {
        transform: rotateY(180deg);
    }
    .flip-card__face img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    @media (max-width: 991px) {
        .flip-card {
            width: 48px;
            height: 48px;
            top: -10px;
        }
    }
</style>

<script>
    jQuery(document).ready(function($) {
        $('.openPopup').click(function() {
            var key = $(this).attr('data-key');
            var embedKey = $(this).attr('data-key-url');
            <?php if (isMob()) { ?>
                window.location.href = 'https://www.youtube.com/embed/' + embedKey + '?autoplay=1';
            <?php } else { ?>
                $('.videoOverlay-' + key).css('display', 'block');
                $('.videoOverlay-' + key).find('iframe').attr('src', 'https://www.youtube.com/embed/' + embedKey + '?autoplay=1');
                $('html, body').addClass('hide_scroll');
            <?php } ?>
            addCounterViewForVideo(key);
        });

        $('.close-btn').click(function() {
            var key = $(this).attr('data-key');
            $('.videoOverlay-' + key).css('display', 'none');
            $('.videoOverlay-' + key).find('iframe').attr('src', '');
            $('html, body').removeClass('hide_scroll');
        });

        function addCounterViewForVideo(videoId) {
            $.ajax({
                type: 'POST',
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                data: {
                    action: 'add_counter_view_video',
                    id: videoId,
                },
                error: function(error) {
                    console.error(error);
                },
            });
        }

        var flipImages = <?php echo wp_json_encode(array_values($flip_faces)); ?>;
        var flipIndex = 0;
        var $flipCard = $('#flipCard');

        function flipToNext() {
            if (flipImages.length < 2) {
                return;
            }
            flipIndex = (flipIndex + 1) % flipImages.length;
            var isFlipped = $flipCard.hasClass('is-flipped');
            // the face that is about to become visible receives the next image
            var $incoming = isFlipped ? $flipCard.find('.flip-card__face--front img') : $flipCard.find('.flip-card__face--back img');
            $incoming.attr('src', flipImages[flipIndex]);
            $flipCard.toggleClass('is-flipped');
        }

        $flipCard.on('click', flipToNext);
        $flipCard.on('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                flipToNext();
            }
        });
    });
</script>
<?php
get_footer();