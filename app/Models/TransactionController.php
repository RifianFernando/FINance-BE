<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionController extends Model
{
    use HasFactory;

    public function view()
    {
        return view('pages.transaction');
    }

    public function insert()
    {
        return view('pages.transaction');
    }
}
