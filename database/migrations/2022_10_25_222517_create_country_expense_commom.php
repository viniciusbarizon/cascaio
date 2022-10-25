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
        Schema::create('country_expense_commom', function (Blueprint $table) {
            $table->foreignId('country_id')->constrained();
            $table->foreignId('expense_common_id')->constrained();
            $table->primary(['country_id', 'expense_common_id']);
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
        Schema::dropIfExists('country_expense_commom');
    }
};
