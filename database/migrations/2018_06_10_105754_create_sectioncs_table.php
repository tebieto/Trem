<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectioncsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectioncs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->integer('monthly_id');
			$table->integer('councilmeetings');
			$table->integer('specialactivities');
			$table->string('specialcomments');
			$table->integer('branchprojects');
			$table->string('projectcomments');
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sectioncs');
    }
}
