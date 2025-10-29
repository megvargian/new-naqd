<?php
/**
 * Template Name: Send Page
 */
get_header();
?>

<div class="container about-and-contact-us">
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

            <form id="sendMessageForm" class="send-form contact-us">
                <div class="mb-3">
                    <label for="firstName" class="form-label" style="display:none;">الاسم</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="*الاسم" required>
                </div>

                <div class="mb-3">
                    <label for="familyName" class="form-label" style="display:none;">الشهرة</label>
                    <input type="text" class="form-control" id="familyName" name="familyName" placeholder="*الشهرة" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label" style="display:none;">البريد الإلكتروني</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="*بريدك الإلكتروني" required>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label" style="display:none;">الرسالة</label>
                    <textarea class="form-control" id="message" name="message" rows="20" readonly style="cursor: not-allowed; opacity: 0.9;"></textarea>
                    <small class="text-muted" style="display: block; text-align: right; margin-top: 5px;">هذه الرسالة يتم إنشاؤها تلقائياً بناءً على اسمك</small>
                </div>

                <div class="text-center">
                    <input type="submit" class="btn btn-primary" id="submitBtn" value="أرسل">
                </div>
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

        var message = `
رسالة مفتوحة إلى المسؤولين والمعنيين في الدولة اللبنانية،
وإلى كل من له يد أو ضمير في ملف سجن رومية،

أنا ${firstName} ${familyName}

أنا من أولئك الذين لا يزالون يؤمنون — على الرغم من كل شيء — أن العدالة يجب أن تُطبَّق داخل السجون، لا أن تُدفَن فيها.

المشاهد التي كشفها تحقيق منصة نقد الأخير من داخل سجن رومية؛ هي مرآة لوطنٍ انقسم حتى في سجنه، بين من يعيش في جناحٍ نظيفٍ مكيفٍ وكأنه في فندقٍ صغير، ومن يُدفن حيّاً في زنازين لا يدخلها الضوء ولا الهواء.
هذا الظلم حصيلة سنواتٍ من الإهمال، من الصمت، من التسويات على حساب أبسط حقوق الإنسان.

لا يعقل أن تبقى هذه الحقائق خارج دائرة مسؤوليتكم. وليس مقبولاً أن يمرّ هذا التحقيق كما تمرّ الفضائح اليومية، بلا تحقيق، بلا محاسبة، وبلا خجل.
أنتم تحوّلون الأماكن التي يفترض أن تكون مراكز تأهيل إلى مصانع لإنتاج المجرمين.

لذلك أطالبكم، باسم كل سجينٍ تُرك وحيداً في الزنزانة، أن تتحرّكوا فوراً. أن تفتحوا تحقيقاً رسمياً، علنياً، شفافاً، يُسائل كل من قصّر أو تستّر أو شارك.

أن تسألوا بصراحة: كيف تحوّل سجن رومية إلى دولتين داخل دولة واحدة؟ من سمح بأن تُشترى الحقوق وتُباع الكرامات؟
أكتب لأذكّركم بأن العدالة لا تُقاس بعدد السجون بل بنوعيتها، وبأنه من دون عدالةٍ خلف القضبان، لا معنى لأي عدالةٍ في الخارج.
الصمت، أمام ما رأيناه، جريمة أخرى لا تقلّ قسوة عن الزنازين نفسها.
تصرّفوا الآن لأن الناس ستسأل وتعلم وتحاسب.
`;

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
        var originalText = submitBtn.val();

        // Disable submit button and show loading state
        submitBtn.prop('disabled', true).val('جارٍ الإرسال...');

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
                    .html('حدث خطأ. يرجى المحاولة مرة أخرى.')
                    .fadeIn();
            },
            complete: function() {
                // Re-enable submit button
                submitBtn.prop('disabled', false).val(originalText);

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