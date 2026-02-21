<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin') - ViaANur</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/fevicon.webp') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root { --sidebar-width: 260px; --topbar-height: 56px; }
        body { font-family: 'Poppins', sans-serif; background: #f4f6f9; min-height: 100vh; }
        .admin-wrapper { display: flex; min-height: 100vh; }
        .admin-sidebar {
            width: var(--sidebar-width); background: #1e293b; color: #e2e8f0;
            position: fixed; top: 0; left: 0; height: 100vh; z-index: 1000;
        }
        .admin-sidebar .brand { padding: 1rem 1.25rem; border-bottom: 1px solid #334155; font-weight: 600; font-size: 1.1rem; }
        .admin-sidebar .brand img { height: 32px; }
        .admin-sidebar .nav { padding: 1rem 0; }
        .admin-sidebar .nav-link {
            color: #94a3b8; padding: 0.65rem 1.25rem; display: flex; align-items: center; gap: 0.75rem;
        }
        .admin-sidebar .nav-link:hover, .admin-sidebar .nav-link.active { color: #fff; background: rgba(255,255,255,0.08); }
        .admin-sidebar .nav-link i { font-size: 1.2rem; width: 24px; text-align: center; }
        .admin-main { flex: 1; margin-left: var(--sidebar-width); min-height: 100vh; display: flex; flex-direction: column; }
        .admin-topbar {
            height: var(--topbar-height); background: #fff; border-bottom: 1px solid #e2e8f0;
            display: flex; align-items: center; justify-content: space-between; padding: 0 1.5rem;
        }
        .admin-content { flex: 1; padding: 1.5rem; }
        .card { border: none; border-radius: 8px; box-shadow: 0 1px 3px rgba(0,0,0,0.08); }
        .table th { font-weight: 600; color: #475569; }
    </style>
    @stack('styles')
</head>
<body>
    <div class="admin-wrapper">
        <aside class="admin-sidebar">
            <div class="brand d-flex align-items-center gap-2">
                <img src="{{ asset('assets/images/banner/logo-new.webp') }}" alt="ViaANur">
                <span>Admin</span>
            </div>
            <nav class="nav flex-column">
                <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                    <i class="bi bi-grid-1x2"></i> Dashboard
                </a>
                <a class="nav-link {{ request()->routeIs('admin.students*') ? 'active' : '' }}" href="{{ route('admin.students.index') }}">
                    <i class="bi bi-people"></i> Students
                </a>
                <a class="nav-link {{ request()->routeIs('admin.courses*') ? 'active' : '' }}" href="{{ route('admin.courses.index') }}">
                    <i class="bi bi-journal-bookmark"></i> Courses
                </a>
                <a class="nav-link" href="{{ route('home') }}" target="_blank">
                    <i class="bi bi-box-arrow-up-right"></i> View site
                </a>
            </nav>
        </aside>
        <div class="admin-main">
            <header class="admin-topbar">
                <h1 class="h5 mb-0 text-dark">@yield('page_heading', 'Admin')</h1>
                <div class="d-flex align-items-center gap-3">
                    <span class="text-muted small">{{ auth()->user()->name }}</span>
                    <form action="{{ route('logout') }}" method="POST" class="d-inline" onsubmit="return confirm('Sign out?');">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger btn-sm">
                            <i class="bi bi-box-arrow-right"></i> Sign out
                        </button>
                    </form>
                </div>
            </header>
            <main class="admin-content">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">{{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif
                @yield('content')
            </main>
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    @stack('scripts')
</body>
</html>
