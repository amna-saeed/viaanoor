@extends('admin.layout')
@section('title', 'Edit course')
@section('page_heading', 'Edit course')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.courses.update', $course) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $course->title) }}" required>
                @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="4">{{ old('description', $course->description) }}</textarea>
                @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                @if($course->image)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $course->image) }}" alt="" class="rounded" style="max-width:120px;">
                    </div>
                @endif
                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">
                <small class="text-muted">Leave empty to keep current image.</small>
                @error('image')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-4 form-check">
                <input type="checkbox" name="is_published" id="is_published" class="form-check-input" value="1" {{ old('is_published', $course->is_published) ? 'checked' : '' }}>
                <label class="form-check-label" for="is_published">Published</label>
            </div>
            <button type="submit" class="btn btn-primary">Update course</button>
            <a href="{{ route('admin.courses.index') }}" class="btn btn-outline-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
