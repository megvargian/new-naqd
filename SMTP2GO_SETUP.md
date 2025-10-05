# SMTP2GO Setup Instructions

## 1. Get Your SMTP2GO API Key

1. Sign up for a free account at [SMTP2GO](https://www.smtp2go.com/)
2. Go to Settings > API Keys
3. Create a new API key with "Send Email" permission
4. Copy the API key

## 2. Configure the Email Settings

Open `functions.php` and find the `send_email_via_smtp2go()` function (around line 850).

Update these values:

```php
$api_key = 'YOUR_SMTP2GO_API_KEY'; // Replace with your actual API key
$from_email = 'noreply@yourdomain.com'; // Replace with your verified sender email
$from_name = 'Naqd Contact Form'; // You can customize this
$to_email = 'admin@yourdomain.com'; // Replace with the email where you want to receive messages
$to_name = 'Admin'; // You can customize this
```

## 3. Verify Your Sender Email

In SMTP2GO dashboard:
1. Go to Settings > Verified Senders
2. Add and verify your sender email address (`from_email`)
3. Follow the verification instructions sent to your email

## 4. Test the Form

1. Go to your Send Page on the website
2. Fill out the form
3. Click "Send Message"
4. Check if the email is received at your configured `$to_email` address

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
✅ Email sending via SMTP2GO API
✅ Form validation
✅ Success/Error messages
✅ Form reset after successful submission

## Troubleshooting

If emails are not being sent:

1. Check that you've entered the correct API key
2. Verify your sender email in SMTP2GO dashboard
3. Check WordPress error logs for detailed error messages
4. Ensure your server can make outbound HTTPS requests
5. Check SMTP2GO dashboard for any failed delivery attempts
