<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Loan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loans = Loan::with(['book', 'user'])->get();

        return view('loans.index', compact('loans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $books = Book::all();
        $users = User::all();

        return view('loans.create', compact('books', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'book_id' => 'required',
            'user_id' => 'required',
        ]);
    
        $book = Book::findOrFail($validatedData['book_id']);
    
        $loan = new Loan();
        $loan->book_id = $book->id;
        $loan->user_id = $validatedData['user_id'];
        $loan->return_date = Carbon::now()->addMonth();
        $loan->loan_date = now();
        $loan->status = 'borrowed';
        $loan->save();
    
        return redirect()->route('loans.index')->with('success', 'Loan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $loan = Loan::findOrFail($id);
        return view('loans.show', compact('loan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $loan = Loan::findOrFail($id);
        return view('loans.edit', compact('loan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'book_id' => 'required',
            'user_id' => 'required',
            'due_date' => 'required',
        ]);

        Loan::findOrFail($id)->update($validatedData);
        return redirect()->route('loans.index')->with('success', 'Loan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Loan::findOrFail($id)->delete();
        return redirect()->route('loans.index')->with('success', 'Loan deleted successfully.');
    }
}
