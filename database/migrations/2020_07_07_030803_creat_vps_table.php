<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatVpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   Schema::create('vps',function (Blueprint $table)
    {
        $table->bigIncrements('id');
        $table->string('name');
        $table->timestamps();
        $table->string('type');
        $table->string('price');
        $table->string('bandwidth');
        $table->string('core');
        $table->json('user');


    });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vps');//
    }
}
