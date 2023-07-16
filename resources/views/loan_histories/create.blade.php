@extends('layouts.app')

@section('content')
    <h1>Create Loan History</h1>
    <form action="{{ route('loan_histories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>User</label>
            <input type="text" name="user_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Book</label>
            <input type="text" name="book_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Load Date</label>
            <input type="date" name="load_date" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Return Date</label>
            <input type="date" name="return_date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
