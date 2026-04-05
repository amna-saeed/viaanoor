@extends('student.layout')
@section('title', 'My LMS')

@section('content')
@if(isset($canClaimAdmin) && $canClaimAdmin && !auth()->user()->isAdmin())
    <div class="alert alert-success border-0 shadow-sm mb-4 d-flex align-items-center justify-content-between flex-wrap gap-3">
        <div>
            <strong class="d-block">No admin yet. Become admin to manage the LMS.</strong>
            <span class="small">You will get access to the Admin dashboard.</span>
        </div>
        <a href="{{ route('claim-admin') }}" class="btn btn-success btn-lg px-4">Become admin &rarr;</a>
    </div>
@endif

<div class="row g-4">
    <div class="col-12">
        <div class="hs-lms-card hs-lms-card--welcome" data-hs-widget="student-welcome">
            <div class="hs-lms-card__body">
                <h2 class="h4 mb-2">Welcome, {{ auth()->user()->name }}</h2>
                <p class="text-muted mb-0 small">Your enrolled courses, catalog, and announcements below.</p>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="hs-lms-card hs-lms-card--stat" data-hs-widget="student-stat">
            <div class="hs-lms-card__icon hs-lms-card__icon--primary"><i class="bi bi-bookmark-check"></i></div>
            <div class="hs-lms-card__body">
                <span class="hs-lms-card__label">My courses</span>
                <span class="hs-lms-card__value" data-hs-bind="enrolled_count">{{ $myCourses->count() }}</span>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="hs-lms-card hs-lms-card--stat" data-hs-widget="student-stat">
            <div class="hs-lms-card__icon hs-lms-card__icon--amber"><i class="bi bi-trophy"></i></div>
            <div class="hs-lms-card__body">
                <span class="hs-lms-card__label">Progress</span>
                <span class="hs-lms-card__value hs-lms-card__value--sm">Track per course</span>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="hs-lms-card hs-lms-card--stat" data-hs-widget="student-stat">
            <div class="hs-lms-card__icon hs-lms-card__icon--teal"><i class="bi bi-megaphone"></i></div>
            <div class="hs-lms-card__body">
                <span class="hs-lms-card__label">Announcements</span>
                <span class="hs-lms-card__value" data-hs-bind="announcements_count">{{ $announcements->count() }}</span>
            </div>
        </div>
    </div>

    <div class="col-12 col-lg-7">
        <h3 class="h5 mb-3">My courses</h3>
        @if($myCourses->isEmpty())
            <div class="hs-lms-panel">
                <div class="hs-lms-panel__body text-center text-muted py-5">
                    <i class="bi bi-journal-bookmark" style="font-size:2rem;"></i>
                    <p class="mb-0 mt-2">You are not enrolled yet. Browse the catalog and tap Enroll.</p>
                </div>
            </div>
        @else
            <div class="row g-3">
                @foreach($myCourses as $course)
                <div class="col-md-6">
                    <div class="hs-lms-panel h-100">
                        <div class="hs-lms-panel__body">
                            @if($course->image)
                                <img src="{{ asset('storage/' . $course->image) }}" class="rounded w-100 mb-2" alt="" style="height:120px;object-fit:cover;">
                            @endif
                            <h5 class="h6">{{ $course->title }}</h5>
                            @if($course->description)
                                <p class="small text-muted mb-2">{{ Str::limit($course->description, 100) }}</p>
                            @endif
                            <span class="badge bg-success text-white">Enrolled</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @endif
    </div>

    <div class="col-12 col-lg-5">
        <h3 class="h5 mb-3">Announcements</h3>
        <div class="hs-lms-panel" data-hs-widget="announcements">
            <div class="hs-lms-panel__body p-0">
                @forelse($announcements as $a)
                    <div class="border-bottom p-3">
                        <strong class="d-block">{{ $a->title }}</strong>
                        <span class="small text-muted">{{ $a->published_at?->format('M j, Y') ?? $a->created_at->format('M j, Y') }}</span>
                        <p class="small mb-0 mt-2">{{ Str::limit($a->body, 200) }}</p>
                    </div>
                @empty
                    <p class="text-muted p-4 mb-0 small">No announcements yet.</p>
                @endforelse
            </div>
        </div>
    </div>

    <div class="col-12">
        <h3 class="h5 mb-3">Course catalog</h3>
        @if($catalog->isEmpty())
            <div class="hs-lms-panel">
                <div class="hs-lms-panel__body text-center text-muted py-4">No more courses to enroll in right now.</div>
            </div>
        @else
            <div class="row g-3">
                @foreach($catalog as $course)
                <div class="col-md-6 col-lg-4">
                    <div class="hs-lms-panel h-100 d-flex flex-column">
                        @if($course->image)
                            <img src="{{ asset('storage/' . $course->image) }}" class="w-100" alt="" style="height:140px;object-fit:cover;">
                        @endif
                        <div class="hs-lms-panel__body flex-grow-1 d-flex flex-column">
                            <h5 class="h6">{{ $course->title }}</h5>
                            @if($course->description)
                                <p class="small text-muted flex-grow-1">{{ Str::limit($course->description, 90) }}</p>
                            @endif
                            <form action="{{ route('student.courses.enroll', $course) }}" method="POST" class="mt-2">
                                @csrf
                                <button type="submit" class="btn btn-sm w-100" style="background:#322f89;color:#fff;">Enroll</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @endif
    </div>

    <div class="col-12">
        <a href="{{ route('contact-us') }}" class="btn btn-outline-secondary btn-sm">Contact support</a>
    </div>
</div>
@endsection
