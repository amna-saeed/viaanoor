# Emails at mail.one.com – agar local se connect nahi hota

One.com ke hisaab se:
- **send.one.com** = email clients (Outlook, Mail, ya humara app) – kisi bhi jagah se use ho sakta hai
- **mailout.one.com** = sirf tab use kar sakte ho jab **website One.com ke servers par host ho**

Agar aapke PC/network se **send.one.com** par connection timeout ho raha hai (ISP/firewall), to **sirf ek reliable fix** hai:

## Site ko One.com par host karein

Jab site **One.com hosting** par chalegi, wahan se **mailout.one.com** use kar sakte ho – One.com isi ke liye allow karta hai. Phir application emails **admin@viaanur.com** ke inbox (https://mail.one.com/mail/INBOX/1) mein aa jayengi.

### Steps (short)

1. One.com Control Panel se hosting enable karein (agar abhi nahi hai).
2. Laravel project upload karein (FTP ya File Manager):
   - Saari files `public_html` ke andar daalein, **lekin** `public` folder ka andar ka content `public_html` ke **root** par ho (index.php, assets, etc.).
   - Ya `public_html` ka document root `public` folder par set karein (agar One.com support kare).
3. `.env` server par set karein (same values):
   ```env
   MAIL_MAILER=smtp
   MAIL_HOST=mailout.one.com
   MAIL_PORT=587
   MAIL_ENCRYPTION=tls
   MAIL_USERNAME=admin@viaanur.com
   MAIL_PASSWORD="your_one_com_mailbox_password"
   MAIL_FROM_ADDRESS=admin@viaanur.com
   MAIL_FROM_NAME="ViAaNur Tutoring"
   MAIL_APPLICATION_TO=admin@viaanur.com
   ```
4. Server par `php artisan config:clear` run karein (SSH ya One.com ke run script se).
5. Application form submit karke **https://mail.one.com/mail/INBOX/1** check karein.

One.com support se bhi pooch sakte ho: “I want to send mail from my PHP site using mailout.one.com. My site is hosted with you. What are the exact SMTP settings and do I need to enable anything?”
