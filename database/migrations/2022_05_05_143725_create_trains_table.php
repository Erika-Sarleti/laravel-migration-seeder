<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('codice_treno', 50);
            $table->string('azienda', 100);
            $table->string('stazione_partenza', 50);
            $table->string('stazione_arrivo', 50);
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table->smallInteger('n_carrozze');
            $table->string('in_orario', 3);
            $table->string('cancellato', 3);
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
        Schema::dropIfExists('trains');
    }
}
