<?php
/**
 * Template Name: Test Page
 */
get_header();
?>
<!-- Button to Open Dialog -->
<button class="openPopup">Watch Short</button>
<!-- Overlay and Popup -->
<div id="videoOverlay" class="overlay">
    <div class="position-relative w-100 h-100">
        <button class="close-btn">
            <span aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#fff"><path d="M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z"/></svg>
            </span>
        </button>
        <div class="popup">
            <iframe src="https://www.youtube.com/embed/2Wg7kmqH5gs?autoplay=1&mute=1"
                    frameborder="0"
                    width="360" height="640"
                    allowfullscreen
                    allow="autoplay; encrypted-media">
            </iframe>
        </div>
    </div>
</div>
<script>
    jQuery(document).ready(function($) {
        $('.openPopup').click(function(){
            $('#videoOverlay').css('display', 'block');
        })
        $('.close-btn').click(function(){
            $('#videoOverlay').css('display', 'none');
        })
    });
</script>
<?php
get_footer();