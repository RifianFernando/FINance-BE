<?php

namespace App\Http\Controllers;

use App\Models\Balance_Money_User;
use App\Models\TransactionJoinTable;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    private function getValueIsExpense($is_expense, $userId)
    {
        //get income or expense with query builder
        $transaction = TransactionJoinTable::where('user_id', $userId)->get();
        $data = 0;
        $currentMonth = Carbon::now()->format('m');
        if (isset($transaction[0])) {
            $data
                = DB::table('transaction_join_tables AS tj')
                ->leftJoin('transactions AS t', 'tj.transaction_id', '=', 't.id')
                ->where('tj.user_id', $transaction[0]->user_id)
                ->where('t.is_expense', $is_expense)
                ->whereMonth('t.date', '=', $currentMonth)
                ->selectRaw('SUM(t.amount) as amount')
                ->first();
            $data = $data->amount == null ? 0 : $data->amount;
        }

        return $data;
    }
    private function getTotalBalance($userId)
    {
        //get total balance with query builder
        $data =  DB::table('transaction_join_tables AS tj')
            ->leftJoin('Balance__money__users AS bmu', 'tj.balance_id', '=', 'bmu.id')
            ->where('tj.user_id', $userId)
            ->select('balance_amount AS amount')
            ->first();

        $data = $data == null ? 0 : $data->amount;

        return $data;
    }

    private function getBudget($userId)
    {
        //get total balance with query builder
        $data =  TransactionJoinTable::where('user_id', $userId)
            ->join('balance__money__users AS bmu', 'bmu.id', '=', 'transaction_join_tables.balance_id')
            ->select('budget_amount AS amount')
            ->first();
        $data = $data == null ? 0 : $data->amount;
        if ($data == null) {
            $data = 0;
        }

        return $data;
    }

    private function getLatestTransaction($userId)
    {
        //get latest transaction with query builder
        $data =  TransactionJoinTable::where('user_id', $userId)
            ->join('transactions AS t', 't.id', '=', 'transaction_join_tables.transaction_id')
            ->select('t.*')
            ->limit(9)
            ->orderBy('t.date', 'desc')
            ->orderBy('t.created_at', 'desc')
            ->get();

        return $data;
    }

    private function getLargestTransaction($userId)
    {
        $currentMonth = Carbon::now()->format('m');

        $data = TransactionJoinTable::where('user_id', $userId)
            ->join('transactions AS t', 't.id', '=', 'transaction_join_tables.transaction_id')
            ->where('t.is_expense', true)
            ->whereMonth('t.date', '=', $currentMonth)
            ->select('t.category', DB::raw('SUM(t.amount) as total_amount'))
            ->groupBy('t.category')
            ->orderBy('total_amount', 'desc')
            ->limit(2)
            ->get();

        return $data;
    }

    private function getMonthsIncomeAmount($userId)
    {
        $currentMonth = Carbon::now()->format('m');

        $data = TransactionJoinTable::where('user_id', $userId)
            ->join('transactions AS t', 't.id', '=', 'transaction_join_tables.transaction_id')
            ->where('t.is_expense', false)
            ->whereMonth('t.date', '=', $currentMonth)
            ->select(DB::raw('SUM(t.amount) as total_amount'))
            ->groupBy('t.category')
            ->orderBy('total_amount', 'desc')
            ->get();

        return $data;
    }

    private function getMonthsExpenseAmount($userId)
    {
        $currentMonth = Carbon::now()->format('m');

        $data = TransactionJoinTable::where('user_id', $userId)
            ->join('transactions AS t', 't.id', '=', 'transaction_join_tables.transaction_id')
            ->where('t.is_expense', true)
            ->whereMonth('t.date', '=', $currentMonth)
            ->select(DB::raw('SUM(t.amount) as total_amount'))
            ->groupBy('t.category')
            ->orderBy('total_amount', 'desc')
            ->get();

        return $data;
    }

    private function getMonthsIncomeCategory($userId)
    {
        $currentMonth = Carbon::now()->format('m');

        $data = TransactionJoinTable::where('user_id', $userId)
            ->join('transactions AS t', 't.id', '=', 'transaction_join_tables.transaction_id')
            ->where('t.is_expense', false)
            ->whereMonth('t.date', '=', $currentMonth)
            ->select('t.category')
            ->groupBy('t.category')
            ->orderByRaw('SUM(t.amount) DESC')
            ->get();

        return $data;
    }

    private function getMonthsExpenseCategory($userId)
    {
        $currentMonth = Carbon::now()->format('m');

        $data = TransactionJoinTable::where('user_id', $userId)
            ->join('transactions AS t', 't.id', '=', 'transaction_join_tables.transaction_id')
            ->where('t.is_expense', true)
            ->whereMonth('t.date', '=', $currentMonth)
            ->select('t.category')
            ->groupBy('t.category')
            ->orderByRaw('SUM(t.amount) DESC')
            ->get();

        return $data;
    }

    private function UserData($user)
    {
        //get first name
        $UserName = $user->name;
        $FirstName = explode(' ', trim($UserName))[0];

        //get income with query builder
        $Income = $this->getValueIsExpense(false, $user->id);

        //get expense with query builder\
        $Expense = $this->getValueIsExpense(true, $user->id);

        //get total balance
        $TotalBalance = $this->getTotalBalance($user->id);

        //get budget
        $Budget = $this->getBudget($user->id) - $Expense;
        
        //get set budget
        $SetBudget = $this->getBudget($user->id);

        //remaining days of months
        $RemainingDays = intval(date('t') - date('j'));

        // get latest transaction
        $LatestTransaction = $this->getLatestTransaction($user->id);

        //get largest transaction
        $LargestTransaction = $this->getLargestTransaction($user->id);

        //get this month's Income Amount
        $getMonthsIncomeAmount = $this->getMonthsIncomeAmount($user->id);

        //get this month's Income Amount
        $getMonthsExpenseAmount = $this->getMonthsExpenseAmount($user->id);

        //get this month's Income Category
        $getMonthsIncomeCategory = $this->getMonthsIncomeCategory($user->id);

        //get this month's Income Category
        $getMonthsExpenseCategory = $this->getMonthsExpenseCategory($user->id);

        $Data = [
            'FirstName' => $FirstName,
            'Income' => $Income,
            'Expense' => $Expense,
            'TotalBalance' => $TotalBalance,
            'Budget' => $Budget,
            'BudgetLeft' => floor($Budget / $RemainingDays),
            'LatestTransaction' => $LatestTransaction,
            'LargestTransaction' => $LargestTransaction,
            'SetBudget' => $SetBudget,
            'MonthIncomeAmount' => $getMonthsIncomeAmount->pluck('total_amount')->ToArray(),
            'MonthIncomeCategory' => $getMonthsIncomeCategory->pluck('category')->ToArray(),
            'MonthExpenseAmount' => $getMonthsExpenseAmount->pluck('total_amount')->ToArray(),
            'MonthExpenseCategory' => $getMonthsExpenseCategory->pluck('category')->ToArray(),
        ];

        return $Data;
    }

    public function index()
    {
        //get user
        $user = auth()->user();

        //get data
        $Data = $this->UserData($user);


        return view('pages.dashboard', [
            'Data' => $Data,
        ]);
    }

    public function reportIndex()
    {
        //get user
        $user = auth()->user();

        //get data
        $Data = $this->UserData($user);

        return view('pages.report', [
            'Data' => $Data,
        ]);
    }
}
