# Email setup – application emails at admin@viaanur.com (mail.one.com)

## What we use (current)

- **Send with:** Gmail SMTP (One.com SMTP does not connect from local – timeout).
- **To:** admin@viaanur.com  
- **BCC:** Your Gmail (amnasaeed1166@gmail.com) so you always get a copy even if One.com rejects.

## Get emails at https://mail.one.com (One.com inbox)

One.com was rejecting mail from Gmail (“Relay access denied”). So emails are sent to admin@ but may bounce. To still see them at **mail.one.com**:

### Method: Gmail Forwarding → admin@viaanur.com

1. **Gmail** (amnasaeed1166@gmail.com): **Settings** (gear) → **See all settings** → **Forwarding and POP/IMAP**.
2. Click **Add a forwarding address** → enter **admin@viaanur.com** → Next → Send.
3. **One.com inbox:** Open https://mail.one.com and log in as **admin@viaanur.com**.
4. Find the **Gmail verification email** (subject like “Gmail Forwarding Confirmation”) and click the **verification link**.
5. After that, in Gmail you can choose to **forward a copy** of incoming mail to admin@viaanur.com.

Then either:

- **Forward all mail:** In Gmail forwarding settings, choose “Forward a copy to admin@viaanur.com” and “Keep Gmail’s copy” (or delete), **or**
- **Forward only application emails:** In Gmail create a **Filter**: “To: amnasaeed1166@gmail.com” and “Subject: New Application” (or “New course application”) → **Forward it to** admin@viaanur.com.

Application emails will then also appear in your **One.com inbox** (https://mail.one.com/mail/INBOX/1). If One.com rejects the forwarded message too, contact One.com support and ask them to allow receiving external mail at admin@viaanur.com (mention error **554 5.7.1 Relay access denied**).

---

## .env (current – Gmail + BCC)

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=amnasaeed1166@gmail.com
MAIL_PASSWORD="your-16-char-app-password"
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=amnasaeed1166@gmail.com
MAIL_FROM_NAME="ViAaNur Tutoring"
MAIL_APPLICATION_TO=admin@viaanur.com
MAIL_APPLICATION_BCC=amnasaeed1166@gmail.com
```

- `MAIL_PASSWORD` = Gmail **App password** from https://myaccount.google.com/apppasswords (not your normal Gmail password).

---

## When site is on production (e.g. One.com hosting)

From a **server** (not your PC), One.com SMTP may work. Then you can switch `.env` on the server to:

```env
MAIL_HOST=send.one.com
MAIL_PORT=465
MAIL_USERNAME=admin@viaanur.com
MAIL_PASSWORD="your-one-com-email-password"
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=admin@viaanur.com
MAIL_APPLICATION_TO=admin@viaanur.com
```

Run `php artisan config:clear` on the server. If it still times out, keep using Gmail + BCC and Gmail forwarding to admin@ as above.
