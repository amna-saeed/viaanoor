# MySQL Database Setup for Viaanoor (Beginner Guide)

Follow these steps to create a database and fix the "Test Connection" failure in DBeaver.

---

## Step 1: Make sure MySQL is running

1. **Windows:** Open **Services** (press `Win + R`, type `services.msc`, Enter).
2. Find **MySQL** or **MySQL80** (or similar) in the list.
3. If the status is not "Running", right‑click → **Start**.

If you don't see MySQL, you need to [install MySQL](https://dev.mysql.com/downloads/installer/) first.

---

## Step 2: Test connection in DBeaver **without** a database first

Often the connection fails because the **database name does not exist yet**. Test with a database that always exists:

1. Open **DBeaver** → **Connection Settings** (or create a new connection).
2. Set:
   - **Server Host:** `localhost` (or `127.0.0.1`)
   - **Port:** `3306`
   - **Database:** leave **empty** or type `mysql` (this is a default system database)
   - **Username:** `root`
   - **Password:** the password you set when you installed MySQL (leave empty only if you never set one)
3. Click **Test Connection...**.

- If it **succeeds**: go to Step 3 to create your project database.
- If it **fails**:
  - Check that MySQL is running (Step 1).
  - If you never set a root password, leave **Password** empty.
  - If you forgot the password, you may need to reset it (search: "MySQL reset root password Windows").

---

## Step 3: Create the database for this project

Once "Test Connection" works:

1. In DBeaver, **Finish** the connection so it appears in the left panel.
2. **Right‑click** on your connection → **SQL Editor** → **New SQL Script**, or connect and open any database.
3. Run this SQL (you can change `viaanoor` to another name if you like):

```sql
CREATE DATABASE viaanoor CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

4. In the left panel, **right‑click** on your connection → **Refresh**. You should see the new database `viaanoor`.

---

## Step 4: Connect to the new database in DBeaver

1. **Right‑click** your connection → **Edit Connection** (or **Connection Settings**).
2. In **Database**, type: `viaanoor` (same name you used in Step 3).
3. Click **Test Connection...** again. It should succeed.

---

## Step 5: Set your Laravel project to use this database

1. Open the file **`.env`** in your project root (same folder as `viaanoor`).
2. Find the database lines and set them to match what you use in DBeaver:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=viaanoor
DB_USERNAME=root
DB_PASSWORD=your_mysql_password_here
```

- Use **exactly** the same **username** and **password** as in DBeaver.
- If your MySQL root has **no password**, leave it empty: `DB_PASSWORD=`
- Save the file.

---

## Step 6: Run Laravel migrations

In a terminal, in your project folder, run:

```bash
php artisan migrate
```

This creates the tables (users, etc.) in the `viaanoor` database. If this runs without errors, your database setup is complete.

---

## Quick checklist

| Step | What to do |
|------|------------|
| 1 | MySQL service is **Running** |
| 2 | DBeaver **Test Connection** works with database empty or `mysql` |
| 3 | Created database: `CREATE DATABASE viaanoor ...` |
| 4 | DBeaver **Test Connection** works with database `viaanoor` |
| 5 | `.env` has same `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD` |
| 6 | `php artisan migrate` runs successfully |

If "Test Connection" still fails after Step 2, the problem is usually: MySQL not running, wrong password, or wrong host/port. Double‑check those first.
