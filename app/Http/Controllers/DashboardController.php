<?php

namespace App\Http\Controllers;

use App\Models\TransactionJoinTable;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    private function getValueIsExpense($is_expense)
    {
        //get income or expense with query builder
        $transaction = TransactionJoinTable::where('user_id', auth()->user()->id)->get();
        $data = 0;
        $currentMonth = Carbon::now()->format('m');
        if (isset($transaction[0])) {
            $data
                = DB::table('transaction_join_tables AS tj')
                ->leftJoin('transactions AS t', 'tj.transaction_id', '=', 't.id')
                ->where('tj.user_id', $transaction[0]->user_id)
                ->where('t.is_expense', $is_expense)
                ->whereMonth('t.created_at', '=', $currentMonth)
                ->selectRaw('SUM(t.amount) as amount')
                ->first();
            $data = $data->amount;
        }

        return $data;
    }

    public function index()
    {
        //get first name
        $UserName = auth()->user()->name;
        $FirstName = explode(' ', trim($UserName))[0];

        //get income with query builder
        $Income = $this->getValueIsExpense(false);

        //get expense with query builder\
        $Expense = $this->getValueIsExpense(true);

        $Data = [
            'FirstName' => $FirstName,
            'Income' => $Income,
            'Expense' => $Expense,
        ];

        return view('pages.dashboard', [
            'Data' => $Data,
        ]);
    }
}
