# Git push se auto-deploy — tumhara repo

**GitHub repo:** [https://github.com/amna-saeed/viaanoor](https://github.com/amna-saeed/viaanoor)

Jab tum **`main`** branch par `git push` karoge, GitHub **Actions** chalega aur **Hostinger server** par SSH se commands chalengi (code update + Laravel).

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

- **Actions** → failed run → **logs** dekho (line-by-line error).
- `composer` / `php` command na mile to Hostinger support se **PHP path** poochho ya workflow mein full path use karo.
- `HOSTINGER_PROJECT_PATH` galat ho to `cd` fail hoga — SSH se manually `cd` karke verify karo.

---

## Security

- **`.env`**, database password, mail password **kabhi GitHub repo mein commit mat karo.**
- Sirf server par `.env` rakho; GitHub mein sirf **SSH key secret** (private) — repo mein na dalo.

---

*Workflow file: `.github/workflows/deploy-hostinger.yml` | Manual hosting steps: `HOSTINGER_DEPLOY.md`*
