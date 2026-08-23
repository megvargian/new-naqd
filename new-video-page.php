<?php
/**
 * Template Name: New Videos Page
 */
get_header();
if(!isset($_GET['set']) || !in_array(sanitize_text_field($_GET['set']), ['98cb790a-504f-49c2-a267-2b346c3cc97b', '4e3de2f0-3f17-447a-a81b-1435ada1df00'])) {
    $choice_page_url =  home_url('/video-choice/');
    wp_redirect($choice_page_url);
    exit;
}
$get_new_video_fields = get_fields();

// Hero section fields (ACF) with safe fallbacks
$hero_video_url  = !empty($get_new_video_fields['hero_video_url']) ? $get_new_video_fields['hero_video_url'] : '';
$hero_video_file = !empty($get_new_video_fields['hero_video_file']) ? $get_new_video_fields['hero_video_file'] : '';
$hero_title      = !empty($get_new_video_fields['hero_title']) ? $get_new_video_fields['hero_title'] : get_the_title();
$hero_text       = !empty($get_new_video_fields['hero_text']) ? $get_new_video_fields['hero_text'] : '';
$videos          = !empty($get_new_video_fields['videos']) ? $get_new_video_fields['videos'] : array();

$video_set = isset($_GET['set']) && sanitize_text_field($_GET['set']) === '98cb790a-504f-49c2-a267-2b346c3cc97b' ? ($is_front = true) : ($is_front = false);

function returnEmbed($url) {
    $parts = explode('/', (string) parse_url($url, PHP_URL_PATH));
    return end($parts);
}
?>
<section class="video-hero py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="video-hero__content">
                    <h1 class="video-hero__title d-none"><?php echo esc_html($hero_title); ?></h1>
                    <div class="video-hero__text">
                        <?php echo esc_html($hero_text); ?>
                    </div>
                </div>
            </div>
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
                            muted
                            autoplay
                            allow="accelerometer; encrypted-media; picture-in-picture">
                        </iframe>
                    <?php } elseif ($hero_video_file) { ?>
                        <video controls playsinline<?php echo $hero_poster ? ' poster="' . esc_url($hero_poster) . '"' : ''; ?>>
                            <source src="<?php echo esc_url($hero_video_file); ?>" type="video/mp4">
                        </video>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="videos-grid-section py-5" style="border-top: 1px solid #5b5b5b">
    <div class="container position-relative custom-container">
        <div class="row justify-content-center">
            <?php foreach ($videos as $key => $card) { ?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3 px-1">
                    <div class="video-flip">
                        <div class="video-flip__inner">
                            <?php if($is_front) { ?>
                                <div class="video-flip__face video-flip__face--front">
                                    <div class="openPopup fade-in" data-key="<?php echo esc_attr('front'.$key); ?>" data-key-url="<?php echo esc_attr(returnEmbed($card['duo_videos']['front']['youtube_url'])); ?>">
                                        <img class="w-100 d-block single-article-video" style="cursor: pointer;" src="<?php echo esc_url($card['duo_videos']['front']['image']); ?>" alt="<?php echo esc_attr($card['duo_videos']['front']['title']); ?>">
                                        <img class="arrow-play" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/play.ico" alt="play">
                                    </div>
                                </div>
                                <div class="video-flip__face video-flip__face--back">
                                    <div class="openPopup fade-in" data-key="<?php echo esc_attr('back'.$key); ?>" data-key-url="<?php echo esc_attr(returnEmbed($card['duo_videos']['back']['youtube_url'])); ?>">
                                        <img class="w-100 d-block single-article-video" style="cursor: pointer;" src="<?php echo esc_url($card['duo_videos']['back']['image']); ?>" alt="<?php echo esc_attr($card['duo_videos']['back']['title']); ?>">
                                        <img class="arrow-play" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/play.ico" alt="play">
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="video-flip__face video-flip__face--front">
                                    <div class="openPopup fade-in" data-key="<?php echo esc_attr('back'.$key); ?>" data-key-url="<?php echo esc_attr(returnEmbed($card['duo_videos']['back']['youtube_url'])); ?>">
                                        <img class="w-100 d-block single-article-video" style="cursor: pointer;" src="<?php echo esc_url($card['duo_videos']['back']['image']); ?>" alt="<?php echo esc_attr($card['duo_videos']['back']['title']); ?>">
                                        <img class="arrow-play" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/play.ico" alt="play">
                                    </div>
                                </div>
                                <div class="video-flip__face video-flip__face--back">
                                    <div class="openPopup fade-in" data-key="<?php echo esc_attr('front'.$key); ?>" data-key-url="<?php echo esc_attr(returnEmbed($card['duo_videos']['front']['youtube_url'])); ?>">
                                        <img class="w-100 d-block single-article-video" style="cursor: pointer;" src="<?php echo esc_url($card['duo_videos']['front']['image']); ?>" alt="<?php echo esc_attr($card['duo_videos']['front']['title']); ?>">
                                        <img class="arrow-play" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/play.ico" alt="play">
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                        <button type="button" class="video-flip__toggle" aria-label="flip">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="23 4 23 10 17 10"></polyline>
                                <polyline points="1 20 1 14 7 14"></polyline>
                                <path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="overlay videoOverlay-<?php echo esc_attr('front'.$key); ?>">
                        <div class="position-relative w-100 h-100">
                            <div class="popup">
                                <button class="close-btn" data-key="<?php echo esc_attr('front'.$key); ?>">
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
                    <div class="overlay videoOverlay-<?php echo esc_attr('back'.$key); ?>">
                        <div class="position-relative w-100 h-100">
                            <div class="popup">
                                <button class="close-btn" data-key="<?php echo esc_attr('back'.$key); ?>">
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
    @media (max-width: 1390px) {
        .custom-container {
            max-width: 1260px;
        }
    }
    @media (max-width: 1200px) {
        .custom-container {
            max-width: 1050px;
        }
    }
    @media (max-width: 992px) {
        .custom-container {
            max-width: 900px;
        }
    }
    @media (max-width: 768px) {
        .custom-container {
            max-width: 690px;
        }
    }
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
        font-family: 'ManchetteFine-Regular', sans-serif;
        color: #fff;
    }

    .video-flip {
        position: relative;
        width: 100%;
        perspective: 1200px;
    }
    .video-flip__inner {
        position: relative;
        width: 100%;
        transition: transform 0.7s;
        transform-style: preserve-3d;
    }
    .video-flip.is-flipped .video-flip__inner {
        transform: rotateY(180deg);
    }
    .video-flip__face {
        backface-visibility: hidden;
        -webkit-backface-visibility: hidden;
    }
    .video-flip__face--back {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transform: rotateY(180deg);
    }
    .video-flip__face--back .openPopup,
    .video-flip__face--back .single-article-video {
        height: 100%;
        object-fit: cover;
    }
    .video-flip__toggle {
        position: absolute;
        top: 10px;
        right: 10px;
        width: 36px;
        height: 36px;
        padding: 6px;
        border: 0;
        border-radius: 50%;
        color: #111;
        background: rgba(255, 255, 255, 0.9);
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.35);
        cursor: pointer;
        z-index: 3;
        transition: transform 0.4s;
    }
    .video-flip__toggle:hover {
        transform: rotate(180deg);
    }
    .video-flip__toggle svg {
        width: 100%;
        height: 100%;
        display: block;
    }

    @media (max-width: 991px) {
        .video-flip__toggle {
            width: 30px;
            height: 30px;
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

        $('.video-flip__toggle').on('click', function(e) {
            e.stopPropagation();
            $(this).closest('.video-flip').toggleClass('is-flipped');
        });
    });
</script>
<?php
get_footer();