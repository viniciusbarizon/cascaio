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
        Schema::create('expense', function (Blueprint $table) {
            $table->id();
            $table->string('description')->index()->nullable();
            $table->timestamp('made_at')->index();
            $table->decimal('price')->index()->unsigned();
            $table->timestamps();
            $table->softDeletes()->index();

            $table->foreignId('category_id')->constrained();
            $table->foreignId('country_id')->constrained();
            $table->foreignId('currency_id')->constrained();
            $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expense');
    }
};
