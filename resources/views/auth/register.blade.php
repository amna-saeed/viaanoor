@extends('layout.main')
@section('content')
<div class="auth-area py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow border-0 rounded-3">
                    <div class="card-body p-5">
                        <h2 class="mb-4">Create account</h2>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            </div>
                        @endif
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="mb-4">
                                <label for="password_confirmation" class="form-label">Confirm password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                            </div>
                            <button type="submit" class="default-btn2 w-100">Register</button>
                        </form>
                        <p class="mt-4 mb-0 text-center text-muted">
                            Already have an account? <a href="{{ route('login') }}">Sign in</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .auth-area {
    margin: 100px 0px 0px;
}
</style>
@endsection
