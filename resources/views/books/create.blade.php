@extends('layouts.app')

@section('title', 'Add Book')

@section('content')
<h1 class="h4 mb-3">Add Book</h1>

<form action="{{ route('books.store') }}" method="POST">
  @csrf

  <div class="mb-3">
    <label class="form-label">Title</label>
    <input type="text" name="title" value="{{ old('title') }}" class="form-control">
    @error('title') <div class="text-danger small">{{ $message }}</div> @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Author</label>
    <input type="text" name="author" value="{{ old('author') }}" class="form-control">
    @error('author') <div class="text-danger small">{{ $message }}</div> @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Year Published</label>
    <input type="number" name="year_published" value="{{ old('year_published') }}" class="form-control">
    @error('year_published') <div class="text-danger small">{{ $message }}</div> @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Genre</label>
    <input type="text" name="genre" value="{{ old('genre') }}" class="form-control">
    @error('genre') <div class="text-danger small">{{ $message }}</div> @enderror
  </div>

  <button class="btn btn-success">Save</button>
  <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
