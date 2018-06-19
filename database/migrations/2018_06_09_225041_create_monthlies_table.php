<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonthliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monthlies', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->integer('user_id');
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
        Schema::dropIfExists('monthlies');
    }
}
