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

// 12 videos paired into 6 flip cards, rendered 6 per row: flipping swaps in a different video
// which half of the 24 videos to show, chosen on the intro (98cb790a-504f-49c2-a267-2b346c3cc97b/4e3de2f0-3f17-447a-a81b-1435ada1df00) page
if(!isset($_GET['set']) || !in_array(sanitize_text_field($_GET['set']), ['98cb790a-504f-49c2-a267-2b346c3cc97b', '4e3de2f0-3f17-447a-a81b-1435ada1df00'])) {
    $choice_page_url =  home_url('/video-choice/');
    wp_redirect($choice_page_url);
    exit;
}
$video_set = isset($_GET['set']) && sanitize_text_field($_GET['set']) === '4e3de2f0-3f17-447a-a81b-1435ada1df00' ? '4e3de2f0-3f17-447a-a81b-1435ada1df00' : '98cb790a-504f-49c2-a267-2b346c3cc97b';
$video_offset = $video_set === '4e3de2f0-3f17-447a-a81b-1435ada1df00' ? 12 : 0;

$video_ids = array();
$video_query = new WP_Query(
    array(
        'post_type'      => 'video',
        'posts_per_page' => 12,
        'offset'         => $video_offset,
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

function build_video_flip_face($video_id) {
    $url   = get_field('youtube_url', $video_id);
    $parts = explode('/', (string) parse_url($url, PHP_URL_PATH));

    return array(
        'id'    => $video_id,
        'title' => get_the_title($video_id),
        'embed' => end($parts),
        'image' => get_the_post_thumbnail_url($video_id, 'large'),
    );
}

$video_cards = array();
$video_id_pairs = array_chunk($video_ids, 2);
foreach ($video_id_pairs as $pair) {
    if (count($pair) < 2) {
        continue;
    }
    $video_cards[] = array(
        'front' => build_video_flip_face($pair[0]),
        'back'  => build_video_flip_face($pair[1]),
    );
}
?>
<section class="video-hero py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="video-hero__content">
                    <h1 class="video-hero__title d-none"><?php echo esc_html($hero_title); ?></h1>
                    <div class="video-hero__text">
                        لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه … بروشور او فلاير على سبيل المثال … او نماذج مواقع انترنت …

وعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم ويتم وضع النصوص النهائية المطلوبة للتصميم ويقول البعض ان وضع النصوص التجريبية بالتصميم قد تشغل المشاهد عن وضع الكثير من الملاحظات او الانتقادات للتصميم الاساسي.

وخلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد. من كتاب “حول أقاصي الخير والشر”
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
        </div>
    </div>
</section>

<section class="videos-grid-section py-5" style="border-top: 1px solid #5b5b5b">
    <div class="container position-relative">
        <div class="row">
            <?php foreach ($video_cards as $card) { ?>
                <div class="col-lg-4 col-md-6 col-12 mb-3 px-1">
                    <div class="video-flip">
                        <div class="video-flip__inner">
                            <div class="video-flip__face video-flip__face--front">
                                <div class="openPopup fade-in" data-key="<?php echo esc_attr($card['front']['id']); ?>" data-key-url="<?php echo esc_attr($card['front']['embed']); ?>">
                                    <img class="w-100 d-block single-article-video" style="cursor: pointer;" src="<?php echo esc_url($card['front']['image']); ?>" alt="<?php echo esc_attr($card['front']['title']); ?>">
                                    <img class="arrow-play" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/play.ico" alt="play">
                                </div>
                            </div>
                            <div class="video-flip__face video-flip__face--back">
                                <div class="openPopup fade-in" data-key="<?php echo esc_attr($card['back']['id']); ?>" data-key-url="<?php echo esc_attr($card['back']['embed']); ?>">
                                    <img class="w-100 d-block single-article-video" style="cursor: pointer;" src="<?php echo esc_url($card['back']['image']); ?>" alt="<?php echo esc_attr($card['back']['title']); ?>">
                                    <img class="arrow-play" src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/play.ico" alt="play">
                                </div>
                            </div>
                        </div>
                        <button type="button" class="video-flip__toggle" aria-label="flip">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="23 4 23 10 17 10"></polyline>
                                <polyline points="1 20 1 14 7 14"></polyline>
                                <path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="overlay videoOverlay-<?php echo esc_attr($card['front']['id']); ?>">
                        <div class="position-relative w-100 h-100">
                            <div class="popup">
                                <button class="close-btn" data-key="<?php echo esc_attr($card['front']['id']); ?>">
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
                    <div class="overlay videoOverlay-<?php echo esc_attr($card['back']['id']); ?>">
                        <div class="position-relative w-100 h-100">
                            <div class="popup">
                                <button class="close-btn" data-key="<?php echo esc_attr($card['back']['id']); ?>">
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