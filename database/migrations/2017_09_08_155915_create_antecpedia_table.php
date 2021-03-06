<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntecpediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('antecpedia', function (Blueprint $table) {
        $table->int('id',11);
        $table->text('PES_ANP');

        $table->integer('ID_COE')->unsigned();
        $table->foreign('ID_COE')->references('id')->on('consultaext');



            $table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
