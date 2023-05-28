<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balance_Money_User extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'balance_amount',
    ];

    public function TransactionJoinTable()
    {
        return $this->hasOne(TransactionJoinTable::class);
    }
}
