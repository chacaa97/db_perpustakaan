<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\LoanHistory;
use App\Models\User;
use Illuminate\Http\Request;

class LoanHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loanHistories = LoanHistory::all();
        return view('loan_histories.index', compact('loanHistories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $books = Book::all();
        
        return view('loan_histories.create', compact('users', 'books'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'book_id' => 'required',
            'loan_date' => 'required',
            'return_date' => 'required',
        ]);

        LoanHistory::create($validatedData);
        return redirect()->route('loan_histories.index')->with('success', 'Loan history created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $loanHistory = LoanHistory::findOrFail($id);
        return view('loan_histories.show', compact('loanHistory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $loanHistory = LoanHistory::findOrFail($id);
        return view('loan_histories.edit', compact('loanHistory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'book_id' => 'required',
            'loan_date' => 'required',
            'return_date' => 'required',
        ]);

        LoanHistory::findOrFail($id)->update($validatedData);
        return redirect()->route('loan_histories.index')->with('success', 'Loan history updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        LoanHistory::findOrFail($id)->delete();
        return redirect()->route('loan_histories.index')->with('success', 'Loan history deleted successfully.');
    }
}
