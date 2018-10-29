<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group', function (Blueprint $table) {
            $table->increments('id');
            $table->string('t_id','30');
			$table->string('bgroup','10')->nullable();
			$table->string('sgroup','10')->nullable();
			$table->string('st_id','30');
			$table->string('st_hospital','10')->nullable();
			$table->string('st_code','10')->nullable();
			$table->string('st_art','10')->nullable();
			$table->string('g_semester','8');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group');
    }
}
