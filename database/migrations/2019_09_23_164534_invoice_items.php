<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InvoiceItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('invoice_items', function (Blueprint $table) {
          // Dotinstallと違うで良い⤵︎
            $table->bigIncrements('id');
            $table->unsignedInteger('invoice_id');
            $table->integer('item_num');
            $table->string('item_name');
            $table->string('spec');
            $table->integer('number');
            $table->integer('unit_price');
            $table->timestamps();
            $table
              ->foreign('invoice_id')
              ->references('id')
              ->on('invoices')
              ->onDelete('cascade');
              // 顧客消えたら請求書も消える☝︎＃２６
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
