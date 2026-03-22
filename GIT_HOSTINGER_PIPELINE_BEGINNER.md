# Git + Pipeline + Hostinger — Beginner guide (Urdu/Hindi mix)

Yeh guide un logon ke liye hai jo **beginner** hain aur chahte hain ke **code GitHub par push karein** aur **website Hostinger par live** ho jaye.

---

## Pehle samjho: ye cheezein kya hain?

| Cheez | Simple matlab |
|--------|----------------|
| **Git** | Aapke project ki **history** — har change save karne ka system (local PC par). |
| **GitHub** | Git ki copy **internet par** — team / backup / automation ke liye. |
| **Push** | Local se code **GitHub par bhejna** (`git push`). |
| **Pipeline (CI/CD)** | GitHub par push hone ke baad **automatic kaam** — jaise tests, ya **server par deploy**. |
| **Deploy** | Latest code **Hostinger server** par rakhna taake **live website** update ho. |

**Pipeline** = aap push karte ho → GitHub Actions (ya Hostinger Git) khud server par code update karta hai (ya aap ek script chala sakte ho).

---

## Do raaste (beginner ke liye)

### Raasta 1: Hostinger ka built-in **Git** (sab se simple)

Kuch Hostinger plans par **hPanel → Advanced → Git** hota hai.

1. GitHub par apna project **repository** banao (code upload).
2. Hostinger hPanel mein **Git** section kholo.
3. Wahan **GitHub repo URL** + branch (e.g. `main`) connect karo.
4. Deploy path set karo (jahan Laravel project hai — e.g. `public_html` ya subfolder).
5. Har baar **Deploy** button dabao **ya** auto-deploy on push agar option ho.

**Faida:** Kam setup, kam YAML.  
**Nuksan:** Har plan par same nahi hota — apne hPanel mein **Git** search karke dekho.

---

### Raasta 2: **GitHub Actions** pipeline (zada common, free)

**Idea:** Jab aap `git push` karte ho `main` branch par, GitHub **automatic** Hostinger par files bhej deta hai (SSH / FTP).

**Zaroori cheezein:**

1. **GitHub repository** — code yahan hona chahiye (`.gitignore` mein `.env`, `vendor` heavy ho to strategy alag).
2. **Hostinger par SSH** enable ho (hPanel → Advanced → SSH Access). Agar SSH na ho to **FTP** wala action bhi use ho sakta hai.
3. Server par **pehli dafa** manually Laravel setup (document root, `.env`, database) — pehle se `HOSTINGER_DEPLOY.md` dekho.

**Secrets GitHub par kabhi mat daalo repo mein** — sirf **GitHub → Settings → Secrets and variables → Actions** mein.

---

## GitHub Actions pipeline — step by step (concept)

### Step 1: Code GitHub par

```bash
git init
git add .
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/AAPKA_USERNAME/viaanoor.git
git push -u origin main
```

### Step 2: Repo mein workflow file

Folder banao: `.github/workflows/`  
Iske andar file: `deploy-hostinger.yml` (name kuch bhi ho sakti hai, `.yml` extension zaroori).

**Example idea (SSH + rsync)** — isko apne server username / path ke mutabiq badalna hoga:

```yaml
name: Deploy to Hostinger

on:
  push:
    branches:
      - main

jobs:
  deploy:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v4

      - name: Deploy over SSH
        uses: appleboy/scp-action@v0.1.7
        with:
          host: ${{ secrets.HOSTINGER_HOST }}
          username: ${{ secrets.HOSTINGER_USER }}
          key: ${{ secrets.HOSTINGER_SSH_KEY }}
          port: 22
          source: "."
          target: "/home/u123456789/domains/aapkadomain.com/public_html/viaanoor"
          strip_components: 0
```

**Note:** Laravel ke liye aksar **sirf zaroori folders** bhejte hain, ya server par `git pull` + `composer install` chalate hain — taake `vendor` har baar upload na karna pade.

**Zada practical pattern (SSH se server par commands):**

- Server par **ek dafa** SSH se jao, project folder mein `git clone` karo (ya GitHub repo connect karo).
- Har push ke baad pipeline **SSH** se ye commands chalayegi:

```bash
cd /path/to/project && git pull origin main && composer install --no-dev && php artisan migrate --force && php artisan config:cache
```

Iske liye workflow mein **`appleboy/ssh-action`** use hota hai.

**Sample workflow** (path + branch apne hisaab se badlo) — file: `.github/workflows/deploy.yml`:

```yaml
name: Deploy Laravel on Hostinger

on:
  push:
    branches: [ main ]

jobs:
  deploy:
    runs-on: ubuntu-latest
    steps:
      - name: Run deploy commands on server
        uses: appleboy/ssh-action@v1.0.3
        with:
          host: ${{ secrets.HOSTINGER_HOST }}
          username: ${{ secrets.HOSTINGER_USER }}
          key: ${{ secrets.HOSTINGER_SSH_KEY }}
          port: 22
          script: |
            cd ~/domains/APKA_DOMAIN/public_html/viaanoor
            git pull origin main
            composer install --no-dev --no-interaction --optimize-autoloader
            php artisan migrate --force
            php artisan config:cache
            php artisan route:cache
            php artisan view:cache
```

- `cd` wala path **Hostinger SSH** par `pwd` / File Manager se dekh kar likho (har account alag hota hai).
- Agar **SSH port 65002** ho to `port: 65002` karo.
- Repo **private** ho to server par `git pull` ke liye **Deploy key** (GitHub repo → Settings → Deploy keys) add karni pad sakti hai — is par alag se search karke follow karo.

### Step 3: GitHub Secrets (zaroori)

Repository → **Settings** → **Secrets and variables** → **Actions** → **New repository secret**

| Secret name | Kya rakho |
|-------------|-----------|
| `HOSTINGER_HOST` | Server hostname (SSH wala, hPanel se) |
| `HOSTINGER_USER` | SSH username |
| `HOSTINGER_SSH_KEY` | Private SSH key (PC par `ssh-keygen` se banao, **public** key Hostinger par add karo) |

**Private key kabhi GitHub repo mein commit mat karo** — sirf Secrets mein.

---

## Laravel + deploy par dhyan (bohot zaroori)

1. **`.env` server par hi rahe** — Git mein commit mat karo (`.gitignore` mein `.env` hona chahiye).
2. Pehli baar server par **manually** `.env` banao (`APP_KEY`, `DB_*`, `MAIL_*`).
3. **`APP_DEBUG=false`** production par.
4. Push ke baad aksar ye chalana padta hai server par:

```bash
composer install --no-dev --optimize-autoloader
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

5. Agar aap **poora project** SCP/FTP se bhejte ho to **`vendor`** bada hota hai — behtar: server par **composer install** pipeline mein chalao.

---

## Beginner checklist (short)

- [ ] GitHub account + naya repo  
- [ ] Local project se `git push` successful  
- [ ] Hostinger par site **ek dafa manually** chal rahi ho (document root + `.env`) — `HOSTINGER_DEPLOY.md`  
- [ ] SSH keys ya Hostinger Git connect  
- [ ] `.github/workflows/deploy-hostinger.yml` (agar Actions use kar rahe ho)  
- [ ] GitHub Secrets set  
- [ ] `main` par push → Actions tab mein run dekho → errors fix karo  

---

## Agar pipeline fail ho

1. GitHub repo → **Actions** tab → failed job → **logs** padho (error line clear hoti hai).  
2. SSH: username, port (22 ya 65002), path galat na ho.  
3. Laravel: `storage` / `bootstrap/cache` permissions (775/755).  
4. `.env` server par missing ho to site error degi — pipeline `.env` copy nahi karti agar aapne add na kiya ho.

---

## Extra: kya Firebase wala purana workflow tha?

Repo history mein kabhi **Firebase Hosting** workflow delete ho chuka ho to woh **alag service** thi. **Hostinger** = PHP + Laravel hosting; uske liye **SSH deploy** ya **Hostinger Git** use karo, Firebase ki zaroorat nahi.

---

## Summary ek line mein

**Git push** → **GitHub** → **Pipeline (Actions ya Hostinger Git)** → **server par latest code** → **composer / artisan** → **website live**.

---

*Yeh file sirf samajhne ke liye hai. Apne Hostinger plan ke mutabiq SSH/Git options hPanel mein confirm karein. Production secrets hamesha `.env` aur GitHub Secrets mein rakhein, kabhi code mein nahi.*
