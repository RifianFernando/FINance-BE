<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBudgetReqeust;
use App\Models\budget;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(budget $budget)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(budget $budget)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, budget $budget)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(budget $budget)
    {
        //
    }

    /**
     * Store a newly created resource budget in storage.
     */
    public function setBudget(StoreBudgetReqeust $request)
    {
        $userId = auth()->user()->id;
        $BudgetAmount = budget::where('user_id', $userId)->first();
        if ($BudgetAmount) {
            $BudgetAmount->budget_amount = $request->budget;
            $BudgetAmount->save();
            return redirect(route('dashboard'))->with('success', 'Budget has been set!');
        }
        budget::create([
            'user_id' => $userId,
            'budget_amount' => $request->budget
        ]);

        return redirect(route('dashboard'))->with('success', 'Budget has been set!');
    }
}
