@extends('layouts.app')

@section('title', 'Books')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h1 class="h3">Books</h1>
  <a href="{{ route('books.create') }}" class="btn btn-primary">Add New Book</a>
</div>

<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>#</th>
      <th>Title</th>
      <th>Author</th>
      <th>Year</th>
      <th>Genre</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @forelse($books as $book)
      <tr>
        <td>{{ $book->id }}</td>
        <td>{{ $book->title }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->year_published }}</td>
        <td>{{ $book->genre }}</td>
        <td>
          <a href="{{ route('books.edit', $book) }}" class="btn btn-sm btn-warning">Edit</a>

          <form action="{{ route('books.destroy', $book) }}" method="POST" class="d-inline"
                onsubmit="return confirm('Are you sure you want to delete this book?');">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm btn-danger">Delete</button>
          </form>
        </td>
      </tr>
    @empty
      <tr>
        <td colspan="6" class="text-center">No books found.</td>
      </tr>
    @endforelse
  </tbody>
</table>
@endsection
