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
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="popup">
            <iframe src="https://www.youtube.com/embed/2Wg7kmqH5gs"
                    frameborder="0"
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