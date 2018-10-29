<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHxdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('hospital', function (Blueprint $table) {
            $table->increments('id');
            $table->string('h_name','30');
			$table->string('h_semester','8');
        });
		 Schema::create('department', function (Blueprint $table) {
            $table->increments('id');
            $table->string('d_name','50');
			$table->string('d_refname','50');
			$table->string('d_semester','8');
        });
		 Schema::create('departmentreference', function (Blueprint $table) {
            $table->string('drfid','11')->unique();
			$table->string('drf_name','50');
			$table->string('c_name','50');
			$table->string('en_name','100');
			$table->string('credit_num','4');
			$table->string('is_required','3');
			$table->string('df_semester','8');
        });
		 Schema::create('hospitalXdepartment', function (Blueprint $table) {
            $table->increments('id');
			$table->string('h_id','8');
			$table->string('d_id','8');
			$table->string('ref_id','11');
            $table->string('hxd_semester','8');
            $table->unique(['h_id', 'd_id', 'ref_id', 'hxd_semester'], 'hxd');
        });
		
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospital');
		Schema::dropIfExists('department');
		Schema::dropIfExists('departmentreference');
		Schema::dropIfExists('hospitalXdepartment');
    }
}
