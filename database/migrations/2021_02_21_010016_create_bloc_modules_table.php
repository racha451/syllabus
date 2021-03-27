<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Bloc;
use App\Modules;
class CreateBlocModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloc_modules', function (Blueprint $table) {
         
			$table->increments('id');
			$table->integer('bloc_id');
			$table->integer('modules_id');
			$table->string('status');
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bloc_modules');
    }
}
