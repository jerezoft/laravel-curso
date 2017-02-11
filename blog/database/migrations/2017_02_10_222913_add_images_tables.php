<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImagesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
              $table->increments('id');
//--------------------------Laves Foraneas-----------------------------------------------
          

            $table->integer('article_id')->unsigned();
               $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
//------------------------------------------------------- --------------------------------------  
            $table->string('name');
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
        Schema::dropIfExists('images');
    }
}
