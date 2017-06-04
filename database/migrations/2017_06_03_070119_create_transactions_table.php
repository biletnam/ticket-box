<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('acara_id')->unsigned();
            $table->integer('jumlah_pembayaran');
            $table->boolean('status_pembayaran')->default(0);
            $table->foreign('user_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('acara_id')->references('id')->on('acara')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}