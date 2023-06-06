<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBudgetReqeust;
use App\Http\Requests\TransactionRequest;
use App\Models\Balance_Money_User;
use App\Models\Transaction;
use App\Models\TransactionJoinTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $amount = 0;
        if ($Is_Expense == true) {
            $amount = -$Transaction->amount;
        } else {
            $amount = $Transaction->amount;
        }

        // Check JoinTable for user_id
        $TransactionJoinTable = TransactionJoinTable::where('user_id', $user_id)->first();
        if ($TransactionJoinTable == null) {
            $balanceCreate = Balance_Money_User::create([
                'balance_amount' => $amount
            ]);
        } else {
            $balanceCreate = Balance_Money_User::where('id', $TransactionJoinTable->balance_id)->first();
            $balanceCreate->balance_amount += $amount;
            $balanceCreate->save();
        }
        TransactionJoinTable::create([
            'user_id' => $user_id,
            'transaction_id' => $Transaction->id,
            'balance_id' => $balanceCreate->id
        ]);

        return redirect()->route('transaction.view');
    }

    /**
     * Store a newly created resource budget in storage.
     */
    public function setBudget(StoreBudgetReqeust $request)
    {
        $userId = auth()->user()->id;
        try {
            $Budget_user =
                TransactionJoinTable::where('user_id', $userId)
                ->get('balance_id')
                ->first()->balance_id;

            $BudgetAmount =
                Balance_Money_User::where('id', $Budget_user)
                ->first();
            $BudgetAmount->budget_amount = $request->budget;
            $BudgetAmount->save();
        } catch (\Exception $e) {
            return redirect(route('transaction.view'))->with('error', 'Please add transaction first!');
        }

        return redirect(route('dashboard'))->with('success', 'Budget has been set!');
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
