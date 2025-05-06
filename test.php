<?php
/**
 * Template Name: Test Page
 */
get_header();
?>
<!-- Button to Open Dialog -->
<button onclick="openPopup()">Watch Short</button>
<!-- Overlay and Popup -->
<div id="videoOverlay" class="overlay">
  <div class="popup">
    <button class="close-btn" onclick="closePopup()">&times;</button>
    <div class="responsive-short">
        <iframe src="https://www.youtube.com/embed/2Wg7kmqH5gs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
  </div>
</div>
<script>
    function openPopup() {
      document.getElementById('videoOverlay').style.display = 'block';
    }

    function closePopup() {
      const overlay = document.getElementById('videoOverlay');
      overlay.style.display = 'none';

      // Stop the video by resetting the iframe
      const iframe = overlay.querySelector('iframe');
      iframe.src = iframe.src;
    }
</script>
<?php
get_footer();