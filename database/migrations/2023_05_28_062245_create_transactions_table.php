<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount', 10, 2);
            $table->date('date');
            $table->set('category', [
                'Food & Beverage',
                'Transportation',
                'House Bill',
                'Medical',
                'Education',
                'Gift & Donations',
                'Fun Money',
                'Other Expenses'
            ]);
            $table->string('description');
            $table->boolean('is_expense');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
