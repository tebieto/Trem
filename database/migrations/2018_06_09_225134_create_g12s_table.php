<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG12sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g12s', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->integer('user_id');
			$table->integer('weeknumber');
			$table->integer('attendance');
			$table->string('type');
			$table->string('name');
			$table->string('branch');
			$table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g12s');
    }
}
