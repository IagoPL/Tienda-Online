<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('books', function (Blueprint $table) {
            

            $table->engine="InnoDB";
            $table->increments('id');
            $table->bigInteger('id_Category')-> unsigned();
            $table->string('name');
            $table->timestamps();
            
            $table-> foreign('id_Category')->references('id')->on('category')->onDelete("cascade");
        
        });
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
};
