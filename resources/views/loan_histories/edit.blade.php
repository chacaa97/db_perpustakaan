@extends('layouts.app')

@section('content')
    <h1>Edit Loan History</h1>
    <form action="{{ route('loan_histories.update', $loanHistory->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>User</label>
            <input type="text" name="user_id" class="form-control" value="{{ $loanHistory->user_id }}" required>
        </div>
        <div class="form-group">
            <label>Book</label>
            <input type="text" name="book_id" class="form-control" value="{{ $loanHistory->book_id }}" required>
        </div>
        <div class="form-group">
            <label>Load Date</label>
            <input type="date" name="load_date" class="form-control" value="{{ $loanHistory->load_date }}" required>
        </div>
        <div class="form-group">
            <label>Return Date</label>
            <input type="date" name="return_date" class="form-control" value="{{ $loanHistory->return_date }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
