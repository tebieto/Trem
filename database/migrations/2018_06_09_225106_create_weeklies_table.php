<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeekliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weeklies', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->integer('user_id');
			$table->string('type');
			$table->string('name');
			$table->string('branch');
			$table->date('date');
			$table->string('event');
			$table->integer('men');
			$table->integer('women');
			$table->integer('children');
			$table->integer('total');
			$table->string('preacher');
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weeklies');
    }
}
