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
        Schema::create('bill', function (Blueprint $table) {
            $table->id('id_bill');
            $table->string('name_user',225);
            $table->string('tel_user',225);
            $table->text('address_user')->nullable();
            $table->decimal('price', 10, 2);
            $table->string('img',225);
            $table->datetime('date');
            $table->integer('total');
            $table->integer('quantity');
            $table->string('status',225);
            $table->unsignedBigInteger('id_user')->nullable();
            $table->unsignedBigInteger('id_payment')->nullable();
            $table->timestamps();
            $table->foreign('id_user')->references('id_user')->on('user');
            $table->foreign('id_payment')->references('id_payment')->on('payment');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
