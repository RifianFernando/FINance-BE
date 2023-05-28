<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionJoinTable extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'transaction_id',
        'balance_id'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    public function BalanceMoneyUser()
    {
        return $this->belongsTo(BalanceMoneyUser::class);
    }
}
