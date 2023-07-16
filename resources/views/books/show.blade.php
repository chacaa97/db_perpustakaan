@extends('layouts.app')

@section('content')
    <h1>Book Details</h1>
    <div class="card">
        <div class="card-header">
            <h3>{{ $book->title }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Author:</strong> {{ $book->author }}</p>
            <p><strong>Publisher:</strong> {{ $book->publisher }}</p>
            <p><strong>Publication Year:</strong> {{ $book->publication_year }}</p>
            <p><strong>Category:</strong> {{ $book->category }}</p>
            <p><strong>Stock:</strong> {{ $book->stock }}</p>
        </div>
    </div>
    <br>
    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
    </form>
@endsection
