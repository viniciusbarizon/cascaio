<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('period_expenses', function (Blueprint $table) {
            $table->id();
            $table->boolean('has_paid')->default(0);
            $table->float('price')->nullable()->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('expense_id')->constrained();
            $table->foreignId('period_id')->constrained();
            $table->unique(['expense_id', 'period_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('period_expenses');
    }
};
