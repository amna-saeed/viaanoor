# Admin & Student Dashboard – URLs & Setup

## Why do I only see the student dashboard?

If you only see **http://viaanoor.test/student/dashboard** after login, your user has the **student** role. The **admin site** is only visible to users with the **admin** role. Make your user an admin (see below), then log in again.

---

## URLs (quick reference)

| URL | Who can see it |
|-----|-----------------|
| **http://viaanoor.test/login** | Everyone (sign in) |
| **http://viaanoor.test/register** | Everyone (create student account) |
| **http://viaanoor.test/student/dashboard** | Logged-in users (student dashboard) |
| **http://viaanoor.test/admin** or **http://viaanoor.test/admin/dashboard** | **Admin only** – main admin page |
| **http://viaanoor.test/admin/students** | **Admin only** – list all students |
| **http://viaanoor.test/admin/students/1** | **Admin only** – view student profile (change 1 to student id) |
| **http://viaanoor.test/admin/courses** | **Admin only** – list / upload courses |
| **http://viaanoor.test/admin/courses/create** | **Admin only** – add new course |

---

## How to get admin access

### 1. Run migrations (if you haven't)

```bash
php artisan migrate
```

This adds the `role` column and creates the `courses` table.

### 2. Make your user an admin

Use the **email you use to log in** (e.g. the one you used at http://viaanoor.test/register).

```bash
php artisan tinker
```

Then (replace with your real email):

```php
>>> App\Models\User::where('email', 'your@email.com')->update(['role' => 'admin']);
>>> exit
```

### 3. Log in again

1. Sign out if you're already logged in.
2. Go to **http://viaanoor.test/login** and sign in with that email.
3. After login you'll be sent to **http://viaanoor.test/admin/dashboard**.
4. In the sidebar you'll see **Dashboard**, **Students**, **Courses**, and **View site**.

---

## What you can do in the admin site

- **Dashboard** – overview and recent students.
- **Students** – list all students; click **View** to open a student's profile.
- **Courses** – list courses, **Add course** to upload/create a course (title, description, image, published/draft).

---

## Course images (optional)

To show uploaded course images correctly, run once:

```bash
php artisan storage:link
```

---

## Behaviour summary

- **Register** – new user has role **student** – after login they see the **student dashboard**.
- **After you set role to admin** – that user sees the **admin dashboard** after login.
- On the main site header, admins see an **Admin** link that goes to **http://viaanoor.test/admin**.
- If a non-admin opens **http://viaanoor.test/admin**, they are redirected to the student dashboard.
