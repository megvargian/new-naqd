# Postmark Setup Instructions

## 1. Get Your Postmark Server Token

1. Sign up for a free account at [Postmark](https://postmarkapp.com/)
2. Create a new Server (or use the default one)
3. Go to the Server's API Tokens page
4. Copy your Server API Token

## 2. Configure the Email Settings

Open `functions.php` and find the `send_email_via_postmark()` function (around line 865).

Update these values:

```php
$server_token = 'YOUR_POSTMARK_SERVER_TOKEN'; // Replace with your actual Server Token
$from_email = 'antoni@naqd.media'; // Replace with your verified sender email
$from_name = 'Naqd Media'; // You can customize this
$to_email = 'kouyoumdjianmike@gmail.com'; // Replace with the email where you want to receive messages
$to_name = 'Admin'; // You can customize this
```

## 3. Verify Your Sender Signature

In Postmark dashboard:
1. Go to Sender Signatures
2. Add and verify your sender email address (`from_email`)
3. Follow the verification instructions sent to your email
4. Wait for the verification to complete (usually a few minutes)

**Note:** You can also use a verified domain instead of individual email addresses for more flexibility.

## 4. Test the Form

1. Go to your Send Page on the website
2. Fill out the form
3. Click "Send Message"
4. Check if the email is received at your configured `$to_email` address
5. Check Postmark's Activity dashboard to see the email delivery status

## 5. Customize the Message Template

In `send-page.php`, you can customize the pre-made message template by editing this line:

```javascript
var message = 'I ' + firstName + ' ' + familyName + ' would like to get in touch with you regarding your services. Please contact me at your earliest convenience.';
```

Change the text to whatever you want the message to say. The firstName and familyName will be automatically inserted.

## Features Implemented

✅ Form with First Name, Family Name, and Email fields
✅ Auto-generated message that updates in real-time as user types their name
✅ Message field is read-only (cannot be edited by user)
✅ jQuery handles the auto-update functionality
✅ AJAX form submission (no page reload)
✅ Email sending via Postmark API
✅ Form validation
✅ Success/Error messages
✅ Form reset after successful submission
✅ Reply-To header set to user's email for easy responses

## Why Postmark?

- **99%+ delivery rate** - Industry-leading email deliverability
- **Fast delivery** - Emails sent in seconds
- **Detailed analytics** - Track opens, clicks, bounces, and spam complaints
- **Free tier** - 100 emails/month free
- **Excellent support** - Great documentation and customer support
- **Simple API** - Easy to integrate and use

## Troubleshooting

If emails are not being sent:

1. **Check Server Token**: Ensure you've entered the correct Postmark Server Token
2. **Verify Sender**: Make sure your sender email is verified in Postmark dashboard
3. **Check Logs**: Look at WordPress error logs for detailed error messages
4. **Activity Stream**: Check Postmark's Activity tab to see if the email was received by their API
5. **Server Access**: Ensure your server can make outbound HTTPS requests to api.postmarkapp.com
6. **Sandbox Mode**: If you're using Postmark's sandbox, emails won't be actually delivered
7. **Rate Limits**: Check if you've exceeded your monthly email limit

## Postmark Activity Dashboard

After sending emails, you can view detailed information in the Postmark Activity dashboard:
- Delivery status
- Bounce information
- Spam complaints
- Opens and clicks (if tracking enabled)
- Full email content and headers
