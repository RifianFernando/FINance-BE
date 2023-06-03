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
                ->whereMonth('t.created_at', '=', $currentMonth)
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

    public function index()
    {
        //get user
        $user = auth()->user();

        //get first name
        $UserName = $user->name;
        $FirstName = explode(' ', trim($UserName))[0];

        //get income with query builder
        $Income = $this->getValueIsExpense(false, $user->id);

        //get expense with query builder\
        $Expense = $this->getValueIsExpense(true, $user->id);

        //get total balance
        $TotalBalance = $this->getTotalBalance($user->id);

        $Data = [
            'FirstName' => $FirstName,
            'Income' => $Income,
            'Expense' => $Expense,
            'TotalBalance' => $TotalBalance
        ];

        return view('pages.dashboard', [
            'Data' => $Data,
        ]);
    }
}
