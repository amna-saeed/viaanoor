# Git push se auto-deploy — tumhara repo

**GitHub repo:** [https://github.com/amna-saeed/viaanoor](https://github.com/amna-saeed/viaanoor)

Jab tum **`main`** branch par `git push` karoge, GitHub **Actions** chalega aur **Hostinger server** par SSH se commands chalengi (code update + Laravel).

---

## Do alag deploy tareeqe — confuse mat hona

| | **Hostinger hPanel → Git (Deploy button)** | **GitHub Actions** (`.github/workflows/deploy-hostinger.yml`) |
|---|---------------------------------------------|---------------------------------------------------------------|
| **Kaun karta hai** | Hostinger server **GitHub se pull** karta hai | GitHub **Hostinger par SSH** karke commands chalata hai |
| **GitHub par key** | Hostinger wali **`ssh-rsa ...` PUBLIC key** → **Settings → Deploy keys** | **Deploy key zaroori nahi** — **Secrets → Actions** mein **PRIVATE** key (tumhari machine se `ssh-keygen`) |
| **Fail hone par** | hPanel → **View latest build output** (exact error yahan) | GitHub → **Actions** tab → failed job → logs |

**Jo screenshot “Private Git Repository” + Deploy keys** — ye **pehla tareeqa** hai.  
Usmein **`HOSTINGER_SSH_KEY` secret wali private key bilkul use nahi hoti** — woh sirf **doosre tareeqe** (Actions) ke liye hai.

**Deploy key “Never used”** = GitHub ne abhi tak is key se **successful SSH** register nahi kiya → aksar **Hostinger se copy ki hui public key** GitHub par **exact match** nahi, ya purani/galat key lagi hui.

### Hostinger Git deploy fix (step-by-step)

1. hPanel → **Git** → **Private Git Repository** → jo **`ssh-rsa AAAA...`** poori ek line hai → **Copy** (poori line, shuru se end tak).
2. GitHub repo → **Settings** → **Deploy keys** → purani “hoistinger” key **Delete** karo (agar doubt ho).
3. **Add deploy key** → Title: `Hostinger` → Key: **wahi paste** → **Allow write access** optional (pull ke liye read kaafi) → **Add key**.
4. hPanel → **Deploy** dubara chalao → **View latest build output** kholo — agar ab bhi fail, **usi output ka text** save karo (error line important).

### SSH username / host (reference)

Hostinger jo public key ke end par likhta hai (jaise `u445651218@sg-nme-web483.main-hosting.eu`) se pata chalta hai:

- **SSH user** ≈ `u445651218`
- **Server** ≈ `sg-nme-web483.main-hosting.eu`  

Agar baad mein **GitHub Actions** bhi use karo to `HOSTINGER_USER` / `HOSTINGER_HOST` **is server ke mutabiq** hon — pehle jo `srv483.hstgr.io` tha wo **dusre panel / purana** ho sakta hai; **hPanel SSH Access** se jo **exact** hostname/username dikhe woh use karo.

### Laravel + `public_html` par fail / site error

Agar Git **success** ho jaye lekin site error:

- Poora Laravel **`public_html`** mein clone ho to **document root** Laravel ke **`public`** folder par hona chahiye — detail: `HOSTINGER_DEPLOY.md`.

---

## Galati mat karo — Environment name ≠ secrets

| ❌ Galat | ✅ Theek |
|----------|----------|
| **Settings → Environments → Add** kholo aur **Name** mein likho: `HOSTINGER_HOST, HOSTINGER_USER, ...` | **Settings → Secrets and variables** → **Actions** tab → **Repository secrets** |
| Ek hi box mein chaar naam comma se | **Har secret alag:** **“New repository secret”** button **4 dafa** dabao |

**Sahi raasta (browser):**

1. Repo kholo: [amna-saeed/viaanoor](https://github.com/amna-saeed/viaanoor)  
2. **Settings** (upar repo ke tabs mein)  
3. Left sidebar: **Secrets and variables** → **Actions**  
4. **Repository secrets** section → **New repository secret**  

**Pehli dafa:**  
- **Name:** `HOSTINGER_HOST` → **Secret:** sirf hostname paste → **Add secret**  

**Dusri dafa:** phir **New repository secret**  
- **Name:** `HOSTINGER_USER` → **Secret:** username → **Add secret**  

**Teesri:** `HOSTINGER_SSH_KEY` → poori private key  

**Chauthi:** `HOSTINGER_PROJECT_PATH` → server path (jaise `/home/.../public_html`)  

**“Configure environment” / Environment name `production` is waqt zaroori nahi** — sirf ye chaar **repository secrets** kaafi hain hamare workflow ke liye.

---

## Tumhein kya karna hai (order se)

### 1) Ye file repo mein honi chahiye

Project mein file hai: **`.github/workflows/deploy-hostinger.yml`**

Isko commit karke push karo:

```bash
git add .github/workflows/deploy-hostinger.yml
git commit -m "Add Hostinger auto-deploy workflow"
git push origin main
```

Pehli baar push ke baad GitHub → **Actions** tab kholo — workflow **fail** ho sakta hai jab tak neeche wale **Secrets** set na ho. Ye normal hai.

---

### 2) Hostinger par pehli dafa project (ek dafa manual)

SSH se server par login karo (hPanel → **Advanced** → **SSH Access**).

Jis folder mein Laravel rahega (example path — **apna asli path** File Manager / SSH se dekho):

```bash
cd ~/domains/APKA_DOMAIN/public_html
# Agar folder khali hai:
git clone https://github.com/amna-saeed/viaanoor.git .
# Ya alag folder:
# git clone https://github.com/amna-saeed/viaanoor.git viaanoor && cd viaanoor
```

Phir **ek dafa** server par:

- **`.env`** banao / rakho (local jaisa production values — **GitHub par mat bhejo**)
- `composer install --no-dev`
- `php artisan key:generate` (agar zaroorat ho)
- `php artisan migrate --force`
- Document root Laravel ke **`public`** folder par set karo (detail: `HOSTINGER_DEPLOY.md`)

**Jo folder** jahan `artisan` hai uska **full path** note karo — ye GitHub Secret **`HOSTINGER_PROJECT_PATH`** mein jayega.

Example (sirf sample, tumhara alag ho sakta hai):

`/home/u123456789/domains/viaanur.com/public_html`

---

### 3) SSH key (GitHub Actions → Hostinger)

Apne **PC** par (PowerShell / Git Bash):

```bash
ssh-keygen -t ed25519 -C "github-actions-deploy" -f hostinger_deploy_key -N ""
```

- **`hostinger_deploy_key`** = **private** key (GitHub Secret mein)
- **`hostinger_deploy_key.pub`** = **public** key → Hostinger hPanel → SSH → **SSH keys** mein add karo

Private key ki **poori file** copy karke GitHub repo → **Settings** → **Secrets and variables** → **Actions** → **New repository secret**:

| Secret name | Value |
|-------------|--------|
| `HOSTINGER_HOST` | SSH hostname (hPanel se, jaise `ssh.u123456789.hostingerserver.com`) |
| `HOSTINGER_USER` | SSH username (hPanel wala) |
| `HOSTINGER_SSH_KEY` | Private key ka **poora** text (`-----BEGIN ... END-----`) |
| `HOSTINGER_PROJECT_PATH` | Jahan `git` + `artisan` hai, e.g. `/home/USER/domains/DOMAIN/public_html` |

Phir dubara **`git push`** karo (ya Actions tab se **Re-run jobs**) — deploy chalna chahiye.

---

### 4) Agar SSH port 65002 ho

`.github/workflows/deploy-hostinger.yml` mein `port: 22` ki jagah **`port: 65002`** likh do (ya jo bhi hPanel bataye).

---

### 5) Private repo ho to

Agar baad mein repo **private** kar do, to server par `git pull` ke liye:

- GitHub repo → **Settings** → **Deploy keys** → public key add karo (read-only), **ya**
- Server par HTTPS + token — thoda advanced; deploy key asaan rehti hai.

---

## Flow (short)

1. Code change → `git push origin main`  
2. GitHub [amna-saeed/viaanoor](https://github.com/amna-saeed/viaanoor) par Actions run  
3. Server par `git reset --hard origin/main` + `composer` + `artisan`  
4. Site updated  

---

## Agar fail ho

**Hostinger Git deploy:**

- Zaroor **View latest build output** dekho — `Permission denied (publickey)` = Deploy key mismatch; `composer` error = server par PHP/composer; `fatal: not a git repository` = path galat.

### `Your requirements could not be resolved to an installable set of packages` (Composer)

Hostinger deploy ke dauran **`composer update`** chalta hai. Server par **PHP version zyada nayi** (jaise 8.3/8.4) ho to purane Laravel 8 lock ke sath **resolve fail** ho sakta hai.

**Is repo mein fix:** `composer.json` mein `config.platform.php` = `8.1.0` set hai taake har jagah same PHP maan kar packages resolve hon. **`composer.lock`** bhi update ho chuka — **donon files push** karo, phir **Deploy** dubara chalao.

**hPanel:** **Advanced → PHP Configuration** (ya domain PHP version) → **PHP 8.1** ya **8.2** select karo (8.0 se kam mat rakho Laravel 8 ke liye).

Agar phir bhi fail:

1. Apne PC par: `composer install --no-dev` chalao.  
2. **`vendor`** folder zip karke File Manager se server par upload karo (temporary workaround) — ya Hostinger support se poochho ke deploy par **`composer install`** (update nahi) chal sakta hai ya nahi.

**GitHub Actions:**

- **Actions** → failed run → **logs** dekho (line-by-line error).
- `composer` / `php` command na mile to Hostinger support se **PHP path** poochho ya workflow mein full path use karo.
- `HOSTINGER_PROJECT_PATH` galat ho to `cd` fail hoga — SSH se manually `cd` karke verify karo.

---

## Security

- **`.env`**, database password, mail password **kabhi GitHub repo mein commit mat karo.**
- Sirf server par `.env` rakho; GitHub mein sirf **SSH key secret** (private) — repo mein na dalo.

---

*Workflow file: `.github/workflows/deploy-hostinger.yml` | Manual hosting steps: `HOSTINGER_DEPLOY.md`*
