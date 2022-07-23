<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpriencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expriences', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->string('company_name');
            $table->string('exp_year_start');
            $table->string('exp_year_end');
            $table->string('exp_description');
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
        Schema::dropIfExists('expriences');
    }
}
