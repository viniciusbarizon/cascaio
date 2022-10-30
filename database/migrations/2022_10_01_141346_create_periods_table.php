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
        Schema::create('periods', function (Blueprint $table) {
            $table->id();
            $table->timestamp('ends_at')->index();
            $table->string('name', 40)->nullable();
            $table->decimal('price')->nullable()->unsigned();
            $table->timestamp('starts_at')->index();
            $table->timestamps();
            $table->softDeletes();

            $table->foreignId('country_id')->constrained();
            $table->foreignId('currency_id')->constrained();
            $table->foreignId('user_id')->constrained();

            $table->unique([
                'starts_at',
                'user_id'
            ]);

            $table->unique([
                'ends_at',
                'user_id'
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('periods');
    }
};
