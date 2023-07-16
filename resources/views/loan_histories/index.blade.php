@extends('layouts.app')

@section('content')
    <h1>Loan History List</h1>
    <p>TODO: Auto Update With Loan Data</p>
    <a href="{{ route('loan_histories.create') }}" class="btn btn-primary">Add Loan History</a>
    <table class="table">
        <thead>
            <tr>
                <th>User</th>
                <th>Book</th>
                <th>Loan Date</th>
                <th>Return Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($loanHistories as $loanHistory)
                <tr>
                    <td>{{ $loanHistory->user->name }}</td>
                    <td>{{ $loanHistory->book->title }}</td>
                    <td>{{ $loanHistory->loan_date }}</td>
                    <td>{{ $loanHistory->return_date }}</td>
                    <td>
                        <a href="{{ route('loan_histories.show', $loanHistory->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('loan_histories.edit', $loanHistory->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('loan_histories.destroy', $loanHistory->id) }}" method="POST"
                            style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
