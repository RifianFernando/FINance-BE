<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionRequest;
use App\Models\Transaction;
use App\Models\TransactionJoinTable;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.transaction');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(TransactionRequest $request)
    {
        $validated = $request->validated();
        return redirect()->route('transaction.index');

        // check Balance Money User Table
        $user_id = auth()->user()->id;
        $Is_Expense = true;
        if ($validated['category'] === 'Other Income' || $validated['category'] === 'Salary') {
            $Is_Expense = false;
        }

        $Transaction = Transaction::create([
            'amount' => $validated['amount'],
            'date' => $validated['date'],
            'category' => $validated['category'],
            'description' => $validated['description'],
            'is_expense' => $Is_Expense,
        ]);

        // Check JoinTable for user_id
        $user_id = auth()->user()->id;
        $TransactionJoinTable = Transaction::where('user_id', $user_id)->first();
        if ($TransactionJoinTable == null) {
            TransactionJoinTable::create([
                'user_id' => $user_id,
                'transaction_id' => $Transaction->id,
                // 'balance_id' => auth()->user()->balance_id,
            ]);
        }

        return redirect()->route('transaction.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
