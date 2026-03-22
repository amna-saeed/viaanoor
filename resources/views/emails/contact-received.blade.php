<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        h2 { color: #322f89; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; }
        td { padding: 10px 0; border-bottom: 1px solid #eee; }
        td:first-child { font-weight: 600; width: 140px; color: #555; }
        .message-box { background: #f5f5f5; padding: 12px; border-radius: 6px; margin-top: 8px; white-space: pre-wrap; }
        .footer { margin-top: 30px; font-size: 12px; color: #888; }
    </style>
</head>
<body>
    <div class="container">
        <h2>New contact form message</h2>
        <p>You have received a new message from the website.</p>
        <table>
            <tr><td>Name</td><td>{{ $name }}</td></tr>
            <tr><td>Email</td><td>{{ $email }}</td></tr>
            @if($website)
            <tr><td>Website</td><td>{{ $website }}</td></tr>
            @endif
            <tr><td>Message</td><td><div class="message-box">{{ $contactMessage }}</div></td></tr>
        </table>
        <p class="footer">This email was sent from ViAaNur Tutoring contact form. Reply directly to the sender's email above.</p>
    </div>
</body>
</html>
