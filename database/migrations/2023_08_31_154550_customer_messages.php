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
        //
        Schema::create('customer_messages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Name');
            $table->string('Email');
            $table->string('Phone');
            $table->string('Company');
            $table->tinyInteger('Deleted')->default('0');
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
        Schema::dropIfExists('customer_messages');
    }
};
