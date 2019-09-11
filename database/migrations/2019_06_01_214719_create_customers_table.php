<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name');
            $table->string('company_name_kana');
            $table->string('division');
            $table->string('name');
            $table->string('name_furigana');
            $table->string('name_renmei');
            $table->string('payment_term');
            $table->integer('discount');
            $table->string('address_main');
            $table->string('address_sub');
            $table->string('phone_num');
            $table->string('tel');
            $table->string('mail');
            $table->string('dm');
            $table->text('route');
            $table->text('memo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
