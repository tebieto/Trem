<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectiones', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->integer('monthly_id');
			$table->integer('newcells');
			$table->integer('totalcells');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sectiones');
    }
}
