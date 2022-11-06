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
        Schema::create('category_default_country', function (Blueprint $table) {
            $table->foreignId('category_default_id')->constrained();
            $table->foreignId('country_id')->constrained();
            $table->primary(['country_id', 'category_default_id']);
            $table->datetime('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_default_country');
    }
};
