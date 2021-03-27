<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
			$table->string('code');
			$table->string('intitulé_en')->nullable();;
            $table->string('intitulé_fr')->nullable();;
			$table->string('localisation')->nullable();;
            $table->string('IPetDevoirs')->nullable();;
			$table->string('TDetDevoir')->nullable();;
			$table->decimal('TD')->nullable();;
			$table->decimal('TP')->nullable();
			$table->decimal('PRaut')->nullable();;
			$table->decimal('Sout')->nullable();;
			$table->decimal('examen')->nullable();;
			$table->string('statut')->nullable();;
			$table->decimal('coefficient')->nullable();;
			$table->bigInteger('ECTS')->nullable();;
			$table->text('charge_travail')->nullable();;
			$table->text('resume')->nullable();;
			$table->text('objectis')->nullable();;
			$table->text('prerequis')->nullable();;
			$table->text('methodologie')->nullable();;
			$table->string('evaluation')->nullable();;
			$table->string('support')->nullable();
			$table->text('bibliographie')->nullable();
			$table->text('mots_cles')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('modules');
    }
	
	
	
	
	public function blocs()
	{
		return $this->belongsToMany('App\Bloc');
	}
	
	
}
