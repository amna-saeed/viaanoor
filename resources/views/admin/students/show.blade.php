@extends('admin.layout')
@section('title', $student->name)
@section('page_heading', 'Student details')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <table class="table table-borderless">
                    <tr>
                        <th class="text-muted" style="width: 140px;">Name</th>
                        <td>{{ $student->name }}</td>
                    </tr>
                    <tr>
                        <th class="text-muted">Email</th>
                        <td>{{ $student->email }}</td>
                    </tr>
                    <tr>
                        <th class="text-muted">Joined</th>
                        <td>{{ $student->created_at->format('F j, Y \a\t g:i A') }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <a href="{{ route('admin.students.index') }}" class="btn btn-outline-secondary">Back to list</a>
    </div>
</div>
@endsection
