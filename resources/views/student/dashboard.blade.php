@extends('student.layout')
@section('title', 'Dashboard')

@section('content')
@if(isset($canClaimAdmin) && $canClaimAdmin && !auth()->user()->isAdmin())
    <div class="alert alert-success border-0 shadow-sm mb-4 d-flex align-items-center justify-content-between flex-wrap gap-3">
        <div>
            <strong class="d-block">No admin yet. Become admin to add and create courses.</strong>
            <span class="small">You will get access to the Admin dashboard, Courses, and Students.</span>
        </div>
        <a href="{{ route('claim-admin') }}" class="btn btn-success btn-lg px-4">
            Become admin &rarr;
        </a>
    </div>
@endif

<div class="row g-4">
    <div class="col-12">
        <div class="card">
            <div class="card-body p-4">
                <h2 class="h4 mb-2">Welcome, {{ auth()->user()->name }}</h2>
                <p class="text-muted mb-0">This is your student dashboard. View available courses below.</p>
                @if(auth()->user()->isAdmin())
                    <div class="alert alert-info mt-3 mb-0 py-2">
                        <strong>You are an admin.</strong> To add or manage courses, go to the
                        <a href="{{ route('admin.courses.index') }}">Admin → Courses</a> page.
                    </div>
                @else
                    <p class="text-muted small mt-2 mb-0">Only admin accounts can add or edit courses. Students can view published courses here.</p>
                @endif
            </div>
        </div>
    </div>

    <div class="col-12">
        <h3 class="h5 mb-3">Available courses</h3>
        @if($courses->isEmpty())
            <div class="card">
                <div class="card-body text-center py-5 text-muted">
                    <i class="bi bi-journal-bookmark" style="font-size: 2.5rem;"></i>
                    <p class="mt-2 mb-0">No courses published yet. An admin can add courses from the Admin site.</p>
                </div>
            </div>
        @else
            <div class="row g-3">
                @foreach($courses as $course)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        @if($course->image)
                            <img src="{{ asset('storage/' . $course->image) }}" class="card-img-top" alt="{{ $course->title }}" style="height:160px;object-fit:cover;">
                        @else
                            <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height:160px;">
                                <i class="bi bi-journal-bookmark text-muted" style="font-size: 3rem;"></i>
                            </div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $course->title }}</h5>
                            @if($course->description)
                                <p class="card-text text-muted small">{{ Str::limit($course->description, 80) }}</p>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @endif
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="card h-100">
            <div class="card-body d-flex align-items-center gap-3">
                <div class="rounded-circle bg-success bg-opacity-10 p-3">
                    <i class="bi bi-trophy text-success" style="font-size: 1.5rem;"></i>
                </div>
                <div>
                    <div class="fw-semibold">Progress</div>
                    <div class="text-muted small">Coming soon</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card h-100">
            <div class="card-body d-flex align-items-center gap-3">
                <div class="rounded-circle bg-info bg-opacity-10 p-3">
                    <i class="bi bi-chat-dots text-info" style="font-size: 1.5rem;"></i>
                </div>
                <div>
                    <div class="fw-semibold">Support</div>
                    <a href="{{ route('contact-us') }}" class="small">Contact us</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
