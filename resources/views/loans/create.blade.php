{{-- @extends('layouts.app')

@section('content')
    <h1>Create Loan</h1>
    <form action="{{ route('loans.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Book</label>
            <input type="text" name="book_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label>User</label>
            <input type="text" name="user_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Due Date</label>
            <input type="date" name="due_date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection --}}

{{-- @extends('layouts.app')

@section('content')
    <h1>Loan Book</h1>
    <form action="{{ route('loans.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="book">Select Book:</label>
            <select name="book" id="book" class="form-control" required>
                <option value="">Select a book</option>
                @foreach ($books as $book)
                    <option value="{{ $book->id }}">{{ $book->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="text" name="phone" id="phone" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection --}}

@extends('layouts.app')

@section('content')
    <h1>Create Loan</h1>
    <form action="{{ route('loans.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="book_id">Book:</label>
            <select name="book_id" id="book_id" class="form-control" required>
                <option value="">Select a book</option>
                @foreach ($books as $book)
                    <option value="{{ $book->id }}">{{ $book->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="user_id">User:</label>
            <select name="user_id" id="user_id" class="form-control" required>
                <option value="">Select a book</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create Loan</button>
    </form>
@endsection
