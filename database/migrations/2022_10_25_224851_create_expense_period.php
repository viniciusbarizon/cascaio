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
        Schema::create('expense_period', function (Blueprint $table) {
            $table->foreignId('expense_id')->constrained();
            $table->foreignId('period_id')->constrained();
            $table->primary(['expense_id', 'period_id']);
            $table->boolean('has_paid')->default(0);
            $table->float('price')->nullable()->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expense_period');
    }
};
