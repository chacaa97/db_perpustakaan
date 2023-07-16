@extends('layouts.app')

@section('content')
    <h1>Edit Loan</h1>
    <form action="{{ route('loans.update', $loan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Book</label>
            <input type="text" name="book_id" class="form-control" value="{{ $loan->book_id }}" required>
        </div>
        <div class="form-group">
            <label>User</label>
            <input type="text" name="user_id" class="form-control" value="{{ $loan->user_id }}" required>
        </div>
        <div class="form-group">
            <label>Due Date</label>
            <input type="date" name="due_date" class="form-control" value="{{ $loan->due_date }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
