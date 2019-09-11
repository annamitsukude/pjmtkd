<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
          // Dotinstallと違うで良い⤵︎
            $table->bigIncrements('id');
            $table->unsignedInteger('customer_id');
            $table->date('create_date');
            $table->date('payment_date');
            $table->string('payment_num');
            $table->string('method_pay');
            $table->date('date_pay');
            $table->string('staff');
            $table->string('place_delivery');
            $table->timestamps();
            $table
              ->foreign('customer_id')
              ->references('id')
              ->on('customers')
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
        Schema::dropIfExists('invoices');
    }
}
