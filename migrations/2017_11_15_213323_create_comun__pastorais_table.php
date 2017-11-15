<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComunPastoraisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comun_pastorais', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('comunidades_id')->unsigned();
            $table->integer('pastorais_id')->unsigned();
            $table->timestamps();           

            $table->foreign('comunidades_id')
                            ->references('id')
                            ->on('comunidades')
                            ->onDelete('cascade');

            $table->foreign('pastorais_id')
                            ->references('id')
                            ->on('pastorais')
                            ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comun__pastorais');
    }
}
