# Email Inbox / Spam mein nahi aa rahi? – Fix (2 minute)

**Problem:** Form submit ho rahi hai (200 OK) lekin **admin@viaanur.com** (One.com) par email Inbox/Spam mein nahi aa rahi.

**Reason:** Local (viaanoor.test) se **One.com SMTP** connect nahi hota. Isliye mail bheji hi nahi jaati.

**Solution:** **Gmail** se bhejo – email phir bhi **admin@viaanur.com** (One.com Inbox) par aayegi.

---

## Step 1: Gmail App Password banao (1 min)

1. Open: **https://myaccount.google.com/apppasswords**
2. Agar dikhe "App passwords" option nahi, pehle **2-Step Verification** ON karo: https://myaccount.google.com/security
3. **App passwords** → "Select app" = Mail, "Select device" = Other (name likho "Viaanoor") → **Generate**
4. Jo **16-character password** dikhe (jaise `abcd efgh ijkl mnop`) – copy karo.

---

## Step 2: .env mein daalo

`.env` file kholo. In 4 lines ko apne hisaab se bharo:

```env
MAIL_USERNAME=yourname@gmail.com
MAIL_PASSWORD=abcdefghijklmnop
MAIL_FROM_ADDRESS=yourname@gmail.com
```

- **MAIL_USERNAME** = apna poora Gmail (e.g. amnasaeed1166@gmail.com)
- **MAIL_PASSWORD** = wahi 16-character App Password (beech ki spaces hata bhi sakte ho)
- **MAIL_FROM_ADDRESS** = wahi Gmail

**MAIL_APPLICATION_TO** mat badlo – wahi `admin@viaanur.com` rahega. Email usi par jayegi (One.com Inbox).

---

## Step 3: Config clear karo

Terminal mein:

```bash
php artisan config:clear
```

---

## Step 4: Form submit karo

- Apply form submit karo.
- Email **admin@viaanur.com** par jayegi.
- **https://mail.one.com/mail/INBOX/1** kholo – Inbox (aur Spam) check karo.

---

Agar submit ke baad alert aaye "Mail not sent: ..." to woh message copy karke bhejna – exact error se fix bata denge.
