<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectiondsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectionds', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->integer('monthly_id');
			$table->integer('cmf');
			$table->integer('cwf');
			$table->integer('cyf');
			$table->integer('rc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sectionds');
    }
}
