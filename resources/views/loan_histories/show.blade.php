@extends('layouts.app')

@section('content')
    <h1>Loan History Details</h1>
    <div class="card">
        <div class="card-header">
            <h3>Loan History ID: {{ $loanHistory->id }}</h3>
        </div>
        <div class="card-body">
            <p><strong>User:</strong> {{ $loanHistory->user->name }}</p>
            <p><strong>Book:</strong> {{ $loanHistory->book->title }}</p>
            <p><strong>Load Date:</strong> {{ $loanHistory->load_date }}</p>
            <p><strong>Return Date:</strong> {{ $loanHistory->return_date }}</p>
        </div>
    </div>
    <br>
    <a href="{{ route('loan_histories.edit', $loanHistory->id) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('loan_histories.destroy', $loanHistory->id) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
    </form>
@endsection
