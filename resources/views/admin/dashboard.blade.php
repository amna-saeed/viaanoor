@extends('admin.layout')
@section('title', 'Dashboard')
@section('page_heading', 'Dashboard')

@section('content')
<div class="row g-4 mb-4">
    <div class="col-md-6 col-lg-4">
        <div class="card h-100">
            <div class="card-body d-flex align-items-center gap-3">
                <div class="rounded-circle bg-primary bg-opacity-10 p-3">
                    <i class="bi bi-people text-primary" style="font-size: 1.5rem;"></i>
                </div>
                <div>
                    <div class="text-muted small">Total Students</div>
                    <div class="h4 mb-0">{{ $stats['students'] }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card h-100">
            <div class="card-body d-flex align-items-center gap-3">
                <div class="rounded-circle bg-secondary bg-opacity-10 p-3">
                    <i class="bi bi-person-badge text-secondary" style="font-size: 1.5rem;"></i>
                </div>
                <div>
                    <div class="text-muted small">Admins</div>
                    <div class="h4 mb-0">{{ $stats['admins'] }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header bg-white border-bottom d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Recent students</h5>
        <a href="{{ route('admin.students.index') }}" class="btn btn-sm btn-outline-primary">View all</a>
    </div>
    <div class="card-body p-0">
        @if($stats['recent_students']->isEmpty())
            <p class="text-muted p-4 mb-0">No students yet.</p>
        @else
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Joined</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($stats['recent_students'] as $u)
                        <tr>
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->created_at->format('M j, Y') }}</td>
                            <td>
                                <a href="{{ route('admin.students.show', $u) }}" class="btn btn-sm btn-outline-secondary">View</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>

<style>
    .text-muted {
    --bs-text-opacity: 1;
    color: var(--bs-secondary-color) !important;
    font-size: 17px;
    font-weight: 500;
}
</style>
@endsection
