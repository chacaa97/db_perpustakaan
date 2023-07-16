@extends('layouts.app')

@section('content')
    <h1>Loan List</h1>
    <a href="{{ route('loans.create') }}" class="btn btn-primary">Add Loan</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Borrower</th>
                <th>Due Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($loans as $loan)
                <tr>
                    <td>{{ $loan->book->title }}</td>
                    <td>{{ $loan->user->name }}</td>
                    <td>{{ $loan->return_date }}</td>
                    <td>
                        <a href="{{ route('loans.show', $loan->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('loans.edit', $loan->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('loans.destroy', $loan->id) }}" method="POST" style="display:inline">
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
