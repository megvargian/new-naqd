<?php
/**
 * Template Name: Send Page
 */
get_header();
?>

<div class="container">
    <div class="row py-5 justify-content-center">
        <div class="col-md-12 text-center">
            <?php
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </div>

    <div class="row pb-5 justify-content-center">
        <div class="col-md-8">
            <div id="form-message" class="alert" style="display:none;"></div>

            <form id="sendMessageForm" class="send-form">
                <div class="mb-3">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                </div>

                <div class="mb-3">
                    <label for="familyName" class="form-label">Family Name</label>
                    <input type="text" class="form-control" id="familyName" name="familyName" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="6" readonly style="background-color: #f8f9fa;"></textarea>
                    <small class="text-muted">This message is auto-generated based on your name</small>
                </div>

                <button type="submit" class="btn btn-primary" id="submitBtn">Send Message</button>
            </form>
        </div>
    </div>
</div>

<script>
jQuery(document).ready(function($) {
    // Auto-update message when first name or family name changes
    function updateMessage() {
        var firstName = $('#firstName').val().trim();
        var familyName = $('#familyName').val().trim();

        var message = 'I ' + firstName + ' ' + familyName + ' would like to get in touch with you regarding your services. Please contact me at your earliest convenience.';

        $('#message').val(message);
    }

    // Trigger update on input change
    $('#firstName, #familyName').on('input', updateMessage);

    // Initialize message on page load
    updateMessage();

    // Handle form submission
    $('#sendMessageForm').on('submit', function(e) {
        e.preventDefault();

        var submitBtn = $('#submitBtn');
        var originalText = submitBtn.text();

        // Disable submit button and show loading state
        submitBtn.prop('disabled', true).text('Sending...');

        // Get form data
        var formData = {
            action: 'send_contact_message',
            firstName: $('#firstName').val(),
            familyName: $('#familyName').val(),
            email: $('#email').val(),
            message: $('#message').val(),
            nonce: '<?php echo wp_create_nonce('send_contact_message_nonce'); ?>'
        };

        // Send AJAX request
        $.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            type: 'POST',
            data: formData,
            success: function(response) {
                if (response.success) {
                    $('#form-message')
                        .removeClass('alert-danger')
                        .addClass('alert-success')
                        .html(response.data.message)
                        .fadeIn();

                    // Reset form
                    $('#sendMessageForm')[0].reset();
                    updateMessage();
                } else {
                    $('#form-message')
                        .removeClass('alert-success')
                        .addClass('alert-danger')
                        .html(response.data.message)
                        .fadeIn();
                }
            },
            error: function() {
                $('#form-message')
                    .removeClass('alert-success')
                    .addClass('alert-danger')
                    .html('An error occurred. Please try again.')
                    .fadeIn();
            },
            complete: function() {
                // Re-enable submit button
                submitBtn.prop('disabled', false).text(originalText);

                // Hide message after 5 seconds
                setTimeout(function() {
                    $('#form-message').fadeOut();
                }, 5000);
            }
        });
    });
});
</script>

<?php
get_footer();