<?php

namespace App\Http\Controllers;

use App\Models\TransactionJoinTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        //get first name
        $UserName = auth()->user()->name;
        $FirstName = explode(' ', trim($UserName))[0];

        //get income with query builder
        $user_id = auth()->user()->id;
        $Income = DB::table('transactions')
            ->join('transaction_join_tables', 'transactions.id', '=', 'transaction_joi  n_tables.transaction_id')
            ->where('transactions.is_expense', '=', false)
            ->sum('transactions.amount');

        // DB::table('transactions')
        // ->leftJoin('transaction_join_tables', 'transactiions.id', '=', 'transaction_join_tables.transaction_id')
        // ->select('transactions.*', DB::raw('COUNT(transaction_join_tables.amount) as order_count'))
        // ->groupBy('transactions.id')
        // ->get();

        //get expense with query builder

        $Data = [
            'FirstName' => $FirstName,
            'Income' => $Income,
        ];

        return view('pages.dashboard', [
            'Data' => $Data,
        ]);
    }
}
