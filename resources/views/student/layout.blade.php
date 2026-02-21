<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'My Dashboard') - ViaANur</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/fevicon.webp') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background: #f4f6f9; min-height: 100vh; }
        .student-dash-header {
            background: #d1d1daad;
            color: #f8f8f8;
            padding: 1.5rem 0;
            margin-bottom: 1.5rem;
            border-bottom: 1px solid #d0d2dc;
        }
        .student-dash-header .brand img { height: 36px; }
        .student-dash-header .nav-link { 
            color: rgb(34 33 99);
            padding: 0.5rem 1rem;
            font-weight: 600;
         }
        .student-dash-header .nav-link:hover, .student-dash-header .nav-link.active { color: #3d39a9; }
        .student-dash-content { padding-bottom: 2rem; }
        .card { border: none; border-radius: 8px; box-shadow: 0 1px 3px rgba(0,0,0,0.08); }
        .logo-dashboard{    
            width: auto;
            height: 60px;
        }
        span.text-blue-50 {
            color: #211f62;
        }
        a.btn.btn-outline-light.btn-sm {
            border: 1px solid #211f61;
            color: #211f61;
        }
        a.btn.btn-outline-light.btn-sm:hover {
            background-color: #211f61;
            color: #fff;
        }
        span.text-user-name {
            color: #211f62;
            padding: 0px 21px;
            font-size: 18px;
            font-weight: 600;
        }
        button.btn-default-out {
            border: 1px solid #211f62;
            color: #211f62;
            border-radius: 6px;
            padding: 6px 11px;
        }
        button.btn-default-out:hover {
            background-color:#211f62;
            color: #fff;
        }
    </style>
    @stack('styles')
</head>
<body>
    <header class="student-dash-header">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                <a href="{{ route('student.dashboard') }}" class="d-flex align-items-center gap-2 text-white text-decoration-none">
                    <img src="{{ asset('assets/images/banner/logo-new.webp') }}" class="logo-dashboard" alt="ViaANur">
                    <span class="text-user-name">{{ auth()->user()->name }}</span>
                </a>
                <nav class="d-flex align-items-center gap-2">
                    <a class="nav-link active" href="{{ route('student.dashboard') }}">Dashboard</a>
                    @if(auth()->user()->isAdmin())
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">Admin</a>
                        <a class="nav-link" href="{{ route('admin.courses.index') }}">Add / manage courses</a>
                    @endif
                    <span class="text-blue-50">|</span>
                    <a class="nav-link" href="{{ route('home') }}" target="_blank">View site</a>
                    
                    
                    <form action="{{ route('logout') }}" method="POST" class="d-inline" onsubmit="return confirm('Sign out?');">
                        @csrf
                        <button type="submit" class="btn-default-out">
                            <i class="bi bi-box-arrow-right"></i> Sign out
                        </button>
                    </form>
                </nav>
            </div>
        </div>
    </header>

    <main class="container student-dash-content">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        @yield('content')
    </main>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    @stack('scripts')
</body>
</html>
