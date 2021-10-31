<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gname');
            $table->string('number')->uniqe();
            $table->string('village');
            $table->string('union');
            $table->string('zela');
            $table->string('group');
            $table->string('date');
            $table->string('loantypes');
            $table->string('loanamount');
            $table->string('advanced');
            $table->string('Status');
            $table->string('installment');
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
        Schema::dropIfExists('registrations');
    }
}
