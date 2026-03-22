# Hostinger par site deploy karein – emails One.com inbox (mail.one.com) par aayengi

- **Hosting:** Hostinger → https://hpanel.hostinger.com/
- **Email:** One.com → admin@viaanur.com (login: https://www.one.com/admin/frontpage.do)
- Site Hostinger par chalegi, email **send.one.com** se bhejenge (One.com ka SMTP). Hostinger server se send.one.com usually connect ho jata hai, isliye emails **https://mail.one.com/mail/INBOX/1** par aa sakti hain.

---

## Step 1: Hostinger panel mein domain / hosting check karein

1. https://hpanel.hostinger.com/ par login karein.
2. Jo domain use karni hai (e.g. viaanur.com) woh Hostinger se connected ho – **Websites** / **Domains** se check karein.
3. **File Manager** open karein (ya FTP credentials note karein).

---

## Step 2: Laravel project Hostinger par upload karein

### Option A: File Manager se (simple)

1. **File Manager** → `public_html` folder open karein.
2. **Saari project files** (viaanoor folder ki) upload karein, **lekin** structure ye honi chahiye:
   - `public_html/` ke andar ye folders/files hon: `app`, `bootstrap`, `config`, `database`, `public`, `resources`, `routes`, `storage`, `vendor` (ya pehle `composer install` run karke banaen), `.env`, `artisan`, `composer.json`, etc.
   - **Important:** Hostinger ka **document root** `public_html` hota hai, lekin Laravel ko `public` folder se run karna hota hai. Isliye Option B (subdomain/folder) use karein, ya Step 3 follow karein.

### Option B: Document root `public_html/public` karna (recommended)

1. Saari project (viaanoor) **ek folder** mein upload karein, e.g. `public_html/viaanoor/` (ya directly `public_html` ke andar sab).
2. **hPanel** → **Domains** → apna domain → **Advanced** / **Domain settings**.
3. **Document root** change karein:  
   `public_html` ki jagah **`public_html/viaanoor/public`** (ya jahan Laravel ka `public` folder hai woh path).
4. Save karein.

Agar project directly `public_html` ke andar hai to:
- `public_html/public` ← document root set karein (matlab `public_html` ke andar wala `public` folder).
- `public_html/index.php` etc. hata kar sirf Laravel ki `public` wali files `public_html` root par bhi copy kar sakte ho (see Step 3 alternative).

### Option C: `public` ka content `public_html` root par (agar document root change na ho)

1. Laravel project `public_html/viaanoor/` (ya koi folder) mein upload karein.
2. `viaanoor/public/` ke **andar ki saari cheezein** (index.php, .htaccess, assets folder, etc.) copy karke **`public_html/`** (site root) par paste karein.
3. `public_html/index.php` open karein. Line jahan ye hai:
   ```php
   require __DIR__.'/../vendor/autoload.php';
   $app = require_once __DIR__.'/../bootstrap/app.php';
   ```
   Isko change karein (path apne folder ke hisaab se):
   ```php
   require __DIR__.'/viaanoor/vendor/autoload.php';
   $app = require_once __DIR__.'/viaanoor/bootstrap/app.php';
   ```
   (Agar folder name alag hai to `viaanoor` ki jagah woh name use karein.)

---

## Step 3: Server par `.env` set karein

Hostinger File Manager se `public_html/.env` (ya jahan project root hai wahan `.env`) open karein / create karein. Ye values set karein:

```env
APP_NAME="ViAaNur Tutoring"
APP_ENV=production
APP_KEY=base64:9sjhJ2iGOKCSMbYN4z0UUss+F3frJ50EUbTzZrttzq4=
APP_DEBUG=false
APP_URL=https://www.viaanur.com

# Database (Hostinger MySQL – hPanel se credentials lein)
DB_CONNECTION=mysql
DB_HOST=localhost
DB_DATABASE=u123456789_dbname
DB_USERNAME=u123456789_user
DB_PASSWORD=your_db_password

# One.com email – yahi se mail jayegi, inbox: https://mail.one.com/mail/INBOX/1
MAIL_MAILER=smtp
MAIL_HOST=send.one.com
MAIL_PORT=587
MAIL_USERNAME=admin@viaanur.com
MAIL_PASSWORD="Aaminah-Nur30"
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=admin@viaanur.com
MAIL_FROM_NAME="ViAaNur Tutoring"
MAIL_APPLICATION_TO=admin@viaanur.com
MAIL_TIMEOUT=60
```

- `APP_URL` = aapka live domain (e.g. https://www.viaanur.com).
- **DB_*** = Hostinger MySQL (hPanel → Databases se create karke credentials copy karein).
- **MAIL_*** = One.com wale hi (send.one.com, admin@viaanur.com, same password).  
  **Note:** mailout.one.com sirf One.com hosting ke liye hai; Hostinger par **send.one.com** use karein.

---

## Step 4: Composer aur migrations (jahan SSH / terminal mile)

Agar Hostinger par **SSH** ya **Terminal** (hPanel) mil jaye:

```bash
cd public_html/viaanoor   # ya jahan project hai
composer install --no-dev --optimize-autoloader
php artisan key:generate   # agar APP_KEY empty ho
php artisan config:clear
php artisan cache:clear
php artisan migrate --force
php artisan storage:link   # agar storage link chahiye
```

Agar **SSH nahi hai** to:
- Local PC par `composer install --no-dev` chala kar **vendor** folder bhi upload kar dein.
- Database Hostinger MySQL panel se tables create kar sakte ho ya local se export/import.

---

## Step 5: Permissions

`storage` aur `bootstrap/cache` writable hone chahiye (usually Hostinger pe 755/775 theek rehta hai). Agar 500 error aaye to in folders par write permission dein.

---

## Step 6: Test

1. Browser mein site kholen: `https://www.viaanur.com` (ya aapka domain).
2. **Apply / Application form** submit karein.
3. **One.com inbox** check karein: https://mail.one.com/mail/INBOX/1 (admin@viaanur.com se login).

Agar email yahan aa jaye to fix ho gaya. Agar nahi aaye to Hostinger **Error Log** (hPanel) aur Laravel `storage/logs/laravel.log` check karein – SMTP error wahan dikh jata hai.

---

## Short summary

| Cheez        | Kahan / Kya                          |
|-------------|--------------------------------------|
| Hosting     | Hostinger – https://hpanel.hostinger.com/ |
| Email login | One.com – https://www.one.com/admin/frontpage.do |
| Inbox       | https://mail.one.com/mail/INBOX/1    |
| SMTP        | send.one.com, 587, TLS (Hostinger se) |
| .env mail   | MAIL_USERNAME=admin@viaanur.com, MAIL_PASSWORD=One.com password |

mailout.one.com **mat** use karein – wo sirf One.com **hosting** ke liye hai. Aapki site Hostinger par hai, isliye **send.one.com** use karna hai; Hostinger server se ye normally kaam karta hai aur emails One.com inbox (mail.one.com) par aa jati hain.
