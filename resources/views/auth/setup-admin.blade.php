@extends('layout.main')
@section('content')
<div class="auth-area py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow border-0 rounded-3">
                    <div class="card-body p-5">
                        <h2 class="mb-3">Create admin (no register)</h2>
                        <p class="text-muted small">Use this once so you can sign in at <strong>/login</strong>. After that, set <code>ALLOW_WEB_ADMIN_SETUP=false</code> in <code>.env</code>.</p>
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            </div>
                        @endif
                        <form method="POST" action="{{ route('setup-admin.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Admin email</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ old('email', 'admin@viaanoor.test') }}" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="mb-4">
                                <label for="password_confirmation" class="form-label">Confirm password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                            </div>
                            <button type="submit" class="default-btn2 w-100">Save admin &amp; go to login</button>
                        </form>
                        <p class="mt-3 mb-0 text-center small">
                            <a href="{{ route('login') }}">Already have an account? Sign in</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>.auth-area { margin: 100px 0 0; }</style>
@endsection
