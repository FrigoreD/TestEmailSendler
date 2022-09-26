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
        Schema::create('emails', Function(Blueprint $table) {
            $table->string('email')->index()->unique();
            $table->boolean('checked');
            $table->boolean('valid');
        });

        Schema::table('users', function ($table){
            $table->foreign('email')->references('email')->on('emails');
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
};
