<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElectcourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electcourse', function (Blueprint $table) {
            $table->increments('id');
			$table->string('st_id','30');
			$table->string('hd_id','8');
			$table->string('p_id','8');
			$table->string('e_semester','8');
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
        Schema::dropIfExists('electcourse');
    }
}
