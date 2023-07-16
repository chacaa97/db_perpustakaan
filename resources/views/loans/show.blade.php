@extends('layouts.app')

@section('content')
    <h1>Loan Details</h1>
    <div class="card">
        <div class="card-header">
            <h3>Loan ID: {{ $loan->id }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Book Id:</strong> {{ $loan->book_id }}</p>
            <p><strong>User Id:</strong> {{ $loan->user_id }}</p>
            <p><strong>Due Date:</strong> {{ $loan->due_date }}</p>
        </div>
    </div>
    <br>
    <a href="{{ route('loans.edit', $loan->id) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('loans.destroy', $loan->id) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
    </form>
@endsection
